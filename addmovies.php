<?php
include 'db_conn.php';

if (isset($_POST['submit'])) {
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'images/' . $file_name;
    
    $name = $_POST['value2'];
    $genre = $_POST['value3'];
    $cast = $_POST['value4'];

    if (move_uploaded_file($tempname, $folder)) {
        $insert_query = mysqli_query($conn, "INSERT INTO `movies`(`name`, `genre`, `cast`, `image`) VALUES ('$name','$genre','$cast','$file_name')");
        
        if ($insert_query) {
            echo "Data inserted successfully";
        } else {
            echo "Data insertion failed";
        }
    } else {
        echo "File upload failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addrestaurant.css">
</head>

<body>
    <h2>
        Enter Movie Details:
    </h2>
    <form action="" method="post" enctype="multipart/form-data">
        Choose Movie Image :
        <input type="file" name="image"></input>
        
        <input type="text" name="value2" placeholder="Enter Movie Name" >
        <input type="text" name="value3" placeholder="Enter Genre" >
        <input type="text" name="value4" placeholder="Enter Cast" >
                
        <input type="submit" name="submit" value="Submit"></input>
        </form>
        <br>
        <br>
        <br>
        </body>
        </html>
        