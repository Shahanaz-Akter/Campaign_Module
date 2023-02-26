@extends('layouts.master')
@section('title')
<title>Predesigned Template</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5>Predesigned Template

        </h5>
        <!-- code start -->

        <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- row class start -->
            <div class="row">

                <div class="row col-12 col-sm-12 col-md-12 col-lg-12 mb-5">
                    <label class="col-sm-2  text-sm-end text-end" for="formtabs-first-name">Predesigned Templates</label>
                    <div class="col-sm-4">
                        <select id="formtabs-country" class="select2 form-select">
                            <option value="">All Categories</option>
                            <option value="Holidays">Holidays</option>
                            <option value="NewSlatters">NewSlatters</option>
                            <option value="Deals and Offers">Deals & Offers</option>
                            <option value="Thank you">Thank you</option>
                            <option value="Deals and Offers">Webinars</option>
                            <option value="Surveys">Surveys</option>
                            <option value="Deals and Offers">Seasons</option>
                            <option value="Birthday">Birthday</option>
                            <option value="Emergencies and crises">Emergencies and crises</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class=".container-fluid">
                <div class="ms-4 mb-5">Holidays</div>

                <div class="d-flex gap-4 mb-5" style="flex-wrap:wrap;">

                    <!-- child 1 -->

                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Courteous</div>
                        <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="">
                                <div class="btn btn-warning mt-3 over">Select Template</div>
                            </a>

                        </div>
                    </div>




                    <!-- child 2 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Fad</div>
                        <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>


                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Respect</div>
                        <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>
                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Esteem</div>
                        <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>


                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Favour</div>
                        <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>

                </div>


                <!-- Below div there will be some card will be added when we click show more button -->
                <div class="d-flex gap-4 d-none more_holidays mb-5" style="flex-wrap:wrap;">


                    <!-- child 1 -->

                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Courteous</div>
                        <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>

                    <!-- child 2 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Courteous</div>
                        <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>


                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Courteous</div>
                        <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>
                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Courteous</div>
                        <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>


                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Courteous</div>
                        <img class="card-img-top" src="../../assets/img/elements/13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>



                </div>

                <div class="mt-5 d-flex align-items-center justify-content-center ">
                    <div class="btn btn-outline-warning rounded-5 show_more" onclick="more_holidays()"> Show More</div>
                </div>

            </div>
            <!-- row class end -->





        </form>
        <div class="d-flex  mt-5">

            <!-- flex child-1 -->
            <a href="{{url('/ab_next2')}}">
                <div class="btn btn-warning">
                    Previous
                </div>
            </a>
        </div>
        <!-- code end -->
    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->



<script>
    const more_holidays = () => {
        let more_holidays = document.querySelector('.more_holidays');
        let show_more = document.querySelector('.show_more');
        let yes = more_holidays.classList.contains('d-none');
        console.log(yes);

        if (yes) {
            more_holidays.classList.remove('d-none');
            show_more.innerHTML = "Show Less";
        } else {
            more_holidays.classList.add('d-none');
            show_more.innerHTML = "Show More";
        }

    }
</script>
@endsection