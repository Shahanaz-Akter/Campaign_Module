@extends('layouts.master')
@section('title')
<title>Choose_signup_form</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- <div class="text-black">Contacts> Manage Lists> My SampleList>Signupform>Untitled Signup Form</div> -->
        <!-- code start -->

        <form action="{{url('/')}}" method="post" enctype="multipart/form-data">
            @csrf
           

            <div class="d-flex justify-content-center gap-5 mt-5">

                <div class="text-center text-black mt-5">
                    <i class="fa-brands fa-facebook-messenger text-primary" style="font-size: 40px;"></i>
                    <div class="text-primary compact" onclick="compact_form()">Compact Forms</div>
                </div>

                <div class="text-center text-black">
                    <div class="fw-bold">Embedded Forms</div>
                    <div class="mt-4">
                        <i class="fa-brands fa-facebook-messenger text-primary" style="font-size: 40px;"></i>
                        <div class="text-primary compact" onclick="banner_form()">Banner Forms</div>
                    </div>
                </div>

                <div class="text-center text-black">
                    <div class="mt-5">
                        <i class="fa-brands fa-facebook-messenger text-primary" style="font-size: 40px;"></i>
                        <div class="text-primary compact" onclick="long_form()">Long Forms</div>
                    </div>
                </div>


                <div class="text-center text-black">
                    <div class="fw-bold">Library</div>
                    <div class="mt-4">
                        <i class="fa-brands fa-facebook-messenger text-primary" style="font-size: 40px;"></i>
                        <div class="text-primary compact" onclick="saved_form()">Saved Templates</div>
                    </div>
                </div>

            </div>

            <!--  compact start-->
            <div class="mb-5 compact_form">
                <div> Compact</div>
                <!-- row start -->
                <div class="row mb-5 mt-5">

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center" onmouseover="mouseOver1()" onmouseleave="mouseLeave1()">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/1.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger d-none" aria-expanded="false" id="create_new1"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>
                    <!-- child 2 -->

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5">
                        <div class="card h-100 text-center" onmouseover="mouseOver2()" onmouseleave="mouseLeave2()">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/17.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger d-none" aria-expanded="false" id="create_new2"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>
                    <!-- child 3 -->
                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center" onmouseover="mouseOver3()" onmouseleave="mouseLeave3()">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/18.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger d-none" aria-expanded="false" id="create_new3"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>
                    <!-- child 4 -->

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center" onmouseover="mouseOver4()" onmouseleave="mouseLeave4()">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/2.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger d-none" aria-expanded="false" id="create_new4"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>
                    <!-- child 5 -->

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center" onmouseover="mouseOver5()" onmouseleave="mouseLeave5()">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/1.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger d-none" aria-expanded="false" id="create_new5"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>

                    <!-- child 6 -->
                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center" onmouseover="mouseOver6()" onmouseleave="mouseLeave6()">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/4.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger d-none" aria-expanded="false" id="create_new6"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center" onmouseover="mouseOver7()" onmouseleave="mouseLeave7()">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/7.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger d-none" aria-expanded="false" id="create_new7"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center" onmouseover="mouseOver8()" onmouseleave="mouseLeave8()">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/11.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger d-none" aria-expanded="false" id="create_new8"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center" onmouseover="mouseOver9()" onmouseleave="mouseLeave9()">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/12.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger d-none" aria-expanded="false" id="create_new9"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- row end -->
            </div>
            <!-- compact end -->

            <!--  banner start-->
            <div class="mb-5 d-none banner_form">
                <div>Banner</div>
                <!-- row start -->
                <div class="row mb-5 mt-5">

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/1.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>
                    <!-- child 2 -->

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/17.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>
                    <!-- child 3 -->
                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/18.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>
                    <!-- child 4 -->

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/2.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>
                    <!-- child 5 -->

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/1.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>

                    <!-- child 6 -->
                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/4.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/7.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/11.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/12.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/12.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/12.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center">
                            <div>
                                <img class="img-fluid" src="{{asset('/assets/img/elements/12.jpg')}}" alt="image cap">
                            </div>

                            <div class="btn-group mt-2">
                                <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- row end -->
            </div>
            <!-- banner end -->


            <!--  long start-->
            <div class="mb-5 d-none long_form">
                <div>Long</div>
                <!-- row start -->
                <div class="row mb-5 mt-5">

                    <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                        <div class="card h-100 text-center"">
                            <div>
                                <img class=" img-fluid" src="{{asset('/assets/img/elements/1.jpg')}}" alt="image cap">
                        </div>

                        <div class="btn-group mt-2">
                            <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                        </div>

                    </div>
                </div>
                <!-- child 2 -->

                <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5">
                    <div class="card h-100 text-center">
                        <div>
                            <img class="img-fluid" src="{{asset('/assets/img/elements/17.jpg')}}" alt="image cap">
                        </div>

                        <div class="btn-group mt-2">
                            <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                        </div>

                    </div>
                </div>
                <!-- child 3 -->
                <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                    <div class="card h-100 text-center">
                        <div>
                            <img class="img-fluid" src="{{asset('/assets/img/elements/18.jpg')}}" alt="image cap">
                        </div>

                        <div class="btn-group mt-2">
                            <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                        </div>

                    </div>
                </div>
                <!-- child 4 -->

                <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                    <div class="card h-100 text-center">
                        <div>
                            <img class="img-fluid" src="{{asset('/assets/img/elements/2.jpg')}}" alt="image cap">
                        </div>

                        <div class="btn-group mt-2">
                            <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                        </div>

                    </div>
                </div>
                <!-- child 5 -->

                <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                    <div class="card h-100 text-center">
                        <div>
                            <img class="img-fluid" src="{{asset('/assets/img/elements/1.jpg')}}" alt="image cap">
                        </div>

                        <div class="btn-group mt-2">
                            <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                        </div>

                    </div>
                </div>

                <!-- child 6 -->
                <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                    <div class="card h-100 text-center">
                        <div>
                            <img class="img-fluid" src="{{asset('/assets/img/elements/4.jpg')}}" alt="image cap">
                        </div>

                        <div class="btn-group mt-2">
                            <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                    <div class="card h-100 text-center">
                        <div>
                            <img class="img-fluid" src="{{asset('/assets/img/elements/7.jpg')}}" alt="image cap">
                        </div>

                        <div class="btn-group mt-2">
                            <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                    <div class="card h-100 text-center">
                        <div>
                            <img class="img-fluid" src="{{asset('/assets/img/elements/11.jpg')}}" alt="image cap">
                        </div>

                        <div class="btn-group mt-2">
                            <div class="btn btn-danger" aria-expanded="false" id="create_new8"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                        </div>

                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                    <div class="card h-100 text-center">
                        <div>
                            <img class="img-fluid" src="{{asset('/assets/img/elements/12.jpg')}}" alt="image cap">
                        </div>

                        <div class="btn-group mt-2">
                            <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- row end -->
    </div>
    <!-- long end -->


    <!--  Saved start-->
    <div class="mb-5 d-none saved_form">
        <div>Saved</div>
        <!-- row start -->
        <div class="row mb-5 mt-5">

            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                <div class="card h-100 text-center">
                    <div>
                        <img class="img-fluid" src="{{asset('/assets/img/elements/1.jpg')}}" alt="image cap">
                    </div>

                    <div class="btn-group mt-2">
                        <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                    </div>

                </div>
            </div>
            <!-- child 2 -->

            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5">
                <div class="card h-100 text-center">
                    <div>
                        <img class="img-fluid" src="{{asset('/assets/img/elements/17.jpg')}}" alt="image cap">
                    </div>

                    <div class="btn-group mt-2">
                        <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                    </div>

                </div>
            </div>
            <!-- child 3 -->
            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                <div class="card h-100 text-center">
                    <div>
                        <img class="img-fluid" src="{{asset('/assets/img/elements/18.jpg')}}" alt="image cap">
                    </div>

                    <div class="btn-group mt-2">
                        <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                    </div>

                </div>
            </div>
            <!-- child 4 -->

            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                <div class="card h-100 text-center">
                    <div>
                        <img class="img-fluid" src="{{asset('/assets/img/elements/2.jpg')}}" alt="image cap">
                    </div>

                    <div class="btn-group mt-2">
                        <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                    </div>

                </div>
            </div>
            <!-- child 5 -->

            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                <div class="card h-100 text-center">
                    <div>
                        <img class="img-fluid" src="{{asset('/assets/img/elements/1.jpg')}}" alt="image cap">
                    </div>

                    <div class="btn-group mt-2">
                        <div class="btn btn-danger" aria-expanded="false" id="create_new5"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                    </div>

                </div>
            </div>

            <!-- child 6 -->
            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                <div class="card h-100 text-center">
                    <div>
                        <img class="img-fluid" src="{{asset('/assets/img/elements/4.jpg')}}" alt="image cap">
                    </div>

                    <div class="btn-group mt-2">
                        <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                <div class="card h-100 text-center">
                    <div>
                        <img class="img-fluid" src="{{asset('/assets/img/elements/7.jpg')}}" alt="image cap">
                    </div>

                    <div class="btn-group mt-2">
                        <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                <div class="card h-100 text-center">
                    <div>
                        <img class="img-fluid" src="{{asset('/assets/img/elements/11.jpg')}}" alt="image cap">
                    </div>

                    <div class="btn-group mt-2">
                        <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                    </div>

                </div>
            </div>


            <div class="col-md-3 col-lg-3 col-xxl-3 col-sm-3 mb-5 ">
                <div class="card h-100 text-center">
                    <div>
                        <img class="img-fluid" src="{{asset('/assets/img/elements/12.jpg')}}" alt="image cap">
                    </div>

                    <div class="btn-group mt-2">
                        <div class="btn btn-danger" aria-expanded="false"> <a href="{{url('/template_1')}}" class="text-white">Use Template</a></div>
                    </div>

                </div>
            </div>

        </div>
        <!-- row end -->
    </div>
    <!-- Saved end -->





    <div class="navbar navbar-expand-lg sticky-bottom mt-5 mb-2" style="height: 100px!important">
        <div>
            <a href="{{url('/managelist_signupform')}}">
                <div class="btn btn-warning">
                    Previous
                </div>
            </a>
        </div>

        <!-- <div class="ms-5">
                    <button type="submit" class="btn btn-warning">Save</button>
                </div> -->
    </div>

    </form>
    <!-- code end -->

