@extends('layouts.master')
@section('title')
<title>Social Campaigns</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <h6 style="font-family: 'Lato', sans-serif;">Campaigns> Email Campaings</h6><br>
    <div class="d-flex justify-content-between align-items-center shadow-xm p-2 mb-5" style="background-color: #fff;">
        <h5 class="ms-4" style="font-family: 'Lato', sans-serif;  margin-bottom: 0px!important;">Social Campaings</h5>
        <h5 class="btn btn-warning me-4"><a style="color: white!important; margin-bottom: 0px!important;" href=" {{url('/manage_pages')}}">Manage Pages</a></h5>

    </div>

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- row class start -->
        <div class="row mb-5">

            <div class="col-md-6 col-lg-6 mb-5">

                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Page Campaigns</h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class=" img-fluid bx bxl-facebook-circle"></i>
                    </div>

                    <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                    <div class="card-body mb-3">
                        <p class="card-text d-block" style="color: black;">Run promotions, deals, and contests to turn your Facebook page visitors to customer.<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div class="">
                        <a class="btn btn-warning" style="width: 150px!important; margin: 0 auto; margin-bottom: 40px;" href="{{url('/page_campaigns')}}">Create New</a>
                    </div>

                </div>

            </div>


            <div class="col-md-6 col-lg-6 mb-5">
                <div class="card h-100 text-center" onmouseover="mouseOver2()" onmouseleave="mouseLeave2()" data-bs-toggle="modal" data-bs-target="#filtering2">
                    <div class="card-body">
                        <h5 class="card-title">Post Campaigns</h5>
                    </div>

                    <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                        <i class=" img-fluid bx bxl-facebook-circle mb-2"></i>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="color: black;">Engage with your audience through social media updates.<span class="typcn typcn-warning-outline"></span></p>
                    </div>

                    <div class="">
                        <a class="btn btn-warning" style="width: 150px!important; margin: 0 auto; margin-bottom: 40px;" href="{{url('/post_campaigns')}}">Create New</a>
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

</script>

@endsection