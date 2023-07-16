@extends('layouts.master')
@section('title')
<title>Contact Scoring</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="title mb-2">Contact Scoring</div>
        <hr>
        <div class="d-flex justify-content-start gap-3 p-2">
            <div><button type="button" class="btn btn-outline-warning" onclick="setup()">Setup</button></div>
            <div><button type="button" class="btn btn-outline-primary" onclick="score_over_view()">Scores View</button></div>
        </div>
        <hr>

        <div class="score_over_view d-none">


            <div class="card p-5 mb-5">
                <div>Contact Classification</div>
                <div class="text-center">
                    <span>
                        Icon
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div>Classify contacts as Most Engaged, Progressing, and Getting Started by scoring their activities in your campaigns.</div>
                    <br>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#create_view">Create View</button>
                </div>
            </div>

        </div>



        <div class="setup">

            <div class="card mb-5 p-5">
                <div class="text-center">
                    <span>
                        icon
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div>You haven't created any views.</div>
                    <div>To create contacts view click the button below.</div>
                    <br>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#define_contact">Define Contacts</button>
                </div>
            </div>

            <div class="card p-5">
                <div class="mb-4">Campaign Activities</div>

                <div class="d-flex mb-3 ">

                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4 ms-5 ps-5">
                        <div class="mt-3">Scores assigned to campaign activities</div>
                        <div class="mt-3 mb-3">Unique Open</div>
                        <div class="mt-3 mb-3">Unique Click</div>
                        <div class="mt-3 mb-3">Multiple Reply</div>
                        <div class="mt-3 mb-3">Positive</div>
                        <div class="mt-3 mb-3">Option</div>
                        <div class="mt-3 mb-3">Tell-a-Friend</div>
                        <div class="mt-3 mb-3">Negative Reply</div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4">
                        <span><i class="fas fa-pen" data-bs-toggle="modal" data-bs-target="#edit_score_activity"> </i></span>
                        <div class="mt-3 mb-3">10</div>
                        <div class="mt-3 mb-3">10</div>
                        <div class="mt-3 mb-3">25</div>
                        <div class="mt-3 mb-3">15</div>
                        <div class="mt-3 mb-3"> 5</div>
                        <div class="mt-3 mb-3">40</div>
                        <div class="mt-3 mb-3">-25</div>
                    </div>

                </div>

                <div class="text-left mt-5 ms-4 ps-5">Custom Rule</div>
                <div class="text-center mb-3">
                    <span>
                        icon
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div>Create a custom rule for contacts that will be applicable to all the campaigns.
                        <br>
                        You can choose to disable the custom rule for a specific campaign at the time of it's creation.</div>
                    <br>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#create_custom_rules">Create Custom Rules</button>
                </div>
            </div>

            <div class="card p-5 mt-5 mb-5">
                <div>Field Based Scoring Details</div>
                <div class="text-center">
                    <span>
                        icon
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div>Assign scores to contact based on contact field data such as phone number, country, etc.</div>
                    <br>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#configure_now">Configure Now</button>
                </div>
            </div>

        </div>




        <!-- create view modal start -->
        <div class="modal fade" id="create_view" tabindex="-1" aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <h5 class="title mt-2">Create View</h5>
                        <hr class="mb-5">
                        <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div id="" class="row g-3" onsubmit="return false">

                                <div class="row  col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="" class="form-control" id="basic-default-company" placeholder="Enter a Name for Your Reference" />
                                    </div>
                                </div>

                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">When Score is use</label>
                                    <div class="col-sm-4">
                                        <select class="form-select">
                                            <option value=""> = </option>
                                            <option value=""> = = </option>
                                            <option value=""> => </option>
                                            <option value="">
                                                <= </option> <option value="">
                                                    <<>>
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" name="" class="form-control" id="basic-default-company" placeholder="Enter Score Value" />
                                    </div>
                                </div>

                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Scoring Period</label>
                                    <div class="col-sm-9">

                                        <select class="form-select">
                                            <option value="all time">all time</option>
                                            <option value="">last seven days</option>
                                            <option value="">last month</option>
                                            <option value="">
                                                last three months< /option> <option value="">
                                                    last six months
                                            </option>
                                            <option value="">
                                                custom range
                                            </option>
                                            <option value="">
                                                is before
                                            </option>
                                            <option value="">
                                                is after
                                            </option>
                                            <option value="">
                                                is between
                                            </option>
                                            <option value="">
                                                is not between
                                            </option>
                                        </select>

                                    </div>
                                </div>

                                <div class="row col-md-10 mb-2 mt-2">
                                    <label class="col-sm-3" for=""></label>
                                    <div class="col-sm-9">
                                        <div onclick="add_contact_criteria(this)"> Add Contact criteria</div>
                                    </div>
                                </div>

                                <!-- Form Repeater -->
                                <div class="col-md-12 mb-4 mt-2 row add_criteria d-none">
                                    <label class="col-sm-3 mt-4" for="" style="">Criteria</label>

                                    <div class="col-md-9 mt-2 row" style="margin-right: 20px;">
                                        <div class="add_pa">
                                            <section class="add_ch row">

                                                <div class="mb-3 col-md-3 col-lg-3 col-xl-3">
                                                    <label class="form-label" for=""></label>

                                                    <select id="" class="form-select">
                                                        <option value="Designer">None</option>
                                                        <option value="Developer">Developer</option>
                                                        <option value="Tester">Tester</option>
                                                        <option value="Manager">Manager</option>
                                                    </select>

                                                </div>

                                                <div class="mb-3 col-md-3 col-lg-3 col-xl-3"> <label class="form-label" for=""></label>

                                                    <select id="" class="form-select">
                                                        <option value="Designer">None</option>
                                                        <option value="Developer">Developer</option>
                                                        <option value="Tester">Tester</option>
                                                        <option value="Manager">Manager</option>
                                                    </select>
                                                </div>


                                                <div class="mb-3 col-md-4 col-lg-4 col-xl-4"> <label class="form-label" for=""></label>
                                                    <input type="text" id="" class="form-control  border  border-2 border-primary" placeholder="Your Name" />
                                                </div>

                                                <div class="mb-3 col-md-1 col-lg-1 col-xl-1 d-flex align-items-center dlt1" onclick="dlt(this)">
                                                    <div class="mt-4">
                                                        <i class="bx bx-x fs-1 text-danger"></i>
                                                    </div>
                                                </div>

                                            </section>


                                            <!-- </section> -->

                                        </div>

                                    </div>
                                    <div class="mt-3 mb-5">
                                        <label class="" for=""></label>
                                        <div class="btn btn-label-primary me-sm-2 me-1" onclick="repeat_class()"> Add
                                            <i class="bx bx-plus"></i>
                                        </div>
                                    </div>
                                    <!-- /Form Repeater -->
                                </div>

                                <div class="row  col-md-10 mb-4 mt-2">
                                    <label class="col-sm-4" for="">Select Mailing List</label>
                                    <div class="col-sm-8">
                                        <input type="radio" name="all" class="" id="" checked />
                                        <label class="" for="">All Mailing List</label>

                                        <input class="ms-3" type="radio" name="all" class="" id="" placeholder="" onclick="specific_mail()" />
                                        <label class="" for="">Specific Mailing List</label>
                                    </div>
                                </div>


                                <div class="row  col-md-10 mb-4 mt-2 specific_mail d-none">
                                    <label class="col-sm-4" for=""></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-control " id="" placeholder="Search and Select List" />
                                    </div>
                                </div>

                                <div class="col-12  mt-4 ">
                                    <button type="reset" class="btn btn-label-primary btn-reset me-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button type="submit" class="btn btn-warning">Save</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- create view modal end -->

        <!--Edit Score Activity modal start -->
        <div class="modal fade" id="edit_score_activity" tabindex="-1" aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <nav class="navbar navbar-expand-lg navbar-light  bg-light sticky" style="padding-left: 250px; padding-right: 250px;">
                            <!-- Navbar content -->
                            <div class="title mt-2 text-uppercase text-center">Campaign Activities</div>
                        </nav>
                        <hr class="mb-5">
                        <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">Edit score assigned to a contact's activities</div>

                            <div id="" class="row g-3" onsubmit="return false">

                                <div class="row  col-md-6 mb-4 mt-5">
                                    <label class="col-sm-9 text-uppercase" for="">Contact Activity</label>
                                    <div class="col-sm-3">
                                        <!-- <input type="text" name="" class="form-control" id="basic-default-company" placeholder="Enter a Name for Your Reference" /> -->
                                    </div>
                                </div>

                                <div class="row  col-md-6 mb-4 mt-5">
                                    <label class="col-sm-9 text-uppercase" for="">Score</label>
                                    <div class="col-sm-3">
                                        <!-- <input type="text" name="" class="form-control" id="basic-default-company" placeholder="Enter a Name for Your Reference" /> -->
                                    </div>
                                </div>



                                <div class="row  col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Unique Open</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="" class="form-control" id="" value="10" />
                                    </div>
                                </div>



                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Multiple Open</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="5" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Unique Click</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="5" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>



                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Multiple check</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="42" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Multiple Reply</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="22" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Positive</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="15" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Option</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="25" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Tell a friend</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="15" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Unsubscribe</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="5" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Negative Reply</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="-25" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12  mt-4  d-flex justify-content-center">
                                    <button type="reset" class="btn btn-label-primary btn-reset me-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Edit Score Activity modal end -->

        <!-- define  modal start -->
        <div class="modal fade" id="define_contact" tabindex="-1" aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <h5 class="title mt-2">Contact Classification</h5>
                        <hr class="mb-5">
                        <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div id="" class="row g-3" onsubmit="return false">


                                <div class="row  col-md-11 mb-4 mt-2">
                                    <label class="col-sm-5" for="">Contacts</label>
                                    <div class="col-sm-5">
                                        <label class="" for="">Total Score</label>

                                    </div>
                                </div>

                                <div class="row  col-md-11 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Most Engaged</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-control" id="basic-default-company" placeholder="Enter a Name for Your Reference" />
                                    </div>
                                </div>


                                <div class="row  col-md-11 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Progressing</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="" class="form-control" id="basic-default-company" placeholder="00" />
                                    </div>
                                    to
                                    <div class="col-sm-4">
                                        <input type="text" name="" class="form-control" id="basic-default-company" placeholder="00" />

                                    </div>
                                </div>


                                <div class="row  col-md-11 mb-2 mt-2">

                                    <label class="col-sm-3" for=""></label>
                                    <div class="col-sm-4">
                                        <input type="checkbox" name="" class="me-2" id="" onclick="enable_div()" />
                                        <label class="" for="">Score in last</label>
                                    </div>
                                </div>

                                <div class="row  col-md-11 mb-4 mt-1">
                                    <label class="col-sm-3" for=""></label>
                                    <!-- disabled -->
                                    <div class="col-sm-6 ">
                                        <select class="form-select enable_div" disabled>
                                            <option value="None">Select</option>
                                            <option value="">15 Days</option>
                                            <option value="">1 Months</option>
                                            <option value="">2 Months</option>
                                            <option value="">3 Months</option>
                                            <option value="">4 Months</option>
                                            <option value="">5 Months</option>
                                            <option value="">6 Months</option>
                                            <option value="">1 Year</option>
                                        </select>
                                    </div>
                                </div>

                                <section class="thus d-none">
                                    <div class="row  col-md-11 mb-4 mt-2">
                                        <label class="col-sm-3" for="">OR</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="" class="form-control" id="basic-default-company" placeholder="" />
                                        </div>
                                    </div>

                                    <div class="row  col-md-11 mb-4 mt-2">
                                        <label class="col-sm-3" for=""></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="" class="form-control" id="basic-default-company" placeholder="00" />
                                        </div>
                                        to
                                        <div class="col-sm-4">
                                            <input type="text" name="" class="form-control" id="basic-default-company" placeholder="00" />

                                        </div>
                                    </div>
                                </section>

                                <div class="row  col-md-11 mb-4 mt-2">
                                    <label class="col-sm-3" for=""> Getting started
                                    </label>

                                    <label class="col-sm-8" for=""> Contacts not meeting these criteria will be categorized as getting started
                                    </label>
                                </div>



                                <div class="row  col-md-11 mb-4 mt-2 specific_mail d-none">
                                    <label class="col-sm-3" for=""></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="" class="form-control " id="" placeholder="Search and Select List" />
                                    </div>
                                </div>


                                <div class="col-12  mt-4 ">
                                    <button type="reset" class="btn btn-label-primary btn-reset me-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button type="submit" class="btn btn-warning">Save</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--define modal end -->

        <!-- configure now  modal start -->
        <div class="modal fade" id="configure_now" tabindex="-1" aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <nav class="navbar navbar-expand-lg navbar-light  bg-light sticky" style="padding-left: 250px; padding-right: 250px;">
                            <!-- Navbar content -->
                            <div class="title mt-2 text-uppercase text-center">Field Based Scoring</div>
                        </nav>
                        <hr class="mb-5">
                        <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div id="" class="row g-3" onsubmit="return false">

                                <div class="row  col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="" class="form-control" id="" placeholder="This is for your own Reference" value="" />
                                    </div>
                                </div>



                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Assign Score</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="1" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row  col-md-10 mb-4 mt-2">
                                    <!-- <label class="col-sm-3" for=""></label> -->
                                    <div class="">
                                        Assign field based score by defining the conditions and actions
                                    </div>
                                </div>


                                <div class="add_pa1">
                                    <!-- <section class="row add_pa "> -->
                                    <section class="add_ch1 row">

                                        <div class="row col-md-10 mb-4 mt-2">
                                            <!-- <label class="col-sm-3" for="">Criteria</label> -->
                                            <div class="col-sm-3">
                                                <select class="form-select">
                                                    <option value="None"></option>
                                                    <option value="">Predefined Field</option>
                                                    <option value="">Contact Email</option>
                                                    <option value=""> Title</option>
                                                    <option value="">First Name
                                                    </option>
                                                    <option value="">
                                                        Last Name
                                                    </option>
                                                    <option value="">
                                                        Job Title
                                                    </option>
                                                    <option value="">
                                                        Company Name
                                                    </option>
                                                    <option value="">
                                                        Phone
                                                    </option>
                                                    <option value="">
                                                        Secondary Email Address
                                                    </option>
                                                    <option value="">
                                                        Contact Source
                                                    </option>
                                                    <option value="">
                                                        Secondary Email Address
                                                    </option>
                                                    <option value="">
                                                        Is Converted
                                                    </option>
                                                    <option value="">
                                                        Address
                                                    </option>
                                                    <option value="">
                                                        City
                                                    </option>
                                                    <option value="">
                                                        State </option>
                                                    <option value="">

                                                    </option>
                                                    <option value="">
                                                        Zipcode </option>
                                                    <option value="">
                                                        Country </option>
                                                    <option value="">
                                                        Website Address </option>

                                                    <option value="">
                                                        Added By </option>
                                                    <option value="">
                                                        Added Time </option>
                                                    <option value="">
                                                        Modified Time </option>
                                                    <option value="">
                                                        Note </option>
                                                    <option value="">
                                                        Opt-in </option>
                                                    <option value="">
                                                        Last Added Time </option>
                                                    <option value="">
                                                        Opt-in-type </option>

                                                    <option value="">
                                                        Agrred to privacy</option>
                                                    <option value="">
                                                        Contacts Social Fields</option>
                                                    <option value="">
                                                        Twitter Handle</option>
                                                    <option value="">
                                                        Facebook Handle</option>
                                                    <option value="">
                                                        Linkedin Handle </option>
                                                    <option value="">
                                                        Contact Score</option>
                                                    <option value="">
                                                        Contact Activity</option>
                                                    <option value="">
                                                        Tgs</option>
                                                    <option value="">
                                                        Deal</option>
                                                    <option value="">
                                                        Deal Name</option>
                                                    <option value="">
                                                        Deal Type</option>
                                                    <option value="">
                                                        Deal Amount</option>
                                                    <option value="">
                                                        Deal Stage</option>
                                                    <option value="">
                                                        Expected revenue</option>
                                                    <option value="">
                                                        Closing Date</option>
                                                    <option value="">
                                                        Closing Probability
                                                    </option>
                                                    <option value="">
                                                        Closing Date
                                                    </option>
                                                    <option value="">
                                                        deal Owner
                                                    </option>
                                                    <option value="">
                                                        Total Deal Amount
                                                    </option>
                                                    <option value="">
                                                        Number of Associate</option>
                                                    <option value="">
                                                        Accounts of New Field</option>
                                                    <option value="">
                                                        Number of Leads</option>
                                                    <option value="">
                                                        Annual revenue</option>
                                                    <option value="">
                                                        Company Size</option>
                                                    <option value="">
                                                        Number of Employees</option>
                                                    <option value="">
                                                        Industry type</option>
                                                    <option value="">
                                                        SIC Code</option>
                                                    <option value="">
                                                        Website</option>
                                                    <option value="">
                                                        Account Name</option>
                                                    <option value="">
                                                        Account Owner</option>
                                                    <option value="">
                                                        Account Type</option>
                                                    <option value="">
                                                        Rating</option>

                                                </select>
                                            </div>


                                            <div class="col-sm-3">
                                                <select class="form-select">
                                                    <option value="None"></option>
                                                    <option value="">is</option>
                                                    <option value="">isn't</option>
                                                    <option value="">contains</option>
                                                    <option value="">oesn't cont...</option>
                                                    <option value="">Starts With</option>
                                                    <option value="">ends With</option>
                                                    <option value="">is empty</option>
                                                    <option value="">isn't empty </option>


                                                </select>
                                            </div>

                                            <div class="col-sm-5">
                                                <input type="text" name="" class="form-control" id="" placeholder="This is for your own Reference" value="" /> </div>

                                            <div class="mb-3 col-lg-1 col-xl-1 col-12 d-flex align-items-center dlt1" onclick="dlt1(this)">
                                                <div class="mt-1">
                                                    <i class="bx bx-x fs-1 text-danger"></i>
                                                    <!-- <span class="align-middle">Delete</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="col-12  mt-4  d-flex justify-content-center">
                                    <div type="" class="btn btn-label-primary me-sm-2 me-1" onclick="repeat_class1()"> Add
                                        <i class="bx bx-plus"></i>
                                    </div>
                                    <button type="reset" class="btn btn-label-primary btn-reset me-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--configure now modal end -->

        <!-- Create Custom Rule   modal start -->
        <div class="modal fade" id="create_custom_rules" tabindex="-1" aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <nav class="navbar navbar-expand-lg navbar-light  bg-light sticky" style="padding-left: 250px; padding-right: 250px;">
                            <!-- Navbar content -->
                            <div class="title mt-2 text-uppercase text-center">Create Custom Rule</div>
                        </nav>
                        <hr class="mb-5">
                        <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div id="" class="row g-3" onsubmit="return false">

                                <div class="row  col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="" class="form-control" id="" placeholder="This is for your own Reference" value="" />
                                    </div>
                                </div>



                                <div class="row col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Assign Score</label>
                                    <div class="col-sm-9 input-group bg-light w-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light border-0" onclick="decrementValue(this)">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="4" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>



                                <div class="add_pa1">
                                    <!-- <section class="row add_pa "> -->
                                    <section class="add_ch1 row">

                                        <div class="row col-md-10 mb-4 mt-2">
                                            <!-- <label class="col-sm-3" for="">Criteria</label> -->
                                            <div class="col-sm-3">
                                                <select class="form-select">
                                                    <option value="None"></option>
                                                    <option value="">Opens by country</option>
                                                    <option value="">Opens Count</option>
                                                    <option value=""> Opens by country</option>
                                                    <option value="">Click by time
                                                    </option>
                                                    <option value="">
                                                        Forward by time
                                                    </option>
                                                    <option value="">
                                                        Campaign Forwarded
                                                    </option>
                                                    <option value="">
                                                        Comments Count
                                                    </option>
                                                </select>
                                            </div>


                                            <div class="col-sm-3">
                                                <select class="form-select">
                                                    <option value="None"></option>
                                                    <option value="">Opens by country</option>
                                                    <option value="">Opens Count</option>
                                                    <option value=""> Opens by country</option>
                                                    <option value="">Click by time
                                                    </option>
                                                    <option value="">
                                                        Forward by time
                                                    </option>
                                                    <option value="">
                                                        Campaign Forwarded
                                                    </option>
                                                    <option value="">
                                                        Comments Count
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="col-sm-5">
                                                <input type="text" name="" class="form-control" id="" placeholder="This is for your own Reference" value="" /> </div>

                                            <div class="mb-3 col-lg-1 col-xl-1 col-12 d-flex align-items-center dlt1" onclick="dlt1(this)">
                                                <div class="mt-1">
                                                    <i class="bx bx-x fs-1 text-danger"></i>
                                                    <!-- <span class="align-middle">Delete</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="col-12  mt-4  d-flex justify-content-center">
                                    <div type="" class="btn btn-label-primary me-sm-2 me-1" onclick="repeat_class1()"> Add
                                        <i class="bx bx-plus"></i>
                                    </div>
                                    <button type="reset" class="btn btn-label-primary btn-reset me-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Create Custom Rule  modal end -->

    </div>
