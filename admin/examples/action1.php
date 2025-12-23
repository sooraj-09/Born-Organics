	<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="UPDATE `online`.`order` SET ostatus='1' WHERE oid='$id'";
echo $sql;
if(mysql_query($sql,$con))
	echo "<script>alert('Approved!');location.href='vorder.php';</script>";
     else
     	{"<script>alert('error!');location.href='vorder.php';</script>";
		}

?>