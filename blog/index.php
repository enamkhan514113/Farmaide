<?php
// index.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_db";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Underconstruction Farmaide Blog site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
        <h1>Farmaide Blog Site<br>ফার্মেইড ব্লগ সাইট</h1>
        <div style="display: flex;
    justify-content: space-between;">
        <Button style="border-radius: 10px;"><a href="create_post.php">Share your thought<br>আপনার মতামত প্রকাশ করুন</a></Button>
        <Button style="border-radius: 10px;"><a href="../Farmaide/">Back to MainSite<br>মূল সাইটে ফিরে যান</a></Button></div>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='post-preview'>";
                echo "<h2><a href='view_post.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></h2>";
                echo "<p class='post-content'>" . substr($row['content'], 0, 100000) . "</p>";
                echo "<p class='post-date'>Published on: " . $row['created_at'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No blog posts yet.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
