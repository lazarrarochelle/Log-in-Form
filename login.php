<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect("localhost","root","","demo");


if (isset($_POST['username']) && isset($_POST['password'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from loginform where User='$uname' AND Pass='$password'";

    $result = mysqli_query($conn , $sql);

    if (mysqli_num_rows($result) === 1) {
        echo " <h2>You Have Successfully Logged in</h2>";
        exit();
    }
    else{
        echo " <h2>You Have Entered Incorrect Password</h2>";
        exit();
    }

}
?>



<!DOCTYPE html>
<html>
<head>
	<title> LoginForm</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form method="POST" action="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="username"/>
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="button" value="LOGIN" class="btn-login"/>
		</form>
		</div>
</body>
</html>