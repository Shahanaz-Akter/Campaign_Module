@extends('layouts.master')
@section('title')
<title>Recently Sent Template</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5>Recently Sent Template</h5>
        <!-- code start -->
        <form action="{{url('/post_predesigned_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Popup Modal start data-bs-toggle="modal" data-bs-target="#fullscreenModal" -->
            <div class="modal fade" id="not_sent" tabindex="-1" aria-hidden="true">
                <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h6 class="title">Recently Sent Content</h6>
                            <hr>
                            <form action="" method="">
                                @csrf

                                <div class="shadow-none mb-2 text-center">
                                    <div class="mb-2">
                                        <i class="fa-regular fa-message"></i>
                                    </div>

                                    <div class="mb-2 mt-5">
                                        No Campaigns are Available in this View.
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <!-- <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button> -->
                                    <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Popup Modal end -->


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