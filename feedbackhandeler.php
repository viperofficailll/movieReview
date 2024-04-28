<?php
include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the form
    $id = $_POST['id'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    // Get the current rating and number of reviews from the database
    $sql = "SELECT rating, num_reviews FROM movieinfo WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentRating = $row['rating'];
        $numReviews = $row['num_reviews'];

        // Calculate the new average rating
        $newRating = (($currentRating * $numReviews) + $rating) / ($numReviews + 1);

        // Update the movie's rating and number of reviews in the database
        $updateSql = "UPDATE movieinfo SET rating = $newRating, num_reviews = num_reviews + 1 WHERE id = $id";
        if ($conn->query($updateSql) === TRUE) {
            // Insert the new review into the database
            $insertSql = "INSERT INTO review (id, rating, review) VALUES ($id, $rating, '$review')";
            if ($conn->query($insertSql) === TRUE) {
                echo "<h3>Review submitted successfully</h3>";
            } else {
                echo "Error inserting review: " . $conn->error;
            }
        } else {
            echo "Error updating rating: " . $conn->error;
        }
    } else {
        echo "Movie not found";
    }
} else {
    // If the request method is not POST, redirect the user
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="feedbackhandler.css">
</head>
<body>
    
</body>
</html>
