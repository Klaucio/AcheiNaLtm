@extends('admin.layouts.client_master')
@section('title', 'Página Inicial')
@section('banner')
    @parent
    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false"
         xmlns="http://www.w3.org/1999/html">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(11).jpg'); background-repeat: no-repeat; background-size: cover;">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">20 Photos to inspire you to visit Tatra Mountains</h1></li>
                        <li>
                            <p>Best places you should see, traditional dishes that you have to try</p>
                        </li>
                        <li>
                            <a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-info btn-lg" rel="nofollow">See more!</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.First slide-->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">10 Reasons you should spend winter holiday in mountains </h1>
                        </li>
                        <li>
                            <p>Best atractions and winter sports!</p>
                        </li>
                        <li>
                            <a target="_blank" href="http://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-info btn-lg" rel="nofollow">Read more</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Slides/img%20(97).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Weekend in the nature - the best way to relax</h1></li>
                        <li>
                            <p>8 Reasons why you need to spend more time in nature</p>
                        </li>
                        <li>
                            <a target="_blank" href="http://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg" rel="nofollow">Read more</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <br>
@endsection
{{--fim do banner/slide--}}
@section('content'){{--Conteúdo da Página--}}
    <div class="container">
        <div class="row">
            <!--First columnn-->
            @foreach($items as $key => $value)
            <div class="col-lg-4 justify-content-center">
                <!--Card-->
                <div class="card wow fadeIn achei" data-wow-delay="0.2s">

                    <!--Card image-->
                    <div class="view hm-white-slight center">
{{--                        <img src="{{ asset('/img/report_lost_1.png') }}"  class="img-fluid" alt="">--}}
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">



                        <div class="info">
                            <h4 class="card-title title"><strong>{{ $value->designacao }}
                                    <span class="label label-default label-pill pull-right"></span></strong></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>


                            <ul>
                                {{--<li style="width:33%;">1 103 <span class="fa fa-envelope"></span></li>--}}
                                {{--<li style="width:34%;">3 <span class="fa fa-question"></span></li>--}}
                                <li style="width:33%;"><span><a href="#" class="btn btn-info">Read more</a></span></li>
                            </ul>

                        </div>
                        <div class="social">
                            <ul>
                                <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.Card content-->
                    {{--<div class="overlay">--}}
                        {{--<div class="text">Hello World</div>--}}
                    {{--</div>--}}

                </div>
                <!--/.Card-->
            </div>
            @endforeach
            <!--First columnn-->
        </div>
    </div>
    <!--/.Content-->
    @include('auth.user_register_modal')
    @include('auth.login_modal')
@endsection