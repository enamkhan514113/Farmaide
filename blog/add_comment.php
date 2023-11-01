<?php
// add_comment.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = $_POST['post_id'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog_db";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO comments (post_id, name, comment) VALUES ('$post_id', '$name', '$comment')";
    $result = $conn->query($sql);

    if ($result) {
        header("Location: view_post.php?id=" . $post_id);
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}