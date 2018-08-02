<?php
require_once("../_includes/connection.php");
require_once("../_includes/user_session.php");
?>

<?php
$category=$_POST['category'];
$todo=$_POST['categories'];
if($todo=="add")
{
	$query="SELECT * FROM `categories` where `category`='$category'";
	$result=$mysqli->query($query);
	if($result->num_rows==0){
		$queryx="SELECT * FROM `categories`";
		$resultx=$mysqli->query($queryx);
		$id=$resultx->num_rows+1;
		$query1="INSERT INTO `categories` (`id`,`category`) VALUES ($id,'$category')";
		$result1=$mysqli->query($query1);
		header("location:categories.php?msg=category added!");
		exit;
	}
	else
	{
		header("location:categories.php?msg=category exists!!");
		exit;
	}
}

elseif($todo=="delete")
{
	$query2="DELETE FROM `categories` WHERE `category`='$category'";
	$result2=$mysqli->query($query2);
	header("location:categories.php");
	exit;
}

elseif($todo=="modify")
{
	$present=$_POST['present'];
	//echo $present.$category;
	$query3="UPDATE `categories` SET `category`='$category' WHERE `category`='$present'";
	$result3=$mysqli->query($query3);
	header("location:categories.php");
	exit;
}
?>