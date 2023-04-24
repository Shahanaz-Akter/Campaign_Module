@extends('layouts.master')
@section('title')
<title>Managelist Signup Form</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-sm container-md container-lg container-xxl">

        <div class="d-flex justify-content-between gap-3">
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
                <div class="mb-3">
                    <a href="{{url('/add_user')}}">
                        <div class="btn btn-warning  mt-5 ">
                            Cancel
                        </div>
                    </a>
                </div>
            </div>


            <div class="mb-3">
                <a href="{{url('/add_user')}}" data-bs-toggle="modal" data-bs-target="#fil__">
                    <div class="btn btn-outline-danger mt-5">
                        Delete
                    </div>
                </a>
            </div>
        </div>

        <!-- code start -->
        <div class="ms-3 mb-5 text-capitalize text-black"> <a href="{{url('/untitled_signup_form')}}"><i class="ms-3 me-2 fa-solid fa-arrow-left"></i></a>Untitled Signup Form</div>

        <div class="container border mt-3 mb-2">
            <div class="mb-5"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-2">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="add_receipient">Form</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            <div>
                                Are you in need of a signup form? Choose one from our templates
                            </div>
                            <button class="btn btn-outline-warning">
                                <a href=" {{url('/choose_signup_form')}}" style="color:black;">Choose Template</a>
                            </button>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-2">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="form">Response</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            <div></div>
                            <button class="btn btn-outline-warning"><a href="" style="color:black;">Setup Response</a>
                            </button>
                        </div>

                    </div>
                    <br>
                </div>


                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-5">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="sms_content"></label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            <div>Show Advanced Option</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-flex justify-content-start gap-3">
            <!-- flex child-1 -->
            <!-- <div class="mt-5">
                <button type="submit" class="btn btn-warning"> <a href="" style="color:white;">Import</a> </button>
            </div> -->
            <!-- flex child-2 -->
            <!-- <div class="mt-5 ">
                <button type="reset" class="btn btn-warning"><a href="{{url('/add_user')}}" style="color:white;">Cancel</a> </button>
            </div> -->
        </div>
        <!-- code end -->
    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->


<!--New Modal start-->
<div class="modal fade" id="fil__" tabindex="-1" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="row g-3" onsubmit="return false">

                    <div class="row  col-md-10 mb-5">
                        <div>Are you sure you want to delete this signup form?</div>

                    </div>

                    <div class="col-12 mt-4 ">
                        <button type="submit" class="btn btn-warning">Go Ahead</button>
                        <button type="reset" class="btn btn-warning">Nope</button>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

<!--New Modal end-->
<script></script>

@endsection