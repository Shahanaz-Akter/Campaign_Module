@extends('layouts.master')
@section('title')
<title>Page Campaigns</title>
@endsection
@section('content')

<form action="{{url('/post_data')}}" method="post" enctype="multipart/form-data">
    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <small style="font-family: 'Lato', sans-serif;" class="ms-3 mb-2">Campaigns> Social Campaings>Page Campaign> Create</small>

        <div class="d-flex justify-content-between">
            <h5 style="font-family: 'Lato', sans-serif;">
                <a href="{{url('/social_campaigns')}}"><i class="ms-3 me-2 fa-solid fa-arrow-left"></i></a>
                Create Page Campaings
            </h5>

            <button type="submit" class="btn btn-primary me-3 mb-4" style="font-family: 'Lato', sans-serif;">
                <a class="text-white" href="{{url('/social_campaigns')}}"> Save and Exit</a>

            </button>
        </div>

        <!-- Content start-->
        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- row class start -->
            <div class="mb-3" style="margin: auto!important; max-width: 50%;">

                <div class="row mb-3">
                    <label class="col-sm-3 col-sm-4 col-lg-1 text-end">Name</label>
                    <div class="col-sm-9 col-lg-11">
                        <input class="form-control " type="text" placeholder="This is for your own references">
                    </div>
                </div>

                <div class="mb-3" style="max-width: 700px;">
                    <label class="mb-2">Select Facebook page for get started</label>
                    <div class="card text-center">

                        <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                            <i class=" img-fluid bx bxl-facebook-circle"></i>
                        </div>

                        <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                        <div class="card-body mb-3">
                            <small class="card-text d-block" style="color: black;">You haven't integrated your Facebook account.<span class="typcn typcn-warning-outline"></span></small>
                        </div>
                        <div class="">
                            <a class="btn btn-warning" style="width: 150px!important; margin: 0 auto; margin-bottom: 40px;" href="{{url('/connect_to_facebook')}}">Connect to Facebook</a>
                        </div>

                    </div>

                </div><br>


                <div class="mb-3" style="max-width: 700px;">
                    <label class="mb-2">What would you like to create?
                    </label>
                    <div class="card text-center">

                        <div class="icon-card cursor-pointer text-center  mb-4 mx-2">
                            <i class=" img-fluid bx bxl-facebook-circle"></i>
                        </div>

                        <!-- <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" /> -->
                        <div class="card-body mb-3">
                            <small class="card-text d-block" style="color: black;">No content created yet.<span class="typcn typcn-warning-outline"></span></small>
                        </div>
                        <div class="">
                            <a class="btn btn-warning" style="width: 150px!important; margin: 0 auto; margin-bottom: 40px;" href="{{url('/connect_to_facebook')}}">Craft Your Contacts</a>
                        </div>

                    </div>

                </div>

            </div>
            <!-- row class end -->


            <div class="d-flex justify-content-between">

                <button type="submit" class="btn btn-outline-secondary me-5" style="font-family: 'Lato', sans-serif;">
                    <a class="text-black" href="{{url('/social_campaigns')}}">Cancel</a>
                </button>
                <button type="submit" class="btn btn-danger me-5" style="font-family: 'Lato', sans-serif;">
                    <a class="text-white" href="{{url('')}}">Next</a>

                </button>
            </div>

        </div>
        <!-- Content end-->
    </div>
    <!-- Content wrapper end -->
</form>

<script>

</script>

@endsection