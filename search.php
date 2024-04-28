<?php
include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $genre = $_POST['genre'];

    $query = "SELECT * FROM movies WHERE name LIKE '%$name%' OR cast LIKE '%$name%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Search Results:</h2>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<figure>";
            echo "<a href='movieinfo.php?id=" . $row['id'] . "'>";
            echo "<img src='images/" . $row['image'] . "' height='100'>";
            echo "</a>";
            echo "<figcaption>";
            echo "<p>Name: " . $row['name'] . "</p>";
            echo "<p>Cast: " . $row['cast'] . "</p>";
            echo "<p>genre: " . $row['genre'] . "</p>";
            echo "</figcaption>";
            echo "</figure>";
        }
    } else {
        echo "No results found.";
    }
}

