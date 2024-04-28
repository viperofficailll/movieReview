<?php
include 'db_conn.php';

if (isset($_POST['submit'])) {
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'images/' . $file_name;

   
    
    $id = $_POST['value2'];
    $description = $_POST['value3'];
    
    $rating = $_POST['value5'];
    $num = $_POST['value6'];

    if (move_uploaded_file($tempname, $folder)) {
        // Insert the movie details into the movieinfo table
        $insert_query = mysqli_query($conn, "INSERT INTO `movieinfo`(`id`, `image`, `description`, `rating`, `num_reviews`) 
        VALUES ($id, '$file_name', '$description','$rating', '$num')");

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

        <input type="text" name="value2" placeholder="id">
        <input type="text" name="value3" placeholder="Enter description">

        <input type="text" name="value5" placeholder="Enter rating">
        <input type="text" name="value6" placeholder="Enter num rating">

        <input type="submit" name="submit" value="Submit"></input>
    </form>
    <br>
    <br>
    <br>
</body>

</html>