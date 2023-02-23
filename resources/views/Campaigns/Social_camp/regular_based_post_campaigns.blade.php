@extends('layouts.master')
@section('title')
<title>regular based Post Campaigns</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">
    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">


        <form action="{{url('/post_data')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="d-flex justify-content-between">
                <h5 style="font-family: 'Lato', sans-serif;">
                    <a href="{{url('/social_campaigns')}}"><i class="ms-3 me-2 fa-solid fa-arrow-left"></i></a>
                    Regular Based Post Campaings
                </h5>

                <button type="submit" class="btn btn-primary me-3 mb-4" style="font-family: 'Lato', sans-serif;">
                    <a class="text-white" href="{{url('/social_campaigns')}}"> Save and Exit</a>

                </button>
            </div>


            <!-- row class start -->
            <div class="row container">

                <div class="row mb-3">
                    <label class="col-sm-4 col-sm-4 col-lg-2 text-end">Name</label>
                    <div class="col-sm-8 col-lg-7">
                        <input class="form-control " type="text" placeholder="This is for your own references">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-sm-4 col-lg-2 text-end">Image Contents</label>
                    <div class="col-sm-8 col-lg-7">
                        <input class="form-control " type="text" placeholder="Looks like you do not have any post yet">
                    </div>
                </div>

                <!-- File input -->
                <div class="row mb-3">
                    <label class="col-sm-3 col-sm-4 col-lg-2 text-end">Image Upload</label>
                    <div class="col-sm-8 col-lg-7">
                        <div class="demo-vertical-spacing demo-only-element">
                            <div class="input-group">
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- File input -->

                <div class="mb-5">
                    <label class="mb-2" style="margin-left: 95px!important;">Where would you like to post this Campaign?</label>

                    <div class="d-flex justify-content-around col-sm-8 col-lg-6 mt-3 align-items-center" style="margin-left: 100px;">
                        <div><a href="{{url('/facebook_api')}}"><i class="fa-brands fa-facebook text-primary ms-5" style="font-size: 40px;"></i></a> </div>
                        <div><a href="{{url('/skype_api')}}"><i class="fa-brands fa-skype text-black" style="font-size: 40px;"></i></a> </div>
                        <div><a href="{{url('/twitter_api')}}"><i class="fa-brands fa-twitter text-primary" style="font-size: 40px;"></i></a> </div>
                        <div><a href="{{url('/tumblr_api')}}"><i class="fa-brands fa-tumblr text-black" style="font-size: 40px;"></i></a> </div>
                        <div><a href="{{url('/linked_in_api')}}"> <i class="fa-brands fa-linkedin text-primary" style="font-size: 40px;"></i></a></div>
                    </div>
                </div>

            </div>
            <!-- row class end -->

        </form>


        <div class="d-flex justify-content-between mt-5">

            <button type="submit" class="btn btn-outline-secondary me-5" style="font-family: 'Lato', sans-serif;">
                <a class="text-black" href="{{url('/social_campaigns')}}">Cancel</a>
            </button>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-danger me-5" style="font-family: 'Lato', sans-serif;">
                    <a class="text-white" href="{{url('/schedule')}}">Schedule</a>

                </button>

                <button type="submit" class="btn btn-danger me-5" style="font-family: 'Lato', sans-serif;">
                    <a class="text-white" href="{{url('/post_now')}}">Post Now</a>
                </button>

            </div>

        </div>

    </div>
    <!-- Content end-->

</div>
<!-- Content Wrapper end-->

@endsection