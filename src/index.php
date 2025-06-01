<html>

<body>
<form method="post" action = "index.php">
id:     <input type="text" name="id"/>
<br/>
password: <input type="password" name="password"/>
<br/>
check: <input type="checkbox" name="check"/>
<br/>
<input type="submit"/>

</form>
<?php
    //phpinfo();
    //echo "Hello world";
    //echo 1 / 3;
    //var_dump("12345");
    // $a = 1; $str = "코딩";
    // echo "Hello" . " " . "World" . "\"!\"";
    // echo "<br / >";
    // $a += 1;            // 주석 처리
    // print $a;            # 주석 처리 
    // echo $str . "디잉";
    // define("PI", "3.141592");
    // echo "<br />";
    // var_dump(1=="1");
    // echo "<br />";
    // var_dump(1 === "1")
    // echo $_GET['id'] . "님, 안녕하세요.";
    // echo "<br />";
    // echo "당신의 비밀번호는 " . $_GET['password'] . " 입니다.";
    // echo "<br />";
    // echo $_GET['check'];

    if ($_POST['id'] == "김진모" and $_POST['password'] == 1234){
        echo "로그인에 성공했습니다. 김진모님, 안녕하세요";
    }
    else if ($_POST["id"] == "김진모"){
        echo "비밀번호가 틀렸습니다.";
    }
    else {
        echo "등록되지 않은 사용자입니다.";
    }

    // $i = 1;
    // while ( $i < 10) {
    //     echo "안뇽";
    //     echo "<br/>";
    //     $i++;
    // }
    echo date('Y-n-j H:m:s');
    $grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);
    foreach($grades as $key => $value){
        echo "key: {$key} value:{$value}<br />";
    }
?>

</body>
</html>