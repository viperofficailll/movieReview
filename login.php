<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form action="" method="post">
        username: <input type="text" name="username"></input>
        password : <input type="password" name="password"></input>
        <input type="submit" name="submit" value="submit" />
    </form>

</body>

</html>
<?php
include 'db_conn.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $passwd = $_POST['password'];




    $query = "SELECT * FROM `userinfo` WHERE  email = '$username' and password = '$passwd'";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total === 1) {
        // Valid credentials
        $_SESSION["email"] = $email;
        $_SESSION["location"] = $location;

        header("Location: home.php");
        exit();
    } else {
        echo "Incorrect email address or password";
    }
} else {
    echo "Chill ma hai";
}
