@extends('layouts.master')
@section('title')
<title>Sync services</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <a href="{{url('/segments')}}">
            <div><i class="fas fa-arrow-left me-3"></i> Sync services</div>
        </a>
        <br>
        <div class="d-flex justify-content-center align-items-center">
            <div class="ms-3 mb-3 text-capitalize text-center">Select the service you prefer to sync your accounts.</div>
        </div>

        <!-- row class start -->
        <div class="row mb-5">

            <div class="col-md-6 col-lg-6 mb-5 p-5">

                <div class="card h-100 text-center" style="">

                    <div class="card-body">
                        <span class="mb-2"><i class="fas fa-handshake text-label-primary" style="font-size: 25px;"></i></span>
                        <div class="mb-2">Zoho CRM</div>
                        <div class="mb-2"><i class="fas fa-circle me-1 text-success"></i>Active</div>
                        <div>shahanazakterm1999@gmail.com</div>
                    </div>
                    <div class="d-flex justify-content-center gap-5">
                        <div style="border: 0.1px solid black; padding: 10px 40px;">
                            <i class="text-primary" style="font-size: 25px;">0</i>

                            <div>Active Sync</div>
                        </div>
                        <div style="border: 0.1px solid black; padding: 10px 40px;">
                            <i class="text-primary fas fa-plus-circle mt-2" style="font-size: 25px;"></i>

                            <div> New Sync</div>
                        </div>

                    </div>
                    <div class="invisible">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem nesciunt omnis velit beatae fugit. Velit officiis dolorem omnis laborum, voluptatem et ullam incidunt perspiciatis nobis, iure cumque voluptates! Dolor?perspiciatis nobis, iure cumque voluptates! Dolor?
                    </div>

                </div>

            </div>

            <div class="col-md-6 col-lg-6 mb-5 p-5">

                <div class="card h-100 text-center" style="">

                    <div class="card-body">
                        <span class="mb-2"><i class="fas fa-handshake text-label-primary" style="font-size: 25px;"></i></span>
                        <div class="mb-2">Zoho Analytics</div>

                        <div class="d-flex justify-content-between">
                            <div><i class="fas fa-circle text-success me-1"></i>(1)Accounts</div>
                            <div>New Analytics Accounts</div>
                        </div>

                        <div>
                            <label class="form-label" for=""></label>
                            <select name="" id="" class="form-select">
                                <option value="">shahanazakterm1999@gmail.com</option>
                                <option value="">mimi@gmail.com</option>
                                <option value="">19103161@iubat.edu</option>
                            </select>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center gap-5">
                        <div style="border: 0.1px solid black; padding: 10px 40px;">
                            <i class="text-primary" style="font-size: 25px;">0</i>

                            <div>Active Sync</div>
                        </div>
                        <div style="border: 0.1px solid black; padding: 10px 40px;">
                            <i class="text-primary fas fa-plus-circle mt-2" style="font-size: 25px;"></i>

                            <div> New Sync</div>
                        </div>

                    </div>
                    <div class="invisible">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quidem nesciunt omnis velit beatae fugit. Velit officiis dolorem omnis laborum, voluptatem et ullam incidunt perspiciatis nobis, iure cumque voluptates! Dolor?perspiciatis nobis, iure cumque voluptates! Dolor?
                    </div>

                </div>

            </div>

            <div style="padding-left: 0%;">
                <div class="col-md-6 col-lg-6 mb-5 p-5 all_campaign">
                    <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver1()" onmouseleave="mouseLeave1()">
                        <div class="d-none create p-3 text-black">Connect to your Contacts account to sync contacts.</div>
                        <div class="card-body bodyy">
                            <div class="icon-card cursor-pointer text-center  mb-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>

                            <h5 class="card-title text-primary"><span>Contacts</span></h5>
                            <div><i class="fas fa-circle me-1 text-success"></i> Accounts Not Associated</div>
                        </div>




                        <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                        <div class="card-body">
                            <p class="card-text d-block" style="color: black;" id="create_none1"><span class="typcn typcn-warning-outline"></span></p>
                        </div>

                        <a href="{{url('/associate_new_account')}}" style="">
                            <div class="btn btn-label-primary mb-4 d-none" id="create_new1" style="width: 250px!important; margin: 0 auto; border-radius: 0.5rem;">Associate New Account</div>
                        </a>

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
        let create_downn1 = document.querySelector('.create');
        let bodyy = document.querySelector('.bodyy');


        create_down1.classList.remove('d-none');
        create_downn1.classList.remove('d-none');
        bodyy.style.opacity = "0.1";
    }

    const mouseLeave1 = () => {

        let create_over1 = document.querySelector('#create_none1');
        create_over1.classList.remove('d-none');


        let create_down1 = document.querySelector('#create_new1');
        let create_downn1 = document.querySelector('.create');
        let bodyy = document.querySelector('.bodyy');


        create_down1.classList.add('d-none');
        create_downn1.classList.add('d-none');
        bodyy.style.opacity = "1";

    }
</script>

@endsection