/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import router from './router';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});


import ChatComponent from './components/pages/chat/ChatComponent.vue';



import RegistrationComponent from './components/auth/Register.vue';
import LoginComponent from './components/auth/Login.vue';
import ForgetPassword from './components/auth/PasswordReset.vue';
import HeaderComponent from './components/partials/Header.vue';
import FooterComponent from './components/partials/Footer.vue';
import SideBarComponent from './components/partials/Sidebar.vue';

/* Parts -> Configuration */

import Assets from './components/pages/config/parts/Assets.vue';
import Authentication from './components/pages/config/parts/Authentication.vue';
import Chat from './components/pages/config/parts/Chat.vue';
import Feature from './components/pages/config/parts/Feature.vue';
import General from './components/pages/config/parts/General.vue';
import MailConfig from './components/pages/config/parts/MailConfig.vue';
import Notification from './components/pages/config/parts/Notification.vue';
import SmsConfig from './components/pages/config/parts/SmsConfig.vue';
import Social from './components/pages/config/parts/Social.vue';
import System from './components/pages/config/parts/System.vue';

/* Parts -> Employee Onboard */

import Basic from './components/pages/employee/parts/Basic.vue';
import Account from './components/pages/employee/parts/Account.vue';
import Contact from './components/pages/employee/parts/Contact.vue';
import Document from './components/pages/employee/parts/Document.vue';
import Employment from './components/pages/employee/parts/Employment.vue';
import Workshift from './components/pages/employee/parts/Workshift.vue';
import Experience from './components/pages/employee/parts/Experience.vue';
import Qualification from './components/pages/employee/parts/Qualification.vue';
import UserLogin from './components/pages/employee/parts/UserLogin.vue';

/* PrimeVue Components */
app.component('chat-component', ChatComponent);
app.component('login', LoginComponent);
app.component('register', RegistrationComponent);
app.component('forget-password', ForgetPassword);
app.component('header-component', HeaderComponent);
app.component('footer-component', FooterComponent);
app.component('sidebar-component', SideBarComponent);

/* Config Parts -> register component */
app.component('assets', Assets);
app.component('authentication', Authentication);
app.component('chat', Chat);
app.component('feature', Feature);
app.component('general', General);
app.component('mail-config', MailConfig);
app.component('notification', Notification);
app.component('sms-config', SmsConfig);
app.component('social', Social);
app.component('system', System);

/* Employee Parts -> register Component */
app.component('basic', Basic);
app.component('account', Account);
app.component('contact', Contact);
app.component('document', Document);
app.component('employment', Employment);
app.component('experience', Experience);
app.component('qualification', Qualification);
app.component('userlogin', UserLogin);
app.component('workshift', Workshift);



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */


app.use(router);
app.mount('#app');
