<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        {{ trans('quickadmin::admin.partials-header-title') }}
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type"  content="text/html; charset=utf-8">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet"  href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet"  href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css"/>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet"  href="{{ url('quickadmin/css') }}/font-awesome.min.css"/>
    <link rel="stylesheet"  href="{{ url('quickadmin/css') }}/bootstrap.min.css"/>
    <link rel="stylesheet"  href="{{ url('quickadmin/css') }}/components.css"/>
    <link rel="stylesheet"  href="{{ url('quickadmin/css') }}/quickadmin-layout.css"/>
    <link rel="stylesheet"  href="{{ url('quickadmin/css') }}/quickadmin-theme-default.css"/>
    {{--<link href="{{ url('css')}}/bootstrap.min.css" rel="stylesheet">--}}

    <!-- Material Design Bootstrap -->
    <link href="{{ url('css')}}/mdb.min.css" rel="stylesheet">
    <link href="{{ url('css')}}/style.css" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}


    <!-- Your custom styles (optional) -->

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/

        html,
        body {
            height: 100%;
        }
        /* Navigation*/

        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #304a74;
        }

        footer.page-footer {
            background-color: #304a74;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/

        .carousel {
            height: 50%;
        }
        .table td {
             border-top: none !important;
             border-left: none !important;
             size: 30px;
         }

        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
        }

        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }

        /*Caption*/

        .flex-center {
            color: #fff;
        }
    </style>

</head>

<body class="page-header-fixed">
{{--<script>--}}
    {{--$(function () {--}}
        {{--var scntDiv = $('#dynamicDiv');--}}

        {{--$(document).on('click', '#addInput', function () {--}}
            {{--$('<p>'+--}}
                    {{--'<input type="text" name="designacao" id="inputeste" size="30" value="" placeholder="" />   '+--}}
                    {{--'<a class="btn btn-danger" href="javascript:void(0)" id="remInput">'+--}}
                    {{--'<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> '+--}}
                    {{--''+--}}
                    {{--'</a>'+--}}
                    {{--'</p>').appendTo(scntDiv);--}}
            {{--return false;--}}
        {{--});--}}

        {{--$(document).on('click', '#remInput', function () {--}}
            {{--$(this).parents('p').remove();--}}
            {{--return false;--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
{{--<script>--}}
    {{--$(document).ready(function(){--}}
        {{--var i=1;--}}
        {{--$('#add_input').click(function(){--}}
            {{--i++;--}}
            {{--$('#dynamic').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter Your Name" class="form-control name_list"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Remove</button></td></tr>');--}}
        {{--});--}}
        {{--$(document).on('click', '.btn_remove', function(){--}}
            {{--var button_id = $(this).attr("id");--}}
            {{--$('#row'+button_id+'').remove();--}}
        {{--});--}}
        {{--$('#submit').click(function(){--}}
            {{--$.ajax({--}}
                {{--url:'{!!URL::to('testa')!!}',--}}
                {{--method:"POST",--}}
                {{--data:$('#add_me').serialize(),--}}
                {{--success: function(data)--}}
                {{--{--}}
                    {{--alert(data);--}}
                    {{--$('#add_me')[0].reset();--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
<body class="page-header-fixed">

