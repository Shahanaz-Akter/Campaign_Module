@extends('layouts.master')
@section('title')
<title>Coupon Next1</title>
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

                <div class="col-sm-12 col-md-11 col-lg-10 mb-5">
                    <div class="row">
                        <label class="col-sm-2 col-md-2 col-lg-2 text-sm-end text-md-end text-lg-end" for="Campaign Name">Campaign Name</label>
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

                <div class="col-sm-12 col-md-11 col-lg-10 mb-5">
                    <div class="row">
                        <label class="col-sm-2 col-md-2 col-lg-2  text-sm-end text-md-end text-lg-end" for="Subject">Subject</label>

                        <div class="col-sm-10 col-md-9 col-lg-8">
                            <div class="row">
                                <div class="col-sm-5 col-md-4 col-lg-4">
                                    <input class="form-control" type="text" id="" placeholder="" />
                                </div>

                                <div class="col-sm-5 col-md-5 col-lg-4">
                                    <select class="select2 form-select" id="">
                                        <option value="">Personalize</option>
                                        <option value="Australia">Contact First Name</option>
                                        <option value="United Arab Emirates">Contact Last Name</option>
                                    </select>
                                </div>
                            </div>

                            <small class="mb-1 mt-3">Every successful email campaign starts with a great subject line.<a href="{{url('/learn_more_sub')}}" id="learn_more">Learn More</a>
                            </small>
                        </div>

                    </div>

                </div>

                <div class="col-sm-12 col-md-11 col-lg-10 ">
                    <div class="row">
                        <label class="col-sm-2 col-md-2 col-lg-2 text-sm-end text-md-end text-lg-end" for="">Assign Topic</label>
                        <div class="col-sm-10 col-md-9 col-lg-8">
                            <select class="select2 form-select" id="">
                                <option value="">Marketing</option>
                                <option value="">Contact First Name</option>
                                <option value="">Contact Last Name</option>
                            </select>
                            <small class="mb-5 mt-5">Topic lets you group your contacts based on their interests. By choosing a Topic Name, <br> this campaign will be sent only to those contacts who have chosen the specific topic. <a href="{{url('/learn_more_assign')}}" id="learn_more">Learn More</a>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-11 col-lg-10 mb-5 ">
                    <div class="row">
                        <label class="col-sm-2 col-md-2 col-lg-2 ms-5 text-sm-end text-md-end text-lg-end">Personal Sender <br> Details</label>

                        <div class="col-sm-10 col-md-9 col-lg-8 me-5">
                            <input class="" id="single" name="all" type="radio" value="single" />
                            <label class=" " for="single" onclick="single_address()">Single Address</label>

                            <input class="" id="crm" name="all" type="radio" value="crm" />
                            <label class=" " for="crm" onclick="crm_owner_address()">CRM Owner Address</label><br>

                            <small class="">All the recipients of this campaign will receive an email from the same sender address. </small>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-11 col-lg-10 mb-5">
                    <div class="row">
                        <label class="col-sm-2 col-md-2 col-lg-2 text-sm-end text-md-end text-lg-end" for="Sender">Sender</label>
                        <div class="col-sm-5 col-md-5 col-lg-5 ">
                            <input type="text" id="Sender" class="form-control" placeholder="Enter Name" />
                        </div>

                        <div class="col-sm-5 col-md-4 col-lg-3">
                            <select id="" class="select2 form-select">
                                <option value="">sefalibegumimo@gmail.com</option>
                                <option value="Australia">mimo@gmail.com</option>
                                <option value="United Arab Emirates">imo@gmail.com</option>
                            </select>
                            <div class="h-100" id="parent_div">
                                <div class="text-center bg-black text-white" onclick="sender()">Add Sender Address</div>

                                <div class="h-50" id="divv">
                                    <!-- Create sender address label and div using JS -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-11 12 col-lg-10 mb-5 mb-5">
                    <div class="row">
                        <label class="col-sm-2  col-md-2 col-lg-2 ms-5 text-sm-end text-md-end text-lg-end">Personalize <br> 'To-address'</label>

                        <div class="col-sm-10 col-md-9 col-lg-8">
                            <input id="Personalize" name="all" type="checkbox" value="Personalize" />
                            <label class="ms-1" for="Personalize"> Include recipient's name in 'To' address</label>
                        </div>

                    </div>
                </div>


                <div class="d-none alter">

                    <div class="col-md-12 mb-3">

                        <div class="col-sm-12 col-md-11 col-lg-10 mb-5">
                            <div class="row">
                                <label class="col-sm-2 col-md-2 col-lg-2 text-sm-end text-md-end text-lg-end" for="Alter">Alternate-Reply-To-address</label>
                                <div class="col-sm-5 col-md-4 col-lg-4">
                                    <input type="text" id="Alter" class="form-control" placeholder="Enter Name" />
                                </div>
                                <div class="col-sm-5 col-md-5 col-lg-4">
                                    <select id="" class="select2 form-select">
                                        <option value="">sefalibegumimo@gmail.com</option>
                                        <option value="Australia">mimo@gmail.com</option>
                                        <option value="United Arab Emirates">imo@gmail.com</option>
                                    </select>
                                    <div class="h-100" id="parent_div">
                                        <div class="text-center bg-black text-white" onclick="sender()">Add Sender Address</div>

                                        <div class="h-50" id="divv">
                                            <!-- Create sender address label and div using JS -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 ms-5">
                        <button type="submit" class="btn btn-warning">Save</button>
                    </div>

                </div>

            </div>

        </form>

        <div class="d-flex justify-content-end mb-5">
            <!-- flex child-1 -->
            <a href="{{url('coupon_regular_campaign')}}">
                <div class="btn btn-warning me-3">
                    Previous
                </div>
            </a>

            <!-- flex child-2 -->
            <a href="{{url('/coupon_next2')}}">
                <div class="btn btn-warning">
                    Next
                </div>
            </a>
            <!-- code end -->
        </div>



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