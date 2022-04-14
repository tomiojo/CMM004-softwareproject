<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="UFT-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Contact Us</title>
    <link rel ="stylesheet" href="./stylemarvel.css">
    <link href="./css/bootstrap.min.css"rel="stylesheet"/>

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
        <a href="signup.html">
            <button> Sign up </button>   
        </a>
        <a href="login.html">
        <button> login </button>
        </a>
       </div>
    </nav>
    <br>
  <!--Navigation Ends-->
  </header>
<!--Header Ends-->
<!--Main Starts-->
<main>
    <!--CONTACT FORM STARTS-->
            <!--(CodingNepal, 2021), (contributors, n.d.), (W3schools, 2019)-->
            <h1>We love to hear from you!</h1>
            <div class="form-center">
            <div class="wrapper">
               <form action="./form.php">
                 <div class="dbl-field">
                   <div class="field">
                     <input type="text" name="name" placeholder="Enter your name">
                     <i class='fas fa-user'></i>
                   </div>
                   <div class="field">
                     <input type="text" name="email" placeholder="Enter your email">
                     <i class='fas fa-envelope'></i>
                   </div>
                 </div>
                 <div class="message">
                   <textarea placeholder="Write your message" name="message"></textarea>
                   <i class="material-icons"></i>
                 </div>
                 <div class="button-area">
                   <button type="submit">Send Message</button>
                   <span></span>
                 </div>
               </form>
             </div>
            </div>
             <script src="scriptcontactform.js"></script>
</main>
<!--Start of Footer-->
<br>
  <footer>
    <section id="grey-footer">
        we make it easy to find genuine businesses in Aberdeen
    </section>
    <section id="dark-footer">
        &copy; Copyright 2021, M Team
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>