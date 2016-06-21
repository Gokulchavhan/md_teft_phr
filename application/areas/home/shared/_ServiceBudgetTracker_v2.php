<div class="panel panel-default">
    <div class="panel-body">
        <div class="content" id="donut-carousel" style="direction: rtl">
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px; height: 265px; direction: ltr;
    text-align: center;">
                <h4 class="text-center secondary-color">Apr 28 - May 4</h4>
                <canvas id="myChartJan" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">36 <small>billed</small>&nbsp;/&nbsp;40&nbsp;<small>approved</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin">6&nbsp;<small>services received</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px; height: 265px; direction: ltr;
    text-align: center;">
                <h4 class="text-center secondary-color">May 5 - May 11</h4>
                <canvas id="myChartFeb" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin"><span style="color: red">48 <small style="color: red">billed</small></span>&nbsp;/&nbsp;40&nbsp;<small>approved</small></span>
                    <hr class="no-margin" style="border-color: #bbb">
                    <span class="h4 no-margin">6&nbsp;<small>services received</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px; height: 265px; direction: ltr;
    text-align: center;">
                <h4 class="text-center secondary-color">May 12 - May 18</h4>
                <canvas id="myChartMar" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">20 <small>billed</small>&nbsp;/&nbsp;40&nbsp;<small>approved</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">8&nbsp;<small>services received</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px; height: 265px; direction: ltr;
    text-align: center;">
                <h4 class="text-center secondary-color">May 19 - May 25</h4>
                <canvas id="myChartApr" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">16 <small>billed</small>&nbsp;/&nbsp;40&nbsp;<small>approved</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">2&nbsp;<small>services received</small></span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 form-horizontal" style="margin-bottom: 15px; height: 265px; direction: ltr;
    text-align: center;">
                <h4 class="text-center orange-color"><strong>May 26 - June 1</strong></h4>
                <canvas id="myChartMay" height="180"></canvas>
                <div class="text-center">
                    <span class="h4 no-margin">11 <small>billed</small>&nbsp;/&nbsp;40&nbsp;<small>approved</small></span>
                    <hr class="no-margin">
                    <span class="h4 no-margin">3&nbsp;<small>services received</small></span>
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
        type: "bar",
        animation: {
            animateScale: true
        },
        data: {
            labels: [""],
            datasets: [{
                type: 'bar',
                label: 'Billed Hours',
                data: [36 ],
                backgroundColor: [
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#0D9277"
                ]
            },{
                type: 'bar',
                label: 'Approved Hours Remaining',
                data: [4],
                backgroundColor: '#dedede',
                hoverBackgroundColor: '#bbb'
            }]
        },
        options: {
            legend: false,
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
    var myChartFeb = new Chart(febChart, {
        type: "bar",
        animation: {
            animateScale: true
        },
        data: {
            labels: [""],
            datasets: [
                {
                    type: 'bar',
                    label: 'Billed Hours',
                    data: [40 ],
                    backgroundColor: [
                        "#469B88"
                    ],
                    hoverBackgroundColor: [
                        "#0D9277"
                    ],
                    stacked: 1
                },
                {
                    type: 'bar',
                    label: 'Overbilled Hours',
                    data: [8],
                    backgroundColor: '#E62E00',
                    hoverColor: '#CF7200',
                    stacked: 1

                }]
        },
        options: {
            legend: false,
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
    var myChartMar = new Chart(marChart, {
        type: "bar",
        animation: {
            animateScale: true
        },
        data: {
            labels: [""],
            datasets: [
                {
                type: 'bar',
                label: 'Billed Hours',
                data: [20 ],
                backgroundColor: [
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#0D9277"
                ],
                    stacked: 1
            },
            {
                type: 'bar',
                label: 'Approved Hours Remaining',
                data: [20],
                backgroundColor: '#dedede',
                hoverColor: '#bbb',
                stacked: 1

            }]
            },
        options: {
            legend: false,
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
    var myChartApr = new Chart(aprChart, {
        type: "bar",
        animation: {
            animateScale: true
        },
        data: {
            labels: [""],
            datasets: [{
                type: 'bar',
                label: 'Billed Hours',
                data: [16 ],
                backgroundColor: [
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#0D9277"
                ]
            },{
               type: 'bar',
                label: 'Approved Hours Remaining',
                data: [24],
                backgroundColor: '#dedede',
                hoverBackgroundColor: '#bbb'
            }]
        },
        options: {
            legend: false,
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
    var myChartMay = new Chart(mayChart, {
        type: "bar",
        animation: {
            animateScale: true
        },
        data: {
            labels: [""],
            datasets: [{
                type: 'bar',
                label: 'Billed Hours',
                data: [11 ],
                backgroundColor: [
                    "#469B88"
                ],
                hoverBackgroundColor: [
                    "#0D9277"
                ]
            },{
                type: 'bar',
                label: 'Approved Hours Remaining',
                data: [29],
                backgroundColor: '#dedede',
                hoverBackgroundColor: '#bbb'
            }]
        },
        options: {
            legend: false,
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true
                }]
            }
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