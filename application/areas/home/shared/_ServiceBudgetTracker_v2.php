<div class="panel panel-default">
    <div class="panel-body">
        <div class="header">
            <h2 class="h3 primary-color"><span class="fa fa-calendar"></span>&nbsp;Service Hours Tracker
            </h2>
            <hr>
        </div>
        <div class="content" id="donut-carousel" style="direction: rtl">
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px; height: 265px; direction: ltr;
    text-align: center;">
                <h4 class="text-center secondary-color">Apr 28 - May 4</h4>
                <canvas id="myChartJan" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">36/40&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin">6&nbsp;<small>service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px; height: 265px; direction: ltr;
    text-align: center;">
                <h4 class="text-center secondary-color">May 5 - May 11</h4>
                <canvas id="myChartFeb" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">37/40&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin">6&nbsp;<small>service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px; height: 265px; direction: ltr;
    text-align: center;">
                <h4 class="text-center secondary-color">May 12 - May 18</h4>
                <canvas id="myChartMar" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">40/40&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">8&nbsp;<small>service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px; height: 265px; direction: ltr;
    text-align: center;">
                <h4 class="text-center secondary-color">May 19 - May 25</h4>
                <canvas id="myChartApr" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">16/40&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">2&nbsp;<small>service activities</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px; height: 265px; direction: ltr;
    text-align: center;">
                <h4 class="text-center orange-color"><strong>May 26 - June 1</strong></h4>
                <canvas id="myChartMay" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">11/40&nbsp;<small>hours billed</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">3&nbsp;<small>service activities</small></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">



    var serviceFrequencyChart = $("#serviceFrequencyChart");

    var janChart = $("#myChartJan");
    var febChart = $("#myChartFeb");
    var marChart = $("#myChartMar");
    var aprChart = $("#myChartApr");
    var mayChart = $("#myChartMay");

    var myChartJan = new Chart(janChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["Total Billed Hours", "Approved Hours Remaining" ],
            datasets: [{
                label: '# of Votes',
                data: [36 , 04],
                backgroundColor: [
                    "#469B88",
                    "#dedede"
                ],
                hoverBackgroundColor: [
                    "#0D9277",
                    "#bbb"
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
            labels: ["Total Billed Hours", "Approved Hours Remaining" ],
            datasets: [{
                label: '# of Votes',
                data: [37 , 03],
                backgroundColor: [
                    "#469B88",
                    "#dedede"
                ],
                hoverBackgroundColor: [
                    "#0D9277",
                    "#bbb"
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
            labels: ["Total Billed Hours", "Approved Hours Remaining" ],
            datasets: [{
                label: '# of Votes',
                data: [40 , 0],
                backgroundColor: [
                    "#469B88",
                    "#dedede"
                ],
                hoverBackgroundColor: [
                    "#0D9277",
                    "#bbb"
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
            labels: ["Total Billed Hours", "Approved Hours Remaining" ],
            datasets: [{
                label: '# of Votes',
                data: [16 , 24],
                backgroundColor: [
                    "#469B88",
                    "#dedede"
                ],
                hoverBackgroundColor: [
                    "#0D9277",
                    "#bbb"
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
            labels: ["Total Billed Hours", "Approved Hours Remaining" ],
            datasets: [{
                label: '# of Votes',
                data: [11 , 29],
                backgroundColor: [
                    "#469B88",
                    "#dedede"
                ],
                hoverBackgroundColor: [
                    "#0D9277",
                    "#bbb"
                ]
            }]
        }
    })

    $('#donut-carousel').slick({
        infinite: false,
        mobileFirst: true,
        rtl: true,
        dots: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });
</script>