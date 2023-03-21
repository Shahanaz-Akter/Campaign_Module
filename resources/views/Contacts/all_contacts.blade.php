@extends('layouts.master')5
@section('title')
<title>All Contacts</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-sm container-md container-lg container-xxl">

        <div class="d-flex justify-content-start gap-2 mt-3">

            <div class="p-2 btn-group bg-white">

                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-solid fa-tag me-2"></i> Assign Tags</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Action</a></li>
                    <li><a class="dropdown-item" href="">Another action</a></li>
                    <li><a class="dropdown-item" href="">Something else here</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="">Separated link</a></li>
                </ul>
            </div>

            <div class="p-2 bg-white">
                <div type="button" data-bs-toggle="modal" data-bs-target="#filtering1"><i class="fa-solid fa-flag me-2"></i> Assign Topics</div>
            </div>

            <!-- <a href="{{url('/delete')}}"><i class="fa-solid fa-trash-can text-danger"></i></a> -->
        </div>

        <!-- <div class="color_org text-black fs-4 " style="font-size: 20px;">Sent Message List</div> -->
        <!-- code start -->
        <div class="row mt-3 gap-3 mb-4">
            <div class="col-md-5 col-lg-5 col-xxl-5 col-sm-5">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <div class="col-md-2 col-lg-2 col-xxl-2 col-sm-2">
                <label for="dlt_all" class="text-start ms-0">Delete All</label>
                <a href="{{url('/delete_all_sms_campaigns')}}" id="delete_button"><i class="fa-solid fa-trash-can text-danger ms-3" style="font-size:22
                px!important;"></i></a>
            </div>
        </div>



        <table id="example" class="mt-2 display" style="width:100%">
            <thead class="">
                <span class="">10 Contacts are Selected</span>
                <hr>
                <tr class="mb-5">
                    <th><input type="checkbox" class="form-check-input dlt_all"></th>
                    <th class="pe-5">Contact Email</th>
                    <th class="pe-5">First Name</th>
                    <th class="pe-5">Last Name</th>
                    <th class="pe-5">Company Name</th>
                    <th class="pe-5">Phone</th>
                    <th class="pe-5">Mobile</th>
                    <th class="pe-5">Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody class="mt-5">

                <tr class="mb-5">
                    <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                    <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">sefalibegumimo@gmail.com <i class="fa-solid fa-pen text-black ms-2 invisible" data-bs-toggle="modal" data-bs-target="#filtering2"></i></td>
                    <td class="pe-5 single_data ">Sefali</td>
                    <td class="pe-5 single_data ">Begum</td>
                    <td class="pe-5 single_data ">Ztrios</td>
                    <td class="pe-5 single_data ">010197226</td>
                    <td class="pe-5 single_data ">++7226</td>
                    <td class="pe-5 single_data ">Pending</td>
                    <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                </tr>

                <tr class="mb-5">
                    <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                    <td class="pe-5" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">sefalibegumimo@gmail.com <a href="{{url('/edit_contact')}}"><i class="fa-solid fa-pen text-black ms-2 invisible"></i></a></td>
                    <td class="pe-5 single_data ">Sefali</td>
                    <td class="pe-5 single_data ">Begum</td>
                    <td class="pe-5 single_data ">Ztrios</td>
                    <td class="pe-5 single_data ">010197226</td>
                    <td class="pe-5 single_data ">++7226</td>
                    <td class="pe-5 single_data ">Pending</td>
                    <td class="text-center"><a href="{{url('/delete_sms_campaigns')}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                </tr>

            </tbody>
        </table>

        <div class="d-flex justify-content-start gap-3">
            <!-- flex child-1 -->
            <div>
                <a href="{{url('/')}}">
                    <div class="btn btn-outline-warning mt-5">
                        Previous
                    </div>
                </a>
            </div>

            <!-- flex child-2 -->
            <div class="mt-5">
                <button type="submit" class="btn btn-warning">Save</button>
            </div>
        </div>
        <!-- code end -->
    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->


<!-- Start Modal -->
<div class="modal fade" id="filtering1" tabindex="-1" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="title">Assigning a topic to a contact ensures that your contacts receive topic relevant email Campaigns</div>


                <form class="row g-3">
                    @csrf
                    <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                        <div class="row">
                            <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="select2">Choose Topic</label>
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                <select class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="AK">Alaska</option>
                                    <option value="WV">West Virginia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                        <div class="row">
                            <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="select2">Choose Topic</label>
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                <input type="text" class="form-control" placeholder="Monu vat khaiso?">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 ms-4 mt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Save</button>
                        <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Start edit Modal -->
<div class="modal fade" id="filtering2" tabindex="-1" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="title">Assigning a topic to a contact ensures that your contacts receive topic relevant email Campaigns</div>

                <form class="row g-3">
                    @csrf
                    <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                        <div class="row">
                            <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="select2">Choose Topic</label>
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                <select class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="AK">Alaska</option>
                                    <option value="WV">West Virginia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9 mt-5 mb-5">
                        <div class="row">
                            <label class="col-sm-3 col-md-3 col-lg-3 col-xxl-3" for="select2">Choose Topic</label>
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xxl-9">
                                <input type="text" class="form-control" placeholder="Monu vat khaiso?">
                            </div>
                        </div>
                    </div>


                    <div class="col-12 ms-4 mt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Save</button>
                        <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End edit Modal -->

<script>
    let delete_all = document.querySelector('.dlt_all');
    console.log(delete_all);

    let dlt_single_message = document.querySelectorAll('.dlt_single_message');
    console.log(dlt_single_message);

    delete_all.addEventListener('change', function() {

        dlt_single_message.forEach(function(val) {
            val.checked = delete_all.checked;
        });
    });


    const Mouse_over = (single_data) => {
        console.log(single_data.children);
        let value = single_data.children[0].children[0];
        console.log(value);

        if (value.classList.contains('invisible')) {
            value.classList.remove('invisible');
        }

    }

    const Mouse_out = (single_data1) => {

        let value1 = single_data1.children[0].children[0];
        console.log(value1);
        let fa = !(value1.classList.contains('invisible'));
        if (fa) {
            value1.classList.add('invisible');
        }

    }
</script>

@endsection