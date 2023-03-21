@extends('layouts.master')
@section('title')
<title>Zoho Forms A/B Testing Campaign Next2</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-sm container-md container-lg container-xxl">

        <div class="container mt-5">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th><input class="form-check-input" type="checkbox" value="" id="defaultCheck1" /></th>
                        <th>Date</th>
                        <th>Credit Notes</th>
                        <th>Reference Number#</th>
                        <th>Customer Name</th>
                        <th>Invoice</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Balance<i data-bs-toggle="modal" data-bs-target="#search_filter" class="bx bx-search ms-5"></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td></td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>System Architect</td>
                        <td>San Francisco</td>
                        <td>Edinburgh</td>
                        <td>Edinburgh</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>System Architect</td>
                        <td>San Francisco</td>
                        <td>Edinburgh</td>
                        <td>Edinburgh</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td> Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>System Architect</td>
                        <td>San Francisco</td>
                        <td>Edinburgh</td>
                        <td>Edinburgh</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Shoili</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>System Architect</td>
                        <td>San Francisco</td>
                        <td>Edinburgh</td>
                        <td>Edinburgh</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Mimi</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>System Architect</td>
                        <td>San Francisco</td>
                        <td>Edinburgh</td>
                        <td>Edinburgh</td>
                    </tr>

                </tbody>

                <tfoot>
                    <tr>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>
    const selectAllCheckbox = document.getElementById('selectAll');
    const checkboxGroup = document.querySelectorAll('.checkbox-group');

    selectAllCheckbox.addEventListener('change', function() {
        checkboxGroup.forEach(function(checkbox) {
            checkbox.checked = selectAllCheckbox.checked;
        });
    });
</script>

@endsection