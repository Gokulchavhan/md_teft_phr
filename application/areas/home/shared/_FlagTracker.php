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
                                    <small class="dashboard-value" style="color: #87CCBE">pending review</small></span>
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
                                    <small class="dashboard-value" style="color: #469B88">under review</small></span>
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
                                    <small class="dashboard-value" style="color:#9FC8E1">no action required</small>
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
                                    <small class="dashboard-value"
                                           style="color: #50809F;">escalated to reportable event</small>
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
    </div>
</div>

<script type="text/javascript">
    var ctx = $("#myChart");

    var myChart = new Chart(ctx, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: {
                position: "bottom"
            }
        },
        data: {
            labels: ["Pending Review", "Review in Process", "Completed (No Action Required)", "Completed (Entered in RE Process)"],
            datasets: [{
                label: '# of Votes',
                data: [1, 2, 4, 1],
                backgroundColor: [
                    "#87CCBE",
                    "#469B88",
                    "#9FC8E1",
                    "#50809F"
                ],
                hoverBackgroundColor: [
                    "#1ab394",
                    "#0D9277",
                    "#65BDF5",
                    "#4AA0D6"
                ]
            }]
        }
    });
</script>