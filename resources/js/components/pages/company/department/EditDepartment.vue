<template>
    <div class="container-fluid">
        <div v-if="isLoading" class="loading-spinner-overlay">
            <div class="spinner"></div>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Company</li>
                <li class="breadcrumb-item active"><router-link to="/company/department">Department</router-link></li>
                <li class="breadcrumb-item">Create</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Department</h4>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="updateDepartment">
                            <div class="form-group mb-4">
                                <label for="departmentName">Department Name</label>
                                <input type="text" class="form-control input-default" placeholder="Department Name" id="departmentName" v-model="department.name">
                            </div>
                            <div class="form-group mb-4">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="3" placeholder="Description" v-model="department.description"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <div class="custom-control custom-switch toggle-switch text-left mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch11" v-model="department.active">
                                    <label class="custom-control-label" for="customSwitch11">Active / InActive</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mr-2 mt-2">Save</button>
                                <button type="button" class="btn btn-danger mt-2" @click="clearForm">Clear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { fetchData, updateData, showToast } from '@/services/api';

export default {
    data() {
        return {
            department: {
                name: '',
                description: '',
                active: false,
            },
            error: '',
            isLoading: false
        };
    },
    mounted() {
        this.fetchDepartment();
    },
    methods: {
        async fetchDepartment() {

            const uuid = this.$route.params.uuid;
            this.isLoading = true;

            try {
                const token = localStorage.getItem('authToken');
                if(token){
                    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                }

                const response = await fetchData(`/department/${uuid}`);

                if(response.status === 'Success')
                {
                    this.department = response.data;
                    this.department.active = this.department.status === 'Active';
                }
                else
                {
                    showToast('error', 'Error', 'Failed to Load Department');
                }
            }
            catch (error)
            {
                showToast('error', 'Error', error);
            }
            finally
            {
                this.isLoading = false;
            }
        },
        async updateDepartment() {
            const uuid = this.$route.params.uuid;
            this.isLoading = true;

            try {
                const departmentData = {
                    ...this.department,
                    status: this.department.active ? 'Active' : 'Inactive'
                };
                const token = localStorage.getItem('authToken');

                if(token){
                    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                }

                const response = await updateData(`/department/edit/${uuid}`, departmentData);

                if (response.status === 'Success') {
                    this.$router.push({ name: 'Departments' });
                    showToast('success', 'Success', 'Department Updated');
                }
                else
                {
                    showToast('error','Error', 'Failed to Update');
                }
            }
            catch (error)
            {
                showToast('error','Error', error);
            }
            finally
            {
                this.isLoading = false;
            }
        },
        clearForm() {
            this.department.name = '';
            this.department.description = '';
            this.department.active = false;
        }
    }
};
</script>
<style scoped>
/* Overlay that covers the entire screen */
.loading-spinner-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    /* Ensure the spinner is above other elements */
}

/* Simple spinner */
.spinner {
    border: 8px solid #f3f3f3;
    /* Light grey */
    border-top: 8px solid #3498db;
    /* Blue */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
}

/* Animation for spinner */
@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
</style>
