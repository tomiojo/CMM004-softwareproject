<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "logindb";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	
	die("Connection to DB failed!" .mysqli_connect_error());
}
