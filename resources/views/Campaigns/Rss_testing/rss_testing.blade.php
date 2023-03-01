@extends('layouts.master')
@section('title')
<title>RSS Testing Campaign</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h5>Campaigns> Email Campaings</h5>
        <!-- code start -->


        <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3" onsubmit="return false">



                <div class="col-md-6 mb-5">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-first-name">RSS Feed or Blog URL</label>
                        <div class="col-sm-7 ms-4">
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5"></div>

                <div class="col-md-6 mb-5">
                    <div class="row">
                        <label class="col-sm-3 text-end" for="formtabs-first-name">When to Send the emails?</label>

                        <div class="col-sm-9 text-center shadow-sm p-2 bg-white rounded" style="min-width: 400px; min-height: 35px!important; padding: 3px!important;">

                            <input class="ms-2 invisible" id="subject" name="all" type="radio" value="subject" />
                            <label class="ms-1 subject" for="subject" onclick="color_blue1()">Days</label>

                            <input id="sender_details" class="ms-4 invisible" name="all" type="radio" value="sender_details" />
                            <label class="ms-1 sender_details" for="sender_details" onclick="color_blue2()">Weeks</label>

                            <input id="email_content" class="ms-4 invisible" name="all" type="radio" value="email_content" />
                            <label class="ms-1 email_content" for="email_content" onclick="color_blue3()">Months</label>

                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-5"> </div>

                <div class="col-md-6 mb-5">
                    <div class="row">
                        <label class="col-sm-3"></label>
                        <div class="col-sm-9">
                            <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Once a Day</option>
                                <option value="00:00">00:00</option>
                                <option value="00:00">00:00</option>
                                <option value="00:00">00:00</option>
                                <option value="00:00">00:00</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6  col-lg-6 mb-5"> </div>

                <div class="col-md-6 mb-5">
                    <div class="row">
                        <label class="col-sm-3"></label>
                        <div class="col-sm-9">
                            <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">At 00:00</option>
                                <option value="00:00">00:00</option>
                                <option value="00:00">00:00</option>
                                <option value="00:00">00:00</option>
                                <option value="00:00">00:00</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 mb-5"> </div>

                <div class="col-md-6 mb-5">
                    <div class="row">
                        <label class="col-sm-3"></label>
                        <div class="col-sm-9">
                            <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Asia or Dhaka</option>
                                <option value="00:00">00:00</option>
                                <option value="00:00">00:00</option>
                                <option value="00:00">00:00</option>
                                <option value="00:00">00:00</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5"> </div>

                <div class="col-12 ms-5">
                    <button type="submit" class="btn btn-warning">Save</button>
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
            <a href="{{url('/rss_next1')}}">
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

    const manual = () => {

        let test_duration = document.querySelector('#test_duration');
        let incolclusive = document.querySelector('#incolclusive_send');

        let test = test_duration.classList.contains('d-none');
        let incol = incolclusive.classList.contains('d-none');

        if (test && incol) {
            test_duration.classList.remove('d-none');
            incolclusive.classList.remove('d-none');
        } else {
            test_duration.classList.add('d-none');
            incolclusive.classList.add('d-none');
        }

    }
</script>

@endsection