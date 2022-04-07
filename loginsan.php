<?php
include("connection.php"); // establishing connection with our database

if(empty($_POST['email']) || empty($_POST['password'])){
    echo "Both fields are required";
}
$username=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE mail='$username' and pass='$password'";
$result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==1){
        header("location: landingpage2.php"); //Redirecting to another page
    } else{
        echo "Incorrect username or password";
    }

    $con -> close();

?>