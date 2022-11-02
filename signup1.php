<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email) && !empty($phone) && !empty($address) )
		{

			//save to database
			$user_id = random_num(4);
			$query = "insert into users (user_id,user_name,password,email,phone,address) values ('$user_id','$user_name','$password','$email','$phone','$address')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<title>Signup</title>
</head>

<body>
<header>
        <nav>
          <div id="navbar">
            <div id="logo" class="reverse">
                <spam><img id="image" src="img/IMG_0164.jpg"></spam>
                <spam>Plant Disease Detection</spam>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div id="links">
            <a href="index.html">Home</a>          
          <a href="signup1.php">Signup</a>
          <a href="login1.php">Login</a>
                     
          <a href="About1.html">About US</a>
          
          <a href="contact1.html">contact</a>
            </div>
          </div>    
        </nav>        
</header>
<fieldset>
 <legend>Registration</legend>

<div id="box">
		
	 <form method="post">
		    <p>
          <label for="user_name">Name </label>
         <input type="text" name="user_name" id="user_name">
        </p>
        <p>
         <label for="password">Password </label>
         <input type="text" name="password" id="password">
        </p>
        <p>
         <label for="email">Email</label>
         <input type="text" name="email" id="email">
        </p>
        <p>
          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone">
        </p>

        <p>
          <label for="address">Address</label>
         <textarea name="address" id="address"></textarea>
        </p>
        <p>&nbsp;</p>
        <p>
        <input type="submit" name="Submit" id="Submit" value="Submit">
        </p>

			
	</form>
</div>
</fieldset>
</body>
</html>

