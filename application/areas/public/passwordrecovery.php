<div class="col-sm-10 col-sm-offset-1">
    <h2 class="form-signin-heading" id="myModalLabel" style="border-bottom: 2px solid #ddd; color: #428BCA; margin-bottom: 30px;"><b>MyCare</b>&nbsp;Password Recovery</h2>
    <form class="form-horizontal" role="form" id="loginform" method="post" name="form" action="<?php echo base_url() . 'index.php/site/attemptLogin' ?>">

        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-4">
                <input class="form-control" id="username" type="text" required>
            </div>
        </div>

        <div class="form-group required">
            <label for="email" class="col-sm-3 control-label">Email Address</label>
            <div class="col-sm-4">
                <input class="form-control" id="email" type="email" required>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-6 col-sm-offset-3 col-sm-5">
                <button type="button" class="btn btn-danger btn-block" onclick="window.location='<?php echo base_url()."index.php"?>';">Cancel</button>
            </div>
            <div class="col-xs-6 col-sm-4">
                <button type="button" class="btn btn-primary btn-block" onclick="window.location='<?php echo base_url()."index.php/passwordrecoveryconfirmation"?>';">Submit</button>
            </div>
        </div>

    </form>
</div>