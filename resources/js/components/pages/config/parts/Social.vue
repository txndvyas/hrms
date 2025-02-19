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
        <h2 class="text-danger">Social Network</h2>
        <p class="sub-heading">Update your Social Network Pages, It will be available publicly.</p>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-12 mt-3">
                <input type="text" class="form-control" id="meta-author" placeholder="Facebook">
            </div>
            <div class="col-sm-12 mt-3">
                <input type="text" class="form-control" id="meta-author" placeholder="Twitter">
            </div>
            <div class="col-sm-12 mt-3">
                <input type="text" class="form-control" id="meta-author" placeholder="Google">
            </div>
            <div class="col-sm-12 mt-3">
                <input type="text" class="form-control" id="meta-author" placeholder="Linkedin">
            </div>
            <div class="col-sm-12 mt-3">
                <input type="text" class="form-control" id="meta-author" placeholder="Youtube">
            </div>
            <div class="col-sm-12 mt-3">
                <input type="text" class="form-control" id="meta-author" placeholder="GitHub">
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
