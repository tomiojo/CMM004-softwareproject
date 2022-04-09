<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "marvel1";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	
	die("Connection to DB failed!" .mysqli_connect_error());
}
