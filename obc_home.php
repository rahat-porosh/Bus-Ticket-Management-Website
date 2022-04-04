<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rahat Paribahan</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="obc_home.css"> -->
	<style type="text/css">
		#form1 {
			margin-top: 2%;
			margin-bottom: 10%;
		}
		img {
			margin-top: 2%;
		}
	</style>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="#">
				<i class="fas fa-bus"></i>
			</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			      <a class="nav-item nav-link active" href="obc_home.php">Home <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="verify_payment.php">Verify Payment</a>
			      <a class="nav-item nav-link" href="#">Cancel Ticket</a>
                  <a class="nav-item nav-link" href="#">Contact Us</a>
                  <a class="nav-item nav-link" href="logout.php">Log Out</a>
			    </div>
  			</div>
		</div>
	</nav>
	<img src="bus.jpg" class="rounded mx-auto d-block" alt="bus">
	<div class="container">
		<form id="form1" method="post" action="availlable_bus.php">
		  <div class="form-group">
		    <label for="from">From</label>
		    <select class="custom-select" id="from" name="from">
			  <option selected>Select departure place</option>
			  <option value="Cox's Bazar">Cox's Bazar</option>
			  <option value="Dhaka">Dhaka</option>
			  <option value="Khulna">Khulna</option>
			  <option value="Rangpur">Rangpur</option>
			</select>
		  </div>
		  <div class="form-group">
		    <label for="to">To</label>
		    <select class="custom-select" id="to" name="to">
			  <option selected>Select destination</option>
			  <option value="Coxs Bazar">Cox's Bazar</option>
			  <option value="Dhaka">Dhaka</option>
			  <option value="Khulna">Khulna</option>
			  <option value="Rangpur">Rangpur</option>
			</select>
		  </div>
		  <div class="form-group">
		  	<label for="jdate">Date</label>
		    <input type="date" class="form-control" id="jdate" name="jdate">
		  </div>	
		  <button type="submit" class="btn btn-primary" name="bus">Submit</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>