@extends('layouts.master')
@section('title')
<title>Import From Cloud</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5>Import From Cloud</h5>
        <!-- code start -->
        <form action="{{url('/post_predesigned_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf

            <!--  Parent start-->
            <div class=".container-fluid mb-5" style="margin-top: 200px; margin-bottom: 50px;">
                <div class="ms-4 mb-5 fw-bold text-uppercase text-warning fs-4"></div>
                <!-- row start -->
                <div class="d-flex align-items-center justify-content-center gap-5 mb-5 mt-5" style="flex-wrap:wrap;">

                    <!-- child 1 -->
                    <div class="shadow-none text-center icon_card" onmouseover="mou_over1()" onmouseleave="mou_leave1()" style="max-height: 100px;">
                        <div class="card-img-top">
                            <!-- <i class="fa-regular fa-hard-drive" style="font-size: 70px;"></i> -->
                            <img class="card-img-top" src="../../assets/img/icon/work2.png" style="max-width:70px" alt="Zoho Workdrive">
                        </div>
                        <!-- <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Zoho Workdrive"> -->
                        <div class="card-title">Monday Workdrive</div>
                        <div class="card-body">
                            <a href="">
                                <div class="btn btn-warning mt-3 over">Import</div>
                            </a>

                        </div>
                    </div>


                    <!-- child 2 -->
                    <div class="shadow-none text-center icon_card" onmouseover="mou_over2()" onmouseleave="mou_leave2()" style="max-height: 100px;">
                        <div class="card-img-top">
                            <!-- <i class="fa-brands fa-google-drive" style="font-size: 70px;"></i> -->
                            <img class="card-img-top" src="../../assets/img/icon/drive2.png" style="max-width:70px" alt="Zoho Workdrive">
                        </div>
                        <!-- <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Zoho Workdrive"> -->
                        <div class="card-title">Google drive</div>
                        <div class="card-body">
                            <a href="">
                                <div class="btn btn-warning mt-3 over">Import</div>
                            </a>

                        </div>
                    </div>


                    <!-- child 3-->
                    <div class="shadow-none text-center icon_card" onmouseover="mou_over3()" onmouseleave="mou_leave3()" style="max-height: 100px;">
                        <div class="card-img-top">
                            <!-- <i class="fa-solid fa-cloud" style="font-size: 70px;"></i> -->
                            <img class="card-img-top" src="../../assets/img/icon/one_drive2.png" style="max-width:70px" alt="Zoho Workdrive">

                        </div>
                        <!-- <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Zoho Workdrive"> -->
                        <div class="card-title">One drive</div>
                        <div class="card-body">
                            <a href="">
                                <div class="btn btn-warning mt-3 over">Import</div>
                            </a>

                        </div>
                    </div>

                    <!-- child 4 -->
                    <div class="shadow-none text-center icon_card" onmouseover="mou_over4()" onmouseleave="mou_leave4()" style="max-height: 100px;">
                        <div class="card-img-top">
                            <!-- <i class="fa-brands fa-dropbox" style="font-size: 70px;"></i> -->
                            <img class="card-img-top" src="../../assets/img/icon/drop_box2.png" style="max-width:70px" alt="Zoho Workdrive">
                            <div class="card-title">Drop Box</div>
                            <div class="card-body">
                                <a href="">
                                    <div class="btn btn-warning mt-3 over">Import</div>
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- child 5 -->
                    <div class="shadow-none text-center  icon_card" onmouseover="mou_over5()" onmouseleave="mou_leave5()" style="max-height: 100px;">
                        <div class="card-img-top">
                            <!-- <i class="fa-solid fa-square" style="font-size: 70px;"></i> -->
                            <img class="card-img-top" src="../../assets/img/icon/box2.png" style="max-width:70px" alt="Zoho Workdrive">

                        </div>
                        <!-- <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Zoho Workdrive"> -->
                        <div class="card-title">Box</div>
                        <div class="card-body">
                            <a href="">
                                <div class="btn btn-warning mt-3 over">Import</div>
                            </a>

                        </div>
                    </div>

                </div>
                <!-- row end -->

            </div>
            <!--  Parent end-->

            <div class="navbar navbar-expand-lg sticky-bottom mb-5 mt-4" style="height: 70px!important;">
                <div class="d-flex mt-4" style="margin: auto;">
                    <div class="mt-4">
                        <a href="{{url('/ab_next2')}}">
                            <div class="btn btn-warning">
                                Cancel
                            </div>
                        </a>
                    </div>

                    <div class="ms-2 mt-4">
                        <button type="submit" class="btn btn-warning">Save</button>
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
    const mou_over1 = () => {
        let h_card1 = document.querySelector('.h_card1');
        let tr = h_card1.classList.contains('shadow-none');
        if (tr) {
            h_card1.classList.remove('shadow-none');
            h_card1.classList.add('card');
            h_card1.classList.add('rounded-5');
            h_card1.classList.add('border');
            h_card1.classList.add('border-secondary');


        }

    }

    const mou_leave1 = () => {
        let h_card1 = document.querySelector('.h_card1');
        let tr = h_card1.classList.contains('shadow-none');
        if (tr) {
            h_card1.classList.remove('shadow-none');
            h_card1.classList.add('card');

        } else {
            h_card1.classList.add('shadow-none');
            h_card1.classList.remove('card');
            h_card1.classList.remove('rounded-5');
            h_card1.classList.remove('border');
            h_card1.classList.remove('border-secondary');

        }

    }

    const mou_over2 = () => {
        let h_card2 = document.querySelector('.h_card2');
        let tr = h_card2.classList.contains('shadow-none');
        if (tr) {
            h_card2.classList.remove('shadow-none');
            h_card2.classList.add('card');
            h_card2.classList.add('rounded-5');
            h_card2.classList.add('border');
            h_card2.classList.add('border-secondary');

        }

    }

    const mou_leave2 = () => {
        let h_card2 = document.querySelector('.h_card2');
        let tr = h_card2.classList.contains('shadow-none');
        if (tr) {
            h_card2.classList.remove('shadow-none');
            h_card2.classList.add('card');

        } else {
            h_card2.classList.add('shadow-none');
            h_card2.classList.remove('card');
            h_card2.classList.remove('rounded-5');
            h_card2.classList.remove('border');
            h_card2.classList.remove('border-secondary');
        }

    }




    const mou_over3 = () => {
        let h_card3 = document.querySelector('.h_card3');
        let tr = h_card3.classList.contains('shadow-none');
        if (tr) {
            h_card3.classList.remove('shadow-none');
            h_card3.classList.add('card');
            h_card3.classList.add('card');
            h_card3.classList.add('rounded-5');
            h_card3.classList.add('border');
            h_card3.classList.add('border-secondary');

        }

    }

    const mou_leave3 = () => {
        let h_card3 = document.querySelector('.h_card3');
        let tr = h_card3.classList.contains('shadow-none');
        if (tr) {
            h_card3.classList.remove('shadow-none');
            h_card3.classList.add('card');

        } else {
            h_card3.classList.add('shadow-none');
            h_card3.classList.remove('card');
            h_card3.classList.remove('rounded-5');
            h_card3.classList.remove('border');
            h_card3.classList.remove('border-secondary');

        }

    }

    const mou_over4 = () => {
        let h_card4 = document.querySelector('.h_card4');
        let tr = h_card4.classList.contains('shadow-none');
        if (tr) {
            h_card4.classList.remove('shadow-none');
            h_card4.classList.add('card');
            h_card4.classList.add('rounded-5');
            h_card4.classList.add('border');
            h_card4.classList.add('border-secondary');

        }

    }

    const mou_leave4 = () => {
        let h_card4 = document.querySelector('.h_card4');
        let tr = h_card4.classList.contains('shadow-none');
        if (tr) {
            h_card4.classList.remove('shadow-none');
            h_card4.classList.add('card');

        } else {
            h_card4.classList.add('shadow-none');
            h_card4.classList.remove('card');
            h_card4.classList.remove('rounded-5');
            h_card4.classList.remove('border');
            h_card4.classList.remove('border-secondary');
        }

    }

    const mou_over5 = () => {
        let h_card5 = document.querySelector('.h_card5');
        let tr = h_card5.classList.contains('shadow-none');
        if (tr) {
            h_card5.classList.remove('shadow-none');
            h_card5.classList.add('card');
            h_card5.classList.add('rounded-5');
            h_card5.classList.add('border');
            h_card5.classList.add('border-secondary');

        }

    }

    const mou_leave5 = () => {
        let h_card5 = document.querySelector('.h_card5');
        let tr = h_card5.classList.contains('shadow-none');
        if (tr) {
            h_card5.classList.remove('shadow-none');
            h_card5.classList.add('card');

        } else {
            h_card5.classList.add('shadow-none');
            h_card5.classList.remove('card');
            h_card5.classList.remove('rounded-5');
            h_card5.classList.remove('border');
            h_card5.classList.remove('border-secondary');
        }

    }
</script>
@endsection