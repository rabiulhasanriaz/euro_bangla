@extends('frontends.master')

@section('content_section')
<div class="main-w3ls">
    <div class="left-content left_content_igl">
        <div class="w3ls-content">
            <!---728x90--->
            <h2 class="text-uppercase">EURO BANGLA EDUCATIONAL EXPO Exhibitor Register</h2>
            
        </div>
    </div>
    <!---728x90--->
    <div class="right-form-agile">
        <!-- content -->
        <div class="sub-main-w3">
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
            <h3>Exhibitor Registration</h3>
            
            <form action="{{ route('institute-register') }}" method="post">
                @csrf
                <div class="form-style-agile">
                    <label>Institution's Name:</label>
                    <div class="pom-agile">
                        <input placeholder="Institution's Name" name="name" type="text" required="">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>Country</label>
                    <select class="pom-agile chosen-select" name="country">
                        <option value="">Select one</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                        @endforeach
                    </select>
                    @error('country')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>Institutions' Location</label>
                    <div class="pom-agile">
                        <input placeholder="Institution's Address" name="address" type="text" required="">
                    </div>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>Website</label>
                    <div class="pom-agile">
                        <input placeholder="Website" name="website" type="text" id="password1" required="">
                    </div>
                    @error('website')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>Full Name Of Contact Person</label>
                    <div class="pom-agile">
                        <input placeholder="Full Name Of Contact Person" name="person" type="text" id="password1" required="">
                    </div>
                    @error('person')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>Position Of Contact Person</label>
                        <select name="position" class="pom-agile chosen-select" id="position_value">
                            <option value="">Select One</option>
                            <option>Director: International Office</option>
                            <option>Director: International Recruitment</option>
                            <option>Global Outreach Officer / Manager</option>
                            <option>Recruitment Officer for South Asia</option>
                            <option>Marketing Officer / Manager</option>
                            <option>Communications Officer / Manager</option>
                            <option>International Office Manager</option>
                            <option>Vice-Dean for International Affairs</option>
                            <option>Vice-Rector for International Affairs</option>
                            <option>Tenured Instructor</option>
                            <option id="pos1">Any other executive administrator</option>
                            <option id="pos2">Any other administrator</option>
                        </select>
                </div>
                <div class="form-style-agile" style="display: none;" id="position_specify">
                    <label>Please Specify:</label>
                    <div class="pom-agile">
                        <input placeholder="Position Name " name="position" type="text" id="password2">
                    </div>
                </div>
                <div class="form-style-agile">
                    <label>Phone Number:</label>
                    <div class="pom-agile">
                        <input placeholder="Phone Number: " name="number" type="text" id="password2" required="">
                    </div>
                    @error('number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>E-mail Address: </label>
                    <div class="pom-agile">
                        <input placeholder="E-mail Address " name="email" type="text" id="password2" required="">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>Alternative E-mail Address </label>
                    <div class="pom-agile">
                        <input placeholder="Alternative E-mail Address " name="alter_email" type="text" id="password2" required="">
                    </div>
                </div>
                <div class="form-style-agile">
                    <label for="">Would you like to join the event as a sponsor</label> <br>
                    <label class="switch">
                        <input type="checkbox" id="sponsor" name="sponsor_agree" value="1">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-style-agile" style="display: none;" id="sponsor_package">
                <label for="">Would you like to join the event as a sponsor</label> <br>
                <select id="inputState" class=" pom-agile" name="sponsor_cat">
                    <option selected>Choose...</option>
                    <option value="1">- Golden Sponsor</option>
                    <option value="2">- Silver Sponsor </option>
                    <option value="3">- Regular Sponso </option>
                </select>
            </div>
            <div class="form-style-agile">
                <label for="">Do you agree to be contacted by one of our representatives via phone or e-mail</label> <br>
                <label class="switch">
                    <input type="checkbox" name="contact_representative" value="1">
                    <span class="slider round"></span>
                </label>
            </div>



                <input type="submit" value="Submit">
            </form>
            <!-- social icons -->
            
            <!-- //social icons -->
        </div>
    </div>
</div>
@endsection

@section('custom_style')
<link rel="stylesheet" href="{{ asset('assets') }}/css/chosen.min.css"/>
<link rel="stylesheet" href="{{ asset('assets') }}/frontends/css/registetion-form.css?v=1.1" type="text/css" media="all" />
@endsection
@section('custom_script')
<script src="{{ asset('assets') }}/js/chosen.jquery.min.js"></script>
<script>
$('.chosen-select').chosen({allow_single_deselect: true});

$(document).ready(function(){
  
  $("#sponsor").click(function(){
    $("#sponsor_package").toggle();
  });


    $('#position_value').change(function(){
        if(($("#position_value").val() == "Any other executive administrator") || ($("#position_value").val() == "Any other administrator")) {
            $("#position_specify").show();
        } else {
            $("#position_specify").hide();
        }
        
    });
});


     

</script>
@endsection


