<?php
if(isset($_COOKIE["username"])){
    echo "<script>";
    echo "alert('你已經登入帳號了');";
    echo "</script>";

    header("location:index.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo20.jpg" type="image/x-icon">
  <meta name="description" content="">
  <title>會員登入</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
 <style>
 .reg{  
    width:450px;  
    height:auto;  
    margin:0 auto;  
  
}  
.content{  
    border:1px solid #DBDBDB;  
    color:#003976;  
    background:white;  
    text-align:center  
}  
.btn{  
      
    color:white;
	background-color:skyblue;  
     
} 
.topic{  
    background:url(../images/denj_top.jpg);  
    width:450px;  
    height:54px;  
}

 .pb-md-5 {
	text-align: center;
}
 </style>  
  
</head>
</head>
<body style="background-color:#F9F9F9">
  <section class="menu cid-qVHZ9M8yyF" once="menu" id="menu2-x">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <div align="center">
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          </button>
      </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <div align="center"><span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <div align="center"><span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="index.php">
                  WKCJ</a></span>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div align="center">
              <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                  <a class="nav-link link text-black display-4" href="index.php">首頁 &nbsp;</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link text-black display-4" href="page7.php">關於我們&nbsp;</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="page4.php">搜尋書籍</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="page5.php">會員登入</a></li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="page6.php">註冊</a></li>
              </ul>
              
            </div>
        </div>
    </nav>
</section>

<section class="engine">
  <div align="center"><a href="https://mobirise.me/n">landing page templates</a></div>
</section>
<section class="mbr-section content5 cid-qVHZ9MHEKI mbr-parallax-background" id="content5-y">

    

    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(255, 255, 255);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 align="center" class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    WKCJ
                </h2>
                <h3 align="center" class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">If you want something you've never had then you've got to do something you've never done.</h3>
                
                
            </div>
        </div>
    </div>
</section>
<div class="reg">
  <div class="content">
    <form action="checkpwd.php" method="POST">  
          <table cellpadding="0" cellspacing="0">
          <img src="assets/images/S__13680652.jpg" width="32%" height="18%" align="middle">
          <tr>  
            <td colspan="3" height="0"></td>  
    </tr>
                    <tr>  
                        <td width="120px"><div align="center">帳    號:</div></td>  
                        <td width="220px"><div align="center">
                          <input type="text" name="account" required/>
                        </div></td>  
                        <td width="110px"><div align="center"></div></td>  
                    </tr>  
                    <tr>  
                        <td colspan="3" height="10"></td>  
                    </tr>
                    <tr>  
                        <td width="120px"><div align="center">密    碼:</div></td>  
                        <td width="220px"><div align="center">
  <input type="password" name="UserPWD" required>
                      </div></td>  
                        <td width="110px"></td>  
                    </tr>  
                    <tr>  
                        <td colspan="3" height="10"></td>  
                    </tr>
                       
                    <tr>  
                        <td colspan="3" height="10"></td>  
                    </tr>  
                    <tr>  
                        <td colspan="2"><div align="center">
                          <input type="submit" value="提交" class="btn"/>
                        </div></td>  
                          
                    </tr>  
                      
                <div align="center">
                  <p>&nbsp;</p>
                      </table>  
                    </form>  
                      
                      
          </div>
  </div>  
          
</div>  


<section class="cid-qVHZ9NcwQ9 mbr-parallax-background" id="footer5-z">

    

    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(255, 255, 255);"></div>

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">
                    <div align="center"><a href="https://mobirise.com/">
                      <img src="assets/images/logo2.png" alt="Mobirise" title="">
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <p align="center" class="mbr-text align-right links mbr-fonts-style display-7">&nbsp;</p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr align="center">
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                    <p align="center" class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2018 &nbsp;- All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
    </div>
</section>


  <div align="center">
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/parallax/jarallax.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/theme/js/script.js"></script>
  </div>

  
</body>
</html>