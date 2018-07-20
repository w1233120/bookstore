<?php
    setcookie("username", '',time()+3600*3600*24);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>帳號登出成功</title>
    <script type="text/javascript">
            window.onload = function() {
                var i =4;
                var eSpan = document.getElementById("second");
                time = setInterval(function(){
                    eSpan.innerHTML=i
                    --i;
                    if(i==0){
                        clearInterval(time);
                        location.href="page5.php";
                    }
                }, 1000);
            }
        </script>
</head>
<body>
你已經登出<span id="second" style="color: red;">5</span>秒鐘之後跳轉至登入頁面， 如果沒有跳轉點擊
        <a href="page5.php">連結</a>
</body>
</html>