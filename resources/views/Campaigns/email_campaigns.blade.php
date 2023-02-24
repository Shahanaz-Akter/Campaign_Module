@extends('layouts.master')
@section('title')
<title>Email Campaigns</title>
@endsection
@section('content')


<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h5>Campaigns> Email Campaings</h5>
        <div class="d-flex justify-content-between">
            <!-- flex child-1 -->
            <div class="ms-3 mb-5">Create Month</div>
            <!-- flex Child-2 -->
            <div class="btn mb-5 me-3" style="background: #fd7553; width: 200px;">
                <a style="color: white !important; font-size: 16px!important;" href="{{url('/create_campaign')}}"> Create Campaign </a>
            </div>

        </div>

        <!-- Examples -->
        <div class="row mb-5">

            <div class="col-md-4 col-lg-4 mb-3">
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

            <div class="col-md-4 col-lg-4 mb-3">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b> not Regular Email</b></h5>
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