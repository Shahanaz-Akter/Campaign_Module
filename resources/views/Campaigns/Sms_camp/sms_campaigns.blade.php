@extends('layouts.master')
@section('title')
<title>Zoho Forms A/B Testing Campaign Next2</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl container-lg  container-sm container-md flex-grow-1 container-p-y">

        <div class="dropdown">
            <div class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                All Campaigns
            </div>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item active" href="#">Sent Message List</a></li>
                <li><a class="dropdown-item" href="#">Deleted Message List</a></li>
            </ul>
        </div>


        <div class="row mt-5">
            <div class="col-md-7">
                <h4 class="color_org text-black">Sent Message List</h4>
            </div>
            <div class="col-md-6 col-lg-6 col-xxl-6 mt-3">
                <div class="d-flex">
                    <input type="text" class="form-control me-2" id="search" placeholder="Search">
                    <!-- <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#filter-modal">Filter</button> -->
                    <button class="btn btn-danger" id="delete-all-btn">Select All</button>
                </div>
            </div>
        </div>

        <!-- code start -->
        <div class="" stytle="justify-content:center!important; align-items:center!important;">
            <table class="mt-4">
                <thead>
                    <tr class="col-md-12 col-sm-12 col-lg-12 col-xxl-12 mb-5">
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody class="row">
                    <tr class="col-md-12 col-sm-12 col-lg-12 col-xxl-12 mb-5 color_org">
                        <td class="pe-4"><input type="checkbox"></td>
                        <td style="margin-left: 50px!important;">Subject: Meeting at 3pm <br>
                            Date: Mar 12, 2022 15:00</td>
                        <td class="">
                            <button class="btn btn-sm btn-secondary  ms-5" data-bs-toggle="modal" data-bs-target="#edit-modal">View</button>
                            <button class="btn btn-sm btn-info ms-3" data-bs-toggle="modal" data-bs-target="#edit-modal">Edit</button>
                            <button class="btn btn-sm btn-danger delete-btn ms-3">Delete</button>
                        </td>
                    </tr>

                    <tr class="col-md-12 col-sm-12 col-lg-12 col-xxl-12 mb-5 color_org">
                        <td class="pe-4"><input type="checkbox"></td>

                        <td class="">Subject: Meeting at 3pm <br>
                            Date: Mar 14, 2023 14:00</td>
                        <td class="">
                            <button class="btn btn-sm btn-secondary  ms-5" data-bs-toggle="modal" data-bs-target="#edit-modal">View</button>
                            <button class="btn btn-sm btn-info ms-3" data-bs-toggle="modal" data-bs-target="#edit-modal">Edit</button>
                            <button class="btn btn-sm btn-danger delete-btn ms-3">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="d-flex justify-content-start gap-5">
                <!-- flex child-1 -->
                <a href="{{url('/')}}">
                    <div class="btn btn-warning  mt-5">
                        Previous
                    </div>
                </a>

                <!-- flex child-2 -->
                <div class="col-12  mt-5">
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>
            </div>
            <!-- code end -->
        </div>
        <!-- </div> -->
    </div>
    <!-- Content end-->

</div>
<!-- Content wrapper end -->

<script>

</script>

@endsection