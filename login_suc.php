<?php include "dbcon.php";?>
<?php include "session.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	
		<title>Hotel management</title>
	
	<!-------------------------------------------------------------------------------------------------->
    <link href="vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="hotel.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <script src="vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="vendor/bootstrap4/js/bootstrap.js"></script>
    <script src="vendor/bootstrap4/js/bootstrap.min.js"></script>
		<script src="js/fontawsome-all.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
	<!----------------magnific popup----------------->
	<link rel="stylesheet" href="vendor/mgnafic%2520popup/magnific-popup.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	

	</head>
<body>
		<nav class="navbar navbar-expand-md navbar-light  bg-light sticky-top">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
	
			<span class="navbar-toggle-icon"></span>
			</button>
				
			
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="navbarResponsive" style="background-color:skyblue">
		<ul class="navbar-nav ml-auto">
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <li class="nav-item" style="color: white"><a class="nav-link" href="i"></a> </li></div>	
				
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2"><li class="nav-item"><a class="nav-link" href="hotel.html">home </a> </li></div>	
				
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" onclick="swap(this);" data-table="login-tab" class="login-tab"><li class="nav-item"><a class="nav-link" href="booking.html"> book-in</a> </li>	</div>
				
			<div class="col-xs-2 col-sm-2 col-md-2  col-lg-2 col-xl-4" onclick="swap(this);" data-table="signup-tab" class="signup-tab"><li class="nav-item"><a class="nav-link" href="login.html">logout</a> </li></div>
			</ul>
		</div>
			</div>
		</nav>
         <!-----------slide start--------------------------------------------------------------------------------->  
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="align-content: center; font-family: Britannic Bold; font-display: fallback;">
				<h3> welcome to mombasa dishes, We are glad to serve you!!</h3>
			</div>
		</div>
	</div>
	
	<?php 
		$query = mysqli_query($link,"SELECT * FROM hotel_logins WHERE user_id = '$session_id'")or die(mysqli_error($link));
		$row = mysqli_fetch_array($query);

		$name = $row['name'];
	  ?>

	<div class="get-in touch container-fluid" style="background-color: white; height: 400px;">
		<div class="row"  style="text-align: center;">
			<div class="col-md-12" style="margin-top: 100px;">
				<div  class="text" style="align-content: center">
					<h3>view your details</h3>
					<br>
					<form>
					<i class="fas fa-envelope-open-text  fa-2x"></i>
						<input type="email" placeholder="email" style="border: none; outline: none;border-bottom: 2px solid black; width:25%; height: 25px;margin: 5px; margin-top: 10px; font-size-adjust: 18px;text-indent: 38px;" value="<?php echo $row['email'];?>" disabled >
						<br>
						
						<i class="fas fa-user-circle  fa-2x"></i>
						<input type="name" placeholder="name" style="border: none; outline: none;border-bottom: 2px solid black; width:25%; height: 25px;margin: 5px; margin-top: 10px; font-size-adjust: 18px;text-indent: 38px;" value="<?php echo $row['name'];?>"  disabled>
						<br>
						<i class="fas fa-home  fa-2x"></i>
						<input type="name" placeholder=" room_type" style="border: none; outline: none;border-bottom: 2px solid black; width:25%; height: 25px;margin: 5px; margin-top: 10px; font-size-adjust: 18px;text-indent: 38px;" value="<?php echo $row['room_type'];?>"  disabled>
						<br>
						<i class="fas fa-calendar-alt  fa-2x"></i>
						<input type="date" placeholder="in_date" style="border: none; outline: none;border-bottom: 2px solid black; width:25%; height: 25px;margin: 5px; margin-top: 10px; font-size-adjust: 18px;text-indent: 38px;" value="<?php echo $row['in_date'];?>"  disabled>
						<br>
						<i class="fas fa-calendar-alt  fa-2x"></i>
						<input type="date" placeholder=" out_date" style="border: none; outline: none;border-bottom: 2px solid black; width:25%; height: 25px;margin: 5px; margin-top: 10px; font-size-adjust: 18px;text-indent: 38px;" value="<?php echo $row['out_date'];?>"  disabled>
						<br>
						
						<!------------------------------------------------------------php------------>
						
						
					</form>
				</div>
			
		</div>
		
			</div>
	</div>
		<div class="get-in touch container-fluid" style="background-color: red; height: 400px;">
		<div class="row"  style="text-align: center;">
			<div class="col-md-12" style="margin-top: 100px;">
				<div  class="text" style="align-content: center">
					<h3>Lets Get in Touch</h3>
					<h4>Having any query.Feel free to ask</h4>
				</div>
			</div>
		</div>
		<div class="row" style="text-align: center;margin-top: 70px;">
			<div class="col-md-6">
				<i class="fas fa-phone fa-2x"></i><p> 0798230245</p>
			</div>
			<div class="col-md-6">
				<i class="fas fa-envelope-open-text  fa-2x"></i><p> feedback@mombasadishes.com</p>
			</div>
		</div>
	
	
	</div>
	
	
	
	
	
	</body>
</html>