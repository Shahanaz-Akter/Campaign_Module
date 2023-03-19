@extends('layouts.master')
@section('title')
<title>SMS Campaigns</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-sm container-md container-lg container-xxl">

        <div class="d-flex justify-content-between mb-3 mt-5">
            <div class="dropdown">
                <div class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    All Campaigns
                </div>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item active" href="">Sent Message List</a></li>
                    <li><a class="dropdown-item" href="">Deleted Message List</a></li>
                </ul>
            </div>
            <div>
                <a href="{{url('/create_sms_campaigns')}}">
                    <div class="btn btn-warning">Create Campaign</div>
                </a>
            </div>
        </div>

        <div class="color_org text-black fs-4 text-center" style="font-size: 25px;">Sent Message List</div>

        <!-- code start -->

        <div class="d-flex justify-content-center align-items-center mt-3 gap-3 mb-2">
            <div class="me-5">
                <input type="text" class="form-control" placeholder="Search">
            </div>

            <div class="me-5">
                <!-- <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#filter-modal">Filter</button> -->
                <input type="checkbox" class="me-2" id="dlt_all">Delete All
            </div>
        </div>


        <div class="d-flex justify-content-center align-items-center mt-3 mb-3 bg-white">

            <table class="mt-5 mb-5">
                <thead>
                    <tr class="mb-2">
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>


                <tbody class="">
                    <div class="mb-3">
                        <tr class="color_org">

                            <td class="pe-4"><input type="checkbox" class="dlt_single_message"></td>
                            <td class="text-black color_org" style="font-size: 25px;">Subject: Meeting at 5pm <br>
                                Date: Mar 12, 2022 15:00</td>
                            <td class="" style="font-size: 25px;">
                                <a href="{{url('/view_sms_campaigns')}}"><i class="fa-solid fa-eye-slash ms-4 text-danger"></i></a>
                                <a href="{{url('/edit_sms_campaigns')}}"><i class="fa-solid fa-pen-to-square ms-4  text-info"></i></a>
                                <a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can ms-4 text-danger"></i></a>
                            </td>
                        </tr>
                    </div>

                    <tr class="color_org">
                        <td class="pe-4"><input type="checkbox" class="dlt_single_message"></td>
                        <td class="text-black color_org" style="font-size: 25px;">Subject: Meeting at 5pm <br>
                            Date: Mar 12, 2022 15:00</td>
                        <td class="" style="font-size: 25px;">
                            <a href="{{url('/view_sms_campaigns')}}"><i class="fa-solid fa-eye-slash ms-4 text-danger"></i></a>
                            <a href="{{url('/edit_sms_campaigns')}}"><i class="fa-solid fa-pen-to-square ms-4  text-info"></i></a>
                            <a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can ms-4 text-danger"></i></a>
                        </td>
                    </tr>


                    <tr class="color_org">
                        <td class="pe-4"><input type="checkbox" class="dlt_single_message"></td>
                        <td class="text-black color_org" style="font-size: 25px;">Subject: Meeting at 5pm <br>
                            Date: Mar 12, 2022 15:00</td>
                        <td class="" style="font-size: 25px;">
                            <a href="{{url('/view_sms_campaigns')}}"><i class="fa-solid fa-eye-slash ms-4 text-danger"></i></a>
                            <a href="{{url('/edit_sms_campaigns')}}"><i class="fa-solid fa-pen-to-square ms-4  text-info"></i></a>
                            <a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can ms-4 text-danger"></i></a>
                        </td>
                    </tr>

                    <tr class="color_org">
                        <td class="pe-4"><input type="checkbox" class="dlt_single_message"></td>
                        <td class="text-black color_org" style="font-size: 25px;">Subject: Meeting at 5pm <br>
                            Date: Mar 12, 2022 15:00</td>
                        <td class="" style="font-size: 25px;">
                            <a href="{{url('/view_sms_campaigns')}}"><i class="fa-solid fa-eye-slash ms-4 text-danger"></i></a>
                            <a href="{{url('/edit_sms_campaigns')}}"><i class="fa-solid fa-pen-to-square ms-4  text-info"></i></a>
                            <a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can ms-4 text-danger"></i></a>
                        </td>
                    </tr>

                    <tr class="color_org">
                        <td class="pe-4"><input type="checkbox" class="dlt_single_message"></td>
                        <td class="text-black color_org" style="font-size: 25px;">Subject: Meeting at 3pm <br>
                            Date: Mar 14, 2023 14:00</td>
                        <td class="" style="font-size: 25px;">
                            <a href="{{url('/view_sms_campaigns')}}"><i class="fa-solid fa-eye-slash ms-4 text-danger"></i></a>
                            <a href="{{url('/edit_sms_campaigns')}}"><i class="fa-solid fa-pen-to-square ms-4  text-info"></i></a>
                            <a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can ms-4 text-danger"></i></a>
                            <!-- <button class="btn btn-secondary  ms-5" data-bs-toggle="modal" data-bs-target="#edit-modal">View</button>
                            <button class="btn btn-info ms-3" data-bs-toggle="modal" data-bs-target="#edit-modal">Edit</button>
                            <button class="btn btn-danger delete-btn ms-3">Delete</button> -->
                        </td>
                    </tr>

                    <tr class="color_org">
                        <td class="pe-4"><input type="checkbox" class="dlt_single_message"></td>
                        <td class="text-black color_org" style="font-size: 25px;">Subject: Meeting at 5pm <br>
                            Date: Mar 12, 2022 15:00</td>
                        <td class="" style="font-size: 25px;">
                            <a href="{{url('/view_sms_campaigns')}}"><i class="fa-solid fa-eye-slash ms-4 text-danger"></i></a>
                            <a href="{{url('/edit_sms_campaigns')}}"><i class="fa-solid fa-pen-to-square ms-4  text-info"></i></a>
                            <a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can ms-4 text-danger"></i></a>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>

        <div class="d-flex justify-content-center gap-3">
            <!-- flex child-1 -->
            <div>
                <a href="{{url('/')}}">
                    <div class="btn btn-outline-warning  mt-5">
                        Previous
                    </div>
                </a>
            </div>

            <!-- flex child-2 -->
            <div class="mt-5">
                <button type="submit" class="btn btn-warning">Save</button>
            </div>
        </div>

        <!-- code end -->

    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>
    let delete_all = document.querySelector('#dlt_all');
    console.log(delete_all);

    let dlt_single_message = document.querySelectorAll('.dlt_single_message');
    console.log(dlt_single_message);

    delete_all.addEventListener('change', function() {
        dlt_single_message.forEach(function(val) {
            val.checked = delete_all.checked;
        });
    });
</script>

@endsection