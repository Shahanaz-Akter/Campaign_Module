@extends('layouts.master')
@section('title')
<title>Managelist Zoho CRM</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- code start -->
        <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="ms-5">
                <a href="{{url('/add_user')}}">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                Setup Account
            </div>

            <div class="row g-3">

                <div class="col-md-7 mb-3 mt-5">

                    <div class="row">
                        <div class="ms-5 mb-5">Service:Zoho CRM</div>
                        <label class="col-sm-3 text-end">Email</label>
                        <div class="col-sm-9">

                            <input type="text" class="form-control" placeholder="Enter the email address associated with Zoho CRM Account">
                        </div>
                    </div>
                </div>




                <div class="col-md-7 mb-3 mt-5">
                    <div class="row">
                        <label class="col-sm-3 text-end">ZSC Key</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="You will finf the ZSC key in your Zoho CRM Account">
                        </div>
                    </div>
                </div>


                <div class="col-md-7 d-flex gap-2 mt-3">
                    <label class="col-sm-3"></label>
                    <div class="col-sm-8">
                        <!-- flex child-1 -->

                        <!-- flex child-2 -->
                        <a href="{{url('/add_user')}}">
                            <div class="btn btn-warning ms-2">
                                Cancel
                            </div>
                        </a>

                        <!-- flex child-3 -->
                        <a href="{{url('//')}}">
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