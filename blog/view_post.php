<?php
// view_post.php

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog_db";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM posts WHERE id = $post_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Post not found.";
        exit();
    }
} else {
    echo "Post ID not provided.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['title']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div style="display: flex;
    justify-content: space-between;">
        <Button style="border-radius: 10px;"><a href="create_post.php">Share your thought<br>আপনার মতামত প্রকাশ করুন</a></Button>
        <Button style="border-radius: 10px;"><a href="index.php">Home<br>হোম</a></Button>
        <Button style="border-radius: 10px;"><a href="../Farmaide/">Back to MainSite<br>মূল সাইটে ফিরে যান</a></Button>
    </div>
        <h1><?php echo $row['title']; ?></h1>
        <p class="post-content"><?php echo $row['content']; ?></p>
        <p class="post-date">Published on: <?php echo $row['created_at']; ?></p>
    

        <?php
        // Display comments
        $sql = "SELECT * FROM comments WHERE post_id = $post_id ORDER BY created_at ASC";
        $result_comments = $conn->query($sql);

        if ($result_comments->num_rows > 0) {
            echo "<h3>Comments:</h3>";
            while ($row_comment = $result_comments->fetch_assoc()) {
                echo "<p><strong>" . $row_comment['name'] . "</strong></p>";
                echo "<p>" . $row_comment['comment'] . "</p>";
                echo "<p>Posted on: " . $row_comment['created_at'] . "</p>";
                echo "<hr color=#666>";
            }
        } else {
            echo "<p>No comments yet.</p>";
        }

        // Display likes
        $sql = "SELECT COUNT(*) as total_likes FROM likes WHERE post_id = $post_id";
        $result_likes = $conn->query($sql);
        $row_likes = $result_likes->fetch_assoc();
        $total_likes = $row_likes['total_likes'];

        echo "<p>Total Likes: " . $total_likes . "</p>";

        $conn->close();
        ?>
    
        <div style="background-color:#fff; border-radius: 10px; padding:10px;">    
        <ul><p><b>Add a Comment</b></p></ul>
        <form action="add_comment.php" method="post">
        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
        <!-- This hidden input will pass the post_id to add_comment.php -->
        <label for="name">Your Name:</label>
        <input style="width: 200px; height:5px; border-color:black;" type="text" id="name" name="name" required><br>
        <label for="comment">Comment:</label><br>
        <textarea style="border-color:black;" id="comment" name="comment" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Submit">
        </form>
    </div>
    </div>
</body>
</html>
