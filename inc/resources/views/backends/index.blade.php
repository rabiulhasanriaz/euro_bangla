@extends('backends.master')

@section('dashboard_menu_class','active')
@section('page_location')
<ul class="breadcrumb">
	<li>
		<i class="ace-icon fa fa-home home-icon"></i>
		<a href="#">Dashboard</a>
	</li>
    <li>
        overview &amp; stats
    </li>
</ul><!-- /.breadcrumb -->
@endsection


@section('main_content')
	<div class="row">
        <div class="space-6"></div>
        @include('backends.partials.session_messages')

        
        <br>
        <br>

        
	</div><!-- /.row -->

@endsection

@section('custom_style')
    <style>
        .infobox-data a {
            font-size: 18px;
            text-decoration: none;
        }
        .infobox-data a:hover {
            cursor: default;
        }
        .infobox-content a {
            font-size: 14px;
            text-decoration: none;
        }
        .infobox-content a:hover {
            cursor: pointer;
        }
        .infobox {
            text-align: center;
            padding: 3px 3px 3px 9px;
        }

        .infobox-link {
            color: #fff;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
        }
        .infobox-link>.infobox-data {
            text-align: center;
            padding: 0;
        }
        .infobox-link a {
            color: #ffffff;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
        }
        .infobox-link.infobox-green {
            background-color: #4CAF50;
            border: 2px solid green !important;
        }
        .infobox-link.infobox-green:hover {
            background-color: #046508;
        }
        .infobox-link.infobox-blue {
            background-color: #008CBA;
            border: 2px solid blue !important;
        }
        .infobox-link.infobox-blue:hover {
            background-color: #0e4eba;
        }
        .infobox-link.infobox-red {
            background-color: #b5342b;
            border: 2px solid red !important;
        }
        .infobox-link.infobox-red:hover {
            background-color: #f4180b;
        }
        .infobox-link.infobox-black {
            background-color: #555555;
            border: 2px solid black !important;
        }
        .infobox-link.infobox-black:hover {
            background-color: #343434;
        }
        .infobox-link .infobox-content a:hover{
            font-size: 16px;
        }
        .infobox-link .infobox-content a {

        }
    </style>
@endsection
