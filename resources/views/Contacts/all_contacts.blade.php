<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Contact List</title>
    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/css/rtl/theme-semi-dark.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="{{asset('/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset('/assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('/assets/js/config.js')}}"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

<!-- Data tables2 css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
</head>

<body>
    <!-- Layout wrap1er start -->
    <div class="layout-wrap1er layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('layouts.sidebar')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('layouts.header')
                <!-- / Navbar -->
                <!--Strat Content wrap1er -->
                <div class="content-wrap1er">

                    <!-- Content -->


                    <!-- Content wrapper start -->
                    <div class="content-wrapper">
                        <!-- Content start-->
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">sefalibegumimo@gmail.com <span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
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
                    <!-- / Content -->
                    <!-- Footer will be placed here -->


                    <!-- Start filtering1 Modal -->
                    <div class="modal fade" id="filtering1" tabindex="-1" aria-hidden="true">
                        <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                            <div class="modal-content p-3 p-md-5">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                    <div class="title">Assigning a topic to a contact ensures that your contacts receive topic relevant email Campaigns</div>

                                    <form class="row g-3">
                                        @csrf
                                        <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                                            <div class="row">
                                                <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="select2">Choose Topic</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                                    <select class="select2 form-select">
                                                        <option value="">Select</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="WV">West Virginia</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                                            <div class="row">
                                                <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="select2">Choose Topic</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                                    <input type="text" class="form-control" placeholder="Monu vat khaiso?">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 ms-4 mt-4">
                                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Save</button>
                                            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End filtering1 Modal -->

                    <!-- Start edit filtering2 Modal -->
                    <div class="modal fade" id="filtering2" tabindex="-1" aria-hidden="true">
                        <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                            <div class="modal-content p-3 p-md-5">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                    <div class="title">Assigning a topic to a contact ensures that your contacts receive topic relevant email Campaigns</div>

                                    <form class="row g-3">
                                        @csrf
                                        <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                                            <div class="row">
                                                <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="select2">Choose Topic</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                                    <select class="select2 form-select">
                                                        <option value="">Select</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="WV">West Virginia</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                                            <div class="row">
                                                <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="select2">Choose Topic</label>
                                                <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                                    <input type="text" class="form-control" placeholder="Monu vat khaiso?">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 ms-4 mt-4">
                                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Save</button>
                                            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End edit filtering2 Modal -->

                    <!-- filtering3 Modal -->
                    <div class="modal fade" id="filtering3" tabindex="-1" aria-hidden="true">
                        <div class="modal-lg  modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                            <div class="modal-content p-3 p-md-5">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                    <div class="d-flex justify-content-around">
                                        <div class="btn btn-info" onclick="contact_infor()">Contact Info</div>
                                        <div class="btn btn-primary" onclick="contact_basic_detail()">Contact Basic Details</div>
                                        <div class="btn btn-warning" onclick="more_detail()">More Details</div>
                                        <div class="btn btn-danger" onclick="social_infor()">Social Information</div>
                                    </div>
                                    <form action="" method="post">
                                        @csrf
                                        <div class="row">
                                            <!-- Contact Info -->
                                            <section class="mt-4 contact_info">
                                                <div class="mb-4">

                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Contact Email</label>
                                                        <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                            <input type="text" class="form-control" placeholder="Enter Contact Email" />
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Mobile</label>
                                                        <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <!-- Contact Basic Details-->
                                            <section class="mt-4 d-none contact_basic_details">
                                                <div class="mb-4">

                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Title</label>
                                                        <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                            <input type="text" class="form-control" placeholder="Enter Contact Email" />
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">First Name</label>
                                                        <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Last Name</label>
                                                        <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Company Name</label>
                                                        <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Phone</label>
                                                        <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <!-- More Details -->
                                            <section class="mt-4 d-none more_details">
                                                <div class="mb-4">

                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Secondary Email Adrress</label>
                                                        <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                            <input type="text" id="alignment-username" class="form-control" placeholder="sefalibegumimo@gmail.com" />
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="Contact_Source">Contact Source</label>
                                                        <div id="Contact_Source" class="col-sm-9 col-lg-9 col-xxl-9">


                                                            <select id="formtabs-country" class="select2 form-select">
                                                                <option value="">---Select---</option>
                                                                <option value="">sefalibegumimo@gmail.com</option>
                                                                <option value="Australia">mimo@gmail.com</option>
                                                                <option value="United Arab Emirates">imo@gmail.com</option>
                                                            </select>
                                                            <div class="h-100" id="parent_div">
                                                                <div class="text-center text-muted border-1 bg-white" onclick="sender()">Add New Source</div>
                                                                <div class="h-50" id="divv">
                                                                    <!-- Create sender address label and div using JS -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Address</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">City</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">State</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Zip Code</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Address</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Country</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Website Address</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Note</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <div class="input-group input-group-merge">
                                                            <textarea type="text" class="form-control" value="Configure Content"> </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        </section>


                                        <!-- Social Info -->
                                        <section class="mt-4 d-none social_info">
                                            <div class=" mb-4">

                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Twitter Handle</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <input type="text" id="alignment-username" class="form-control" placeholder="sefalibegumimo@gmail.com" />
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Facebook Handle</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <input type="text" id="alignment-username" class="form-control" placeholder="sefalibegumimo@gmail.com" />
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">LinkedIn Handle</label>
                                                    <div class="col-sm-9 col-lg-9 col-xxl-9">
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <!-- <hr class="my-4 mx-n4" /> -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button type="submit" class="btn btn-primary me-sm-2 me-1">Submit</button>
                                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- filtering3 Modal end-->
    </div>
    <!-- Content wrap1er -->
    </div>
    <!-- / Layout page -->
    </div>
    </div>
    <!-- Layout wrap1er end -->

    <!-- mouseover and mouseout js -->
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


    <script>
        let contact_info = document.querySelector('.contact_info');
        let contact_basic_details = document.querySelector('.contact_basic_details');
        let more_details = document.querySelector('.more_details');
        let social_info = document.querySelector('.social_info');


        const contact_basic_detail = () => {

            console.log(contact_basic_details);
            let contact_basic_details_tr = contact_basic_details.classList.contains('d-none');
            console.log(contact_basic_details_tr);

            if (contact_basic_details_tr) {
                contact_basic_details.classList.remove('d-none');
                contact_info.classList.add('d-none');
                more_details.classList.add('d-none');
                social_info.classList.add('d-none');

            }


        }

        const more_detail = () => {

            console.log(more_details);
            let more_details_tr = more_details.classList.contains('d-none');
            console.log(more_details_tr);

            if (more_details_tr) {
                more_details.classList.remove('d-none');
                contact_info.classList.add('d-none');
                contact_basic_details.classList.add('d-none');
                social_info.classList.add('d-none');

            }
        }

        const social_infor = () => {

            console.log(social_info);
            let social_info_tr = social_info.classList.contains('d-none');
            console.log(social_info_tr);

            if (social_info_tr) {
                social_info.classList.remove('d-none');
                contact_info.classList.add('d-none');
                more_details.classList.add('d-none');
                contact_basic_details.classList.add('d-none');

            }
        }

        const contact_infor = () => {

            console.log(contact_info);
            let contact_info_tr = contact_info.classList.contains('d-none');
            console.log(contact_info_tr);

            if (contact_info_tr) {
                contact_info.classList.remove('d-none');
                more_details.classList.add('d-none');
                social_info.classList.add('d-none');
                contact_basic_details.classList.add('d-none');
            }
        }
    </script>



    <script>
        const sender = () => {

            let t = document.querySelector('#divv');

            let parent_div = document.querySelector('#parent_div');

            let div = document.querySelector('#divv');

            let label = document.createElement('label');
            label.setAttribute('for', 'email_address');
            label.innerText = 'Email Adress';

            let input = document.createElement('input');
            input.classList.add('form-control');
            input.setAttribute('type', 'text');
            input.setAttribute('id', 'email_address');
            input.setAttribute('for', 'form-control');
            input.setAttribute('placeholder', 'email_address');


            let section = document.createElement('section');
            section.classList.add('icon');
            section.classList.add('d-flex');

            section.style.marginLeft = '300px';
            section.style.marginTop = '-25px';

            let i_tik = document.createElement('i');
            i_tik.classList.add('class', 'cancel');
            i_tik.classList.add('fa-sharp');
            i_tik.classList.add('fa-solid');
            i_tik.classList.add('fa-check');

            let i_cross = document.createElement('i');
            i_cross.classList.add('class', 'cross');
            i_cross.classList.add('fa-sharp');
            i_cross.classList.add('fa-solid');
            i_cross.classList.add('fa-xmark');

            i_cross.classList.add('ms-4');

            section.appendChild(i_tik);
            section.appendChild(i_cross);

            div.appendChild(label);
            div.appendChild(input);
            div.appendChild(section);

            parent_div.appendChild(div);
            console.log(parent_div);


            let cross = document.querySelector('.cross');
            if (true) {
                cross.addEventListener('click', () => {
                    div.remove();
                });
            } else {
                cross.addEventListener('click', () => {
                    div.add();
                });
            }

            // let cancel = document.querySelector('.cancel');
            // if (true) {
            //     cancel.addEventListener('click', () => {
            //         div.save();
            //     });
            // } 

        }
    </script>

    <!-- Javascropt link for header, navbar, content and footer style -->
    <script src="{{asset('/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('/assets/vendor/libs/hammer/hammer.js')}}"></script>


    <script src="{{asset('/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <script src="{{asset('/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Data tables2 Js-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

    <!-- Data tables2 Jquery-->
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</body>

</html>