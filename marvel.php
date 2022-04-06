<?php
	$business_name = $_POST['business_name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$postal_code = $_POST['postal_code'];
	$telephone = $_POST['telephone'];
	$website = $_POST['website'];

	// Database connection
	$conn = new mysqli('localhost','root','','logindb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed: ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(business_name, email, address, postal_code, telephone, website) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $business_name, $email, $address, $postal_code, $telephone, $website);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>