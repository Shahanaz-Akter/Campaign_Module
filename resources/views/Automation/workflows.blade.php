@extends('layouts.master')
@section('title')
<title>Workflows</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between" style="font-size: 25px;">
            <div class="title mb-2">Workflows</div>
            <div></div>
        </div>

        <div class="ms-4">
            <a href="{{url('/create_workflows')}}">
                <div class="btn btn-danger text-center mb-3 mt-3">
                    Create Workflows
                </div>
            </a>
        </div>



        <div class="container-sm container-md container-lg container-xxl">

        <div class="btn p-2">
            <div class="btn p-2">
                <input type="checkbox" class="form-check-input dlt_all" style="margin-left: -18px;">
                <label for="dlt_all" class="" style="margin-left: 40px;">Delete All</label>
                <a href="{{url('/delete_all_sms_campaigns')}}">
                    <i class="d_sn fa-solid fa-trash-can text-danger d-none ms-3" style="font-size:17px!important;"></i>
                </a>
            </div>
        </div>

        <table id="example1" class="display nowrap" style="width:100%;">
            <thead>
                <!-- <span class="">10 Contacts are Selected</span> -->

                <tr class="mb-5">
                    <th><input type="checkbox" class="form-check-input dlt_single_message"></th>
                    <th class="pb-3">Contact Email</th>
                    <th class="pb-3">First Name</th>
                    <th class="pb-3">Last Name</th>
                    <th class="pb-3">Company Name</th>
                    <th class="pb-3">Phone</th>
                    <th class="pb-3">Mobile</th>
                    <th class="pb-3">Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="mb-5">
                    <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                    <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">sefalibegumimo@gmail.com
                        <span>
                            <i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i>
                        </span>
                    </td>
                    <td class="pb-3 single_data ">Sefali</td>
                    <td class="pb-3 single_data ">Begum</td>
                    <td class="pb-3 single_data ">Ztrios</td>
                    <td class="pb-3 single_data ">010197226</td>
                    <td class="pb-3 single_data ">++7226</td>
                    <td class="pb-3 single_data ">Pending</td>
                    <td class="text-center"><i class="fa-solid fa-trash-can text-danger"></i></td>
                </tr>
                <tr class="mb-5">
                    <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                    <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">kada@gmail.com <span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                    <td class="pb-3 single_data ">Sefali</td>
                    <td class="pb-3 single_data ">Begum</td>
                    <td class="pb-3 single_data ">Ztrios</td>
                    <td class="pb-3 single_data ">010197226</td>
                    <td class="pb-3 single_data ">++7226</td>
                    <td class="pb-3 single_data ">Pending</td>
                    <td class="text-center"><i class="fa-solid fa-trash-can text-danger"></i></td>
                </tr>

                <tr class="mb-5">
                    <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                    <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">rifatvaiya@gmail.com <span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                    <td class="pb-3 single_data ">Sefali</td>
                    <td class="pb-3 single_data ">Begum</td>
                    <td class="pb-3 single_data ">Ztrios</td>
                    <td class="pb-3 single_data ">010197226</td>
                    <td class="pb-3 single_data ">++7226</td>
                    <td class="pb-3 single_data ">Pending</td>
                    <td class="text-center"><i class="fa-solid fa-trash-can text-danger"></i></td>
                </tr>
                <tr class="mb-5">
                    <td class="pe-3"><input type="checkbox" class="form-check-input dlt_single_message"></td>
                    <td class="pb-3" onmouseover="Mouse_over(this)" onmouseout="Mouse_out(this)">mosha@gmail.com<span><i class="fa-solid fa-pen text-black ms-3 invisible" data-bs-toggle="modal" data-bs-target="#filtering3"></i></span></td>
                    <td class="pb-3 single_data ">Sefali</td>
                    <td class="pb-3 single_data ">Begum</td>
                    <td class="pb-3 single_data ">Ztrios</td>
                    <td class="pb-3 single_data ">010197226</td>
                    <td class="pb-3 single_data ">++7226</td>
                    <td class="pb-3 single_data ">Pending</td>
                    <td class="text-center"><i class="fa-solid fa-trash-can text-danger"></i></td>
                </tr>
          
            </tbody>
            <tfoot></tfoot>
        </table>
        <div class="d-flex justify-content-start gap-3">
            <!-- flex child-1 -->
            <div>
                <a href="{{url('/workflows')}}">
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

        </div>

    </div>
</div>


<script>
    let delete_all = document.querySelector('.dlt_all');
    console.log(delete_all)
    let dlt_single_message = document.querySelectorAll('.dlt_single_message');
    console.log(dlt_single_message);


    delete_all.addEventListener('change', function() {
        let d_sn = document.querySelector('.d_sn');
        let tr = d_sn.classList.contains('d-none');
        console.log(tr);
        if (tr) {
            d_sn.classList.remove('d-none');

        } else {
            d_sn.classList.add('d-none');
        }


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

<script>
    $(".select2").select2();

    $(document).ready(function() {
        $('#example').DataTable({
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }],
            select: {
                style: 'os',
                selector: 'td:first-child'
            },
            order: [
                [1, 'asc']
            ]
        });
    });
</script>






@endsection