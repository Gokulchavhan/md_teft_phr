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
                        <span class="value h5"><small>effective date</small><br><span>03/15/2016</span></span>
                    </div>
                    <div class="col-sm-12">
                        <span class="value h5"><small>end date</small><br><span>03/14/2017</span></span>
                        <hr style="margin-top: 0">
                    </div>
                    <canvas id="posBudgetChart" height="180"></canvas>
                    <div class="col-sm-12 text-center">
                        <hr class="no-margin">
                        <span class="h4 no-margin">303&nbsp;<small>days remaining</small></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-md-12" style="padding-right: 5px;">
    <div class="panel panel-default">
        <div class="panel-body">
            <h4 class="secondary-color">Service Activity for Current Week<br>
                <span class="h5 no-margin"><small><i>05/15/16  -  05/23/2016</i></small></span>
            </h4>
            <hr style="margin-top: 0">
            <div class="row">
                <div class="col-xs-12">
                    <canvas id="currentWeekBudgetChart" height="180"></canvas>
                </div>
            </div>
            <div class="text-center">
                <span class="h4 no-margin">8/20&nbsp;<small>hours billed</small></span>
                <hr class="no-margin">
                <span class="h4 no-margin">2&nbsp;<small>service activities</small></span>
            </div>
            <div class="text-center">
                <br>
                <span class="h5 no-margin" style="line-height: 50%;"><small><strong>20</strong>&nbsp;hours is the maximum approved amount.</small></span>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    var posBudgetChart = $("#posBudgetChart");
    var newPosBudgetChart = new Chart(posBudgetChart, {
        type: "doughnut",
        animation: {
            animateScale: true
        },
        options: {
            legend: false
        },
        data: {
            labels: ["% of days remaining", "% of days completed"],
            datasets: [{
                label: '# of Votes',
                data: [83, 17],
                backgroundColor: [
                    "#dedede",
                    "#448BBC"
                ],
                hoverBackgroundColor: [
                    "#bbb",
                    "#1D5F8C"
                ]
            }]
        }
    });

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
            labels: ["Hours Remaining","Hours Billed"],
            datasets: [{
                label: '# of Votes',
                data: [12, 8],
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