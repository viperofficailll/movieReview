<?php
include 'db_conn.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    ?>

    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Ratings and Reviews</h1>
        <form action="feedbackhandeler.php?id=<?php echo $id; ?>" method="post">
            <input type="radio" name="rating" value="1" required> 1
            <input type="radio" name="rating" value="2" required> 2
            <input type="radio" name="rating" value="3" required> 3
            <input type="radio" name="rating" value="4" required> 4
            <input type="radio" name="rating" value="5" required> 5
            <br>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="review" placeholder="Write a Review" required>
            <button type="submit" name="submit">Submit Review</button>
        </form>
    </body>
    </html>
    <?php
}
?>