<?php
// create_post.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog_db";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    $result = $conn->query($sql);

    if ($result) {
        echo "New post added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Underconstruction Farmaide Blog site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div style="display: flex;
    justify-content: space-between;">
        <Button style="border-radius: 10px;"><a href="index.php">Home<br>হোম</a></Button>
        <Button style="border-radius: 10px;"><a href="../Farmaide/">Back to MainSite<br>মূল সাইটে ফিরে যান</a></Button></div>
        <h1>Share your thought<br>আপনার মতামত প্রকাশ করুন</h1>
        
        <form method="post" action="">
            <label for="title">Name/নাম:</label><br>
            <input style="border-color:black;" type="text" id="title" name="title" required><br><br>
            <label for="content">Thought/মতামত:</label><br>
            <textarea style="border-color:black;" id="content" name="content" rows="4" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
