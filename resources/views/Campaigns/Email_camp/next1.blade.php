@extends('layouts.master')
@section('title')
<title>Next Campaign</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h5>Campaigns> Email Campaings</h5><br>
        <h6>Who has entered information right now? his/her name will be placed here within {{name}} tag</h6><br>
        <!-- code start -->

        <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3" onsubmit="return false">

                <div class="col-12 mb-5">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-first-name">Subject A</label>
                        <div class="col-sm-5">
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>

                        <div class="col-sm-4">
                            <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Personalize</option>
                                <option value="Australia">Contact First Name</option>
                                <option value="United Arab Emirates">Contact Last Name</option>
                             
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-5">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-first-name">Subject B</label>
                        <div class="col-sm-5">
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>

                        <div class="col-sm-4">
                            <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Personalize</option>
                                <option value="Australia">Contact First Name</option>
                                <option value="United Arab Emirates">Contact Last Name</option>
                             
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5"></div>

                <div class="col-md-6 mb-5">
                    <div class="row">
                        <label class="col-sm-3" for="formtabs-first-name">Select Test Parameter</label>

                        <div class="col-sm-9 text-center shadow-sm p-2 bg-white rounded" style="min-width: 300px; min-height: 35px!important; padding: 3px!important;">
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
                            <span style="border-radius: 2px;"> <span class="text-white bg-warning text-center mb-2">A</span>
                                2.5% of Receipents</span>
                            <span class="ms-2" style="border-radius: 2px;"><span class="text-white bg-primary text-center">B</span> 2.5% of Receipents</span> <br>
                            <small>The willing version will then sent  to the other 95% of your list</small>
                        </div>
                    </div>
                </div>
                <!-- /Scale & Pips -->

                <div class="col-12 mb-5">
                    <div class="row">
                        <label class="col-sm-3">Decide Winner By</label><br>
                        <div class="col-sm-9">

                            <input id="open_rate" style="margin-left: -160px;" name="all" type="radio" value="open_rate" />
                            <label class="ms-1" for="open_rate">Open Rate</label>

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
                            <select id="formtabs-country" class="select2 form-select" data-allow-clear="true" style="overflow: scroll;">
                                <option value="">1</option>
                                <option value="Australia">1</option>
                                <option value="United Arab Emirates">2</option>
                                <option value="United Kingdom">3</option>
                                <option value="United States">4</option>
                                <option value="United States">5</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
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
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>

            </div>
        </form>


        <div class="d-flex justify-content-end">
            <!-- flex child-1 -->
            <a href="{{url('/next1')}}">
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
  
</script>

@endsection