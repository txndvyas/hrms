<script>
import { markRaw } from 'vue';  // Import markRaw

import Basic from './parts/Basic.vue';
import Account from './parts/Account.vue';
import Contact from './parts/Contact.vue';
import Document from './parts/Document.vue';
import Employment from './parts/Employment.vue';
import Experience from './parts/Experience.vue';
import Qualification from './parts/Qualification.vue';
import UserLogin from './parts/UserLogin.vue';
import Workshift from './parts/Workshift.vue';


export default{
    data(){
        return{
            selectedTab: 0,
            tabs:[
                {
                    title: 'Basic',
                    component: markRaw(Basic),
                },
                {
                    title: 'Account',
                    component: markRaw(Account),
                },
                {
                    title: 'Contact',
                    component: markRaw(Contact),
                },
                {
                    title: 'Document',
                    component: markRaw(Document),
                },
                {
                    title: 'Employment',
                    component: markRaw(Employment),
                },
                {
                    title: 'Experience',
                    component: markRaw(Experience),
                },
                {
                    title: 'Qualification',
                    component: markRaw(Qualification),
                },
                {
                    title: 'User Login',
                    component: markRaw(UserLogin),
                },
                {
                    title: 'Work Shift',
                    component: markRaw(Workshift),
                },
            ],
        };
    },
    methods:{
        selectTab(index){
            this.selectedTab = index;
        },
    },
};
</script>
<template>
    <div class="container-fluid">
        <!-- <div v-if="isLoading" class="loading-spinner-overlay">
            <div class="spinner"></div>
        </div> -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Employee</li>
                <li class="breadcrumb-item active"><router-link to="/company/branch">Employees</router-link></li>
                <li class="breadcrumb-item">On Boarding</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Employee Onboarding</h4>
                    </div>
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation" v-for="(tab, index) in tabs" :key="index">
                                        <a class="nav-link" :class="{ active: selectedTab === index }" href="#" @click="selectTab(index)">{{ tab.title }}</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div
                                        class="tab-pane fade"
                                        :class="{ 'show active': selectedTab === index }"
                                        v-for = "(tab, index) in tabs"
                                        :key = "index"
                                        :id = "'tab' + index">
                                        <component :is="tab.component" />
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
