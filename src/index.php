<?php
session_start();
if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
    header("Location: login.php");
    exit;
}
?>

<html>

<body>

<a href="index.php">home</a>
<a href="write.php">write</a>
<a href="list.php">list</a>
<a href="logout.php">logout</a>

<br/>
<h1 style="font-family: 'Times New Roman', Times, serif;"> Home </h1>
<?php
echo "<span style=\"font-family: 'Times New Roman', Times, serif;\">You are logged in as " . $_SESSION['username'] . ".</span>";
?>

</body>
</html>