<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "logindb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname));
{

	die("Connection to DB failed!" .mysqli_connect_error());
}
