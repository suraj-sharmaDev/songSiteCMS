<?php
require_once("../_includes/user_session.php");
require_once("../_includes/connection.php"); 
include "size.php";
$songsManage=$_POST['songsManage'];
if($songsManage=='add')
{
		$songTitle=$_POST['songTitle'];
		$category=$_POST['category'];
		$albumName=$_POST['albumName'];
		$downloadUrl=$_POST['downloadUrl'];
		$songSize=getRemoteFilesize($downloadUrl);
		$added_on=date("Y-m-d");
		$query="SELECT * FROM `songs` where `song_title`='$songTitle'";
		$result=$mysqli->query($query);
		if($result->num_rows!=0)
		{
			header('location:songsManage.php?category='.$category.'&msg="song exists"');
			exit;
		}
		else
		{
			$query1="INSERT INTO `songs` (`song_title`,`album`,`category`,`url`,`size`,`added_on`) VALUES 
			('$songTitle','$albumName','$category','$downloadUrl','$songSize','$added_on')";
			$result1=$mysqli->query($query1);
			if($result1){
				$query2="UPDATE `categories` SET `count`=`count`+1 where `category`='$category'";
				$result2=$mysqli->query($query2);
				header('location:songsManage.php?category='.$category.'&msg="song added"');
				exit;				
			}
			else{
				printf($mysqli->error);
			}
		}
}
elseif($songsManage=='modify')
{
	$category=$_POST['category'];
	$songTitle=$_POST['songTitle'];
	$presentTitle=$_POST['presentTitle'];
	$url=$_POST['downloadUrl'];
	$album=	$_POST['albumName'];
	$query="UPDATE `songs` SET `song_title`='$songTitle', `album`='$album',`url`='$url' WHERE `song_title`='$presentTitle' AND `category`='$category'";
	$result=$mysqli->query($query);
	header('location:songsManage.php?category='.$category);
	exit;
}
elseif($songsManage=='delete')
{
	$category=$_POST['category'];
	$songsTitle=$_POST['songsTitle'];
	$query="DELETE FROM `songs` where `category`='$category' AND `song_title`='$songsTitle'";
	$result=$mysqli->query($query);
	header('location:songsManage.php?category='.$category);
	exit;
}

?>