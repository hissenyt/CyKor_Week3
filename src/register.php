<?php
$con = mysqli_connect('db', 'exampleuser', 'examplepass', 'exampledb');
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($con->connect_error){
        die("DB connection error");
    }
    $result = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($result) > 0){
        $message = "<br/>This username is already registered.";
    }
    else{
        mysqli_query($con, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
        header("Location: login.php");
        exit;
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<a href="index.php">home</a>
<a href="register.php">register</a>
<a href="login.php">login</a>
<br/>
<h1 style="font-family: 'Times New Roman', Times, serif;"> register </h1>


<form method="post" action = "register.php">
<input type="text" name="username" placeholder="Username"/>
<input type="password" name="password" placeholder="Password"/>
<input type="submit" value="Register"/>
<br/>

<?php
if (isset($message)){
    echo $message;
}
?>

</body>
</html>