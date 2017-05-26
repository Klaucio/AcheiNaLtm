<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        {{ trans('quickadmin::admin.partials-header-title') }}
    </title>

    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0"
          name="viewport"/>
    <meta http-equiv="Content-type"
          content="text/html; charset=utf-8">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
          rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/font-awesome.min.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/bootstrap.min.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/components.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/quickadmin-layout.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/quickadmin-theme-default.css"/>
    <link rel="stylesheet"
          href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet"
          href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css"/>

    {{--//fields dinamicos--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>--}}
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

