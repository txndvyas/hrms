import axios from 'axios';
import toastr from 'toastr';
import 'toastr/build/toastr.min.css';
import Swal from 'sweetalert2';

// Set the base URL for your API (can be configured in environment variables)
axios.defaults.baseURL = '/api';

const configureToastr = (type) => {
    toastr.options = {
      closeButton: true,
      debug: false,
      newestOnTop: false,
      progressBar: true,
      positionClass: 'toast-top-right',
      toastClass: type === 'success' ? 'toast-success custom-toast-color' : 'toast-error custom-toast-color',
      preventDuplicates: false,
      showDuration: '300',
      hideDuration: '1000',
      timeOut: '3000',
      extendedTimeOut: '1000',
      showEasing: 'swing',
      hideEasing: 'linear',
      showMethod: 'fadeIn',
      hideMethod: 'fadeOut',
    };
  };


// Helper function to show toasts (success or error)
export const showToast = (type, title, message) => {
    configureToastr(type);
    type === 'success' ? toastr.success(title, message) : toastr.error(title, message);
  };

  // General helper for API requests (GET, POST, PUT, DELETE)
const makeApiRequest = async (method, endpoint, data = null) => {
    try {
      const url = `${endpoint}`;
      const response = await axios({
        method,
        url,
        data,
      });
      return response.data;

    } catch (error) {
      showToast('error', 'Error', 'An error occurred with the API request.');
      throw error; // Propagate error for further handling
    }
  };

// Helper functions for specific HTTP methods
export const fetchData = async (endpoint) => makeApiRequest('get', endpoint);
export const saveData = async (endpoint, data) => makeApiRequest('post', endpoint, data);
export const updateData = async (endpoint, data) => makeApiRequest('put', endpoint, data);
export const deleteData = async (endpoint) => makeApiRequest('delete', endpoint);

// Delete confirmation using SweetAlert2
export const confirmDelete = async (message = 'Are you sure you want to delete this item?') => {
    const result = await Swal.fire({
      title: message,
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
    });
    return result.isConfirmed;
  };
