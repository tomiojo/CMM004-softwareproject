<?php 
session_start();
?>

<!DOCTYPE html>    
<html lang="eng">
<head>
  <meta charset="UFT-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Business Directory</title>
    <link rel ="stylesheet" href="./stylemarvel.css">
    <link href="./css/bootstrap.min.css"rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
  <body>
<!--Header Starts-->
  <header>
<!--Navigation Start-->
<nav>
    <div class="flex align-items-center">
        <img src="./Asset/Marvel business logo_ccexpress.png" alt="brand-logo"/>
    </div>
    <div class="navbar-items">
        <a href="index.html">Home</a>
        <a href="directory.php">Directory</a>
        <a href="aboutus.html">Our team</a>
        <a href="contact.php">Contact us</a>
        <button class="button cart-button"> Sign up </button>
        <button class="button cart-button"> login </button>
    </div>
</nav>
<!--Navigation Ends-->
   </header>
<!--Header Ends-->
<!--Main Starts-->
<main class = "flex align-items-center">
      <h1 class= "h1-responsive font-weight-bold text-center my-4">Mechanic</h1>
      <p class = "writeup">Our registered healthcare practitioners and stores will take care of all your health needs!</p>
      <br>
      <image class ="flex align-items-center" src="./Asset/carousel/Mechanic.jpg" alt="Mechanic" id="teamimage" ></image>
      <br><br><br>
   <div>
		<table class="text-center">
			<tr>
				<th>Business Name</th>
				<th>Location</th>
        <th>Phone Number</th>
        <th>Mail address</th>
        <th>Website</th>
			</tr>
      <tr>
				<td>LZ Mobile Vehicle Mechanic</td>
				<td>2 Cairngorm Rd, Aberdeen AB12 5RR</td>
        <td></td>
        <td></td>
        <td>https://lz-mobile-vehicle-mechanic.business.site</td>
			</tr>
      <tr>
				<td>DK Mobile Car Mechanic</td>
				<td>Flat F, 9 Bloomfield Road, Aberdeen AB10 6GA</td>
        <td>07922 290515</td>
        <td>dk.carmechanic@yahoo.co.uk</td>
        <td>https://www.dkcarmechanic.co.uk</td>
			</tr>
      <tr>
				<td>Aberdeen Autobody and Mechanical Repairs</td>
				<td>Poynernook Rd, Aberdeen AB11 5QX</td>
        <td>01224 588500</td>
        <td></td>
        <td></td>
			</tr>
      </table>
    <br><br><br>
    <!--(www.w3schools.com, n.d.)-->
    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #DDD;
    }
    
    tr:hover {background-color: #D6EEEE;}

    td {
      font-size: 10pt;
    }

    </style>
    </div>
  </main>
    </main>
<!--Main Ends-->
<!--Start of Footer-->
<br>
  <footer>
    <section id="grey-footer">
        we make it easy to find genuine businesses in Aberdeen
    </section>
    <section id="dark-footer">
        &copy; Copyright 2021, M Team
    </section>
</footer>
<!--End of Footer-->
  </body>
</html>