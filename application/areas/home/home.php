<!--<div class="col-md-3">-->
<!--    <div class="col-sm-12 col-md-3 affix affixed-side-content no-padding" style="margin-right: 15px;">-->
<!--        --><?php //require "shared/_posSnapshot.php" ?>
<!--    </div>-->
<!--</div>-->
<div class="col-md-12">
    <row>
        <div class="col-sm-12 no-padding">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-xs-6">
                        <h4>
                            <span class="secondary-color">Plan of Service Summary</span><br>
                            <span class="h5 no-margin"><small><i>as of 03/15/2016</i></small></span>
                        </h4>
                    </div>
                        <div class="col-xs-6">
                            <div class="col-sm-6">
                                <span class="value h4"><small>effective date</small><br><span>03/15/2016</span></span>
                            </div>
                            <div class="col-sm-6">
                                <span class="value h4"><small>end date</small><br><span>03/14/2017</span></span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </row>
    <div class="row">
        <div class="col-lg-12">
            <?php require "shared/_ServiceActivityTracker_v2.php" ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php require "shared/_ServiceBudgetTracker_v2.php" ?>
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