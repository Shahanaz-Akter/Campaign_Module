@extends('layouts.master')
@section('title')
<title>Contacts</title>
@endsection
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="ms-5">
            <!-- flex child-1 -->
            <div class="mb-5  text-black">Contacts > ManageLists > MySample > ListAdd > Contacts</div>
        </div>


        <div class="ms-5">
            <!-- flex child-1 -->
            <div class="ms-3 mb-5 text-capitalize text-black" style="font-size: 20px!important">Add Contact</div>
        </div>

        <!-- row class start -->
        <div class="mb-5">

            <div class="d-flex justify-content-around">
                <div class="btn btn-info" onclick="contact_infor()">Contact Info</div>
                <div class="btn btn-primary" onclick="contact_basic_detail()">Contact Basic Details</div>
                <div class="btn btn-secondary" onclick="additional_detail()">additional Details</div>
                <div class="btn btn-primary" onclick="custom_info()">Custom Info</div>
                <div class="btn btn-warning" onclick="account_info()">Account Info</div>
                <div class="btn btn-danger" onclick="social_infor()">Social Information</div>
            </div>
            <form action="" method="post">
                @csrf
                <div class="row">
                    <!-- Contact Info -->
                    <section class="mt-4 contact_info">
                        <div class="mb-4">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Contact Email</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <input type="text" class="form-control" placeholder="Enter Contact Email" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Mobile</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Contact Basic Details-->
                    <section class="mt-4 d-none contact_basic_details">
                        <div class="mb-4">

                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Title</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <input type="text" class="form-control" placeholder="Enter Contact Email" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">First Name</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Last Name</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Company Name</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Phone</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <!-- additional_Info-->
                    <section class="mt-4 d-none additional_Info">
                        <div class="mb-4">

                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Secondary Email Address</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <input type="text" class="form-control" placeholder="Enter Contact Email" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Address</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">City</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">State</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                    </div>
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Zip Code</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Country</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Website Address</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="alignment-email" class="form-control" placeholder="Enter Mobile" aria-label="" aria-describedby="" />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Note</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <div class="input-group input-group-merge">
                                        <textarea type="text" class="form-control" value="Configure Content"> </textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <!-- More Details -->
                    <section class="mt-4 d-none more_details">
                        <div class="mb-4">

                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Secondary Email Adrress</label>
                                <div class="col-sm-9 col-lg-9 col-xxl-9">
                                    <input type="text" id="alignment-username" class="form-control" placeholder="sefalibegumimo@gmail.com" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="Contact_Source">Contact Source</label>
                                <div id="Contact_Source" class="col-sm-9 col-lg-9 col-xxl-9">


                                    <select id="formtabs-country" class="select2 form-select">
                                        <option value="">---Select---</option>
                                        <option value="">sefalibegumimo@gmail.com</option>
                                        <option value="Australia">mimo@gmail.com</option>
                                        <option value="United Arab Emirates">imo@gmail.com</option>
                                    </select>
                                    <div class="h-100" id="parent_div">
                                        <div class="text-center text-muted border-1 bg-white" onclick="sender()">Add New Source</div>
                                        <div class="h-50" id="divv">
                                            <!-- Create sender address label and div using JS -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Address</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">City</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">State</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Zip Code</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Address</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Country</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Website Address</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />

                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">Note</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <div class="input-group input-group-merge">
                                    <textarea type="text" class="form-control" value="Configure Content"> </textarea>
                                </div>
                            </div>
                        </div>
                </div>
                </section>


                <!-- Social Info -->
                <section class="mt-4 d-none social_info">
                    <div class=" mb-4">

                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Twitter Handle</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <input type="text" id="alignment-username" class="form-control" placeholder="sefalibegumimo@gmail.com" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Facebook Handle</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <input type="text" id="alignment-username" class="form-control" placeholder="sefalibegumimo@gmail.com" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-email">LinkedIn Handle</label>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="alignment-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="alignment-email2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- custom_Info-->
                <section class="mt-4 d-none custom_Info">
                    <div class="mb-4">

                        <div class="mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Secondary Email Address</label>
                            <i></i>
                            <br>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                Customize contact information by creating custom fields to store extra data.
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Account_Info-->
                <section class="mt-4 d-none account_Info">
                    <div class="mb-4">

                        <div class="mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="alignment-username">Account_Info</label>
                            <i></i>
                            <br>
                            <div class="col-sm-9 col-lg-9 col-xxl-9">
                                Customize contact information by creating custom fields to store extra data.
                            </div>
                        </div>
                    </div>
                </section>



                <section class="mt-4">
                    <div class="mb-4">

                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="Contact_Source">Contact Source</label>
                            <div id="Contact_Source" class="col-sm-9 col-lg-9 col-xxl-9">


                                <select id="formtabs-country" class="select2 form-select">
                                    <option value="">---Select---</option>
                                    <option value="">sefalibegumimo@gmail.com</option>
                                    <option value="Australia">mimo@gmail.com</option>
                                    <option value="United Arab Emirates">imo@gmail.com</option>
                                </select>
                                <div class="h-100" id="parent_div">
                                    <div class="text-center text-muted border-1 bg-white" onclick="sender()">Add New Source</div>
                                    <div class="h-50" id="divv">
                                        <!-- Create sender address label and div using JS -->
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="Contact_Source">Subscription Types</label>
                            <div id="Contact_Source" class="col-sm-9 col-lg-9 col-xxl-9">
                                <select id="formtabs-country" class="select2 form-select">
                                    <option value="">---Select---</option>
                                    <option value="">Marketing</option>
                                    <option value="Australia">Unsubscribed</option>
                                    <option value="United Arab Emirates">UnMarketing</option>
                                </select>
                            </div>

                        </div>

                        

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Overwrite the subscription type for the existing contacts
                            </label>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-lg-3 col-xxl-3  text-sm-end" for="Contact_Source"> Associate contacts with the following Topics</label>
                            <div id="Contact_Source" class="col-sm-9 col-lg-9 col-xxl-9">
                                <select id="formtabs-country" class="select2 form-select">
                                    <option value="">---Search for Topics---</option>
                                    <option value="">Marketing</option>
                                    <option value="Australia">Unsubscribed</option>
                                    <option value="United Arab Emirates">UnMarketing</option>
                                </select>
                            </div>
                        </div>



                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            This contact has given consent to receive emails relevant to my product
                            </label>
                        </div>


                        





                    </div>
                </section>

        </div>





        <!-- <hr class="my-4 mx-n4" /> -->
        <div class="pt-4">
            <div class="row justify-content-center">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary me-sm-2 me-1">Add</button>
                    <button type="" class="btn btn-primary me-sm-2 me-1">save and New</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    </form>

