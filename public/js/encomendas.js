/**
 * Created by claucio on 6/8/17.
 */
//        window.alert($.getJSON('items'));
$.ajaxSetup({  headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });

$(function(){
//            console.log(devlist);
    $.ajax({
        url:'items',
        // data:'_token = <?php echo csrf_token() ?>',
        success:function(data){
            window.alert(data);
        }
    });
           // $.getJSON('items',function (result) {
           //      sweetAlert(result);
//                var labels = [],data=[];
//                for (var i = 0; i < result.length; i++) {
//                    labels.push(result[i].month);
//                    data.push(result[i].monthNum);
//                }
    var ctx = document.getElementById("myChart").getContext('2d');

    var myLineChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"], //labels,
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3, 15],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    // });

           }).fail(function(textStatus, errorThrown) {
        console.log("error " + textStatus, errorThrown);
    })

});
