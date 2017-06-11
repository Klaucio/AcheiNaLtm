<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>sss    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0"
          name="viewport"/>
    <meta http-equiv="Content-type"
          content="text/html; charset=utf-8">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet"  href="{{ url('quickadmin/css') }}/bootstrap.min.css"/>

</head>

<body class="">

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
<script src="{{url('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/chart.min.js')}}"></script>
<script src="{{url('js/encomendas.js')}}"></script>
</body>
</html>