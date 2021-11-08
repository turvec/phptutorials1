<?php
include_once "connection.php";

  $sql = "SELECT * from users";
  $users = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <h3>All Users</h3>

    <p></p>

    <table class="card card-body  table table-hover shadow table-bordered table-primary">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>action</th>
            </tr>

        </thead>
        <tbody>
            <?php
                while ($user = $users->fetch_assoc()) {
            ?>
            <tr>
                <td> <?php  echo  $user['name']?></td>
                <td> <?php  echo  $user['email']  ?></td>
                <td> <?php  echo  $user['password']  ?></td>
                <td><a href="edit.php?id=<?php  echo  $user['id']?>">Edit</a></td>
            </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    <button class="btn btn-outline-primary">Click Me</button>
</body>

</html>