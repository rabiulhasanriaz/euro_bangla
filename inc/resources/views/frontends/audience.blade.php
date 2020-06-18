
@extends('frontends.master')

@section('content_section')
    
    @include('frontends.partials.banner')

<section class="main-content-w3layouts-agileits">
    <div class="container">
        <div class="row"  style="text-align:justify;">
            <!--left-->
            <div class="col-md-12 left-blog-info-w3layouts-agileits text-left">
                <div class="blog-grid-top">
                    <div class="row">
                        @if(!empty($students))
                            @foreach($students as $student)
                                <div class="col-md-4 left-blog-info-w3layouts-agileits text-left mb-2">
                                    <div class="blog-grid-top border p-2">
                                        <h3><span>Name : </span>{{ $student->full_name }}	</h3>
                                        <p class="border mb-1 pl-1"><span style="font-weight:bold;">City : </span>{{ $student->city_of_residence }} </p>
                                        <p class="border mb-1 pl-1"><span style="font-weight:bold;">Academic Interes : </span>{{ $student->academic_interest }} </p>
                                        <p class="border mb-1 pl-1"><span style="font-weight:bold;">level of studies	: </span>{{ $student->preferred_course }} </p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>


            </div>


        </div>
    </div>
</section>


@endsection