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
<?php $Script = '
    <script type="text/javascript">

        $(document).ready(function(){
            App.init();
            App.dashboard();
        });

    </script>
' ?>