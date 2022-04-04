<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "flight";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap.css">
	<script>
	function validateForm() {
	  var x = document.forms["myForm"]["pass"].value;
	  if (x.length<6) {
	    window.alert("Password must be atleast 6 characters");
	    return false;
	  }
	}
	</script>
</head>
<body>
	<div class="container">
		<form name="myForm" method="post" action="taskdb.php" onsubmit="return validateForm()" method="post">
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" name="name">
		  </div>
		  <div class="form-group">
			<label for="eml">E-Mail</label>
			<input type="email" class="form-control" id="eml" name="eml">
		  </div>
		  <div class="form-group">
		    <label for="pass">Password</label>
		    <input type="password" class="form-control" id="pass" name="pass">
		  </div>
		  <div class="form-group">
		  	<input type="checkbox" name="buy" id="buy">
		  	<label for="buy">Buy</label>
		  </div>
		  <button type="submit" class="btn btn-primary" name="register">Submit</button>
		</form>
	</div>
	
</body>
</html>