$(document).ready(function () {

    $.ajax({
        method: 'get',
        url: 'http://localhost:8000/getChart',
        data: null,

        success:function (result) {
            //Sampel Line Chart
            console.log(result.length)
            var labels = [],data=[];
            for (var i = 0; i < result.length; i++) {
                labels.push(result[i].month);
                data.push(result[i].numMonth);
                // console.log(result[i].month);
            }
            var LineChartSampleData = {
                labels:labels,
                    // ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Novembro", "Dezembro "],
                datasets: [{
                    label: "Todos Pedidos",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: data
                }, {
                    label: "Pedidos Confirmados",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data:   [80,2,3,4,5,6,7,8,9,11,12,13]
                    // data.jan_confirmados

                }]
            };

            //Sampel Bar Chart
            var BarChartSampleData = {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Novembro", "Dezembro "],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(220,220,220,0.75)",
                        highlightStroke: "rgba(220,220,220,1)",
                        data: [90, 40, 50, 20, 56, 55, 50, 50, 50, 50, 50, 50]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(151,187,205,0.5)",
                        strokeColor: "rgba(151,187,205,0.8)",
                        highlightFill: "rgba(151,187,205,0.75)",
                        highlightStroke: "rgba(151,187,205,1)",
                        data: [40, 30, 40, 19, 47, 27, 39, 39, 39, 39, 39, 39]
                    }
                ]
            };

            // //Sampel Pie Doughnut Chart
            var PieDoughnutChartSampleData = [

                {
                    value: 20,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Confirmados"
                },
                {
                    value: 30,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Nao confirmados"
                }
                // {
                //     value: 40,
                //     color: "#46BFBD",
                //     highlight: "#5AD3D1",
                //     label: "Confirmados"
                // },
                // {
                //     value: 10,
                //     color: "#46BFBD",
                //     highlight: "#5AD3D1",
                //     label: "Confirmados"
                // },


            ]


            window.LineChartSample = new Chart(document.getElementById("line-chart-sample").getContext("2d")).Line(LineChartSampleData,{
                responsive:true
            });

            window.BarChartSample = new Chart(document.getElementById("bar-chart-sample").getContext("2d")).Bar(BarChartSampleData,{
                responsive:true
            });

            window.PieChartSample = new Chart(document.getElementById("pie-chart-sample").getContext("2d")).Pie(PieDoughnutChartSampleData,{
                responsive:true
            });


        },

        error:function () {


        }
    });

});
