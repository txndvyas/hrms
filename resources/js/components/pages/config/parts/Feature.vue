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
        <h2 class="text-danger">Feature Configuration</h2>
        <p class="sub-heading">Choose all the features you would like to enable in the application.</p>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-4">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="todo">
                    <label class="custom-control-label" for="todo">
                        Todo</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="backup">
                    <label class="custom-control-label" for="backup">
                        Backup</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="activity">
                    <label class="custom-control-label" for="activity">
                        Activity Log
                    </label>
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
