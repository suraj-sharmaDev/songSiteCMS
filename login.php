<?php 
include ("header.php");
error_reporting(0); 
session_start();
$loged_user=$_SESSION['user'];
if($loged_user)
{
header("location:admin/index.php");
exit;
}
?>
    </section>
    <div class="login">
        <div style="padding-left:40%;border:1px solid green;border-radius:60px;"><span><i class="fa fa-user" style="font-size:60px;"></i></span>
            <p style="width:100px;">Admin&nbsp;</p>
        </div>
        <form action="signinpros.php" method="post">
            <input name="login" type="hidden" value="mmm">
            <p>Username</p><input class="form-control" type="text" name="username" placeholder="Username" style="width:170px;margin-bottom:20px;">
            <p>Password</p><input class="form-control" type="password" name="password" placeholder="Password" style="width:170px;margin-bottom:20px;"><br/>
            <button class="btn btn-primary" type="Submit">Login</button></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
