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
        <h2 class="text-danger">Notification Configuration</h2>
        <p class="sub-heading text-primary">Choose notification relateds
            configuration you would like to enable in the application.</p>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-3">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="mail-1">
                    <label class="custom-control-label" for="mail-1"> Mail
                        Notification</label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="mobile-push">
                    <label class="custom-control-label" for="mobile-push">Mobile Push
                        Notification</label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="enable-guest">
                    <label class="custom-control-label" for="enable-guest">Enable Guest
                        Notification
                        Bar</label>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="enable-app">
                    <label class="custom-control-label" for="enable-app">Enable App
                        Notification Bar</label>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="fax" class="form-label">Guest Notification
                        Message</label>
                    <textarea class="form-control" rows="3" id="guestMessage"></textarea>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="fax" class="form-label">App Notification Message</label>
                    <textarea class="form-control" rows="3" id="appMessage"></textarea>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="custom-control custom-switch toggle-switch mt-4 mr-0">
                    <input type="checkbox" class="custom-control-input" id="enable-guest">
                    <label class="custom-control-label" for="enable-guest">Enable Guest
                        Notification
                        Bar</label>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-sm-4">
                <label for="pusher-id" class="form-label">Pusher App ID</label>
                <input type="text" class="form-control" id="pusher-id" placeholder="Pusher App ID">
            </div>
            <div class="col-sm-4">
                <label for="pusher-key" class="form-label">Pusher App Key</label>
                <input type="text" class="form-control" id="pusher-key" placeholder="Pusher App Key">
            </div>
            <div class="col-sm-4">
                <label for="pusher-secret" class="form-label">Pusher App Secret</label>
                <input type="text" class="form-control" id="pusher-secret" placeholder="Pusher App Secret">
            </div>
            <div class="col-sm-4 mt-3">
                <label for="pusher-cluster" class="form-label">Pusher App
                    Cluster</label>
                <input type="text" class="form-control" id="pusher-cluster" placeholder="Pusher App Cluster">
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
