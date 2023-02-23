@extends('layouts.master')
@section('title')
<title>rss based Post Campaigns</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">
    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">


        <form action="{{url('/post_data')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="d-flex justify-content-between">
                <div style="font-family: 'Lato', sans-serif;">
                    <a href="{{url('/regular_based_post_campaigns')}}"><i class="ms-3 me-2 fa-solid fa-arrow-left"></i></a>
                    RSS based Post Campaings
                </div>

                <button type="submit" class="btn btn-primary me-3 mb-4" style="font-family: 'Lato', sans-serif;">
                    <a class="text-white" href="{{url('/social_campaigns')}}"> Save and Exit</a>

                </button>
            </div>


            <!-- row class start -->
            <div class="row container">

                <div class="row mb-3">
                    <label class="col-sm-4 col-lg-2 text-end">Blog Name</label>
                    <div class="col-sm-8 col-lg-7">
                        <input class="form-control " type="text" placeholder="This is for your own references">
                    </div>
                </div>


                <div class="row mb-3">
                    <label class="col-sm-4 col-sm-4 col-lg-2 text-end">RSS Field URL</label>
                    <div class="col-sm-8 col-lg-7">
                        <input class="form-control " type="text" placeholder="Enter the URL of the Blog to fetch data">
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-sm-4  col-lg-2 text-end">Fetch Posts</label>
                    <div class="col-sm-8 col-lg-7">
                        <input id="thirty_minutes" style="margin-left: -10px;" name="all" type="radio" value="thirty_minutes" />
                        <label class="ms-1" for="thirty_minutes">Every 30 Minutes</label>

                        <input id="customized_schedule" class="ms-4" name="all" type="radio" value="manual" onclick="schedule()" />

                        <label class="ms-1 mb-4" for="customized_schedule" onclick="s2()">On a customized Schedule</label> <br>

                        <small>Note : Schedule will start only after the blog has been posted.</small>
                    </div>



                </div>
                <!-- d-none -->

                <div id="schedule" class="d-none">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-sm-4 col-lg-2 text-end"></label>
                        <div class="col-sm-8 col-lg-7">
                            <select id="formtabs-country" class="select2 form-select" style="overflow: scroll;">
                                <option value="">On a customized schedule</option>
                                <option value="Australia">Once a Day</option>
                                <option value="United Arab Emirates">Once in Two days</option>
                                <option value="United Kingdom">Once in Three Days</option>
                                <option value="United Kingdom">Once in Four Days</option>
                                <option value="United Kingdom">Once in Five Days</option>
                                <option value="United Kingdom">Once in Six Days</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4 mt-4">
                        <label class="col-sm-4 col-sm-4 col-lg-2 text-end ms-1"></label>
                        <div class="d-flex gap-5 col-sm-8 col-lg-7">
                            <span class="week week1" onclick="mouseclick1()">Sun</span>
                            <span class="week week2" onclick="mouseclick2()">Mon</span>
                            <span class="week week3" onclick="mouseclick3()">Tue</span>
                            <span class="week week4" onclick="mouseclick4()">Wed</span>
                            <div class="week week5" onclick="mouseclick5()">Thu</div>
                            <div class="week week6" onclick="mouseclick6()">Fri</div>
                            <div class="week" onclick="mouseclick()">Sat</div>
                        </div>
                    </div>

                    <!-- child row start -->

                    <div class="row mb-3">
                        <label class="col-sm-4 col-lg-2 text-end"></label>

                        <div class="row col-sm-8 col-md-8 col-lg-9">
                            <div class="row col-sm-4 col-md-5">
                                <label class="col-sm-2 text-end">Start Time</label>
                                <div class="col-sm-10">

                                    <!-- Time Picker-->
                                    <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time1" />
                                    <!-- /Time Picker -->
                                </div>
                            </div>

                            <div class="row col-sm-4 col-md-5">
                                <label class="col-sm-2">End Time</label>
                                <div class="col-sm-10">

                                    <!-- Time Picker-->
                                    <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time2" />
                                    <!-- /Time Picker -->
                                </div>
                            </div>
                            <div class="col-sm-2 col-md-2">
                                <label class="col-sm-2 me-5" onclick="BDT()">BDT</label>
                                <div class="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- child row end -->

                </div>


                <div id="sch" class="d-none">

                    <div class="row mb-3">
                        <label class="col-sm-4 col-sm-4 col-lg-2 text-end"></label>
                        <div class="col-sm-8 col-lg-7">
                            <select id="formtabs-country" class="select2 form-select" style="overflow: scroll;">
                                <option value="">Search TimeZone Country City</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                                <option value="Australia">Abbotsford, Canada - America/Vancouver (GMT -8: 00: )</option>
                            </select>
                        </div>
                    </div>
                </div>


            </div>
            <!-- row class end -->

        </form>


        <div class="d-flex justify-content-between mt-5">

            <button type="submit" class="btn btn-outline-secondary me-5" style="font-family: 'Lato', sans-serif;">
                <a class="text-black" href="{{url('/social_campaigns')}}">Cancel</a>
            </button>



            <button type="submit" class="btn btn-danger me-5" style="font-family: 'Lato', sans-serif;">
                <a class="text-white" href="{{url('/')}}">Next</a>
            </button>


        </div>

    </div>
    <!-- Content end-->

