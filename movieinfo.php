<?php
include 'db_conn.php';

if (isset($_GET['id'])) {
    $movie_id = $_GET['id'];

    $query = "SELECT * FROM movieinfo WHERE id = '$movie_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
        $description = $row['description'];
        $rating = $row['rating'];

        echo "<h2>Movie Information</h2><br>";
        echo "<img src='images/$image' height='200'><br><br>";
        echo "<strong>Description:</strong> $description<br><br>";
        echo "<strong>Rating:</strong> $rating<br><br>";
        echo "<a href='review.php?id=" . $row['id'] . "'>Review and Rate</a>";
        

        // Display reviews for the movie
        $query1 = "SELECT * FROM review WHERE id = $movie_id";
        $result1 = mysqli_query($conn, $query1);

        if (mysqli_num_rows($result1) > 0) {
            echo "<h2>Reviews for Movie ID $movie_id:</h2>";
            while ($row = mysqli_fetch_assoc($result1)) {
                echo "<p><strong>Rating:</strong> " . $row['rating'] . "</p>";
                echo "<p><strong>Review:</strong> " . $row['review'] . "</p>";
                echo "<hr>";
            }
        }
    } else {
        echo "No movie information found for that ID";
    }
    
} else {
    echo "No movie ID specified";
}