</div>


<script>
    const setup = () => {
        let setup = document.querySelector('.setup');
        let score_over_view = document.querySelector('.score_over_view');

        if (setup.classList.contains('d-none')) {
            setup.classList.remove('d-none');
            score_over_view.classList.add('d-none');

        } else {
            setup.classList.add('d-none');
            score_over_view.classList.remove('d-none');
        }

    }


    score_over_view = () => {
        let setup = document.querySelector('.setup');
        let score_over_view = document.querySelector('.score_over_view');

        if (score_over_view.classList.contains('d-none')) {
            score_over_view.classList.remove('d-none');
            setup.classList.add('d-none');

        } else {
            score_over_view.classList.add('d-none');
            setup.classList.remove('d-none');
        }
    }
</script>


<script>
    const repeat_class = () => {
        let add_pa = document.querySelector('.add_pa');
        let add_ch = document.querySelector('.add_ch');
        let repeat_class = document.querySelector('.repeat_class');


        // Clone the add_ch element
        let clonedElement = add_ch.cloneNode(true);

        // Append the cloned element to the add_pa element
        add_pa.appendChild(clonedElement);
    }
</script>

<script>
    const dlt = (dlt1) => {

        let parent = dlt1.parentNode;
        // console.log(parent);
        parent.parentNode.removeChild(parent);

    }
    const add_contact_criteria = (add_contact_criteria) => {
        let add_criteria = document.querySelector('.add_criteria');
        if (add_criteria.classList.contains('d-none')) {
            add_criteria.classList.remove('d-none');
            add_contact_criteria.innerHTML = "Remove Contact criteria";
        } else {
            add_criteria.classList.add('d-none');
            add_contact_criteria.innerHTML = "Add Contact criteria";
        }
    }

    const specific_mail = () => {
        let specific_mail = document.querySelector('.specific_mail');
        if (specific_mail.classList.contains('d-none')) {

            specific_mail.classList.remove('d-none');
        } else {
            specific_mail.classList.add('d-none');
        }
    }
