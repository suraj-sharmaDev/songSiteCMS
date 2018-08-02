<?php require_once("_includes/connection.php");
if(isset($_POST['login']) && $_POST['login']=="mmm")
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * from admin WHERE username='$username' AND password='$password'";
	$reees=$mysqli->query($query);
	$total_recs=$reees->num_rows;
	if($total_recs == 0)
	{
		header("location:login.php?msg=Unknown user or password");
		exit;	
	}
	if ($total_recs>0)
	{
		$logeduser= $username;
		session_start();
		$_SESSION['user']=$username;
		header("location:admin/index.php");
		exit;
	}
	else
	{
		header("location:login.php");
	}
	}


?>