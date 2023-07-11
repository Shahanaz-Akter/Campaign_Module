@extends('layouts.master')
@section('title')
<title>Add User</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h5 class="title">Create Segments</h5>

        <div class="text-center d-flex justify-content-center text-black">

            <div style="border: 0px solid gray; border-radius: 15px;" class="p-5">

                <div class="fs-2"> <a><i class="fas fa-users-cog text-primary" style="font-size: 100px;"></i></a></div><br>
                <div class='mb-3 fs-4'><b>Create segments to organize contacts efficiently</b> </div>
                <br>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="{{url('/segment')}}">Segment</a></li>
                        <li><a class="dropdown-item" href="{{url('/bulk_segment')}}">Bulk Segment</a></li>

                    </ul>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection