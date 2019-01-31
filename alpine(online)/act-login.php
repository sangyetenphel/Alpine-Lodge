<?php
	session_start();
	$mysqli = NEW MySQLi('localhost','id4279635_admin','alpinelodge123','id4279635_alpine');
	$error= ""; //variable to store Error message
	
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$resultSet = $mysqli->query("SELECT * FROM booking WHERE username='$username' AND password='$password'") or die("Failed to query datatbase".mysqll_error());
	if($resultSet->num_rows !=0){
		while($rows = $resultSet->fetch_assoc()){
			$username = $rows['username'];
			$email = $rows['email'];
			$phone = $rows['phone'];
			$country = $rows['country'];
			$numberofrooms = $rows['numberofrooms'];
			$numberofguests = $rows['numberofguests'];
			$checkin = $rows['checkin'];
			$checkout = $rows['checkout'];
			$meals = $rows['meals'];
			$balcony = $rows['balcony'];
			$additional = $rows['additional'];
			
		}
}else{
	$_SESSION['message'] = "Username or Password is invalid";
	header("location:booking1.php");
	 
}

?>
<html>
<head>
<link rel="stylesheet" href="./css/style.css">
</head>
<body class="booking">
		<div class="container-booking">
			<h1><span class="highlight">Alpine</span> Lodge</h1>
			<div class="wrapper animated bounceInLeft">
				<div class="company-info">
					<h3>Alpine Lodge.</h3>
					<ul>
						<li><i class="fa fa-road"></i> Soreng Bazar above Sisco Bank</li>
						<li><i class="fa fa-phone"></i> (740) 724-4766</li>
						<li><i class="fa fa-envelope"></i> sangyetenphel@gmail.com</li>
					</ul>
					<hr/>
					<h3>My profile</h3>
					<form action="" method="POST">
					<button name="logout" value="logout">LogOut</button>
					</form>
					<?php
					if (isset($_POST['logout'])){
					$_SESSION['message'] = "Enter Username and Password to login";
					header("location:booking1.php");
					}
					?>
					</div>
			<div class="contact">
					<div class="act-register">
						<h2>BOOKING DETAILS</h2>
						<p>Name : <?php echo '<strong>' .$username. '</strong>'?></p>
						<p>Email Address : <?php echo '<strong>' .$email. '</strong>'?></p>
						<p>Contact No. : <?php echo '<strong>' .$phone. '</strong>'?></p>
						<p>Country : <?php echo '<strong>' .$country. '</strong>'?></p>
						<p>Number of rooms : <?php echo '<strong>' .$numberofrooms. '</strong>'?></p>
						<p>Number of guests : <?php echo '<strong>'.$numberofguests. '</strong>'?></p>
						<p>Check in date : <?php echo '<strong>'.$checkin. '</strong>'?></p>
						<p>Check out date : <?php echo '<strong>' .$checkout. '</strong>'?></p>
						<p>Meals : <?php echo '<strong>' .$meals. '</strong>'?></p>
						<p>Balcony : <?php echo '<strong>' .$balcony. '</strong>'?></p>
						<p>Additional requirements : <?php echo '<strong>' .$additional. '</strong>'?></p>
						<br>
						<p>Thank you for staying with us.</p>
						<p>Have a nice day!</p>
						</div>
			</div>
			</div>
		</div>
</body>
</html>
</html>


