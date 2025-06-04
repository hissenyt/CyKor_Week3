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
<h1 style="font-family: 'Times New Roman', Times, serif;"> list </h1>

<?php
$con = mysqli_connect('db', 'exampleuser', 'examplepass', 'exampledb');
$result = mysqli_query($con, "SELECT id, title FROM posts ORDER BY id DESC");
echo "<ul>";
for ($i = mysqli_num_rows($result); $i >= 1 ; $i--){
    $row = mysqli_fetch_assoc($result);
    echo "<li>" . "<a href = 'read.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></li>";
}
echo "</ul>";

?>

</body>
</html>