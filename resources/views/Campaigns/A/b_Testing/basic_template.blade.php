@extends('layouts.master')
@section('title')
<title>Basic Template</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5>Basic Template</h5>
        <!-- code start -->
        <form action="{{url('/post_predesigned_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- row class start -->

            <!--  Parent start-->
            <div class=".container-fluid mb-5">

                <!-- row  start-->
                <div class="ms-4 mb-5 fw-bold text-uppercase text-warning fs-4"></div>
                <!-- row start -->
                <div class="d-flex gap-4 mb-5" style="flex-wrap:wrap;">
                    <!-- child 1 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Courteous</div>
                        <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="">
                                <div class="btn btn-warning mt-3 over">Select Template</div>
                            </a>

                        </div>
                    </div>

                    <!-- child 2 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Fad</div>
                        <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>


                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Respect</div>
                        <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>
                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Esteem</div>
                        <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>

                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Favour</div>
                        <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>



                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Prudence</div>
                        <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="">
                                <div class="btn btn-warning mt-3 over">Select Template</div>
                            </a>

                        </div>
                    </div>

                    <!-- child 2 -->
                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Promise</div>
                        <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>


                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Greet</div>
                        <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>
                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Failte</div>
                        <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>

                    <div class="card text-center" style="max-width: 250px;">
                        <div class="card-title">Embrace</div>
                        <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="btn btn-warning mt-3 over">Select Template</div>
                        </div>
                    </div>

                </div>
                <!-- row end -->
            </div>
            <!-- parent end -->

            <div class="navbar navbar-expand-lg sticky-bottom mt-5 mb-2" style="height: 100px!important">
                <div>
                    <a href="{{url('/ab_next2')}}">
                        <div class="btn btn-warning">
                            Previous
                        </div>
                    </a>
                </div>

                <div class="ms-5">
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>
            </div>

        </form>
        <!-- code end -->

    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>
    let show_more = document.querySelector('.show_more');
    const more_holidays = () => {
        let more_holidays = document.querySelector('.more_holidays');
        let yes1 = more_holidays.classList.contains('d-none');
        console.log(yes1);

        if (yes1) {
            more_holidays.classList.remove('d-none');
            show_more.innerHTML = "Show Less";
        } else {
            more_holidays.classList.add('d-none');
            show_more.innerHTML = "Show More";
        }
    }


    const more_welcome = () => {
        let more_welcome = document.querySelector('.more_welcome');
        let yes2 = more_welcome.classList.contains('d-none');
        console.log(yes2);

        if (yes2) {
            more_welcome.classList.remove('d-none');
            show_more.innerHTML = "Show Less";
        } else {
            more_welcome.classList.add('d-none');
            show_more.innerHTML = "Show More";
        }
    }
</script>
@endsection