<h2 id="myModalLabel" style="border-bottom: 2px solid #ddd; color: #428BCA; margin-bottom: 30px;"><b>MyCare</b> Registration</h2>
<form class="form-horizontal" role="form">
    <div class="form-group">
        <label for="firstname" class="col-sm-3 control-label">First Name</label>
        <div class="col-sm-5">
            <input class="form-control" id="firstname" placeholder="First Name">
        </div>
    </div>
    <div class="form-group">
        <label for="middlename" class="col-sm-3 control-label">Middle Name</label>
        <div class="col-sm-5">
            <input class="form-control" id="middlename" placeholder="Middle Name">
        </div>
    </div>

    <div class="form-group">
        <label for="lastname" class="col-sm-3 control-label">Last Name</label>
        <div class="col-sm-5">
            <input class="form-control" id="lastname" placeholder="Last Name">
        </div>
    </div>

    <div class="form-group">
        <label for="suffix" class="col-sm-3 control-label">Suffix</label>
        <div class="col-sm-4">
            <input class="form-control" id="suffix" placeholder="Suffix">
        </div>
    </div>

    <br>
    <div class="form-group">
        <label for="dob" class="col-sm-3 control-label">Date of Birth</label>
        <div class="col-sm-4">
            <input class="form-control" id="dob" placeholder="Date of Birth">
        </div>
    </div>

    <div class="form-group">
        <label for="gender" class="col-sm-3 control-label">Gender</label>
        <div class="col-sm-4">
            <select class="form-control" id="gender" placeholder="Gender">
                <?php
                foreach ($genders as $gender) {
                    echo "<option>{$gender}</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="race" class="col-sm-3 control-label">Race</label>
        <div class="col-sm-4">
            <select class="form-control" id="race" placeholder="Races">
                <?php
                foreach ($races as $race) {
                    echo "<option>{$race}</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="hispanic" class="col-sm-3 control-label">Hispanic?</label>
        <div class="col-sm-1">
            <div class="radio">
                <label>
                    <input type="radio" id="hispanic" name="hispanic"> Yes
                </label>
            </div>
        </div>
        <div class="col-sm-1">
            <div class="radio">
                <label>
                    <input type="radio" id="hispanic" name="hispanic"> No
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="county" class="col-sm-3 control-label">County</label>
        <div class="col-sm-5">
            <select class="form-control" id="county" placeholder="Counties">
                <?php
                foreach ($counties as $county) {
                    echo "<option>{$county}</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <br>
    <div class="form-group">
        <label for="email" class="col-sm-3 control-label">e-mail</label>
        <div class="col-sm-4">
            <input class="form-control" id="email" placeholder="e-mail">
        </div>
    </div>

    <div class="form-group">
        <label for="phone" class="col-sm-3 control-label">Phone #</label>
        <div class="col-sm-4">
            <input class="form-control" id="phone" placeholder="Phone #">
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="username" class="col-sm-3 control-label">User Name</label>
        <div class="col-sm-5">
            <input class="form-control" id="username" placeholder="User Name">
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="col-sm-offset-3 col-sm-5">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Submit</button>
    </div>
</form>