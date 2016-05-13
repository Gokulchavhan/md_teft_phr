<div class="row">
    <div class="col-lg-12">
        <?php require "shared/_RecentServiceActivity.php" ?>
    </div>
</div>
<?php $Script = '
    <script type="text/javascript">

        $(document).ready(function(){
            App.init();
            App.dashboard();
        });

    </script>
'?>