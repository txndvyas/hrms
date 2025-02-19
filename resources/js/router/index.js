import { createRouter, createWebHistory } from 'vue-router';

import Departments from '../components/pages/company/department/Departments.vue';
import AddDepartment from '../components/pages/company/department/AddDepartment.vue';
import EditDepartment from '../components/pages/company/department/EditDepartment.vue';
import CreateTeam from '../components/pages/team/CreateTeam.vue';
import AddDesignation from '../components/pages/company/designation/AddDesignation.vue';
import Designations from '../components/pages/company/designation/Designations.vue';
import EditDesignation from '../components/pages/company/designation/EditDesignation.vue';

import Branches from '../components/pages/company/branch/Branches.vue';
import AddBranch from '../components/pages/company/branch/AddBranch.vue';
import EditBranch from '../components/pages/company/branch/EditBranch.vue';

import Employees from '../components/pages/employee/Employees.vue';
import AddEmployee from '../components/pages/employee/AddEmployee.vue';
import EditEmployee from '../components/pages/employee/EditEmployee.vue';
import GeneralConfig from '../components/pages/config/Configuration.vue';

const routes = [
    {
        path: '/create-team',
        name: 'createTeam',
        component: CreateTeam
    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Departments
    },
    //Company Department
    {
        path: '/company/department',
        name: 'Departments',
        component: Departments,
        meta: { requiresAuth: true }
    },
    {
        path: '/company/department/create',
        name: 'AddDepartment',
        component: AddDepartment,
        meta: { requiresAuth: true }
    },
    {
        path: '/company/department/edit/:uuid',
        name: 'EditDepartment',
        component: EditDepartment,
        meta: { requiresAuth: true }
    },

    //Company Designation
    {
        path: '/company/designation',
        name: 'Designations',
        component: Designations,
        meta: { requiresAuth: true }
    },
    {
        path: '/company/designation/create',
        name: 'AddDesignation',
        component: AddDesignation,
        meta: { requiresAuth: true }
    },
    {
        path: '/company/designation/edit/:uuid',
        name: 'editDesignation',
        component: EditDesignation,
        meta: { requiresAuth: true }
    },

    //Company Branches
    {
        path: '/company/branch',
        name: 'Branches',
        component: Branches,
        meta: { requiresAuth: true }

    },
    {
        path: '/company/branch/create',
        name: 'AddBranch',
        component: AddBranch,
        meta: { requiresAuth: true }
    },
    {
        path: '/company/branch/edit/:uuid',
        name: 'editBranch',
        component: EditBranch,
        meta: { requiresAuth: true }
    },
    //Employee
    {
        path: '/employees',
        name: 'employees',
        component: Employees,
        meta: { requiresAuth: true }

    },
    {
        path: '/employee/create',
        name: 'addEmployee',
        component: AddEmployee,
        meta: { requiresAuth: true }
    },
    {
        path: '/employee/edit/',
        name: 'editEmployee',
        component: EditEmployee,
        meta: { requiresAuth: true }
    },
    {
        path: '/config',
        name: 'appConfig',
        component: GeneralConfig,
        meta: { requiresAuth: true}
    },



    //Company Leave
    //Company Attendance
    //Company Payroll
    //Company Holiday
    //Company Announcement

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

// Add navigation guard
router.beforeEach((to, from, next) => {
    const token = localStorage.getItem('authToken');

    if (to.matched.some(record => record.meta.requiresAuth) && !token) {
        window.location.href='/';
    } else {
        next(); // Proceed to the route
    }
});

export default router;
