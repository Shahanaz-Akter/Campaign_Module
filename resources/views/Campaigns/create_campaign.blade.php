@extends('layouts.master')
@section('title')
<title>Create Campaign</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">


        <h5>Email Campaings</h5>
        <div class="d-flex justify-content-between">
            <!-- flex child-1 -->
            <div class="ms-3 text-center mb-5">What type of campaign would you like to create?</div>

            <!-- flex Child-2 -->
            <div class="me-3">


                <div class="btn mb-5" style="background: #fd7553; width: 200px;">
                    <a href="{{url('/create_campaign')}}" data-bs-toggle="modal" data-bs-target="#search_toggle" style="color: white !important; font-size: 16px!important;">Create Campaign
                    </a></div>

            </div>
        </div>

        <!-- Examples -->
        <div class="row mb-5">

            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>Regular Email</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>


            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>A/B Testing</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>


            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>RSS</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>


          

            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>Zoho Meeting</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>


            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>GotoWebinar</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>EventBrike</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>SurveyMonkey</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b> ZohoSurvey</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b> ZohoBackstage</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>Coupon</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>Ecommerce</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>Zoho Forms</b></h5>

                    </div>
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>

                    </div>
                </div>
            </div>

        </div>
        <!-- Examples -->


    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

@endsection