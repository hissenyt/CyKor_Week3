<?php
session_start();
if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
    header("Location: login.php");
    exit;
}
date_default_timezone_set("Asia/Seoul");
$con = mysqli_connect('db', 'exampleuser', 'examplepass', 'exampledb');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $username = $_SESSION['username'];
    $crtime = date("Y-m-d H:i:s");

    if ($con->connect_error){
        die("DB connection error");
    }

    mysqli_query($con, "INSERT INTO posts (title, content, writer, crtime) VALUES ('$title', '$content', '$username','$crtime')");
    header("Location: list.php");
}
?>

<html>

<body>

<a href="index.php">home</a>
<a href="write.php">write</a>
<a href="list.php">list</a>
<a href="logout.php">logout</a>

<br/>
<h1 style="font-family: 'Times New Roman', Times, serif;"> write </h1>
<br/>

<form method="post" action = "write.php">
<input type="text" name="title" placeholder="Title"/>
 <textarea name="content" placeholder="Content"></textarea>
<input type="submit" value="Submit"/>
<br/>

</body>
</html>