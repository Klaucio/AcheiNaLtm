@extends('admin.layouts.master')

@section('content')

    {{--{{ trans('quickadmin::admin.dashboard-title') }}--}}

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
    <div class="row">
        <center>
{{--            {{$items->render()}}--}}
        </center>

    </div>
@endsection