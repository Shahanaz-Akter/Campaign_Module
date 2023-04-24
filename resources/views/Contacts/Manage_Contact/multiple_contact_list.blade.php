@extends('layouts.master')
@section('title')
<title>Add User</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <form action="{{url('/post__route')}}" method="post" enctype="multipart/form-data">
            @csrf

            <h4>My Sample List</h4>
            <div class="d-flex justify-content-between">
                <div></div>
                <div class="d-flex justify-content-end gap-2">

                    <i class="fa-regular fa-keyboard fs-4 ms-3" onclick="multiple_field()" data-bs-toggle="tooltip" data-bs-html="true" title="<span>Multiple Field</span>"></i>

                    <i class="fa-regular fa-keyboard fs-4 text-primary" onclick="multiple_email()" data-bs-toggle="tooltip" data-bs-html="true" title="<span>Email Address Only</span>"></i>
                </div>
            </div>





            <div class="row">
                <div class="multiple_email mb-3 col-sm-8 col-lg-8 col-md-8 col-xxl-8 col-xl-8 d-none">
                    <div class="mb-2">
                        <!-- mb-3 col-sm-2 col-lg-2 col-md-2 col-xxl-2 col-xl-2 -->
                        <label class="form-label" for="basic-default-bio">
                            Press the Enter key after each email address.</label>

                        <textarea class="form-control" id="basic-default-bio" name="basic-default-bio" placeholder="Enter Email Address" rows="3" required></textarea>

                        <div class="mb-3 mt-3">To add more than 20 email address, use import from file.</div>
                    </div>
                </div>

            </div>

            <!-- start row -->
            <div class="row my-4">

                <!-- Form Repeater -->
                <section class="col-12 ">
                    <section class="multiple_field">
                        <div class="row">

                            <div class="text-center mb-3 col-sm-2 col-lg-2 col-md-2 col-xxl-2 col-xl-2">
                                <label class="form-label ">Email</label>
                            </div>

                            <div class="text-center mb-3 col-sm-2 col-lg-2 col-md-2 col-xxl-2 col-xl-2">
                                <label class="form-label">First Name</label>
                            </div>

                            <div class="text-center mb-3 col-sm-2 col-lg-2 col-md-2 col-xxl-2 col-xl-2">
                                <label class="form-label">Last Name</label>
                            </div>
                            <div class="mb-3 col-sm-2 col-lg-2 col-md-2 col-xxl-2 col-xl-2">
                                <label class="form-label">Company Name</label>
                            </div>


                            <div class="mb-3 col-sm-2 col-lg-2 col-md-2 col-xxl-2 col-xl-2">
                                <label class="form-label">Phone</label>
                            </div>

                            <div class="mb-3 col-sm-2 col-lg-2 col-md-2 col-xxl-2 col-xl-2">
                                <label class="form-label">Mobile</label>
                            </div>


                        </div>

                        <div class="d-flex gap-3">

                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="" />
                            </div>

                            <div class="mb-3" onclick="notCancel()">
                                <i class="bx bx-x fs-4 text-danger"></i>
                            </div>

                        </div>



                        <div class="form-repeater">
                            <div data-repeater-list="group-a">
                                <div data-repeater-item>
                                    <div class="d-flex gap-3">

                                        <div class="mb-3">
                                            <input type="text" id="form-repeater-1-1" class="form-control" placeholder="" />
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="form-repeater-1-1" class="form-control" placeholder="" />
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="form-repeater-1-1" class="form-control" placeholder="" />
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="form-repeater-1-1" class="form-control" placeholder="" />
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="form-repeater-1-1" class="form-control" placeholder="" />
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" id="form-repeater-1-1" class="form-control" placeholder="" />
                                        </div>

                                        <div class="mb-3">
                                            <i class="bx bx-x fs-4 text-danger" data-repeater-delete></i>
                                        </div>

                                        <!-- <div class="mb-3 d-flex align-items-center">
                                        <button class="btn btn-label-danger mt-4" data-repeater-delete>
                                            <i class="bx bx-x"></i>

                                        </button>
                                    </div> -->

                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="btn  btn-primary" data-repeater-create>
                                    <i class="bx bx-plus"></i>
                                    <span class="align-middle">Add Another</span>
                                </div>
                            </div>

                        </div>
                        <!-- /Form Repeater -->
                    </section>



                    <div class="row g-3">

                        <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8 mb-2">
                            <div class="row">
                                <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="">Subscription Type</label>
                                <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                    <select class="select2 form-select">
                                        <option value="">Marketing</option>
                                        <option value="AK">Digital</option>
                                        <option value="WV">Social</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8 mb-2">
                            <div class="row">
                                <input type="checkbox" id="Subscription" class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" placeholder="" />
                                <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                    <label for="Subscription"> Overwrite the subscription type for the existing contacts</label>
                                </div>

                            </div>
                        </div>


                        <!-- Multiple selector-->
                        <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8 mb-2">
                            <div class="row">
                                <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for=""></label>
                                <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                    <label for="" class="mb-2">Associate contacts with the following Topics:</label>
                                    <select id="" class="select2 form-select" multiple>
                                        <optgroup label="Mimi">
                                            <option value="" selected>Alaska</option>
                                            <option value="">Alaska</option>
                                            <option value="">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Shahanaz">
                                            <option value="">California</option>
                                            <option value="">Nevada</option>
                                            <option value="">Oregon</option>
                                            <option value="">Washington</option>
                                        </optgroup>
                                    </select>
                                </div>

                            </div>
                        </div>


                        <div class="col-sm-8 col-md-8 col-lg-8 col-xxl-8 mb-2">
                            <div class="row">
                                <input type="checkbox" id="relevant" class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" placeholder="" />
                                <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                    <label for="relevant"> These contacts have given consent to receive emails relevant to my product</label>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>

            <!-- end row -->


            <div class="mt-4 text-center">
                <div type="submit" class="btn btn-primary me-sm-3 me-1">Add</div>
                <div type="reset" class="btn btn-label-secondary"><a href="{{url('/add_user')}}">Cancel</a> </div>
            </div>

        </form>


    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->




<script>
    const notCancel = () => {
        alert('You must have at least one contact in a mailing list.');

    }
</script>
<script>
    const multiple_email = () => {
        let multiple_email = document.querySelector('.multiple_email');
        let multiple_field = document.querySelector('.multiple_field');
        if (multiple_email.classList.contains('d-none')) {
            multiple_email.classList.remove('d-none');
            multiple_field.classList.add('d-none');

        }

    }
</script>

<script>
    const multiple_field = () => {
        let multiple_field = document.querySelector('.multiple_field');
        let multiple_email = document.querySelector('.multiple_email');

        if (multiple_field.classList.contains('d-none')) {
            multiple_field.classList.remove('d-none');
            multiple_email.classList.add('d-none');

        }

    }
</script>
@endsection