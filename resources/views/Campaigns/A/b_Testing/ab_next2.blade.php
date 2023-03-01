@extends('layouts.master')
@section('title')
<title>A/B Testing Campaign Next2</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- code start -->

        <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <!-- row class start -->
                <div class="d-flex gap-5 align-items-center justify-content-around mb-5 " style="margin: auto!important; max-width: 50%!important; padding: 2rem!important;">

                    <div class="col-md-3 col-lg-3 w-75 mb-5 mt-5 bd-highlight  all_campaign">
                        <a href="{{url('/predesigned_template')}}">
                            <div class="card h-100 text-center" style="border-radius: 1.5rem!important">

                                <div class="icon-card cursor-pointer text-center  mb-3 mx-2">
                                    <i class="img-fluid bx bxl-facebook-circle mb-2 mt-5" style="font-size: 50px!important;"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Predesigned Template</h5>
                                </div>

                                <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250smallx;  width: auto;" alt="Card image cap" /> -->
                                <div class="card-body">
                                    <p class="card-text d-block" style="color: black;">Use our pre-designed templates, personalize the content, and send emails quickly.<span class="typcn typcn-warning-outline"></span></p>
                                </div>

                            </div>
                        </a>
                    </div>


                    <div class="col-md-3 col-lg-3 mb-5 w-75 mt-5 all_campaign">
                        <a href="{{url('/basic_template')}}">
                            <div class="card h-100 text-center" style="border-radius: 1.5rem!important">
                                <div class="icon-card cursor-pointer text-center  mb-3 mx-2">
                                    <i class=" img-fluid bx bxl-facebook-circle mb-2 mt-5" style="font-size: 50px!important;"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Basic Template</h5>
                                </div>

                                <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                                <div class="card-body">
                                    <p class="card-text d-block" style="color: black;">Pick one of our plain and simple layouts and add just text and images to your content.
                                        <span class="typcn typcn-warning-outline"></span>
                                    </p>
                                </div>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <!-- row class end -->

            <div class="row">
                <!-- row class start -->
                <div class="d-flex gap-3 align-items-center justify-content-around mb-5 " style="margin: auto!important; max-width: 50%!important; padding: 2rem!important;">

                    <div class="col-md-3 col-lg-3 w-50 mb-5 mt-5 bd-highlight over">

                        <div class="h-100 text-center">
                            <div class="icon-card cursor-pointer text-center  mb-3 mx-2">
                                <!-- <i class="img-fluid bx bxl-facebook-circle mb-2 mt-5"></i> -->
                                <i class="img-fluid fa-solid fa-cloud-arrow-up text-primary mb-2 mt-5" style="font-size: 50px!important;"></i>
                            </div>
                            <div class="card-body">

                                <div class="btn-group">
                                    <h5 class="card-title dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                        Import/Upload HTML
                                    </h5>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{url('/upload_from_computer')}}">Upload From Computer</a></li>
                                        <li><a class="dropdown-item" href="{{url('/import_from_cloud')}}">Import From Cloud</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                            <div class="card-body">
                                <p class="card-text d-block" style="color: black;">Import/upload your HTML and CSS files, and use them for your content.
                                    <span class="typcn typcn-warning-outline"></span>
                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-3 col-lg-3  mb-5 mt-5 bd-highlight w-50 over">

                        <a href="{{url('/recently_sent')}}">

                            <div class="h-100 text-center">
                                <div class="icon-card cursor-pointer text-center  mb-3 mx-2">

                                    <i class="img-fluid fa-regular fa-message text-primary f-5 mb-2 mt-5" style="font-size: 50px!important;"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Recently Sent
                                    </h5>
                                </div>
                                <!-- <img class=" img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                                <div class="card-body">
                                    <p class="card-text d-block" style="color: black;">Use the template from a recently sent campaign.
                                        <span class="typcn typcn-warning-outline"></span>
                                    </p>
                                </div>
                            </div>

                        </a>

                    </div>

                </div>
            </div>
            <!-- row class end -->
    </div>
    </form>

    <div class="d-flex justify-content-around ">

        <!-- flex child-1 -->
        <a href="{{url('/ab_next1')}}">
            <div class="btn btn-warning">
                Previous
            </div>
        </a>

        <!-- flex child-2 -->
        <a href="{{url('/ab_next3')}}">
            <div class="btn btn-warning">
                Next
            </div>
        </a>

    </div>
    <!-- code end -->

</div>
<!-- Content end-->
</div>
<!-- Content wrapper end -->




@endsection