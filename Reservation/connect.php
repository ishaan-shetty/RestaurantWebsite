<?php
$name=$_POST['name'];
$mobilenumber=$_POST['tel'];
$email=$_POST['email'];
$number=$_POST['number'];
$date=$_POST['Date'];
$time=$_POST['time'];
$message=$_POST['message'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "itgs ia";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO reservations ( Name, MobileNumber, EmailAddress, NumberOfGuests,DateOfBooking, ArrivalTime, SpecialRequests)
values ('$name','$mobilenumber','$email','$number','$date','$time','$message')";
if ($conn->query($sql)){
    header("Location: Reservation.html");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
}
?>