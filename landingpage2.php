<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Marvel Businessowners page</title>
    <link rel ="stylesheet" href="./stylesignup.css">
    <link rel ="stylesheet" href="./stylemarvel.css">
</head>
<body>
    <header>
        <nav>
            <div>
                <h1> Welcome! </h1>
            </div>
            <div class="flex align-items-center">
                <img src="./Asset/Marvel business logo_ccexpress.png" alt="brand-logo"/>
            </div>
            <div class="navbar-items">
                <a href="index.html">Home</a>
                <a href="directory.php">Directory</a>
                <a href="aboutus.html">Our team</a>
                <a href="contact_MAC.php">Contact us</a>
                <a href="signup.php">
                    <button> Sign up </button>   
                </a>
                <a href="logout.php">
                <button> Logout </button>
                </a>

            </div>
        </nav>
    </header>
    <main>
        <section id="hero2"></section>
    </main>
    <section>
        <div class="section-title">FILL IN YOUR BUSINESS DETAILS </div>
        <div class ="form2">
            <form action ='marvel.php'method= 'Post'>
                 <!--Link your php here-->
                   <h3>Business Name </h3>
                <Input type='text' name='business_name' placeholder="Business name" required>
                    <h3>Email Address</h3>
                <Input type='email' name='email' placeholder="johndoe@email.com" required>
                    <h3>Business Address </h3>
                <Input type='text' name='address' placeholder="Address" required>
                    <h3>Postal Code </h3>
                    <Input type='text' name='postal_code' placeholder="Postal code" required>
                        <br><br>
                        <h3>Choose your business Category </h3>
                        <label form="Category"></label>
                        <select name="business_category" id="Category">
                          <option value="Barber">Barber</option>
                          <option value="Groceries">Groceries</option>
                          <option value="Healthcare">Healthcare</option>
                          <option value="Gadget Store">Gadget Store</option>
                          <option value="Mechanic">Mechanic</option>
                          <option value="Charity Shop">Charity Shop</option>
                        </select>
                    <h3>Telephone number</h3>
                <Input type='text' name='telephone' placeholder="Telephone" required>
                    <h3>Website</h3>
                <Input type='text' name='website' placeholder="www.website.com">
                    <br><br>
                    <button type="submit" name="submit"> Submit </button>
            </form>
        </div>

    </section>