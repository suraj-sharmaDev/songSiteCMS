
<?php
require_once("../_includes/connection.php"); 
include "size.php";
$songTitle="barbie";
$query="INSERT INTO `check` (`name`) VALUES ('$songTitle')";
$result=$mysqli->query($query);
?>