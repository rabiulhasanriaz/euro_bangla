@extends('frontends.master')

@section('content_section')

    <div class="main-w3ls">
    <div class="left-content left_content_igl">
        <div class="w3ls-content">
            <!-- logo -->
            <h2 class="text-uppercase">EURO BANGLA EDUCATIONAL EXPO Student Register</h2>


        </div>

    </div>
    <!---728x90--->
    <div class="right-form-agile">
        <!-- content -->
        <div class="sub-main-w3">
            @if (session()->has('student_entry_reg_success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session()->get('student_entry_reg_success') }}
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
            <h3>Student Registration</h3>
            <p></p>
            <form action="{{ route('student-register') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-style-agile">
                    <label>Student's Full Name:</label>
                    <div class="pom-agile">
                        <input  placeholder="Full Name" name="full_name" type="text" required="">
                    </div>
                    @error('full_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>Date Of Birth:</label>
                    <div class="pom-agile">
                        <input  placeholder="Date Of Birth" autocomplete="off" name="date_of_birth" id="dateofBirth" type="text" required="" data-date-format='yyyy-mm-dd'>
                    </div>
                    @error('date_of_birth')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>City Of Residence: </label>
                    <div class="pom-agile">
                        <input   placeholder="City of Residence" name="city_of_residence" type="text" required="">
                    </div>
                    @error('city_of_residence')
                        <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                </div>
                <div class="form-style-agile">
                    <label>Which University Or High School Do You Attend? </label>
                    <div class="pom-agile">
                        <input  placeholder="School Do You Attend" name="institute" type="text" required="">
                    </div>
                    @error('institute')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>Phone Number: </label>
                    <div class="pom-agile">
                        <input  placeholder="Phone Number" name="phone_number" type="text" required="">
                    </div>
                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>WhatsApp Number:  </label>
                    <div class="pom-agile">
                        <input  placeholder="WhatsApp Number:" name="whats_app_number" type="text" required="">
                    </div>
                    @error('whats_app_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-style-agile">
                    <label>E-mail Address:  </label>
                    <div class="pom-agile">
                        <input placeholder="E-mail Address:" name="email" type="email" required="">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                </div>
                <div class="form-style-agile">
              <label for="academic_interest">Academic Interest:</label>
              <select id="academic_interest" name="academic_interest" class="pom-agile chosen-select" >

                <option selected>Choose...</option>
                @foreach ($group_aca_inte as $cat)
                    <optgroup label="{{ @$cat->first()->catName->area_cat_name }}">
                        @foreach ($cat as $area)
                            <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                        @endforeach
                    </optgroup> 
                @endforeach
            <!-- <option selected>Choose...</option>
            <option>Logic</option>
            <option>Mathematics</option>
            <option>Pure mathematics</option>
            <option>Applied mathematics</option>
            <option>Statistics</option>
            <option>Systems science</option>
            <option>Professions and applied sciences</option>
            <option>Agriculture</option>
            <option>Architecture and design</option>
            <option>Business</option>
            <option>Divinity</option>
            <option>Education</option>
            <option>Engineering and technology</option>
            <option>Environmental studies and forestry</option>
            <option>Family and consumer science</option>
            <option>Human physical performance and recreation</option>
            <option>Journalism, media studies and communication</option>
            <option>Law</option>
            <option>Library and museum studies</option>
            <option>Medicine	</option>
            <option>Military sciences</option>
            <option>Public administration</option>
            <option>Public policy</option>
            <option>Social work</option>
            <option>Transportation</option>
            <option>See also</option>
            <option>Notes</option>
            <option>References</option>
            <option>External links</option> -->
          </select>
          @error('academic_interest')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-style-agile">
          <label for="preferred_course">Preferred Level Of Studies:</label>
          <select id="preferred_course" name="preferred_course" class="pom-agile">
            <option selected>Choose...</option>
            <option >Associate</option>
            <option >Bachelors</option>
            <option >Master</option>
            <option >Doctoral/PhD</option>
            <option >Certificate Course</option>
            <option >Foundation Course</option>
            <option >Language Course</option>
            <option >Other</option>
          </select>
        </div>
        <div class="form-style-agile ">
            <label for="">Upload Your CV</label>
            <div class="pom-agile">
                <input type="file" name="cv" accept=".pdf,.doc,.docs,.docx" value="">
            </div>
            @error('cv')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-style-agile">
            <label for="">Do you agree to be contacted by the participating universities for promotional purposes via phone or e-mail</label> <br>
            <label class="switch">
                <input type="checkbox" required value="1" name="aggreement">
                <span class="slider round"></span>
            </label>
            @error('aggreement')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

                <!-- <div class="sub-agile">
                    <input type="checkbox" id="brand1" value="">
                    <label for="brand1">
                        <span></span>I Accept to the Terms &amp; Conditions</label>
                </div> -->
                <input type="submit" value="Submit">
            </form>
            <!-- social icons -->
            
            <!-- //social icons -->
        </div>
    </div>
</div>

@endsection

@section('custom_style')
<link rel="stylesheet" href="{{ asset('assets') }}/frontends/css/registetion-form.css?v=1.1" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('assets') }}/css/chosen.min.css"/>
<link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datepicker3.min.css"/>
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
