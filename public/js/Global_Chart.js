/**
 * Created by claucio on 6/12/17.
 */
$(document).ready(function () {

    $.ajax({
        method: 'get',
        url: 'http://localhost:8000/getChartPie',
        data: null,

        success:function (result) {
            //Sampel Line Chart
            console.log(result.length)
            var labels = [],data=[];
            for (var i = 0; i < result.length; i++) {
                labels.push(result[i].month);
                data.push(result[i].encomendas);
                console.log(result[i].encomendas);
            }

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


            // window.LineChartSample = new Chart(document.getElementById("line-chart-sample").getContext("2d")).Line(LineChartSampleData,{
            //     responsive:true
            // });
            //
            // window.BarChartSample = new Chart(document.getElementById("bar-chart-sample").getContext("2d")).Bar(BarChartSampleData,{
            //     responsive:true
            // });

            window.PieChartSample = new Chart(document.getElementById("pie-chart-sample").getContext("2d")).Pie(PieDoughnutChartSampleData,{
                responsive:true
            });


        },

        error:function () {


        }
    });

});
