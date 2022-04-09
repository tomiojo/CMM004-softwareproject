<?php

function emptyInput($email,$password,$telephone){
	$result;
	if(empty($email)||empty($password)||empty($telephone)){
	$result =true;
}
else{
	$result =false;
}
return $result;
}

function invalidemail($email){
	$result;
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	$result = true;
}
else{
	$result = false;
}
return $result;
}

function existingemail($con,$email){
	$sql = "SELECT*FROM users WHERE email=?;";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: signup.php?error=failed");
        exit();
}

mysqli_stmt_bind_param($stmt,"s",$email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)){
	return $row ;

}
else {
	$result = false;
	return $result;
}

mysqli_stmt_close($stmt);
}

function createUser($con,$email,$password,$telephone){
	$sql = "INSERT INTO users(email, password, telephone) VALUES (?,?,?);";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: signup.php?error=failed");
        exit();
}
print $sql;

$hashedpwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"sss",$email,$hashedpwd,$telephone);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
	header("location: login.php?error=none");
        exit();
    
}

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	print $sql;
	header("Location: login.php");
	exit();

}