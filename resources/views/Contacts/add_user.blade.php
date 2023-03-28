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
            <div class="ms-3 mb-5 text-capitalize text-center fs-3 text-black">How would you like to get contacts into your list?</div>
        </div>

        <!-- row class start -->
        <div class="row mb-5">



            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 all_campaign ">
                <div class="h-100 card  text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver4()" onmouseleave="mouseLeave4()">
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

                                <li><a class="dropdown-item" href="{{url('/contacts')}}">Contacts</a></li>
                                <li><a class="dropdown-item" href="{{url('/multipleContacts')}}">Multiple Contacts</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 all_campaign">

                <div class="h-100 card text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver1()" onmouseleave="mouseLeave1()">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Import Contacts</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>

                    <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none1">Import Your Contacts from other devices.<span class="typcn typcn-warning-outline"></span></p>
                    </div>

                    <div>
                        <a class="btn btn-label-primary mb-4 d-none" id="create_new1" style="width: 150px!important; margin: 0 auto; border-radius: 1.5rem;">Import</a>
                    </div>
                </div>

            </div>


            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 all_campaign">
                <div class="h-100 card  text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver5()" onmouseleave="mouseLeave5()" data-bs-toggle="modal" data-bs-target="#filtering5">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Sync contacts</span></h5>

                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text " id="create_none5" style="color: black;">Sync your contacts from other Zoho apps or third-party apps with Zoho Campaigns.
                            <span class="typcn typcn-warning-outline"></span>
                        </p>
                    </div>
                    <div>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new5" style="border-radius: 1.5rem;">Sync contacts</div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/zohoCRM')}}">Forms Zoho CRM</a></li>
                                <li><a class="dropdown-item" href="{{url('/otherServices')}}">Forms Other Services</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3  col-lg-3 col-xxl-3 col-sm-3 mb-5 all_campaign">
                <div class="h-100 card  text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver3()" onmouseleave="mouseLeave3()">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Signup Form</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text" id="create_none3" style="color: black;">To let contacts join this list via a web form.<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div>
                        <a class="btn btn-label-primary mb-4 d-none" id="create_new3" style="width: 150px!important; margin: 0 auto; border-radius: 1.5rem;">Create</a>
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

        let create_over1 = document.querySelector('#create_none1');
        create_over1.classList.add('d-none');

        let create_down1 = document.querySelector('#create_new1');
        create_down1.classList.remove('d-none');
    }

    const mouseLeave1 = () => {

        let create_over1 = document.querySelector('#create_none1');
        create_over1.classList.remove('d-none');


        let create_down1 = document.querySelector('#create_new1');
        create_down1.classList.add('d-none');
    }


    const mouseOver3 = () => {

        let create_over3 = document.querySelector('#create_none3');
        create_over3.classList.add('d-none');

        let create_down3 = document.querySelector('#create_new3');
        create_down3.classList.remove('d-none');
    }

    const mouseLeave3 = () => {

        let create_over3 = document.querySelector('#create_none3');
        create_over3.classList.remove('d-none');


        let create_down3 = document.querySelector('#create_new3');
        create_down3.classList.add('d-none');
    }


    const mouseOver4 = () => {

        let create_over4 = document.querySelector('#create_none4');
        create_over4.classList.add('d-none');

        let create_down4 = document.querySelector('#create_new4');
        create_down4.classList.remove('d-none');

    }

    const mouseLeave4 = () => {

        let create_over4 = document.querySelector('#create_none4');
        create_over4.classList.remove('d-none');


        let create_down4 = document.querySelector('#create_new4');
        create_down4.classList.add('d-none');

    }



    const mouseOver5 = () => {

        let create_over5 = document.querySelector('#create_none5');
        create_over5.classList.add('d-none');

        let create_down5 = document.querySelector('#create_new5');
        create_down5.classList.remove('d-none');

    }

    const mouseLeave5 = () => {

        let create_over5 = document.querySelector('#create_none5');
        create_over5.classList.remove('d-none');


        let create_down5 = document.querySelector('#create_new5');
        create_down5.classList.add('d-none');

    }
</script>

@endsection