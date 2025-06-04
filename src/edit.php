<?php
session_start();
$con = mysqli_connect('db', 'exampleuser', 'examplepass', 'exampledb');
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM posts WHERE id = $id");
$row = mysqli_fetch_assoc($result);
$orgtitle = $row['title'];
$orgcontent = $row['content'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    if ($con->connect_error){
        die("DB connection error");
    }
    if ($row['writer'] === $_SESSION['username']){
        mysqli_query($con, "UPDATE posts SET title = '$title', content = '$content' WHERE id = $id");
        header("Location: read.php?id=" . $id);
        exit;
    }
    else {
        echo "<script>alert('Only the writer of the post can edit the post.');</script>";
    }
}
?>

<html>

<body>

<a href="index.php">home</a>
<a href="write.php">write</a>
<a href="list.php">list</a>
<a href="logout.php">logout</a>

<br/>
<h1 style="font-family: 'Times New Roman', Times, serif;"> edit </h1>
<br/>

<?php
echo '<form method="post" action = "edit.php?id=' . $id . '">';
echo '<input type="text" name="title" placeholder="Title" value = "' . $orgtitle . '"/>';
echo '<textarea name="content" placeholder="Content">' . $orgcontent . '</textarea>';
?>
<input type="submit" value="Update"/>
<br/>

</body>
</html>