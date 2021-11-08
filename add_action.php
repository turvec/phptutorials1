<?php

include_once "connection.php";


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
echo "   ".$name;
echo "   ".$email;
echo "   ".$password;

$sql="INSERT into users (name,email,password)
VALUES('$name','$email','$password')";
if ($conn->query($sql)) {
    echo "data inserted";
}else {
    echo $conn->error;
}

?>