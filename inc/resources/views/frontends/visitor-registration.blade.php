@extends('frontends.master')

@section('content_section')

    <div class="main-w3ls">
    <div class="left-content left_content_igl">
        <div class="w3ls-content">
            <!-- logo -->
            <h2 class="text-uppercase">EURO BANGLA EDUCATIONAL EXPO Visitor Register</h2>


        </div>

    </div>
    <!---728x90--->
    <div class="right-form-agile">
        <!-- content -->
        <div class="sub-main-w3">
            @if (session()->has('visitor-registration'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session()->get('visitor-registration') }}
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
            <h3>Visitor Registration</h3>
            <p></p>
            <form action="{{ route('visitor-registration-submit') }}" method="post">
                @csrf()
                <div class="form-style-agile">
                    <label>Full Name:</label>
                    <div class="pom-agile">
                        <input placeholder="Full Name" name="name" type="text" required="">
                    </div>
                    @error('name')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>Name Of Organization You Represent:</label>
                    <div class="pom-agile">
                        <input placeholder="Organization Name" name="organization" type="text" required="">
                    </div>
                </div>
                <div class="form-style-agile">
                    <label>Sector:</label>
                        <select class="pom-agile" name="sector" required>
                            <option>Choose</option>
                            <option>Governmental</option>
                            <option>Diplomatic Mission</option>
                            <option>NGO</option>
                            <option>Educational Consultancy</option>
                            <option>Regulatory body</option>
                            <option>High school principal or representative</option>
                            <option>University personnel</option>
                            <option>Any other private organization</option>
                            <option>Any other public organization</option>
                        </select>
                        @error('sector')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-style-agile">
                    <label>E-mail Address:</label>
                    <div class="pom-agile">
                        <input placeholder="E-mail Address" name="email" type="email" required="">
                    </div>
                </div>
                <div class="form-style-agile">
                    <label>Phone Number:</label>
                    <div class="pom-agile">
                        <input placeholder="Phone Number" name="phone" type="number" id="password1" required="">
                    </div>
                    @error('phone')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>WhatsApp Number:</label>
                    <div class="pom-agile">
                        <input placeholder="WhatsApp Number" name="whatsapp" type="number" id="password2" required="">
                    </div>
                </div>
                <div class="sub-agile">
                    <input type="checkbox" id="brand1" name="agree" value="1" required="">
                    <label for="brand1">
                        <span></span>Do you agree to be contacted by the participating universities for promotional purposes via phone or e-mail? </label>
                    @error('agree')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
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
<link rel="stylesheet" href="{{ asset('assets') }}/frontends/css/registetion-form.css?v=1.3" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('assets') }}/css/chosen.min.css"/>
<link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datepicker3.min.css"/>
<style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
        margin: 0;
}
</style>
@endsection
@section('custom_script')
<script src="{{ asset('assets') }}/js/moment.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('assets') }}/js/chosen.jquery.min.js"></script>
<script>
    $('.chosen-select').chosen({allow_single_deselect: true});
    $('#dateofBirth').datepicker({
        autoclose: true,
        todayHighlight: true
    });
</script>
@endsection


@section('custom_style')
    
@endsection

@section('custom_script')
    
@endsection
