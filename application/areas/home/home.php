<!--<div class="col-md-3">-->
<!--    <div class="col-sm-12 col-md-3 affix affixed-side-content no-padding" style="margin-right: 15px;">-->
<!--        --><?php //require "shared/_posSnapshot.php" ?>
<!--    </div>-->
<!--</div>-->

<div class="col-md-12">
    <div class="row">
        <div class="col-sm-12 no-padding">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-xs-6">
                        <h4>
                            <span class="secondary-color">My Plan of Service Summary</span><br>
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
    </div>
    <div class="panel-group" id="accordian">

        <div class="panel panel-default profilePanel">

            <div class="panel-heading profilePanel" data-toggle="collapse" href="#collapseOne" role="button">
                <h4 class="panel-title"><a href=""><span class="fa fa-chevron-down"></span>&nbsp;<span class="fa fa-calendar-plus-o"></span>&nbsp;My Services</a></h4>

                <button class="btn btn-default panel-edit pull-right" data-toggle="modal" data-target="#editEmail">View All Services</button>
            </div>

            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="row">
                    <div class="col-lg-12">
                        <?php require "shared/_ServiceActivityTracker_v2.php" ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="panel panel-default profilePanel">

        <div class="panel-heading profilePanel" data-toggle="collapse" href="#collapseFive" role="button">
            <h4 class="panel-title"><a href=""><span class="fa fa-chevron-down"></span>&nbsp;<span class="fa fa-clock-o"></span>&nbsp;My Service Hours</a></h4>
        </div>

        <div id="collapseFive" class="panel-collapse collapse in">
            <div class="row">
                <div class="col-lg-12">
                    <?php require "shared/_ServiceBudgetTracker_v2.php" ?>
                </div>
            </div>
        </div>

    </div>


        <div class="panel panel-default profilePanel">

            <div class="panel-heading profilePanel" data-toggle="collapse" href="#collapseThree" role="button">
                <h4 class="panel-title"><a href=""><span class="fa fa-chevron-down"></span>&nbsp;<span class="fa fa-flag"></span>&nbsp;My Flagged Services</a></h4>
                <button class="btn btn-default panel-edit pull-right" data-toggle="modal" data-target="#editEmail">View All Flagged Services</button>
            </div>

            <div id="collapseThree" class="panel-collapse collapse in">
                <div class="row">
                    <div class="col-lg-12">
                        <?php require "shared/_FlagTracker.php" ?>
                    </div>
                </div>
            </div>

        </div>


        <div class="panel panel-default profilePanel">

            <div class="panel-heading profilePanel" data-toggle="collapse" href="#collapseFour" role="button">
                <h4 class="panel-title"><a href=""><span class="fa fa-chevron-down"></span>&nbsp;<span class="fa fa-user"></span>&nbsp;User Activity Tracker</a></h4>
            </div>

            <div id="collapseFour" class="panel-collapse collapse">
                <div class="row">
                    <div class="col-lg-12">
                        <?php require "shared/_UserActivityTracker.php" ?>
                    </div>
                </div>
            </div>

        </div>


<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                -->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                -->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>

<?php $Script = '
    <script type="text/javascript">
    

        $(document).ready(function(){
            App.init();
            App.dashboard();
            $(\'.collapse\').collapse();
            
        });

    </script>
' ?>