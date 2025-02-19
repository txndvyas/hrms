<template>
    <div class="container-fluid">
         <!-- Show spinner while loading -->
         <div v-if="isLoading" class="loading-spinner-overlay">
            <div class="spinner"></div>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Company</li>
                <li class="breadcrumb-item active"><router-link to="/company/designation">Designation</router-link></li>
                <li class="breadcrumb-item">Create</li>
            </ol>
        </div>
        <div clas="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Department</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="basic-form">
                                    <form @submit.prevent="saveDesignation">
                                        <div class="form-group mb-4">
                                            <label for="departmentName">Designation</label>
                                            <input type="text" class="form-control input-default "
                                                placeholder="Designation Name" id="name" v-model="designation.name">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="Parent">Parent</label>
                                            <select class="form-control" id="parent_id" v-model="designation.parent_id">
                                                <option v-for="parent in parentDesignations" :key="parent.id" :value="parent.id">{{parent.name}}</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="Description">Description</label>
                                            <textarea class="form-control" id="description" rows="3"
                                                placeholder="Description" v-model="designation.description"></textarea>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="custom-control custom-switch toggle-switch text-left mb-2">
                                                <input type="checkbox" class="custom-control-input" id="active"
                                                    v-model="designation.active">
                                                <label class="custom-control-label" for="active">Active /
                                                    InActive</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary mr-2 mt-2">Save</button>

                                            <button type="button" class="btn btn-danger"
                                                @click="clearForm">clear</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

import { fetchData, saveData, showToast } from '@/services/api';

export default {
    data() {
        return {
            designation: {
                name: '',
                description: '',
                parent_id: '',
                active: false
            },
            parentDesignations: [],
            isLoading: false,  // Add a loading state
        };
    },
    mounted() {
        this.clearForm();
        $('#parent').select2();
        this.fetchParentDesignations();

    },
    methods: {
        async saveDesignation() {
            this.isLoading = true; // Set loading to true when data starts fetching
            const designationData = {
                    ...this.designation,
                    status: this.designation.active ? 'Active' : 'Inactive',
                };

            try {
                const token = localStorage.getItem('authToken');

                if(token)
                {
                    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                }
                const response = await saveData('/designation', designationData);

                if(response.status === 'Success')
                {
                    showToast('success', 'Success', 'Designation saved successfully');
                    this.clearForm();
                    this.fetchParentDesignations();
                    this.$router.push({ name: 'Designations' });
                }
                else
                {
                    showToast('error', 'Failed', 'There was error saving data');
                }
            }
            catch (error)
            {
                showToast('error', 'Error','Failed to save department');
            }
            finally
            {
                this.isLoading = false; // Set loading to false after data is fetched
            }
        },
        clearForm() {
            this.designation = {
                name: '',
                description: '',
                parent_id: '',
                active: false
            };
        },
        async fetchParentDesignations() {
            this.isLoading = true; // Show spinner during save
            try {

                const token = localStorage.getItem('authToken');

                if(token)
                {
                    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                }
                const response = await fetchData('/designation');

                if(response.status === 'Success')
                {
                    this.parentDesignations = response.data;
                }
            }
            catch (error)
            {
                showToast('error', 'Error', 'Failed to load Designations');
            }
            finally
            {
                this.isLoading = false; // Set loading to false after data is fetched
            }
        },

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
  z-index: 9999; /* Ensure the spinner is above other elements */
}

/* Simple spinner */
.spinner {
  border: 8px solid #f3f3f3; /* Light grey */
  border-top: 8px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 2s linear infinite;
}

/* Animation for spinner */
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
