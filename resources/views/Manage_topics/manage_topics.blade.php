@extends('layouts.master')
@section('title')
<title>Manage Topics</title>
@endsection

@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between mb-5">
            <div class="title" style="font-size: 20px;">Manage Topics</div>
            <div class="d-flex justify-content-end gap-4" style="font-size: 15px;">
                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#group_topic_under_products">Group Topics Under a Products</button>
                <button class="btn btn-label-primary" data-bs-toggle="modal" data-bs-target="#edit_product">Edit</button>
                <button class="btn btn-primary">Preview</button>
            </div>
        </div>

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
                        <i class="fa-solid fa-pen text-black ms-3 me-4  text-primary" data-bs-toggle="modal" data-bs-target="#edit_topic"></i>
                        <i class="fas fa-trash-alt  text-danger"></i>
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
                        <i class="fa-solid fa-pen text-black ms-3 me-4  text-primary" data-bs-toggle="modal" data-bs-target="#edit_topic"></i>
                        <i class="fas fa-trash-alt  text-danger"></i>
                    </div>
                </div>
            </div>

            <div style="font-size: 15px;"> <i class="fas fa-plus-circle text-primary" data-bs-toggle="modal" data-bs-target="#add_topic"></i> Add Topic</div>
        </div>

    </div>

</div>


<!-- Start edit topic Modal -->
<div class="modal fade" id="edit_topic" tabindex="-1" aria-hidden="true">
    <div class="modal-md modal-dialog">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <div class="d-flex justify-content-end mb-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="title mb" style="font-size: 20px;">Edit Topic</div>
                <hr>


                <form class="row g-3">
                    @csrf
                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11 mt-5 mb-2">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">Topic Name</label>

                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <input type="text" class="form-control" placeholder="Marketing">
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">Description</label>

                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <textarea class="form-control" id="description" placeholder="Marketing"></textarea>
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

<!-- Start add topic Modal -->
<div class="modal fade" id="add_topic" tabindex="-1" aria-hidden="true">
    <div class="modal-md modal-dialog">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">

                <div class="d-flex justify-content-end mb-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="title mb-2" style="font-size: 20px;">Add Topic</div>
                <div class="mb-4">Topics is a feature in Zoho Campaigns you can use to let your contacts choose the types of email campaigns they are interested in receiving.</div>
                <hr>


                <form class="row g-3">
                    @csrf
                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11 mt-5 mb-2">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">Topic Name</label>

                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <input type="text" class="form-control" placeholder="Marketing">
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">Description</label>

                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <textarea class="form-control" id="description" placeholder="Marketing"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 ms-4 mt-4 d-flex justify-content-center gap-3">
                        <button type="reset" class="btn btn-label-primary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>

                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End  add topic Modal -->


<!-- Start group_topic_under_products  Modal -->
<div class="modal fade" id="group_topic_under_products" tabindex="-1" aria-hidden="true">
    <div class="modal-md modal-dialog">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">

                <div class="d-flex justify-content-end mb-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="title mb-2" style="font-size: 20px;">Add Topic</div>
                <div class="mb-4">This hierarchy makes things much easier for businesses that have a wide range of products, as it helps them create topics based on products.</div>
                <hr>


                <form class="row g-3">
                    @csrf
                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11 mt-5 mb-2">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">Product Name</label>

                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <input type="text" class="form-control" placeholder="This is for Your Own Reference">
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">About The Product</label>

                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <textarea class="form-control" id="description" placeholder="Marketing"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 ms-4 mt-4 d-flex justify-content-center gap-3">
                        <button type="reset" class="btn btn-label-primary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>

                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End  group_topic_under_products topic Modal -->



<!-- Start add topic Modal -->
<div class="modal fade" id="edit_product" tabindex="-1" aria-hidden="true">
    <div class="modal-md modal-dialog">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">

                <div class="d-flex justify-content-end mb-1">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="title mb-2" style="font-size: 20px;">Customize View</div>

                <form class="row g-3">
                    @csrf
                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11 mt-5 mb-2">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">Brand Logo</label>

                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <input type="text" class="form-control" placeholder="Enter Brand Logo">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11 mt-5 mb-2">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">Brand Name</label>

                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <input type="text" class="form-control" placeholder="Enter Brand Logo">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11 mt-5 mb-2">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">Brand Description</label>

                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <textarea class="form-control" id="description" placeholder="Marketing"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11 mt-5 mb-2">
                        <label for="">Select which newsletters you'd like to receive!</label>
                    </div>

                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11 mt-2 mb-2">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">Marketing</label>
                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <input type="checkbox" class="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 col-md-11 col-lg-11 col-xxl-11 mt-2 mb-2">
                        <div class="row">
                            <label class="col-sm-4 col-md-4 col-lg-4 col-xxl-4" for="">Marketing</label>
                            <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8">
                                <input type="checkbox" class="">
                            </div>
                        </div>
                    </div>



                    <div class="col-12 ms-4 mt-4 d-flex justify-content-center gap-3">
                        <button type="" class="btn btn-label-primary btn-reset">Preview</button>

                        <button type="reset" class="btn btn-label-primary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>

                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Save Preference</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End  add topic Modal -->













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