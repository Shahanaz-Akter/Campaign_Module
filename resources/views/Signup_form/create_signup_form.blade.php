@extends('layouts.master')
@section('title')
<title>Create Signup Form</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-sm container-md container-lg container-xxl">

        <div class="d-flex justify-content-between mb-3 mt-5">
            <div>

                <span>Untitled Signup form <a href="{{url('/edit_signup_form')}}"><i class="fa-solid fa-pen ms-4"></i></a></span>
                <br>
                <span> Draft | Created on Jul 13, 2023 03:37 PM</span>
            </div>
            <div class="mt-4"><a href="{{url('/delete_sms_campaigns')}}"><button class="btn btn-outline-danger">Delete</button></a></div>
        </div>

        <!-- code start -->
        <div class="container border bg-white mt-3 mb-2">


            <div class="row">
                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-2 mt-4">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="add_receipient">FORM</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            <div>

                                Are you in need of a signup form? Choose one from our templates.</div>
                            <button class="btn btn-outline-danger">Choose Template</button>
                            <!-- <input type="text" class="form-control" id="add_receipient" placeholder="Add Receipient"> -->
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-2">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="form">RESPONSE</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">

                            Setup the pages and emails to be sent in response to the form submission.
                            <div> <button class="btn btn-outline-danger">Setup Response</button></div>
                            <!-- <div> <input type="text" class="form-control" id="form" placeholder="Add Configure"></div> -->
                        </div>

                    </div>
                    <br>
                </div>

                <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-4">
                    <div class="row">
                        <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="sms_content">SMS CONTENT</label>
                        <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">
                            <div>Provide content for your SMS campaign and proceed</div>
                            <textarea type="text" class="form-control" id="sms_content" value="Configure Content"> </textarea>
                        </div>
                    </div>
                </div>



                <div class="text-warning mb-3 mt-3" onclick="show_advance(this)">Show Advanced Advanced</div>


                <section class="d-none pyaar_e_lal">
                    <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-4">
                        <div class="row">
                            <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="sms_content">Beacon Tracking</label>
                            <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">

                                <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">

                                    <div> Add a unique custom tracking text to your pages and gain insights on the performance of the form.</div>
                                    <div> <button class="btn btn-outline-danger">Add Tracking Text</button></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-4">
                        <div class="row">
                            <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="sms_content">Push To Zoho CRM</label>
                            <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">

                                <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">

                                    <div> CRM
                                        Push To Zoho CRM
                                        Push contacts joining via this form to Zoho CRM.</div>
                                    <div> <button class="btn btn-outline-danger">Push to Zoho CRM</button></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12- col-lg-12 col-xxl-12 mb-1">
                        <div class="row">
                            <label class="col-md-1 col-sm-1 col-lg-1 col-xxl-1 fw-semibold text-muted" for="sms_content">Push To Workflow</label>
                            <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">

                                <div class="col-md-10 col-sm-10 col-lg-10 col-xxl-10">

                                    <div> WORKFLOW
                                        Push to workflow
                                        Initiate an automated series of messages and actions for contacts who make submission via this form.</div>
                                    <div> <button class="btn btn-outline-danger">Push to Zoho CRM</button></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="d-flex justify-content-start gap-3">
                    <!-- flex child-1 -->
                    <div class="mb-3">
                        <a href="{{url('/signup_forms')}}">
                            <div class="btn btn-outline-warning  mt-5 ">
                                Previous
                            </div>
                        </a>
                    </div>

                    <!-- flex child-2 -->
                    <div class="mt-5">
                        <!-- <button type="submit" class="btn btn-warning">Save</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- code end -->
    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->
<script>
    const show_advance = (tag_value) => {
        let pyaar_e_lal = document.querySelector('.pyaar_e_lal');
        if (pyaar_e_lal.classList.contains('d-none')) {
            pyaar_e_lal.classList.remove('d-none');
            tag_value.innerHTML = 'Hide Advanced Options ';
        } else {
            pyaar_e_lal.classList.add('d-none');
            tag_value.innerHTML = 'Show Advanced Options ';
        }
    }
</script>

@endsection