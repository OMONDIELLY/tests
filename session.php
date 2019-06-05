<?php
include_once("dbcon.php");
?>
<?php  
session_start();
global $link;

//check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '' )) {
	//Not logged 
	?>
	<script>
	window.location = "login.html"; 
	<script>
<?php
}else{
	//logged in
	$session_id = $_SESSION['id'];
	$user_query = mysqli_query($link ,"SELECT * FROM hotel_logins WHERE user_id = '$session_id' ");
	$user_row = mysqli_fetch_array($user_query);
	$name = $user_row['name'];
}
	
?>
