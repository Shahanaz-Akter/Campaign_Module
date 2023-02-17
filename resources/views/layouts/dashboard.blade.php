@extends('layouts.master')
@section('title')
<title>Campaign Dashboard</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- code start -->
        <div class="d-flex justify-content-between">
            <!-- flex child-1 -->
            <div class="ms-3">Good afternoon, rifat18103086!</div>

            <!-- flex Child-2 -->
            <div class="me-3">
                <div>
                    <div class="btn"><a href="{{url('/go_to_overview')}}" style="font-size: 16px!important;"> Go To Overview</a></div>
                    <div class="btn" style="background: #fd7553; width: 122px;"><a style="color: white !important; font-size: 16px!important;" href="{{url('/create')}}" data-bs-toggle="modal" data-bs-target="#search_toggle">Create</a></div>
                </div>
            </div>
        </div>
        <!-- code end -->




        <!-- Add Modal start -->
        <div class="modal fade" id="search_toggle" tabindex="-1" aria-hidden="true">
            <div class="modal-xl modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <h5 class="title text-primary mb-3"></h5>

                        <form action="{{url('/input_group')}}" method="post">
                            @csrf

                            <div class="row g-3" onsubmit="return false">

                                <div class="col-md-8 mb-3  mb-4" style="margin: 0 auto;">
                                    <label class="" for="select2Basic"></label>
                                    <div class="">
                                        <select class="select2 form-select">
                                            <option value="">A/B Test Email campaign</option>
                                            <option value="WV">Regular Email campaign</option>
                                            <option value="WV">Advanced Email campaign </option>
                                            <option value="WV">Facebook page campaign </option>
                                            <option value="WV">Social Media Post </option>
                                            <option value="WV">Signup-Based Auto Responder </option>
                                            <option value="WV">Date Field Auto Responder </option>
                                            <option value="WV">Closed Group Auto Responder </option>
                                            <option value="AK">Smart Series Auto Responder</option>
                                            <option value="WV">Calender Auto Responder</option>
                                            <option value="WV">Cyclic Auto Responder</option>
                                            <option value="WV">Workflow</option>
                                            <option value="WV">Mailing List</option>
                                            <option value="WV">Email template</option>
                                            <option value="WV">Sync with Zoho CRM</option>
                                            <option value="WV">SMS Campaign</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2 mt-3">
                                    <a href="{{url('/email_campaign')}}">
                                        <h5 class="camp"> Email Campaign
                                        </h5>
                                        <p class="text-black">Create and send regular email campaigns to your contacts.</p>
                                    </a>

                                </div>

                                <div class="col-md-6 mb-2 mt-3">
                                    <a href="{{url('/a/b_test_campaign')}}">
                                        <h5 class="camp"> A/B Test Campaign
                                        </h5>
                                        <p class="text-black">Compare 2 different Versions of an email campaign one to send to your audience.</p>
                                    </a>
                                </div>

                                <div class="col-md-6 mb-2 mt-3">
                                    <a href="{{url('/a/b_advanced_campaign')}}">
                                        <h5 class="camp"> A/B Advance Campaign
                                        </h5>
                                        <p class="text-black">Promote your ecommerce products, events, webinars, surveys, and more using an advanced email campaign .</p>
                                    </a>
                                </div>

                                <div class="col-md-6 mb-2 mt-3">
                                    <a href="{{url('/signup_form')}}">
                                        <h5 class="camp"> Signup Form
                                        </h5>
                                        <p class="text-black">Increase Conversion rates by turning your website visitors in using signup forms.</p>
                                    </a>
                                </div>


                                <div class="col-md-6 mb-2 mt-3">
                                    <a href="{{url('/automation')}}">
                                        <h5 class="camp"> Automation
                                        </h5>
                                        <p class="text-black">Initiate automated message series and action flows for contacts based on their activities using workflows. Send automated emails with autoresponders.</p>
                                    </a>
                                </div>
                                <div class="col-md-6 mb-2 mt-3">
                                    <a href="{{url('/mailing_list')}}">

                                        <h5 class="camp">Mailing List
                                        </h5>
                                        <p class="text-black">Organize your contacts in the mailing list ans send relevant targeted lists.</p>
                                    </a>
                                </div>
                                <div class="col-md-6 mb-2 mt-3">


                                    <a href="{{url('/contact_sync')}}">

                                        <h5 class="camp">Contact Sync
                                        </h5>
                                        <p class="text-black">Integrate with zoho apps and third party apps to import your contacts automatically.</p>

                                    </a>

                                </div>

                                <div class="col-md-6 mb-2 mt-3">
                                    <a href="{{url('/social_campaign')}}">
                                        <h5 class="camp">Social Campaign
                                        </h5>
                                        <p class="text-black">React out to your followers and engage with them by posting your campaigns in the social media.</p>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Modal end -->

    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

@endsection