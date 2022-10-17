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

	<title>Vendor</title>
	<!--internal css-->
	<style>
		
	</style>
</head>
<body>
	<!--bootstrap-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
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
			<div><a href="#">VENDORS</a></div>
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
	<!--content-->
	
	<h3 class="text-center p-2">Vendors</h3>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<h5>Filter vendors</h5>
				<hr>
				<h6 class="text-info">Select catergory</h6>
				<ul class="list-group">
					<?php
						$sql="SELECT DISTINCT catergory FROM vendor ORDER BY catergory";
						$result=$connection->query($sql);
						while($row=$result->fetch_assoc()){
					?>
					<li class="list-group-item">
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input vendor_check" value="<?= $row['catergory']; ?>" id="catergory"><?= $row['catergory']; ?>
							</label>
						</div>
					</li>
				<?php } ?>
				</ul>
				<h6 class="text-info">Select city</h6>
				<ul class="list-group">
					<?php
						$sql="SELECT DISTINCT city FROM vendor ORDER BY city";
						$result=$connection->query($sql);
						while($row=$result->fetch_assoc()){
					?>
					<li class="list-group-item">
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input vendor_check" value="<?= $row['city']; ?>" id="city"><?= $row['city']; ?>
							</label>
						</div>
					</li>
				<?php } ?>
				</ul>
			</div>
			<div class="col-lg-9">
				<h5 class="text-center" id="textChange">All products</h5>
				<hr>
				<div class="text-center">
					<img src="Reference/Images/vendor/loader.gif" id="loader" width="200" style="display:none;">
				</div>
				<div class="row" id="result">
					<?php
					$sql="SELECT * FROM vendor";
					$result=$connection->query($sql);
					while($row=$result->fetch_assoc()){
					?>
				<div class="col-md-3 mb-2">
					    <div class="card">
					      <div class="card-body">
					        <h5 class="card-title"><?= $row['name']; ?>
					        </h5>
							<img src="Reference\Images\locations\<?php echo $row['image']; ?>" height="100" alt="">
					        <p>
					        	catergory: <?= $row['catergory']; ?><br>
					        	city: <?= $row['city']; ?><br>
					        	price: <?= $row['budget']; ?><br>
					</p>
					
					<h5 class="card-title"><a href="booking.php">Book</a></h5>
					      </div>
					    </div>
				</div>
					
				<?php } ?>
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
		<!--Ajax-->
		<script type="text/javascript">
			$(document).ready(function(){
				$(".vendor_check").click(function(){
					$("#loader").show();

					var action='data';
					var catergory=get_filter_text('catergory');
					var city=get_filter_text('city');


					$.ajax({
						url:'action.php',
						method:'POST',
						data:{action:action,catergory:catergory,city:city},
						success:function(response){
							$("#result").html(response);
							$("#loader").hide();
							$("#textChange").text("Filtered vendors");
						}
					});
				});
				/*alert("Hello");* JQuery library is working*/
				function get_filter_text(text_id){
					var filterData=[];
					$('#'+text_id+':checked').each(function(){
							filterData.push($(this).val());
					});
					return filterData;
				}
			});
		</script>

</body>
</html>
<?php 
	mysqli_close($connection);
?>