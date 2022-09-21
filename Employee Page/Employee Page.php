<!DOCTYPE html>
<html>
<head>
<title>Employee Page</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;
}
th {
background-color: #588c7e;
color: white;
text-align: center;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<link rel='icon' href='../Photos/favicon_final 96x96.png' type='image/x-icon'/ >
<link href="../css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="font-family: sans-serif;">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"> <a class="nav-link" href="../Home Page/Home Page.html">Home <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item"> <a class="nav-link" href="../Reservation/Reservation.html">Reservations</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="../Indian-Menu/Indian-Menu.html">Menu</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="../Gallery/Gallery.html">Gallery</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="../About Page/About Page.html">Contact Us<span class="sr-only">(current)</span></a> </li>
	 </ul>
   <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown active"> 
        <a class="nav-link dropdown-toggle" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Employee Page </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
        <a class="dropdown-item" href="../Employee Page/Employee Page.php">Reservation Log</a>
        <a class="dropdown-item" href="../Employee Page-Visitor Counter/Visitor Counter.php">Visitor Counter</a>
           </div>
      </li>
      </ul>
  </nav>
  <br>
  <br><br>

  <h1><center>Reservation Log</center></h1>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Mobile  Number</th>
<th> Email Address</th>
<th> Number of Guests</th>
<th> Date of Reservation</th>
<th> Arrival  Time  </th>
<th> Special  Requests</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "itgs ia");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, Name, MobileNumber, EmailAddress, NumberOfGuests, DateOfBooking, ArrivalTime, SpecialRequests FROM reservations";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td> &nbsp" . $row["Name"] . "</td><td> &nbsp" . $row["MobileNumber"]. "</td><td> &nbsp" . $row["EmailAddress"] . "</td><td> &nbsp" . $row["NumberOfGuests"] . "</td><td> &nbsp" . $row["DateOfBooking"]. "</td><td> &nbsp" . $row["ArrivalTime"] . "</td><td> &nbsp" . $row["SpecialRequests"] . "</td></tr>" ;
}
} 
$conn->close();
?>
</table>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap-4.3.1.js"></script>
</body>
</html>