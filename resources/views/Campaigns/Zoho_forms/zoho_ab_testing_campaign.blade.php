@extends('layouts.master')
@section('title')
<title>Zoho Forms A/B Testing</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h5>Campaigns> Email Campaings</h5>
        <!-- code start -->


        <form action="{{url('/post_')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3" onsubmit="return false">

                <div class="col-md-6 mb-5">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-first-name">Name</label>
                        <div class="col-sm-6">
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>

                        <div class="col-sm-3"><select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Unclassified</option>
                                <option value="Australia">Australia</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5"></div>

                <div class="col-md-6 mb-5">
                    <div class="row">
                        <label class="col-sm-3 text-end" for="formtabs-first-name">Select Test Parameter</label>

                        <div class="col-sm-9 text-center shadow-sm p-2 bg-white rounded" style="min-width: 400px; min-height: 35px!important; padding: 3px!important;">

                            <input class="ms-2 invisible" id="subject" name="all" type="radio" value="subject" />
                            <label class="ms-1 subject" for="subject" onclick="color_blue1()">Subject</label>

                            <input id="sender_details" class="ms-4 invisible" name="all" type="radio" value="sender_details" />
                            <label class="ms-1 sender_details" for="sender_details" onclick="color_blue2()">Sender Details</label>

                            <input id="email_content" class="ms-4 invisible" name="all" type="radio" value="email_content" />
                            <label class="ms-1 email_content" for="email_content" onclick="color_blue3()">Email Content</label>

                        </div>
                    </div>
                </div>


                <!-- Scale & Pips -->
                <div class="col-12 mb-5">
                    <div class="row">
                        <label class="col-sm-2">Select the Size of the groups</label>
                        <div class="col-sm-9" style="margin-left: -30px; margin-top: -10px;">
                            <div class="my-3 mb-5" id="slider-pips"></div>
                            <span class="mt-5" style="border-radius: 2px;"> <span class="text-white bg-warning text-center mb-2">A</span>
                                2.5% of Receipents</span>
                            <span class="ms-3 mt-2" style="border-radius: 2px;"><span class="text-white bg-primary text-center">B</span> 2.5% of Receipents</span> <br>
                            <small class="mt-3">The willing version will then sent to the other 95% of your list</small>
                        </div>
                    </div>
                </div>
                <!-- /Scale & Pips -->

                <div class="col-12 mb-5">
                    <div class="row">
                        <label class="col-sm-3">Decide Winner By</label><br>
                        <div class="col-sm-9">

                            <input id="openn_rate" style="margin-left: -160px;" name="all" type="radio" value="openn_rate" checked />
                            <label class="ms-1" for="openn_rate" onclick="openn_rate()">Open Rate</label>

                            <input id="click_rate" class="ms-4" name="all" type="radio" value="click_rate" />
                            <label class="ms-1" for="click_rate">Click Rate</label>

                            <input id="manual" class="ms-4" name="all" type="radio" value="manual" />
                            <label class="ms-1" for="manual" onclick="manual()">Manual</label>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-5" id="test_duration">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-country">Test Duration</label>
                        <div class="col-sm-4">
                            <select id="formtabs-country" class="select2 form-select">
                                <option value="">1</option>
                                <option value="Australia">2</option>
                                <option value="United Arab Emirates">3</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <select id="formtabs-country" class="select2 form-select">
                                <option value="">Hours</option>
                                <option value="Australia">Hours</option>
                                <option value="United Arab Emirates">Days</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-5"> </div>

                <div class="col-12 mb-5" id="incolclusive_send">
                    <div class="row">
                        <label class="col-sm-2" for="formtabs-language">If Results are incolclusive, Send</label>

                        <div class="col-sm-10">
                            <input id="version_a" style="margin-left: -40px;" name="all" type="radio" value="version_a" />
                            <label class="ms-1" for="version_a">Version A</label>

                            <input id="version_b" class="ms-4" name="all" type="radio" value="version_b" />
                            <label class="ms-1" for="version_b">Version B</label>

                            <input id="decide_later" class="ms-4" name="all" type="radio" value="decide_later" />
                            <label class="ms-1" for="decide_later">I will decide later</label>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-danger">Save</button>
                </div>

            </div>
        </form>


        <div class="d-flex justify-content-end">

            <!-- flex child-1 -->
            <a href="{{url('/create_campaign')}}">
                <div class="btn btn-warning me-3">
                    Cancel
                </div>
            </a>

            <!-- flex child-2 -->
            <a href="{{url('/zoho_forms_ab_next1')}}">
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

<script>
    const color_blue1 = () => {
        let subject = document.querySelector('.subject');

        if (!(subject.classList.contains('btn', 'btn-primary', 'btn-sm'))) {
            subject.classList.add('btn', 'btn-primary', 'btn-sm');
        } else {
            subject.classList.remove('btn', 'btn-primary', 'btn-sm');
        }


    }

    const color_blue2 = () => {
        let sender_details = document.querySelector('.sender_details');

        if (!(sender_details.classList.contains('btn', 'btn-primary', 'btn-sm'))) {
            sender_details.classList.add('btn', 'btn-primary', 'btn-sm');
        } else {
            sender_details.classList.remove('btn', 'btn-primary', 'btn-sm');
        }


    }

    const color_blue3 = () => {

        let email_content = document.querySelector('.email_content');

        if (!(email_content.classList.contains('btn', 'btn-primary', 'btn-sm'))) {
            email_content.classList.add('btn', 'btn-primary', 'btn-sm');
        } else {
            email_content.classList.remove('btn', 'btn-primary', 'btn-sm');
        }

    }

    const openn_rate = () => {
        let test_duration1 = document.querySelector('#test_duration');
        let incolclusive1 = document.querySelector('#incolclusive_send');
        console.log(test_duration1);
        console.log(incolclusive1);


        let test1 = test_duration.classList.contains('d-none');
        let incol1 = incolclusive1.classList.contains('d-none');

        if (test1) {
            test_duration1.classList.remove('d-none');
            incolclusive1.classList.remove('d-none');

        }
    }


    const manual = () => {
        let test_duration = document.querySelector('#test_duration');
        let incolclusive = document.querySelector('#incolclusive_send');

        let test = test_duration.classList.contains('d-none');
        let incol = incolclusive.classList.contains('d-none');

        if (!(test && incol)) {
            test_duration.classList.add('d-none');
            incolclusive.classList.add('d-none');
        }
    }
</script>

@endsection