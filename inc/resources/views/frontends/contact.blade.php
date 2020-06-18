
@extends('frontends.master')

@section('content_section')
    
    

<section class="main-content-w3layouts-agileits">
    <div class="container">
        <div class="row"  style="text-align:justify;">
            <!--left-->
            <div class="col-md-12 left-blog-info-w3layouts-agileits text-left">
                <div class="blog-grid-top">
                    <div class="ad-inf-sec bg-light">
                        <div class="container-fluid">
                           <div class="address row">
                              <div class="col-lg-4 address-grid">
                                 <div class="row address-info">
                                    <div class="col-md-4 address-left text-center">
                                       <i class="far fa-map"></i>
                                    </div>
                                    <div class="col-md-8 address-right text-left">
                                       <h6>Address</h6>
                                       <p> California, USA
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 address-grid">
                                 <div class="row address-info">
                                    <div class="col-md-4 address-left text-center">
                                       <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="col-md-8 address-right text-left">
                                       <h6>Email</h6>
                                       <p>Email :
                                          <a href="mailto:example@email.com"> mail@example.com</a>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 address-grid">
                                 <div class="row address-info">
                                    <div class="col-md-4 address-left text-center">
                                       <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="col-md-8 address-right text-left">
                                       <h6>Phone</h6>
                                       <p>+1 234 567 8901</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>




                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-4 mb-3">
                              <div class="contact-map inner-sec">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
                              </div>
                           </div>
                           <div class="col-md-4 mb-3">
                              <div class="contact-map inner-sec">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
                              </div>
                           </div>
                           <div class="col-md-4 mb-3">
                              <div class="contact-map inner-sec">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
                              </div>
                           </div>
                        </div>
                     </div>
                </div>


            </div>


        </div>
    </div>
</section>


@endsection


@section('custom_style')
    <link href="{{ asset('assets') }}/frontends/css/contact.css" rel='stylesheet' type='text/css' />
@endsection