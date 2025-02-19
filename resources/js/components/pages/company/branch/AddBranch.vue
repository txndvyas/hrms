<template>
    <div class="container-fluid">
        <div v-if="isLoading" class="loading-spinner-overlay">
                <div class="spinner"></div>
        </div>
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Company</li>
                    <li class="breadcrumb-item active"><router-link to="/company/branch">branch</router-link></li>
                    <li class="breadcrumb-item">Add New</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Department</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="basic-form">
                                        <form @submit.prevent="saveBranch">
                                            <div class="form-group mb-4">
                                                <label for="branchCode">Branch Code</label>
                                                <input type="text" class="form-control input-default "
                                                    placeholder="Branch Code" id="code" v-model="branch.code" disabled>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="branchName">Branch Name</label>
                                                <input type="text" class="form-control input-default "
                                                    placeholder="Branch Name" id="name" v-model="branch.name">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="Parent">Parent</label>
                                                <select class="form-control" id="parent_id" v-model="branch.parent_id">
                                                    <option v-for="parent in parentBranches" :key="parent.id" :value="parent.id">{{parent.name}}</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="Description">Description</label>
                                                <textarea class="form-control" id="description" rows="3"
                                                    placeholder="Description" v-model="branch.description"></textarea>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="custom-control custom-switch toggle-switch text-left mb-2">
                                                    <input type="checkbox" class="custom-control-input" id="active"
                                                        v-model="branch.active">
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
                branch: {
                    code: '',
                    name: '',
                    description: '',
                    parent_id: '',
                    active: false
                },
                parentBranches: [],
                isLoading: false,  // Add a loading state
            };
        },
        async mounted() {
            this.clearForm();
            $('#parent').select2();
            await this.fetchParentBranches();
            this.generateBranchCode();
        },
        methods: {
            clearForm() {
                this.branch = {
                    code: '',
                    name: '',
                    description: '',
                    parent_id: '',
                    active: false
                };
            },
            generateBranchCode() {
                let maxCode = 0;
                this.parentBranches.forEach(branch => {
                    const codeNumber = parseInt(branch.code.split('-')[1]);
                    if (codeNumber > maxCode) {
                        maxCode = codeNumber;
                    }
                });
                this.branch.code = 'BR-' + String(maxCode + 1).padStart(3, '0');
            },
            async fetchParentBranches() {
                this.isLoading = true; // Show spinner during save
                try {
                    const token = localStorage.getItem('authToken');

                    if(token)
                    {
                        axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                    }
                    const response = await fetchData('/branch');
                    if(response.status === 'Success')
                    {
                        this.parentBranches = response.data;
                    }
                }
                catch (error)
                {
                    showToast('error', 'Error', 'Failed to load Branch');
                }
                finally
                {
                    this.isLoading = false; // Set loading to false after data is fetched
                }
            },
            async saveBranch() {
                this.isLoading = true; // Set loading to true when data starts fetching
                try {
                    const branchData = {
                        ...this.branch,
                        status: this.branch.active ? 'Active' : 'Inactive',
                    };

                    const token = localStorage.getItem('authToken');

                    if(token)
                    {
                        axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                    }

                    const response = await saveData('/branch', branchData);
                    if(response.status === 'Success')
                    {
                        showToast('success', 'Success', 'Branch saved successfully');
                        this.clearForm();
                        this.$router.push({ name: 'Branches' });
                    }
                    else
                    {
                        showToast('error', 'Failed', 'There was error saving data');
                    }
                }
                catch (error)
                {
                    showToast('error', 'Error','Failed to save Branch');
                }
                finally
                {
                    this.isLoading = false; // Set loading to false after data is fetched
                }
            },
        }
    }
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
