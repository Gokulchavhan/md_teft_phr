<div class="col-sm-3">
    <div class="col-sm-12 col-md-3 affix affixed-side-content no-padding">
        <div class="col-sm-6 col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>
                        <span class="secondary-color">Service Plan Summary</span><br>
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
                    <br>
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
            <br>
        </div>
    </div>
</div>
<div class="col-sm-9">
    <div class="row">
        <div class="col-lg-12">
            <?php require "shared/_ServiceActivityTracker.php" ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php require "shared/_ServiceFrequencyTracker.php" ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php require "shared/_FlagTracker.php" ?>
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