<div class="panel panel-default">
    <div class="panel-body">
        <div class="header">
            <h2 class="h3 primary-color"><span class="fa fa-calendar"></span>&nbsp;Service Budget Tracker
            </h2>
            <hr>
        </div>
        <div class="content">
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Mar '16</h4>
                <canvas id="myChartMar" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">40/40&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">22&nbsp;<small>service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Apr '16</h4>
                <canvas id="myChartApr" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">75/80&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">52&nbsp;<small>service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center orange-color"><strong>May '16</strong></h4>
                <canvas id="myChartMay" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">12/40&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">20&nbsp;<small>service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Jun '16</h4>
                <canvas id="myChartJun" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-12" style="background: #fefefe; box-shadow: inset 0 0px 5px 0px rgba(0, 0, 0, 0.2);">
                <div class="drawer-section"></div>
                <div class="col-xs-12" style="margin: 15px 0;">
                    <canvas id="serviceFrequencyChart" width="400" height="100"></canvas>
                    <span class="pull-right">
                        <a href="<?php echo base_url('index.php/carerecord/serviceactivity') ?>" style="font-size: 80%">View
                            Services for this Month&nbsp;&nbsp;<span class="fa fa-chevron-right" style="font-size: 80%"></span></a>
                    </span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Jul '16</h4>
                <canvas id="myChartJul" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Aug '16</h4>
                <canvas id="myChartAug" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Sep '16</h4>
                <canvas id="myChartSep" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Oct '16</h4>
                <canvas id="myChartOct" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Nov '16</h4>
                <canvas id="myChartNov" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Dec '16</h4>
                <canvas id="myChartDec" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Jan '17</h4>
                <canvas id="myChartJan" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Feb '17</h4>
                <canvas id="myChartFeb" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">Mar '17</h4>
                <canvas id="myChartMar17" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/40&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">



    var serviceFrequencyChart = $("#serviceFrequencyChart");

    var lineChart5 = new Chart(serviceFrequencyChart, {
        type: 'line',
        data: {
            labels: ["Apr 1 - Apr 7", "Apr 8 - Apr 14", "Apr 15 - Apr 23", "Apr 24 - Apr 30"],
            datasets: [
                {
                    label: "Approved Hours",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(68, 139, 188,0.4)",
                    borderColor: "#448BBC",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#1D5F8C",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#1D5F8C",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [20, 20, 20, 20]
                },
                {
                    label: "Hours Billed",
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
                    data: [18, 22, 15, 20]
                }
            ]
        }
    });

    var janChart = $("#myChartJan");
    var febChart = $("#myChartFeb");
    var marChart = $("#myChartMar");
    var mar17Chart = $("#myChartMar17");
    var aprChart = $("#myChartApr");
    var mayChart = $("#myChartMay");
    var junChart = $("#myChartJun");
    var julChart = $("#myChartJul");
    var augChart = $("#myChartAug");
    var sepChart = $("#myChartSep");
    var octChart = $("#myChartOct");
    var novChart = $("#myChartNov");
    var decChart = $("#myChartDec");


    var myChartJan = new Chart(janChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [80, 0],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartFeb = new Chart(febChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [80, 0],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartMar = new Chart(marChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [0, 40],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartApr = new Chart(aprChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [05, 75],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartMay = new Chart(mayChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [48, 32],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartJun = new Chart(junChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [80, 0],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartJul = new Chart(julChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [80, 0],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartAug = new Chart(augChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [80, 0],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartSep = new Chart(sepChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [80, 0],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartOct = new Chart(octChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [80, 0],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartNov = new Chart(novChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [80, 0],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
    var myChartDec = new Chart(decChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: "bottom"
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [80, 0],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });

    var myChartMar17 = new Chart(mar17Chart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Approved Hours Remaining", "Total Billed Hours"],
            datasets: [{
                label: '# of Votes',
                data: [40, 0],
                backgroundColor: [
                    "#dedede",
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#0D9277"
                ]
            }]
        }
    });
</script>