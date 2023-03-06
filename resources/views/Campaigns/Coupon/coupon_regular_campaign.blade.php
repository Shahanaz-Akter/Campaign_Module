@extends('layouts.master')
@section('title')
<title>Coupon Regular Campaign</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h5>Campaigns> Email Campaings</h5>
        <!-- code start -->


        <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data">
            @csrf




            <div class="row g-3 mt-5">

                <div class="col-sm-12 col-md-11 col-lg-10 mb-3">
                    <div class="row">
                        <label class="col-sm-2 col-md-2 col-lg-2 text-sm-end text-md-end text-lg-end" for="Campaign Name">Coupon Prefix</label>
                        <div class="col-sm-10 col-md-9 col-lg-8">
                            <input type="text" id="Campaign Name" class="form-control" placeholder="This is for your own references" />
                        </div>
                    </div>
                </div>

                <!-- <div class="col-sm-12 col-md-11 col-lg-10 mb-5">
                    <div class="row">
                        <label class="col-sm-2 col-md-2 col-lg-2 text-sm-end text-md-end text-lg-end" for="Webinars">Webinars</label>
                        <div class="col-sm-10 col-md-9 col-lg-8">
                            <input type="text" id="Webinars" class="form-control" placeholder="---No webinar available---" />
                        </div>

                    </div>
                </div> -->



                <div class="col-sm-12 col-md-11 col-lg-10 mb-3">
                    <div class="row">
                        <label class="col-sm-2 col-md-2 col-lg-2 text-sm-end text-md-end text-lg-end" for="">Expire Date</label>
                        <div class="col-sm-10 col-md-9 col-lg-8">
                            <div class="row">
                                <div class="col-sm-10 col-md-9 col-lg-4">
                                    <label for="flatpickr-human-friendly" class="form-label">Human Friendly Date Picker</label>
                                    <input type="text" class="form-control" placeholder="Month DD, YYYY" id="flatpickr-human-friendly" />
                                </div>

                                <div class="col-sm-10 col-md-9 col-lg-4">
                                    <label for="flatpickr-time" class="form-label">Time Picker</label>
                                    <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 col-md-11 col-lg-10 mb-3">
                    <div class="row">
                        <label class="col-sm-2 col-md-2 col-lg-2 text-sm-end text-md-end text-lg-end" for=""></label>
                        <div class="col-sm-10 col-md-9 col-lg-8">
                            <select class="select2 form-select" id="">
                                <option value="">( GMT 6:0 ) Asia/Dhaka( BDT)</option>
                                <option value="">( GMT 6:0 ) Asia/Dhaka( BDT)</option>
                                <option value="">( GMT 6:0 ) Asia/Dhaka( BDT)</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-11 col-lg-10 mb-3">
                    <div class="row">
                        <label class="col-sm-2 col-md-2 col-lg-2 text-sm-end text-md-end text-lg-end" for="">Expire Date Format</label>
                        <div class="col-sm-10 col-md-9 col-lg-8">
                            <select class="select2 form-select" id="">
                                <option value="">
                                    March 13, 2023</option>
                                <option value="">
                                    March 13, 2023</option>
                                <option value="">
                                    March 13, 2023</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
    </div>



    <div class="d-flex justify-content-center mb-5">

        <div>
            <button type="submit" class="btn btn-warning">Save</button>
        </div>

        <!-- flex child-2 -->
        <a href="{{url('/email_campaigns')}}">
            <div class="btn btn-warning ms-3">
                Previous
            </div>
        </a>

        <!-- flex child-3-->
        <a href="{{url('/coupon_next1')}}">
            <div class="btn btn-warning ms-3">
                Next
            </div>
        </a>
        <!-- code end -->
    </div>
    </form>


</div>
<!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>
    const sender = () => {

        let t = document.querySelector('#divv');

        let parent_div = document.querySelector('#parent_div');

        let div = document.querySelector('#divv');

        let label = document.createElement('label');
        label.setAttribute('for', 'email_address');
        label.innerText = 'Email Adress';

        let input = document.createElement('input');
        input.classList.add('form-control');
        input.setAttribute('type', 'text');
        input.setAttribute('id', 'email_address');
        input.setAttribute('for', 'form-control');
        input.setAttribute('placeholder', 'email_address');


        let section = document.createElement('section');
        section.classList.add('icon');
        section.classList.add('d-flex');

        section.style.marginLeft = '300px';
        section.style.marginTop = '-25px';

        let i_tik = document.createElement('i');
        i_tik.classList.add('class', 'cancel');
        i_tik.classList.add('fa-sharp');
        i_tik.classList.add('fa-solid');
        i_tik.classList.add('fa-check');

        let i_cross = document.createElement('i');
        i_cross.classList.add('class', 'cross');
        i_cross.classList.add('fa-sharp');
        i_cross.classList.add('fa-solid');
        i_cross.classList.add('fa-xmark');

        i_cross.classList.add('ms-4');

        section.appendChild(i_tik);
        section.appendChild(i_cross);

        div.appendChild(label);
        div.appendChild(input);
        div.appendChild(section);

        parent_div.appendChild(div);
        console.log(parent_div);


        let cross = document.querySelector('.cross');
        if (true) {
            cross.addEventListener('click', () => {
                div.remove();
            });
        } else {
            cross.addEventListener('click', () => {
                div.add();
            });
        }

        // let cancel = document.querySelector('.cancel');
        // if (true) {
        //     cancel.addEventListener('click', () => {
        //         div.save();
        //     });
        // } 

    }


    const single_address = () => {
        let crm_owner_address = document.querySelector('.alter');
        let tr = crm_owner_address.classList.contains('d-none');
        console.log(tr);
        if (!(tr)) {
            crm_owner_address.classList.add('d-none');
        }
    }

    const crm_owner_address = () => {
        let crm_owner_address = document.querySelector('.alter');
        let y = crm_owner_address.classList.contains('d-none');
        console.log(y);
        if (y) {
            crm_owner_address.classList.remove('d-none');
        }
    }
</script>

@endsection