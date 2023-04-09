@extends('layouts.master')
@section('title')
<title>Contacts</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">
    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">


        <!-- Collapsible Section -->
        <div class="row my-4">
            <div class="col">
                <h6> Add Contact</h6>

                <form method="post">
                    <div class="accordion" id="collapsibleSection">
                        <!-- Delivery Address -->
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingDeliveryAddress">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDeliveryAddressContactInfo" aria-expanded="true" aria-controls="collapseDeliveryAddress">Contact Info</button>
                            </h2>
                            <div id="collapseDeliveryAddressContactInfo" class="accordion-collapse collapse show" aria-labelledby="headingDeliveryAddress" data-bs-parent="#collapsibleSection">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-fullname">Full Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-phone">Phone No</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-address">Address</label>
                                                <div class="col-sm-9">
                                                    <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="4" placeholder="1456, Mall Road"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-pincode">Pincode</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="collapsible-pincode" class="form-control" placeholder="658468" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-landmark">Landmark</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="collapsible-landmark" class="form-control" placeholder="Nr. Wall Street" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-city">City</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-city" class="form-control" placeholder="Jackson" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-state">State</label>
                                                <div class="col-sm-9">
                                                    <select id="collapsible-state" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="AL">Alabama</option>

                                                        <option value="WY">Wyoming</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end">Address Type</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check mb-2">
                                                        <input name="collapsible-addressType" class="form-check-input" type="radio" value="" id="collapsible-addressType-home" checked="" />
                                                        <label class="form-check-label" for="collapsible-addressType-home"> Home (All day delivery) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input name="collapsible-addressType" class="form-check-input" type="radio" value="" id="collapsible-addressType-office" />
                                                        <label class="form-check-label" for="collapsible-addressType-office"> Office (Delivery between 10 AM - 5 PM) </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingDeliveryAddress">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDeliveryAddress" aria-expanded="true" aria-controls="collapseDeliveryAddress">Basic Contact Details</button>
                            </h2>
                            <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" aria-labelledby="headingDeliveryAddress" data-bs-parent="#collapsibleSection">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-fullname">Full Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-phone">Phone No</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-address">Address</label>
                                                <div class="col-sm-9">
                                                    <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="4" placeholder="1456, Mall Road"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-pincode">Pincode</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="collapsible-pincode" class="form-control" placeholder="658468" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-landmark">Landmark</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="collapsible-landmark" class="form-control" placeholder="Nr. Wall Street" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-city">City</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-city" class="form-control" placeholder="Jackson" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-state">State</label>
                                                <div class="col-sm-9">
                                                    <select id="collapsible-state" class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="AL">Alabama</option>

                                                        <option value="WY">Wyoming</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label text-sm-end">Address Type</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check mb-2">
                                                        <input name="collapsible-addressType" class="form-check-input" type="radio" value="" id="collapsible-addressType-home" checked="" />
                                                        <label class="form-check-label" for="collapsible-addressType-home"> Home (All day delivery) </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input name="collapsible-addressType" class="form-check-input" type="radio" value="" id="collapsible-addressType-office" />
                                                        <label class="form-check-label" for="collapsible-addressType-office"> Office (Delivery between 10 AM - 5 PM) </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary me-sm-2 me-1">Add</button>
                                <button type="" class="btn btn-primary me-sm-2 me-1">save and New</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


</div>
</div>
@endsection