@extends('layouts.master')
@section('title')
<title>A/B Testing Campaign</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h5>Campaigns> Email Campaings</h5>
        <!-- code start -->


        <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3" onsubmit="return false">

                <div class="col-md-6 mb-3">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-first-name">Name</label>
                        <div class="col-sm-6">
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>

                        <div class="col-sm-3"><select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Unclassified</option>
                                <option value="Australia">Australia</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3"></div>

                <div class="col-md-6 mb-3">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-first-name">Select Test Parameter</label>
                        <div class="col-sm-9">
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-first-name">Select The Size of the Group</label>
                        <div class="col-sm-9">
                        <div id="slider-hover" class="mt-4 mb-2"></div>
                            <small>Hovered value: <span id="slider-val">null</span></small>
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>
                    </div>
                </div>


                <!-- Behaviour -->
                <!-- <div class="col-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Behaviour</h5>
                        <div class="card-body">
                            <small class="text-light fw-semibold">Tap</small>
                            <div id="slider-tap" class="mt-4 mb-5"></div>

                            <small class="text-light fw-semibold">Drag</small>
                            <div id="slider-drag" class="mt-4 mb-5"></div>

                            <small class="text-light fw-semibold">Fixed Dragging</small>
                            <div id="slider-fixed-drag" class="mt-4 mb-5"></div>

                            <small class="text-light fw-semibold">Combined Options</small>
                            <div id="slider-combined-options" class="mt-4 mb-5"></div>

                            <small class="text-light fw-semibold">Hover</small>
                            <div id="slider-hover" class="mt-4 mb-2"></div>
                            <small>Hovered value: <span id="slider-val">null</span></small>
                        </div>
                    </div>
                </div> -->
                <!-- /Behaviour -->

                <div class="col-md-6 mb-3">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-first-name">Decide Winner by</label>
                        <div class="col-sm-9">
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-country">Test Duration</label>
                        <div class="col-sm-4">
                            <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>
                    </div>
                </div>




                <div class="col-md-6 select2-primary mb-3">
                    <div class="row">
                        <label class="col-sm-3  text-sm-end" for="formtabs-language">If Results are incolclusive send</label>
                        <div class="col-sm-9">
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>

            </div>
        </form>


        <div class="d-flex justify-content-end">
            <!-- flex child-1 -->
            <a href="{{url('/next1')}}">
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