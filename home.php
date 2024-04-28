
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to Movie Database</h1>
    <form action="search.php" method="POST">
        <label for="genre">Select Genre:</label><br>
        <input type="radio" id="action" name="genre" value="Action">
        <label for="action">Action</label><br>
        <input type="radio" id="comedy" name="genre" value="Comedy">
        <label for="comedy">Comedy</label><br>
        <input type="radio" id="drama" name="genre" value="Drama">
        <label for="drama">Drama</label><br>
        <input type="radio" id="horror" name="genre" value="Horror">
        <label for="horror">Horror</label><br><br>

        <label for="search">Search by Name:</label><br>
        <input type="text" id="search" name="name"><br><br>

        <input type="submit" value="Search">
    </form>
</body>
</html>
