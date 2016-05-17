
<div class="panel panel-default">
    <div class="panel-body">
        <div class="header">
            <h2 class="h3 primary-color"><span class="fa fa-user"></span>&nbsp;User Activity Tracker
            </h2>
            <hr>
        </div>
        <div class="content">
            <div class="col-sm-12 no-padding">
                <canvas id="usageFrequencyChart" width="400" height="100"></canvas>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var usageFrequencyChart = $("#usageFrequencyChart");

    var lineChart1 = new Chart(usageFrequencyChart, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Successful Login Attempts",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [3, 15, 8, 5, 10, 3, 4],
                },
                {
                    label: "Unsuccessful Login Attempts",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(208,108,38,0.4)",
                    borderColor: "rgba(208,108,38,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(185,78,2,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(185,78,2,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [0, 0, 0, 1, 0, 0, 0],
                },
                {
                    label: "Flagged Service Activities",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(216, 49, 49,0.4)",
                    borderColor: "rgba(216, 49, 49,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(191, 14, 14,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(191, 14, 14,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [0, 1, 5, 1, 0, 4, 1],
                }
            ]
        }
    });


</script>