<?php
	session_start();
	$con = mysqli_connect("localhost","root","","alpine")
	or die("Failed to connect mysql server ".mysqli_connect_error());
	$email = $_POST['email'];
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password =md5($_POST['password']);
	$phone = mysqli_real_escape_string($con, $_POST['phone']);
	$country = mysqli_real_escape_string($con, $_POST['country']);
	$checkin = mysqli_real_escape_string($con, $_POST['checkin']);
	$checkout = mysqli_real_escape_string($con, $_POST['checkout']);
	$numberofrooms =$_POST['numberofrooms'];
	$numberofguests =$_POST['numberofguests'];
	$meals = mysqli_real_escape_string($con, $_POST['meals']);
	$balcony = mysqli_real_escape_string($con, $_POST['balcony']);
	$additional = mysqli_real_escape_string($con, $_POST['additional']);
	
	$query = "INSERT INTO booking(email, username, password, phone, country, checkin, checkout, numberofrooms, numberofguests, meals, balcony, additional) 
				VALUES('$email', '$username', '$password', '$phone', '$country', '$checkin', '$checkout', '$numberofrooms', '$numberofguests', '$meals', '$balcony', '$additional')";
	if(!mysqli_query($con, $query))	{
		echo "Error" .mysqli_error($con);
	}else{
		echo "";
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
					<a href="booking1.php"><button>LogOut</button></a>
					<?php
					$_SESSION['message'] = "Enter Username and Password to login";
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