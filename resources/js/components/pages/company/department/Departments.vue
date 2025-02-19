<template>
    <div class="container-fluid">
        <div v-if="isLoading" class="loading-spinner-overlay">
            <div class="spinner"></div>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Company</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Departments</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Departments</h4>
                        <router-link to="/company/department/create" class="btn btn-primary btn-sm">Add
                            Department</router-link>
                        <!-- <a href="/company/department/add" class="btn btn-primary">Add Department</a> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="departmentsTable" class="display table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Department Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="department in departments" :key="department.uuid">
                                        <td>{{ department.id }}</td>
                                        <td>{{ department.name }}</td>
                                        <td>{{ department.description }}</td>
                                        <td>
                                            <div class="custom-control custom-switch toggle-switch text-left mb-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    :id="'customSwitch' + department.id"
                                                    :checked="isActive(department.status)">
                                                <label class="custom-control-label"
                                                    :for="'customSwitch' + department.id"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button @click="editDepartment(department)"
                                                class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i>Edit</button>
                                            <button @click="deleteDepartment(department.uuid)"
                                                class="btn btn-danger btn-xs sharp mr-1"><i class="fa fa-trash"></i>Delete</button>

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
</template>
<script>

import { fetchData, deleteData, confirmDelete, showToast } from '@/services/api';

export default {
    data() {
        return {
            departments: [],
            isLoading: false
        };
    },
    mounted() {
        this.fetchDepartments();
    },
    methods: {
        async fetchDepartments() {
            this.isLoading = true;
            try {
                const token = localStorage.getItem('authToken');

                if(token){
                    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                }

                const response = await fetchData('/department');

                if(response.status === 'Success')
                {
                    this.departments = response.data;

                    this.$nextTick(() => {
                        $('#departmentsTable').DataTable({
                            autoWidth: false
                        });
                    });
                }
            }
            catch (error)
            {
                console.error("There was an error fetching the departments", error);
            }
            finally
            {
                this.isLoading = false;
            }
        },
        isActive(status) {
            return status !== null && status !== 'Inactive';
        },
        editDepartment(department) {
            this.$router.push({ name: 'EditDepartment', params: { uuid: department.uuid } });
        },
        async deleteDepartment(uuid) {
            const confirmed = await confirmDelete();

            this.isLoading = true; // Set loading to true when data starts fetching

            if (confirmed) {
                try {
                    const token = localStorage.getItem('authToken'); // Retrieve token from localStorage

                    if (token)
                    {
                        axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                    }
                    const response = await deleteData(`/department/${uuid}`);

                    this.departments = this.departments.filter(department => department.uuid !== uuid);

                    if (response.status === 'Success')
                    {
                        $('#designationTable').DataTable().destroy();
                        this.$nextTick(() => {
                            $('#designationTable').DataTable({
                                autoWidth: true
                            });
                        });
                        showToast('success', 'Success', 'Department deleted successfully');
                    }
                }
                catch (error)
                {
                    showToast('error', 'Error', error);
                }
                finally
                {
                    this.isLoading = false; // Set loading to false after data is fetched
                }

            }
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
