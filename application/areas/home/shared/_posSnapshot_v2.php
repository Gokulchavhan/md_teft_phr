<div class="col-sm-6 col-md-12" style="padding-right: 5px;">
    <div class="panel panel-default">
        <div class="panel-body">
            <h4>
                <span class="secondary-color">Plan of Service Summary</span><br>
                <span class="h5 no-margin"><small><i>as of 03/15/2016</i></small></span>
            </h4>
            <hr style="margin: 0">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sm-12">
                        <span class="value h5"><small>effective date</small><br><span class="h4" style="margin-top: 0;">03/15/2016</span></span>
                    </div>
                    <div class="col-sm-12">
                        <span class="value h5"><small>end date</small><br><span class="h4" style="margin-top: 0;">03/14/2017</span></span>
                    </div>
                </div>
            </div>
            <br>
            <h4 class="secondary-color">Current Service Activity<br>
            </h4>
            <hr style="margin-top: 0">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="text-center orange-color"><strong>May 12 - May 18</strong></h4>
                    <canvas id="currentWeekBudgetChart" height="180"></canvas>
                </div>
            </div>
            <div class="text-center">
                <span class="h4 no-margin">11/40&nbsp;<small>hours billed</small></span>
                <hr class="no-margin" style="border-color: #ddd">
                <span class="h4 no-margin">2&nbsp;<small>service activities</small></span>
            </div>
            <div class="text-center">
                <br>
                <span class="h5 no-margin" style="line-height: 50%;"><small><strong>40</strong>&nbsp;hours is the maximum approved amount.</small></span>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    var currentWeekBudgetChart = $("#currentWeekBudgetChart");
    var newcurrentWeekBudgetChart = new Chart(currentWeekBudgetChart, {
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
    });
</script>