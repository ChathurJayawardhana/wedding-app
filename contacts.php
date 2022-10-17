<?php
	require_once('dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--bootstrap css-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--google fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400;700&family=Pacifico&family=Russo+One&display=swap" rel="stylesheet">
	<!--css-->
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Contact us</title>
	<!--internal css-->
	<style>
		/* color:  red#ec1c24, black#212d31, grey#343a40, white#eee  */
		* {
		  box-sizing: border-box;
		}

		.content{
			margin: 20px;
			background-color: lightgrey;
		}

		.contain {
		  background-color: #eee;
		  max-width: 1170px;
		  margin-left: auto;
		  margin-right: auto;
		  padding: 1em;
		}

		div.form {
		  background-color: #eee;
		}
		.contact-wrapper {
		  margin: auto 0;
		}

		.submit-btn {
		  float: left;
		}
		.reset-btn {
		  float: right;
		}

		.form-headline:after {
		  content: "";
		  display: block;
		  width: 10%;
		  padding-top: 10px;
		  border-bottom: 3px solid #ec1c24;
		}

		.highlight-text {
		  color: #ec1c24;
		}

		.hightlight-contact-info {
		  font-weight: 700;
		  font-size: 22px;
		  line-height: 1.5;
		}

		.highlight-text-grey {
		  font-weight: 500;
		}

		.email-info {
		    margin-top: 20px;
		}

		::-webkit-input-placeholder { /* Chrome */
		  font-family: 'Roboto', sans-serif;
		}

		.required-input {
		  color: black;
		}
		@media (min-width: 600px) {
		  .contain {
		    padding: 0;
		  }
		}

		h3,
		ul {
		  margin: 0;
		}

		h3 {
		  margin-bottom: 1rem;
		}

		.form-input:focus,
		textarea:focus{
		  outline: 1.5px solid #ec1c24;
		}

		.form-input,
		textarea {
		  width: 100%;
		  border: 1px solid #bdbdbd;
		  border-radius: 5px;
		}

		.wrapper > * {
		  padding: 1em;
		}
		@media (min-width: 700px) {
		  .wrapper {
		    display: grid;
		    grid-template-columns: 2fr 1fr;
		  }
		  .wrapper > * {
		    padding: 2em 2em;
		  }
		}

		ul {
		  list-style: none;
		  padding: 0;
		}

		.contacts {
		  color: #212d31;
		}

		.form {
		  background: #fff;
		}

		form {
		  display: grid;
		  grid-template-columns: 1fr 1fr;
		  grid-gap: 20px;
		}
		form label {
		  display: block;
		}
		form p {
		  margin: 0;
		}

		.full-width {
		  grid-column: 1 / 3;
		}

		.full-width button,
		.submit-btn,
		.form-input,
		textarea {
		  padding: 1em;
		}

		.full-width button, .submit-btn {
		  background: transparent;
		  border: 1px solid black;
		  color: black;
		  border-radius: 15px;
		  padding: 5px 20px;
		  text-transform: uppercase;
		}
		.full-width button:hover, .submit-btn:hover,
		.full-width button:focus , .submit-btn:focus{
		  background: darkgrey;
		  outline: 0;
		  color: black;
		}
		.error {
		  color: #ec1c24;
		}


	</style>
</head>
<body>
	<!--bootstrap-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!--top navigation bar-->
	<div class="navTop">
		<div><a href="#">WELCOME TO WEDDING.LK</a></div>
		<div id="push"><a href="dashboard.php">DASHBOARD</a></div>
		<div><a href="logout.php">LOGOUT</a></div>
	</div>
	<!--/top navigation bar-->
	<!--slider-->
	<div class="header">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="Reference/Images/bannerHome.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="Reference/Images/bannerHome1.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="Reference/Images/bannerHome3.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!--navigation bar-->
		<div class="nav">
			<div style="font-family: 'Pacifico', cursive;"><a href="#">Wedding.lk</a></div>
			<div id="push1"><a href="index.php">HOME</a></div>
			<div><a href="Vendor.php">VENDORS</a></div>
			<div><a href="about.php">ABOUT</a></div>
			<div><a href="#">CONTACT</a></div>
		</div>
		<div class="text1">
			<h1 style="font-family: 'Russo One', sans-serif;">PLAN YOUR WEDDING</h1>
			<p style="font-family: 'Pacifico', cursive;">Creating the Best. Day. Ever.</p>
			<button type="button"></a>Subscribe</</button>
		</div>
		<!--/navigation bar-->
	</div>
	<!--/slider-->
	<!--Content-->
	<div class="content">
	<div class="contain">

	  <div class="wrapper">

	    <div class="form">
	      <h4>GET IN TOUCH</h4>
	      <h2 class="form-headline">Send us a message</h2>
	       <form action="contactsDB.php" method="POST" >
	        <p>
	          <input id="name" name="name" class="form-input" type="text" placeholder="Your Name*">
	          <small class="name-error"></small>
	        </p>
	        <p>
	          <input id="email" name="email" class="form-input" type="email" placeholder="Your Email*">
	          <small class="name-error"></small>
	        </p>
	        <p class="full-width">
	          <textarea  minlength="20" name="message" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
	          <small></small>
	        </p>
	        <p class="full-width">
	          <input type="submit" class="submit-btn" value="Submit" onclick="checkValidations()" name="submit">
	          <button class="reset-btn" onclick="reset()">Reset</button>
	        </p>
	      </form>
	    </div>

	    <div class="contacts contact-wrapper">

	      <ul>
	        <li>Contact information</li>
	        <span class="hightlight-contact-info">
	          <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> weddinglk@gmail.com</li>
	          <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">0762592625</span></li>
	        </span>
	      </ul>
	    </div>
	  </div>
	</div>
	</div>
	
	<!--.Footer-->
	<footer class="section footer-classic context-dark bg-image" style="background: black;">
	        <div class="container">
	          <div class="row row-30">
	            <div class="col-md-4 col-xl-5">
	              <div class="pr-xl-4">
	              	<h5>About Wedding.lk</h5>
	                <p style="text-align:justify;">Are you wondering here and there to find wedding vendors according to your budget and preference? Let us take your burden and we promise you to make your big day memorable one. Plan your biggest day with us.Let us know your requirements and we promise you to find the best vendors according to your budget.</p>
	              </div>
	            </div>
	            <div class="col-md-4">
	              <h5>Contacts</h5>
	              <dl class="contact-list">
	                <dt>Address:</dt>
	                <dd>University of Vavuniya,Vavuniya</dd>
	              </dl>
	              <dl class="contact-list">
	                <dt>email:</dt>
	                <dd><a href="mailto:#">weddinglk@gmail.com</a></dd>
	              </dl>
	              <dl class="contact-list">
	                <dt>phones:</dt>
	                <dd>076xxxxxx</dd>
	              </dl>
	            </div>
	            <div class="col-md-4 col-xl-3">
	              <h5>Links</h5>
	              <ul class="nav-list">
	                <li><a href="budgetPlanner.php">Budget Planner</a></li>
	                <li><a href="guestList.php">Guest List</a></li>
	                <li><a href="checkList.php">Check List</a></li>
	                <li><a href="locations.php">Wedding locations</a></li>
	                <li><a href="review.php">Reviews</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
				<div class="fBottom">
					<!-- Rights-->
	                <p class="rights"><span>©  </span><span class="copyright-year">2022</span><span> </span><span>Wedding.lk</span><span>. </span><span>All Rights Reserved.</span></p>
				</div>	
			</div>
		</section>
		<!-- ./Footer -->

</body>
</html>
<?php 
	mysqli_close($connection);
?>