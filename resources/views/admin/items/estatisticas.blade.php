@extends('admin.layouts.master')
@section('content')
    {{--<script src="https://raw.githubusercontent.com/nnnick/Chart.js/master/dist/Chart.bundle.js"></script>--}}
    {{--{!! json_encode($devlist) !!}--}}
{{--    {!! $devlist !!}--}}
    {{--<div id="teste"></div>--}}
    <canvas id="myChart" width="400" height="200"></canvas>{{-- Onde fixa -se o grafico--}}
    <script src="{{ url('js')}}/encomendas.js"></script>

@endsection