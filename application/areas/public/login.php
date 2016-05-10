
<form class="form-signin" id="loginform" method="post" name="form" action="<?php echo base_url().'index.php/site/attemptLogin'?>">
    <h2 class="form-signin-heading" id="myModalLabel">User Login</h2>
    <input type="text" class="form-control" placeholder="User Name" name="username" required autofocus title="roisered (Public Member 1); gabrielgreen (Public Member 2); penelopepurple (Un-authorized Provider); susanasilver (Authorized Provider); burtonbrown (DOM Staff)">
    <input type="password" class="form-control" placeholder="Password"  name="usernamepassword" required title="Type anything for password">
<!--    <label class="checkbox">-->
<!--        <input type="checkbox" value="remember-me"> Remember me-->
<!--    </label>-->
    <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block"/>
    <br>
    <br>
    <a href="#">Forgot User Name?</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Forgot Password?</a>
</form>