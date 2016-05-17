<div class="panel panel-default">
    <div class="panel-body">
        <div class="header">
            <h2 class="h3 primary-color"><span class="fa fa-calendar"></span>&nbsp;Service Frequency Tracker
                <small class="pull-right">
                    <a href="<?php echo base_url('index.php/carerecord/serviceactivity') ?>" style="font-size: 80%">View
                        All Flagged Service Activity<span class="fa fa-chevron-right" style="font-size: 80%"></span></a>
                </small>
            </h2>
            <hr>
        </div>
        <div class="content">
            <h5 class="text-center">
                <strong class="coolgray-color">2016</strong>
            </h5>
            <hr style="margin-top: 0; border-color: #bbb;">
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center coolgray-color">January</h4>
                <canvas id="myChartJan" height="180"></canvas>
                    <div class="text-center">
                        <small class="disabled-color">no data to display</small>
                    </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center coolgray-color">February</h4>
                <canvas id="myChartFeb" height="180"></canvas>
                <div class="text-center">
                    <small class="disabled-color">no data to display</small>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">March</h4>
                <canvas id="myChartMar" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">40/40&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">22&nbsp;<small>service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">April</h4>
                <canvas id="myChartApr" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">75/80&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">52&nbsp;<small>service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center orange-color"><strong>May</strong></h4>
                <canvas id="myChartMay" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">12/40&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">20&nbsp;<small>service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">June</h4>
                <canvas id="myChartJun" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">July</h4>
                <canvas id="myChartJul" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">August</h4>
                <canvas id="myChartAug" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">September</h4>
                <canvas id="myChartSep" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">October</h4>
                <canvas id="myChartOct" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">November</h4>
                <canvas id="myChartNov" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px">
                <h4 class="text-center secondary-color">December</h4>
                <canvas id="myChartDec" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin disabled-color">0/80&nbsp;<small class="disabled-color">hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin disabled-color">0&nbsp;<small class="disabled-color">service activities</small></span>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    
    var janChart = $("#myChartJan");
    var febChart = $("#myChartFeb");
    var marChart = $("#myChartMar");
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
            labels: ["No Data to Display"],
            datasets: [{
                label: '# of Votes',
                data: [100],
                backgroundColor: [
                    "#f1f1f1"
                ],
                hoverBackgroundColor: [
                    "#ededed"
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
            labels: ["No Data to Display"],
            datasets: [{
                label: '# of Votes',
                data: [100],
                backgroundColor: [
                    "#f1f1f1"
                ],
                hoverBackgroundColor: [
                    "#ededed"
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
</script>