<!DOCTYPE html>
<html>
<head>
<title>INU Learning-Website For Learning English </title>
<meta charset="utf-8">
<link rel="stylesheet" href="../public/css/trangchu.css">

</head>

<body>
    <div id="content-top">
        <!--logo của website --> 
        <div id="logo">        
             <?php require_once "block/logo.php" ?>             
        </div>
        <!-- quản lý tài khoản bên trái-->
        <div id="account">
            tai khoan
        </div>
        <div class="clr"></div>
    </div>
        <!--menu --> 
        <?php
             require_once "block/menu.php"
         ?>
    <div id="advertise"><!--quảng cáo thứ 1 --> 
        <?php 
            require_once "block/adv1.php"
        ?>    
    </div>
    <div id="advertise2" ><!--quảng cáo thứ 2 -->        
        <?php 
            require_once "block/adv2.php"
        ?>    
    </div>
    <div>
        <!--nội dung bài học -->  
        <div id="content">
        <?php 
            require_once "pages/".$data["Page"].".php"
        ?>
        </div>
        <!--quảng cáo bên phải -->
        
        <?php 
            require_once "block/adv_right.php"
        ?>   
        
    </div>
    
</body>
</html>