<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
          <a href="SignUp.php">Signup</a>
          <a href="login.php">Login</a>
                    
          <a href="About.html">About US</a>
          
          <a href="contact.html">contact</a>
		  <a href="logout.php">Logout</a>
        </div>
      </div>    
    </nav>      
    
  </header>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
     <footer id="foot">
      <button onclick="location.href = 'index.html';" >Home</button>
      <button onclick="location.href = 'login.html';">Submit</button>
      <button onclick="location.href = 'login.html';">Back</button>
      <button onclick="location.href = 'timeline.html';">Next</button>
      <button onclick="window.close()">Close </button>
     </footer>
</body>
</html>