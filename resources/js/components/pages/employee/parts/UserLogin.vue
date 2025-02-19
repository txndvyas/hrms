<template>
    <form>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" value="" placeholder="Email" name="email" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">User Name</label>
                    <input type="text" class="form-control" value="" placeholder="User Name" name="email" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" value="" placeholder="Password" name="password" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="Parent">Role</label>
                    <select class="form-control" id="bloodGroup">
                        <option>Admin</option>
                        <option>User</option>
                    </select>
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
