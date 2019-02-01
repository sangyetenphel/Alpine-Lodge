<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable fooding and lodging">
	  <meta name="keywords" content="lodge, affordable fooding and lodging">
  	<meta name="author" content="Brad Traversy">
    <title>Alpine Lodge | Welcome</title>
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
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
		<h1>Affordable Fooding & Lodging</h1>
		<p>Suitable Homestay...</p>
      </div>
    </section>

    <?php
		include_once 'newsletter.php';
	?>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/stay.jpg">
          <h3>Stay</h3>
          <p>Alpine Lodge is a superbly designed 'destination within a destination' located at the doorstep of Soreng, West Sikkim, that opened its doors from 2010.</p>
        </div>
        <div class="box">
          <img src="./img/dine.jpg">
          <h3>Dine</h3>
          <p>Great food served up with a warm welcome and friendly service throughout breakfast, lunch and dinner.</p>
        </div>
        <div class="box">
          <img src="./img/bg.jpg">
          <h3>Advance Booking for events</h3>
          <p>A fantastic spot for group gatherings. If your looking for any intimate, informal, in-your-own-living-room type of comfortable setting.</p>
        </div>
      </div>
    </section>
	
	<?php
		include_once 'footer.php';
	?>
  </body>
</html>