</div>
<!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>
    const mouseOver1 = () => {
        let create1 = document.querySelector('#create_new1');
        create1.classList.remove('d-none');
    }

    const mouseLeave1 = () => {
        let create1 = document.querySelector('#create_new1');
        create1.classList.add('d-none');
    }

    const mouseOver2 = () => {
        let create2 = document.querySelector('#create_new2');
        create2.classList.remove('d-none');
    }

    const mouseLeave2 = () => {
        let create2 = document.querySelector('#create_new2');
        create2.classList.add('d-none');
    }

    const mouseOver3 = () => {
        let create3 = document.querySelector('#create_new3');
        create3.classList.remove('d-none');
    }

    const mouseLeave3 = () => {
        let create3 = document.querySelector('#create_new3');
        create3.classList.add('d-none');
    }

    const mouseOver4 = () => {
        let create4 = document.querySelector('#create_new4');
        create4.classList.remove('d-none');
    }

    const mouseLeave4 = () => {
        let create4 = document.querySelector('#create_new4');
        create4.classList.add('d-none');
    }

    const mouseOver5 = () => {
        let create5 = document.querySelector('#create_new5');
        create5.classList.remove('d-none');
    }

    const mouseLeave5 = () => {
        let create5 = document.querySelector('#create_new5');
        create5.classList.add('d-none');
    }
    const mouseOver6 = () => {
        let create6 = document.querySelector('#create_new6');
        create6.classList.remove('d-none');
    }

    const mouseLeave6 = () => {
        let create6 = document.querySelector('#create_new6');
        create6.classList.add('d-none');
    }
    const mouseOver7 = () => {
        let create7 = document.querySelector('#create_new7');
        create7.classList.remove('d-none');
    }

    const mouseLeave7 = () => {
        let create7 = document.querySelector('#create_new7');
        create7.classList.add('d-none');
    }
    const mouseOver8 = () => {
        let create8 = document.querySelector('#create_new8');
        create8.classList.remove('d-none');
    }

    const mouseLeave8 = () => {
        let create8 = document.querySelector('#create_new8');
        create8.classList.add('d-none');
    }

    const mouseOver9 = () => {
        let create9 = document.querySelector('#create_new9');
        create9.classList.remove('d-none');
    }

    const mouseLeave9 = () => {
        let create9 = document.querySelector('#create_new9');
        create9.classList.add('d-none');
    }
