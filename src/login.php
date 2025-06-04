<?php
session_start();
$con = mysqli_connect('db', 'exampleuser', 'examplepass', 'exampledb');
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($con->connect_error){
        die("DB connection error");
    }
    $result = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($result) > 0){
        $userinfo = mysqli_fetch_assoc($result);
        if ($userinfo['password'] == $password){
            $_SESSION['username'] = $username;
            $_SESSION['is_login'] = true;
            header("Location: index.php");
        }
        else {
            $message = "<br/>Wrong Password.";
        }
    }
    else{
        $message = "<br/>User not found.";
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
<h1 style="font-family: 'Times New Roman', Times, serif;"> login </h1>

<form method="post" action = "login.php">
<input type="text" name="username" placeholder="Username"/>
<input type="password" name="password" placeholder="Password"/>
<input type="submit" value="Login"/>
<br/>
<?php
if (isset($message)){
    echo $message;
}
?>

</body>
</html>