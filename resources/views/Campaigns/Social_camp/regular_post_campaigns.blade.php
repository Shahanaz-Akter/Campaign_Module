@extends('layouts.master')
@section('title')
<title>Create Post Campaigns</title>
@endsection
@section('content')

<form action="{{url('/post_data')}}" method="post" enctype="multipart/form-data">
    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <!-- <small style="font-family: 'Lato', sans-serif;" class="ms-3 mb-2">Campaigns> Social Campaings>Page Campaign> Create</small> -->
        <h5>Create Post Campaign</h5>
        <!-- Content start-->
        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- row class start -->
            <div class="row">

                <div class="row mb-3">
                    <label class="col-sm-3 col-sm-4 col-lg-1 text-end">Name</label>
                    <div class="col-sm-9 col-lg-11">
                        <input class="form-control " type="text" placeholder="This is for your own references">
                    </div>
                </div>



                <!-- File input -->
                <div class="">
                    <!-- <h5 class="card-header">File input</h5> -->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                    </div>
                </div>



            </div>
            <!-- row class end -->

        </div>
        <!-- Content end-->
    </div>
    <!-- Content wrapper end -->
</form>

<script>

</script>

@endsection