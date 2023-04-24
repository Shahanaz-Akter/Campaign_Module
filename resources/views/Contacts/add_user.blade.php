@extends('layouts.master')
@section('title')
<title>Add User</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-center align-items-center">
            <!-- flex child-1 -->

            <div class="ms-3 mb-5 text-capitalize text-center fs-3 text-black"> <a href="{{url('/manage_lists')}}"><i class="ms-3 me-2 fa-solid fa-arrow-left"></i></a> How would you like to get contacts into your list?</div>
        </div>

        <!-- row class start -->
        <div class="row mb-5">

            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 all_campaign ">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver4()" onmouseleave="mouseLeave4()">

                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Add Contacts</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>

                    <div class="card-body">
                        <p class="card-text" id="create_none4" style="color: black;">Select an option to add contacts manually<span class="typcn typcn-warning-outline"></span></p>
                    </div>

                    <div>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new4" style="border-radius: 1.5rem;">Add New</div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/manage_list_contact')}}">Contacts</a></li>
                                <li><a class="dropdown-item" href="{{url('/multiple_contact_list')}}">Multiple Contacts</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 all_campaign ">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver1()" onmouseleave="mouseLeave1()">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Import Contacts</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text" id="create_none1" style="color: black;">Import Your contacts with Other devices<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-primary mb-4 d-none" aria-expanded="false" id="create_new1" style="border-radius: 1.5rem;"><a href="{{url('/manage_list_import')}}" style="color:white;">Import</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 all_campaign ">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver5()" onmouseleave="mouseLeave5()">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Sync Contacts</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text" id="create_none5" style="color: black;">Sync your contacts from other Zoho apps or third-party apps with Zoho Campaigns<span class="typcn typcn-warning-outline"></span></p>
                    </div>

                    <div>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new5" style="border-radius: 1.5rem;">Add New</div>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{url('/manage_list_zoho_crm')}}">From Zoho CRM</a></li>
                                <li><a class="dropdown-item" href="{{url('/manage_list_zoho_other_devices')}}">From Other Services</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 all_campaign ">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver3()" onmouseleave="mouseLeave3()">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Signup Form</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text" id="create_none3" style="color: black;">To let contacts join this lists via a web form<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-primary mb-4 d-none" aria-expanded="false" id="create_new3" style="border-radius: 1.5rem;"><a href="{{url('/managelist_signupform')}}" style="color:white;">Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- row class end -->

    <!--New Modal start-->
    <div class="modal fade" id="filtering1" tabindex="-1" aria-hidden="true">
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

</div>
<!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>
    const mouseOver1 = () => {

        let create_mouseover1 = document.querySelector('#create_none1');
        create_mouseover1.classList.add('d-none');

        let create_mousedown1 = document.querySelector('#create_new1');
        create_mousedown1.classList.remove('d-none');
    }

    const mouseLeave1 = () => {

        let create_mouseleave1 = document.querySelector('#create_none1');
        create_mouseleave1.classList.remove('d-none');


        let create_down1 = document.querySelector('#create_new1');
        create_down1.classList.add('d-none');
    }


    const mouseOver3 = () => {

        let create_mouseover3 = document.querySelector('#create_none3');
        create_mouseover3.classList.add('d-none');

        let create_downn3 = document.querySelector('#create_new3');
        create_downn3.classList.remove('d-none');
    }

    const mouseLeave3 = () => {

        let create_mouseover3 = document.querySelector('#create_none3');
        create_mouseover3.classList.remove('d-none');


        let create_downnn3 = document.querySelector('#create_new3');
        create_downnn3.classList.add('d-none');
    }


    const mouseOver4 = () => {

        let mouse_Over4 = document.querySelector('#create_none4');
        mouse_Over4.classList.add('d-none');

        let mouse_Down4 = document.querySelector('#create_new4');
        mouse_Down4.classList.remove('d-none');

    }

    const mouseLeave4 = () => {

        let create_mouseleave4 = document.querySelector('#create_none4');
        create_mouseleave4.classList.remove('d-none');


        let createe_mousedown4 = document.querySelector('#create_new4');
        createe_mousedown4.classList.add('d-none');

    }



    const mouseOver5 = () => {

        let create_mouseover5 = document.querySelector('#create_none5');
        create_mouseover5.classList.add('d-none');

        let create_ddown5 = document.querySelector('#create_new5');
        create_ddown5.classList.remove('d-none');

    }

    const mouseLeave5 = () => {

        let create_mouseleasve5 = document.querySelector('#create_none5');
        create_mouseleasve5.classList.remove('d-none');


        let create_dowwn5 = document.querySelector('#create_new5');
        create_dowwn5.classList.add('d-none');

    }
</script>

@endsection