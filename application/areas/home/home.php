<div class="col-md-3">
    <div class="col-sm-12 col-md-3 affix affixed-side-content no-padding" style="margin-right: 15px;">
        <?php require "shared/_posSnapshot.php" ?>
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