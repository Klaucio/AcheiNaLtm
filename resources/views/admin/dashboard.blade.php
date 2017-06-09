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
                        <div class="view overlay hm-white-slight center">
                            <img src="{{ asset('/img/report_lost_1.png') }}"  class="img-fluid" alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <!--Title-->
                            <h4 class="card-title"><strong>{{ $value->designacao }}
                                    <span class="label label-default label-pill pull-right"></span></strong></h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-info">Read more</a>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
            @endforeach
        </div>
    </div>`
    <div class="row">
        <center>
            {{$items->render()}}
        </center>

    </div>
@endsection