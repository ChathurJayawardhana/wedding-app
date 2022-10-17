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

	<title>About us</title>
	<!--internal css-->
	<style>
		 @import url('https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap');
	     body {
	      background-color: lightgrey;
	      overflow-x: hidden;
	      max-width: 100%;
	    }

	    .card-img-top {
	      width: 50%;
	      border-radius: 50%;
	    }

	    .card-body {
	      margin-top: 10px;
	    }

	    h1 {
	      margin-top: 10px;
	    }

	    #copyright,
	    #disclaimer {
	      margin-top: 10px;
	    }

	    .container-newsletter {
	      margin-bottom: 25px;
	      margin-top: 25px;
	    }


	    .card-body:hover {
	      -webkit-transform: scale(1.125);
	      transform: scale(1.125);

	    }

	    .card-body {
	      -webkit-transition: all 0.5s ease-in-out;
	      transition: all 0.5s ease-in-out;
	    }


	    .bi {
	      font-size: xx-large;
	    }

	    .card-body .scroll {
	      overflow-y: scroll;
	      max-height: 10em;
	      min-height: 10em;

	    }

	    .card-img-top{
	    	width: 200px;
	    	height: 250px;
	    	/*object-fit: cover;*/
	    }

	    .panel {
	      padding: 0 18px;
	      display: none;
	      background-color: white;
	      overflow: hidden;
	    }

	    .btn-link {
	      color: #000000;
	    }

	    .btn-link:hover {
	      color: #d9534f;
	    }


	    .card-body ::-webkit-scrollbar {
	      width: 5px;
	      height: 1px;
	    }


	    .card-body ::-webkit-scrollbar-track {
	      background: #ffffff;
	    }


	    .card-body ::-webkit-scrollbar-thumb {
	      background: #000000;
	    }


	    .card-body ::-webkit-scrollbar-thumb:hover {
	      background: #808080;
	    }
	    .container{
	    	padding: 20px;
	    }
	    .container-fluid{
	    	padding: 20px;
	    	background-color: darkgrey;
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
			<div><a href="#">ABOUT</a></div>
			<div><a href="contacts.php">CONTACT</a></div>
		</div>
		<div class="text1">
			<h1 style="font-family: 'Russo One', sans-serif;">PLAN YOUR WEDDING</h1>
			<p style="font-family: 'Pacifico', cursive;">Creating the Best. Day. Ever.</p>
			<button type="button"></a>Subscribe</</button>
		</div>
		<!--/navigation bar-->
	</div>
	<!--/slider-->
	<!--content-->
		<h1 class="text-center">About Us</h1>
	 <div class="container text-sm-center">
	    <div class="row">
	      <div class="col-lg-6 col-xs-12" id="info">
	        <h4>Our Vision</h4>
	        <p>To create wedding day experiences that cultivate deeper, lasting connections between each couple and their guests by celebrating the collective life experiences that brought them together and will continue to impact them throughout marriage.</p>
	        <h4>Our Mission</h4>
	        <p>To plan and design memorable weddings that are authentic to each couple we serve, representing their collective love story, personal values, and style.</p>
	      </div>
	      <div class="col" id="disclaimer" style="text-align:left;">
	        <p>A web application is the process of developing a website, activities in a network which are aimed at a pre-defined goal. We as Team Ravenclaw developed a web application project as our final year group project about wedding planning system.
	        </p>
	        <p> Project Supervisor<br>
	        Edvin Linosh<br>
	        Senior Lecturer<br>
	        Department of physical science<br>
	    	University of Vavuniya</p>
	      </div>
	    </div>
	  </div>
	<div class="container-fluid cards">
	    <h5 class="text-center">Our team</h5>
	    <div class="row justify-content-center text-center">
	      <div class="col-xl-2 col-md-4 col-xs-12">
	        <div class="card-body">
	          <img class="card-img-top" src="Reference/Images/about/person06.png" alt="Card image cap">
	          <h5 class="card-title">K.O.U.S.Dayarathna</h5>
	          <h5>2017/ASP/02</h5>
	        </div>
	      </div>
	      <div class="col-xl-2 col-md-4 col-xs-12">
	        <div class="card-body">
	          <img class="card-img-top" src="Reference/Images/about/person02.jpg" alt="Card image cap">
	          <h5 class="card-title">H.M.C.P.Jayawardhana</h5>
	          <h5>2017/ASP/62</h5>
	        </div>
	      </div>
	      <div class="col-xl-2 col-md-4 col-xs-12">
	        <div class="card-body">
	          <img class="card-img-top" src="Reference/Images/about/person03.jpg" alt="Card image cap">
	          <h5 class="card-title">R.S.S.Rajakaruna</h5>
	          <h5>2017/ASP/32</h5>
	        </div>
	      </div>
	      <div class="col-xl-2 col-md-4 col-xs-12">
	        <div class="card-body">
	          <img class="card-img-top" src="Reference/Images/about/person04.jpg" alt="Card image cap">
	          <h5 class="card-title">S.Gopithasathursana</h5>
	          <h5>2017/ASP/29</h5>
	        </div>
	      </div>
	       <div class="col-xl-2 col-md-4 col-xs-12">
	        <div class="card-body">
	          <img class="card-img-top" src="Reference/Images/about/person05.jpg" alt="Card image cap">
	          <h5 class="card-title">M.Dilojan</h5>
	          <h5>2017/ASP/58</h5>
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
	                <dd>076xxxxxxx</dd>
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