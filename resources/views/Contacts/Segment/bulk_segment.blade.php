@extends('layouts.master')

@section('title')
<title>Bulk Segment</title>
@endsection



@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">


        <div>Bulk Segment</div>

        <form action="" method="post">
            @csrf


            <div class="row mb-3">
                <label class="col-sm-2 col-lg-2 col-xxl-2 text-sm-end" for="Name" style="font-weight:500;">Name</label>
                <div class="col-sm-12 col-lg-7 col-xxl-7">
                    <input type="text" class="form-control ms-3" placeholder="Name" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-lg-2 col-xxl-2 text-sm-end" for="Name" style="font-weight:500;">Segment Based On Field</label>
                <div class="col-sm-12 col-lg-7 col-xxl-7 ms-3">
                    <select id="form-repeater-1-4" class="form-select">
                        <option value="Designer">None</option>
                        <option value="Developer">Developer</option>
                        <option value="Tester">Tester</option>
                        <option value="Manager">Manager</option>
                    </select>

                </div>
            </div>

            <div class="row mb-3">
                <label class="form-check-label col-sm-2 col-lg-2 col-xxl-2 text-sm-end" for="" style="font-weight:500;">Additional Criteria</label>
                <div class="form-check form-switch col-sm-12 col-lg-7 col-xxl-7 ms-4 fs-2" onclick="additional_criteria()">
                    <input class="form-check-input" type="checkbox" id="">
                </div>
            </div>


            <!-- Form Repeater -->
            <div class="row mb-3  d-none boltur_pa">
                <label class="col-sm-2 col-lg-2 col-xxl-2 text-sm-end mt-4" for="" style="font-weight:500;">Criteria Pattern : </label>
                <div class="col-sm-12 col-lg-9 col-xxl-9 form-repeater ">

                    <div class="row add_pa">
                        <section class="add_ch">

                            <div class="mb-3 col-lg-3 col-xl-3 col-12">
                                <label class="form-label" for="form-repeater-1-4"></label>

                                <div class="dropdown">
                                    <div class="dropdown-toggle border border-2 border-primary bg-white" type="button" data-toggle="dropdown" style="padding-top: 6px;  padding-right: 80px; padding-bottom: 6px; padding-left: 10px;">None</div>


                                    <ul class="dropdown-menu form-select">
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Predefined Field<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Contact Email</a></li>
                                                <li><a tabindex="-1">First Name</a></li>
                                                <li><a tabindex="-1">Last Name</a></li>
                                                <li><a tabindex="-1">Title</a></li>
                                                <li><a tabindex="-1">Job Title</a></li>
                                                <li><a tabindex="-1">Job Title</a></li>
                                                <li><a tabindex="-1">Company Name</a></li>
                                                <li><a tabindex="-1">Job Title</a></li>
                                                <li><a tabindex="-1">Is Converted</a></li>
                                                <li><a tabindex="-1">Secondary Email Address</a></li>
                                                <li><a tabindex="-1">Phone</a></li>
                                                <li><a tabindex="-1">City</a></li>
                                                <li><a tabindex="-1">Mobile</a></li>
                                                <li><a tabindex="-1">Zip Code</a></li>
                                                <li><a tabindex="-1">Address</a></li>
                                                <li><a tabindex="-1">Added By</a></li>
                                                <li><a tabindex="-1">Website Address</a></li>
                                                <li><a tabindex="-1">Added Time</a></li>
                                                <li><a tabindex="-1">Modified Time</a></li>
                                                <li><a tabindex="-1">Note</a></li>
                                                <li><a tabindex="-1">Last Added Time</a></li>
                                                <li><a tabindex="-1">Opt-In</a></li>
                                                <li><a tabindex="-1">Opt-In Type</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Consent Fields<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Agreed To Privacy Policy and Terms</a></li>
                                                <li><a tabindex="-1">Consent Status</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">List based<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">List</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Contact Activity<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Contact source</a></li>
                                                <li><a tabindex="-1">Contact source</a></li>
                                                <li><a tabindex="-1">Tag</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Webinar Fields<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Webinar Registrants</a></li>
                                                <li><a tabindex="-1">Contact Attendees</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Topic based<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Topic </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Campaign Activity Fields<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Last sent On</a></li>
                                                <li><a tabindex="-1">Specific Campaign</a></li>
                                                <li><a tabindex="-1">Any Campaign</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Ecommerce<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Total Orders</a></li>
                                                <li><a tabindex="-1">Have Purchased</a></li>
                                                <li><a tabindex="-1">Have Not Purchased</a></li>
                                                <li><a tabindex="-1">Average Amount Spent</a></li>
                                                <li><a tabindex="-1">Amount Spent Per Order</a></li>
                                                <li><a tabindex="-1">Total Amount Spent</a></li>
                                                <li><a tabindex="-1">Last Ordered On</a></li>
                                            </ul>
                                        </li>


                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">CRM Deals Fields<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Deal Name</a></li>
                                                <li><a tabindex="-1">Deal Amount</a></li>
                                                <li><a tabindex="-1">Deal Type</a></li>
                                                <li><a tabindex="-1">Deal Stage</a></li>
                                                <li><a tabindex="-1">Expected Revenue</a></li>
                                                <li><a tabindex="-1">Closing Probability</a></li>
                                                <li><a tabindex="-1">Closing Date </a></li>
                                                <li><a tabindex="-1">Deal Owner</a></li>
                                                <li><a tabindex="-1">Total deal Amount</a></li>
                                                <li><a tabindex="-1">Number of Associated Deals</a></li>
                                                <li><a tabindex="-1">Lead Source</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">CRM Account Fields<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Number of leads</a></li>
                                                <li><a tabindex="-1">Annual revenue</a></li>
                                                <li><a tabindex="-1">Company size</a></li>
                                                <li><a tabindex="-1">Number of employees</a></li>
                                                <li><a tabindex="-1">Industry(Inventory CRM)</a></li>
                                                <li><a tabindex="-1">SIC code</a></li>
                                                <li><a tabindex="-1">Website address(Inventory CRM)</a></li>
                                                <li><a tabindex="-1">Account name(Inventory CRM)</a></li>
                                                <li><a tabindex="-1">Account owner</a></li>
                                                <li><a tabindex="-1">Account type</a></li>
                                                <li><a tabindex="-1">Rating</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>

                            </div>

                            <div class="mb-3 col-lg-3 col-xl-3 col-12">
                                <label class="form-label" for="form-repeater-1-4"></label>

                                <div class="dropdown ">
                                    <div class="dropdown-toggle border  border-2 border-primary bg-white" type="button" data-toggle="dropdown" style="padding-top: 6px;  padding-right: 80px; padding-bottom: 6px; padding-left: 10px;">None</div>
                                    <ul class="dropdown-menu form-select">

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Predefined Field<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Contact Email</a></li>
                                                <li><a tabindex="-1">First Name</a></li>
                                                <li><a tabindex="-1">Last Name</a></li>
                                                <li><a tabindex="-1">Title</a></li>
                                                <li><a tabindex="-1">Job Title</a></li>
                                                <li><a tabindex="-1">Job Title</a></li>
                                                <li><a tabindex="-1">Company Name</a></li>
                                                <li><a tabindex="-1">Job Title</a></li>
                                                <li><a tabindex="-1">Is Converted</a></li>
                                                <li><a tabindex="-1">Secondary Email Address</a></li>
                                                <li><a tabindex="-1">Phone</a></li>
                                                <li><a tabindex="-1">City</a></li>
                                                <li><a tabindex="-1">Mobile</a></li>
                                                <li><a tabindex="-1">Zip Code</a></li>
                                                <li><a tabindex="-1">Address</a></li>
                                                <li><a tabindex="-1">Added By</a></li>
                                                <li><a tabindex="-1">Website Address</a></li>
                                                <li><a tabindex="-1">Added Time</a></li>
                                                <li><a tabindex="-1">Modified Time</a></li>
                                                <li><a tabindex="-1">Note</a></li>
                                                <li><a tabindex="-1">Last Added Time</a></li>
                                                <li><a tabindex="-1">Opt-In</a></li>
                                                <li><a tabindex="-1">Opt-In Type</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Consent Fields<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Agreed To Privacy Policy and Terms</a></li>
                                                <li><a tabindex="-1">Consent Status</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">List based<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">List</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Contact Activity<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Contact source</a></li>
                                                <li><a tabindex="-1">Contact source</a></li>
                                                <li><a tabindex="-1">Tag</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Webinar Fields<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Webinar Registrants</a></li>
                                                <li><a tabindex="-1">Contact Attendees</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Topic based<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Topic</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Campaign Activity Fields<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Last sent On</a></li>
                                                <li><a tabindex="-1">Specific Campaign</a></li>
                                                <li><a tabindex="-1">Any Campaign</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">Ecommerce<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Total Orders</a></li>
                                                <li><a tabindex="-1">Have Purchased</a></li>
                                                <li><a tabindex="-1">Have Not Purchased</a></li>
                                                <li><a tabindex="-1">Average Amount Spent</a></li>
                                                <li><a tabindex="-1">Amount Spent Per Order</a></li>
                                                <li><a tabindex="-1">Total Amount Spent</a></li>
                                                <li><a tabindex="-1">Last Ordered On</a></li>
                                            </ul>
                                        </li>


                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">CRM Deals Fields<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Deal Name</a></li>
                                                <li><a tabindex="-1">Deal Amount</a></li>
                                                <li><a tabindex="-1">Deal Type</a></li>
                                                <li><a tabindex="-1">Deal Stage</a></li>
                                                <li><a tabindex="-1">Expected Revenue</a></li>
                                                <li><a tabindex="-1">Closing Probability</a></li>
                                                <li><a tabindex="-1">Closing Date </a></li>
                                                <li><a tabindex="-1">Deal Owner</a></li>
                                                <li><a tabindex="-1">Total deal Amount</a></li>
                                                <li><a tabindex="-1">Number of Associated Deals</a></li>
                                                <li><a tabindex="-1">Lead Source</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1">CRM Account Fields<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1">Number of leads</a></li>
                                                <li><a tabindex="-1">Annual revenue</a></li>
                                                <li><a tabindex="-1">Company size</a></li>
                                                <li><a tabindex="-1">Number of employees</a></li>
                                                <li><a tabindex="-1">Industry(Inventory CRM)</a></li>
                                                <li><a tabindex="-1">SIC code</a></li>
                                                <li><a tabindex="-1">Website address(Inventory CRM)</a></li>
                                                <li><a tabindex="-1">Account name(Inventory CRM)</a></li>
                                                <li><a tabindex="-1">Account owner</a></li>
                                                <li><a tabindex="-1">Account type</a></li>
                                                <li><a tabindex="-1">Rating</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>

                            </div>



                            <div class="mb-3 col-lg-3 col-xl-3 col-12 mb-0">
                                <label class="form-label" for=""></label>
                                <input type="text" id="" class="form-control  border  border-2 border-primary" placeholder="Your Name" />
                            </div>

                            <div class="mb-3 col-lg-1 col-xl-1 col-12 d-flex align-items-center dlt" onclick="dlt(this)">
                                <div class="mt-4">
                                    <i class="bx bx-x fs-1 text-danger"></i>
                                    <!-- <span class="align-middle">Delete</span> -->
                                </div>
                            </div>

                            <div class="mb-3 col-lg-3 col-xl-3 col-12 mb-0">
                                <div type="" class="btn btn-label-primary me-sm-2 me-1" onclick="repeat_class()"> Add
                                    <i class="bx bx-plus"></i>
                                </div>
                            </div>



                        </section>


                    </div>
                </div>
            </div>
            <!-- /Form Repeater -->


    </div>



    <!-- <hr class="my-4 mx-n4" /> -->

    <div class="pt-4 d-flex justify-content-center gap-2">


        <div type="submit" class="btn btn-primary me-sm-2 me-1">Save</div>
        <a href="{{url('/segments')}}" class="">
            <div type="reset" class="btn btn-label-primary">Cancel</div>
        </a>
        <!-- <div type="reset" class="btn btn-label-primary">Cancel</div> -->
    </div>

    </form>

</div>
<!-- Content end-->

<script>
    const repeat_class = () => {
        let add_pa = document.querySelector('.add_pa');
        let add_ch = document.querySelector('.add_ch');
        let repeat_class = document.querySelector('.repeat_class');
        console.log(add_pa);
        console.log(add_ch);

        // Clone the add_ch element
        let clonedElement = add_ch.cloneNode(true);

        // Append the cloned element to the add_pa element
        add_pa.appendChild(clonedElement);
    }
</script>

<script>
    const dlt = (dlt) => {


        let parent = dlt.parentNode;
        // console.log(parent);
        parent.parentNode.removeChild(parent);


    }

    const additional_criteria = () => {
        let boltur_pa = document.querySelector('.boltur_pa');
        if (boltur_pa.classList.contains('d-none')) {
            boltur_pa.classList.remove('d-none')
        } else {
            boltur_pa.classList.add('d-none')

        }


    }
</script>



@endsection