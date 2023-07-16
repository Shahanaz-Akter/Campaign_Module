@extends('layouts.master')
@section('title')
<title>Contact Scoring</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="d-flex justify-content-between" style="font-size: 25px;">
            <div class="title mb-2">Contact Tags</div>
            <div><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#create__">Create</button></div>
        </div>

        <hr>


        <div class="">


            <div class="p-5 mb-5">
                <div></div>
                <div class="text-center" style="font-size: 25px;">
                    <span>
                        Icon
                        <!-- <i class="far fa-adjust" style="font-size: 50px;"></i> -->
                    </span>
                    <div class="fs-4">Use tags to organize your contacts based on specific criteria.</div>

                </div>
            </div>

        </div>








        <!-- Create Custom Rule   modal start -->
        <div class="modal fade" id="create__" tabindex="-1" aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <!-- Navbar content -->
                        <div class="title mt-2 text-uppercase">New Tag</div>

                        <hr class="mb-5">
                        <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div id="" class="row g-3" onsubmit="return false">

                                <div class="row  col-md-11 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Tag Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="" class="form-control" id="" placeholder="This is for your own Reference" value="" />
                                    </div>
                                </div>




                                <div class="row col-md-11 mb-4 mt-2">
                                    <label class="col-sm-3" for="description">Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="description" name="description" class="form-control" rows=""></textarea>
                                    </div>
                                </div>


                                <div class="row  col-md-11 mb-4 mt-2">
                                    <label class="col-sm-3" for="">Choose Color</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="" class="form-control" id="" placeholder="This is for your own Reference" value="" />
                                    </div>
                                </div>



                                <div class="row col-md-11 mb-4 mt-2">
                                    <label class="col-sm-3" for="color">Choose Color</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex align-items-center">
                                            <div class="color-circle" style="background-color: #ff0000;"></div>
                                            <div class="color-circle" style="background-color: #00ff00;"></div>
                                            <div class="color-circle" style="background-color: #0000ff;"></div>
                                            <div class="color-circle" style="background-color: orange;"></div>
                                            <div class="color-circle" style="background-color: pink;"></div>
                                            <div class="color-circle" style="background-color: green;"></div>
                                            <div class="color-circle" style="background-color: yellow;"></div>
                                            <div class="color-circle" style="background-color: aqua;"></div>
                                            <!-- Add more color circles as needed -->
                                        </div>
                                        <input type="text" name="color" class="form-control visually-hidden" id="color" placeholder="" value="" />
                                    </div>
                                </div>



                                <div class="col-12  mt-4  d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Create</button>

                                    <button type="reset" class="btn btn-label-primary btn-reset me-2" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Create Custom Rule  modal end -->

    </div>
</div>


<script>
    const mosha = () => {


    }
</script>






@endsection