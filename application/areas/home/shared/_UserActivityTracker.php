
<div class="panel panel-default">
    <div class="panel-body">
        <div class="content">
            <div class="col-sm-12 no-padding">
                <canvas id="usageFrequencyChart" width="400" height="100"></canvas>
            </div>
            <div class="col-xs-12" style="overflow-x: scroll;">
                <br>
                <table class="dataTable table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Login Time</th>
                            <th>Logout Time</th>
                            <th>Session Duration</th>
                            <th>IP Address</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rosie Red</td>
                            <td>05/10/2016 03:22pm</td>
                            <td>05/10/2016 03:26pm</td>
                            <td>0 Hrs 4 Min</td>
                            <td>164.11.0.0.2</td>
                            <td>Baltimore, MD</td>
                        </tr>
                        <tr>
                            <td>Rosie Red</td>
                            <td>05/07/2016 09:02am</td>
                            <td>05/07/2016 09:21am</td>
                            <td>0 Hrs 19 Min</td>
                            <td>164.11.0.0.2</td>
                            <td>Baltimore, MD</td>
                        </tr>
                        <tr>
                            <td>Mira Red (Representative)</td>
                            <td>04/28/2016 07:08pm</td>
                            <td>04/28/2016 07:29pm</td>
                            <td>0 Hrs 21 Min</td>
                            <td>164.11.0.0.2</td>
                            <td>Alexandria, VA</td>
                        </tr>
                        <tr>
                            <td>Rosie Red</td>
                            <td>03/15/2016 1:29pm</td>
                            <td>03/15/2016 02:02pm</td>
                            <td>0 Hrs 23 Min</td>
                            <td>164.11.0.0.2</td>
                            <td>Baltimore, MD</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12">
                <br>
                <h4>
                    <span class="secondary-color">Service Search Trends</span><br>
                </h4>
                <hr style="margin-top: 0">
            </div>
            <div class="col-xs-12">
                <canvas id="serviceSearchTrendChart" width="400" height="100"></canvas>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">


    var serviceSearchTrendChart = $("#serviceSearchTrendChart");

    var lineChart3 = new Chart(serviceSearchTrendChart, {
        type: 'line',
        data: {
            labels: ["Mar '16", "Apr '16", "May '16", "Jun '16", "Jul '16", "Aug '16", "Sep '16", "Oct '16", "Nov '16", "Dec '16", "Jan '17", "Feb '17", "Mar '17"],
            datasets: [
                {
                    label: "Searched by Date",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(220, 247, 66, 0.4)",
                    borderColor: "#DCF742",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#B5CD2E",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#B5CD2E",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [9, 4, 1]
                },
                {
                    label: "Searched by Billing Week",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(106, 38,111, 0.4)",
                    borderColor: "#6A266F",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#5A3A5C",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#5A3A5C",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [1, 6, 5]
                },
                {
                    label: "Searched by Month",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(111, 189, 42,0.4)",
                    borderColor: "#8BE43C",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#6FBD2A",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#6FBD2A",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [3, 1, 1],
                }
            ]
        }
    });


    var usageFrequencyChart = $("#usageFrequencyChart");

    var lineChart1 = new Chart(usageFrequencyChart, {
        type: 'line',
        data: {
            labels:["Mar '16", "Apr '16", "May '16", "Jun '16", "Jul '16", "Aug '16", "Sep '16", "Oct '16", "Nov '16", "Dec '16", "Jan '17", "Feb '17", "Mar '17"],
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
                    data: [3, 15, 8],
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
                    data: [0, 0, 1 ],
                }
            ]
        }
    });


</script>