</div>
</div>


<script>
    let contact_info = document.querySelector('.contact_info');
    let contact_basic_details = document.querySelector('.contact_basic_details');
    let more_details = document.querySelector('.more_details');
    let social_info = document.querySelector('.social_info');


    const contact_basic_detail = () => {

        console.log(contact_basic_details);
        let contact_basic_details_tr = contact_basic_details.classList.contains('d-none');
        console.log(contact_basic_details_tr);

        if (contact_basic_details_tr) {
            contact_basic_details.classList.remove('d-none');
            contact_info.classList.add('d-none');
            more_details.classList.add('d-none');
            social_info.classList.add('d-none');

        }


    }

    const more_detail = () => {

        console.log(more_details);
        let more_details_tr = more_details.classList.contains('d-none');
        console.log(more_details_tr);

        if (more_details_tr) {
            more_details.classList.remove('d-none');
            contact_info.classList.add('d-none');
            contact_basic_details.classList.add('d-none');
            social_info.classList.add('d-none');

        }
    }

    const social_infor = () => {

        console.log(social_info);
        let social_info_tr = social_info.classList.contains('d-none');
        console.log(social_info_tr);

        if (social_info_tr) {
            social_info.classList.remove('d-none');
            contact_info.classList.add('d-none');
            more_details.classList.add('d-none');
            contact_basic_details.classList.add('d-none');

        }
    }

    const contact_infor = () => {

        console.log(contact_info);
        let contact_info_tr = contact_info.classList.contains('d-none');
        console.log(contact_info_tr);

        if (contact_info_tr) {
            contact_info.classList.remove('d-none');
            more_details.classList.add('d-none');
            social_info.classList.add('d-none');
            contact_basic_details.classList.add('d-none');
        }
    }
</script>


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
</script>



@endsection