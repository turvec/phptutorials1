<?php $conn = new mysqli("localhost","root","","danger");
if (!$conn) {
    die("connection failed:". mysqli_connect_error());
}
 echo "connected successfully";
 ?>