<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$email = $_POST['email'];
		$password = $_POST['password'];
        $telephone = $_POST['telephone'];

		if(!empty($email) && !empty($password) && !empty($telephone))
		{
			$query = "INSERT INTO users ('uid', 'mail', 'pass', 'tel') VALUES ('0', '$email','$password','$telephone')";

			mysqli_query($con, $query);

			header("Location: login.php");
			//die;
		}else
		{
			echo "Please enter valid details!";
		}
	}
?>


<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Sign up</title>
        <link rel ="stylesheet" href="./stylesignup.css">
        <style>
            .error{
                color:red;
                font-style: oblique;
            }
        </style>
    </head>
    <body>
        <div class ="form-Signup">
            <h1> Signup Here </h1>
            <form id="signupform">
            <form method= 'Post'>
                <h3>Email Address</h3>
                <Input type='text' name='email' placeholder="johndoe@email.com">
                    <h3>Password</h3>
                <Input type='password' name='password' placeholder="Password">
                    <h3>Telephone number</h3>
                <Input type='text' name='telephone' placeholder="Telephone">
                    <br><br>
                    <button type="submit"> Submit </button>
            </form>
        </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src=https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js></script>
        <script src="signup.js"></script>
        
    </body>
 
</html>