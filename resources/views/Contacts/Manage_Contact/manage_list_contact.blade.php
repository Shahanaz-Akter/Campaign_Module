@extends('layouts.master')
@section('title')
<title>Add User</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row my-4">
                <div class="col">
                    <h6>Add Contact</h6>
                    <div class="accordion" id="collapsibleSection">

                        <!--Contact Info-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDeliveryAddress">
                                <button class="accordion-button color_org" type="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseDeliveryAddress" onclick="contact_info()">Contact Info*</button>
                            </h2>

                            <div id="contact_info" class="accordion-collapse collapse show d-none" aria-labelledby="headingDeliveryAddress" data-bs-parent="#collapsibleSection">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Contact Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-phone">Mobile</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!--Contact Basic Details*-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDeliveryAddress">
                                <button class="accordion-button color_org" type="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseDeliveryAddress" onclick="contact_basic_deatils()">Contact Basic Details*</button>
                            </h2>

                            <div id="contact_basic_deatils" class="accordion-collapse collapse show d-none" aria-labelledby="headingDeliveryAddress" data-bs-parent="#collapsibleSection">
                                <div class="accordion-body">

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">First Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Last Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Job Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Company Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-phone">Phone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Additional Details*-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDeliveryAddress">
                                <button class="accordion-button color_org" type="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseDeliveryAddress" onclick="additional_details()">Additional Details*</button>
                            </h2>
                            <div id="additional_details" class="accordion-collapse collapse show d-none" aria-labelledby="headingDeliveryAddress" data-bs-parent="#collapsibleSection">
                                <div class="accordion-body">

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Secondary Email Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">City</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">State</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Zip Code</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Country</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Website Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Note</label>
                                                <div class="col-sm-9">
                                                    <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="4" placeholder="1456, Mall Road"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Social Info-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDeliveryAddress">
                                <button class="accordion-button color_org" type="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseDeliveryAddress" onclick="social_info()">Social Info*</button>
                            </h2>
                            <div id="social_info" class="accordion-collapse collapse show d-none" aria-labelledby="headingDeliveryAddress" data-bs-parent="#collapsibleSection">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Twitter handle</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-phone">Facebook handle</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-phone">Linkedin handle</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="collapsible-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!--Custom Info-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDeliveryAddress">
                                <button class="accordion-button color_org" type="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseDeliveryAddress" onclick="custom_info()">Custom Info*</button>
                            </h2>
                            <div id="custom_info" class="accordion-collapse collapse show d-none" aria-labelledby="headingDeliveryAddress" data-bs-parent="#collapsibleSection">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-lg-12 col-xxl-12 text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href=""><i class="fa-solid fa-square-plus" style="font-size: 60px!important;"></i></a>
                                            </div><br>
                                            Customize contact information by creating custom fields to store extra data. <span>Add New Field</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Account Info-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDeliveryAddress">
                                <button class="accordion-button color_org" type="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseDeliveryAddress" onclick="account_info()">Account Info*</button>
                            </h2>
                            <div id="account_info" class="accordion-collapse collapse show d-none" aria-labelledby="headingDeliveryAddress" data-bs-parent="#collapsibleSection">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-lg-12 col-xxl-12">

                                            <div class="d-flex justify-content-center">
                                                <a href="">

                                                    <!-- <i class="fa-plus" style="font-size: 20px!important;"></i></a> -->
                                                    <i class="fa-solid fa-square-plus" style="font-size: 60px!important;"></i></a>
                                            </div>
                                            <br>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <section class="form-check" style="border: 2px solid white;">
                                                    <input class="form-check-input" type="checkbox" id="account_inf" style="border: 2px solid black;">
                                                    <label class="form-check-label" for="account_inf"> Create Account Custom Fields.</label>
                                                </section>
                                            </div>

                                            <div class="d-flex justify-content-center align-items-center">
                                                <section> These custom fields are useful for mapping ZohoCrm accounts fields and as normal custom fields Add New Field</section>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>







                        <!--others-->
                        <div class="accordion-item">

                            <div class="">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">--Contact Source--</label>
                                                <div class="col-sm-9">
                                                    <select id="" class="select2 form-select">
                                                        <option value="">Select</option>
                                                        <option value="Australia">mimo@gmail.com</option>
                                                        <option value="United Arab Emirates">imo@gmail.com</option>
                                                    </select>
                                                    <div class="h-100" id="parent_div">
                                                        <div class="text-center bg-transparent text-primary" onclick="sender()">Add new Source</div>

                                                        <div class="h-50" id="divv">
                                                            <!-- Create sender address label and div using JS -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>



                        <div class="accordion-item">

                            <div class="">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname"></label>
                                                <div class="col-sm-9">
                                                    For easy search and filter - Tag your contacts


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>





                        <div class="accordion-item">

                            <div class="">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Subscription types</label>
                                                <div class="col-sm-9">
                                                    <select id="" class="select2 form-select">
                                                        <option value="">Select</option>
                                                        <option value="Australia">Marketing</option>
                                                        <option value="United Arab Emirates">Unsubscribed</option>
                                                        <option value="Australia">Non-Marketing</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="accordion-item">

                            <div class="">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname"></label>
                                                <div class="col-sm-9 form-check">
                                                    <input class="form-check-input" type="checkbox" id="cont">
                                                    <label class="form-check-label" for="cont"> Overwrite the subscription type for the existing contacts</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="accordion-item">

                            <div class="">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname">Associate contacts with the following topics</label>
                                                <div class="col-sm-9">
                                                    <!-- Custom Suggestions: Inline -->

                                                    <label for="TagifyCustomInlineSuggestion" class="form-label">Custom Inline Suggestions</label>
                                                    <input id="TagifyCustomInlineSuggestion" name="TagifyCustomInlineSuggestion" class="form-control" placeholder="select technologies" value="Marketing">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">

                            <div class="">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-sm-3  text-sm-end" for="collapsible-fullname"></label>
                                                <div class="col-sm-9 form-check">
                                                    <input class="form-check-input" type="checkbox" id="product">
                                                    <label class="form-check-label" for="product">This contact has given consent to receive emails relevant to my product</label>
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



            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Add</button>

                <button type="submit" class="btn btn-primary me-sm-3 me-1">Save and New</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>

    </div>
