<!DOCTYPE html> 
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Alpine Lodge | About</title>
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
            <li class="current"><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

   <?php
		include_once 'newsletter.php';
	?>

    <section id="about">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">About Us</h1>
          <p>
            Alpine lodge is a Unique Rustic Accomodation, providing guest rooms for travellers and a function room for your events or meetings. The breathtaking beauty of this wonderful part of Sikkim is all around you when staying with us at Alpine Lodge. Enjoy the beautiful landscapes of West Sikkim with the Charm and Hospitality of small town Soreng. 
          </p>
          <p class="dark">
			We offer 3 rooms; each with its own unique style, and personality. (15 Over Night Guest Capacity) We also have dining for upto 20, with ATM facilities in the lodge itself for safe and easy access of cash.With our exquisite decor, delectable complimentary breakfasts, and casual elegant dining, we have become a getaway destination of choice in West Sikkim for couples, individuals, and groups; who prefer a small, quiet, and luxurious Exclusive Escape. 
			<br/>The lodge is located in picturesque village of Soreng, with the advantage of being close to Gangtok city but still taking in a natural setting surrounded by trees and wildlife. Alpine Lodge is set along the Western Sikkim, back-dropped by the mighty Kanchenjunga Mountains. Whether its buisness or Pleasure, One Night or Longer. We offer a fantastic spot for your private event, retreat or getaway to be truly enjoyed amongst the landscapes, fisheries, flora and fauna and white river rafting on tht Teesta river, Family owned and operated Bed and Breakfast Lodge. See you Soon!
		</p>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>What We Do</h3>
            <p>Alpine Lodge is a one of a kind Fooding and Lodging in the foothills of West Sikkim. Alpine Lodge is open year round and specializes in weddings, special occasions, meetings, and retreats-all in a private quiet setting of towering spruce trees.</p>All events are unique, so we like to treat you and your event individually.
          </div>
        </aside>
      </div>
    </section>
	
	<?php
		include_once 'footer.php';
	?>
  </body>
</html>
