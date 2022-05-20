<?php
session_start();
include('include/config.php');
$id = $_GET['id'];
$status = $_GET['status'];

$query = "update users set status=$status where id=$id";
 $r = mysqli_query($con,$query);
header('location:user-manage.php');
?>
	