</div>
</div>
</form>
</div>
<!-- Content end-->
</div>
<!-- Content wrapper end -->



<!--New Modal start-->
<div class="modal fade" id="jksd" tabindex="-1" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <h5 class="title text-warning mt-2">Create Campaign</h5>
                <hr class="mb-5">
                <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div id="" class="row g-3" onsubmit="return false">
                        <div class="row  col-md-10 mb-4 mt-2">
                            <label class="col-sm-4" for="select2Basic">Campaign Name <span class="text-warning">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="campaign_name" class="form-control" id="basic-default-company" placeholder="Enter Campaign Name" />
                            </div>
                        </div>



                        <div class="row  col-md-10 mb-5">
                            <label class="col-sm-4" for="select2Basic">Topic Name<span class="text-warning">*</span></label>
                            <div class="col-sm-8">
                                <select class="select2 form-select">
                                    <option value="">Marketing</option>
                                    <option value="AK">Digital</option>
                                    <option value="WV">Social</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-12  mt-4 ">
                            <button type="submit" class="btn btn-warning">Save and Proceed</button>

                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!--New Modal end-->

<script>
    const TagifyCustomInlineSuggestionEl = document.querySelector("#TagifyCustomInlineSuggestion");

    const whitelist = [
        "A# .NET",
        "A# (Axiom)",
        "A-0 System",
        "A+",
        "ASP.NET"
    ];
    // Inline
    let TagifyCustomInlineSuggestion = new Tagify(TagifyCustomInlineSuggestionEl, {
        whitelist: whitelist,
        maxTags: 10, // allows to select max items
        dropdown: {
            maxItems: 20, // display max items
            classname: "tags-inline", // Custom inline class
            enabled: 0,
            closeOnSelect: false
        }
    });
</script>

<script>
    const contact_info = () => {
        let CI = document.querySelector('#contact_info');
        console.log(CI);
        let CIT = CI.classList.contains('d-none');
        if (CIT) {
            CI.classList.remove('d-none');
        } else {
            CI.classList.add('d-none');

        }
    }



    const contact_basic_deatils = () => {
        let CBD = document.querySelector('#contact_basic_deatils');
        console.log(CBD);
        let CBDT = CBD.classList.contains('d-none');
        if (CBDT) {
            CBD.classList.remove('d-none');
        } else {
            CBD.classList.add('d-none');

        }
    }

    const additional_details = () => {
        let AD = document.querySelector('#additional_details');
        console.log(AD);
        let ADT = AD.classList.contains('d-none');
        if (ADT) {
            AD.classList.remove('d-none');
        } else {
            AD.classList.add('d-none');

        }
    }
    const social_info = () => {
        let SI = document.querySelector('#social_info');
        console.log(SI);
        let SIT = SI.classList.contains('d-none');
        if (SIT) {
            SI.classList.remove('d-none');
        } else {
            SI.classList.add('d-none');

        }
    }

    const custom_info = () => {
        let CI = document.querySelector('#custom_info');
        console.log(CI);
        let CIT = CI.classList.contains('d-none');
        if (CIT) {
            CI.classList.remove('d-none');
        } else {
            CI.classList.add('d-none');

        }
    }

    const account_info = () => {
        let AI = document.querySelector('#account_info');
        console.log(AI);
        let AIT = AI.classList.contains('d-none');
        if (AIT) {
            AI.classList.remove('d-none');
        } else {
            AI.classList.add('d-none');

        }
    }
</script>

@endsection