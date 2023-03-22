@extends('layouts.master')
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

<!-- filtering3 Modal -->
<div class="modal fade" id="filtering3" tabindex="-1" aria-hidden="true">
    <div class="modal-lg  modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <!-- <div class="title">Assigning a topic to a contact ensures that your contacts receive topic relevant email Campaigns</div> -->

                <form class="row g-3">
                    @csrf
                    <!-- Form with Tabs -->
                    <div class="row">
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header border-bottom">
                                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" role="tab" aria-selected="true">PersonaContact Info</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link " data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab" aria-selected="false">Contact Basic Details</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab" aria-selected="false">More Details</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab" aria-selected="false">Social information</button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <!-- Contact Info -->
                                    <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">Contact Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-first-name" class="form-control" placeholder="John" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Mobile</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Contact Basic Details -->
                                    <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-username">Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-username">First Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-username">Last Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-username">Job Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-username">Company Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-username">Status</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--More Details -->
                                    <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-twitter">Secondary Email Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-twitter" class="form-control" placeholder="https://twitter.com/abc" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-facebook">contact Source</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-facebook" class="form-control" placeholder="https://facebook.com/abc" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-google">Google+</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-google" class="form-control" placeholder="https://plus.google.com/abc" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-linkedin">Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-instagram">City</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-instagram" class="form-control" placeholder="https://instagram.com/abc" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-quora">State</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-quora" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-quora">Zip Code</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-quora" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-quora">Country</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-quora" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-quora">State</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-quora" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-quora">Website Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-quora" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-quora">Note</label>
                                                    <div class="col-sm-9">
                                                        <textarea type="text" id="formtabs-quora" class="form-control" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Social Information -->
                                    <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-twitter">Twitter handle</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-twitter" class="form-control" placeholder="Twitter handle" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-facebook">Facebook Handle</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-facebook" class="form-control" placeholder="Facebook Handle" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-google">LinkedIn Handle</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="formtabs-google" class="form-control" placeholder="LinkedIn Handle" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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