<?php
// Setting up the variables.
$servername = "localhost";
$dbname= "marvel";
$usr = "root";
$password = "";

// Creating the connection
$db = mysqli_connect($servername, $usr, $password, $dbname);

// Checking the connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}