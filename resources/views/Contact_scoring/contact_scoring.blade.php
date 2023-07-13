@extends('layouts.master')
@section('title')
<title>Contact Scoring</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="title mb-2">Contact Scoring</div>
        <hr>
        <div class="d-flex justify-content-start gap-3 p-2">
            <div><button type="button" class="btn btn-outline-primary">Setup</button></div>
            <div><button type="button" class="btn btn-outline-danger">Scores View</button></div>
        </div>
        <hr>

        <div>Contact Classification</div>

        <div class="text-center">
            <span>
                <i class="far fa-adjust" style="font-size: 50px;"></i>
            </span>
            <div>Classify contacts as Most Engaged, Progressing, and Getting Started by scoring their activities in your campaigns.</div>
            <br>
            <button type="button" class="btn btn-outline-danger">Define Contacts</button>
        </div>

    </div>
</div>

@endsection