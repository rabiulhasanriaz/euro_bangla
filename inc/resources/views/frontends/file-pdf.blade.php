@extends('frontends.master')

@section('content_section')
<div class="container">
        <div class="row"  style="text-align:justify;min-height: 200px;">
            <!--left-->
            <div class="col-md-12 left-blog-info-w3layouts-agileits text-left">
                <div class="blog-grid-top">
                </div>

                <table id="" class="table table-striped">
                    @if(!empty($pdfs))
                    @foreach($pdfs as $pdf)
                    <tr>
                        <td> >> </td>
                        <td>{{ $pdf->title }}</td> 
                        <td>
                            <a href="{{ asset($pdf->pdf) }}" download>Download</a>
                            |
                            <a href="{{ asset($pdf->pdf) }}" target="_blank">View</a>
                        </td>
                    </tr>
                   @endforeach  
                    @endif
                </table>
            </div>


        </div>
    </div>
@endsection

@section('custom_style')
<link rel="stylesheet" href="{{ asset('assets') }}/css/chosen.min.css"/>
<link rel="stylesheet" href="{{ asset('assets') }}/frontends/css/registetion-form.css?v=1.1" type="text/css" media="all" />
<style type="text/css">
    .table th, .table td {
        padding: 0;
    }
</style>
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
  



