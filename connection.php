<?php

 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con,'bankingsystem');

 if (!$con) {
 	echo die("connection failed because".mysqli_connect_error());
 }
 error_reporting(0);
?>