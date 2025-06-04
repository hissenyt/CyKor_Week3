<?php
session_start();
$con = mysqli_connect('db', 'exampleuser', 'examplepass', 'exampledb');
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM posts WHERE id = $id");
$row = mysqli_fetch_assoc($result);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($con->connect_error){
        die("DB connection error");
    }
    if ($row['writer'] === $_SESSION['username']){
        mysqli_query($con, "DELETE FROM posts WHERE id = $id");
        header("Location: list.php");
        exit;
    }
    else {
        echo "<script>alert('Only the writer of the post can delete the post.');</script>";
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
<h1 style="font-family: 'Times New Roman', Times, serif;"> delete </h1>
<br/>

<?php
echo '<form method="post" action = "delete.php?id=' . $id . '">';
echo "<span style=\"font-family: 'Times New Roman', Times, serif;\">Are you sure you want to delete this post?</span><br/><br/>";
echo "<span style=\"font-family: 'Times New Roman', Times, serif;\">Title: " . $row['title'] . "</span><br/><br/>";
echo "<span style=\"font-family: 'Times New Roman', Times, serif;\">Content: " . nl2br($row['content']) . "</span><br/><br/>";
?>
<input type="submit" value="Delete"/>
<br/>

</body>
</html>