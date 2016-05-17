<div class="panel panel-default">
    <div class="panel-body">
        <h2 id="myModalLabel" class="primary-color">
            <b>MyCare</b> Registration
        </h2>
        <hr>
        <br>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label required"><strong>First Name:</strong></label>
                <div class="col-sm-5">
                    <input class="form-control" id="firstname">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label required"><strong>Last Name:</strong></label>
                <div class="col-sm-5">
                    <input class="form-control" id="lastname">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="gender" class="col-sm-3 control-label required"><strong>Date of Birth:</strong></label>
                <div class="col-sm-4">
                    <input class="form-control" id="datepicker" type="text"/>
                </div>
            </div>
            <div class="form-group">
                <label for="race" class="col-sm-3 control-label required"><strong>Gender:</strong></label>
                <div class="col-sm-9" style="padding-left: 21px;">
                    <label class="radio-inline ">
                        <input type="radio" id="gender" name="gender"> Male
                    </label>
                    <label class="radio-inline ">
                        <input type="radio" id="gender" name="gender"> Female
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="ssn" class="col-sm-3 control-label required"><strong>SSN:</strong></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="ssn">
                </div>
            </div>
            <div class="form-group">
                <label for="manum" class="col-sm-3 control-label required"><strong>MA#:</strong></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="manum">
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-3 control-label required"><strong>Phone Number:</strong></label>
                <div class="col-sm-4">
                    <input class="form-control" type="phone" id="phone">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="username" class="col-sm-3 control-label required"><strong>Username:</strong></label>
                <div class="col-sm-5">
                    <input class="form-control" id="username" placeholder="Username">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label required"><strong>Password:</strong></label>
                <div class="col-sm-4">
                    <input class="form-control" id="password" type="password">
                </div>
            </div>
            <div class="form-group">
                <label for="dob" class="col-sm-3 control-label required"><strong>Confirm Password:</strong></label>
                <div class="col-sm-4">
                    <input class="form-control" id="dob" type="password">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label required"><strong>Email Address:</strong></label>
                <div class="col-sm-4">
                    <input class="form-control" id="email" type="email">
                </div>
            </div>
            <div class="form-group">
                <label for="emailConfirm" class="col-sm-3 control-label required"><strong>Confirm Email
                        Address:</strong></label>
                <div class="col-sm-5">
                    <input class="form-control" id="emailConfirm" type="email">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label required"><strong>Preferred Method of
                        Communication:</strong></label>
                <div class="col-sm-5">
                    <select class="form-control">
                        <option>All</option>
                        <option>Email</option>
                        <option>Phone</option>
                        <option>US Mail</option>
                    </select>
                </div>
            </div>
            <br>
            <hr>
            <div class="col-xs-12 col-sm-offset-3 col-sm-5">
                <button type="button" class="btn btn-success btn-lg" onclick="window.location='<?php echo base_url() . "index.php/registrationconfirmation" ?>';">
                    <span class="fa fa-check"></span>&nbsp;&nbsp;Register
                </button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#datepicker').datepicker({
            inline: true
            });
    });
</script>