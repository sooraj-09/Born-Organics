<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="update order set ostatus='1' where oid='$id'";
if(mysql_query($sql,$con))
	echo "<script>alert('Approved!');location.href='vorder.php';</script>";
     else
     	{"<script>alert('error!');location.href='vorder.php';</script>";
		}

?>