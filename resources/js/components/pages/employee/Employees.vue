<template>
    <div class="container-fluid">
        <div v-if="isLoading" class="loading-spinner-overlay">
            <div class="spinner"></div>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Employee</li>
                <li class="breadcrumb-item active"><router-link to="/company/branch">Employees</router-link></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Employee</h4>
                        <router-link to="/company/branch/create" class="btn btn-primary btn-sm">Add
                            Employee</router-link>
                    </div>
                    <div class="card-body tab-content pt-2">
                        <div class="tab-pane active show fade" id="Unfinished">
                            <div id="itemsContainer">
                                <!-- Static items go here -->
                                <div class="list-row">
                                    <div class="d-flex border-bottom flex-wrap pt-3 align-items-center mb-2">
                                        <div class="col-xl-8 col-xxl-8 col-lg-8 col-sm-8 d-flex align-items-center">
                                            <div class="list-icon bgl-primary mr-3 mb-3 rounded-4">
                                                <img src="/images/avatar/2.jpg" alt="user image" class="rounded-4"
                                                    style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      border-radius: 10px;
                                    " />
                                            </div>
                                            <div class="info mb-3 d-flex flex-column ml-4">
                                                <h4 class="fs-20">
                                                    <a href="workout-statistic.html" class="text-black">Cordie Weber
                                                        (ESM006)</a>
                                                </h4>
                                                <span style="font-size: 12px">48 Year Old</span>
                                                <p>CEO</p>
                                                <span class="text-danger font-w600">December 2, 2021 - Present</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 mb-3 pl-4 pr-3 text-sm-center d-flex align-items-center flex-row justify-content-center">
                                            <div class="activeNonactiveIcon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="40"
                                                    height="40" class="svgIconColorActive">
                                                    <path
                                                        d="M633.8 458.1L389.6 269.3C433.8 244.7 464 198.1 464 144 464 64.5 399.5 0 320 0c-67.1 0-123 46.1-139 108.2L45.5 3.4C38.5-2 28.5-.8 23 6.2L3.4 31.4c-5.4 7-4.2 17 2.8 22.4l588.4 454.7c7 5.4 17 4.2 22.5-2.8l19.6-25.3c5.4-6.8 4.1-16.9-2.9-22.3zM198.4 320C124.2 320 64 380.2 64 454.4v9.6c0 26.5 21.5 48 48 48h382.2L245.8 320h-47.4z" />
                                                </svg>
                                            </div>
                                            <span
                                                class="text-secondary font-weight-bold mt-2 d-flex align-items-center">
                                                <i id="statusIcon" class="bi bi-circle text-danger"
                                                    aria-hidden="true"></i>
                                                <!-- <span id="statusLabel" class="ml-2 d-flex align-content-center text-black pb-2">Inactive</span> -->
                                                <span class="text-danger font-w600 pb-2 ml-2">Inactive</span>
                                            </span>
                                        </div>

                                        <div
                                            class="col-xl-2 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center justify-content-end">
                                            <div class="dropdown mb-3 align-items-md-end">
                                                <a href="javascript:void(0)" class="more-button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="6" height="26" viewBox="0 0 6 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z"
                                                            fill="#585858"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" id="dropdownMenuButton"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-row">
                                    <div class="d-flex border-bottom flex-wrap pt-3 align-items-center mb-2">
                                        <div class="col-xl-8 col-xxl-8 col-lg-8 col-sm-8 d-flex align-items-center">
                                            <div class="list-icon bgl-primary mr-3 mb-3 rounded-4">
                                                <img src="/images/avatar/2.jpg" alt="user image" class="rounded-4"
                                                    style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      border-radius: 10px;
                                    " />
                                            </div>
                                            <div class="info mb-3 d-flex flex-column ml-4">
                                                <h4 class="fs-20">
                                                    <a href="workout-statistic.html" class="text-black">Cordie Weber
                                                        (ESM007)</a>
                                                </h4>
                                                <span style="font-size: 12px">48 Year Old</span>
                                                <p>CEO</p>
                                                <span class="text-danger font-w600">December 2, 2021 - Present</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 mb-3  pr-3 text-sm-center d-flex align-items-center flex-row justify-content-center">


                                            <div class="activeNonactiveIcon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="35"
                                                    height="35" class="svgIconColor">
                                                    <path
                                                        d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z" />
                                                </svg>
                                            </div>
                                            <span
                                                class="text-secondary font-weight-bold mt-2 d-flex align-items-center">
                                                <span class="text-success font-w600 pb-2 ml-2"
                                                    id="statusLabel">Active</span>
                                            </span>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center justify-content-end">
                                            <div class="dropdown mb-3 align-items-md-end">
                                                <a href="javascript:void(0)" class="more-button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="6" height="26" viewBox="0 0 6 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z"
                                                            fill="#585858"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" id="dropdownMenuButton"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-row">
                                    <div class="d-flex border-bottom flex-wrap pt-3 align-items-center mb-2">
                                        <div class="col-xl-8 col-xxl-8 col-lg-8 col-sm-8 d-flex align-items-center">
                                            <div class="list-icon bgl-primary mr-3 mb-3 rounded-4">
                                                <img src="/images/avatar/2.jpg" alt="user image" class="rounded-4"
                                                    style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      border-radius: 10px;
                                    " />
                                            </div>
                                            <div class="info mb-3 d-flex flex-column ml-4">
                                                <h4 class="fs-20">
                                                    <a href="workout-statistic.html" class="text-black">Cordie Weber
                                                        (ESM008)</a>
                                                </h4>
                                                <span style="font-size: 12px">48 Year Old</span>
                                                <p>CEO</p>
                                                <span class="text-danger font-w600">December 2, 2021 - Present</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 mb-3 pl-3 pr-3 text-sm-center d-flex align-items-center flex-row justify-content-center">
                                            <img src="/icons/workoutplanIcon/check.png" alt="active status"
                                                style="width: 30px; height: 30px" />
                                            <span
                                                class="text-secondary font-weight-bold mt-2 d-flex align-items-center">
                                                <i id="statusIcon" class="bi bi-circle text-danger"
                                                    aria-hidden="true"></i>
                                                <span id="statusLabel"
                                                    class="ml-2 d-flex align-content-center pb-2">Inactive</span>
                                            </span>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center justify-content-end">
                                            <div class="dropdown mb-3 align-items-md-end">
                                                <a href="javascript:void(0)" class="more-button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="6" height="26" viewBox="0 0 6 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z"
                                                            fill="#585858"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" id="dropdownMenuButton"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-row">
                                    <div class="d-flex border-bottom flex-wrap pt-3 align-items-center mb-2">
                                        <div class="col-xl-8 col-xxl-8 col-lg-8 col-sm-8 d-flex align-items-center">
                                            <div class="list-icon bgl-primary mr-3 mb-3 rounded-4">
                                                <img src="/images/avatar/2.jpg" alt="user image" class="rounded-4"
                                                    style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      border-radius: 10px;
                                    " />
                                            </div>
                                            <div class="info mb-3 d-flex flex-column ml-4">
                                                <h4 class="fs-20">
                                                    <a href="workout-statistic.html" class="text-black">Cordie Weber
                                                        (ESM009)</a>
                                                </h4>
                                                <span style="font-size: 12px">48 Year Old</span>
                                                <p>CEO</p>
                                                <span class="text-danger font-w600">December 2, 2021 - Present</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 mb-3 pl-3 pr-3 text-sm-center d-flex align-items-center flex-row justify-content-center">
                                            <img src="/icons/workoutplanIcon/check.png" alt="active status"
                                                style="width: 30px; height: 30px" />
                                            <span
                                                class="text-secondary font-weight-bold mt-2 d-flex align-items-center">
                                                <i id="statusIcon" class="bi bi-circle text-danger"
                                                    aria-hidden="true"></i>
                                                <span id="statusLabel"
                                                    class="ml-2 d-flex align-content-center pb-2">Inactive</span>
                                            </span>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center justify-content-end">
                                            <div class="dropdown mb-3 align-items-md-end">
                                                <a href="javascript:void(0)" class="more-button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="6" height="26" viewBox="0 0 6 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z"
                                                            fill="#585858"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" id="dropdownMenuButton"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-row">
                                    <div class="d-flex border-bottom flex-wrap pt-3 align-items-center mb-2">
                                        <div class="col-xl-8 col-xxl-8 col-lg-8 col-sm-8 d-flex align-items-center">
                                            <div class="list-icon bgl-primary mr-3 mb-3 rounded-4">
                                                <img src="/images/avatar/2.jpg" alt="user image" class="rounded-4"
                                                    style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      border-radius: 10px;
                                    " />
                                            </div>
                                            <div class="info mb-3 d-flex flex-column ml-4">
                                                <h4 class="fs-20">
                                                    <a href="workout-statistic.html" class="text-black">Cordie Weber
                                                        (ESM010)</a>
                                                </h4>
                                                <span style="font-size: 12px">48 Year Old</span>
                                                <p>CEO</p>
                                                <span class="text-danger font-w600">December 2, 2021 - Present</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 mb-3 pl-3 pr-3 text-sm-center d-flex align-items-center flex-row justify-content-center">
                                            <img src="/icons/workoutplanIcon/check.png" alt="active status"
                                                style="width: 30px; height: 30px" />
                                            <span
                                                class="text-secondary font-weight-bold mt-2 d-flex align-items-center">
                                                <i id="statusIcon" class="bi bi-circle text-danger"
                                                    aria-hidden="true"></i>
                                                <span id="statusLabel"
                                                    class="ml-2 d-flex align-content-center pb-2">Inactive</span>
                                            </span>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center justify-content-end">
                                            <div class="dropdown mb-3 align-items-md-end">
                                                <a href="javascript:void(0)" class="more-button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="6" height="26" viewBox="0 0 6 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z"
                                                            fill="#585858"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" id="dropdownMenuButton"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-row">
                                    <div class="d-flex border-bottom flex-wrap pt-3 align-items-center mb-2">
                                        <div class="col-xl-8 col-xxl-8 col-lg-8 col-sm-8 d-flex align-items-center">
                                            <div class="list-icon bgl-primary mr-3 mb-3 rounded-4">
                                                <img src="/images/avatar/2.jpg" alt="user image" class="rounded-4"
                                                    style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      border-radius: 10px;
                                    " />
                                            </div>
                                            <div class="info mb-3 d-flex flex-column ml-4">
                                                <h4 class="fs-20">
                                                    <a href="workout-statistic.html" class="text-black">Cordie Weber
                                                        (ESM011)</a>
                                                </h4>
                                                <span style="font-size: 12px">48 Year Old</span>
                                                <p>CEO</p>
                                                <span class="text-danger font-w600">December 2, 2021 - Present</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 mb-3 pl-3 pr-3 text-sm-center d-flex align-items-center flex-row justify-content-center">
                                            <img src="/icons/workoutplanIcon/check.png" alt="active status"
                                                style="width: 30px; height: 30px" />
                                            <span
                                                class="text-secondary font-weight-bold mt-2 d-flex align-items-center">
                                                <i id="statusIcon" class="bi bi-circle text-danger"
                                                    aria-hidden="true"></i>
                                                <span id="statusLabel"
                                                    class="ml-2 d-flex align-content-center pb-2">Inactive</span>
                                            </span>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center justify-content-end">
                                            <div class="dropdown mb-3 align-items-md-end">
                                                <a href="javascript:void(0)" class="more-button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="6" height="26" viewBox="0 0 6 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z"
                                                            fill="#585858"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" id="dropdownMenuButton"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-row">
                                    <div class="d-flex border-bottom flex-wrap pt-3 align-items-center mb-2">
                                        <div class="col-xl-8 col-xxl-8 col-lg-8 col-sm-8 d-flex align-items-center">
                                            <div class="list-icon bgl-primary mr-3 mb-3 rounded-4">
                                                <img src="/images/avatar/2.jpg" alt="user image" class="rounded-4"
                                                    style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      border-radius: 10px;
                                    " />
                                            </div>
                                            <div class="info mb-3 d-flex flex-column ml-4">
                                                <h4 class="fs-20">
                                                    <a href="workout-statistic.html" class="text-black">Cordie Weber
                                                        (ESM012)</a>
                                                </h4>
                                                <span style="font-size: 12px">48 Year Old</span>
                                                <p>CEO</p>
                                                <span class="text-danger font-w600">December 2, 2021 - Present</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 mb-3 pl-3 pr-3 text-sm-center d-flex align-items-center flex-row justify-content-center">
                                            <img src="/icons/workoutplanIcon/check.png" alt="active status"
                                                style="width: 30px; height: 30px" />
                                            <span
                                                class="text-secondary font-weight-bold mt-2 d-flex align-items-center">
                                                <i id="statusIcon" class="bi bi-circle text-danger"
                                                    aria-hidden="true"></i>
                                                <span id="statusLabel"
                                                    class="ml-2 d-flex align-content-center pb-2">Inactive</span>
                                            </span>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center justify-content-end">
                                            <div class="dropdown mb-3 align-items-md-end">
                                                <a href="javascript:void(0)" class="more-button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="6" height="26" viewBox="0 0 6 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z"
                                                            fill="#585858"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" id="dropdownMenuButton"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-row">
                                    <div class="d-flex border-bottom flex-wrap pt-3 align-items-center mb-2">
                                        <div class="col-xl-8 col-xxl-8 col-lg-8 col-sm-8 d-flex align-items-center">
                                            <div class="list-icon bgl-primary mr-3 mb-3 rounded-4">
                                                <img src="/images/avatar/2.jpg" alt="user image" class="rounded-4"
                                                    style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      border-radius: 10px;
                                    " />
                                            </div>
                                            <div class="info mb-3 d-flex flex-column ml-4">
                                                <h4 class="fs-20">
                                                    <a href="workout-statistic.html" class="text-black">Cordie Weber
                                                        (ESM013)</a>
                                                </h4>
                                                <span style="font-size: 12px">48 Year Old</span>
                                                <p>CEO</p>
                                                <span class="text-danger font-w600">December 2, 2021 - Present</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 mb-3 pl-3 pr-3 text-sm-center d-flex align-items-center flex-row justify-content-center">
                                            <img src="/icons/workoutplanIcon/check.png" alt="active status"
                                                style="width: 30px; height: 30px" />
                                            <span
                                                class="text-secondary font-weight-bold mt-2 d-flex align-items-center">
                                                <i id="statusIcon" class="bi bi-circle text-danger"
                                                    aria-hidden="true"></i>
                                                <span id="statusLabel"
                                                    class="ml-2 d-flex align-content-center pb-2">Inactive</span>
                                            </span>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center justify-content-end">
                                            <div class="dropdown mb-3 align-items-md-end">
                                                <a href="javascript:void(0)" class="more-button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="6" height="26" viewBox="0 0 6 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z"
                                                            fill="#585858"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" id="dropdownMenuButton"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-row">
                                    <div class="d-flex border-bottom flex-wrap pt-3 align-items-center mb-2">
                                        <div class="col-xl-8 col-xxl-8 col-lg-8 col-sm-8 d-flex align-items-center">
                                            <div class="list-icon bgl-primary mr-3 mb-3 rounded-4">
                                                <img src="/images/avatar/2.jpg" alt="user image" class="rounded-4"
                                                    style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      border-radius: 10px;
                                    " />
                                            </div>
                                            <div class="info mb-3 d-flex flex-column ml-4">
                                                <h4 class="fs-20">
                                                    <a href="workout-statistic.html" class="text-black">Cordie Weber
                                                        (ESM014)</a>
                                                </h4>
                                                <span style="font-size: 12px">48 Year Old</span>
                                                <p>CEO</p>
                                                <span class="text-danger font-w600">December 2, 2021 - Present</span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 mb-3 pl-3 pr-3 text-sm-center d-flex align-items-center flex-row justify-content-center">
                                            <img src="/icons/workoutplanIcon/check.png" alt="active status"
                                                style="width: 30px; height: 30px" />
                                            <span
                                                class="text-secondary font-weight-bold mt-2 d-flex align-items-center">
                                                <i id="statusIcon" class="bi bi-circle text-danger"
                                                    aria-hidden="true"></i>
                                                <span id="statusLabel"
                                                    class="ml-2 d-flex align-content-center pb-2">Inactive</span>
                                            </span>
                                        </div>
                                        <div
                                            class="col-xl-2 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center justify-content-end">
                                            <div class="dropdown mb-3 align-items-md-end">
                                                <a href="javascript:void(0)" class="more-button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="6" height="26" viewBox="0 0 6 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z"
                                                            fill="#585858"></path>
                                                        <path
                                                            d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z"
                                                            fill="#585858"></path>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" id="dropdownMenuButton"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <nav>
                                <div>
                                    <!-- ... -->
                                    <div class="list-row" v-for="employee in paginatedEmployees" :key="employee.id">
                                        <!-- ... -->
                                    </div>
                                    <nav>
                                        <ul class="pagination pagination-gutter pagination-primary no-bg justify-content-center"
                                            id="paginationControls">
                                            <li class="page-item page-indicator" id="previousPage">
                                                <a class="page-link" href="javascript:void(0)" @click="previousPage">
                                                    <i class="la la-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item" v-for="page in totalPages" :key="page"
                                                :class="{ active: currentPage === page }">
                                                <a class="page-link" href="javascript:void(0)" @click="goToPage(page)">
                                                    {{ page }}
                                                </a>
                                            </li>
                                            <li class="page-item page-indicator" id="nextPage">
                                                <a class="page-link" href="javascript:void(0)" @click="nextPage">
                                                    <i class="la la-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            currentPage: 1,
            itemsPerPage: 5,
            totalItems: 20, // This should be dynamically set based on your data
        };
    },
    computed: {
        totalPages() {
            return Math.ceil(this.totalItems / this.itemsPerPage);
        },
        paginatedItems() {
            // Assuming you have an array of items, replace `items` with your actual data source
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.items.slice(start, end);
        },
    },
    methods: {
        goToPage(page) {
            if (page >= 1 && page <= this.totalPages) {
                this.currentPage = page;
            }
        },
        previousPage() {
            if (this.currentPage > 1) {
                this.currentPage--;
            }
        },
        nextPage() {
            if (this.currentPage < this.totalPages) {
                this.currentPage++;
            }
        },
    },
};

</script>
