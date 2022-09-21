<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Page- Visitor Counter</title>
    <link href="../css/bootstrap-4.3.1.css" rel="stylesheet">
    <link rel='icon' href='../Photos/favicon_final 96x96.png' type='image/x-icon'/ >
    <style>
    #count_display{
      width: 500px;
      font-family: sans-serif;
      font-size: 50px;
      border-style: groove;
      border-width: 5px;
    }
    </style>
  </head>
  <body style="padding-top: 70px">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="font-family: sans-serif;">
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"> <a class="nav-link" href="../Home Page/Home Page.html">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="../Reservation/Reservation.html">Reservations</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="../Indian-Menu/Indian-Menu.html">Menu</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="../Gallery/Gallery.html">Gallery</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="../About Page/About Page.html">Contact Us</a> </li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		  <li class="nav-item dropdown active"> <a class="nav-link dropdown-toggle"  id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Employee Login </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
			  <a class="dropdown-item" href="../Employee Page/Employee Page.php">Reservation Log</a> 
			  <a class="dropdown-item" href="../Employee Page-Visitor Counter/Visitor Counter.php">Visitor Counter</a>
        </li>
      </ul>
    </div>
  </nav>
<br><br><br><br><br><br><br><br><br>
  <center><div id=count_display >
    <p style="font-family:helvetica;">Visitor Count: </p>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itgs ia";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT visits FROM user_count";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
           echo $visits; 
        }
    } else {
        echo "0";
    }
    
    $conn->close();
?>
</div></center>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.3.1.js"></script>
</html>