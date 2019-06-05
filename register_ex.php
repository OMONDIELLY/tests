<?php
require ("dbcon.php");
if (isset($_POST['submit'])){
	$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$mobile = filter_var($_POST['mobile'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$in_date = filter_var($_POST['in_date'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$out_date = filter_var($_POST['out_date'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$room_type = filter_var($_POST['room_type'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	
	
	
	$sql_reg=mysqli_query($link, "INSERT INTO hotel_logins(name,mobile,email,password,in_date,out_date,room_type) VALUES('$name','$mobile','$email','$password','$in_date','$out_date','$room_type')") or die (mysqli_error($link));
	
	header('location:login.html?success');
	exit();
	
}
?>