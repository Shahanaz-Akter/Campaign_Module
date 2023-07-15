<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    @yield('title')
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">


    <!-- mula -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


     <!-- asset1 css and js -->

     <!-- tosat animation -->
     <link rel="stylesheet" href="{{asset('/assets/vendor/libs/animate-css/animate.css')}}" />

     <!-- Toast css link -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/toastr/toastr.css')}}" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/favicon.ico')}}" />

    <!-- slider css link -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/nouislider/nouislider.css')}}" />

    <!-- Modal Examples CSS Link-->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/animate-css/animate.css')}}"> 



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/flag-icons.css')}}" />
    <!-- date Picker -->
   
    <!-- Code editor css link -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/quill/typography.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/quill/katex.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/quill/editor.css')}}"/>

    <!-- Time Picker -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/flatpickr/flatpickr.css')}}"/>

    <!-- Core CSS -->scrollbar
    <link rel="stylesheet" href="{{asset('/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{asset('/assets/vendor/css/rtl/theme-semi-dark.css')}}" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/typeahead-js/typeahead.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/apex-charts/apex-charts.css')}}"/>
  
    <!-- Select2 class link -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/select2/select2.css')}} " />  
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/dropzone/dropzone.css')}}"/>

    <!-- Page CSS -->
    <!-- Tagigy css -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/tagify/tagify.css')}}" />

    <!-- Data tables1 CSS start-->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"/> -->

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.dataTables.min.css"/> -->

    <!-- Data tables1 css -->
    <!-- <link rel="stylesheet" href="{{asset('/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/nouislider/nouislider.css')}}" /> -->





    <!-- date range picker -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/flatpickr/flatpickr.css')}}" />
    <!-- Data table CSS end-->

    <!-- export button -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css"/>   -->

    <!-- Helpers -->
    <script src="{{asset('/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!-- Setting Icon -->
    <!-- <script src="{{asset('/assets/vendor/js/template-customizer.js')}}"></script> -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('/assets/js/config.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>

    <!-- multi select -->
    <link rel="stylesheet" href="multiselect/jquery.multiselect.css">

    <!-- multi file-upload select -->
    <script>
    const dropzoneMulti = new Dropzone('#dropzone-multi', {
    previewTemplate: previewTemplate,
    parallelUploads: 1,
    maxFilesize: 5,
    addRemoveLinks: true
    });
    </script>

    <script>
     const myDropzone = new Dropzone('#dropzone-basic', {
    previewTemplate: previewTemplate,
    parallelUploads: 1,
    maxFilesize: 5,
    addRemoveLinks: true,
    maxFiles: 1
    });
    </script>
 
    <!-- jquery -->
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

<style>
    *,
    ::after,
    ::before {
        margin: 0;
        padding: 0;
    }

    .compact::after {
        content: '';
        background: blue;
        display: inline-block;
        width: 100%;
        height: 4px;
    }

    .color_org:hover {
        color: #ff7e00 !important;

    }

    .text_colr:hover {
        color: green !important;
        font-weight: bold;

    }

    .h_effect:hover {
        /* background: linear-gradient(transparent 100%, #c6d8e6 50%, #c6d8e6 56%, #c6d8e6 80%); */
        background: lightcyan;
        color: black !important;
        font-weight: bold !important;
        border: 2px dashed black;
    }


    #learn_more:hover {
        color: orangered;
    }

    .week {
        color: black;
        font-weight: light;
        font-size: 20px;
    }

    .hover:hover {
        color: red;
        font-weight: bold;
    }

    .data_search:hover::after {
        content: "";
        height: 2px;
        width: 100%;
        background-color: blue;
        display: block;
        cursor: pointer;
        transition: all .6ms;
    }

    .action_search:hover::after {
        content: "";
        height: 2px;
        width: 100%;
        background-color: blue;
        display: block;
        cursor: pointer;
        transition: all .6ms;
    }

    .camp:hover {
        color: #ef7615;
    }

    .all_campaign:hover {
        cursor: pointer;
        z-index: 5;
        transition: transform 1s;
        transform: scale(1.1);

    }

    .icon_card:hover {
        cursor: pointer;
        z-index: 5;

        transition: transform 1s;
        transform: scale(1.1);

    }

    .over:hover {
        visibility: visible;
        transform: 1s;
        transform: translateY(-0.5rem);

    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }




    .bg-light {
        background-color: #f8f9fa;
    }
