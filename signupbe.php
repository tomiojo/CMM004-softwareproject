<?php 
 
 
if(isset($_POST["submit"])){
    


        $email = $_POST["email"];
		$password = $_POST["password"];
        $telephone = $_POST["telephone"];

    require_once 'connection.php';
    require_once 'functions.php';

    if (emptyInput($email,$password,$telephone) !== false){
        header("location: signup.php?error=emptyfields");
        exit();
    }
    if (invalidemail($email) !== false){
        header("location: signup.php?error=invalidemail");
        exit();
    }
    if (existingemail($con,$email) !== false){
        header("location: signup.php?error=emailexists");
        exit();
    }
    createUser($con,'0',$email,$password,$telephone);
    }
    else{
    header("location: signup.php");
    exit();
}