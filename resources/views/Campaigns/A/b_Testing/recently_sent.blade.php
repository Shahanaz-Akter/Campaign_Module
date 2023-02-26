@extends('layouts.master')
@section('title')
<title>Recently Sent</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5>Recently Sent </h5>
        <!-- code start -->

        <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf

        </form>

        <div class="d-flex justify-content-around mt-5">

            <!-- flex child-1 -->
            <a href="{{url('/ab_next2')}}">
                <div class="btn btn-warning">
                    Previous
                </div>
            </a>

            <!-- flex child-2 -->
            <a href="{{url('/ab_next3')}}">
                <div class="btn btn-warning">
                    Next
                </div>
            </a>

        </div>
        <!-- code end -->
    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

@endsection