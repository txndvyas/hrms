<script>

export default {
    data() {
        return {
            dob: "",
            doj: "",
        };
    },

    mounted() {
        this.initDob();
        this.initDoj();
    },

    methods:{
        initDob(){
            $('#dob').bootstrapMaterialDatePicker({
                format: "MM/DD/YYYY",
                time: false,
                clearButton: true
            });
        },
        initDoj(){
            $('#doj').bootstrapMaterialDatePicker({
                format: "MM/DD/YYYY",
                time: false,
                clearButton: true
            });
        },
    },

};
</script>
<template>
    <form>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" value="Mitchell" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Middle Name</label>
                    <input type="text" class="form-control" placeholder="2017-06-04" id="dobdate" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" value="Mitchell" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" placeholder="2017-06-04" id="dob" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="Parent">Gender</label>
                    <select class="form-control" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="Parent">Blood Group</label>
                    <select class="form-control" id="bloodgroup">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Father Name</label>
                    <input type="text" class="form-control" value="Mitchell" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Mother Name</label>
                    <input type="text" class="form-control" value="Mitchell" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Birth Place</label>
                    <input type="text" class="form-control" value="Mitchell" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="Parent">Marital Status</label>
                    <select class="form-control" id="maritalStatus">
                        <option>Single</option>
                        <option>Married</option>
                        <option>Divorced</option>
                        <option>Widowed</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Mother Toung</label>
                    <input type="text" class="form-control" id="motherToung" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Nationality</label>
                    <input type="text" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Driving License Number</label>
                    <input type="text" class="form-control" id="dlNumber" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">Adhar Number</label>
                    <input type="text" class="form-control" id="aadharNumber" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="form-label">PAN Number</label>
                    <input type="text" class="form-control" id="panNumber" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="form-label">Date of Joining</label>
                    <input type="text" class="form-control" placeholder="2017-06-04" id="doj" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="Parent">Designation</label>
                    <select class="form-control" id="designation">
                        <option>Single</option>
                        <option>Married</option>
                        <option>Divorced</option>
                        <option>Widowed</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="Parent">Department</label>
                    <select class="form-control" id="department">
                        <option>Single</option>
                        <option>Married</option>
                        <option>Divorced</option>
                        <option>Widowed</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="Parent">Branch</label>
                    <select class="form-control" id="branch">
                        <option>Single</option>
                        <option>Married</option>
                        <option>Divorced</option>
                        <option>Widowed</option>
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
