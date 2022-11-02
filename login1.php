<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: loginhome.html");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

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
        <a href="index.html">Home</a>          
        
        <a href="login1.html">Login</a>
                    
        <a href="About1.html">About US</a>
        
        <a href="contact1.html">contact</a>
       
      </div>
    </div>    
  </nav>        
</header>
</style>   
</head>    
<body>     
    <form method ="POST">       
        <div class="container">   
            <label for="user_name">Username : </label>   
            <input type="text" name="user_name" id="user_name" required>  <br><br>
            <label for="password">Password : </label>   
            <input type="text" name="password" id="password" required>  <br><br>
            <button type="submit">Login</button>  &nbsp 
            <input type="checkbox" checked="checked"> Remember me   &nbsp &nbsp
            <button type="button" class="cancelbtn"> Cancel</button>  <br> <br> 
            <a href="signup1.php">Click to Signup</a><br><br> 
        </div>
    </form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer id="foot">
         <button onclick="location.href = 'index.html';" >Home</button>
         <button href="">Submit</button>      
         <button onclick="location.href = 'index.html';">Next</button>
        <button onclick="window.close()">Close </button>
    </footer>
</body>
</html>
