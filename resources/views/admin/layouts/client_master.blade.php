@include('admin.partials.client_header')
@section('title')
    @yield('title') {{--Para atribuição do título correspondente a cada Tela--}}
@endsection
@yield('banner')
@yield('content')
@include('admin.partials.client_footer')
@extends('admin.partials.client_javascripts')
@yield('insert_javascript')
@extends('admin.partials.footer')
