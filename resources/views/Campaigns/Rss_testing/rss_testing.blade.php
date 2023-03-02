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
            <div class="row g-3">

                <div class="col-md-7 mb-3 mt-5">
                    <div class="row">
                        <label class="col-sm-3 text-end">RSS Feed or Block</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter URL">
                        </div>
                    </div>
                </div>



                <div class="col-md-7 mb-3">
                    <div class="row">
                        <label class="col-sm-3 text-end" for="formtabs-first-name">When to Send the emails?</label>

                        <div class="col-sm-9 text-center ms-4 rounded" style="margin-top: -40px!important; padding: 2px!important;">

                            <input class="ms-2 invisible" id="days" name="all" type="radio" value="days" />
                            <label class="ms-1 days" for="days" onclick="days()">Days</label>

                            <input id="weeks" class="ms-4 invisible" name="all" type="radio" value="weeks" />
                            <label class="ms-1 weeks" for="weeks" onclick="weeks()">Weeks</label>

                            <input id="months" class="ms-4 invisible" name="all" type="radio" value="months" />
                            <label class="ms-1 months" for="months" onclick="months()">Months</label>

                        </div>
                    </div>
                </div>


                <div class="col-md-7 mb-3 oncein_three">
                    <div class="row">
                        <label class="col-sm-3"></label>
                        <div class="col-sm-9">
                            <select id="formtabs-country" class="select2 form-select">
                                <option value="">Once a days</option>
                                <option value="" selected>Once in Three days</option>
                                <option value="">Once in Four days</option>
                                <option value="">Once in Five days</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="oncein_three1 d-none">
                    <div class="col-md-7 mb-3">
                        <div class="row">
                            <label class="col-sm-3">Every month on</label>
                            <div class="col-sm-9">
                                <select id="formtabs-country" class="select2 form-select">
                                    <option value="">1 day</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <select id="formtabs-country" class="select2 form-select">
                                    <option value="">Once a days</option>
                                    <option value="" selected>Once in Three days</option>
                                    <option value="">Once in Four days</option>
                                    <option value="">Once in Five days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="oncein_five d-none">
                    <div class="col-md-7 mb-3">
                        <div class="row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-7">
                                <select id="formtabs-country" class="select2 form-select">
                                    <option value="">Once in one</option>
                                    <option value="">Once a</option>
                                    <option value="">Once in two</option>
                                    <option value="">Once in three</option>
                                    <option value="">Once in four</option>
                                    <option value="" selected>Once in five</option>
                                </select>
                            </div>
                            <div class="col-sm-2 text-start">Weeks(On)</div>
                        </div>
                    </div>


                    <div class="col-md-7 mb-3">
                        <div class="row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <select id="country" class="select2 form-select">
                                    <option value="">Friday</option>
                                    <option value="">Saturday</option>
                                    <option value="">Sunday</option>
                                    <option value="">Monday</option>
                                    <option value="">Tuesday</option>
                                    <option value="" selected>Wednesday</option>
                                    <option value="">Thursday</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 mb-3">
                        <div class="d-flex">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <span class="ms-2">Sun</span>
                                <span class="ms-3">Mon</span>
                                <span class="ms-3">Wed</span>
                                <span class="ms-3">Thursday</span>
                                <span class="ms-3">Friday</span>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="col-md-7 mb-3">
                    <div class="row">
                        <label class="col-sm-3"></label>
                        <div class="col-sm-9">
                            <select id="formtabs" class="select2 form-select" data-allow-clear="true">
                                <option value="">at 00:00</option>
                                <option value="">00:00</option>
                                <option value="">00:00</option>
                                <option value="">00:00</option>
                                <option value="">00:00</option>
                            </select>
                        </div>
                    </div>

                </div>


                <div class="col-md-7 mb-3">
                    <div class="row">
                        <label class="col-sm-3"></label>
                        <div class="col-sm-9">
                            <select id="formtabs" class="select2 form-select" data-allow-clear="true">
                                <option value="">Asia or Dhaka</option>
                                <option value="">00:00</option>
                                <option value="">00:00</option>
                                <option value="">00:00</option>
                                <option value="">00:00</option>
                            </select>
                            <div style="margin-top: 20px!important;">Campaign will be sent based on this time after a new blog has been posted.</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 d-flex gap-2 mt-3">
                    <label class="col-sm-3"></label>
                    <div class="col-sm-8">
                        <!-- flex child-1 -->
                        <span class="">
                            <button type="submit" class="btn btn-warning">Save</button>
                        </span>


                        <!-- flex child-2 -->
                        <a href="{{url('/create_campaign')}}">
                            <div class="btn btn-warning ms-2">
                                Cancel
                            </div>
                        </a>

                        <!-- flex child-3 -->
                        <a href="{{url('/rss_next1')}}">
                            <div class="btn btn-warning ms-2">
                                Next
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </form>




        <!-- code end -->

    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>
    const days = () => {
        let days = document.querySelector('.days');

        if (!(days.classList.contains('btn', 'btn-primary', 'btn-sm'))) {
            days.classList.add('btn', 'btn-primary', 'btn-sm');
        } else {
            days.classList.remove('btn', 'btn-primary', 'btn-sm');
        }


        let oncein_five = document.querySelector('.oncein_five');
        let oncein_three = document.querySelector('.oncein_three');

        let containn = oncein_five.classList.contains('d-none');
        if (!(containn)) {
            oncein_five.classList.add('d-none');
            oncein_three.classList.remove('d-none');

        }
    }

    const weeks = () => {
        let weeks = document.querySelector('.weeks');

        if (!(weeks.classList.contains('btn', 'btn-primary', 'btn-sm'))) {
            weeks.classList.add('btn', 'btn-primary', 'btn-sm');
        } else {
            weeks.classList.remove('btn', 'btn-primary', 'btn-sm');
        }

        let oncein_five = document.querySelector('.oncein_five');
        let oncein_three = document.querySelector('.oncein_three');

        let containn = oncein_five.classList.contains('d-none');
        if (containn) {

            oncein_five.classList.remove('d-none');
            oncein_three.classList.add('d-none');

        } else {
            oncein_five.classList.add('d-none');
            oncein_three.classList.remove('d-none');

        }


    }

    const months = () => {

        let months = document.querySelector('.months');

        if (!(months.classList.contains('btn', 'btn-primary', 'btn-sm'))) {
            months.classList.add('btn', 'btn-primary', 'btn-sm');
        } else {
            months.classList.remove('btn', 'btn-primary', 'btn-sm');
        }

        let three = document.querySelector('.oncein_three');
        let new_three = document.querySelector('.oncein_three1');
        let con = new_three.classList.contains('d-none');
        if (con) {
            new_three.classList.remove('d-none');
            three.classList.add('d-none');
        }

    }
</script>

@endsection