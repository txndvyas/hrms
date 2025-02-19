<template>
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                    <form @submit.prevent="login">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="Email or Username"
                                                id="email" v-model="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="password"
                                                v-model="password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1 text-white">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="basic_checkbox_1" v-model="remember">
                                                    <label class="custom-control-label" for="basic_checkbox_1">Remember
                                                        my preference</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a class="text-white" href="/reset-password">Forgot Password?</a>
                                            </div>
                                            <div v-if="errorMessage"
                                                class="alert alert-danger alert-dismissible fade show">
                                                {{ errorMessage }}
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me
                                                In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white"
                                                href="/register">Sign up</a></p>
                                    </div>
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

import { saveData, showToast } from '@/services/api';

export default {

    data() {
        return {
            email: '',
            password: '',
            remember: false,
            errorMessage: ''
        };
    },
    methods: {
        async login() {
            try {
                const response = await saveData('/auth/login', {
                    email: this.email,
                    password: this.password,
                    remember: this.remember
                });
                if(response.status === "Success")
                {
                    const token = response.token;
                    const fullName = response.user.name;
                    const userEmail = response.user.email;

                    console.log(response.user.name);
                    localStorage.setItem('authToken', token);
                    localStorage.setItem('fullName', fullName);
                    localStorage.setItem('userEmail', userEmail);

                    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                    showToast('success', 'Success', 'Login Successful');
                    window.location.href = "/company/department";
                    //this.$router.push('/company/department'); // Use Vue Router for redirection
                }
                else
                {
                    showToast('error', 'Error', 'Login Failed');
                }
            } catch (error) {
                console.error(error);
                this.errorMessage = error.response?.data?.message || 'An error occurred during login.';
            }
        }
    }
};

</script>
