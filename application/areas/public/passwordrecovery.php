<div class="col-sm-10 col-sm-offset-1">
    <div class="panel panel-default">
        <div class="panel-body" style="padding-top: 0">
            <h2 class="form-signin-heading" id="myModalLabel" style="border-bottom: 2px solid #ddd; color: #428BCA; margin-bottom: 30px;"><b>MyLTSS</b>&nbsp;Password Recovery</h2>
            <form class="form-horizontal" role="form" id="loginform" method="post" name="form" action="<?php echo base_url() . 'index.php/site/attemptLogin' ?>">

                <div class="form-group required">
                    <label for="email" class="col-sm-3 control-label required"><strong>Username:</strong></label>
                    <div class="col-sm-9 col-md-6">
                        <input class="form-control" id="email" required type="email">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label required"><strong>Email Address:</strong></label>
                    <div class="col-sm-9 col-md-6">
                        <input class="form-control" required id="phone" type="phone">
                    </div>
                </div>

                <div class="row">
                    <hr style="margin: 23px 15px;">
                    <div class="col-xs-6 col-sm-offset-3 col-sm-4 col-md-3">
                        <button type="button" class="btn btn-danger btn-block" onclick="window.location='<?php echo base_url()."index.php"?>';">Cancel</button>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <button type="button" class="btn btn-success btn-block" onclick="window.location='<?php echo base_url()."index.php/passwordrecoveryconfirmation"?>';">Complete</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>