<?php
 include_once "dbcon.php";
 session_start();
 global $link;
 if (isset($_POST["login"])) {
	$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

 	$sql = mysqli_query($link,"SELECT * FROM hotel_logins WHERE email='".$email."' and password ='".$password."'")or die (mysqli_error());
 	
 	$count = mysqli_num_rows($sql);
 	$row = mysqli_fetch_array($sql);
		if ($count > 0) { 
			$_SESSION['id'] = $row['user_id'];
			$id = $row['user_id'];
			$name= $row['firstname'];
			$email= $row['email'];
			$password= $row['password'];

			header("location:login_suc.php?successful");
			
		}else{
			echo "
			<script>

				if (confirm('Wrong Email or Password, Please try again...')) {
					window.location = './login.html';
				}else{
					window.location = './login.html';
				}
			</script>";
		}
 }
?>