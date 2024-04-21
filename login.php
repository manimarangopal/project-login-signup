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
						header("Location: index.php");
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
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	body{
		background: linear-gradient(to right, #511a5a, #9559b3);
	    
	}





	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

background: linear-gradient(to left, #511a5a, #9559b3);
margin: auto;
width: 300px;
padding: 20px;
position: absolute;
left: 500px;
top: 180px;
}
.click{
	color: white;
	text-decoration: none;
}

#text{
	background: transparent;
	
	border: solid black 2px;
}
input:focus{
	outline: none;
}

input::placeholder{
	color: black;

}
.btn-primary{
    box-shadow: none !important;
    border: none !important;
    border-radius: 20px;
    margin-top: 25px;
    background: linear-gradient(to right, #511a5a, #9559b3);
}


	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name" placeholder="Enter Your User Name"><br><br>
			<input id="text" type="password" name="password" placeholder="Enter Your Password"><br><br>

			<input id="button" type="submit" value="Login" class="btn btn-primary" style="margin-top: 0px;"><br><br>

			<a href="signup.php" class="click">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>