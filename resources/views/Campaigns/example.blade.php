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
                                        <a href="{{url('/delete_all_sms_campaigns')}}"><i class="d_sn fa-solid fa-trash-can text-danger d-none ms-3" style="font-size:17px!important;"></i></a>
                                    </div>
                                </div>

                                <!-- <a href="{{url('/delete')}}"><i class="fa-solid fa-trash-can text-danger"></i></a> -->
                            </div>
                            <br>
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <!-- <span class="">10 Contacts are Selected</span> -->

                                    <tr class="mb-5">
                                        <th><input type="checkbox" class="form-check-input dlt_all"></th>
                                        <th class="pe-5">Contact Email</th>
                                        <th class="pe-5">First Name</th>
                                        <th class="pe-5">Last Name</th>
                                        <th class="pe-5">Company Name</th>
                                        <th class="pe-5">Phone</th>
                                        <th class="pe-5">Mobile</th>
                                        <th class="pe-5">Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">sefalibegumimo@gmail.com <span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                                        <td class="pe-5 single_data ">Sefali</td>
                                        <td class="pe-5 single_data ">Begum</td>
                                        <td class="pe-5 single_data ">Ztrios</td>
                                        <td class="pe-5 single_data ">010197226</td>
                                        <td class="pe-5 single_data ">++7226</td>
                                        <td class="pe-5 single_data ">Pending</td>
                                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                                    </tr>
                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">kada@gmail.com <a href="{{url('/edit_contact')}}"><i class="fa-solid fa-pen text-black ms-3 invisible"></i></a></td>
                                        <td class="pe-5 single_data ">Sefali</td>
                                        <td class="pe-5 single_data ">Begum</td>
                                        <td class="pe-5 single_data ">Ztrios</td>
                                        <td class="pe-5 single_data ">010197226</td>
                                        <td class="pe-5 single_data ">++7226</td>
                                        <td class="pe-5 single_data ">Pending</td>
                                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                                    </tr>

                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">rifatvaiya@gmail.com <a href="{{url('/edit_contact')}}"><i class="fa-solid fa-pen text-black ms-3 invisible"></i></a></td>
                                        <td class="pe-5 single_data ">Sefali</td>
                                        <td class="pe-5 single_data ">Begum</td>
                                        <td class="pe-5 single_data ">Ztrios</td>
                                        <td class="pe-5 single_data ">010197226</td>
                                        <td class="pe-5 single_data ">++7226</td>
                                        <td class="pe-5 single_data ">Pending</td>
                                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                                    </tr>
                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">mosha@gmail.com <a href="{{url('/edit_contact')}}"><i class="fa-solid fa-pen text-black ms-3 invisible"></i></a></td>
                                        <td class="pe-5 single_data ">Sefali</td>
                                        <td class="pe-5 single_data ">Begum</td>
                                        <td class="pe-5 single_data ">Ztrios</td>
                                        <td class="pe-5 single_data ">010197226</td>
                                        <td class="pe-5 single_data ">++7226</td>
                                        <td class="pe-5 single_data ">Pending</td>
                                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                                    </tr>
                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">mimibegumimo@gmail.com <a href="{{url('/edit_contact')}}"><i class="fa-solid fa-pen text-black ms-3 invisible"></i></a></td>
                                        <td class="pe-5 single_data ">Sefali</td>
                                        <td class="pe-5 single_data ">Begum</td>
                                        <td class="pe-5 single_data ">Ztrios</td>
                                        <td class="pe-5 single_data ">010197226</td>
                                        <td class="pe-5 single_data ">++7226</td>
                                        <td class="pe-5 single_data ">Pending</td>
                                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                                    </tr>
                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">shoili@gmail.com <a href="{{url('/edit_contact')}}"><i class="fa-solid fa-pen text-black ms-3 invisible"></i></a></td>
                                        <td class="pe-5 single_data ">Sefali</td>
                                        <td class="pe-5 single_data ">Begum</td>
                                        <td class="pe-5 single_data ">Ztrios</td>
                                        <td class="pe-5 single_data ">010197226</td>
                                        <td class="pe-5 single_data ">++7226</td>
                                        <td class="pe-5 single_data ">Pending</td>
                                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                                    </tr>

                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">telapoka@gmail.com <a href="{{url('/edit_contact')}}"><i class="fa-solid fa-pen text-black ms-3 invisible"></i></a></td>
                                        <td class="pe-5 single_data ">Sefali</td>
                                        <td class="pe-5 single_data ">Begum</td>
                                        <td class="pe-5 single_data ">Ztrios</td>
                                        <td class="pe-5 single_data ">010197226</td>
                                        <td class="pe-5 single_data ">++7226</td>
                                        <td class="pe-5 single_data ">Pending</td>
                                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                                    </tr>
                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">ashrafvaiya@gmail.com <a href="{{url('/edit_contact')}}"><i class="fa-solid fa-pen text-black ms-3 invisible"></i></a></td>
                                        <td class="pe-5 single_data ">Sefali</td>
                                        <td class="pe-5 single_data ">Begum</td>
                                        <td class="pe-5 single_data ">Ztrios</td>
                                        <td class="pe-5 single_data ">010197226</td>
                                        <td class="pe-5 single_data ">++7226</td>
                                        <td class="pe-5 single_data ">Pending</td>
                                        <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                                    </tr>
                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">luna@gmail.com <a href="{{url('/edit_contact')}}"><i class="fa-solid fa-pen text-black ms-3 invisible"></i></a></td>
                                        <td class="pe-5 single_data ">Sefali</td>
                                        <td class="pe-5 single_data ">Begum</td>
                                        <td class="pe-5 single_data ">Ztrios</td>
                                        <td class="pe-5 single_data ">010197226</td>
                                        <td class="pe-5 single_data ">++7226</td>
                                        <td class="pe-5 single_data ">Pending</td>
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

                    <!-- Start Modal -->
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
                    <!-- End Modal -->

                    <!-- Start edit Modal -->
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
                    <!-- End edit Modal -->

                    <!-- filtering3 Modal -->
                    <div class="modal fade" id="filtering3" tabindex="-1" aria-hidden="true">
                        <div class="modal-lg  modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                            <div class="modal-content p-3 p-md-5">
                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                    <!-- <div class="title">Assigning a topic to a contact ensures that your contacts receive topic relevant email Campaigns</div> -->

                                    <form class="row g-3">
                                        @csrf


                                        <!-- wizard -->
                                        <div class="bs-stepper wizard-numbered mt-2">
                                            <div class="bs-stepper-header">
                                                <div class="step" data-target="#account-details">
                                                    <button type="button" class="step-trigger">
                                                        <span class="bs-stepper-circle">1</span>
                                                        <span class="bs-stepper-label mt-1">
                                                            <span class="bs-stepper-title">Account Details</span>
                                                            <span class="bs-stepper-subtitle">Setup Account Details</span>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="step" data-target="#personal-info">
                                                    <button type="button" class="step-trigger">
                                                        <span class="bs-stepper-circle">2</span>
                                                        <span class="bs-stepper-label mt-1">
                                                            <span class="bs-stepper-title">Personal Info</span>
                                                            <span class="bs-stepper-subtitle">Add personal info</span>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="step" data-target="#social-links">
                                                    <button type="button" class="step-trigger">
                                                        <span class="bs-stepper-circle">3</span>
                                                        <span class="bs-stepper-label mt-1">
                                                            <span class="bs-stepper-title">Social Links</span>
                                                            <span class="bs-stepper-subtitle">Add social links</span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bs-stepper-content">
                                                <form onSubmit="return false">
                                                    <!-- Account Details -->
                                                    <div id="account-details" class="content">
                                                        <div class="content-header mb-3">
                                                            <h6 class="mb-0">Account Details</h6>
                                                            <small>Enter Your Account Details.</small>
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="username">Username</label>
                                                                <input type="text" id="username" class="form-control" placeholder="johndoe" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="email">Email</label>
                                                                <input type="email" id="email" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" />
                                                            </div>
                                                            <div class="col-md-6 form-password-toggle">
                                                                <label class="form-label" for="password">Password</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="password" id="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password2" />
                                                                    <span class="input-group-text cursor-pointer" id="password2"><i class="bx bx-hide"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 form-password-toggle">
                                                                <label class="form-label" for="confirm-password">Confirm Password</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="password" id="confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="confirm-password2" />
                                                                    <span class="input-group-text cursor-pointer" id="confirm-password2"><i class="bx bx-hide"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 d-flex justify-content-between">
                                                                <button class="btn btn-label-secondary btn-prev" disabled>
                                                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                </button>
                                                                <button class="btn btn-primary btn-next">
                                                                    <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Personal Info -->
                                                    <div id="personal-info" class="content">
                                                        <div class="content-header mb-3">
                                                            <h6 class="mb-0">Personal Info</h6>
                                                            <small>Enter Your Personal Info.</small>
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="first-name">First Name</label>
                                                                <input type="text" id="first-name" class="form-control" placeholder="John" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="last-name">Last Name</label>
                                                                <input type="text" id="last-name" class="form-control" placeholder="Doe" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="country">Country</label>
                                                                <select class="select2" id="country">
                                                                    <option label=" "></option>
                                                                    <option>UK</option>
                                                                    <option>USA</option>
                                                                    <option>Spain</option>
                                                                    <option>France</option>
                                                                    <option>Italy</option>
                                                                    <option>Australia</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="language">Language</label>
                                                                <select class="selectpicker w-auto" id="language" data-style="btn-transparent" data-icon-base="bx" data-tick-icon="bx-check text-white" multiple>
                                                                    <option>English</option>
                                                                    <option>French</option>
                                                                    <option>Spanish</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 d-flex justify-content-between">
                                                                <button class="btn btn-primary btn-prev">
                                                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                </button>
                                                                <button class="btn btn-primary btn-next">
                                                                    <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                                                                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Social Links -->
                                                    <div id="social-links" class="content">
                                                        <div class="content-header mb-3">
                                                            <h6 class="mb-0">Social Links</h6>
                                                            <small>Enter Your Social Links.</small>
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="twitter">Twitter</label>
                                                                <input type="text" id="twitter" class="form-control" placeholder="https://twitter.com/abc" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="facebook">Facebook</label>
                                                                <input type="text" id="facebook" class="form-control" placeholder="https://facebook.com/abc" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="google">Google+</label>
                                                                <input type="text" id="google" class="form-control" placeholder="https://plus.google.com/abc" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="linkedin">LinkedIn</label>
                                                                <input type="text" id="linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
                                                            </div>
                                                            <div class="col-12 d-flex justify-content-between">
                                                                <button class="btn btn-primary btn-prev">
                                                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                </button>
                                                                <button class="btn btn-success btn-submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
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
                    <!-- End edit Modal -->



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

    <!-- <script>
        const wizardNumbered = document.querySelector(".wizard-numbered");

        if (typeof wizardNumbered !== undefined && wizardNumbered !== null) {
            const wizardNumberedBtnNextList = [].slice.call(wizardNumbered.querySelectorAll('.btn-next')),
                wizardNumberedBtnPrevList = [].slice.call(wizardNumbered.querySelectorAll('.btn-prev')),
                wizardNumberedBtnSubmit = wizardNumbered.querySelector('.btn-submit');

            const numberedStepper = new Stepper(wizardNumbered, {
                linear: false
            });
            if (wizardNumberedBtnNextList) {
                wizardNumberedBtnNextList.forEach(wizardNumberedBtnNext => {
                    wizardNumberedBtnNext.addEventListener('click', event => {
                        numberedStepper.next();
                    });
                });
            }
            if (wizardNumberedBtnPrevList) {
                wizardNumberedBtnPrevList.forEach(wizardNumberedBtnPrev => {
                    wizardNumberedBtnPrev.addEventListener('click', event => {
                        numberedStepper.previous();
                    });
                });
            }
            if (wizardNumberedBtnSubmit) {
                wizardNumberedBtnSubmit.addEventListener('click', event => {
                    alert('Submitted..!!');
                });
            }
        }
    </script> -->


</body>

</html>