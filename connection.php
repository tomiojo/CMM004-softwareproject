<?php

/**Creating connection with database */

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "marvel";

/** Check connection */

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname));
{

	die("Connection to DB failed!" .mysqli_connect_error());
}
