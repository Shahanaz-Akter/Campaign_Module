@extends('layouts.master')
@section('title')
<title>Create Campaign</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h6>Campaigns> Email Campaings</h6><br>

        <h5><-Email Campaings</h5>
                <div class="d-flex justify-content-center align-items-center">
                    <!-- flex child-1 -->
                    <div class="ms-3 mb-5 text-capitalize text-center fs-3 text-primary">What type of Campaign would you like to create?</div>
                </div>

                <!-- row class start -->
                <div class="row mb-5">

                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">

                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver1()" onmouseleave="mouseLeave1()">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>Regular Email</span></h5>
                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>

                            <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                            <div class="card-body">
                                <p class="card-text d-block" style="color: black;" id="create_none1">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>
                            </div>
                            <div class="btn btn-label-primary mb-4 d-none" id="create_new1" style="width: 150px!important; margin: 0 auto; border-radius: 1.5rem;">Create New</div>

                        </div>

                    </div>


                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver2()" onmouseleave="mouseLeave2()">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>A/B Testing</span></h5>
                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text" id="create_none2" style="color: black;">Create two different versions of your email campaign to see which one perform best.<span class="typcn typcn-warning-outline"></span></p>
                            </div>

                            <div>
                                <a class="btn btn-label-primary mb-4 d-none" id="create_new2" style="width: 150px!important; margin: 0 auto; border-radius: 1.5rem;" href="{{url('/ab_testing')}}">Create New</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver3()" onmouseleave="mouseLeave3()">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>RSS Testing</span></h5>
                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text" id="create_none3" style="color: black;">Let your contacts know whats new in your website through campaigns without them visiting it.<span class="typcn typcn-warning-outline"></span></p>
                            </div>
                            <div>
                                <a class="btn btn-label-primary mb-4 d-none" id="create_new3" style="width: 150px!important; margin: 0 auto; border-radius: 1.5rem;" href="{{url('/rss_testing')}}">Create New</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver4()" onmouseleave="mouseLeave4()" data-bs-toggle="modal" data-bs-target="#filtering4">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>Zoho Meeting</span></h5>

                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class="img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text" id="create_none4" style="color: black;">Promote your webinars created in Zoho Meetingthrough email campaign.<span class="typcn typcn-warning-outline"></span></p>
                            </div>
                            <div>

                                <div class="btn-group mt-2">
                                    <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new4" style="border-radius: 1.5rem;">Create New</div>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="{{url('zoho_regular_campaign')}}">Regular Campaign</a></li>
                                        <li><a class="dropdown-item" href="{{url('zoho_a/b_testing')}}">A/b Texting</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver5()" onmouseleave="mouseLeave5()" data-bs-toggle="modal" data-bs-target="#filtering5">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>GotoWebinar</span></h5>

                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text " id="create_none5" style="color: black;">Create a regular email campaign to your GoTo Webinar account via email campaigns.
                                    <span class="typcn typcn-warning-outline"></span>
                                </p>
                            </div>
                            <div>
                                <div class="btn-group mt-2">
                                    <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new5" style="border-radius: 1.5rem;">Create New</div>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="">Regular Campaign</a></li>
                                        <li><a class="dropdown-item" href="">A/b Texting</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver6()" onmouseleave="mouseLeave6()" data-bs-toggle="modal" data-bs-target="#filtering6">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>EventBrike</span></h5>

                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text " id="create_none6" style="color: black;">Promote your events by sending invitation for the event hence increase your ticket sale .<span class="typcn typcn-warning-outline"></span></p>
                            </div>
                            <div>
                                <div class="btn-group mt-2">
                                    <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new6" style="border-radius: 1.5rem;">Create New</div>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="">Regular Campaign</a></li>
                                        <li><a class="dropdown-item" href="">A/b Texting</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver7()" onmouseleave="mouseLeave7()" data-bs-toggle="modal" data-bs-target="#filtering7">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>SurveyMonkey</span></h5>
                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text " id="create_none7" style="color: black;">Measure customern satisfication, their product meeds and more with email survey campaign.<span class="typcn typcn-warning-outline"></span></p>
                            </div>
                            <div>
                                <div class="btn-group mt-2">
                                    <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new7" style="border-radius: 1.5rem;">Create New</div>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="">Regular Campaign</a></li>
                                        <li><a class="dropdown-item" href="">A/b Texting</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver8()" onmouseleave="mouseLeave8()" data-bs-toggle="modal" data-bs-target="#filtering8">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span> ZohoSurvey</span></h5>

                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text " id="create_none8" style="color: black;">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>
                            </div>
                            <div>
                                <div class="btn-group mt-2">
                                    <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new8" style="border-radius: 1.5rem;">Create New</div>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="">Regular Campaign</a></li>
                                        <li><a class="dropdown-item" href="">A/b Texting</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver9()" onmouseleave="mouseLeave9()" data-bs-toggle="modal" data-bs-target="#filtering9">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>ZohoBackstage</span></h5>

                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text " id="create_none9" style="color: black;">Create exclusive events, promot it via campaigns and analyze repports. <span class="typcn typcn-warning-outline"></span></p>
                            </div>
                            <div>
                                <div class="btn-group mt-2">
                                    <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new9" style="border-radius: 1.5rem;">Create New</div>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="">Regular Campaign</a></li>
                                        <li><a class="dropdown-item" href="">A/b Texting</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver10()" onmouseleave="mouseLeave10()" data-bs-toggle="modal" data-bs-target="#filtering10">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>Coupon</span></h5>

                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text " id="create_none10" style="color: black;">Boost your bsales by generating coupons and sending it through email campaign.<span class="typcn typcn-warning-outline"></span></p>
                            </div>
                            <div>
                                <div class="btn-group mt-2">
                                    <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new10" style="border-radius: 1.5rem;">Create New</div>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="{{url('coupon_regular_campaign')}}">Regular Campaign</a></li>
                                        <li><a class="dropdown-item" href="{{url('coupon_a/b_testing')}}">A/b Testing</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver11()" onmouseleave="mouseLeave11()" data-bs-toggle="modal" data-bs-target="#filtering11">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>Ecommerce</span></h5>
                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text " id="create_none11" style="color: black;">Create an email campaign to engage with yourt customers and promote the products in your store.<span class="typcn typcn-warning-outline"></span></p>
                            </div>
                            <div>
                                <div class="btn-group mt-2">
                                    <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new11" style="border-radius: 1.5rem;">Create New</div>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="">Regular Campaign</a></li>
                                        <li><a class="dropdown-item" href="">A/b Texting</a></li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-5 all_campaign12">
                        <div class="card h-100 text-center" style="border-radius: 1.5rem!important" onmouseover="mouseOver12()" onmouseleave="mouseLeave12()" data-bs-toggle="modal" data-bs-target="#filtering12">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><span>Zoho Forms</span></h5>
                            </div>

                            <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                                <i class=" img-fluid bx bxl-facebook-circle text-primary mb-2" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text " id="create_none12" style="color: black;">Use our in-house to create hassle-free forms and send via email campaign.<span class="typcn typcn-warning-outline"></span></p>

                            </div>
                            <div>
                                <div class="btn-group mt-2">
                                    <div type="button" class="btn btn-label-primary dropdown-toggle  mb-4 d-none" data-bs-toggle="dropdown" aria-expanded="false" id="create_new12" style="border-radius: 1.5rem;">Create New</div>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="">Regular Campaign</a></li>
                                        <li><a class="dropdown-item" href="">A/b Texting</a></li>

                                    </ul>
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



    const mouseOver2 = () => {

        let create_over2 = document.querySelector('#create_none2');
        create_over2.classList.add('d-none');

        let create_down2 = document.querySelector('#create_new2');
        create_down2.classList.remove('d-none');
    }

    const mouseLeave2 = () => {

        let create_over2 = document.querySelector('#create_none2');
        create_over2.classList.remove('d-none');


        let create_down2 = document.querySelector('#create_new2');
        create_down2.classList.add('d-none');
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



    const mouseOver6 = () => {

        let create_over6 = document.querySelector('#create_none6');
        create_over6.classList.add('d-none');

        let create_down6 = document.querySelector('#create_new6');
        create_down6.classList.remove('d-none');

    }
    const mouseLeave6 = () => {

        let create_over6 = document.querySelector('#create_none6');
        create_over6.classList.remove('d-none');


        let create_down6 = document.querySelector('#create_new6');
        create_down6.classList.add('d-none');
    }



    const mouseOver7 = () => {

        let create_over7 = document.querySelector('#create_none7');
        create_over7.classList.add('d-none');

        let create_down7 = document.querySelector('#create_new7');
        create_down7.classList.remove('d-none');

    }

    const mouseLeave7 = () => {

        let create_over7 = document.querySelector('#create_none7');
        create_over7.classList.remove('d-none');


        let create_down7 = document.querySelector('#create_new7');
        create_down7.classList.add('d-none');

    }

    const mouseOver8 = () => {

        let create_over8 = document.querySelector('#create_none8');
        create_over8.classList.add('d-none');

        let create_down8 = document.querySelector('#create_new8');
        create_down8.classList.remove('d-none');

    }

    const mouseLeave8 = () => {

        let create_over8 = document.querySelector('#create_none8');
        create_over8.classList.remove('d-none');


        let create_down8 = document.querySelector('#create_new8');
        create_down8.classList.add('d-none');

    }


    const mouseOver9 = () => {

        let create_over9 = document.querySelector('#create_none9');
        create_over9.classList.add('d-none');

        let create_down9 = document.querySelector('#create_new9');
        create_down9.classList.remove('d-none');

    }

    const mouseLeave9 = () => {

        let create_over9 = document.querySelector('#create_none9');
        create_over9.classList.remove('d-none');


        let create_down9 = document.querySelector('#create_new9');
        create_down9.classList.add('d-none');

    }

    const mouseOver10 = () => {

        let create_over10 = document.querySelector('#create_none10');
        create_over10.classList.add('d-none');

        let create_down10 = document.querySelector('#create_new10');
        create_down10.classList.remove('d-none');

    }

    const mouseLeave10 = () => {

        let create_over10 = document.querySelector('#create_none10');
        create_over10.classList.remove('d-none');


        let create_down10 = document.querySelector('#create_new10');
        create_down10.classList.add('d-none');

    }




    const mouseOver11 = () => {

        let create_over11 = document.querySelector('#create_none11');
        create_over11.classList.add('d-none');

        let create_down11 = document.querySelector('#create_new11');
        create_down11.classList.remove('d-none');

    }

    const mouseLeave11 = () => {

        let create_over11 = document.querySelector('#create_none11');
        create_over11.classList.remove('d-none');


        let create_down11 = document.querySelector('#create_new11');
        create_down11.classList.add('d-none');

    }





    const mouseOver12 = () => {

        let create_over12 = document.querySelector('#create_none12');
        create_over12.classList.add('d-none');

        let create_down12 = document.querySelector('#create_new12');
        create_down12.classList.remove('d-none');

    }

    const mouseLeave12 = () => {

        let create_over12 = document.querySelector('#create_none12');
        create_over12.classList.remove('d-none');


        let create_down12 = document.querySelector('#create_new12');
        create_down12.classList.add('d-none');

    }
</script>

@endsection