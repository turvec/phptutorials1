<?php
include_once 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE users set 
name ='$name',
email = '$email',
password = '$password' where id = '$id' ";

if ($conn->query($sql)) {
    echo "Data updated";
    header('location: users.php');
}else {
    echo $conn->error;
}

?>