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
        <a href="signup.php"><button class="button cart-button"> Sign up </button></a>
        <a href="login.php"><button class="button cart-button"> Login </button></a>
    </div>
</nav>
<!--Navigation Ends-->
   </header>
<!--Header Ends-->
<!--Main Starts-->
<main class = "flex align-items-center">
      <h1 class= "h1-responsive font-weight-bold text-center my-4">Charity Shops</h1>
      <p class = "writeup">Take a look at our registered charities.</p>
      <br>
      <image class ="flex align-items-center" src="./Asset/carousel/charity shops near me.jpg" alt="Charity Shop" id="teamimage" ></image>
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
				<td>Oxfam</td>
				<td>26, 28 Chapel St, Aberdeen AB10 1SP</td>
        <td>01224 637662</td>
        <td></td>
        <td>https://www.oxfam.org.uk</td>
			</tr>
      <tr>
				<td>Barnardo's (Union Street, Aberdeen)</td>
				<td>200 Union St, Aberdeen AB10 1QS</td>
        <td>01224 645775</td>
        <td></td>
        <td>https://www.barnardos.org.uk/shops/our-shops/aberdeen-union-street</td>
			</tr>
      <tr>
				<td>British Heart Foundation</td>
				<td>202 Union St, Aberdeen AB10 1QS</td>
        <td>01224 645924</td>
        <td>heretohelp@bhf.org.uk</td>
        <td>https://www.bhf.org.uk/what-we-do/find-bhf-near-you/aberdeen-2-bhf-shop</td>
			</tr>
      <tr>
				<td>Somebody Cares Megastore</td>
				<td>Greenwell Road, Aberdeen, AB12 3AX</td>
        <td>01224 313453</td>
        <td>info@somebodycaresuk.org</td>
        <td>https://www.somebodycaresscotland.org</td>
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