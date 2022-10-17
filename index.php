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

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
	<title>Home</title>
	<!--internal css-->
	<style>
		.content1{
			margin: 20px;
			display: flex;
			flex-direction: column;	
			background-color: lightgrey;
			padding: 20px;
		}
		.content1 h3{
			text-align: center;
		}
		.content1 .card img{
			padding: 10px;
		}
		.content1 .card-title a{
			text-decoration: none;
			color: black;
		}
		.content1 .card:hover{
			background-color: grey;
			border: 2px solid black;
			outline: 5px;
		}
		.jumbotron{
			background-color: lightgrey;
		}
		.jumbotron h3{
			text-align: center;
		}
		.content2{
			margin: 20px;
			display: flex;
			flex-direction: column;	
			padding:20px 100px;
		}
		.content2 img{
			opacity: 0.7;
			padding: 20px;
			background-color: white;
		}
		.content2 a{
			text-decoration: none;
			color: black;
			text-align: center;
		}
		.content2 a:hover{
			text-decoration: underline;
			color: black;
		}
		.content2 .card{
			border: none;
			margin: 10px;
		}
		.content2 .card:hover{
			border: 2px solid black;
			outline: 5px;
			margin: 10px;
		}
		.content2 h3,h5,p{
			text-align: center;
		}
		.content2 .card-img-overlay a{
			text-decoration: none;
			color: white;
		}
		.content3{
			margin: 20px;
			display: flex;
			flex-direction: column;	
			background-color: lightgrey;
			padding: 20px;
		}
		.content3 h3{
			text-align: center;
		}
		.content3 .card{
			height: 180px;
		}
		.content4{
			margin: 20px;
			display: flex;
			flex-direction: column;	
			background-color: darkgrey;
			padding: 20px;
		}
		.content4 h3{
			text-align: center;
		}
		.content4 img{
			height: 200px;
			border-radius: 50%;
			object-fit: fill;
		}
		.content4 a{
			text-align: center;
			color: black;
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
<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
		<div><a href="login.php">LOGIN</a></div>
		<div><a href="signup.php">REGISTER</a></div>
	</div>
	<!--/top navigation bar-->
	<!--slider-->
	<div class="header">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
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
		     <div class="carousel-item">
		      <img class="d-block w-100" src="Reference/Images/bannerHome2.jpg" alt="Fourth slide">
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
			<div style="font-family: 'Pacifico', cursive; color:'white'"><a href="#">Wedding.lk</a></div>
			<div id="push1"><a href="#">HOME</a></div>
			<div><a href="Vendor.php">VENDORS</a></div>
			<div><a href="about.php">ABOUT</a></div>
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

	<!--.content1-->
	<div class="content1">
		<h3>Start Planning your Wedding Step by Step</h3>
		<div class="card-deck">
		  <div class="card">
		    <img class="card-img-top" src="Reference/Images/home/image01.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title"><a href="budgetPlanner.php">BUDGET PLANNER</a></h5>
		      <p class="card-text">Budget plan tool provide you program to evaluate actual paid and the due amount.</p>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="Reference/Images/home/image02.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title"><a href="guestList.php">GUEST LIST</a></h5>
		      <p class="card-text">Make list for your guest and collect email addresses and send free RSPVs.</p>
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top" src="Reference/Images/home/image03.jpg" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title"><a href="checkList.php">CHECK LIST</a></h5>
		      <p class="card-text">Get your sorted list with Check List planning tool each list status wise.</p>
		    </div>
		  </div>
		</div>
	</div>
	<!--./content1-->
	<!--.banner-->
	<div class="jumbotron">
	  <h3 class="display-4">More than 50+ wedding vendor catergories!</h3>
	  <p class="lead">Find the best matching places from all around Sri Lanka</p>
	  <hr class="my-4">
	  <p>Photography, Catering, Decoration </p>
	  <p class="lead">
	    <a class="btn btn-primary btn-lg" href="Vendor.php" role="button">Learn more</a>
	  </p>
	</div>
	<!--./banner-->
	<!--.content2-->
	<div class="content2">
		<h3>Top Wedding Locations</h3>
		<p>Find your dream location from Sri Lanka</p>
		<!--<a href="locations.php" class="stretched-link">More</a>-->
		<!-- Gallery -->
		<div class="row">
		  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
		  	<div class="card bg-dark text-white">
			  <img src="Reference/Images/home/image05.jpg" class="card-img" alt="badulla">
			  <div class="card-img-overlay">
			    <!--<h5 class="card-title"><a href="#">Badulla</a></a></h5>-->
				<h5 class="card-title"><a href="badulla.php">Badulla</a></h5>
			    <p class="card-text">9+ listing</p>
			  </div>
			</div>
			<div class="card bg-dark text-white">
			  <img src="Reference/Images/home/image04.jpg" class="card-img" alt="Galle">
			  <div class="card-img-overlay">
			   
				<h5 class="card-title"><a href="galle.php">galle</a></h5>
			    <p class="card-text">7+ listing</p>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 mb-4 mb-lg-0">
		    <div class="card bg-dark text-white">
			  <img src="Reference/Images/home/image03.jpeg" class="card-img" alt="Kandy">
			  <div class="card-img-overlay">
			  
				<h5 class="card-title"><a href="kandy2.php">Kandy</a></h5>
			    <p class="card-text">7+ listing</p>
			  </div>
			</div>
			<div class="card bg-dark text-white">
			  <img src="Reference/Images/home/image07.jpg" class="card-img" alt="Colombo">
			  <div class="card-img-overlay">
			    
				<h5 class="card-title"><a href="colombo.php">colombo</a></h5>
			    <p class="card-text">10+ listing</p>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 mb-4 mb-lg-0">
		    <div class="card bg-dark text-white">
			  <img src="Reference/Images/home/image06.jpg" class="card-img" alt="Colombo2">
			  <div class="card-img-overlay">

				<h5 class="card-title"><a href="kurunegala.php">Kurunegala</a></h5>
			    <p class="card-text">5+ listing</p>
			  </div>
			</div>
		    <div class="card bg-dark text-white">
			  <img src="Reference/Images/home/image02.webp" class="card-img" alt="Colombo1">
			  <div class="card-img-overlay">
			  <h5 class="card-title"><a href="gampaha.php">gampaha</a></h5>
			    <p class="card-text">11+ listing</p>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	<!--./content2-->
	<!--.content3-->
	<div class="content3">
		<h3>Why choose Wedding.lk</h3>
		<p>Wedding.lk is special in following reasons</p>
		<div class="row">
		  <div class="col-sm-4">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Your suppliers is one click away</h5>
		        <p class="card-text">Wedding.lk provides you a common platform to meet your wedding vendor. You are allowed to register to the site and you can find your own vendor catergories.</p>	 
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-4">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Most updated</h5>
		        <p class="card-text">Wedding.lk guaretee you the most updated wedding vendor directory.</p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-4">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Tools</h5>
		        <p class="card-text">Budget planner, Calender, Checklist would give you the ease of planning the big day. Enjoy the extra facilities by registering to the site.</p>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<!--./content3-->
	<!--.content4-->
	<div class="content4">
		<h3>Words from happy couples</h3>
		<p>What is best for others may not be best for you</p>
		<div class="row g-0 bg-dark position-relative text-white">
		  <div class="col-md-3 mb-md-0 p-md-4">
		    <img src="Reference/Images/home/image08.jpg" class="w-100" alt="couple">
		  </div>
		  <div class="col-md-3 p-4 ps-md-0">
		    <h5 class="mt-0" style="text-align: left;">TANIYA AND MALKA</h5>
		    <p style="text-align: justify;">We recommend Wedding.lk which made our dream come true. A very helpful platform where most of the suggestions are matching best with our ideas.Thank you Wedding.lk</p>
		  </div>
		   <div class="col-md-3 mb-md-0 p-md-4">
		    <img src="Reference/Images/home/image09.jpg" class="w-100" alt="couple">
		  </div>
		  <div class="col-md-3 p-4 ps-md-0">
		    <h5 class="mt-0" style="text-align: left;">SAMAN AND POORNIMA</h5>
		    <p style="text-align: justify;">Time saving website. We could find the best people and places without wasting time lottering around wedding planners. Recommended. Enjoyed your service.</p>
		  </div>
		</div>
		<a href="review.php" class="stretched-link">More</a>
	</div>
	<!--./content4-->
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
