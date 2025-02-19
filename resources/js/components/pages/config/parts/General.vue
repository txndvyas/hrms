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
        <h2 class="text-danger">General Configuration</h2>
        <p class="sub-heading text-primary">This information will be displayed
            publicly so be careful what you share.</p>
    </div>
    <form>
        <div class="row mb-4">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="appName" class="form-label">App Name</label>
                    <input type="text" class="form-control" id="appName">
                </div>
            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="meta-author" class="form-label">Meta Author</label>
                    <input type="text" class="form-control" id="meta-author">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="meta-author" class="form-label">Meta
                        Description</label>
                    <input type="text" class="form-control" id="meta-author">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="meta-author" class="form-label">Meta Keyword</label>
                    <input type="text" class="form-control" id="meta-author">
                </div>
            </div>
        </div>

        <div class="form-header">
            <h2 class="text-danger">Contact Details</h2>
            <p class="sub-heading">This information will be displayed publicly so be
                careful what you share.</p>
        </div>
        <div class="row mb-4">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone">
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="form-group">
                    <label for="fax" class="form-label">Fax</label>
                    <input type="text" class="form-control" id="fax">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" class="form-control" id="website">
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
