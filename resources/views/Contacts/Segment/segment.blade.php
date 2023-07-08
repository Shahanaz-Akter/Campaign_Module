@extends('layouts.master')

@section('title')
<title>Segment</title>
@endsection



@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">


        <div>Create Segment</div>

        <form action="" method="post">
            @csrf
            <div class="row">

                <section class="mt-4">


                    <div class="row mb-3">
                        <label class="col-sm-2 col-lg-2 col-xxl-2  text-sm-end" for="Name">Name</label>
                        <div class="col-sm-12 col-lg-6 col-xxl-6">
                            <input type="text" class="form-control" placeholder="Name" />
                        </div>
                    </div>


            </div>

            <!-- Form Repeater -->
            <div class="row mb-3">
                <label class="col-sm-2 col-lg-2 col-xxl-2  text-sm-end mt-4" for="alignment-email">Criteria</label>

                <div class="col-sm-9 col-lg-9 col-xxl-9 form-repeater " data-repeater-list="group-a" data-repeater-item>

                    <div data-repeater-list="group-a">
                        <div data-repeater-item>

                            <div class="row">

                                <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                    <label class="form-label" for="form-repeater-1-4"></label>

                                    <div class="dropdown ">
                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">None
                                            <span class=""></span></button>
                                        <ul class="dropdown-menu ">

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

                                <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                    <label class="form-label" for="form-repeater-1-4"></label>
                                    <select id="form-repeater-1-4" class="form-select">
                                        <option value="Designer">None</option>
                                        <option value="Developer">Developer</option>
                                        <option value="Tester">Tester</option>
                                        <option value="Manager">Manager</option>
                                    </select>

                                </div>

                                <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                    <label class="form-label" for="form-repeater-1-1"></label>
                                    <input type="text" id="form-repeater-1-1" class="form-control" placeholder="Your Name" />
                                </div>

                                <div class="mb-3 col-lg-12 col-xl-2 col-12 d-flex align-items-center mb-0">
                                    <div class="btn btn-label-danger mt-4" data-repeater-delete>
                                        <i class="bx bx-x"></i>
                                        <!-- <span class="align-middle">Delete</span> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="btn btn-label-primary" data-repeater-create>
                            <i class="bx bx-plus"></i>
                            <!-- <span class="align-middle">Add</span> -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Form Repeater -->

            </section>


    </div>

    <!-- <hr class="my-4 mx-n4" /> -->

    <div class="pt-4 d-flex justify-content-center gap-2">

        <button type="" class="btn btn-primary me-sm-2 me-1">Save</button>
        <button type="reset" class="btn btn-label-secondary">Cancel</button>

    </div>

    </form>



</div>
<!-- Content end-->
</div>
@endsection