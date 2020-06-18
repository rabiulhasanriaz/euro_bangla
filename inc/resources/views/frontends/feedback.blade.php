
@extends('frontends.master')

@section('content_section')
    
    

<section class="main-content-w3layouts-agileits">
    <div class="container">
        <div class="row"  style="text-align:justify;">
            <!--left-->
            <div class="col-md-12 left-blog-info-w3layouts-agileits text-left">
                <div class="blog-grid-top">
                    <div class="row">
                        <div class="container">
                            <div class="contact_grid_right">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session()->has('entry_success'))
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        {{ session()->get('entry_success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if (session()->has('err'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        {{ session()->get('err') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

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

                               <form action="{{ route('feedback') }}" method="post">
                                @csrf
                                  <div class="row contact_left_grid">
                                     <div class="col-md-6 con-left">
                                        <div class="form-group">
                                           <label for="validationCustom01 my-2">Name</label>
                                           <input class="form-control" type="text" name="name" placeholder="" required="">
                                        </div>
                                        <div class="form-group">
                                           <label for="exampleFormControlInput1">Email</label>
                                           <input class="form-control" type="email" name="email" placeholder="" required="">
                                        </div>
                                        <div class="form-group">
                                           <label for="validationCustom03 my-2">Subject</label>
                                           <input class="form-control" type="text" name="subject" placeholder="" required="">
                                        </div>
                                     </div>
                                     <div class="col-md-6 con-right">
                                        <div class="form-group">
                                           <label for="textarea">Message</label>
                                           <textarea id="textarea" placeholder="" name="message" required></textarea>
                                        </div>
                                        <input class="form-control" type="submit" value="Submit">
                                     </div>
                                  </div>
                               </form>
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