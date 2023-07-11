@extends('layouts.master')
@section('title')
<title>Manage Topics</title>
@endsection

@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="title">Manage Topics</h5>
        <div class="text-black">
            <div class='mb-5'>2 Topics in your Organization</div>
            <br>
            <div class="d-flex justify-content-between p-4 mb-5" style="border: 1px solid gray; border-radius: 5px;">
                <div class="">
                    <div>Marketing</div>
                    <div class="text-muted">Marketing</div>
                </div>

                <div style="font-size:  25px; border: 1px solid transparent;">
                    <div class="hide_icon">
                        <i class="fa-solid fa-pen text-black ms-3 me-4  text-black" data-bs-toggle="modal" data-bs-target="#edit_topic"></i>
                        <i class="fas fa-trash-alt  text-black"></i>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between p-4 mb-5" style="border: 1px solid gray; border-radius: 5px;">
                <div class="">
                    <div>Marketing</div>
                    <div class="text-muted">Marketing</div>
                </div>

                <div style="font-size:  25px; border: 1px solid transparent;">
                    <div class="hide_icon">
                        <i class="fa-solid fa-pen text-black ms-3 me-4  text-black" data-bs-toggle="modal" data-bs-target="#edit_topic"></i>
                        <i class="fas fa-trash-alt  text-black"></i>
                    </div>
                </div>
            </div>

            <div> <i class="fas fa-plus" data-bs-toggle="modal" data-bs-target="#add_topic"></i> Add Topic</div>
        </div>

    </div>

</div>


<!-- Start add topic Modal -->
<div class="modal fade" id="edit_topic" tabindex="-1" aria-hidden="true">
    <div class="modal-lg modal-dialog">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div>Topics is a feature in Zoho Campaigns you can use to let your contacts choose the types of email campaigns they are interested in receiving.</div>
                <div class="title">Add Topic</div>

                <form class="row g-3">
                    @csrf

                    <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                        <div class="row">
                            <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="">Topic Name</label>
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                <input type="text" class="form-control" placeholder="Marketing">
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                        <div class="row">
                            <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="">Description</label>
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 ms-4 mt-4 d-flex justify-content-between">
                        <button type="reset" class="btn btn-label-primary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>

                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End  add topic Modal -->

<!-- Start edit topic Modal -->
<div class="modal fade" id="add_topic" tabindex="-1" aria-hidden="true">
    <div class="modal-sm modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="title">Edit Topic</div>

                <form class="row g-3">
                    @csrf

                    <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                        <div class="row">
                            <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="">Topic Name</label>
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                <input type="text" class="form-control" placeholder="Marketing">
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                        <div class="row">
                            <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="">Description</label>
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 ms-4 mt-4 d-flex justify-content-between">
                        <button type="reset" class="btn btn-label-primary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>

                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End  edit topic Modal -->

<!-- <script>
    var hideIcon = document.querySelector('.hide_icon');

    hideIcon.addEventListener('mouseenter', function() {

        if (hideIcon.contains.classList('invisible')) {
            hideIcon.classList.remove('invisible');
            hideIcon.classList.add('visible');

        }

    });

    hideIcon.addEventListener('mouseleave', function() {

        if (hideIcon.contains.classList('visible')) {
            hideIcon.classList.remove('visible');
            hideIcon.classList.add('invisible');

        }

    });
</script> -->


@endsection