</style>

</head>

<body>
    <!-- Layout wrap1er -->
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
                <!-- Content wrap1er -->
                <div class="content-wrap1er">
                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->
                    <!-- / footer -->
                    <!-- There will be placed footer tag -->
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrap1er -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrap1er -->


    <!-- multi select jquery link -->



    <!-- buy now content with link -->
    <!--<div class="buy-now">
    <a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div> -->
    <!-- Core JS -->

    <!-- Tosat js link -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/toastr/toastr.js')}}" />

    <!-- multiple selection js link -->
    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>

    <!-- Slider js -->
    <script src="{{asset('/assets/vendor/libs/nouislider/nouislider.js')}}"></script>

    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/pop1er/pop1er.js')}}"></script>
    <script src="{{asset('/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
    <script src="{{asset('/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="{{asset('/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Time Picker Js -->
    <script src="{{asset('/assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('/assets/js/main.js')}}"></script>
    <!-- Page JS -->
    <script src="{{asset('/assets/js/form-layouts.js')}}"></script>
    <script src="{{asset('/assets/js/dashboards-analytics.js')}}"></script>
    <!-- Vendors JS -->
    <script src="{{asset('/assets/vendor/libs/cleavejs/cleave.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/moment/moment.js')}}"></script>
    <!-- Dropzone js -->
    <script src="{{asset('/assets/vendor/libs/dropzone/dropzone.js')}}"></script>
    <!-- Page JS -->
    <script src="{{asset('/assets/js/forms-file-upload.js')}}"></script>


    <!-- for data tables -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->

    <!-- <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script> -->
    <!-- for data tables end -->

    <!-- Form Repeater start-->
    <script src="{{asset('/assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
    <!-- Form Repeater end-->
    <script>
        var formRepeater = $(".form-repeater");

        var row = 2;
        var col = 1;
        formRepeater.on('submit', function(e) {
            e.preventDefault();
        });
        formRepeater.repeater({
            show: function() {
                var fromControl = $(this).find('.form-control, .form-select');
                var formLabel = $(this).find('.form-label');

                fromControl.each(function(i) {
                    var id = 'form-repeater-' + row + '-' + col;
                    $(fromControl[i]).attr('id', id);
                    $(formLabel[i]).attr('for', id);
                    col++;
                });

                row++;

                $(this).slideDown();
            },
            hide: function(e) {
                confirm('Are you sure you want to delete this element?') && $(this).slideUp(e);
            },

        });
    </script>


    <!-- extra part er JS -->
    <script src="{{asset('/assets/js/forms-extras.js')}}"></script>
    <!-- Tagify -->
    <script src="{{asset('/assets/vendor/libs/tagify/tagify.js')}}"></script>
    <!-- <script src="{{asset('/assets/js/forms-tagify.js')}}"></script> -->
    <!-- Vendors JS -->
    <script src="{{asset('/assets/vendor/js/dropdown-hover.js')}}"></script>

    <!-- tIME PICKER JQUERY -->
    <SCRIPT>
        var flatpickrTime1 = document.querySelector("#flatpickr-time1");

        flatpickrTime1.flatpickr({
            enableTime: true,
            noCalendar: true
        });

        var flatpickrTime2 = document.querySelector("#flatpickr-time2");

        flatpickrTime2.flatpickr({
            enableTime: true,
            noCalendar: true
        });
    </SCRIPT>

    <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
    <script>
        $(".select2").select2();
        $(document).ready(function() {
            $('#example').DataTable({
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }],
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },
                order: [
                    [1, 'asc']
                ]
            });
        });
    </script>

    <script src="{{asset('/assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
    <script>
        var flatpickrDate1 = document.querySelector("#flatpickr-date1");
        flatpickrDate1.flatpickr({
            monthSelectorType: "static"
        });

        var flatpickrDate2 = document.querySelector("#flatpickr-date2");
        flatpickrDate2.flatpickr({
            monthSelectorType: "static"
        });

        var flatpickrRange = document.querySelector("#flatpickr-range");
        flatpickrRange.flatpickr({
            mode: "range"
        });
    </script>


    <!-- <script src="{{asset('../../assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
    <script src="{{asset('../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
    <script src="{{asset('../../assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js')}}"></script>

    <script src="{{asset('../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>


    <script src="{{asset('../../assets/vendor/libs/datatables-buttons/buttons.html5.js')}}"></script>
    <script src="{{asset('../../assets/vendor/libs/datatables-buttons/buttons.print.js')}}"></script> -->

    <!-- Main JS -->
    <script src="{{asset('../../assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <!-- <script src="{{asset('../../assets/js/tables-datatables-basic.js')}}"></script> -->
    <!-- multi Select -->
    <script>
        const mySelect = new mdb.Select(document.getElementById('mySelect'), options)
    </script>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- js slider -->
    <script>
        noUiSlider.create(document.getElementById("slider-pips"), {
            start: [10],
            behaviour: "tap-drag",
            step: 10,
            tooltips: true,
            range: {
                min: 0,
                max: 60
            },
            pips: {
                mode: "steps",
                stepped: true,
                density: 5
            }
        });
    </script>



    <!--Human date picker js -->
    <script>
        var flatpickrFriendly = document.querySelector("#flatpickr-human-friendly");

        flatpickrFriendly.flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d"
        });
    </script>

    <!--Time picker js -->
    <script>
        var flatpickrTime = document.querySelector("#flatpickr-time");

        flatpickrTime.flatpickr({
            enableTime: true,
            noCalendar: true
        });
    </script>

    <!-- Code editor js link -->
    <script src="{{asset('/assets/vendor/libs/quill/katex.js')}}"></script>
    <script src="{{asset('/assets/vendor/libs/quill/quill.js')}}"></script>

    <!-- js code -->
    <script>
        const fullToolbar = [
            [{
                    font: []
                },
                {
                    size: []
                }
            ],
            ['bold', 'italic', 'underline', 'strike'],
            [{
                    color: []
                },
                {
                    background: []
                }
            ],
            [{
                    script: 'super'
                },
                {
                    script: 'sub'
                }
            ],
            [{
                    header: '1'
                },
                {
                    header: '2'
                },
                'blockquote',
                'code-block'
            ],
            [{
                    list: 'ordered'
                },
                {
                    list: 'bullet'
                },
                {
                    indent: '-1'
                },
                {
                    indent: '+1'
                }
            ],
            [
                'direction',
                {
                    align: []
                }
            ],
            ['link', 'image', 'video', 'formula'],
            ['clean']
        ];

        const fullEditor = new Quill('#full-editor', {
            bounds: '#full-editor',
            placeholder: 'Type Something...',
            modules: {
                formula: true,
                toolbar: fullToolbar
            },
            theme: 'snow'
        });
    </script>

    <!-- Adding class active open with all sidebar parent and child -->
    <script>
        let url = window.location.href;
        let p1 = document.querySelector('#p1');
        let p2 = document.querySelector('#p2');
        let p3 = document.querySelector('#p3');

        // Items Parent
        if (url.includes('/show_items')) {
            let item = document.querySelector('#item');
            p1.classList.add('active');
            p1.classList.add('open');
            item.classList.add('active');

        } else if (url.includes('/show_composite_items')) {
            let composite = document.querySelector('#composite');
            p1.classList.add('active');
            p1.classList.add('open');
            composite.classList.add('active');

        } else if (url.includes('/item_groups')) {
            let group = document.querySelector('#group');
            console.log(group);
            p1.classList.add('active');
            p1.classList.add('open');
            group.classList.add('active');

        } else if (url.includes('/price_lists')) {
            let price = document.querySelector('#price');
            p1.classList.add('active');
            p1.classList.add('open');
            price.classList.add('active');

        } else if (url.includes('/show_inventory_adjustments')) {
            let inventory_adjustment = document.querySelector('#adjust');
            p1.classList.add('active');
            p1.classList.add('open');
            inventory_adjustment.classList.add('active');

        }
        // Sales Parent
        else if (url.includes('/customers')) {
            let customer = document.querySelector('#customer');
            p2.classList.add('active');
            p2.classList.add('open');
            customer.classList.add('active');
        } else if (url.includes('/sales_order')) {
            let sales_order = document.querySelector('#sales_order');
            p2.classList.add('active');
            p2.classList.add('open');
            sales_order.classList.add('active');
        } else if (url.includes('/sales_order')) {
            let sales_order = document.querySelector('#sales_order');
            p2.classList.add('active');
            p2.classList.add('open');
            sales_order.classList.add('active');
        } else if (url.includes('/packages')) {
            let package = document.querySelector('#package');
            p2.classList.add('active');
            p2.classList.add('open');
            package.classList.add('active');
        } else if (url.includes('/shipments')) {
            let shipment = document.querySelector('#shipment');
            p2.classList.add('active');
            p2.classList.add('open');
            shipment.classList.add('active');
        } else if (url.includes('/invoices')) {
            let invoice = document.querySelector('#invoice');
            p2.classList.add('active');
            p2.classList.add('open');
            invoice.classList.add('active');
        } else if (url.includes('/sales_receipts')) {
            let sales_receipt = document.querySelector('#sales_receipt');
            p2.classList.add('active');
            p2.classList.add('open');
            sales_receipt.classList.add('active');
        } else if (url.includes('/sales_receipts')) {
            let sales_receipt = document.querySelector('#sales_receipt');
            p2.classList.add('active');
            p2.classList.add('open');
            sales_receipt.classList.add('active');
        } else if (url.includes('/payments_received')) {
            let payment_received = document.querySelector('#payment_received');
            p2.classList.add('active');
            p2.classList.add('open');
            payment_received.classList.add('active');
        } else if (url.includes('/sales_returns')) {
            let sales_return = document.querySelector('#sales_return');
            p2.classList.add('active');
            p2.classList.add('open');
            sales_return.classList.add('active');
        } else if (url.includes('/credit_notes')) {
            let credit_note = document.querySelector('#credit_note');
            p2.classList.add('active');
            p2.classList.add('open');
            credit_note.classList.add('active');
        }


        // Purchases Parent
        else if (url.includes('/vendors')) {
            let vendor = document.querySelector('#vendor');
            p3.classList.add('active');
            p3.classList.add('open');
            vendor.classList.add('active');
        } else if (url.includes('/expenses')) {
            let expense = document.querySelector('#expense');
            p3.classList.add('active');
            p3.classList.add('open');
            expense.classList.add('active');
        } else if (url.includes('/purchase_orders')) {
            let expense = document.querySelector('#purchase_order');
            p3.classList.add('active');
            p3.classList.add('open');
            purchase_order.classList.add('active');
        } else if (url.includes('/purchase_receives')) {
            let expense = document.querySelector('#purchase_receive');
            p3.classList.add('active');
            p3.classList.add('open');
            purchase_receive.classList.add('active');
        } else if (url.includes('/bills')) {
            let bill = document.querySelector('#bill');
            p3.classList.add('active');
            p3.classList.add('open');
            bill.classList.add('active');
        } else if (url.includes('/payments_made')) {
            let payments_made = document.querySelector('#payment_made');
            p3.classList.add('active');
            p3.classList.add('open');
            payments_made.classList.add('active');
        } else if (url.includes('/vendor_credits')) {
            let payments_made = document.querySelector('#vendor_credit');
            p3.classList.add('active');
            p3.classList.add('open');
            vendor_credit.classList.add('active');
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



    <!-- 
    <script>
        $(".select2").select2();
    </script> -->








</body>

</html>