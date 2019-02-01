<?php
//define variables and set to empty values
$success="";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'sangyetenphel@gmail.com';
	$subject = "Feedback";
	$body = '
					<h2>Feedback </h2>
					<hr>
					<p>Name:<br>'.$name.'</p>
					<p>Email:<br>'.$email.'</p>
					<p>Feedback:<br>'.$message.'</p>
	';
//headers
	$headers = "MIME-Version: 1.0" ."\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
	$headers .= "From: ".$name."<".$email.">"."\r\n";
	$headers .= "Reply-To:" .$email. "\r\n";
	$headers .= "X-Mailer:PHP/" . phpversion();
	$headers .= "X-Priority: 1"."\r\n";
	
//send
$send = mail($to, $subject, $body, $headers);
if($send){
	$success = "Feedback sent, thank you for helping us!";
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Alpine Lodge | Contact</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
     <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Alpine</span> Lodge</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="current"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>


    <?php
		include_once 'newsletter.php';
	?>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Contact Info.</h1>
          <ul id="services">
            <li>
              <h3>Residential Address</h3>
              <p>Soreng</p>
			  <p>West Sikkim, 737121</p>
			  <p>India</p>
            </li>
            <li>
              <h3>For Fooding and Lodging</h3>
              <p>Jayanti Rai</p>
			  <p>Mobile - (740) 724-4766</p>
            </li>
            <li>
              <h3>For Web Designing</h3>
              <p>Sangye Tenphel</p>
			  <p>Mobile - (861) 731-2054</p>
			  <p>Email - sangyetenphel@gmail.com</p>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Feed Back</h3>
            <form class="quote" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  						<div>
  							<label>Name</label><br>
  							<input type="text" name="name" placeholder="Name" required>
  						</div>
  						<div>
  							<label>Email</label><br>
  							<input type="email" name="email" placeholder="Email Address" required>
  						</div>
  						<div>
  							<label>Message</label><br>
  							<textarea name="message" placeholder="Message" required></textarea>
  						</div>
  						<button class="button_1" type="submit">Send</button>
						<div class="success"><?= $success; ?></div>
					</form>
			</div>
        </aside>
      </div>
    </section>
	
   <?php
		include_once 'footer.php';
	?>
  </body>
</html>
