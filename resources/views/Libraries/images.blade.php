@extends('layouts.master')
@section('title')
<title>Images</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between" style="font-size: 25px;">
            <div class="title mb-2">Images</div>
            <div></div>
        </div>

        <div class="p-5 mb-2">

            <div class="text-center mb-5" style="font-size: 25px;">
                <span class="mb-2">
                    <i class="fa fa-folder text-warning" style="font-size: 100px;"></i>
                    <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                </span>
                <div class="fs-4 mb-2">Create image gallery</div>

                <div class="fs-4">Your own repository where you can save images used on regular basis</div>



                <div class="demo-inline-spacing">
                    <div class="btn-group">
                        <div type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Upload</div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url('/upload_from_computer1')}}">From Computer</a></li>
                            <li><a class="dropdown-item" href="" type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="modal" type="button" class="btn btn-warning dropdown-toggle" data-bs-target="#web_url">From web URL</a></li>
                            <hr class="dropdown-divider">

                            <li><a class="dropdown-item" href="javascript:void(0);">Separated Link</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>



        <div class="mb-3 ms-5">New Collection(10)</div>
        <div class="row mb-2 mb-5">
            <!-- src="assets_topmost/images/small-logo.png" -->
            <div class="col-12 col-md-3 col-lg-3 col-xl-3"><img src="assets/img/products/2.png" alt="Not available"></div>
            <div class="col-12 col-md-3 col-lg-3 col-xl-3"><img src="assets/img/products/2.png" alt="Not available"></div>
            <div class="col-12 col-md-3 col-lg-3 col-xl-3"><img src="assets/img/products/2.png" alt="Not available"></div>
            <div class="col-12 col-md-3 col-lg-3 col-xl-3"><img src="assets/img/products/2.png" alt="Not available"></div>
            <div class="col-12 col-md-3 col-lg-3 col-xl-3"><img src="assets/img/products/2.png" alt="Not available"></div>
            <div class="col-12 col-md-3 col-lg-3 col-xl-3"><img src="assets/img/products/2.png" alt="Not available"></div>
            <div class="col-12 col-md-3 col-lg-3 col-xl-3"><img src="assets/img/products/2.png" alt="Not available"></div>
            <div class="col-12 col-md-3 col-lg-3 col-xl-3"><img src="assets/img/products/2.png" alt="Not available"></div>

        </div>




    </div>
</div>

<!-- web_url modal start -->
<div class="modal fade" id="web_url" tabindex="-1" aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <!-- Navbar content -->
                <div class="title mt-2 text-uppercase">Upload Images from Web</div>

                <hr class="mb-5">
                <form action="" method="post">
                    @csrf

                    <div class="row mb-3">

                        <label for="" class="col-12 col-md-3 col-lg-3 col-xl-3 mb-2">Web Image URL</label>

                        <div class="col-12 col-md-8 col-lg-8 col-xl-8 mb-4">
                            <input class="form-control" type="text" id="" placeholder="">
                        </div>

                        <div class="col-12 col-md-3 col-lg-3 col-xl-3 mb-2"></div>
                        <div class="col-12 col-md-8 col-lg-8 col-xl-8 mb-5">
                            Example: http://www.example.com/images/image.gif (JPG, GIF, PNG, BMP.)
                            <br>
                            Note: Image size should not be more than 1 MB.
                        </div>

                    </div>


                    <div class="d-flex justify-content-end gap-3">
                        <div class="btn btn-primary" type="submit">Save</div>
                        <div class="btn btn-outline-primary" type="">Cancel</div>

                    </div>

                </form>


            </div>
        </div>
    </div>
</div>
<!--web_url modal end -->





<script>
    let delete_all = document.querySelector('.dlt_all');
    console.log(delete_all)
    let dlt_single_message = document.querySelectorAll('.dlt_single_message');
    console.log(dlt_single_message);


    delete_all.addEventListener('change', function() {
        let d_sn = document.querySelector('.d_sn');
        let tr = d_sn.classList.contains('d-none');
        console.log(tr);
        if (tr) {
            d_sn.classList.remove('d-none');

        } else {
            d_sn.classList.add('d-none');
        }


        dlt_single_message.forEach(function(val) {

            val.checked = delete_all.checked;
        });
    });


    const Mouse_over = (single_data) => {
        console.log(single_data.children);
        let value = single_data.children[0].children[0];
        console.log(value);

        if (value.classList.contains('invisible')) {
            value.classList.remove('invisible');
        }

    }

    const Mouse_out = (single_data1) => {

        let value1 = single_data1.children[0].children[0];
        console.log(value1);
        let fa = !(value1.classList.contains('invisible'));
        if (fa) {
            value1.classList.add('invisible');
        }
    }
</script>

@endsection