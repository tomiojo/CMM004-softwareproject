<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{

			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: landingpage2.php");
						die;
					}
				}
			}
			
			echo "username or password is incorrect!";
		}else
		{
			echo "username or password is incorrect!";
		}
	}

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Login</title>
    <link rel ="stylesheet" href="./stylemarvel.css">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
    <div class ="form-login">
        <h1> Login Here </h1>
            <form action ='login.php'method= 'Post'>
                <h3>Email Address</h3>
                <Input type='text' name='email' placeholder="johndoe@email.com">
                    <h3>Password</h3>
                <Input type='password' name='Password' placeholder="Password">
                    <br><br>
                    <button type="submit"> Login </button>
                </div>
            </form>      
    </div>
    
</body>