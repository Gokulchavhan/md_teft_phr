<div class="col-md-3">
    <div class="col-sm-12 col-md-3 affix affixed-side-content no-padding">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-xs-12 no-padding">
                        <span class="h6">Currently logged in on behalf of...</span>
                    </div>
                    <div class="col-xs-1 col-sm-2 no-padding text-center">
                        <span class="h4 no-margin">
                            <span class="fa fa-user"></span>
                        </span>
                    </div>
                    <div class="col-xs-11 col-sm-10 no-padding">
                        <span class="h4 no-margin orange-color">Rosie Red</span>
                        <span class="h6 bluesteel-color no-margin" style="float: left;">MA# 12345679852</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>
                        <span class="secondary-color">Plan of Service Summary</span><br>
                        <span class="h5 no-margin"><small><i>as of 03/15/2016</i></small></span>
                    </h4>
                    <hr style="margin: 0">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="value h4"><small>starts</small><br><span>03/15/2016</span></span>
                        </div>
                        <div class="col-sm-12">
                            <span class="value h4"><small>ends</small><br><span>03/14/2017</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4 class="secondary-color">Weekly Services<br>
                        <span class="h5 no-margin"><small><i>maximum allowable</i></small></span>
                    </h4>
                    <hr style="margin: 0">
                    <div class="col-sm-12 no-padding">
                        <span class="value h3">20&nbsp;<small>hrs.</small></span>
                    </div>
                    <div class="col-sm-12 no-padding">
                        <span class="value h3">40&nbsp;<small>units</small></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-9">
    <div class="row">
        <div class="col-lg-12">
            <?php require "shared/_ServiceActivityTracker.php" ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php require "shared/_ServiceBudgetTracker.php" ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php require "shared/_FlagTracker.php" ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php require "shared/_UserActivityTracker.php" ?>
        </div>
    </div>
</div>
<?php $Script = '
    <script type="text/javascript">

        $(document).ready(function(){
            App.init();
            App.dashboard();
        });

    </script>
' ?>