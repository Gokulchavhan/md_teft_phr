<div class="col-sm-10 col-sm-offset-1">
    <h2 class="form-signin-heading" id="myModalLabel" style="border-bottom: 2px solid #ddd; color: #428BCA; margin-bottom: 30px;"><b>MyCare</b>&nbsp;Password Recovery</h2>
    <form class="form-horizontal" role="form" id="loginform" method="post" name="form" action="<?php echo base_url() . 'index.php/site/attemptLogin' ?>">

        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-4">
                <input class="form-control" id="email" placeholder="Email" required>
            </div>
        </div>

        <div class="form-group required">
            <label for="phone" class="col-sm-3 control-label">Phone #</label>
            <div class="col-sm-4">
                <input class="form-control" id="phone" placeholder="Phone #" required>
            </div>
        </div>
        <hr>
        <div class="col-sm-offset-3 col-sm-5">
            <button type="button" class="btn btn-default" onclick="window.location='<?php echo base_url()."index.php"?>';">Cancel</button>
            <button type="button" class="btn btn-success" onclick="window.location='<?php echo base_url()."index.php/passwordrecoveryconfirmation"?>';">Submit</button>
        </div>
    </form>
</div>