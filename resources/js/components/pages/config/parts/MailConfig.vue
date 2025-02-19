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
        <h2 class="text-danger">Mail Configuration</h2>
        <p class="sub-heading text-primary">Configure mail to send emails from the
            system.</p>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="mail-drive" class="form-label">Mail Driver</label>
                    <input type="text" class="form-control" id="mail-drive" placeholder="Mail Driver">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="form-name" class="form-label">From Name</label>
                    <input type="text" class="form-control" id="form-name" placeholder="From Name">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="form-address" class="form-label">From Address</label>
                    <input type="text" class="form-control" id="form-address" placeholder="From Address">
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
