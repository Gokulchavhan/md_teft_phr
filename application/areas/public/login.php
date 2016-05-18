<style>
    .login-icon {
        position: absolute;
        margin-left: -35px;
        margin-top: 12px;
        font-size: 130%;
        text-align: center;
        width: 30px;
        color: #999;
    }
</style>

<form class="form-signin" id="loginform" method="post" name="form" action="<?php echo base_url().'index.php/site/attemptLogin'?>">
    <h2 class="form-signin-heading primary-color" id="myModalLabel"><b>MyLTSS</b>&nbsp;Login</h2>
    <span class="fa fa-user login-icon"></span><input type="text" class="form-control" placeholder="User Name" name="username" required autofocus title="roisered (Public Member 1); gabrielgreen (Public Member 2); penelopepurple (Un-authorized Provider); susanasilver (Authorized Provider); burtonbrown (DOM Staff)">
    <span class="fa fa-lock login-icon"></span><input type="password" class="form-control" placeholder="Password"  name="usernamepassword" required title="Type anything for password">
<!--    <label class="checkbox">-->
<!--        <input type="checkbox" value="remember-me"> Remember me-->
<!--    </label>-->
    <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block"/>
    <br>
    <br>
    <a href="<?php echo base_url().'index.php/usernamerecovery'?>">Forgot Username?</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url().'index.php/passwordrecovery'?>">Forgot Password?</a>
</form>

