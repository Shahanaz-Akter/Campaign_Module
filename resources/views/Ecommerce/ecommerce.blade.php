@extends('layouts.master')
@section('title')
<title>Ecommerce</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between" style="font-size: 25px;">
            <div class="title mb-2">Ecommerce</div>
            <div></div>
        </div>

        <div class="">
            <div class="p-5 mb-2">
                <div></div>
                <div class="text-center mb-5" style="font-size: 25px;">
                    <span class="mb-2">
                        Icon
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div class="fs-4 mb-2">Connect your online store with Zoho Campaigns</div>

                    <div class="fs-4">Connect your online store, attract more customers, send promotional campaigns,and earn a greater return on your investment.
                        <br> Recover sales from abandoned carts, bring customers back to your store
                        <br>using automated email follow-ups, and much more.
                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-center gap-4 mb-5">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#proceed">proceed</button>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#learn_more">Learn More</button>
            </div>


        </div>








        <!-- proceed modal start -->
        <div class="modal fade" id="proceed" tabindex="-1" aria-hidden="true">
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

                                <div class="col-md-6 col-lg-6 col-xl-6 mb-3 mt-2 p-5" style="border: 1px solid 	snow;">

                                    <div class="mb-2 text-primary fw-bold"><i class="fas fa-credit-card  me-2"></i> Zoho Commerce </div>
                                    <div class="mb-4">Connect your online store, scale your ecommerce, send promotional and automated follow-up emails, and sell more products by integrating with Zoho Commerce.</div>
                                    <div class="d-flex mb-2 gap-4 ">
                                        <a href="">
                                            <div type="" class="btn btn-primary">Integrate</div>
                                        </a>
                                        <a href="">
                                            <div type="" class="btn btn-outline-primary">Learn More</div>
                                        </a>
                                    </div>

                                </div>


                                <div class="col-md-6 col-lg-6 col-xl-6 mb-4 mt-2 p-5" style="border: 1px solid 	snow;">

                                    <div class="mb-2 text-primary fw-bold"> <i class="fab fa-shopify me-2"></i> Shopify</div>
                                    <div class="mb-4">Connect your online store, scale your ecommerce, send promotional and automated follow-up emails, and sell more products by integrating with Zoho Commerce.</div>
                                    <div class="d-flex mb-2 gap-4 ">

                                        <a href="">
                                            <div type="" class="btn btn-primary">Integrate</div>
                                        </a>
                                        <a href="">
                                            <div type="" class="btn btn-outline-primary">Learn More</div>
                                        </a>
                                    </div>

                                </div>


                                <div class="col-md-6 col-lg-6 col-xl-6 mb-4 mt-2 p-5" style="border: 1px solid 	snow;">

                                    <div class="mb-2 text-primary fw-bold"><span class=""><i class="fas fa-dollar-sign me-2"></i></span>Woo Commerce</div>
                                    <div class="mb-4">Connect your online store, scale your ecommerce, send promotional and automated follow-up emails, and sell more products by integrating with Zoho Commerce.</div>
                                    <div class="d-flex mb-2">
                                        <a href="">
                                            <div type="" class="btn btn-primary">Learn More</div>
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--proceed modal end -->

    </div>
</div>


<script>
    const mosha = () => {


    }
</script>






@endsection