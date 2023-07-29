@extends('layouts.master')
@section('title')
<title>Upload from Computer</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- <h5>Upload from Computer</h5> -->
        <!-- code start -->
        <form action="{{url('/post_upload_Computer')}}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- row  start-->
            <div class="mb-5 fs-4  text-center text-black text_colr fw-bold">Upload from Computer</div>


            <!-- row start -->
            <div class="d-flex  justify-content-center align-items-center gap-3 mb-5">

                <!-- child 1 -->
                <div class="card text-center h_effect" style="max-width: 50%; padding: 22px; color: black!important">
                    <!-- Basic  -->
                    <!-- <h5 class="card-header">Basic</h5> -->
                    <div class="card-body" style="border: 2px dashed #d4d8dd;">
                        <form action="https://pixinvent.com/upload" class="dropzone needsclick" id="dropzone-basic">
                            <div class="dz-message needsclick text-black">
                                Drop files here or click to upload
                                <span class="note needsclick text-black"> (This is just a Uploading dropzone. Please select one Single file)</span>
                            </div>
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                        </form>
                    </div>
                    <!-- /Basic  -->
                </div>


              

            </div>
            <!-- row end -->

            <div class="navbar navbar-expand-lg sticky-bottom d-flex justify-content-center mt-5 mb-2" style="height: 100px!important">
                <div>
                    <a href="">
                        <button type="submit" class="btn btn-warning">
                            Upload </button>
                    </a>

                </div>
                <div class="ms-3">
                    <a href="{{url('/images')}}">
                        <div class="btn btn-warning">
                            Cancel
                        </div>
                    </a>
                </div>
            </div>

        </form>
        <!-- code end -->

    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>

</script>
@endsection