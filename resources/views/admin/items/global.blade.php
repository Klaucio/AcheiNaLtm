@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
                        <h1>{{ trans('quickadmin::admin.users-create-create_user') }}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {!! implode('', $errors->all('
                        <li class="error">:message</li>
                        ')) !!}
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <!--Form with header-->
    <div class="card">
        <div class="card-block">

            <!--Header-->
            <div class="form-header  primary-color-dark darken-4">
                <h3>
                     Gráfico Geral Perdidos

                    <div class="row">
                        <div class="col-md-2">
                            <span><a href="items" class="btn btn-info">Encomendas</a></span>
                        </div>
                        <div class="col-md-2">
                            <span><a href="global" class="btn btn-info">Global</a></span>
                        </div>
                    </div>
                </h3>
            </div>
            <div class="row">

                <div class="container">
                    <div class="row">
                        </br>
                        </br>



                        <div class="col-md-6 col-md-offset-3">
                            <br/>

                            <div class="col-md-8">
                                <div class="sample-chart-wrapper">
                                    <canvas id="pie-chart-sample" width="100px"></canvas>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div style="margin-top:50px; width: 100%; height: 100px; border: 1px solid black;">
                                    <div class="" style="padding-top: 10px;">

                                        <div  style="background-color: #5AD3D1; margin-left: 10px; height: 30px;">
                                            Encomendas Perdidas
                                        </div>
                                    </div>

                                    <div class="" style="padding-top: 10px;">
                                        <div  style="background-color: #F7464A; margin-left: 10px; height: 30px;">
                                            Bagagens Perdidas
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>


                    </div>
                </div>


            </div>



        </div>

        <!--Footer-->
        <div class="modal-footer">
            {{--<div class="text-center">--}}
            {{--<button class="btn ">Login</button>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<div class="text-center">--}}
            {{--{!! Form::submit(trans('quickadmin::admin.users-create-btncreate'), ['class' => 'btn btn-deep-purple']) !!}--}}{{--btn btn-primary--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>

    </div>
    <!--/Form with header-->


@endsection

@section('javascript')
    {{--<script type="text/javascript" src="{{ url('js')}}/Chart.min.js"></script>--}}

    <script src="{{ url('js')}}/Global_Chart.js"></script>
    {{--<script src="{{url('js1/jquery-3.1.1.min.js')}}"></script>--}}
    {{--<script src="{{url('js1/bootstrap.min.js')}}"></script>--}}
    {{--<script src="{{url('js1/chartjs/chart.min.js')}}"></script>--}}
    {{--<script src="{{url('js1/chartjs/chart-script.js')}}"></script>--}}
@endsection