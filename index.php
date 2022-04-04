<!DOCTYPE html>
<?php
    session_start();
    if(isset($_COOKIE['cookie_name']))
	{
	  header('Location: obc_home.php');
	}
   if (isset($_POST['loggedin'])) {
			include 'server.php';
      $eml=$_POST['eml'];
			$password=$_POST['pass'];
			$sql= "SELECT * FROM myusers WHERE (email='$eml' AND passwrd='$password')";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result)>0)
      {
				$_SESSION['user_id']=$row['Id'];
         if(!empty($_POST["remember"]))
        {
           $cookie_name = $_POST["eml"];
            $cookie_value = $_POST["pass"];
            echo $cookie_name.$cookie_value;
            setcookie('cookie_name', $cookie_name, time() + (86400 * 30)); // 86400 = 1 day
        } 
   
        header('Location: obc_home.php');  
			}
    }  
?>
<html>
<head>
		<title>Rahat Paribahan</title>
        <link rel="stylesheet" href="bootstrap.css">
        <style type="text/css">
        	body {
        		margin-top: 18%;
        		background-image: url("bus2.jpg");
        		background-size: cover;
        	}
					h1 {
						color: brown;
					}
        	label {
        		color: gold;
        	}
        	p {
        		color: white;
        	}
        </style>
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form method="post" action="index.php">
		  <div class="form-group">
		    <label for="eml">Email</label>
		    <input type="email" class="form-control" id="eml" name="eml">
		  </div>
		  <div class="form-group">
		    <label for="pass">Password</label>
		    <input type="password" class="form-control" id="pass" name="pass">
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="Check1" checked="checked" name="remember">
		    <label class="form-check-label" for="Check1">Remember Me</label>
		  </div>
		  <button type="submit" class="btn btn-primary" name="loggedin">Submit</button>
		</form>
    <p>New User?</p>
    <p><a href="regform.html">Click here to register</a></p>
	</div>
</body>
</html>