</script>


<script>
    let delete_button = document.querySelector('#delete_button');

    let delete_all = document.querySelector('#dlt_all');
    console.log(delete_all);

    let dlt_single_message = document.querySelectorAll('.dlt_single_message');
    console.log(dlt_single_message);

    delete_all.addEventListener('change', function() {
        if (delete_button.classList.contains('d-none')) {
            delete_button.classList.remove('d-none');
        } else {
            delete_button.classList.add('d-none');
        }
        dlt_single_message.forEach(function(val) {
            val.checked = delete_all.checked;
        });
    });
</script>

<script>
    function incrementValue(element) {
        var input = element.parentNode.parentNode.querySelector('input');
        input.value = parseInt(input.value) + 1;
    }

    function decrementValue(element) {
        var input = element.parentNode.parentNode.querySelector('input');
        if (parseInt(input.value) > 0) {
            input.value = parseInt(input.value) - 1;
        }
    }
</script>
<script>
    const repeat_class1 = () => {
        let add_pa1 = document.querySelector('.add_pa1');
        let add_ch1 = document.querySelector('.add_ch1');
        let repeat_class1 = document.querySelector('.repeat_class1');


        // Clone the add_ch element
        let clonedElement1 = add_ch1.cloneNode(true);

        // Append the cloned element to the add_pa element
        add_pa1.appendChild(clonedElement1);
    }
</script>

<script>
    const dlt1 = (dlt2) => {

        let parent1 = dlt2.parentNode;
        // console.log(parent);
        parent1.parentNode.removeChild(parent1);

    }


    const enable_div = () => {
        var enable_div = document.querySelector('.enable_div');
        var thus = document.querySelector('.thus');


        let tr = enable_div.hasAttribute("disabled");
        console.log(tr);
        if (enable_div.hasAttribute("disabled")) {

            enable_div.removeAttribute("disabled");
            thus.classList.remove('d-none');

        } else {
            enable_div.setAttribute("disabled", "");
            thus.classList.add('d-none');
        }
    }
</script>
@endsection