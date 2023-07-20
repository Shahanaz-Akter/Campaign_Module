@extends('layouts.master')
@section('title')
<title>Campaign Based Report</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between" style="font-size: 25px;">
            <div class="title mb-2">Campaign Based Report</div>
            <div></div>
        </div>
        <hr>
        <div class="d-flex justify-content-start gap-4 mb-5">
            <div class="btn btn-outline-primary" onclick="top_five()">Top Five</div>
            <div class="btn btn-outline-primary" onclick="last_five()">Last Five</div>
            <div class="btn btn-outline-primary" onclick="last_30()">Last 30dDays</div>
            <div class="btn btn-outline-primary" onclick="yearly_report()">Yearly report</div>
            <div class="btn btn-outline-primary" onclick="comparison()">Comparison</div>
        </div>

        <section class="top_five">

            <div class="d-flex justify-content-between">
                <div>

                    <div class="">
                        <select name="" id="" class="form-select form-control">
                            <optgroup label="Opened Campaigns">
                                <option value="">Open Percentage</option>
                                <option value="" selected>Open Count</option>
                            </optgroup>
                            <optgroup label="Clicked Campaigns">
                                <option value="">Mercedes</option>
                                <option value="">Audi</option>
                            </optgroup>

                            <optgroup label="Clicked URLS">
                                <option value=""></option>
                                <option value=""></option>
                            </optgroup>
                        </select>


                        <!-- <select id="" class="form-select form-control">

                        <option value="">Select</option>
                        <option value="Australia">Brand topic</option>
                        <option value="United Arab Emirates">Marketing</option>

                    </select> -->
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <div class="me-2 mt-2">Top five campaigns in the month of</div>

                    <div class="me-4">
                        <div class="">
                            <select id="" class="form-select form-control">

                                <option value="">Select</option>
                                <option value="">Jan</option>
                                <option value="">Feb</option>
                                <option value="">Mar</option>
                                <option value="">April</option>
                                <option value="">May</option>
                                <option value="">June</option>
                                <option value="">July</option>
                                <option value="">August</option>
                                <option value="">Sep</option>
                                <option value="">October</option>
                                <option value="">Nov</option>
                                <option value="">Dec</option>

                            </select>
                        </div>
                    </div>
                    <div class="me-2 mt-2">Year</div>

                    <div class="">
                        <div class="">
                            <select id="" class="form-select form-control">

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


            <div class="mt-5">
                <div class="p-5 mb-2">
                    <div></div>

                    <div class="text-center mb-5" style="font-size: 25px;">
                        <div>icon <i></i></div>
                        <span class="mb-2">
                            At least two or more campaigns have to be sent to draw this statistics.
                        </span>

                        <div class="mb-2" style="font-size: 20px;">
                            <span class="me-5">Would you like to send one?</span> <span> Create Campaign</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center gap-4 mb-5">
                        <a href="">
                            <!-- <div class="btn btn-warning" data-bs-toggle="modal" data-bs-target="">Assiciated Google Account</div> -->
                        </a>
                    </div>
                </div>


            </div>

        </section>


        <section class="last_five d-none">

            <div class="mt-5">
                <div class="p-5 mb-2">
                    <div></div>
                    <div class="text-center mb-5" style="font-size: 25px;">
                        <span class="mb-2">
                            You haven't sent any campaigns yet.Would you like to send one?
                            Create Campaign
                            <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                        </span>

                    </div>

                    <div class="d-flex justify-content-center gap-4 mb-5">


                        <div class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#create_campaings">Create Campaigns</div>

                    </div>
                </div>


            </div>

        </section>

        <section class="last_30 d-none">
            <div class="mt-5">
                <div class="p-5 mb-2">
                    <div></div>
                    <div class="text-center mb-5" style="font-size: 25px;">
                        <span class="mb-2">
                            You haven't sent any campaigns yet.Would you like to send one?
                            Create Campaign
                            <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                        </span>

                    </div>

                    <div class="d-flex justify-content-center gap-4 mb-5">


                        <div class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#create_campaings">Create Campaigns</div>

                    </div>
                </div>


            </div>

        </section>

        <section class="yearly_report d-none mt-5">

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

        <section class="comparison d-none">
            <div class="mt-5">
                <div class="p-5 mb-2">
                    <div></div>
                    <div class="text-center mb-5" style="font-size: 25px;">
                        <span class="mb-2">
                            You haven't sent any campaigns yet.Would you like to send one?
                            Create Campaign
                            <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
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
    const top_five = () => {
        let top_five = document.querySelector('.top_five');
        let last_five = document.querySelector('.last_five');
        let last_30 = document.querySelector('.last_30');
        let yearly_report = document.querySelector('.yearly_report');
        let comparison = document.querySelector('.comparison');


        if (top_five.classList.contains('d-none')) {

            top_five.classList.remove('d-none');
            last_five.classList.add('d-none');
            last_30.classList.add('d-none');
            yearly_report.classList.add('d-none');
            comparison.classList.add('d-none');

        }

    }


    const last_five = () => {
        let top_five = document.querySelector('.top_five');
        let last_five = document.querySelector('.last_five');
        let last_30 = document.querySelector('.last_30');
        let yearly_report = document.querySelector('.yearly_report');
        let comparison = document.querySelector('.comparison');


        if (last_five.classList.contains('d-none')) {

            last_five.classList.remove('d-none');

            top_five.classList.add('d-none');
            last_30.classList.add('d-none');
            yearly_report.classList.add('d-none');
            comparison.classList.add('d-none');

        }

    }
    const last_30 = () => {
        let top_five = document.querySelector('.top_five');
        let last_five = document.querySelector('.last_five');
        let last_30 = document.querySelector('.last_30');
        let yearly_report = document.querySelector('.yearly_report');
        let comparison = document.querySelector('.comparison');


        if (last_30.classList.contains('d-none')) {

            last_30.classList.remove('d-none');

            top_five.classList.add('d-none');
            last_five.classList.add('d-none');
            yearly_report.classList.add('d-none');
            comparison.classList.add('d-none');

        }

    }
    const yearly_report = () => {
        let top_five = document.querySelector('.top_five');
        let last_five = document.querySelector('.last_five');
        let last_30 = document.querySelector('.last_30');
        let yearly_report = document.querySelector('.yearly_report');
        let comparison = document.querySelector('.comparison');


        if (yearly_report.classList.contains('d-none')) {

            yearly_report.classList.remove('d-none');

            top_five.classList.add('d-none');
            last_five.classList.add('d-none');
            last_30.classList.add('d-none');
            comparison.classList.add('d-none');

        }

    }
    const comparison = () => {
        let top_five = document.querySelector('.top_five');
        let last_five = document.querySelector('.last_five');
        let last_30 = document.querySelector('.last_30');
        let yearly_report = document.querySelector('.yearly_report');
        let comparison = document.querySelector('.comparison');


        if (comparison.classList.contains('d-none')) {

            comparison.classList.remove('d-none');

            top_five.classList.add('d-none');
            last_five.classList.add('d-none');
            last_30.classList.add('d-none');
            yearly_report.classList.add('d-none');

        }
    }
</script>






@endsection