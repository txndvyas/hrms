<template>
    <div class="container-fluid">
        <!-- Show spinner while loading -->
        <div v-if="isLoading" class="loading-spinner-overlay">
            <div class="spinner"></div>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Company</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Designation</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Designations</h4>
                        <router-link to="/company/designation/create" class="btn btn-primary btn-sm">Add
                            Designation</router-link>
                        <!-- <a href="/company/department/add" class="btn btn-primary">Add Department</a> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="designationTable" class="display table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Parent</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="designation in designations" :key="designation.uuid">
                                        <td>{{ designation.id }}</td>
                                        <td>{{ designation.name }}</td>
                                        <td>{{ designation.description }}</td>
                                        <td>
                                            {{ getParentName(designation.parent_id) }}
                                        </td>
                                        <td>
                                            <div class="custom-control custom-switch toggle-switch text-left mb-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    :id="'customSwitch' + designation.id"
                                                    :checked="isActive(designation.status)">
                                                <label class="custom-control-label"
                                                    :for="'customSwitch' + designation.id"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button @click="editDesignation(designation)"
                                                    class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i>Edit</button>
                                                <button @click="deleteDesignation(designation.uuid)"
                                                    class="btn btn-danger btn-xs sharp mr-1"><i
                                                        class="fa fa-trash"></i>Delete</button>

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
            designations: [],
            parentDesignations: [],
            isLoading: false,  // Add a loading state
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

            const response = await fetchData('/designation');
            //const parentResponse = await fetchData('/designation');

            console.log(response.status);

            if(response.status === 'Success')
            {
                this.designations = response.data;
                this.parentDesignations = response.data;
                this.$nextTick(() => {
                    $('#designationTable').DataTable({
                        autoWidth: true
                    });
                });
            }
        }
        catch (error)
        {
            showToast('error', 'Error', 'Failed to load departments');
        }
        finally
        {
            this.isLoading = false; // Set loading to false after data is fetched
        }
    },
    methods: {
        getParentName(parent_id) {
            const parent = this.parentDesignations.find(parent => parent.id === parent_id);
            return parent ? parent.name : 'N/A';
        },
        isActive(status) {
            return status !== null && status !== 'Inactive';
        },
        editDesignation(designation) {
            this.$router.push({ name: 'editDesignation', params: { uuid: designation.uuid } });
        },
        async deleteDesignation(uuid) {

            const confirmed = await confirmDelete();
            this.isLoading = true; // Set loading to true when data starts fetching

            if (confirmed) {
                try {
                    const token = localStorage.getItem('authToken');

                    if(token)
                    {
                        axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                    }

                    const response = await deleteData(`/designation/${uuid}`);

                    if (response.status === 'Success')
                    {
                        this.designations = this.designations.filter(designation => designation.uuid !== uuid);
                        $('#designationTable').DataTable().destroy();
                        this.$nextTick(() => {
                            $('#designationTable').DataTable({
                                autoWidth: true
                            });
                        });
                        showToast('success', 'Success', 'Designation deleted successfully');
                    }
                }
                catch (error)
                {
                    showToast('error', 'Error', 'Failed to delete designation');
                }
                finally
                {
                    this.isLoading = false; // Set loading to false after data is fetched
                }

            }
        }
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
