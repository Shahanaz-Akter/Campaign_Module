<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Manage Contacts</title>
    
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

                            <table id="example" class="display nowrap" style="width:100%;">
                                <thead>
                                    <!-- <span class="">10 Contacts are Selected</span> -->

                                    <tr class="mb-5">
                                        <th><input type="checkbox" class="form-check-input dlt_all"></th>
                                        <th class="pb-3">Contact Email</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="mb-5" onmouseover="Mouse_over()" onmouseout="Mouse_out()">
                                        <div>
                                            <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                            <td class="pb-3">My Sample List(4) <br>
                                                <small>Created on - Mar 25, 2023 12:00 PM</small>
                                            </td>
                                            <td class="pb-3">
                                                <span class="icon_3 invisible"><i class="fa-solid fa-user-plus text-primary ms-5" style="font-size: 18px!important;"></i></span>
                                                <span class="icon_1 invisible"><i class="fa-regular fa-envelope-open text-primary ms-5" style="font-size: 20px!important;"></i></span>

                                                <span class="icon_2 invisible">
                                                    <!-- Icon Dropdown -->
                                                    <div class="btn-group ms-5">
                                                        <button type="button" class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 16px!important;"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="">Action</a></li>
                                                            <li><a class="dropdown-item" href="">Another action</a></li>
                                                            <li><a class="dropdown-item" href="">Something else here</a></li>
                                                            <!-- <li>
                                                                <hr class="dropdown-divider">
                                                            </li> -->
                                                            <li><a class="dropdown-item" href="">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--/ Icon Dropdown -->
                                                </span>
                                            </td>
                                    </tr>

                                    <tr class="mb-5">
                                        <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                                        <td class="pb-3">My Sample List(4) <br>
                                            <small>Created on - Mar 25, 2023 12:00 PM</small>
                                        </td>
                                        <td class="pb-3" onmouseover="Mouse_over()" onmouseout="Mouse_out()">
                                            <span class="icon_3 invisible"><i class="fa-solid fa-user-plus text-primary ms-5" style="font-size: 18px!important;"></i></span>
                                            <span class="icon_1 invisible"><i class="fa-regular fa-envelope-open text-primary ms-5" style="font-size: 20px!important;"></i></span>

                                            <span class="icon_2 invisible">
                                                <i class="fa-solid fa-pen text-black text-primary ms-5" style="font-size: 18px!important;"></i>
                                            </span>
                                        </td>
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
                </div>
                <!-- Content wrap1er -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- Layout wrap1er end -->

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


        const Mouse_over = () => {

            let icon_1 = document.querySelector('.icon_1');
            console.log(icon_1);
            let icon_2 = document.querySelector('.icon_2');
            console.log(icon_2);
            let icon_3 = document.querySelector('.icon_3');
            console.log(icon_3);

            if (icon_1.classList.contains('invisible')) {
                icon_1.classList.remove('invisible');
            }
            if (icon_2.classList.contains('invisible')) {
                icon_2.classList.remove('invisible');
            }
            if (icon_3.classList.contains('invisible')) {
                icon_3.classList.remove('invisible');
            }
        }


        const Mouse_out = () => {

            let icon_1 = document.querySelector('.icon_1');
            let icon_2 = document.querySelector('.icon_2');
            let icon_3 = document.querySelector('.icon_3');

            if (!(icon_1.classList.contains('invisible'))) {
                icon_1.classList.add('invisible');
            }
            if (!(icon_2.classList.contains('invisible'))) {
                icon_2.classList.add('invisible');
            }
            if (!(icon_3.classList.contains('invisible'))) {
                icon_3.classList.add('invisible');
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
                    // 'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</body>

</html>