@extends('layouts.master')
@section('title')
<title>Create Campaign</title>
@endsection
@section('content')

<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Content start-->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h5>Email Campaings</h5>
        <div class="d-flex justify-content-between">
            <!-- flex child-1 -->
            <div class="ms-3 mb-5 fw-bold" style="margin-left: 500px!important;">What type of Campaign would you like to create?
              </div>

            <!-- flex Child-2 -->
            <div class="me-3">
                <div class="btn mb-5" style="background: #fd7553; width: 200px;">
                    <a href="{{url('/create_campaign')}}" data-bs-toggle="modal" data-bs-target="#search_toggle" style="color: white !important; font-size: 16px!important;">Create Campaign
                    </a></div>
            </div>
        </div>

        <!-- row class start -->
        <div class="row mb-5">

            <div class="col-md-3 col-lg-3 mb-5 all_campaign" onmouseover="mouseOver()" onmouseleave="mouseLeave()" data-bs-toggle="modal" data-bs-target="#filtering">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>Regular Email</b></h5>

                    </div>
                 
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text d-block" style="color: black;" id="create_none" >Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    <div class="btn btn-warning mb-4 d-none" id="create_new" style="width: 150px!important; margin: 0 auto;">Create New</div>
                   
                </div>
            </div>


            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>A/B Testing</b></h5>

                    </div>
                   
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text " style="color: black;">Create two different versions of your email campaign to see which one perform best.<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                  
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>RSS</b></h5>
                    </div>
                   
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text" style="color: black;">Let your contacts know whats new in your  website through campaigns without them visiting it.<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>Zoho Meeting</b></h5>

                    </div>
                   
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text" style="color: black;">Promote your webinars created in Zoho Meetingthrough email campaign.<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>GotoWebinar</b></h5>

                    </div>
                   
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text " style="color: black;">Create a regular email campaign to your GoTo Webinar account via email campaigns.
                             <span class="typcn typcn-warning-outline"></span></p>
                    </div>
                   
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>EventBrike</b></h5>

                    </div>
                   
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text " style="color: black;">Promote your events by sending invitation for the event hence increase your ticket sale .<span class="typcn typcn-warning-outline"></span></p>
                    </div> 
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>SurveyMonkey</b></h5>
                    </div>
                   
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text " style="color: black;">Measure customern satisfication, their product meeds and more with email survey campaign.<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b> ZohoSurvey</b></h5>

                    </div>
                   
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text " style="color: black;">Create a regular email campaign to your target audience.<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>ZohoBackstage</b></h5>

                    </div>
                    
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text " style="color: black;">Create exclusive events, promot it via campaigns and analyze repports. <span class="typcn typcn-warning-outline"></span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>Coupon</b></h5>

                    </div>
                   
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text " style="color: black;">Boost your bsales by generating coupons and sending it through email campaign.<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>Ecommerce</b></h5>
                    </div>
                  
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text " style="color: black;">Create an email campaign to engage with yourt customers and promote the products in your store.<span class="typcn typcn-warning-outline"></span></p>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-3 col-lg-3 mb-5 all_campaign">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><b>Zoho Forms</b></h5>
                    </div>
                    
                    <img class="img-fluid" src="../../assets/img/elements/13.jpg" style="height: 250px;  width: auto;" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-text " style="color: black;">Use our in-house to create hassle-free forms and send via email campaign.<span class="typcn typcn-warning-outline"></span></p>

                    </div> 
                </div>
            </div>


        </div>
        <!-- row class end -->

   <!--New Modal start-->
   <div class="modal fade" id="filtering" tabindex="-1" aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <h5 class="title text-warning mt-2">Create Campaign</h5>
                        <hr class="mb-5">
                        <form action="{{url('/post_create_campaign')}}" method="post" enctype="multipart/form-data" >
                            @csrf

                            <div id="" class="row g-3" onsubmit="return false">
                            <div class="row  col-md-10 mb-4 mt-2">
                                <label class="col-sm-4" for="select2Basic">Campaign Name <span class="text-warning">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="campaign_name" class="form-control" id="basic-default-company" placeholder="Enter Campaign Name" />
                                </div>
                            </div>



                            <div class="row  col-md-10 mb-5">
                                <label class="col-sm-4" for="select2Basic">Topic Name<span class="text-warning">*</span></label>
                                <div class="col-sm-8">
                                    <select class="select2 form-select">
                                        <option value="">Marketing</option>
                                        <option value="AK">Digital</option>
                                        <option value="WV">Social</option>
                                    </select>
                                </div>
                            </div>

                        
                            <div class="col-12  mt-4 " >
                                <button type="submit" class="btn btn-warning">Save and Proceed</button>
                               
                            </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

   <!--New Modal end-->

    </div>
    <!-- Content end-->
</div>
<!-- Content wrapper end -->

<script>

  const mouseOver=()=>{
    
   let create_over= document.querySelector('#create_none');
   console.log(create_over);
   create_over.classList.add('d-none');
   
   let create_down= document.querySelector('#create_new');
   console.log(create_down);
   create_down.classList.remove('d-none');

  }

   const mouseLeave=()=>{

   let create_over= document.querySelector('#create_none');
   console.log(create_over);
   create_over.classList.remove('d-none');
   
   
   let create_down= document.querySelector('#create_new');
   console.log(create_down);
   create_down.classList.add('d-none');

   }
  

</script>

@endsection