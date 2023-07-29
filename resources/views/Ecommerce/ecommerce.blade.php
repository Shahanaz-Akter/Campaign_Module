@extends('layouts.master')
@section('title')
<title>Ecommerce</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between" style="font-size: 25px;">
            <div class="title mb-2">Ecommerce</div>
            <div></div>
        </div>

        <div class="">
            <div class="p-5 mb-2">
                <div></div>
                <div class="text-center mb-5" style="font-size: 25px;">
                    <span class="mb-2">
                        Icon
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div class="fs-4 mb-2">Connect your online store with Zoho Campaigns</div>

                    <div class="fs-4">Connect your online store, attract more customers, send promotional campaigns,and earn a greater return on your investment.
                        <br> Recover sales from abandoned carts, bring customers back to your store
                        <br>using automated email follow-ups, and much more.
                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-center gap-4 mb-5">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#proceed">proceed</button>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#learn_more">Learn More</button>
            </div>


        </div>



        <div class="container-sm container-md container-lg container-xxl">

            <div class="d-flex justify-content-start gap-2 mt-3">
                <div class="p-2 btn-group bg-white">
                    <div type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-tag me-3"></i> Assign Tags</div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Action</a></li>
                        <li><a class="dropdown-item" href="">Another action</a></li>
                        <li><a class="dropdown-item" href="">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="">Separated link</a></li>
                    </ul>
                </div>

                <div class="p-2 bg-white">
                    <div type="" class="btn" data-bs-toggle="modal" data-bs-target="#filtering1"> <i class="fa-solid fa-flag me-3"></i> Assign Topics</div>
                </div>
                <div class="btn p-2">
                    <div class="btn p-2">
                        <label for="dlt_all" class="">Delete All</label>
                        <a href="{{url('/delete_all_sms_campaigns')}}">
                            <i class="d_sn fa-solid fa-trash-can text-danger d-none ms-3" style="font-size:17px!important;"></i>
                        </a>
                    </div>
                </div>

                <!-- <a href="{{url('/delete')}}"><i class="fa-solid fa-trash-can text-danger"></i></a> -->
            </div>
            <br>
            <table id="example" class="display nowrap" style="width:100%;">
                <thead>
                    <!-- <span class="">10 Contacts are Selected</span> -->

                    <tr class="mb-5">
                        <th><input type="checkbox" class="form-check-input dlt_all"></th>
                        <th class="pb-3">Contact Email</th>
                        <th class="pb-3">First Name</th>
                        <th class="pb-3">Last Name</th>
                        <th class="pb-3">Company Name</th>
                        <th class="pb-3">Phone</th>
                        <th class="pb-3">Mobile</th>
                        <th class="pb-3">Status</th>
                        <th class="pb-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="mb-5">
                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">sefalibegumimo@gmail.com
                            <span>
                                <i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i>
                            </span>
                        </td>
                        <td class="pb-3 single_data ">Sefali</td>
                        <td class="pb-3 single_data ">Begum</td>
                        <td class="pb-3 single_data ">Ztrios</td>
                        <td class="pb-3 single_data ">010197226</td>
                        <td class="pb-3 single_data ">++7226</td>
                        <td class="pb-3 single_data ">Pending</td>
                        <td class="text-center"><i class="fa-solid fa-trash-can text-danger"></i></td>
                    </tr>
                    <tr class="mb-5">
                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">kada@gmail.com <span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                        <td class="pb-3 single_data ">Sefali</td>
                        <td class="pb-3 single_data ">Begum</td>
                        <td class="pb-3 single_data ">Ztrios</td>
                        <td class="pb-3 single_data ">010197226</td>
                        <td class="pb-3 single_data ">++7226</td>
                        <td class="pb-3 single_data ">Pending</td>
                        <td class="text-center"><i class="fa-solid fa-trash-can text-danger"></i></td>
                    </tr>

                    <tr class="mb-5">
                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">rifatvaiya@gmail.com <span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                        <td class="pb-3 single_data ">Sefali</td>
                        <td class="pb-3 single_data ">Begum</td>
                        <td class="pb-3 single_data ">Ztrios</td>
                        <td class="pb-3 single_data ">010197226</td>
                        <td class="pb-3 single_data ">++7226</td>
                        <td class="pb-3 single_data ">Pending</td>
                        <td class="text-center"><i class="fa-solid fa-trash-can text-danger"></i></td>
                    </tr>
                    <tr class="mb-5">
                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">mosha@gmail.com<span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                        <td class="pb-3 single_data ">Sefali</td>
                        <td class="pb-3 single_data ">Begum</td>
                        <td class="pb-3 single_data ">Ztrios</td>
                        <td class="pb-3 single_data ">010197226</td>
                        <td class="pb-3 single_data ">++7226</td>
                        <td class="pb-3 single_data ">Pending</td>
                        <td class="text-center"><i class="fa-solid fa-trash-can text-danger"></i></td>
                    </tr>
                    <tr class="mb-5">
                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">mimibegumimo@gmail.com <span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></i></td>
                        <td class="pb-3 single_data ">Sefali</td>
                        <td class="pb-3 single_data ">Begum</td>
                        <td class="pb-3 single_data ">Ztrios</td>
                        <td class="pb-3 single_data ">010197226</td>
                        <td class="pb-3 single_data ">++7226</td>
                        <td class="pb-3 single_data ">Pending</td>
                        <td class="text-center"><i class="fa-solid fa-trash-can text-danger"></i></td>
                    </tr>
                    <tr class="mb-5">
                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">shoili@gmail.com <span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                        <td class="pb-3 single_data ">Sefali</td>
                        <td class="pb-3 single_data ">Begum</td>
                        <td class="pb-3 single_data ">Ztrios</td>
                        <td class="pb-3 single_data ">010197226</td>
                        <td class="pb-3 single_data ">++7226</td>
                        <td class="pb-3 single_data ">Pending</td>
                        <td class="text-center"><i class="fa-solid fa-trash-can text-danger"></i></td>
                    </tr>

                    <tr class="mb-5">
                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">telapoka@gmail.com<span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                        <td class="pb-3 single_data ">Sefali</td>
                        <td class="pb-3 single_data ">Begum</td>
                        <td class="pb-3 single_data ">Ztrios</td>
                        <td class="pb-3 single_data ">010197226</td>
                        <td class="pb-3 single_data ">++7226</td>
                        <td class="pb-3 single_data ">Pending</td>
                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                    </tr>
                    <tr class="mb-5">
                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">ashrafvaiya@gmail.com <span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                        <td class="pb-3 single_data ">Sefali</td>
                        <td class="pb-3 single_data ">Begum</td>
                        <td class="pb-3 single_data ">Ztrios</td>
                        <td class="pb-3 single_data ">010197226</td>
                        <td class="pb-3 single_data ">++7226</td>
                        <td class="pb-3 single_data ">Pending</td>
                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                    </tr>
                    <tr class="mb-5">
                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">luna@gmail.com<span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                        <td class="pb-3 single_data ">Sefali</td>
                        <td class="pb-3 single_data ">Begum</td>
                        <td class="pb-3 single_data ">Ztrios</td>
                        <td class="pb-3 single_data ">010197226</td>
                        <td class="pb-3 single_data ">++7226</td>
                        <td class="pb-3 single_data ">Pending</td>
                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                    </tr>
                </tbody>
                <tfoot></tfoot>
            </table>


            <div class="d-flex justify-content-start gap-3">
                <!-- flex child-1 -->
                <div>
                    <a href="{{url('/')}}">
                        <div class="btn btn-outline-warning mt-5">
                            Previous
                        </div>
                    </a>
                </div>

                <!-- flex child-2 -->
                <div class="mt-5">
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- proceed modal start -->
<div class="modal fade" id="proceed" tabindex="-1" aria-hidden="true">
    <div class="modal-xl modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <!-- Navbar content -->
                <div class="title mt-2 text-uppercase">Ecommerce</div>

                <hr class="mb-5">

                <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">

                        <div class="col-md-6 col-lg-6 col-xl-6 mb-3 mt-2 p-5" style="border: 1px solid 	snow;">

                            <div class="mb-2 text-primary fw-bold"><i class="fas fa-credit-card  me-2"></i> Zoho Commerce </div>
                            <div class="mb-4">Connect your online store, scale your ecommerce, send promotional and automated follow-up emails, and sell more products by integrating with Zoho Commerce.</div>
                            <div class="d-flex mb-2 gap-4 ">
                                <a href="">
                                    <div type="" class="btn btn-primary">Integrate</div>
                                </a>
                                <a href="">
                                    <div type="" class="btn btn-outline-primary">Learn More</div>
                                </a>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-6 col-xl-6 mb-4 mt-2 p-5" style="border: 1px solid 	snow;">

                            <div class="mb-2 text-primary fw-bold"> <i class="fab fa-shopify me-2"></i> Shopify</div>
                            <div class="mb-4">Connect your online store, scale your ecommerce, send promotional and automated follow-up emails, and sell more products by integrating with Zoho Commerce.</div>
                            <div class="d-flex mb-2 gap-4 ">

                                <a href="">
                                    <div type="" class="btn btn-primary">Integrate</div>
                                </a>
                                <a href="">
                                    <div type="" class="btn btn-outline-primary">Learn More</div>
                                </a>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-6 col-xl-6 mb-4 mt-2 p-5" style="border: 1px solid 	snow;">

                            <div class="mb-2 text-primary fw-bold"><span class=""><i class="fas fa-dollar-sign me-2"></i></span>Woo Commerce</div>
                            <div class="mb-4">Connect your online store, scale your ecommerce, send promotional and automated follow-up emails, and sell more products by integrating with Zoho Commerce.</div>
                            <div class="d-flex mb-2">
                                <a href="">
                                    <div type="" class="btn btn-primary">Learn More</div>
                                </a>
                            </div>

                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!--proceed modal end -->





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