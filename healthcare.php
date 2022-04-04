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
      <h1 class= "h1-responsive font-weight-bold text-center my-4">Healthcare</h1>
      <p class = "writeup">Our registered healthcare practitioners and stores will take care of all your health needs!</p>
      <br>
      <image class ="flex align-items-center" src="./Asset/health care.jpg" alt="Healthcare" id="teamimage" ></image>
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
				<td>H1 Healthcare</td>
				<td>469 Union St, Aberdeen AB11 6DB</td>
        <td>01224563100</td>
        <td>recruitment@h1healthcare.com</td>
        <td>https://www.h1healthcare.com</td>
			</tr>
      <tr>
				<td>Newcross Healthcare Solutions</td>
				<td>2nd Floor Amicable House, 252 Union St, Aberdeen AB10 1PA</td>
        <td>01224 515235</td>
        <td>communications@newcrosshealthcare.com</td>
        <td>https://www.newcrosshealthcare.com/branches/newcross-aberdeen</td>
			</tr>
      <tr>
				<td>Anchor Health Solutions</td>
				<td>40 Union Terrace, Aberdeen AB10 1NP</td>
        <td>01224 542249</td>
        <td>admin@anchorhealthsolutions.com</td>
        <td>https://anchorhealthsolutions.com</td>
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