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
<br>
<br>
  <main>
    <div class="text-center">
    <h3>Explore what Aberdeen has to offer!</h3>
    <br>
    <p> Browse the wide variety of local businesses that the Granite city has to offer.</p>
    </div>
    <br>
    <!--Search bar-->
    <!--(HTML Table Styling n.d.)-->
    <!--(CodeFlix, n.d.)-->
    <div id="searchbar" class="text-center">
      <form method="post" >
        <input type="text" name="search" size="50">
        <input type="submit" name="submit" value="Go">
      </form>
    </div>

    <?php
    $db = new PDO("mysql:host=localhost;dbname=marvel",'root','root');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $db->prepare("SELECT * FROM `business` WHERE ser_cat = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
    <div>
		<table class="text-center">
			<tr>
				<th>Category</th>
				<th>Business Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Telephone</th>
        <th>Website</th>
        <th>
			</tr>
			<tr>
				<td><?php echo $row->ser_cat; ?></td>
				<td><?php echo $row->bus_nme; ?></td>
        <td><?php echo $row->e_mail; ?></td>
        <td><?php echo $row->bus_site; ?></td>
        <td><?php echo $row->pho_num; ?></td>
        <td><?php echo $row->web; ?></td>
			</tr>
		</table>
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
    </style>
    </div>
<?php 
	}	
		else{
			echo "Category does not exist";
		}
}
?>

<!--Carousel Starts-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
      <!-- Images -->
      <div class="carousel-inner">

        <div class="carousel-item active">
        <img src="./Asset/carousel/barber2.jpg" class="d-block w-100" alt="Barber">
          <div class="container">
            <div class="text-center">
            <a href="./barber.php" class="btn btn-dark"><h2 >Barber</h2></a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="./Asset/carousel/gadgetstore4.jpg" class="d-block w-100" alt="Gadget store">
            <div class="container">
                <div class="text-center">
                <a href="./gadgetstores.php" class="btn btn-dark"><h2>Gadget stores</h2></a>
                </div>
            </div>
        </div>

        <div class="carousel-item">
          <img src="./Asset/carousel/groceries.jpg" class="d-block w-100" alt="Groceries">
            <div class="container">
              <div class="text-center">
              <a href="./groceries.php" class="btn btn-dark"><h2>Groceries</h2></a>
              </div>       
            </div>
        </div>

        <div class="carousel-item">
          <img src="./Asset/carousel/charity shops near me.jpg" class="d-block w-100"  alt="Charity-shops">
            <div class="container">
              <div class="text-center">
              <a href="./charityshop.php" class="btn btn-dark"><h2>Charity shop</h2></a>
             </div>
            </div> 
        </div>

        <div class="carousel-item">
          <img src="./Asset/health care.jpg" class="d-block w-100" alt="Healthcare">
            <div class="container">
              <div class="text-center">
              <a href="./healthcare.php" class="btn btn-dark"><h2>Healthcare</h2></a>
              </div>
            </div>
        </div>

        <div class="carousel-item">
          <img src="./Asset/carousel/Mechanic.jpg" class="d-block w-100" alt="Mechanic">
            <div class="container">
              <div class="text-center">
              <a href="./mechanic.php" class="btn btn-dark"><h2>Mechanic</h2></a>
              </div>
            </div>  
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <br>
    <br>
 <!--Closing section-->
    <div class="text-center">
        <h3>We keep you safe.</h3>
        <br>
        <p>We make sure that ALL of our business partners are genuine businesses that offer the best services and products available in Aberdeen.</p>
        </div>
        <br>
        <br>
  </main>
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