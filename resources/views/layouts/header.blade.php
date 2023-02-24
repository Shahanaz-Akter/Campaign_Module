<!-- Header Section Start-->
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">

    <div class="container-fluid">

        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">


            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>

            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>


        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <a>
                <img src="{{asset('/assets/img/icons/brands/camp_image.jpg')}}" height="30" width="auto" alt="Not available">
                <img src="{{asset('/assets/img/icons/brands/campaigns.jpg')}}" height="30" width="auto" alt="Not available" style="margin-left: 15px;">
                <!-- <i class="fa-solid fa-circle-plus text-danger" style="height: 50;" onclick="search_with_multiple_optiontag()"></i> -->

                <!--/ Dropdown with icon -->
                <div class="d-none">
                    <div class="demo-inline-spacing">
                        <div class="btn-group">
                            <button type="button" class="mb-3 btn btn-icon rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-solid fa-circle-plus text-danger" style="height: 50;" onclick="search_with_multiple_optiontag()"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Dropdown with icon -->

                <!-- hidden arrow -->
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-solid fa-circle-plus text-danger" style="height: 50;" onclick="search_with_multiple_optiontag()"></i></button>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="{{url('/email_campaigns')}}">+ Email Campaigns</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/sms_campaigns')}}">+ SMS Campaigns</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/auto_responder')}}">+ Auto responder</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/mailing_list')}}">+ Mailing List</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/contact')}}">+ Contact</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/signup_form')}}">+ Signup form</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/sync')}}">+ Sync</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/campaign_template')}}">+ Campaign Template</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/signup_form')}}">+ Campaign Theme</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/user')}}">+ User</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/role')}}">+ Role</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/mark_a_date')}}">+ Mark a Date</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/social_media_post')}}">+ Social Media Post</a> </li>
                        <li> <a class="dropdown-item" href="{{url('/facebook_page_campaign')}}">+ Facebook Page Campaign</a> </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </div>

                <div>
                    <i data-bs-toggle="modal" data-bs-target="#search_filter" class="fa-solid fa-magnifying-glass me-4"></i>
                </div>

                <div class="row">
                    <div class="demo-vertical-spacing demo-only-element col-md-8">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <!-- <span class="input-group-text"></span> -->
                            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" />
                        </div>
                    </div>

                </div>

            </a>


            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->
                <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">

                        <div data-bs-toggle="modal" data-bs-target="#search">Feedback</div>
                    </a>

                </li>
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item me-2 me-xl-0">
                    <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                        <div>Upgrade</div>
                    </a>
                </li>
                <!--/ Style Switcher -->

                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <i class='bx bx-grid-alt bx-sm'></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0">
                        <div class="dropdown-menu-header border-bottom">
                            <div class="dropdown-header d-flex align-items-center py-3">
                                <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="dropdown-shortcuts-list scrollable-container">
                            <div class="row row-bordered overflow-visible g-0">
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="bx bx-calendar fs-4"></i>
                                    </span>
                                    <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                    <small class="text-muted mb-0">Appointments</small>
                                </div>
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="bx bx-food-menu fs-4"></i>
                                    </span>
                                    <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                    <small class="text-muted mb-0">Manage Accounts</small>
                                </div>
                            </div>


                        </div>
                    </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="bx bx-bell bx-sm"></i>
                        <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end py-0">
                        <li class="dropdown-menu-header border-bottom">
                            <div class="dropdown-header d-flex align-items-center py-3">
                                <h5 class="text-body mb-0 me-auto">Notification</h5>
                                <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                            </div>
                        </li>
                        <li class="dropdown-notifications-list scrollable-container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                            <p class="mb-0">Won the monthly best seller gold badge</p>
                                            <small class="text-muted">1h ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Charles Franklin</h6>
                                            <p class="mb-0">Accepted your connection</p>
                                            <small class="text-muted">12hr ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">New Message ✉️</h6>
                                            <p class="mb-0">You have new message from Natalie</p>
                                            <small class="text-muted">1h ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                                            <p class="mb-0">ACME Inc. made new order $1,154</p>
                                            <small class="text-muted">1 day ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="../../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Application has been approved 🚀 </h6>
                                            <p class="mb-0">Your ABC project application has been approved.</p>
                                            <small class="text-muted">2 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Monthly report is generated</h6>
                                            <p class="mb-0">July monthly financial report is generated </p>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="../../assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Send connection request</h6>
                                            <p class="mb-0">Peter sent you connection request</p>
                                            <small class="text-muted">4 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="../../assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">New message from Jane</h6>
                                            <p class="mb-0">Your have new message from Jane</p>
                                            <small class="text-muted">5 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">CPU is running high</h6>
                                            <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                                            <small class="text-muted">5 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-menu-footer border-top">
                            <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                                View all notifications
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block lh-1">John Doe</span>
                                        <small>Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-profile-user.html">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-billing.html">
                                <span class="d-flex align-items-center align-middle">
                                    <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                    <span class="flex-grow-1 align-middle">Billing</span>
                                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-help-center-landing.html">
                                <i class="bx bx-support me-2"></i>
                                <span class="align-middle">Help</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-faq.html">
                                <i class="bx bx-help-circle me-2"></i>
                                <span class="align-middle">FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-pricing.html">
                                <i class="bx bx-dollar me-2"></i>
                                <span class="align-middle">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>

        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler" href="javascript:void(0);">
                    <i class="bx bx-search-alt bx-sm" style="margin-top: 25px;"></i>
                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                </a>
            </div>
        </div>
        <!-- /Search -->

        <!-- Search Small Screens -->
        <div class="navbar-search-wrapper search-input-wrapper  d-none">
            <input type="text" class="form-control search-input container-fluid border-0" placeholder="Search..." aria-label="Search...">
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
        </div>


    </div>
