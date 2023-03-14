@extends('layouts.master')
@section('title')
<title>Zoho forms Template</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl container-sm container-lg container-md flex-grow-1 container-p-y">
        <div class="">
            <h5>Predesigned Template</h5>
            <!-- code start -->
            <form action="{{url('/post_')}}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- row class start -->
                <div class="row">
                    <div class="row col-12 col-sm-12 col-md-12 col-lg-12 mb-5">
                        <label class="col-sm-2" for="formtabs-first-name">Predesigned Templates</label>
                        <div class="col-sm-4">
                            <select id="formtabs-country" class="select2 form-select">
                                <option value="">All Categories</option>
                                <option value="Holidays">Holidays</option>
                                <option value="NewSlatters">NewSlatters</option>
                                <option value="Deals and Offers">Deals & Offers</option>
                                <option value="Thank you">Thank you</option>
                                <option value="Deals and Offers">Webinars</option>
                                <option value="Surveys">Surveys</option>
                                <option value="Deals and Offers">Seasons</option>
                                <option value="Birthday">Birthday</option>
                                <option value="Emergencies and crises">Emergencies and crises</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- row  start-->
                <!-- visible first div start -->
                <div class="d-flex justify-content-start flex-wrap gap-5 mb-5" style="border:1px solid red;">
                    <!-- child 1 -->
                    <div class="card text-center" style="max-width:25%">
                        <div class="card-title"></div>
                        <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>
                        </div>
                        <div class="card-footer text-warning fs-4">Form 1</div>
                    </div>

                    <!-- child 2 -->
                    <div class="card text-center" style="max-width:25%">
                        <div class="card-title"></div>
                        <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                        </div>
                        <div class="card-footer text-warning fs-4">Form 2</div>
                    </div>


                    <div class="card text-center" style="max-width:25%">
                        <div class="card-title"></div>
                        <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>
                        </div>
                        <div class="card-footer text-warning fs-4">Form 3</div>
                    </div>
                    <div class="card text-center" style="max-width:25%">
                        <div class="card-title"></div>
                        <img class="card-img-top" src="../../assets/img/elements/20.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>

                        </div>
                        <div class="card-footer text-warning fs-4">Form 4</div>
                    </div>

                    <div class="card text-center" style="max-width:25%">
                        <div class="card-title"></div>
                        <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>
                        </div>
                        <div class="card-footer text-warning fs-4">Form 5</div>
                    </div>


                    <div class="card text-center" style="max-width:25%">
                        <div class="card-title"></div>
                        <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>
                        </div>
                        <div class="card-footer text-warning fs-4">Form 6</div>
                    </div>


                    <div class="card text-center" style="max-width:25%">
                        <div class="card-title"></div>
                        <img class="card-img-top" src="../../assets/img/elements/17.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href=""><span class="btn btn-outline-warning mt-3 over">Edit</span> </a>
                            <a href=""> <span class="btn btn-warning mt-3 over">Preview</span> </a>
                        </div>
                        <div class="card-footer text-warning fs-4">Form 7</div>
                    </div>

                </div>
                <!-- visible first div end -->
            </form>
            <!-- code end -->
        </div>

    </div>
    <!-- Content end-->
    <div class="navbar navbar-expand-lg sticky-bottom mt-5  mb-2 p-3" style=" background: rgba(211,211,211, 0.4);">
        <div class="ms-5">
            <a href="{{url('/zoho_forms_regular_campaign')}}">
                <div class="btn btn-outline-warning">
                    Previous
                </div>
            </a>
        </div>

        <div class="ms-5">
            <button type="submit" class="btn btn-warning">Save</button>
        </div>
    </div>
</div>
<!-- Content wrapper end -->

<script>

</script>
@endsection