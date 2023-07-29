@extends('layouts.master')
@section('title')
<title>Create Workflows</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between" style="font-size: 25px;">
            <div class="mb-2"> <a href="{{url('/workflows')}}"><i class="fa fa-arrow-left me-4"></i></a>
                Create Workflows</div>
            <div></div>
        </div>
        <hr>

        <div class="d-flex justify-content-around gap-2 mb-5">
            <div class="btn btn-outline-primary" onclick="all()">All</div>
            <div class="btn btn-outline-primary" onclick="welcome_and_onboarding()"> Welcome and Onboarding</div>
            <div class="btn btn-outline-primary" onclick="nurture_series()">Nurture Series</div>
            <div class="btn btn-outline-primary" onclick="re_engagement()">Re-engagement</div>
            <div class="btn btn-outline-primary" onclick="customer_retention()">Customer Retention</div>
            <div class="btn btn-outline-primary" onclick="ecommerce_conditional()"> EcommerceConditional</div>
            <div class="btn btn-outline-primary" onclick="workflow()">Workflow</div>

        </div>



        <div class="">

            <!-- row  start-->
            <div class="ms-4 mb-5 fw-bold text-uppercase text-warning fs-4">Welcome and Onboarding</div>

            <!-- visible first div start -->
            <div class="d-flex justify-content-center gap-4 mb-5" style="flex-wrap:wrap;">

                <!-- child 1 -->

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Courteous</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>
                    </div>
                </div>

                <!-- child 2 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Fad</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>


            </div>
            <!-- visible first div end -->


            <!-- invisivle  div start -->

            <!-- Below div there will be some card will be added when we click show more button -->
            <div class="d-flex justify-content-center gap-4 d-none more_onboard mb-5" style="flex-wrap:wrap;">
                <!-- child 1 -->

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Courteous</div>
                    <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <!-- child 2 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Courteous</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>


                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Courteous</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Courteous</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>


                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Courteous</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

            </div>
            <!-- invisivle  div end  -->

            <div class="mt-5 d-flex align-items-center justify-content-center ">
                <div class="btn btn-outline-warning rounded-5 show_more" onclick="more_onboard()"> Show More</div>
            </div>
            <!-- row end -->



            <!-- row  start-->
            <div class="ms-4 mb-5 fw-bold text-uppercase text-warning fs-4">Nurture Series</div>

            <!-- visible first div start -->
            <div class="d-flex justify-content-center gap-4 mb-5" style="flex-wrap:wrap;">
                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prudence</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                        </a>

                    </div>
                </div>

                <!-- child 2 -->

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Failte</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Embrace</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
            </div>
            <!-- visible first div end -->

            <!-- invisivle  div start -->
            <!-- Below div there will be some card will be added when we click show more button -->
            <div class="d-flex justify-content-center gap-4 d-none more_nurture_series mb-5" style="flex-wrap:wrap;">

                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prime</div>
                    <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <!-- child 2 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Novel</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Foster</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
            </div>
            <!-- invisivle  div end  -->

            <div class="mt-5 d-flex align-items-center justify-content-center ">
                <div class="btn btn-outline-warning rounded-5 show_more" onclick="more_nurture_series()"> Show More</div>
            </div>
            <!-- row end -->


          



            <!-- row  start-->
            <div class="ms-4 mb-5 fw-bold text-uppercase text-warning fs-4"> Re-engagement
            </div>

            <!-- visible first div start -->
            <div class="d-flex justify-content-center gap-4 mb-5" style="flex-wrap:wrap;">
                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prudence</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                        </a>

                    </div>
                </div>

                <!-- child 2 -->

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Failte</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Embrace</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
            </div>
            <!-- visible first div end -->

            <!-- invisivle  div start -->
            <!-- Below div there will be some card will be added when we click show more button -->
            <div class="d-flex justify-content-center gap-4 d-none  more_re_engagement mb-5" style="flex-wrap:wrap;">

                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prime</div>
                    <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <!-- child 2 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Novel</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Foster</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
            </div>
            <!-- invisivle  div end  -->

            <div class="mt-5 d-flex align-items-center justify-content-center ">
                <div class="btn btn-outline-warning rounded-5 show_more" onclick="more_re_engagement()"> Show More</div>
            </div>
            <!-- row end -->







            <!-- row  start-->
            <div class="ms-4 mb-5 fw-bold text-uppercase text-warning fs-4">Customer Retention
            </div>

            <!-- visible first div start -->
            <div class="d-flex justify-content-center gap-4 mb-5" style="flex-wrap:wrap;">
                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prudence</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                        </a>

                    </div>
                </div>

                <!-- child 2 -->

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Failte</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Embrace</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
            </div>
            <!-- visible first div end -->

            <!-- invisivle  div start -->
            <!-- Below div there will be some card will be added when we click show more button -->
            <div class="d-flex justify-content-center gap-4 d-none more_custome_retentionr mb-5" style="flex-wrap:wrap;">
                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prime</div>
                    <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <!-- child 2 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Novel</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Foster</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
            </div>
            <!-- invisivle  div end  -->

            <div class="mt-5 d-flex align-items-center justify-content-center ">
                <div class="btn btn-outline-warning rounded-5 show_more" onclick="more_custome_retentionr()"> Show More</div>
            </div>
            <!-- row end -->

            <!-- row  start-->
            <div class="ms-4 mb-5 fw-bold text-uppercase text-warning fs-4"> Re-engagement
            </div>

            <!-- visible first div start -->
            <div class="d-flex justify-content-center gap-4 mb-5" style="flex-wrap:wrap;">
                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prudence</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                        </a>

                    </div>
                </div>

                <!-- child 2 -->

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Failte</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Embrace</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
            </div>
            <!-- visible first div end -->

            <!-- invisivle  div start -->
            <!-- Below div there will be some card will be added when we click show more button -->
            <div class="d-flex justify-content-center gap-4 d-none  more_re_engagement mb-5" style="flex-wrap:wrap;">

                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prime</div>
                    <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <!-- child 2 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Novel</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Foster</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
            </div>
            <!-- invisivle  div end  -->

            <div class="mt-5 d-flex align-items-center justify-content-center ">
                <div class="btn btn-outline-warning rounded-5 show_more" onclick="more_re_engagement()"> Show More</div>
            </div>
            <!-- row end -->



        




            <!-- row  start-->
            <div class="ms-4 mb-5 fw-bold text-uppercase text-warning fs-4">
                Ecommerce Conditional
            </div>

            <!-- visible first div start -->
            <div class="d-flex justify-content-center gap-4 mb-5" style="flex-wrap:wrap;">
                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prudence</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                        </a>

                    </div>
                </div>

                <!-- child 2 -->

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Failte</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>


            </div>
            <!-- visible first div end -->

            <!-- invisivle  div start -->
            <!-- Below div there will be some card will be added when we click show more button -->
            <div class="d-flex justify-content-center gap-4 d-none  
            more_ecommerce_conditional mb-5" style="flex-wrap:wrap;">

                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prime</div>
                    <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <!-- child 2 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Novel</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Foster</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
            </div>
            <!-- invisivle  div end  -->

            <div class="mt-5 d-flex align-items-center justify-content-center ">
                <div class="btn btn-outline-warning rounded-5 show_more" onclick="more_ecommerce_conditional()"> Show More</div>
            </div>
            <!-- row end -->


            <!-- row  start-->
            <div class="ms-4 mb-5 fw-bold text-uppercase text-warning fs-4">
                Workflow
            </div>

            <!-- visible first div start -->
            <div class="d-flex justify-content-center gap-4 mb-5" style="flex-wrap:wrap;">
                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prudence</div>
                    <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                        </a>

                    </div>
                </div>

                <!-- child 2 -->

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Failte</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>


            </div>
            <!-- visible first div end -->

            <!-- invisivle  div start -->
            <!-- Below div there will be some card will be added when we click show more button -->
            <div class="d-flex justify-content-center gap-4 d-none  
            more_orkflow mb-5" style="flex-wrap:wrap;">

                <!-- child 1 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Prime</div>
                    <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <!-- child 2 -->
                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Novel</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>

                <div class="card text-center" style="max-width: 220px;">
                    <div class="card-title">Foster</div>
                    <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                        <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                    </div>
                </div>
            </div>
            <!-- invisivle  div end  -->

            <div class="mt-5 d-flex align-items-center justify-content-center ">
                <div class="btn btn-outline-warning rounded-5 show_more" onclick="Workflow()"> Show More</div>
            </div>
            <!-- row end -->

            <!-- This way others will be added in this position -->
        </div>



    


        <section class="top_five_campaigns d-none">

            <div class="mt-5">
                <div class="p-5 mb-2">
                    <div></div>
                    <div class="text-center mb-5" style="font-size: 25px;">
                        <div><i class="fas fa-envelope text-primary" style="font-size: 100px;;"></i></div>

                        <span class="mb-2">
                            At least two or more campaigns have to be sent to draw this statistics.
                            <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                        </span>

                    </div>

                    <div class="d-flex justify-content-center gap-4 mb-5">


                        <a href="{{url('/zoho_regular_campaign')}}">
                            <div class="btn btn-warning">Create Campaigns</div>
                        </a>

                    </div>
                </div>


            </div>

        </section>


        <section class="yearly_report d-none mt-5">
            <div class="d-flex justify-content-between">
                <div class="mb-3">
                    <select id="" class="form-select form-control w-100">
                        <option value="">Select</option>
                        <option value="">Monthly Aggregate</option>
                        <option value="">Campaign Aggregate</option>
                    </select>
                </div>

                <div></div>
            </div>

            <div class="d-flex justify-content-between">



                <div>Real-time Date</div>

                <div class="d-flex justify-content-end gap-2">
                    <div class="me-2 mt-2">Year</div>
                    <div class="">
                        <div class="">
                            <select id="" class="form-select form-control w-100">
                                <option value="">Select</option>
                                <option value="">2023</option>
                                <option value="">2022</option>
                                <option value="">2021</option>
                                <option value="">2020</option>
                            </select>
                        </div>
                    </div>
                </div>


            </div>


            <div class="mt-4">
                <div class="p-5 mb-2">
                    <div></div>
                    <div class="text-center mb-5" style="font-size: 25px;">
                        <div><i class="fas fa-envelope text-primary" style="font-size: 100px;;"></i></div>

                        <span class="mb-2">
                            No email campaign was sent during this year/month.
                        </span>

                    </div>

                    <div class="d-flex justify-content-center gap-4 mb-5">


                        <div class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#create_campaings">Create Campaigns</div>

                    </div>
                </div>


            </div>

        </section>

    


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
    const all = () => {
        let all = document.querySelector('.all');
        let welcome_and_onboarding = document.querySelector('.welcome_and_onboarding');
        let nurture = document.querySelector('.nurture_series');
        let re_engagement = document.querySelector('.re_engagement');
        let customer = document.querySelector('.customer_retention');
        let ecommerce_conditional = document.querySelector('.ecommerce_conditional');
        let workflow = document.querySelector('.workflow');


        if (contact_data.classList.contains('d-none')) {

            contact_data.classList.remove('d-none');
            top_five_campaigns.classList.add('d-none');
            yearly_report.classList.add('d-none');
            comparison.classList.add('d-none');

        }

    }


    const top_five_campaigns = () => {
        let contact_data = document.querySelector('.contact_data');
        let top_five_campaigns = document.querySelector('.top_five_campaigns');
        let yearly_report = document.querySelector('.yearly_report');
        let comparison = document.querySelector('.comparison');


        if (top_five_campaigns.classList.contains('d-none')) {
            top_five_campaigns.classList.remove('d-none');

            contact_data.classList.add('d-none');
            yearly_report.classList.add('d-none');
            comparison.classList.add('d-none');

        }

    }

    const yearly_report = () => {
        let contact_data = document.querySelector('.contact_data');
        let top_five_campaigns = document.querySelector('.top_five_campaigns');
        let yearly_report = document.querySelector('.yearly_report');
        let comparison = document.querySelector('.comparison');


        if (yearly_report.classList.contains('d-none')) {
            yearly_report.classList.remove('d-none');

            top_five_campaigns.classList.add('d-none');
            contact_data.classList.add('d-none');
            comparison.classList.add('d-none');

        }

    }
    const comparison = () => {
        let contact_data = document.querySelector('.contact_data');
        let top_five_campaigns = document.querySelector('.top_five_campaigns');
        let yearly_report = document.querySelector('.yearly_report');
        let comparison = document.querySelector('.comparison');


        if (comparison.classList.contains('d-none')) {
            comparison.classList.remove('d-none');

            top_five_campaigns.classList.add('d-none');
            contact_data.classList.add('d-none');
            yearly_report.classList.add('d-none');

        }
    }
</script>

@endsection