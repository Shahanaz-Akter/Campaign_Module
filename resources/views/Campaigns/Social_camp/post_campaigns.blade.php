@extends('layouts.master')
@section('title')
<title>Post Campaigns</title>
@endsection
@section('content')

<form action="{{url('/post_data')}}" method="post" enctype="multipart/form-data">
    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <small style="font-family: 'Lato', sans-serif;" class="ms-3 mb-2">Campaigns> Social Campaings>Page Campaign> Create</small>



        <!-- Content start-->
        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- row class start -->
            <div class="row mb-3 gap-2 mt-5 text-center">

                <label class="text-center mb-5">What Type of campaign would you like to Create?</label>

                <div class="mb-3" style="max-width: 500px;">
                    <div class="card text-center">
                        <div class="card-title mb-3">
                            <div class="card-text d-block mt-2" style="color: black;">Regular Post Campaign<span class="typcn typcn-warning-outline"></span></div>
                        </div>

                        <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                            <i class="img-fluid bx bxl-facebook-circle"></i>

                        </div>

                        <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                        <div class="card-body mb-3 create_none1">
                            <div class="card-text d-block" style="color: black;" onmouseover="mouseOver1()" onmouseleave="mouseLeave1()">Engage with your audience through Social Media Updates<span class="typcn typcn-warning-outline"></span></div>
                        </div>
                        <div class="mb-5  create_new1 d-none">
                            <a class="btn btn-warning" style="width: 150px!important; margin: 0 auto; margin-bottom: 40px;" href="{{url('/regular_post_campaigns')}}">Create New</a>
                        </div>
                    </div>

                </div>


                <div class="mb-3" style="max-width: 500px;">
                    <div class="card text-center">
                        <div class="card-title mb-3 mt-2">
                            <div class="card-text d-block" style="color: black;">RSS Post Campaign<span class="typcn typcn-warning-outline"></span></div>
                        </div>

                        <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                            <i class=" img-fluid bx bxl-facebook-circle"></i>
                        </div>

                        <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                        <div class="card-body mb-3 create_none2">
                            <div class="card-text d-block" style="color: black;" onmouseover="mouseOver2()" onmouseleave="mouseLeave2()">Get Periodic updates and post them to Social Media<span class="typcn typcn-warning-outline"></span></div>
                        </div>
                        <div class="mb-5  d-none create_new2">
                            <a class="btn btn-warning" style="width: 150px!important; margin: 0 auto; margin-bottom: 40px;" href="{{url('/rss_post_campaigns')}}">Create New</a>
                        </div>
                    </div>

                </div>

            </div>
            <!-- row class end -->

        </div>
        <!-- Content end-->
    </div>
    <!-- Content wrapper end -->
</form>

<script>
    const mouseOver1 = () => {
        let create_none1 = document.querySelector('.create_none1');
        let create_new1 = document.querySelector('.create_new1');
        let t = create_new1.classList.contains('d-none');

        if (t) {
            create_new1.classList.remove('d-none');
            create_none1.classList.add('d-none');

        }
    }


    const mouseLeave1 = () => {

        let create_none1 = document.querySelector('.create_none1');
        let create_new1 = document.querySelector('.create_new1');
        let t = create_new1.classList.contains('d-none');

        if (!(t)) {
            create_new1.classList.add('d-none');
            create_none1.classList.remove('d-none');

        }

    }


    const mouseOver2 = () => {
        let create_none2 = document.querySelector('.create_none2');
        let create_new2 = document.querySelector('.create_new2');
        let t = create_new2.classList.contains('d-none');

        if (t) {
            create_new2.classList.remove('d-none');
            create_none2.classList.add('d-none');

        }
    }


    const mouseLeave2 = () => {

        let create_none2 = document.querySelector('.create_none2');
        let create_new2 = document.querySelector('.create_new2');
        let t = create_new2.classList.contains('d-none');

        if (!(t)) {
            create_new2.classList.add('d-none');
            create_none2.classList.remove('d-none');

        }

    }
</script>

@endsection