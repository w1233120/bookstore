<?php
// 取得會員登入表單資料
$account = $_POST["account"];
$UserPWD = $_POST["UserPWD"];

// 資料庫資料
$servername = "localhost";
$username = "id6112070_w1233120";
$password = "xxxxxx";
$dbname = "id6112070_w1233120_01";


// 建立資料庫連結
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// 檢查帳號密碼是否正確
$sql = "SELECT * FROM `member` WHERE `account` = '$account' AND `UserPWD`='$UserPWD'";
$result = mysqli_query($conn,$sql);

// 帳號密碼判斷
if(mysqli_num_rows($result)==0){
    mysqli_free_result($result);

    $conn->close();

    // 顯示要求輸入正確的帳號
    echo "<script>";
    echo "alert('帳號密碼錯誤,請查明後再登入');";
    echo "history.back();";
    echo "</script>";
}else{
    
    mysqli_free_result($result);

    $conn->close();

    setcookie("username",$account,time()+3600*3600*24);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入帳號成功</title>
    <script type="text/javascript">
            window.onload = function() {
                var i =4;
                var eSpan = document.getElementById("second");
                time = setInterval(function(){
                    eSpan.innerHTML=i
                    --i;
                    if(i==0){
                        clearInterval(time);
                        location.href="index.php";
                    }
                }, 1000);
            }
        </script>
</head>
<body>
恭喜你登入成功<span id="second" style="color: red;">5</span>秒鐘之後跳轉， 如果沒有跳轉點擊
        <a href="index.php">連結</a>
</body>
</html>