</script>

<script>
    const compact_form = () => {
        let compact = document.querySelector('.compact_form');
        let banner = document.querySelector('.banner_form');
        let long = document.querySelector('.long_form');
        let saved = document.querySelector('.saved_form');

        console.log(compact);

        if (compact.classList.contains('d-none')) {
            compact.classList.remove('d-none');

            banner.classList.add('d-none');
            long.classList.add('d-none');
            saved.classList.add('d-none');
        }
    }

    const banner_form = () => {
        let compact = document.querySelector('.compact_form');
        let banner = document.querySelector('.banner_form');
        let long = document.querySelector('.long_form');
        let saved = document.querySelector('.saved_form');

        if (banner.classList.contains('d-none')) {
            banner.classList.remove('d-none');

            compact.classList.add('d-none');
            long.classList.add('d-none');
            saved.classList.add('d-none');
        }
    }

    const long_form = () => {
        let compact = document.querySelector('.compact_form');
        let banner = document.querySelector('.banner_form');
        let long = document.querySelector('.long_form');
        let saved = document.querySelector('.saved_form');

        if (long.classList.contains('d-none')) {
            long.classList.remove('d-none');

            compact.classList.add('d-none');
            banner.classList.add('d-none');
            saved.classList.add('d-none');
        }
    }

    const saved_form = () => {
        let compact = document.querySelector('.compact_form');
        let banner = document.querySelector('.banner_form');
        let long = document.querySelector('.long_form');
        let saved = document.querySelector('.saved_form');
        console.log(saved);
        if (saved.classList.contains('d-none')) {
            saved.classList.remove('d-none');

            compact.classList.add('d-none');
            banner.classList.add('d-none');
            long.classList.add('d-none');
        }
    }
</script>
@endsection