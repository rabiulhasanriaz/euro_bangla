@extends('frontends.master')

@section('content_section')
    
    @include('frontends.partials.banner')

<section class="main-content-w3layouts-agileits">
    <div class="container">
        <div class="row"  style="text-align:justify;">
            <!--left-->
            <div class="col-md-12 left-blog-info-w3layouts-agileits text-left">
                <div class="blog-grid-top">
                    {!! $page_content->content !!}
                </div>


            </div>


        </div>
    </div>
</section>


@endsection