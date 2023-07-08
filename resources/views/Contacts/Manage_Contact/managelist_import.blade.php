@extends('layouts.master')
@section('title')
<title>Managelist Import</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-sm container-md container-lg container-xxl">

        <div class="d-flex justify-content-start gap-3">
            <!-- flex child-1 -->
            <div class="mb-3">
                <a href="{{url('/add_user')}}">
                    <div class="btn btn-outline-warning  mt-5 ">
                        Previous
                    </div>
                </a>
            </div>

            <!-- flex child-2 -->
        </div>

        <!-- code start -->
        <div class="container border mt-3 mb-2">


            <div class="mb-5"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-2">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="add_receipient">File</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            <div>
                                Choose how to import your contacts
                            </div>
                            <button class="btn btn-outline-warning"><a href="{{url('/managelist_selectfile')}}" style="color:black;"> Select File</a>
                            </button>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-2">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="form">Subscription Type</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            <div>Choose the email campaign subscription type for contacts</div>
                            <button class="btn btn-outline-warning"><a href="" style="color:black;">Choose Preference</a>
                            </button>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-5">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="sms_content">Field Mapping</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            <div>
                                Map your custom fields with respective Zoho Campaigns' fields to store your contacts' information to</div>
                            <button class="btn btn-outline-warning"><a href="" style="color:black;">Map Fields</a>
                            </button>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <div class="d-flex justify-content-center gap-3">
            <!-- flex child-1 -->
            <div class="mt-5">
                <button type="submit" class="btn btn-warning"> <a href="" style="color:white;">Import</a> </button>
            </div>
            <!-- flex child-2 -->
            <div class="mt-5 ">
                <button type="reset" class="btn btn-warning"><a href="" style="color:white;">Cancel</a> </button>
            </div>
        </div>
        <!-- code end -->
    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->
<script></script>

@endsection