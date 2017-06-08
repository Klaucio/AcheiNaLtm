@extends('admin.layouts.master')
@section('content')
    {{--<script src="https://raw.githubusercontent.com/nnnick/Chart.js/master/dist/Chart.bundle.js"></script>--}}
    <script>
        $(function(){
            $.getJSON("items", function (result) {

                var labels = [],data=[];
                for (var i = 0; i < result.length; i++) {
                    labels.push(result[i].month);
                    data.push(result[i].projects);
                }

                var buyerData = {
                    labels : labels,
                    datasets : [
                        {
                            fillColor : "rgba(240, 127, 110, 0.3)",
                            strokeColor : "#f56954",
                            pointColor : "#A62121",
                            pointStrokeColor : "#741F1F",
                            data : data
                        }
                    ]
                };
                var buyers = document.getElementById('projects-graph').getContext('2d');

                new Chart(buyers).Line(buyerData, {
                    bezierCurve : true
                });
            });

        });

    </script>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <canvas id="canvas" height="280" width="600"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection