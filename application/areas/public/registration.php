<div class="panel panel-default">
    <div class="panel-body">
        <h2 id="myModalLabel" class="primary-color">
            <b>MyCare</b> Registration
        </h2>
        <hr>
        <br>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label required">First Name</label>
                <div class="col-sm-5">
                    <input class="form-control" id="firstname">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label required">Last Name</label>
                <div class="col-sm-5">
                    <input class="form-control" id="lastname">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="gender" class="col-sm-3 control-label required">Date of Birth</label>
                <div class="col-sm-4">
                    <input class="form-control" id="gender" type="date"/>
                </div>
            </div>
            <div class="form-group">
                <label for="race" class="col-sm-3 control-label required">Gender</label>
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
                <label for="ssn" class="col-sm-3 control-label required">SSN</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="ssn">
                </div>
            </div>
            <div class="form-group">
                <label for="manum" class="col-sm-3 control-label required">MA#</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="manum">
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-3 control-label required">Phone Number</label>
                <div class="col-sm-4">
                    <input class="form-control" type="phone" id="phone">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="username" class="col-sm-3 control-label required">Username</label>
                <div class="col-sm-5">
                    <input class="form-control" id="username" placeholder="Username">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label required">Password</label>
                <div class="col-sm-4">
                    <input class="form-control" id="password" type="password">
                </div>
            </div>
            <div class="form-group">
                <label for="dob" class="col-sm-3 control-labe requiredl">Confirm Password</label>
                <div class="col-sm-4">
                    <input class="form-control" id="dob" type="password">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label required">Email Address</label>
                <div class="col-sm-4">
                    <input class="form-control" id="email" type="email">
                </div>
            </div>
            <div class="form-group">
                <label for="emailConfirm" class="col-sm-3 control-label required">Confirm Email Address</label>
                <div class="col-sm-5">
                    <input class="form-control" id="emailConfirm" type="email">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label required">Preferred Method of Communication</label>
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
                    <span class="fa fa-check"></span>&nbsp;&nbsp;Complete
                </button>
            </div>
        </form>
    </div>
</div>