</nav>

<!-- Add input group Modal start -->
<div class="modal fade" id="search_filter" tabindex="-1" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <h5 class="title text-danger"></h5>


                <div class="d-flex mb-5">
                    <div class="data_search fw-bold" onclick="data_search()">Data Search</div>
                    <div class="action_search ms-5 fw-bold" onclick="action_search()">Action Search</div>
                </div>


                <div class="row">
                    <div class="demo-vertical-spacing demo-only-element col-md-8 mb-5" id="data_search">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31">

                                <div class="btn-group">
                                    <label class="dropdown-toggle" style="font-size: 20px;" data-bs-toggle="dropdown" aria-expanded="false">All</label>

                                    <ul class="dropdown-menu" style="height: 200px; overflow:scroll; width: 400px; margin-left:-50px;">
                                        <input type="checkbox" class="">
                                        <label for="">Select All</label> <br>

                                        <input type="checkbox" class="">
                                        <label for="">Email Campaigns</label><br>


                                        <input type="checkbox" class="">
                                        <label for="">Social Campaigns</label><br>


                                        <input type="checkbox" class="">
                                        <label for="">Contacts</label><br>


                                        <input type="checkbox" class="">
                                        <label for="">Mailling List</label><br>


                                        <input type="checkbox" class="">
                                        <label for="">Auto responders</label><br>

                                        <input type="checkbox" class="">
                                        <label for="">Workflows</label><br>

                                        <input type="checkbox" class="">
                                        <label for="">Library</label><br>


                                        <input type="checkbox" class="">
                                        <label for="">SMS Campaigns</label><br>

                                    </ul>
                                </div>
                            </span>
                            <span class="input-group-text"></span>
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon-search31" />
                        </div>
                    </div>


                    <div class="demo-vertical-spacing demo-only-element col-md-8 mb-5 d-none" id="action_search">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <span class="input-group-text"></span>
                            <input type="text" class="form-control" placeholder="Search What Do You Want?" aria-label="Search..." aria-describedby="basic-addon-search31" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Add input group Modal end -->




<!-- Add Feedback Modal start -->
<div class="modal fade" id="search" tabindex="-1" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <h5 class="title text-primary mb-3">Feedback</h5>

                <form action="{{url('/input_group')}}" method="post">
                    @csrf

                    <div class="row g-3" onsubmit="return false">

                        <div class="col-md-8 mb-2 mt-3">
                            <label class="" for=""><b>Subject</b> </label>
                            <div class="">
                                <input type="text" class="form-control" id="basic-default-company" placeholder="Subject" name="subject" />
                            </div>
                        </div>

                        <div class="col-md-8 mb-2 mt-3">
                            <label class="" for=""><b>Category</b> </label>
                            <div class="">
                                <select class="select2 form-select" name="category[]">
                                    <option value="">-----Select-----</option>
                                    <option value="WV">Suggestion</option>
                                    <option value="WV">Report a bag </option>
                                    <option value="WV">Help </option>
                                    <option value="WV">Compliments </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-8 mb-2 mt-3">
                            <label class="" for="basic-default-email"><b>Description</b> </label>
                            <textarea id="basic-default-message" class="form-control" placeholder="Enter Description" name="description"></textarea>
                        </div>

                        <div class="col-12 d-flex justify-content-between mt-3">

                            <div class="dropzone needsclick" id="dropzone-basic" style="width: 200px; height: 100px; padding: 2px !important;">
                                <div class="dz-message needsclick" style="font-size: 20px !important; margin:0px !important;">

                                </div>
                                <div class="fallback">
                                    <!-- <i class="fa-sharp fa-solid fa-paperclip"></i> -->
                                    <input name="image" type="file" />
                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Send Feedback</button>
                                <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add Feedback Modal end -->

<script>
    const action_search = () => {
        let action_search = document.querySelector('#action_search');
        let data_search = document.querySelector('#data_search ');

        let contain = action_search.classList.contains('d-none');

        if (contain) {
            action_search.classList.remove('d-none');
            data_search.classList.add('d-none');


        } else {
            action_search.classList.add('d-none');
            data_search.classList.remove('d-none');
        }

    }
</script>
<script>
    const data_search = () => {
        let data_search = document.querySelector('#data_search ');
        let action_search = document.querySelector('#action_search');


        let contain = data_search.classList.contains('d-none');

        if (contain) {
            data_search.classList.remove('d-none');
            action_search.classList.add('d-none');


        } else {
            data_search.classList.add('d-none');
            action_search.classList.remove('d-none');
        }

    }
</script>

<!-- Add New Credit Card Modal end-->
<!-- Header Section End-->