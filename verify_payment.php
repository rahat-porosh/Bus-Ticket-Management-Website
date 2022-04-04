<?php
session_start();
if (isset($_POST['verify'])){
    $txid=$_POST['txid'];
    include "server.php";
    //echo $_SESSION['fare'];
    $sql="select * from transaction where Trans_id=$txid;";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $bool=1;
        $tkt=rand(100001,999999);
        $sql1="insert into ticket values($tkt,'{$_SESSION['user_id']}','{$_SESSION['seat']}');";
        $result1=mysqli_query($conn,$sql1);
        $sql2="delete from seats where Seat_id='{$_SESSION['seat']}';";
        $result2=mysqli_query($conn,$sql2);
        echo "<script type='text/javascript'>";
        echo "if ($bool){";
            echo "window.alert('Ticket Purchased Successfully')}";
        echo "</script>";

    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rahat Paribahan</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
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
			      <a class="nav-item nav-link active" href="verify_payment.php">Verify Payment</a>
			      <a class="nav-item nav-link" href="#">Cancel Ticket</a>
                  <a class="nav-item nav-link" href="#">Contact Us</a>
                  <a class="nav-item nav-link" href="logout.php">Log Out</a>
			    </div>
  			</div>
		</div>
	</nav>
	<div class="container">
		<h1>Verify Payment</h1>
		<form method="post" action="verify_payment.php">
		  <div class="form-group">
		    <label for="txid">Transaction Id</label>
		    <input type="number" class="form-control" id="txid" name="txid">
        </div>
        <button type="submit" class="btn btn-primary" name="verify">Verify</button>
		</form>
    </div>