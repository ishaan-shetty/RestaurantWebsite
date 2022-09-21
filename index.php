<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itgs ia";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE user_count SET visits = visits+1 WHERE id = 1";
    $conn->query($sql);
    
    $conn->close();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home-Spice Lane</title>
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
    <link href="Home Page/homepage.css" rel="stylesheet">

    	<link rel='icon' href='Photos/favicon_final 96x96.png' type='image/x-icon'/ >
  
</head>
  <body>

  <!-- Popup Window -->
  <!-- <div id="ac-wrapper">
  <div id="popup">
  <center>
    <h2>Attention</h2>
    <h4> This website is created by Ishaan Shetty for educational purposes with permission from Laurel Hotels Private Limited.</h4><br>
    <h4> This website does not guarantee factually correct information about Spice Lane Resto Bar. </h4><br>
    <h4> Access to the restaurant is limited to certain entities as permitted by Ishaan Shetty</h4><br>
      <input type="submit" name="submit" value="Close" onClick="PopUp()" />
  </center>
  </div>
</div> -->

    <!-- Navigation Bar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="font-family: sans-serif;">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="Home Page.html">Home <span class="sr-only">(current)</span></a> </li>
          <li class="nav-item"> <a class="nav-link" href="Reservation/Reservation.html">Reservations</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="Indian-Menu/Indian-Menu.html">Menu</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="Gallery/Gallery.html">Gallery</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="About Page/About Page.html">Contact Us</a> </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"> <a class="nav-link" href="Employee Login/Employee Login.html">Employee login</a> </li>
        </ul>
</div>
</nav>
<br><br><br>
	  <!-- Carousel -->
<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: rgba(148, 146, 146, 0.562)">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox" style="background-color: rgb(255, 255, 255)">
    <div class="carousel-item active"> <img class="d-block mx-auto" src="Photos/Exterior Front View_edited.jpg" alt="First slide">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item"> <img class="d-block mx-auto" src="Photos/YAT_8109_10_11_fused garden fnl.jpg" alt="Second slide">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item"> <img class="d-block mx-auto" src="Photos/YAT_7501_2_3_1st flr intr crnr strght fnl.jpg" alt="Third slide">
      <div class="carousel-caption"> 
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
  <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  <br><br>
	  <header>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <center><img src="Photos/Logo-Graffiti.png"></center>
              <center><img src="https://fontmeme.com/permalink/191106/32c093f62955deb72daceaecfff1d705.png" alt="graffiti-fonts" border="0"></center>
              <p>&nbsp;</p>
            
            </div>
          </div>
        </div>
    </header>
  <section>
      <div class="container ">
<div class="row">
      <div class="col-sm-12 mt-4 mb-2 text-center">
		  <h2 style="font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', 'monospace'"><i>From Our Guests</i></h2>
		  
      </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-6">
            <blockquote class="blockquote">
              <p class="mb-0">Great food. Whatever we tried from soups, starters to mains to mocktails to desserts, not a single thing was below par. Loved all the preparations.</p>
              <small class="blockquote-footer">Rajat Agrawal, <cite title="Source Title"> Google </cite></small> 
            </blockquote>
          </div>
          <div class="col-sm-6 col-lg-6">
            <blockquote class="blockquote">
              <p class="mb-0">This place offered good food. Really liked the mac and cheese pasta. Good staff.</p>
              <small class="blockquote-footer">Mayank Mudgil,<cite title="Source Title"> Google</cite></small> 
            </blockquote>
          </div>
          <div class="col-sm-6 col-lg-6">
            <blockquote class="blockquote">
              <p class="mb-0">This place never disappoints. Perfect for a family dinner and the attendants there ensure you are given the right attention at the right time. Food definitely good and timing of the food brought in is perfect. Recommended.</p>
              <small class="blockquote-footer">Ajay Desai, <cite title="Source Title">Zomato</cite></small> 
            </blockquote>
          </div>
          <div class="col-sm-6 col-lg-6">
            <blockquote class="blockquote">
              <p class="mb-0">Very tasty food. I love eating the nonveg items here. My son also like it a lot. I go for in-dine as well as home delivery in this place. Their service is good.</p>
              <small class="blockquote-footer">Abhijeet Ghosh,<cite title="Source Title"> Zomato</cite></small> 
            </blockquote>
          </div>
        </div>
      </div>
</section>
<div style="background-color:deepskyblue">
<hr>
    <marquee behavior="scroll" style="color: red;" direction="left"onmouseover="this.stop();"onmouseout="this.start();">Avail 20% Off on your next visit. Mention the code SPICEWEBSITE20 to the staff to avail the same &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Try our new signature cocktails and win a chance for complementary dinner for two</marquee>
<hr>
</div>
  <br>
	  <hr>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
          <p class="footerDisclaimer">2019  Copyrights - Laurel Hotels Pvt Ltd- <span>All Rights Reserved</span></p>
          </div>
        </div>
      </div>
    </footer>

    <script src="../js/mobiledetect.js"></script>   
    <script type="text/javascript">
      function PopUp(){
        document.getElementById('ac-wrapper').style.display="none"; 
          }
    </script>
        
    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>