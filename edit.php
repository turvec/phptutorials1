<?php
include_once 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * from users where id ='$id'";
$users = $conn->query($sql);
$users = $users->fetch_assoc();

echo $users['name'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First php</title>
</head>

<body>

    <h1>My name is <?php echo " Turvec and i am a backend dev."; ?></h1>
    <a href="users.php">go to users</a>

    <form action="edit_action.php" method="post">
        <input type="hidden" name="id" value="<?php  echo  $users['id']?>">
        <input type="text" name="name" value="<?php  echo  $users['name']?>">
        <input type="text" name="email" value="<?php  echo  $users['email']?>">
        <input type="text" name="password" value="<?php  echo  $users['password']?>">
        <button>Submit</button>
    </form>
</body>

</html>