</div>
<!-- Content Wrapper end-->


<script>
    const schedule = () => {

        let schedule = document.querySelector('#schedule');
        console.log(customized_schedule);
        let tru = schedule.classList.contains('d-none');
        console.log(tru);

        if (tru) {

            schedule.classList.remove('d-none');
        } else {
            schedule.classList.add('d-none');
        }
    }
</script>


<script>
    const s2 = () => {
        let s2 = document.querySelector('#s2');
        console.log(s2);
        let tru1 = s2.classList.contains('d-none');
        console.log(tru1);
        if (tru1) {
            s2.classList.remove('d-none');
        } else {
            s2.classList.add('d-none');
        }
    }
</script>

<script>
    const BDT = () => {

        let sch = document.querySelector('#sch');
        console.log(sch);
        let tru2 = sch.classList.contains('d-none');
        console.log(tru2);

        if (tru2) {
            sch.classList.remove('d-none');
        } else {
            sch.classList.add('d-none');
        }
    }
</script>

<script>
    const mouseclick1 = () => {
        let week1 = document.querySelector('.week1');
        let w1 = week1.classList.contains('text-muted');

        if (w1) {
            week1.classList.remove('text-muted');
        } else {
            week1.classList.add('text-muted');

        }


    }
    const mouseclick2 = () => {
        let week2 = document.querySelector('.week2');
        let w2 = week2.classList.contains('text-muted');

        if (w2) {
            week2.classList.remove('text-muted');
        } else {
            week2.classList.add('text-muted');

        }

    }
    const mouseclick3 = () => {
        let week3 = document.querySelector('.week3');
        let w3 = week3.classList.contains('text-muted');

        if (w3) {
            week3.classList.remove('text-muted');
        } else {
            week3.classList.add('text-muted');

        }

    }
    const mouseclick4 = () => {
        let week4 = document.querySelector('.week4');
        let w4 = week4.classList.contains('text-muted');

        if (w4) {
            week4.classList.remove('text-muted');
        } else {
            week4.classList.add('text-muted');

        }


    }
    const mouseclick5 = () => {
        let week5 = document.querySelector('.week5');
        let w5 = week5.classList.contains('text-muted');

        if (w5) {
            week5.classList.remove('text-muted');
        } else {
            week5.classList.add('text-muted');

        }


    }
    const mouseclick6 = () => {
        let week6 = document.querySelector('.week6');
        let w6 = week6.classList.contains('text-muted');

        if (w6) {
            week6.classList.remove('text-muted');
        } else {
            week6.classList.add('text-muted');

        }


    }
</script>

@endsection