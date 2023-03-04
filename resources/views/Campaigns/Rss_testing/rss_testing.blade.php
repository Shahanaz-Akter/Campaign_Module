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
                            <label class="ms-1 days" for="days" onclick="day()">Days</label>

                            <input id="weeks" class="ms-4 invisible" name="all" type="radio" value="weeks" />
                            <label class="ms-1 weeks" for="weeks" onclick="week()">Weeks</label>

                            <input id="months" class="ms-4 invisible" name="all" type="radio" value="months" />
                            <label class="ms-1 months" for="months" onclick="month()">Months</label>

                        </div>
                    </div>
                </div>

                <!-- Days -->
                <section class="oncein_days">
                    <div class="col-md-7 mb-3">
                        <div class="row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <select id="formtabs-country1" class="select2 form-select">
                                    <option value="" selected>Once a day</option>
                                    <option value="">Once in Two days</option>
                                    <option value="">Once in Three days</option>
                                    <option value="">Once in Four days</option>
                                    <option value="">Once in Five days</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 mb-3">
                        <div class="row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <select id="formtabs_at" class="select2 form-select" data-allow-clear="true">
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
                                <select id="formtabs_dh" class="select2 form-select" data-allow-clear="true">
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
                </section>

                <!-- Weeks -->
                <section class="oncein_weeks d-none">
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

                    <div class="col-md-7 mb-3">
                        <div class="row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <select id="formtabs_asia" class="select2 form-select" data-allow-clear="true">
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
                                <select id="formtabs_dhaka" class="select2 form-select" data-allow-clear="true">
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
                </section>


                <!-- Months -->
                <section class="oncein_months d-none">
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
                            <div class="col-sm-7">
                                <select id="formtabs_time" class="select2 form-select">
                                    <option value="">at 00:00</option>
                                    <option value="">00:00</option>
                                    <option value="">00:00</option>
                                    <option value="">00:00</option>
                                    <option value="">00:00</option>
                                </select>
                            </div>
                            <div class="col-sm-2 more_option" onclick="more()">More Option</div>
                        </div>
                    </div>

                </section>

                <!-- More Option -->
                <section class="more d-none">

                    <div class="col-md-7 mb-3">
                        <div class="row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-2 form-check">
                                <input type="radio" class="form-check-input" id="On_day" name="all"></input>
                                <label class="form-check-label" for="On_day">On day</label>
                            </div>
                            <div class="col-sm-7">
                                <select id="formtabs4" class="select2 form-select">
                                    <option value="">1</option>
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
                            <div class="col-sm-2 form-check">

                                <input type="radio" class="form-check-input" id="On" name="all"></input>
                                <label class="ms-1 form-check-label" for="On">On</label>
                            </div>

                            <div class="col-sm-3">
                                <select id="formtabs6" class="select2 form-select">
                                    <option value="">First</option>
                                    <option value="">Second</option>
                                    <option value="">Third</option>
                                    <option value="">Four</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select id="formtab7" class="select2 form-select">
                                    <option value="">Sunday</option>
                                    <option value="">Monday</option>
                                    <option value="">Tuesday</option>
                                    <option value="">Wednesday</option>
                                    <option value="">Thursday</option>
                                    <option value="">Friday</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>


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
    // class selection for click Method
    let days = document.querySelector('.days');
    let weeks = document.querySelector('.weeks');
    let months = document.querySelector('.months');

    //  selecting class for showing d-none 
    let once_in_days = document.querySelector('.oncein_days');
    let once_in_weeks = document.querySelector('.oncein_weeks');
    let once_in_months = document.querySelector('.oncein_months');



    const day = () => {

        if (!(days.classList.contains('btn', 'btn-primary', 'btn-sm'))) {
            days.classList.add('btn', 'btn-primary', 'btn-sm');
            weeks.classList.remove('btn', 'btn-primary', 'btn-sm');
            months.classList.remove('btn', 'btn-primary', 'btn-sm');
        }

        // d-none contains or not
        let once_in_days_tr1 = once_in_days.classList.contains('d-none'); //return false
        console.log(once_in_days_tr1);

        let once_in_weeks_tr1 = once_in_weeks.classList.contains('d-none');
        let once_in_months_tr1 = once_in_months.classList.contains('d-none');

        let tr_or_false = once_in_days_tr1 || (!(once_in_days_tr1));
        if (tr_or_false) { //true
            once_in_days.classList.remove('d-none');
            once_in_weeks.classList.add('d-none');
            once_in_months.classList.add('d-none');
        }
    }

    const week = () => {

        if (!(weeks.classList.contains('btn', 'btn-primary', 'btn-sm'))) {
            weeks.classList.add('btn', 'btn-primary', 'btn-sm');
            days.classList.remove('btn', 'btn-primary', 'btn-sm');
            months.classList.remove('btn', 'btn-primary', 'btn-sm');
        }


        // d-none contains or not
        let once_in_days_tr2 = once_in_days.classList.contains('d-none');

        let once_in_weeks_tr2 = once_in_weeks.classList.contains('d-none');
        console.log(once_in_weeks_tr2);
        let once_in_months_tr2 = once_in_months.classList.contains('d-none');



        if (once_in_weeks_tr2) {

            once_in_weeks.classList.remove('d-none');
            once_in_days.classList.add('d-none');
            once_in_months.classList.add('d-none');
        }

    }

    const month = () => {

        if (!(months.classList.contains('btn', 'btn-primary', 'btn-sm'))) {
            months.classList.add('btn', 'btn-primary', 'btn-sm');
            days.classList.remove('btn', 'btn-primary', 'btn-sm');
            weeks.classList.remove('btn', 'btn-primary', 'btn-sm');
        }


        // d-none contains or not
        let once_in_days_tr3 = once_in_days.classList.contains('d-none');
        let once_in_weeks_tr3 = once_in_weeks.classList.contains('d-none');
        let once_in_months_tr3 = once_in_months.classList.contains('d-none');
        console.log(once_in_months_tr3);
        if (once_in_months_tr3) {
            once_in_months.classList.remove('d-none');
            once_in_weeks.classList.add('d-none');
            once_in_days.classList.add('d-none');
        }
    }
    const more = () => {
        let more = document.querySelector('.more');
        let more_option = document.querySelector('.more_option');
        if (more.classList.contains('d-none')) {
            more.classList.remove('d-none');
            once_in_months.classList.remove('d-none');
            more_option.innerText = "Hide Options";
            more_option.style.color = "red";
        } else {
            more.classList.add('d-none');
            once_in_months.classList.remove('d-none');
            more_option.innerText = "More Options";
            more_option.style.color = "blue";

        }
    }
</script>

@endsection