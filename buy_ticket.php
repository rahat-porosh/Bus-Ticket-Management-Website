<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rahat Paribahan</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style type="text/css">
		#p1 {
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
			      <a class="nav-item nav-link" href="obc_home.php">Home <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="verify_payment.php">Verify Payment</a>
			      <a class="nav-item nav-link" href="#">Cancel Ticket</a>
                  <a class="nav-item nav-link" href="#">Contact Us</a>
                  <a class="nav-item nav-link" href="logout.php">Log Out</a>
			    </div>
  			</div>
		</div>
	</nav>
	<img src="bus.jpg" class="rounded mx-auto d-block" alt="bus">
<?php
$_SESSION['seat']=$_POST['buses'];
//echo $ticket;
include "server.php";
$sql="update seats set Reserved='Y' where Seat_id='{$_SESSION['seat']}'";
$result=mysqli_query($conn,$sql);
?>
    <div class=container>
        <p id="p1">Your ticket(s) would be reserved and inactive for <strong>30 minutes</strong> from the time of booking. Pay through bKash to our Merchant Account No: <strong>01765551536</strong> and confirm your transaction ID within <strong>30 minutes</strong> to get the confirmed ticket.
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
