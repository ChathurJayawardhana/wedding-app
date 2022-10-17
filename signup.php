<?php
	session_start();
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
	<!--guestPlanner-->
	<link href="Reference/css/guestList.css" rel="stylesheet">
  	<script type='text/javascript' src='Reference/javascript/guestList.js'></script>
	

	<title>Sign-up</title>
	<!--internal css-->
	<style>
		*{
		    box-sizing: border-box;
		    margin: 0;
		    padding: 0;
		}
		.content{
		    width: 500px;
		    height: 480px;
		    background: #fff;
		    box-shadow: 0 10px 15px rgba(179, 179, 179, 0.7);
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%,-50%);
		    border-radius: 7px;
		    display: flex;
		    flex-direction: column;
		    justify-content: space-evenly;
		    padding: 1rem;
		    margin: 30px;
		}

		.content h2{
		    color: #0A66C3;
		    font-size: 1.6rem;
		}

		.content h2 i{
		    font-size: 1.8rem;
		    padding-left: 0.1rem;
		}
		.intro-text p{
		    font-size: 1.8rem;
		    padding-top: 0.3rem;
		}

		.input{
		    position: relative;
		    width: 100%;
		    height: 50px;
		    margin-bottom: 0.7rem;
		}

		.input input{
		    width: 100%;
		    height: 50px;
		    padding-top: 1.1rem;
		    padding-left: 9px;
		    outline: none;
		    border: 1px solid #8c8c8c;
		    border-radius: 3px;
		    transition: 0.2s;
		}

		.input label{
		    position: absolute;
		    top: 30%;
		    left: 10px;
		    font-size: 1.1rem;
		    color: #8c8c8c;
		    transition: 0.2s;
		}

		.input input:focus ~ label, .input input:valid ~ label{
		    top: 10%;
		    font-size: 0.8rem;
		    color: #000;
		} 

		.input input:focus{
		    border-width: 2px;
		    border-color: #0A66C3;
		}

		.forgot-pass-link{
		    width: 200px;
		    padding: 0.2rem;
		    text-align: center;
		    text-decoration: none;
		    font-weight: bolder;
		    color: #0A66C3;
		    transition: 0.3s;
		    border-radius: 12px;
		}

		.forgot-pass-link:hover{
		    background: rgba(10, 102, 195, 0.3);
		}

		button{
		    height: 50px;
		    background: #0A66C3;
		    outline: none;
		    border: none;
		    border-radius: 30px;
		    color: #fff;
		    font-size: 1rem;
		    font-weight: bolder;
		    width: 200px;
		}

		.join-link{
		    text-align: center;
		}

		.join-link a{
		    text-decoration: none;
		    font-weight: bolder;
		    color: #0A66C3;
		}
		.header{
			background-color: lightgrey;
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
	<!--header-->
	<div class="header">
		<!--navigation bar-->
		<div class="nav">
			<div style="font-family: 'Pacifico', cursive;"><a href="#">Wedding.lk</a></div>
			<div id="push1"><a href="index.php">HOME</a></div>
			<div><a href="Vendor.php">VENDORS</a></div>
			<div><a href="about.php">ABOUT</a></div>
			<div><a href="contacts.php">CONTACT</a></div>
		</div>
		<!--/navigation bar-->
	</div>
	<!--/header-->
	<!--content-->
	<div class="content">
        <div class="intro-text">
            <h1>Register</h1>
        </div>
        <div class="inputs">
        <form action="signupDB.php" method="POST" >
       
        	<div class="input">
                <input type="text" name="name" id="name" required/>
                <label for="name">
                    Full Name
                </label>
            </div>
            <div class="input">
                <input type="email" name="email" id="email" required/>
                <label for="email">
                    Email
                </label>
            </div>
             <div class="input">
                <input type="text" name="mobile" id="mobile" required/>
                <label for="mobile">
                    Mobile Number
                </label>
            </div>
            <div class="input">
                <input type="password" name="password" id="password" required/>
                <label for="password">
                    Password
                </label>
            </div>
            <div class="input">
                <input type="password" name="confirmPassword" id="confirmPassword" required/>
                <label for="confirmPassword">
                    Confirm Password
                </label>
            </div>
            <button type="submit" name="submit">Register</button>
        </form>
        </div>
        
     
        <p class="join-link">Already have an account <a href="login.php">Login</a></p>
    </div>
	<!-- //content -->
	
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