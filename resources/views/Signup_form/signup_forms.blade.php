@extends('layouts.master')
@section('title')
<title> Signup Forms</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-sm container-md container-lg container-xxl">

        <div class="d-flex justify-content-between mb-3 mt-5">
            <div>
                Signup Forms
            </div>
            <div>
                <a href="{{url('/create_signup_forms')}}">
                    <div class="btn btn-warning">Create Form</div>
                </a>
            </div>
        </div>


        <!-- <div class="color_org text-black fs-4 text-center" style="font-size: 20px;">Sent Message List</div> -->
        <!-- code start -->
        <div class="d-flex justify-content-center align-items-center mt-3 gap-3 mb-2">
            <div class="me-5">
                <input type="text" class="form-control" placeholder="Search">
            </div>

            <div class="form-check me-5" style="font-size: 17px">
                <!-- <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#filter-modal">Filter</button> -->
                <input type="checkbox" class="form-check-input me-2" id="dlt_all">
                <label for="dlt_all" class="form-check-label">Delete All</label>
                <a href="{{url('/delete_all_sms_campaigns')}}" class="d-none" id="delete_button"><i class="fa-solid fa-trash-can ms-4 text-danger" style="font-size: 22
                px!important;"></i></a>
            </div>
        </div>


        <div class="d-flex justify-content-center align-items-center mb-3 ">

            <table class="mt-2 mb-5">
                <thead>
                    <tr class="mb-2">
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>


                <tbody class="">
                    <div class="mb-3">
                        <tr class="color_org form-check mb-3">
                            <td class="pe-4"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                            <td class="text-black color_org" style="font-size: 20px;">Untitled Signup Form <br>
                                Created on Jul 13, 2023 02:14 PM </td>
                            <td class="" style="font-size: 22px;">
                                <a href="{{url('/edit_signup_form')}}"><i class="fa-solid fa-pen-to-square ms-4  text-info"></i></a>
                                <a href="{{url('/delete_signup_form')}}"><i class="fa-solid fa-trash-can ms-4 text-danger"></i></a>
                            </td>
                        </tr>
                    </div>
                    <hr>

                    <tr class="color_org form-check mb-3">
                        <td class="pe-4"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="text-black color_org" style="font-size: 20px;">Untitled Signup Form <br>
                            Created on Jul 13, 2023 02:14 PM </td>
                        <td class="" style="font-size: 22px;">
                            <a href="{{url('/edit_signup_form')}}"><i class="fa-solid fa-pen-to-square ms-4  text-info"></i></a>
                            <a href="{{url('/delete_signup_form')}}"><i class="fa-solid fa-trash-can ms-4 text-danger"></i></a>
                        </td>
                    </tr>



                    <tr class="color_org form-check mb-3">
                        <td class="pe-4"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="text-black color_org" style="font-size: 20px;">Untitled Signup Form <br>
                            Created on Jul 13, 2023 02:14 PM </td>
                        <td class="" style="font-size: 22px;">
                            <a href="{{url('/edit_signup_form')}}"><i class="fa-solid fa-pen-to-square ms-4  text-info"></i></a>
                            <a href="{{url('/delete_signup_form')}}"><i class="fa-solid fa-trash-can ms-4 text-danger"></i></a>
                        </td>
                    </tr>
                    <tr class="color_org form-check mb-3">
                        <td class="pe-4"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                        <td class="text-black color_org" style="font-size: 20px;">Untitled Signup Form <br>
                            Created on Jul 13, 2023 02:14 PM </td>
                        <td class="" style="font-size: 22px;">
                            <a href="{{url('/edit_signup_form')}}"><i class="fa-solid fa-pen-to-square ms-4  text-info"></i></a>
                            <a href="{{url('/delete_signup_form')}}"><i class="fa-solid fa-trash-can ms-4 text-danger"></i></a>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>

        <!-- <div class="d-flex justify-content-center gap-3">
          
            <div>
                <a href="{{url('/')}}">
                    <div class="btn btn-outline-warning  mt-5">
                        Previous
                    </div>
                </a>
            </div>

          
            <div class="mt-5">
                <button type="submit" class="btn btn-warning">Save</button>
            </div>
        </div> -->

        <!-- code end -->

    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>
    let delete_button = document.querySelector('#delete_button');

    let delete_all = document.querySelector('#dlt_all');
    console.log(delete_all);

    let dlt_single_message = document.querySelectorAll('.dlt_single_message');
    console.log(dlt_single_message);

    delete_all.addEventListener('change', function() {
        if (delete_button.classList.contains('d-none')) {
            delete_button.classList.remove('d-none');
        } else {
            delete_button.classList.add('d-none');
        }
        dlt_single_message.forEach(function(val) {
            val.checked = delete_all.checked;
        });
    });
</script>

@endsection