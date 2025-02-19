<script>

import { markRaw } from 'vue';  // Import markRaw

import Assets from './parts/Assets.vue';
import Authentication from './parts/Authentication.vue';
import Chat from './parts/Chat.vue';
import Feature from './parts/Feature.vue';
import General from './parts/General.vue';
import MailConfig from './parts/MailConfig.vue';
import Notification from './parts/Notification.vue';
import SmsConfig from './parts/SmsConfig.vue';
import Social from './parts/Social.vue';
import System from './parts/System.vue';


export default{
    data(){
        return{
            selectedTab: 0,
            tabs:[
                {
                    title: 'Assets',
                    component: markRaw(Assets),
                },
                {
                    title: 'Authentication',
                    component: markRaw(Authentication),
                },
                {
                    title: 'Chat',
                    component: markRaw(Chat),
                },
                {
                    title: 'Feature',
                    component: markRaw(Feature),
                },
                {
                    title: 'General',
                    component: markRaw(General),
                },
                {
                    title: 'Mail Config',
                    component: markRaw(MailConfig),
                },
                {
                    title: 'Notification',
                    component: markRaw(Notification),
                },
                {
                    title: 'SMS Configuration',
                    component: markRaw(SmsConfig),
                },
                {
                    title: 'Social',
                    component: markRaw(Social),
                },
                {
                    title: 'System',
                    component: markRaw(System),
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
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="javascript:void(0)">Configuration</a>
                </li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs d-block" id="configTabs" role="tablist">
                                    <li class="nav-item" role="presentation" v-for="(tab, index) in tabs" :key="index">
                                        <a class="nav-link" :class="{ active: selectedTab === index }" href="#" @click="selectTab(index)">{{ tab.title }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <div class="tab-content mt-3" id="configTabContent">

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
