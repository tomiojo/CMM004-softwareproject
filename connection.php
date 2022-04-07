<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "marvel";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	
	die("Connection to DB failed!" .mysqli_connect_error());
}
