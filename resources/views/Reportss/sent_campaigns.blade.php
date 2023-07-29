@extends('layouts.master')
@section('title')
<title>Sent campaigns</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between" style="font-size: 25px;">
            <div class="title mb-2">Sent campaigns</div>
            <div></div>
        </div>

        <div class="mt-3 mb-3">
            <div class="p-5 mb-2">
                <div></div>
                <div class="text-center mb-5" style="font-size: 25px;">
                    <span class="mb-2">
                    <i class="fa fa-folder text-warning" style="font-size: 100px;"></i>
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div class="fs-4 mb-2">No campaigns are available in this view.</div>
                </div>

                <div class="d-flex justify-content-center gap-4 mb-5">
                    <div class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#create_campaings">Create campaign</div>
                </div>
            </div>
        </div>



        <div class="d-flex justify-content-between gap-4 mb-5">

            <div class="col-12 col-md-3 colo-lg-3 col-xl-3 p-3 text-center border ">
                <div class="mb-2"><i class="fas fa-money-bill text-primary" style="font-size: 30px;"></i>
                </div>
                <div class="mb-2"> Total SMS Sent</div>
                <div class="mb-2">11.560</div>


            </div>

            <div class="col-12 col-md-3 colo-lg-3 col-xl-3 p-3 text-center border ">
                <div class="mb-2"><i class="fas fa-money-bill text-primary" style="font-size: 30px;"></i>
                </div>
                <div class="mb-2"> Total SMS Received</div>
                <div class="mb-2">11.560</div>


            </div>

            <div class="col-12 col-md-3 colo-lg-3 col-xl-3 p-3 text-center border ">
                <div class="mb-2"><i class="fas fa-money-bill text-primary" style="font-size: 30px;"></i>
                </div>
                <div class="mb-2"> Proper Paper clicked (PPC)</div>
                <div class="mb-2">11.560</div>


            </div>

            <div class="col-12 col-md-3 colo-lg-3 col-xl-3 p-3 text-center border ">
                <div class="mb-2"><i class="fas fa-money-bill text-primary" style="font-size: 30px;"></i>
                </div>
                <div class="mb-2"> On Board</div>
                <div class="mb-2">11.560</div>

            </div>

        </div>

        <div class="btn p-2">
            <div class="btn p-2">
                <input type="checkbox" class="form-check-input dlt_all" style="margin-left: -18px;">
                <label for="dlt_all" class="" style="margin-left: 40px;">Delete All</label>
                <a href="{{url('/delete_all_sms_campaigns')}}">
                    <i class="d_sn fa-solid fa-trash-can text-danger d-none ms-3" style="font-size:17px!important;"></i>
                </a>
            </div>
        </div>

        <table id="example1" class="display nowrap" style="width:100%;">
            <thead>
                <!-- <span class="">10 Contacts are Selected</span> -->

                <tr class="mb-5">
                    <th><input type="checkbox" class="form-check-input dlt_single_message"></th>
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

        <!-- create_campaings modal start -->

        <div class="modal fade" id="create_campaings" tabindex="-1" aria-hidden="true">
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

                                <div class="row col-12 col-md-11 col-lg-11 col-xl-11 mb-5">
                                    <label for="campaign_name" class="row col-12 col-md-2 col-lg-2 col-xl-2">Campaign Name</label>

                                    <div class="row col-12 col-md-9 col-lg-9 col-xl-9">
                                        <input type="text" class="ms-2 form-control" id="campaign_name" name="campaign_name" value="" />
                                    </div>
                                </div>


                                <div class="row col-12 col-md-11 col-lg-11 col-xl-11 mb-5">

                                    <label for="campaign_name" class="row col-12 col-md-2 col-lg-2 col-xl-2">Assign Topics</label>

                                    <div class="row col-12 col-md-9 col-lg-9 col-xl-9">
                                        <select id="" class="form-select form-control">

                                            <option value="">Select a topic</option>
                                            <option value="Australia">Brand topic</option>
                                            <option value="United Arab Emirates">Marketing</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row col-12 col-md-11 col-lg-11 col-xl-11 mb-5">

                                    <label for="campaign_name" class="row col-12 col-md-2 col-lg-2 col-xl-2"></label>

                                    <div class="row col-12 col-md-9 col-lg-9 col-xl-9">
                                        Topic lets you group your contacts based on their interests. By choosing a Topic Name, this campaign will be sent only to those contacts who have chosen the specific topic. Learn More
                                    </div>
                                </div>


                                <div class="row col-12 col-md-9 col-lg-9 col-xl-9 mb-5">

                                </div>

                                <div class="row col-12 col-md-2 col-lg-2 col-xl-2 mb-5">
                                    <div class="btn btn-outline-warning">Save and Proceed</div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--create_campaings modal end -->



        <!-- filtering3 Modal start -->
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
        <!-- filtering3 Modal  end-->


    </div>
</div>


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