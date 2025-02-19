<template>

    <div class="container-fluid">
        <div v-if="isLoading" class="loading-spinner-overlay">
            <div class="spinner"></div>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Company</li>
                <li class="breadcrumb-item active"><router-link to="/company/branch">branch</router-link></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header mt-0">
                        <h4 class="card-title">Branches</h4>
                        <router-link to="/company/branch/create" class="btn btn-primary btn-sm">Add
                            Branch</router-link>
                        <!-- <a href="/company/department/add" class="btn btn-primary">Add Department</a> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="branchTable" class="display table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Branch Code</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Parent</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="branch in branches" :key="branch.uuid">
                                        <td>{{ branch.id }}</td>
                                        <td>{{ branch.code }}</td>
                                        <td>{{ branch.name }}</td>
                                        <td>{{ branch.description }}</td>
                                        <td>
                                            {{ getParentName(branch.parent_id) }}
                                        </td>
                                        <td>
                                            <div class="custom-control custom-switch toggle-switch text-left mb-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    :id="'customSwitch' + branch.id" :checked="isActive(branch.status)">
                                                <label class="custom-control-label"
                                                    :for="'customSwitch' + branch.id"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button @click="editBranch(branch)"
                                                    class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></button>
                                                <button @click="deleteBranch(branch.uuid)"
                                                    class="btn btn-danger btn-xs sharp mr-1"><i
                                                        class="fa fa-trash"></i></button>
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
    </div>
</template>
<script>

import { fetchData, deleteData, confirmDelete, showToast } from '@/services/api'

export default {
    data() {
        return {
            branches: [],
            parentBranches: [],
            isLoading: false
        };
    },
    async mounted() {
        this.isLoading = true; // Set loading to true when data starts fetching
        try {
                const token = localStorage.getItem('authToken');

                if(token)
                {
                    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                }
                const response = await fetchData('/branch');



                this.branches = response.data;
                const parentBranches = await fetchData('/branch');
                if(parentBranches.status === 'Success')
                {
                    this.parentBranches = response.data;
                    this.$nextTick(() => {
                        $('#branchTable').DataTable({
                            autoWidth: true
                        });
                    });
                }
            }
            catch (error)
            {
                showToast('error', 'Error', 'Failed to load branches');
            }
            finally
            {
            this.isLoading = false; // Set loading to false after data is fetched
            }
    },
    methods: {
        getParentName(parent_id) {
            const parent = this.parentBranches.find(parent => parent.id === parent_id);
            return parent ? parent.name : 'N/A';
        },
        //Delete Branch Data based on UUID
        async deleteBranch(uuid) {
            const confirmed = await confirmDelete();

            this.isLoading = true; // Set loading to true when data starts fetching

            if (confirmed) {
                try {
                    const token = localStorage.getItem('authToken');

                    if(token)
                    {
                        axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                    }

                    this.branches = this.branches.filter(branch => branch.uuid !== uuid);
                    await deleteData(`/branch/${uuid}`);


                    $('#branchTable').DataTable().destroy();
                        this.$nextTick(() => {
                            $('#branchTable').DataTable({
                                autoWidth: true
                            });
                        });
                    showToast('success', 'Success', 'Branch deleted successfully');

                }
                catch (error)
                {

                    if (error.response && error.response.status === 403)
                    {
                        showToast('error', 'Error', 'You are not authorized to delete this branch.');
                    }
                    else
                    {
                        showToast('error', 'Error', 'There was an error deleting the branch.');
                    }
                }
                finally
                {
                    this.isLoading = false; // Set loading to false after data is fetched
                }

            }
        },
        //if the Branch is marked as active the table shows the switch
        //with the checked attribute set to true
        isActive(status) {
            return status !== null && status !== 'Inactive';
        },
        //Get UUID and pass into URL and redirect to edit page
        editBranch(branch) {
            this.$router.push({ name: 'editBranch', params: { uuid: branch.uuid } });
        },

        //
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
