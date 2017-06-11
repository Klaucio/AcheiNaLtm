@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            </br>
            </br>
            <h1 class="text-center">Grafico de Pedidos</h1>

            <div class="content">


                <div class="container">
                    <div class="row">
                        </br>
                        </br>

                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-center">Grafico de Pedidos Mensais</h2>
                            <div class="sample-chart-wrapper">
                                <canvas id="line-chart-sample" height="120"></canvas>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="sample-chart-wrapper">
                                <canvas id="bar-chart-sample" height="120"></canvas>
                            </div>
                        </div>


                        <div class="col-md-6 col-md-offset-3">
                            <br/>
                            <h2 class="text-center">Gráfico Geral de Pedidos</h2>

                            <div class="col-md-8">
                                <div class="sample-chart-wrapper">
                                    <canvas id="pie-chart-sample" width="100px"></canvas>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div style="margin-top:50px; width: 100%; height: 100px; border: 1px solid black;">
                                    <div class="" style="padding-top: 10px;">

                                        <div  style="background-color: #5AD3D1; margin-left: 10px; height: 30px;">
                                            Pedidos Confirmados
                                        </div>
                                    </div>

                                    <div class="" style="padding-top: 10px;">
                                        <div  style="background-color: #F7464A; margin-left: 10px; height: 30px;">
                                            Pedidos Não Confirmados
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>


                    </div>
                </div>


            </div>


        </div>
    </div>


@endsection

@section('javascript')
    {{--<script type="text/javascript" src="{{ url('js')}}/Chart.min.js"></script>--}}

    <script src="{{ url('js')}}/encomendas.js"></script>
    {{--<script src="{{url('js1/jquery-3.1.1.min.js')}}"></script>--}}
    {{--<script src="{{url('js1/bootstrap.min.js')}}"></script>--}}
    {{--<script src="{{url('js1/chartjs/chart.min.js')}}"></script>--}}
    {{--<script src="{{url('js1/chartjs/chart-script.js')}}"></script>--}}
@endsection