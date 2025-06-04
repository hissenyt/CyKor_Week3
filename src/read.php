<?php
session_start();
?>

<html>

<body>

<a href="index.php">home</a>
<a href="write.php">write</a>
<a href="list.php">list</a>
<a href="logout.php">logout</a>

<br/>
<?php
$con = mysqli_connect('db', 'exampleuser', 'examplepass', 'exampledb');
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM posts WHERE id = $id");
$row = mysqli_fetch_assoc($result);
echo "<h1 style=\"font-family: 'Times New Roman', Times, serif;\">" . $row['title'] . "</h1>";
echo "<span style=\"font-family: 'Times New Roman', Times, serif;\">By " . $row['writer'] . ".</span><br/><br/>";
echo "<span style=\"font-family: 'Times New Roman', Times, serif;\">" . $row['content'] . ".</span><br/><br/>";
echo "<span style=\"font-family: 'Times New Roman', Times, serif;\">Created at: " . $row['crtime'] . "</span><br/><br/>";
echo "<a style=\"font-family: 'Times New Roman', Times, serif;\" href = 'edit.php?id=" . $id . "'>Edit</a> ";
echo "<a style=\"font-family: 'Times New Roman', Times, serif;\" href = 'delete.php?id=" . $id . "'>Delete</a>";
?>

</body>
</html>