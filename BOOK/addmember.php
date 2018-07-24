<?php
// 取得表單資料
$account=$_POST["account"];
$UserPWD=$_POST["UserPWD"];
$name=$_POST["name"];
$UserSex=$_POST["UserSex"];
$date=$_POST["date"];
$phonenumber=$_POST["phonenumber"];
$adrees=$_POST["adrees"];
$servername = "localhost";
$username = "id6112070_w1233120";
$password = "";
$dbname = "id6112070_w1233120_01";

// 建立資料連結
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//開啟資料表
//$db_select = mysqli_select_db($conn,"member");
//if($db_select) die("開啟資料表失敗");

// 檢查帳號是否有人申請
$sql ="SELECT * FROM `member` WHERE `account`= '$account'";
$result = mysqli_query($conn,$sql);
if(!$result) die("執行sql語句失敗");

// 如果帳號有人使用
if(mysqli_num_rows($result)!=0){
    // 釋放$result所占的記憶體
    mysqli_free_result($result);

    //顯示訊息要求更換使用者帳號
    echo "<script>";
    echo "alert('你所使用的帳號已經有人使用,請更換帳號');";
    echo "history.back();";
    echo "</script>";
}else{
    mysqli_free_result($result);

    $sql = "INSERT INTO member(account, UserPWD, UserSex, date, phonenumber, adrees, name) 
    VALUES ('$account','$UserPWD','$UserSex','$date','$phonenumber','$adrees','$name')";

    $result = mysqli_query($conn,$sql);
    if(!$result) die("執行sql語句失敗");
	
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新增帳號成功</title>
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
恭喜你註冊成功<span id="second" style="color: red;">5</span>秒鐘之後跳轉， 如果沒有跳轉點擊
        <a href="index.php">連結</a>
</body>
</html>
