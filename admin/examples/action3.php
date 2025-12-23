<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="UPDATE `online`.`order` SET ostatus='3' WHERE oid='$id'";
if(mysql_query($sql,$con))
	echo "<script>alert('OnRoute!');location.href='vorder.php';</script>";
     else
     	{"<script>alert('error!');location.href='vorder.php';</script>";
		}

?>