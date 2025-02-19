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
        <h2 class="text-danger">SMS Configuration</h2>
        <p class="sub-heading text-primary">Configure SMS Gateway to send SMS from
            the system.</p>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-4">
                <label id="sms" class="form-label">SMS Gateway</label>
                <select class="form-control default-select" id="sms">
                    <option>custom</option>
                    <option>msg91</option>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="sender-id" class="form-label">Sender ID</label>
                    <input type="text" class="form-control" id="sender-id" placeholder="Sender ID">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="test-number" class="form-label">Test Number</label>
                    <input type="text" class="form-control" id="test-number" placeholder="Test Number">
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
