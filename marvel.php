<?php
	require 'connection.php';

	$business_name = $_POST['business_name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$postal_code = $_POST['postal_code'];
	$business_category= $_POST['business_category'];
	$telephone = $_POST['telephone'];
	$website = $_POST['website'];

	$stmt = $con->prepare("insert into business(bus_nme, e_mail, bus_site, pst_cd, ser_cat, pho_num, web) values(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssss", $business_name, $email, $address, $postal_code, $business_category, $telephone, $website);
	$execval = $stmt->execute();
	echo "Registration successfully...";
	$stmt->close();
	$con->close();
	
?>