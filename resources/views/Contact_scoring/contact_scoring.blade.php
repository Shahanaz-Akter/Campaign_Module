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
            <div><button type="button" class="btn btn-outline-primary" onclick="setup()">Setup</button></div>
            <div><button type="button" class="btn btn-outline-danger" onclick="score_over_view()">Scores View</button></div>
        </div>
        <hr>

        <div class="score_over_view d-none">
            <div class="text-center ">
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



        <div class="setup">


            <div class="card p-5 mb-5">
                <div>Contact Classification</div>
                <div class="text-center">
                    <span>
                        icon
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div>Classify contacts as Most Engaged, Progressing, and Getting Started by scoring their activities in your campaigns.</div>
                    <br>

                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#create_view">Create View</button>

                </div>
            </div>

            <div class="card p-5">
                <div class="mb-4"> Campaign Activities</div>
                <div class="d-flex mb-3 ">

                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4 ms-5 ps-5">
                        <div class="mt-3">Scores assigned to campaign activities</div>
                        <div class="mt-3 mb-3">Unique Open</div>
                        <div class="mt-3 mb-3">Unique Click</div>
                        <div class="mt-3 mb-3">Multiple Reply</div>
                        <div class="mt-3 mb-3"> Positive</div>
                        <div class="mt-3 mb-3"> Option</div>
                        <div class="mt-3 mb-3">Tell-a-Friend</div>
                        <div class="mt-3 mb-3"> Negative Reply</div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4">
                        <span><i class="fas fa-pen" data-bs-toggle="modal" data-bs-target="#edit_score_activity"> </i></span>
                        <div class="mt-3 mb-3">10</div>
                        <div class="mt-3 mb-3">10</div>
                        <div class="mt-3 mb-3">25</div>
                        <div class="mt-3 mb-3">15</div>
                        <div class="mt-3 mb-3">5</div>
                        <div class="mt-3 mb-3">40</div>
                        <div class="mt-3 mb-3">-25</div>
                    </div>
                </div>

                <div class="text-left mt-5 ms-4 ps-5"> Custom Rule</div>
                <div class="text-center mb-3">

                    <span>
                        icon
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div>Create a custom rule for contacts that will be applicable to all the campaigns. You can choose to disable the custom rule for a specific campaign at the time of it's creation.</div>
                    <br>

                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#create_custom_rules">Create Custom Rules</button>

                </div>


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
                                                <= </option>
                                            <option value="">
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
                                                last three months< /option>
                                            <option value="">
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

                        <div class="title mt-2 text-uppercase">campaign Activities</div>
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
                                    <div class="col-sm-9">
                                        <input type="number" name="" class="form-control" id="" value="10" />
                                    </div>
                                </div>

                                <div class="row  col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Multiple Open</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="" class="form-control" id="" value="10" />
                                    </div>
                                </div>

                                <div class="row  col-md-10 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Unique Click</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="" class="form-control" id="" value="10" />
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
                                        <input type="number" name="" class="form-control" id="unique-click-input" value="10" />
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-light border-0" onclick="incrementValue(this)">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </div>
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
        <!--Edit Score Activity modal end -->





        <!-- define  modal start -->
        <div class="modal fade" id="define_contact" tabindex="-1" aria-hidden="true">
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
                                                <= </option>
                                            <option value="">
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
                                                last three months< /option>
                                            <option value="">
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
        <!--define modal end -->


        <!-- configure now  modal start -->
        <div class="modal fade" id="configure_now" tabindex="-1" aria-hidden="true">
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
                                                <= </option>
                                            <option value="">
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
                                                last three months< /option>
                                            <option value="">
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
        <!--configure now modal end -->




        <!-- Create Custom Rule   modal start -->

        <div class="modal fade" id="create_custom_rules" tabindex="-1" aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <h5 class="title mt-2">Edit Score Activity</h5>
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
                                                <= </option>
                                            <option value="">
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
                                                last three months< /option>
                                            <option value="">
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


@endsection