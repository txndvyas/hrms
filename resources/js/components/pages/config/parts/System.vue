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
</style>
<template>
    <div class="form-header">
        <h2 class="text-danger">System Configuration</h2>
        <p class="sub-heading text-primary">Choose all the configuration carefully,
            it will globally affect your application.</p>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <div class="custom-control custom-switch toggle-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch">
                        <label class="custom-control-label" for="customSwitch">Show
                            Setup Wizard</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Locale</label>
                    <select class="form-control default-select" id="sel1">
                        <option>English</option>
                        <option>Hindi</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Timezone</label>
                    <select class="form-control default-select" id="sel1">
                        <option>India Standard Time</option>
                        <option>Central Standard Time</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Date Format</label>
                    <select class="form-control default-select" id="sel1">
                        <option>MMMM D, YYYY</option>
                        <option>YYYY-MM-DD</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Time Format</label>
                    <select class="form-control default-select" id="sel1">
                        <option>H:m</option>
                        <option>H:m A</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Theme</label>
                    <select class="form-control default-select" id="sel1">
                        <option>default</option>
                        <option>custom</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Page Length</label>
                    <select class="form-control default-select" id="sel1">
                        <option>10</option>
                        <option>2000</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Allowed Currencies</label>
                    <select class="form-control default-select" id="sel1">
                        <option>10</option>
                        <option>2000</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Default Currency</label>
                    <select class="form-control default-select" id="sel1">
                        <option> United States Dollar ($)</option>
                        <option>IND (₹)</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group mb-5">
            <div class="custom-control custom-switch toggle-switch mt-2">
                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                <label class="custom-control-label" for="customSwitch5">Enable Strong
                    Password</label>
            </div>
        </div>


        <div class="form-header">
            <h2 class="text-danger">Application Credit</h2>
            <p class="sub-heading text-primary">Credit will be displayed in the footer
                of all the pages.</p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <div
                        class="custom-control custom-switch toggle-switch text-right mb-4 mr-0 d-flex justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="customSwitch7">
                        <label class="custom-control-label pr-5" for="customSwitch7">Show Version Number</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-12 mt-2">
                <label class="form-label">Footer Credit</label>
                <input type="text" class="form-control" id="footer-credit" placeholder="Footer Credit">
            </div>
        </div>

        <div class="form-header">
            <h2 class="text-danger">Maintenance Mode</h2>
            <p class="sub-heading text-primary">Users won't be able to login, Admin can
                login into the system during maintenance mode.</p>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div
                    class="custom-control custom-switch toggle-switch text-right mb-4 mr-0 d-flex justify-content-between">
                    <input type="checkbox" class="custom-control-input" id="customSwitch8">
                    <label class="custom-control-label pr-5" for="customSwitch8">Maintenance Mode</label>
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
