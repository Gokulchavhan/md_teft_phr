<div class="panel panel-default">
    <div class="panel-body">
        <div class="header">
            <h2 class="h3 primary-color"><span class="fa fa-flag"></span>&nbsp;Flagged Services Tracker
                <small class="pull-right">
                    <a href="<?php echo base_url('index.php/carerecord/serviceactivity') ?>" style="font-size: 80%">View
                        All Flagged Service Activity<span class="fa fa-chevron-right" style="font-size: 80%"></span></a>
                </small>
            </h2>
            <hr>
        </div>
        <div class="content">

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
                <div class="col-sm-6 col-md-8 no-padding">
                    <div class="col-sm-12 col-md-6">
                        <div class="row section-block">
                            <h4 class="secondary-color">Active Flags
                            </h4>
                            <hr style="margin: 0">
                            <div class="col-sm-12 no-padding">
                                <div class="col-xs-1 col-sm-2 text-right no-padding">
                            <span class="value h3">
                                    1
                                </span>
                                </div>
                                <div class="col-xs-11 col-sm-10">
                            <span class="value h3">
                                    <small class="dashboard-value">pending review</small></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-12 no-padding">
                                <div class="col-xs-1 col-sm-2 text-right no-padding">
                            <span class="value h3">
                                    2
                                </span>
                                </div>
                                <div class="col-xs-11 col-sm-10">
                            <span class="value h3">
                                    <small class="dashboard-value">under review</small></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="row section-block">
                            <h4 class="secondary-color">Completed Flags
                            </h4>
                            <hr style="margin: 0">
                            <div class="col-sm-12 no-padding">
                                <div class="col-xs-1 col-sm-2 text-right no-padding">
                            <span class="value h3">
                                    4
                                </span>
                                </div>
                                <div class="col-xs-11 col-sm-10">
                            <span class="value h3">
                                    <small class="dashboard-value">no action required</small>
                                </span>
                                </div>
                            </div>
                            <div class="col-sm-12 no-padding">
                                <div class="col-xs-1 col-sm-2 text-right no-padding">
                            <span class="value h3">
                                    1
                                </span>
                                </div>
                                <div class="col-xs-11 col-sm-10">
                            <span class="value h3">
                                    <small class="dashboard-value">escalated to reportable event</small>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <div class="row section-block" style="padding-bottom: 10px">
                            <span class="value h3">8&nbsp;<small>total flags</small></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <br>
                    <h4>
                        <span class="secondary-color">Flag Status Tracker</span><br>
                    </h4>
                    <hr style="margin-top: 0">
                </div>
                <div class="col-xs-12">
                    <canvas id="flagFrequencyChart" width="400" height="100"></canvas>
                </div>
                <div class="col-xs-12">
                    <br>
                    <h4>
                        <span class="secondary-color">Flagged Services</span><br>
                    </h4>
                    <hr style="margin-top: 0">
                </div>
                <div class="col-xs-12">
                    <div class="section-block" style="max-height: 600px; overflow-x: hidden; overflow-y: auto;">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="h5" style="display: inline-block"><strong>Shared Attendant</strong><br><small>by <strong>Candace Kind</strong>&nbsp;(Tru-Care Providers)</small></span>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>date of service:</small><br>
                                                <strong>04/08/2016</strong>
                                            </span>
                                        </div>
                                        <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>flagged on:</small><br>
                                                <strong>04/10/2016</strong>
                                            </span>
                                        </div>
                                        <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style=margin: 10px 0 5px 0;">
                                                <small>completed on:</small><br>
                                                <strong>05/16/2016</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3 text-center">
                                    <span class="h5"><strong style="color: #469B88">No Action Required</strong><br><small>Completed in <strong>32</strong> Days </small></span>
                                </div>
                                <div class="col-xs-9 col-xs-pull-1">
                                    <div class="gallery with-transitions complete-no-action" id="chart1"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>17</strong>&nbsp;<small>days after</small><br><small>last flagged service</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>28</strong>&nbsp;<small>days</small><br><small>pending review</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>3</strong>&nbsp;<small>days</small><br><small>under review</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>--</strong>&nbsp;<small>days since</small><br><small>last action</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>32</strong>&nbsp;<small>days</small><br><small>flag duration</small></span>
                                </div>
                                <div class="col-xs-2 text-center">
                                    <a href="#" style="display: block;" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>
                                    <a href="#" style="display: block;" data-toggle="modal" data-target="#flaggedService">Flag</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12" style="background: #F5FAFF; border-top: 1px solid #bdcbe5; border-bottom: 1px solid #bdcbe5">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="h5" style="display: inline-block"><strong>Shared Attendant</strong><br><small>by <strong>Candace Kind</strong>&nbsp;(Tru-Care Providers)</small></span>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>date of service:</small><br>
                                                <strong>03/23/2016</strong>
                                            </span>
                                        </div>
                                        <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>flagged on:</small><br>
                                                <strong>03/23/2016</strong>
                                            </span>
                                        </div>
                                        <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>completed on:</small><br>
                                                <strong>04/02/2016</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3 text-center">
                                    <span class="h5"><strong style="color: #EE6C6F">Escalated to Reportable Event</strong><br><small>Completed in <strong>9</strong> Days </small></span>
                                </div>
                                <div class="col-xs-9 col-xs-pull-1">
                                    <div class="gallery with-transitions complete-reported-event" id="chart2"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>21</strong>&nbsp;<small>days after</small><br><small>last flagged service</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>8</strong>&nbsp;<small>days</small><br><small>pending review</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>2</strong>&nbsp;<small>days</small><br><small>under review</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>--</strong>&nbsp;<small>days since</small><br><small>last action</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>9</strong>&nbsp;<small>days</small><br><small>flag duration</small></span>
                                </div>
                                <div class="col-xs-2 text-center">
                                    <a href="#" style="display: block;" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>
                                    <a href="#" style="display: block;" data-toggle="modal" data-target="#flaggedService">Flag</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="h5" style="display: inline-block"><strong>Shared Attendant</strong><br><small>by <strong>Candace Kind</strong>&nbsp;(Tru-Care Providers)</small></span>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>date of service:</small><br>
                                                <strong>03/12/2016</strong>
                                            </span>
                                        </div>
                                        <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>flagged on:</small><br>
                                                <strong>03/18/2016</strong>
                                            </span>
                                        </div>
                                        <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>completed on:</small><br>
                                                <strong>--</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3 text-center">
                                    <span class="h5"><strong style="color: #237AB6">Under Review</strong></span>
                                </div>
                                <div class="col-xs-9 col-xs-pull-1">
                                    <div class="gallery with-transitions complete-under-review" id="chart3"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>2</strong>&nbsp;<small>days after</small><br><small>last flagged service</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>5</strong>&nbsp;<small>days</small><br><small>pending review</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>38</strong>&nbsp;<small>days</small><br><small>under review</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6" style="color: #BD0000"><strong>38</strong>&nbsp;<small style="color: #BD0000">days since</small><br><small style="color: #BD0000">last action</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>59</strong>&nbsp;<small>days</small><br><small>flag duration</small></span>
                                </div>
                                <div class="col-xs-2 text-center">
                                    <a href="#" style="display: block;" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>
                                    <a href="#" style="display: block;" data-toggle="modal" data-target="#flaggedService">Flag</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12" style="background: #F5FAFF; border-top: 1px solid #bdcbe5; border-bottom: 1px solid #bdcbe5">
                            <div class="row">
                                <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="h5" style="display: inline-block"><strong>Personal Assistance</strong><br><small>by <strong>Gladice Tuhelp</strong>&nbsp;(Tru-Care Providers)</small></span>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>date of service:</small><br>
                                                <strong>04/08/2016</strong>
                                            </span>
                                            </div>
                                            <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>flagged on:</small><br>
                                                <strong>03/16/2016</strong>
                                            </span>
                                            </div>
                                            <div class="col-sm-4 no-padding">
                                            <span class="h6 bluesteel-color pull-right" style="margin: 10px 0 5px 0;">
                                                <small>completed on:</small><br>
                                                <strong>03/26/2016</strong>
                                            </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-xs-12 col-xs-pull-1">
                                    <div class="gallery with-transitions complete-no-action" id="chart4"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>2</strong>&nbsp;<small>days after</small><br><small>last flagged service</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>12</strong>&nbsp;<small>days</small><br><small>pending review</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>2</strong>&nbsp;<small>days</small><br><small>under review</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>0</strong>&nbsp;<small>days since</small><br><small>last action</small></span>
                                </div>
                                <div class="col-xs-2 text-center" style="border-right: 1px solid #ddd;">
                                    <span class="h6"><strong>14</strong>&nbsp;<small>days</small><br><small>flag duration</small></span>
                                </div>
                                <div class="col-xs-2 text-center">
                                    <a href="#" style="display: block;" data-toggle="modal" data-target="#serviceActivityDetails">Details</a>
                                    <a href="#" style="display: block;" data-toggle="modal" data-target="#flaggedService">Flag</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">


    var width = '100%',
        height = 70,
        margin = {top: 10, right: 40, bottom: 10, left: 0};

    var chart1 = nv.models.bulletChart()
        .height(height - margin.top - margin.bottom);

    serviceData1 = [{
        "ranges": [28, 31, 32],
        "measures": [32],
        "markers": [],
        "markerLabels": ['Target Inventory', 'Low Inventory'],
        "rangeLabels": ['Pending Review', 'Under Review', 'Completed'],
        "measureLabels": ['Duration of Flag (No Action Required)']
    }];
    var vis = d3.select("#chart1").selectAll("svg")
        .data(serviceData1)
        .enter().append("svg")
        .attr("class", "bullet nvd3")
        .attr("width", width)
        .attr("height", height)
        .attr("style", "margin-bottom: -10px");

    vis.transition().duration(1000).call(chart1);

    var chart2 = nv.models.bulletChart()
        .height(height - margin.top - margin.bottom);

    serviceData2 = [{
        "ranges": [6, 8, 9],
        "measures": [9],
        "markers": [],
        "markerLabels": ['Target Inventory', 'Low Inventory'],
        "rangeLabels": ['Pending Review', 'Under Review', 'Completed'],
        "measureLabels": ['Duration of Flag (Entered as Reportable Event)']
    }];
    var vis = d3.select("#chart2").selectAll("svg")
        .data(serviceData2)
        .enter().append("svg")
        .attr("class", "bullet nvd3")
        .attr("width", width)
        .attr("height", height)
        .attr("style", "margin-bottom: -10px");

    vis.transition().duration(1000).call(chart2);

    var chart3 = nv.models.bulletChart()
        .height(height - margin.top - margin.bottom);

    serviceData3 = [{
        "ranges": [21, 21, 59],
        "measures": [59],
        "markers": [],
        "markerLabels": ['Target Inventory', 'Low Inventory'],
        "rangeLabels": ['', 'Pending Review', 'Under Review'],
        "measureLabels": ['Duration of Flag (Entered as Reportable Event)']
    }];
    var vis = d3.select("#chart3").selectAll("svg")
        .data(serviceData3)
        .enter().append("svg")
        .attr("class", "bullet nvd3")
        .attr("width", width)
        .attr("height", height)
        .attr("style", "margin-bottom: -10px");

    vis.transition().duration(1000).call(chart3);

    var chart4 = nv.models.bulletChart()
        .height(height - margin.top - margin.bottom);

    serviceData4 = [{
        "ranges": [12, 14, 15],
        "measures": [15],
        "markers": [],
        "markerLabels": ['Target Inventory', 'Low Inventory'],
        "rangeLabels": ['Pending Review', 'Under Review', 'Completed'],
        "measureLabels": ['Duration of Flag (Entered as Reportable Event)']
    }];
    var vis = d3.select("#chart4").selectAll("svg")
        .data(serviceData4)
        .enter().append("svg")
        .attr("class", "bullet nvd3")
        .attr("width", width)
        .attr("height", height)
        .attr("style", "margin-bottom: -10px");

    vis.transition().duration(1000).call(chart4);




    var flagFrequencyChart = $("#flagFrequencyChart");

    var lineChart2 = new Chart(flagFrequencyChart, {
        type: 'line',
        data: {
            labels: ["Mar '16", "Apr '16", "May '16", "Jun '16", "Jul '16", "Aug '16", "Sep '16", "Oct '16", "Nov '16", "Dec '16", "Jan '17", "Feb '17", "Mar '17"],
            datasets: [
                {
                    label: "Flags Created by Client",
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
                    data: [10, 11, 6]
                },
                {
                    label: "Flags Completed (No Action Required)",
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
                    data: [5, 6, 3]
                },
                {
                    label: "Flags Completed (Escalated to Reportable Event)",
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
                    data: [3, 2, 4],
                }
            ]
        }
    });





    var ctx = $("#myChart");

    var myChart = new Chart(ctx, {
        type: "bar",
        animation: {
            animateScale: true
        },
        options: {
            legend: {
                position: "bottom"
            },
            scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 6
                    }
                }]
            }
        },
        data: {
            labels: ["Pending Review", "Under Review", "Completed (No Action Required)", "Completed (Escalated to RE)"],
            datasets: [{
                label: '# of Flags',
                data: [1, 2, 4, 1],
                backgroundColor: [
                    "#ddd",
                    "#9FC8E1",
                    "rgba(75,192,192,1)",
                    "#EE6C6F"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#50809F",
                    "rgba(75,192,192,1)",
                    "rgba(191, 14, 14,1)"
                ]
            }]
    }
    });
</script>