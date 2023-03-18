@extends('layouts.master')
@section('title')
<title>Create SMS Campaigns</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-sm container-md container-lg container-xxl">

        <div class="d-flex justify-content-between mb-3 mt-5">
            <div>
                <div></div> <span>Untitled SMS Campaign <br> Draft | Created on: Mar 18, 2023 10:59 AM</span>
                <a href="{{url('/edit_sms_campaigns')}}"><i class="fa-solid fa-pen-nib ms-4"></i></a>
            </div>
            <div class="mt-4"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-regular fa-trash-can"></i></a></div>
        </div>

        <!-- code start -->
        <div class="container border bg-white mt-3 mb-2">

            <div class="d-flex justify-content-between mt-3">
                <div> <span> <a href="{{url('/sms_campaigns')}}" class=""><-- </a> SMS Gateway</span>
                    <i class="fa-solid fa-pen-nib ms-3"></i>
                    <span class="ms-3">Campaigns</span>
                </div>
                <div class="btn btn-outline-warning"><a href="" class="text-danger">Change</a></div>
            </div>
            <hr class="mb-5">


            <div class="row">
                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-2">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="add_receipient">RECIPIENT</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            <div> Select the contacts to whom you are sending this SMS</div>
                            <input type="text" class="form-control" id="add_receipient" placeholder="Add Receipient">
                        </div>
                    </div>
                    <br>

                </div>


                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-2">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="form">FROM</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            You need to add a sender address to send SMS campaigns using the Zoho Campaigns SMS gateway.
                            <div> <input type="text" class="form-control" id="form" placeholder="Add Configure"></div>
                        </div>

                    </div>
                    <br>

                </div>



                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="sms_content">SMS CONTENT</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            <div>Provide content for your SMS campaign and proceed</div>
                            <textarea type="text" class="form-control" id="sms_content" value="Configure Content"> </textarea>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-start gap-3">
                    <!-- flex child-1 -->
                    <div class="mb-3">
                        <a href="{{url('/sms_campaigns')}}">
                            <div class="btn btn-outline-warning  mt-5 ">
                                Previous
                            </div>
                        </a>
                    </div>

                    <!-- flex child-2 -->
                    <div class="mt-5">
                        <!-- <button type="submit" class="btn btn-warning">Save</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- code end -->
    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>

</script>

@endsection