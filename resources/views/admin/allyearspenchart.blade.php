@extends('admin.layout.master')

@section('style')
@endsection

@section('content')

<div class="col-md-6 offset-md-2">
<div class="card">
<div class="card-header"><h4> Spends Chart of All Years.</h4></div><div class="card-body">
<canvas id="myChart" style="width:500px; height:300px; font-size:20px;"></canvas>
</div></div>
</div>








@endsection

@section('script')
<script>
    var year =<?php echo $years; ?>;
    var data_amount = <?php echo $amounts; ?>;
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'Amounts',
            backgroundColor: "rgba(151,187,205,0.5)",
            data: data_amount
        }]
    };


    window.onload = function() {
        var ctx = document.getElementById("myChart").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'line',
            data: barChartData,
            options: {
              
                borderColor: "rgba(237,65,255,0.5)",
                responsive: true,
                title: {
                    display: true,
                    text: 'Spend Amount of Last 5 years'
                }
            }
        });


    };
</script>

@endsection