<template>
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="ai-icon" href="index.php" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-home"></i>
                        <span class="nav-text">Company</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <router-link to="/company/department">Department</router-link>
                        </li>
                        <li> <router-link to="/company/designation">Designation</router-link></li>
                        <li> <router-link to="/company/branch">Branch</router-link></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-user-9"></i>
                        <span class="nav-text">Employees</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><router-link to="/employees">Employee List</router-link></li>
                        <li><router-link to="/employee/create">On Boarding</router-link></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-user-7"></i>
                        <span class="nav-text">Attendence</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./chart-flot.html">Workshift</a></li>
                        <li><a href="./chart-morris.html">Timesheet</a></li>
                        <li><a href="./chart-chartjs.html">Attendence</a></li>
                        <li><a href="./chart-chartist.html">Attendence Type</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-clock"></i>
                        <span class="nav-text">Leave</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./ui-accordion.html">Leave Request</a></li>
                        <li><a href="./ui-alert.html">Leave Allocation</a></li>
                        <li><a href="./ui-badge.html">Leave Type</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-calendar-4"></i>
                        <span class="nav-text">Payroll</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./ui-accordion.html">Payroll</a></li>
                        <li><a href="./ui-alert.html">salary Structure</a></li>
                        <li><a href="./ui-badge.html">Salary Template</a></li>
                        <li><a href="./ui-badge.html">Pay Head</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-division"></i>
                        <span class="nav-text">Finance</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./ui-accordion.html">Payment Method</a></li>
                        <li><a href="./ui-alert.html">Ledger Type</a></li>
                        <li><a href="./ui-badge.html">Ledger</a></li>
                        <li><a href="./ui-badge.html">Transaction</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-calendar-6"></i>
                        <span class="nav-text">Calendar</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./ui-accordion.html">Holidays</a></li>
                    </ul>
                </li>
                <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-list-1"></i>
                        <span class="nav-text">Task</span>
                    </a>
                </li>
                <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-user-7"></i>
                        <span class="nav-text">User</span>
                    </a>
                </li>
                <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-edit"></i>
                        <span class="nav-text">Custom Fields</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-success-2"></i>
                        <span class="nav-text">Utility</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./ui-accordion.html">Todo</a></li>
                        <li><a href="./ui-alert.html">Activity Log</a></li>
                        <li><a href="./ui-badge.html">Backup</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-switch-3"></i>
                        <span class="nav-text">Config</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./ui-accordion.html">General Config</a></li>
                        <li><a href="./ui-alert.html">Asset Config</a></li>
                        <li><a href="./ui-badge.html">System Config</a></li>
                        <li><a href="./ui-badge.html">Authentication</a></li>
                        <li><a href="./ui-badge.html">Mail Config</a></li>
                        <li><a href="./ui-badge.html">SMS Config</a></li>
                        <li><a href="./ui-badge.html">Notification</a></li>
                        <li><a href="./ui-badge.html">Chat</a></li>
                        <li><a href="./ui-badge.html">Mail Template</a></li>
                        <li><a href="./ui-badge.html">SMS Template</a></li>
                        <li><a href="./ui-badge.html">Push Notification Template</a></li>
                        <li><a href="./ui-badge.html">Features</a></li>
                        <li><a href="./ui-badge.html">Modules</a></li>
                        <li><a href="./ui-badge.html">Social Network</a></li>
                        <li><a href="./ui-badge.html">Locale</a></li>
                    </ul>
                </li>
            </ul>
            <div class="copyright">
                <p><strong>TX HRMS Admin Dashboard</strong> © 2020 All Rights Reserved</p>
                <p>Made with <span class="heart"></span> by TConnectX Solutions</p>
            </div>
        </div>
    </div>
</template>
