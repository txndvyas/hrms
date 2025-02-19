<style scoped>
.sub-heading {
    font-size: 12px;
    font-weight: 500;
    color: #0B2A97 !important;
}

.form-header {
    border-bottom: 1px solid #f0f1f5;
    position: relative;
    background: transparent;
    justify-content: space-between;
    margin-bottom: 30px;
    align-items: center;
}

label {
    font-size: 14px;
    font-weight: 600;
    color: #000;
}
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
<script>
export default{
    data() {
        return {
            //isLoading: false
        };
    },
    mounted()
    {

        //this.isLoading = true;
    }
};

</script>
<template>
    <!-- <div v-if="isLoading" class="loading-spinner-overlay">
        <div class="spinner"></div>
    </div> -->
    <div class="form-header">
        <h2 class="text-danger">Authentication Configuration</h2>
        <p class="sub-heading text-primary">Auth related configuration.</p>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-4 mt-2">
                <div class="mb-3">
                    <label for="login-attempt" class="form-label">Login Throttle Max
                        Attempt</label>
                    <input type="text" class="form-control" id="login-attempt" placeholder="Login Throttle Max Attempt">
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="mb-3">
                    <label for="login-timeout" class="form-label">Login Throttle Lock
                        Timeout
                        (Minutes)</label>
                    <input type="text" class="form-control" id="login-timeout"
                        placeholder="Login Throttle Lock Timeout (Minutes)">
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="mb-3">
                    <label for="reset-password" class="form-label">Reset Password Token
                        Lifetime</label>
                    <input type="text" class="form-control" id="reset-password"
                        placeholder="Reset Password Token Lifetime">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="reset">
                    <label class="custom-control-label" for="reset">Reset
                        Password</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="registration">
                    <label class="custom-control-label" for="registration">Registration</label>
                    <p>If you want any one to register in your application and access
                        the application,
                        then enable this option.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="terms">
                    <label class="custom-control-label" for="terms">Show Terms on
                        Registration</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="email-verification">
                    <label class="custom-control-label" for="email-verification">Email
                        Verification</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="approval">
                    <label class="custom-control-label" for="approval">Account Approval
                    </label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="oauth">
                    <label class="custom-control-label" for="oauth">oAuth Login</label>
                </div>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row">
            <div class="form-group">
                <button type="button" class="btn btn-primary mr-4">Save</button>
                <button type="button" class="btn btn-danger">clear</button>
            </div>
        </div>
    </form>
</template>
