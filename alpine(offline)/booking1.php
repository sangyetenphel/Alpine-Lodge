<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable fooding and lodging">
	  <meta name="keywords" content="lodge, affordable fooding and lodging">
  	<meta name="author" content="Brad Traversy">
    <title>Alpine Lodge | Booking</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
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
					<h3>My Profile</h3>
					<form action="act-login.php" method="POST">
					<p>Username <input type="text" name="username" required autofocus /></p>
					<p>Password <input type="password" name="password" required /></p>
					<button name="submit">Login</button>
					<p><?php echo $_SESSION['message'];?></p>
					</form>
				</div>
			<div class="contact">
				<h3>Personal Details</h3>
					<form action="act-register.php" method="POST">
						<p>
						<label for="email">Email Address</label>
						<input type="text" name="email" id="email" required autofocus placeholder="Your Email" pattern="[a-zA-Z]{3,}@[a-zA=Z]{3,}[.]{1}[a-zA-Z]{2,}" title="Please enter in a valid email address"><br>
						</p>
						<br>
						<p>
						<label for="name">Username</label>
						<input type="text" name="username" id="name" required placeholder="Your username" pattern="[a-zA-Z]{3,}" title="Please enter in more than three letters and no spaces"> <br>
						</p>
						<br>
						<p>
						<label for="name">Password</label>
						<input type="password" name="password" id="password" required autofocus placeholder="Enter a password"> <br>
						</p>
						<br>
						<p>
						<label for="phone">Phone</label>
						<input type="tel" name="phone" id="phone" required placeholder="Please enter in your phone number" pattern="[0-9]{10}" title="Please enter in a valid phone number">
						</p>
						<br>
						<p>
						<label>Country</label>
						<select name="country" required>
							<option value=""> </option>
							<option value="INDIA">INDIA</option>
							<option value="NEPAL">NEPAL</option>
							<option value="BHUTAN">BHUTAN</option>
							<option value="CHINA">CHINA</option>
						</select>
						</p>
					<br>
						<h3>Booking Details</h3>
						<p>
						<label for="checkin">Check in Date</label>
						<input id="checkin" type="date" name="checkin" min="2018-05-27" required>
						</p>
						<br>
						<p>
						<label for="checkout">Check out Date</label>
						<input id="checkout" type="date" name="checkout" min="2018-05-27" required>
						</p>
						<br>
						<p>
						<label for="numberofrooms">Number of Rooms</label>
						<input id="numberofrooms" type="number" name="numberofrooms" min="1" max="6" required title="Maximum of 6 rooms">
						</p>
						<br>
						<p>
						<label for="numberofguests">Number of Guests</label>
						<input id="numberofguests" type="number" name="numberofguests" min="1" max="6" required title="Maximum of 6 people">
						</p>
						<br>
						<p>Do you want meals?</p>
						<label for="yesMeals"><input id="yesMeals" type="radio" name="meals" value="yes" required> Yes</label> 
						<label for="noMeals"><input id="noMeals" type="radio" name="meals" value="no" required> No</label>
						<p>
						<br>
						<label for="balcony"></label>Do you want a balcony?</label>
						<input id="balcony" type="checkbox" name="balcony" value="yes" checked>
						</p>
						<br>
						
						<p class="full">
						<label>Additional Requirements</label>
						<textarea name="additional" rows="5"></textarea>
						</p>
						<br>
						<p class="full">
						<button>Submit</button>
						</p>
						
				</form>
			</div>
			</div>
		</div>
		
	</body>
</html>

