@extends('layouts.master')
@section('title')
<title>Google Analytics</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between" style="font-size: 25px;">
            <div class="title mb-2">Google Analytics</div>
            <div></div>
        </div>

        <div class="mt-5">
            <div class="p-5 mb-2">
                <div></div>
                <div class="text-center mb-5" style="font-size: 25px;">
                    <span class="mb-2">
                        You haven't integrated your Google Analytics account with Zoho Campaigns.
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div class="mb-2" style="font-size: 20px;">
                        Track website visitors and view analytics related information from your Zoho Campaigns account.
                    </div>
                </div>

                <div class="d-flex justify-content-center gap-4 mb-5">
                    <a href="">
                        <div class="btn btn-warning" data-bs-toggle="modal" data-bs-target="">Assiciated Google Account</div>
                    </a>
                </div>
            </div>


        </div>








        <!-- create_campaings modal start -->

        <div class="modal fade" id="create_campaings" tabindex="-1" aria-hidden="true">
            <div class="modal-xl modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <!-- Navbar content -->
                        <div class="title mt-2 text-uppercase">Ecommerce</div>

                        <hr class="mb-5">

                        <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="row">

                                <div class="row col-12 col-md-11 col-lg-11 col-xl-11 mb-5">
                                    <label for="campaign_name" class="row col-12 col-md-2 col-lg-2 col-xl-2">Campaign Name</label>

                                    <div class="row col-12 col-md-9 col-lg-9 col-xl-9">
                                        <input type="text" class="ms-2 form-control" id="campaign_name" name="campaign_name" value="" />
                                    </div>
                                </div>


                                <div class="row col-12 col-md-11 col-lg-11 col-xl-11 mb-5">

                                    <label for="campaign_name" class="row col-12 col-md-2 col-lg-2 col-xl-2">Assign Topics</label>

                                    <div class="row col-12 col-md-9 col-lg-9 col-xl-9">
                                        <select id="" class="form-select form-control">

                                            <option value="">Select a topic</option>
                                            <option value="Australia">Brand topic</option>
                                            <option value="United Arab Emirates">Marketing</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row col-12 col-md-11 col-lg-11 col-xl-11 mb-5">

                                    <label for="campaign_name" class="row col-12 col-md-2 col-lg-2 col-xl-2"></label>

                                    <div class="row col-12 col-md-9 col-lg-9 col-xl-9">
                                        Topic lets you group your contacts based on their interests. By choosing a Topic Name, this campaign will be sent only to those contacts who have chosen the specific topic. Learn More
                                    </div>
                                </div>


                                <div class="row col-12 col-md-9 col-lg-9 col-xl-9 mb-5">

                                </div>

                                <div class="row col-12 col-md-2 col-lg-2 col-xl-2 mb-5">
                                    <div class="btn btn-outline-warning">Save and Proceed</div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--create_campaings modal end -->

    </div>
</div>


<script>


</script>






@endsection