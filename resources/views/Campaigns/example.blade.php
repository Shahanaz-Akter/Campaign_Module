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
            <input type="checkbox" id="selectAll"> Select All

            <input type="checkbox" class="checkbox-group"> Checkbox 1
            <input type="checkbox" class="checkbox-group"> Checkbox 2
            <input type="checkbox" class="checkbox-group"> Checkbox 3
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