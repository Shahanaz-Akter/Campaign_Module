@extends('layouts.master')
@section('title')
<title>A/B Testing Campaign Next1</title>
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

            <div class="row g-3">

                <div class="col-md-12 col-lg-12 col-sm-12 mb-5">
                    <div class="row">
                        <label class="col-sm-2  text-sm-end text-end" for="formtabs-first-name">Select A</label>
                        <div class="col-sm-5">
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>

                        <div class="col-sm-3"><select id="formtabs-country" class="select2 form-select">
                                <option value="">Personalize</option>
                                <option value="Australia">Contact First Name</option>
                                <option value="United Arab Emirates">Contact Last Name</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-lg-12 col-sm-12 mb-5">
                    <div class="row">
                        <label class="col-sm-2  text-sm-end text-end" for="formtabs-first-name">Select B</label>
                        <div class="col-sm-5">
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>

                        <div class="col-sm-3"><select id="formtabs-country" class="select2 form-select">
                                <option value="">Personalize</option>
                                <option value="Australia">Contact First Name</option>
                                <option value="United Arab Emirates">Contact Last Name</option>
                            </select>
                        </div>
                        <small class="mb-2 mt-3" style="margin-left: 205px!important;">Every successful email campaign starts with a great subject line. <a href="{{url('/learn_more')}}" id="learn_more"> Learn more</a>
                        </small>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="row">
                        <label class="col-sm-2  text-sm-end" for="formtabs-first-name">Assign Topic</label>

                        <div class="col-sm-8"><select id="formtabs-country" class="select2 form-select">
                                <option value="">Marketing</option>
                                <option value="Australia">Contact First Name</option>
                                <option value="United Arab Emirates">Contact Last Name</option>
                            </select>
                        </div>
                        <small class="mb-1 mt-3" style="margin-left: 205px!important;">Topic lets you group your contacts based on their interests. By choosing a Topic Name, <br> this campaign will be sent only to those contacts who have chosen the specific topic. <a href="{{url('/learn_more')}}" id="learn_more">Learn More</a>
                        </small>
                    </div>
                </div>

                <div class="col-12 mb-5">
                    <div class="row">
                        <label class="col-sm-2 ms-5">Personal Sender <br> Details</label>

                        <div class="col-sm-9">
                            <input id="single" style="margin-left: -50px;" name="all" type="radio" value="single" />
                            <label class="ms-1" for="single">Single Address</label>

                            <input id="crm" class="ms-4" name="all" type="radio" value="crm" />
                            <label class="ms-1" for="crm">CRM Owner Address</label>
                        </div>
                        <small class="" style="margin-left: 205px!important;">All the recipients of this campaign will receive an email from the same sender address. </small>
                    </div>
                </div>


                <div class="col-md-12 col-lg-12 col-sm-12 mb-5">
                    <div class="row">
                        <label class="col-sm-2  text-sm-end text-end" for="formtabs-first-name">Sender</label>
                        <div class="col-sm-5">
                            <input type="text" id="formtabs-first-name" class="form-control" placeholder="Enter Name" />
                        </div>

                        <div class="col-sm-3">
                            <select id="formtabs-country" class="select2 form-select">
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


                <div class="col-md-12 col-lg-12 col-sm-12 mb-5">
                    <div class="row">
                        <label class="col-sm-2  text-sm-end text-end" for="formtabs-first-name">Reply tracking</label>
                        <div class="col-sm-8">
                            <label class="switch">
                                <input type="checkbox" class="switch-input" />
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                                <span class="switch-label">Default</span>
                            </label>

                        </div>
                    </div>
                </div>


                <div class="col-12 mb-5">
                    <div class="row">
                        <label class="col-sm-2 ms-5">Reply To</label>

                        <div class="col-sm-9">
                            <input id="single" style="margin-left: -50px;" name="all" type="radio" value="single" />
                            <label class="ms-1" for="single">Single Address</label>

                            <input id="crm_owner_address" class="ms-4" name="all" type="radio" value="crm_owner_address" />
                            <label class="ms-1" for="crm_owner_address" onclick="crm_owner_address()">CRM Owner Address</label>
                        </div>
                        <small class="" style="margin-left: 205px!important;">Reply-to address will be same for all the recipients. </small>
                    </div>
                </div>

                <div class="d-none mimi">

                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <label class="col-sm-2  text-sm-end" for="formtabs-first-name">Reply-To</label>

                            <div class="col-sm-8">
                                <select id="formtabs-country" class="select2 form-select">
                                    <option value="">$[CRM Owner: Email]$</option>
                                    <option value="Australia">Contact First Name</option>
                                    <option value="United Arab Emirates">Contact Last Name</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 col-sm-12 mb-5">
                        <div class="row">
                            <label class="col-sm-2  text-sm-end text-end" for="formtabs-first-name">Alter nate-Reply-To-address</label>


                            <div class="col-sm-8">
                                <select id="formtabs-country" class="select2 form-select">
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



                <div class="col-12 mb-5">
                    <div class="row">
                        <label class="col-sm-2 ms-5">Personalize <br> 'To-address'</label>

                        <div class="col-sm-9">
                            <input id="Personalize" style="margin-left: -50px;" name="all" type="checkbox" value="Personalize" />
                            <label class="ms-1" for="Personalize"> Include recipient's name in 'To' address</label>
                        </div>

                    </div>
                </div>



                <div class="col-12 ms-5">
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>
            </div>
        </form>


        <div class="d-flex justify-content-end ">

            <!-- flex child-1 -->
            <a href="{{url('/ab_testing')}}">
                <div class="btn btn-warning me-3">
                    Previous
                </div>
            </a>

            <!-- flex child-2 -->
            <a href="{{url('/ab_next2')}}">
                <div class="btn btn-warning">
                    Next
                </div>
            </a>

        </div>

        <!-- code end -->

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

    const crm_owner_address = () => {
        let crm_owner_address = document.querySelector('.mimi');
        let y = crm_owner_address.classList.contains('d-none');
        console.log(y);
        if (y) {
            crm_owner_address.classList.remove('d-none');
        } else {
            crm_owner_address.classList.add('d-none');
        }
    }
</script>

@endsection