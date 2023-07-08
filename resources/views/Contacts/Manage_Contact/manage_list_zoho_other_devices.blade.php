@extends('layouts.master')
@section('title')
<title>Managelist Other Devices</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- <div class="ms-5 mb-2">
            <a href="{{url('/add_user')}}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            Sync Services
        </div> -->


        <!-- row class start -->
        <div class="row mb-5">
            <div class="text-center mb-5"><a href="{{url('/add_user')}}">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                Sync Services. Select the service you prefer to sync your accounts.</div>



            <div class="col-sm-3 col-xl-3 col-xxl-3 col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver1()" onmouseleave="mouseLeave1()">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Zoho CRM</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>

                    <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none1"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <p id="create_n1" class="d-none">Connect to your Zoho CRM account to sync leads/contacts.</p>
                    <div class="btn-group mt-2">
                        <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new1"> <a href="{{url('/')}}" class="text-white">Associate New Account</a></div>
                    </div>
                </div>

            </div>







            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver2()" onmouseleave="mouseLeave2()">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Bigin</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none2">
                            <i class="fa-sharp fa-solid fa-circle text-muted me-2"></i>
                            Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <p id="create_n2" class="d-none">Connect to your Bigin account to sync contacts.</p>
                    <div class="btn-group mt-2">
                        <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new2"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>

                    </div>
                </div>
            </div>



            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver3()" onmouseleave="mouseLeave3()">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Zoho Recruit</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none3"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <p id="create_n3" class="d-none">Connect to your Zoho Recruit account to sync contacts from various modules.</p>

                    <div class="btn-group mt-2">
                        <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new3"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver4()" onmouseleave="mouseLeave4()" data-bs-toggle="modal" data-bs-target="#filtering4">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Zoho Analytics</span></h5>

                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none4"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                        </p>
                    </div>
                    <div>
                        <p id="create_n4" class="d-none">Make a mailing list out of Business Intelligence and Analytics.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new4"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver5()" onmouseleave="mouseLeave5()" data-bs-toggle="modal" data-bs-target="#filtering5">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Zoho Creator</span></h5>

                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none5"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                        </p>
                    </div>
                    <div>
                        <p id="create_n5" class="d-none">Make use of the contacts from custom Zoho Creator apps.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new5"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver6()" onmouseleave="mouseLeave6()" data-bs-toggle="modal" data-bs-target="#filtering6">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Zendesk</span></h5>

                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none6"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div>
                        <p id="create_n6" class="d-none">Make use of your end-users from Zendesk.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new6"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver7()" onmouseleave="mouseLeave7()" data-bs-toggle="modal" data-bs-target="#filtering7">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Zoho Desk</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none7"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div>
                        <p id="create_n7" class="d-none">Make use of the contacts from Zoho Desk.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new7"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver8()" onmouseleave="mouseLeave8()" data-bs-toggle="modal" data-bs-target="#filtering8">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span> My Dynamics 365</span></h5>

                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none8"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div>
                        <p id="create_n8" class="d-none">Connect to your MS Dynamics 365 account to sync leads/contacts.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new8"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver9()" onmouseleave="mouseLeave9()" data-bs-toggle="modal" data-bs-target="#filtering9">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>ZohoInvoice</span></h5>

                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none9"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div>
                        <p id="create_n9" class="d-none">Sync to import customers from your Invoice account.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new9"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver10()" onmouseleave="mouseLeave10()" data-bs-toggle="modal" data-bs-target="#filtering10">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Zohobooks</span></h5>

                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none10"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div>
                        <p id="create_n10" class="d-none">Accounting software-made mailing list comes with an easy integration.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new10"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('coupon_regular_campaign')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('coupon_a/b_testing')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver11()" onmouseleave="mouseLeave11()" data-bs-toggle="modal" data-bs-target="#filtering11">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Google Contacts</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none11"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div>
                        <p id="create_n11" class="d-none">Import your contacts to Zoho Campaigns' mailing list from Google.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new11"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver12()" onmouseleave="mouseLeave12()" data-bs-toggle="modal" data-bs-target="#filtering12">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Goto Webinar</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none12"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n12" class="d-none">Reach out to the registrants and attendees of GoToWebinar.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new12"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/zoho_forms_regular_campaign')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/zoho_ab_testing_campaign')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver13()" onmouseleave="mouseLeave13()" data-bs-toggle="modal" data-bs-target="#filtering13">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Paypal</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none13"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n13" class="d-none">Configure a mailing list to import information about customers who make payments via Paypal.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new13"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver14()" onmouseleave="mouseLeave14()" data-bs-toggle="modal" data-bs-target="#filtering14">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Office 365</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none14"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n14" class="d-none">Import your contacts to Zoho Campaigns' mailing list from Office 365.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new14"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver15()" onmouseleave="mouseLeave15()" data-bs-toggle="modal" data-bs-target="#filtering15">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Shopify</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none15"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n15" class="d-none">Bring in buyers from Shopify store to promote products and offers.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new15"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver16()" onmouseleave="mouseLeave16()" data-bs-toggle="modal" data-bs-target="#filtering16">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Zoho Backstage</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none16"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n16" class="d-none">Integrate with Zoho Backstage and add your event attendees to the preferred mailing list.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new16"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver17()" onmouseleave="mouseLeave17()" data-bs-toggle="modal" data-bs-target="#filtering17">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Google Contacts</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none17"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n17" class="d-none">Import your contacts to Zoho Campaigns' mailing list from Google.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new17"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver18()" onmouseleave="mouseLeave18()" data-bs-toggle="modal" data-bs-target="#filtering18">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Eventbrite</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none18"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n18" class="d-none">Let Eventbrite registrants hear about your campaigns.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new18"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver19()" onmouseleave="mouseLeave19()" data-bs-toggle="modal" data-bs-target="#filtering19">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Zoho Meeting</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none19"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>

                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new19"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver20()" onmouseleave="mouseLeave20()" data-bs-toggle="modal" data-bs-target="#filtering18">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Sales force</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none20"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n20" class="d-none">Connect to your Salesforce account to sync leads/contacts.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new20"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver21()" onmouseleave="mouseLeave21()" data-bs-toggle="modal" data-bs-target="#filtering21">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Sugar CRM</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none21"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n21" class="d-none">Connect to your SugarCRM account to sync leads/contacts.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new21"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver22()" onmouseleave="mouseLeave22()" data-bs-toggle="modal" data-bs-target="#filtering22">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Hub Spot</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none22"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n22" class="d-none">Connect to your HubSpot account to sync leads/contacts.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new22"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver23()" onmouseleave="mouseLeave23()" data-bs-toggle="modal" data-bs-target="#filtering23">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Zoho Contacts</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none23"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n23" class="d-none">Connect to your Zoho Contacts to import all contacts saved in your Zoho account.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger mb-4 d-none" aria-expanded="false" id="create_new23"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-sm-3 col-xxl-3 col-md-3 col-xl-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver24()" onmouseleave="mouseLeave24()" data-bs-toggle="modal" data-bs-target="#filtering24">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><span>Unbounce</span></h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center mb-4 mx-2">
                        <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none24"><i class="fa-sharp fa-solid fa-circle text-muted me-2"></i> Accounts Not Associated<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                    <div>
                        <p id="create_n24" class="d-none">Connect to leads from Unbounce.</p>
                        <div class="btn-group mt-2">
                            <div type="button" class="btn btn-label-danger  mb-4 d-none" aria-expanded="false" id="create_new24"> <a href="{{url('//')}}" class="text-white">Associate New Account</a></div>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{url('/')}}">Regular Campaign</a></li>
                                <li><a class="dropdown-item" href="{{url('/')}}">A/b Testing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- row class end -->

        <!--New Modal start-->
        <!-- <div class="modal fade" id="filtering1" tabindex="-1" aria-hidden="true">
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
            </div> -->

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

        let create_d1 = document.querySelector('#create_n1');
        create_d1.classList.remove('d-none');

    }

    const mouseLeave1 = () => {

        let create_over1 = document.querySelector('#create_none1');
        create_over1.classList.remove('d-none');


        let create_down1 = document.querySelector('#create_new1');
        create_down1.classList.add('d-none');


        let create_d1 = document.querySelector('#create_n1');
        create_d1.classList.add('d-none');

    }


    const mouseOver2 = () => {

        let create_over2 = document.querySelector('#create_none2');
        create_over2.classList.add('d-none');

        let create_down2 = document.querySelector('#create_new2');
        create_down2.classList.remove('d-none');

        let create_d2 = document.querySelector('#create_n2');
        create_d2.classList.remove('d-none');
    }

    const mouseLeave2 = () => {

        let create_over2 = document.querySelector('#create_none2');
        create_over2.classList.remove('d-none');


        let create_down2 = document.querySelector('#create_new2');
        create_down2.classList.add('d-none');

        let create_d2 = document.querySelector('#create_n2');
        create_d2.classList.add('d-none');
    }


    const mouseOver3 = () => {

        let create_over3 = document.querySelector('#create_none3');
        create_over3.classList.add('d-none');

        let create_down3 = document.querySelector('#create_new3');
        create_down3.classList.remove('d-none');

        let create_d3 = document.querySelector('#create_n3');
        create_d3.classList.remove('d-none');
    }

    const mouseLeave3 = () => {

        let create_over3 = document.querySelector('#create_none3');
        create_over3.classList.remove('d-none');


        let create_down3 = document.querySelector('#create_new3');
        create_down3.classList.add('d-none');

        let create_d3 = document.querySelector('#create_n3');
        create_d3.classList.add('d-none');
    }


    const mouseOver4 = () => {

        let create_over4 = document.querySelector('#create_none4');
        create_over4.classList.add('d-none');

        let create_down4 = document.querySelector('#create_new4');
        create_down4.classList.remove('d-none');

        let create_d4 = document.querySelector('#create_n4');
        create_d4.classList.remove('d-none');


    }

    const mouseLeave4 = () => {

        let create_over4 = document.querySelector('#create_none4');
        create_over4.classList.remove('d-none');


        let create_down4 = document.querySelector('#create_new4');
        create_down4.classList.add('d-none');

        let create_d4 = document.querySelector('#create_n4');
        create_d4.classList.add('d-none');

    }



    const mouseOver5 = () => {

        let create_over5 = document.querySelector('#create_none5');
        create_over5.classList.add('d-none');

        let create_down5 = document.querySelector('#create_new5');
        create_down5.classList.remove('d-none');

        let create_d5 = document.querySelector('#create_n5');
        create_d5.classList.remove('d-none');

    }

    const mouseLeave5 = () => {

        let create_over5 = document.querySelector('#create_none5');
        create_over5.classList.remove('d-none');


        let create_down5 = document.querySelector('#create_new5');
        create_down5.classList.add('d-none');

        let create_d5 = document.querySelector('#create_n5');
        create_d5.classList.add('d-none');

    }



    const mouseOver6 = () => {

        let create_over6 = document.querySelector('#create_none6');
        create_over6.classList.add('d-none');

        let create_down6 = document.querySelector('#create_new6');
        create_down6.classList.remove('d-none');

        let create_d6 = document.querySelector('#create_n6');
        create_d6.classList.remove('d-none');

    }
    const mouseLeave6 = () => {

        let create_over6 = document.querySelector('#create_none6');
        create_over6.classList.remove('d-none');


        let create_down6 = document.querySelector('#create_new6');
        create_down6.classList.add('d-none');

        let create_d6 = document.querySelector('#create_n6');
        create_d6.classList.add('d-none');
    }



    const mouseOver7 = () => {

        let create_over7 = document.querySelector('#create_none7');
        create_over7.classList.add('d-none');

        let create_down7 = document.querySelector('#create_new7');
        create_down7.classList.remove('d-none');

        let create_d7 = document.querySelector('#create_n7');
        create_d7.classList.remove('d-none');

    }

    const mouseLeave7 = () => {

        let create_over7 = document.querySelector('#create_none7');
        create_over7.classList.remove('d-none');


        let create_down7 = document.querySelector('#create_new7');
        create_down7.classList.add('d-none');

        let create_d7 = document.querySelector('#create_n7');
        create_d7.classList.add('d-none');

    }

    const mouseOver8 = () => {

        let create_over8 = document.querySelector('#create_none8');
        create_over8.classList.add('d-none');

        let create_down8 = document.querySelector('#create_new8');
        create_down8.classList.remove('d-none');

        let create_d8 = document.querySelector('#create_n8');
        create_d8.classList.remove('d-none');

    }

    const mouseLeave8 = () => {

        let create_over8 = document.querySelector('#create_none8');
        create_over8.classList.remove('d-none');


        let create_down8 = document.querySelector('#create_new8');
        create_down8.classList.add('d-none');

        let create_d8 = document.querySelector('#create_n8');
        create_d8.classList.add('d-none');

    }


    const mouseOver9 = () => {

        let create_over9 = document.querySelector('#create_none9');
        create_over9.classList.add('d-none');

        let create_down9 = document.querySelector('#create_new9');
        create_down9.classList.remove('d-none');

        let create_d9 = document.querySelector('#create_n9');
        create_d9.classList.remove('d-none');


    }

    const mouseLeave9 = () => {

        let create_over9 = document.querySelector('#create_none9');
        create_over9.classList.remove('d-none');


        let create_down9 = document.querySelector('#create_new9');
        create_down9.classList.add('d-none');

        let create_d9 = document.querySelector('#create_n9');
        create_d9.classList.add('d-none');

    }

    const mouseOver10 = () => {

        let create_over10 = document.querySelector('#create_none10');
        create_over10.classList.add('d-none');

        let create_down10 = document.querySelector('#create_new10');
        create_down10.classList.remove('d-none');

        let create_d10 = document.querySelector('#create_n10');
        create_d10.classList.remove('d-none');

    }

    const mouseLeave10 = () => {

        let create_over10 = document.querySelector('#create_none10');
        create_over10.classList.remove('d-none');


        let create_down10 = document.querySelector('#create_new10');
        create_down10.classList.add('d-none');


        let create_d10 = document.querySelector('#create_n10');
        create_d10.classList.add('d-none');

    }




    const mouseOver11 = () => {

        let create_over11 = document.querySelector('#create_none11');
        create_over11.classList.add('d-none');

        let create_down11 = document.querySelector('#create_new11');
        create_down11.classList.remove('d-none');


        let create_d11 = document.querySelector('#create_n11');
        create_d11.classList.remove('d-none');


    }

    const mouseLeave11 = () => {

        let create_over11 = document.querySelector('#create_none11');
        create_over11.classList.remove('d-none');


        let create_down11 = document.querySelector('#create_new11');
        create_down11.classList.add('d-none');

        let create_d11 = document.querySelector('#create_n11');
        create_d11.classList.add('d-none');

    }





    const mouseOver12 = () => {

        let create_over12 = document.querySelector('#create_none12');
        create_over12.classList.add('d-none');

        let create_down12 = document.querySelector('#create_new12');
        create_down12.classList.remove('d-none');

        let create_d12 = document.querySelector('#create_n12');
        create_d12.classList.remove('d-none');

    }

    const mouseLeave12 = () => {

        let create_over12 = document.querySelector('#create_none12');
        create_over12.classList.remove('d-none');


        let create_down12 = document.querySelector('#create_new12');
        create_down12.classList.add('d-none');

        let create_d12 = document.querySelector('#create_n12');
        create_d12.classList.add('d-none');

    }
    const mouseOver13 = () => {

        let create_over13 = document.querySelector('#create_none13');
        create_over13.classList.add('d-none');

        let create_down13 = document.querySelector('#create_new13');
        create_down13.classList.remove('d-none');

        let create_d13 = document.querySelector('#create_n13');
        create_d13.classList.remove('d-none');

    }

    const mouseLeave13 = () => {

        let create_over13 = document.querySelector('#create_none13');
        create_over13.classList.remove('d-none');


        let create_down13 = document.querySelector('#create_new13');
        create_down13.classList.add('d-none');

        let create_d13 = document.querySelector('#create_n13');
        create_d13.classList.add('d-none');

    }
    const mouseOver14 = () => {

        let create_over14 = document.querySelector('#create_none14');
        create_over14.classList.add('d-none');

        let create_down14 = document.querySelector('#create_new14');
        create_down14.classList.remove('d-none');

        let create_d14 = document.querySelector('#create_n14');
        create_d14.classList.remove('d-none');

    }

    const mouseLeave14 = () => {

        let create_over14 = document.querySelector('#create_none14');
        create_over14.classList.remove('d-none');


        let create_down14 = document.querySelector('#create_new14');
        create_down14.classList.add('d-none');

        let create_d14 = document.querySelector('#create_n14');
        create_d14.classList.add('d-none');

    }

    const mouseOver15 = () => {

        let create_over15 = document.querySelector('#create_none15');
        create_over15.classList.add('d-none');

        let create_down15 = document.querySelector('#create_new15');
        create_down15.classList.remove('d-none');
        let create_d15 = document.querySelector('#create_n15');
        create_d15.classList.remove('d-none');
    }

    const mouseLeave15 = () => {

        let create_over15 = document.querySelector('#create_none15');
        create_over15.classList.remove('d-none');


        let create_down15 = document.querySelector('#create_new15');
        create_down15.classList.add('d-none');

        let create_d15 = document.querySelector('#create_n15');
        create_d15.classList.add('d-none');

    }

    const mouseOver16 = () => {

        let create_over16 = document.querySelector('#create_none16');
        create_over16.classList.add('d-none');

        let create_down16 = document.querySelector('#create_new16');
        create_down16.classList.remove('d-none');

        let create_d16 = document.querySelector('#create_n16');
        create_d16.classList.remove('d-none');

    }

    const mouseLeave16 = () => {

        let create_over16 = document.querySelector('#create_none16');
        create_over16.classList.remove('d-none');


        let create_down16 = document.querySelector('#create_new16');
        create_down16.classList.add('d-none');

        let create_d16 = document.querySelector('#create_n16');
        create_d16.classList.add('d-none');
    }

    const mouseOver17 = () => {

        let create_over17 = document.querySelector('#create_none17');
        create_over17.classList.add('d-none');

        let create_down17 = document.querySelector('#create_new17');
        create_down17.classList.remove('d-none');


        let create_d17 = document.querySelector('#create_n17');
        create_d17.classList.remove('d-none');

    }

    const mouseLeave17 = () => {

        let create_over17 = document.querySelector('#create_none17');
        create_over17.classList.remove('d-none');


        let create_down17 = document.querySelector('#create_new17');
        create_down17.classList.add('d-none');

        let create_d17 = document.querySelector('#create_n17');
        create_d17.classList.add('d-none');

    }


    const mouseOver18 = () => {

        let create_over18 = document.querySelector('#create_none18');
        create_over18.classList.add('d-none');

        let create_down18 = document.querySelector('#create_new18');
        create_down18.classList.remove('d-none');

        let create_d18 = document.querySelector('#create_n18');
        create_d18.classList.remove('d-none');

    }

    const mouseLeave18 = () => {

        let create_over18 = document.querySelector('#create_none18');
        create_over18.classList.remove('d-none');


        let create_down18 = document.querySelector('#create_new18');
        create_down18.classList.add('d-none');

        let create_d18 = document.querySelector('#create_n18');
        create_d18.classList.add('d-none');

    }

    const mouseOver19 = () => {

        let create_over19 = document.querySelector('#create_none19');
        create_over19.classList.add('d-none');

        let create_down19 = document.querySelector('#create_new19');
        create_down19.classList.remove('d-none');

    }

    const mouseLeave19 = () => {

        let create_over19 = document.querySelector('#create_none19');
        create_over19.classList.remove('d-none');


        let create_down19 = document.querySelector('#create_new19');
        create_down19.classList.add('d-none');

    }
    const mouseOver20 = () => {

        let create_over20 = document.querySelector('#create_none20');
        create_over20.classList.add('d-none');

        let create_down20 = document.querySelector('#create_new20');
        create_down20.classList.remove('d-none');

        let create_d20 = document.querySelector('#create_n20');
        create_d20.classList.remove('d-none');

    }

    const mouseLeave20 = () => {

        let create_over20 = document.querySelector('#create_none20');
        create_over20.classList.remove('d-none');


        let create_down20 = document.querySelector('#create_new20');
        create_down20.classList.add('d-none');

        let create_d20 = document.querySelector('#create_n20');
        create_d20.classList.add('d-none');


    }
    const mouseOver21 = () => {

        let create_over21 = document.querySelector('#create_none21');
        create_over21.classList.add('d-none');

        let create_down21 = document.querySelector('#create_new21');
        create_down21.classList.remove('d-none');


        let create_d21 = document.querySelector('#create_n21');
        create_d21.classList.remove('d-none');

    }

    const mouseLeave21 = () => {

        let create_over21 = document.querySelector('#create_none21');
        create_over21.classList.remove('d-none');


        let create_down21 = document.querySelector('#create_new21');
        create_down21.classList.add('d-none');

        let create_d21 = document.querySelector('#create_n21');
        create_d21.classList.add('d-none');

    }

    const mouseOver22 = () => {

        let create_over22 = document.querySelector('#create_none22');
        create_over22.classList.add('d-none');

        let create_down22 = document.querySelector('#create_new22');
        create_down22.classList.remove('d-none');

        let create_d22 = document.querySelector('#create_n22');
        create_d22.classList.remove('d-none');

    }

    const mouseLeave22 = () => {

        let create_over22 = document.querySelector('#create_none22');
        create_over22.classList.remove('d-none');


        let create_down22 = document.querySelector('#create_new22');
        create_down22.classList.add('d-none');

        let create_d22 = document.querySelector('#create_n22');
        create_d22.classList.add('d-none');

    }

    const mouseOver23 = () => {

        let create_over23 = document.querySelector('#create_none23');
        create_over23.classList.add('d-none');

        let create_down23 = document.querySelector('#create_new23');
        create_down23.classList.remove('d-none');

        let create_d23 = document.querySelector('#create_n23');
        create_d23.classList.remove('d-none');

    }

    const mouseLeave23 = () => {

        let create_over23 = document.querySelector('#create_none23');
        create_over23.classList.remove('d-none');


        let create_down23 = document.querySelector('#create_new23');
        create_down23.classList.add('d-none');

        let create_d23 = document.querySelector('#create_n23');
        create_d23.classList.add('d-none');

    }


    const mouseOver24 = () => {

        let create_over24 = document.querySelector('#create_none24');
        create_over24.classList.add('d-none');

        let create_down24 = document.querySelector('#create_new24');
        create_down24.classList.remove('d-none');

        let create_d24 = document.querySelector('#create_n24');
        create_d24.classList.remove('d-none');

    }

    const mouseLeave24 = () => {

        let create_over24 = document.querySelector('#create_none24');
        create_over24.classList.remove('d-none');


        let create_down24 = document.querySelector('#create_new24');
        create_down24.classList.add('d-none');

        let create_d24 = document.querySelector('#create_nw24');
        create_d24.classList.add('d-none');

    }
</script>

@endsection