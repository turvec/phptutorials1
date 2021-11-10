<?php

$name = "victor";
$email = "kfor@gmail.com";
$password = "1234";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First php learning</title>
</head>

<body>

    <h1>My name is <?php echo $name . "  and i am a backend dev."; ?></h1>
    <a href="users.php">go to users</a>

    <form action="add_action.php" method="post">
        <input type="text" name="name" value="<?php echo $name ?>">
        <input type="text" name="email" value="<?php echo $email ?>">
        <input type="text" name="password" value="<?php echo $password ?>">
        <button>Submit</button>
    </form>
</body>

</html>