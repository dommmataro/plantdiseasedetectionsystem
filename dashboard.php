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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
  <nav>
    <div id="navbar">
      <div id="logo" class="reverse">
          <spam><img id="image" src="img/IMG_0164.jpg"></spam>
          <spam>Plant Disease Detection</spam>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div id="links">
        <a href="loginhome.html">Home</a>          
       
        <a href="dashboard.php">dashboard</a>
        <a href="timeline.html">timeline</a>              
        <a href="About.html">About US</a>
        <a href="upload.html">Upload</a>
        <a href="contact.html">contact</a>
        <a href="logout.php">Logout</a>
      </div>
    </div>    
  </nav>        
</header>
</style>   
</head>    
<body>  
<?php   
if($user_data) {
?>
<div class="form">
 <h2>---Details---</h2>
 <!-- Displaying Data Read From Database -->
 <span>UserId:</span> <?php echo $user_data['user_id']; ?> <br>
 <span>Name:</span> <?php echo $user_data['user_name']; ?> <br>
 <span>E-mail:</span> <?php echo $user_data['email']; ?> <br>
 <span>Contact No:</span> <?php echo $user_data['phone']; ?> <br>
 <span>Address:</span> <?php echo $user_data['address']; ?> <br>
 <br><br>
 <a href="edit.php">Update Profile</a>
</div>
<?php
}
?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer id="foot">
         <button onclick="location.href = 'index.html';" >Home</button>
         <button href="">Submit</button>      
         <button onclick="location.href = 'index.html';">Next</button>
        <button onclick="window.close()">Close </button>
    </footer>
</body>
</html>