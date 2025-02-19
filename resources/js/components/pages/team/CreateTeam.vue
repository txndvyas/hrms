<template>
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Wizard</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create your team</h4>
                    </div>
                    <div class="card-body">
                        <div id="smartwizard" class="form-wizard order-create">
                            <ul class="nav nav-wizard">
                                <li>Company Info<a class="nav-link" href="#wizard_Service">
                                        <span>1</span>
                                    </a></li>
                                <li>Address<a class="nav-link" href="#wizard_Time">
                                        <span>2</span>
                                    </a></li>
                                <li>DEF<a class="nav-link" href="#wizard_Details">
                                        <span>3</span>
                                    </a></li>
                                <li>Terms<a class="nav-link" href="#wizard_Payment">
                                        <span>4</span>
                                    </a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Company Name*</label>
                                                <input type="text" name="companyName" class="form-control" placeholder="Parsley" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Email Address*</label>
                                                <input type="text" name="lastName" class="form-control" placeholder="Montana" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Website*</label>
                                                <input type="email" class="form-control" id="inputGroupPrepend2" placeholder="example@example.com.com" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Phone Number*</label>
                                                <input type="text" name="phoneNumber" class="form-control" placeholder="(+1)408-657-9007" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Your position in Company*</label>
                                                <input type="text" name="place" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Street Address*</label>
                                                <input type="text" name="firstName" class="form-control"
                                                    placeholder="Cellophane Square" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City*</label>
                                                <input type="text" class="form-control" id="emial1"
                                                    placeholder="Street Address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State / Province*</label>
                                                <input type="text" name="phoneNumber" class="form-control"
                                                    placeholder="(+1)408-657-9007" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Zip / Postal Code*</label>
                                                <input type="text" name="place" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City*</label>
                                                <input type="text" name="place" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="wizard_Details" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-4 mb-2">
                                            <h4>Monday *</h4>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input1"
                                                    id="input1">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input2"
                                                    id="input2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mb-2">
                                            <h4>Tuesday *</h4>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input3"
                                                    id="input3">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input4"
                                                    id="input4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mb-2">
                                            <h4>Wednesday *</h4>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input5"
                                                    id="input5">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input6"
                                                    id="input6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mb-2">
                                            <h4>Thrusday *</h4>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input7"
                                                    id="input7">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input8"
                                                    id="input8">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mb-2">
                                            <h4>Friday *</h4>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input9"
                                                    id="input9">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input10"
                                                    id="input10">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="wizard_Payment" class="tab-pane" role="tabpanel">
                                    <div class="row emial-setup">
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="form-group">
                                                <label for="mailclient11" class="mailclinet mailclinet-gmail">
                                                    <input type="radio" name="emailclient" id="mailclient11">
                                                    <span class="mail-icon">
                                                        <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">I'm using Gmail</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="form-group">
                                                <label for="mailclient12" class="mailclinet mailclinet-office">
                                                    <input type="radio" name="emailclient" id="mailclient12">
                                                    <span class="mail-icon">
                                                        <i class="mdi mdi-office" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">I'm using Office</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="form-group">
                                                <label for="mailclient13" class="mailclinet mailclinet-drive">
                                                    <input type="radio" name="emailclient" id="mailclient13">
                                                    <span class="mail-icon">
                                                        <i class="mdi mdi-google-drive" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">I'm using Drive</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="form-group">
                                                <label for="mailclient14" class="mailclinet mailclinet-another">
                                                    <input type="radio" name="emailclient" id="mailclient14">
                                                    <span class="mail-icon">
                                                        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">Another Service</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {

    mounted() {
			this.initSmartWizard();
    },
    methods: {
        initSmartWizard()
        {
            // SmartWizard initialize
			$('#smartwizard').smartWizard();
        }
    }
}

</script>
