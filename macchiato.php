<!DOCTYPE html>
<html>
    <head>
        <title>TOCOTOCO SHOP</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .container{
                width: 90%;
                margin: 0 auto;
            }
            .container img{
                width: 80%;
            }
           
            
            .footer{
                width: 100%;
                height: 100px;
                background-color: #B7DDF7;
            }
            .main{
                width: 100%;
                overflow: hidden;
                background-color:black ;
            }
            .hot{
                width: 100%;
                padding: 15px;
                box-sizing: border-box;
            }
            .image{
                width: 40%;
                float: left;
            }
            .image img{
                width: 100%;
            }
            .detail{
                width: 60%;
                float: left;
            }
            .title{
                background-color: #F8DE4F;
                font-size: 25px;
                line-height: 30px;
                padding-left: 5px;
            }
            .detail{
                padding-left: 15px;
                box-sizing: border-box;
            }
            .des{
                color: white;
                font-size: 18px;
                padding-left: 10px;
                padding-top: 10px;
            }
            .seperator{
                clear: left;
                color: #F8DE4F;
                padding-left: 20px;
                padding-top: 10px;
            }
            .list{
                width: 100%;
                padding-top: 10px;
                color: white;
            }
            .item{
                width: 25%;
                float: left;
                padding: 5px;
                box-sizing: border-box;
            }
            .iimage img{
                width: 50%;
                height : 50%;
            }
            .ititle{
                background-color: #F8DE4F;
                font-size: 18px;
                line-height: 25px;
                padding: 5px 10px;
            }
            .ides{
                background-color: #F6DCDC;
                padding: 5px 10px;
            }
            .idetail{
                background-color: #F6DCDC;
                overflow: hidden;
            }
            .buttondetail{
                width: 100px;
                background-color: #F8DE4F;
                float:right;
                line-height: 25px;
                text-align: center;
                border-radius: 5px;
            }
            .banner{
                width: 100%;
                height: 100px;
            }
            .nav{
                width: 100%;
                height: 50px;
                background-color: black;
            }
            .nav ul{
                margin: 0;
                padding: 0;
                list-style: none;
            }
            .nav a{
                color:#DCF4F6;
                font-size: 30px;
                text-decoration: none;
                line-height: 50px;
                padding: 0 15px;
                display: block;
            }
            .nav li{
                float: left;
            }
            .nav a:hover{
                color: #792323;
            }
            .nav li:hover{
                background-color:#DCF4F6;
            }
        </style>
    </head>
    <body
        <?php
require_once './functions.php';
//load items
$query = "SELECT iId, iName, iDescription, iPrice, iStatus, iSize, iImage FROM Item ";
$result = queryMysql($query);
$error = $msg = "";
if (!$result){
    $error = "Couldn't load data, please try again.";
}
//load catalogue
$query1 = "SELECT cId, cName, cDescription from Catalogue";
$result1 = queryMysql($query1);
$error1 = $msg1 = "";
if (!$result1){
    $error1 = "Couldn't load data, please try again.";
}
?>

        
        <div class="container">
            <center><img src="images/ts5.jpg"></center>
            <div class="header">
                <div class="banner"></div>
                <div class="nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login.php">Admin</a></li>
                        <li><a href="milktea.php">MilkTea</a></li>
                        <li><a href="freshfruittea.php">Fresh Fruit Tea</a></li>
                        <li><a href="macchiato.php">Macchiato</a></li>
                        <li><a href="che.php">Chè</a></li>
                    </ul>
                    <?php
                    while ($rowc = mysqli_fetch_array($result1)) {
                        $Name = $rowc[1];                                               
                        echo "<span>$Name</span>";    
                        echo "<span> <span>";
                    }
                    ?>

                </div>
            </div>
            <div class="main">
                <div class="hot">
                    <div class="image">
                        <img src="images/ts2.jpg" alt="">
                    </div>
                    <div class="detail">
                        <div class="title">
                            Toco Toco Nhấp Nhô Nhấp Nhô
                        </div>
                        <div class="des">
                            Nơi cảm xúc thăng hoa !
                            </div>
                             <div class="des">
                            - Khẩu hiệu của chúng tớ là "FRESH IS ATTITUDE"
                            </div>
                             <div class="des">
                            - Tham vọng của chúng tớ là "FRESH THE WORLD"
                            </div>
                             <div class="des">
                             👉Hãy thử ít nhất 1 lần để cảm nhận nhé <3
                        </div>
                    </div>
                </div>
                <div class="seperator">

                </div>
                <div class="list w3-row">
                    <div class=""><h2>Macchiato</h2>
                    
             <?php
     require_once './functions.php';
     $query = "SELECT iId, iName, iDescription, iPrice, iStatus, iSize, iImage,cName FROM Item,Catalogue WHERE Item.catalogueId=Catalogue.cId AND cName LIKE '%Macchiato%' ORDER BY cName";
     $result = queryMysql($query);
     $error = $msg = "";
     if (!$result){
      $error = "Couldn't load data, please try again.";
     }
     while ($row = mysqli_fetch_array($result)) {
        $iId = $row[0];
        $iName = $row[1];
        $iDescription = $row[2];
        $iPrice = $row[3];
        $iStatus = $row[4];
        $iSize = $row[5];
        $iImage = $row[6];
        
        echo "<div class='sp w3-quarter w3-card w3-center ' ><div class='w3-gray w3-padding-large'>$iStatus</div><div ><img onclick=\"document.getElementById('$iName').style.display='block'\" id='testimg' src='./images/item/". $iImage . "' width='100%'></div><div class='name'><h3>$iName</h3></div><h3>$iPrice Vnđ</h3></div>"
                . "<!--SHOW MORE INFORMATION-->
  <div id='$iName' class='w3-modal'>
      <div class='w3-modal-content w3-white w3-animate-top w3-card-4'>
        <div class='w3-container w3-blue w3-center w3-padding-20'> 
          <span onclick=\"document.getElementById('$iName').style.display='none';\"
         class='w3-button w3-red w3-xlarge w3-display-topright'>×</span>
          <h2>$iName</h2>
        </div>
        <div class='w3-container w3-row'>
          <div class='w3-half'>
              <img src='./images/item/". $iImage . "' width='100%'>
          </div>
          <div class='w3-half w3-left'>
              <h3>$iPrice Vnđ</h3>
              <p>$iDescription.</p>
              <h4>$iSize</h4>                           
          </div>                                                    
        </div>
        <button class='w3-button w3-red w3-section' onclick=\"document.getElementById('$iName').style.display='none';\">Close <i class='fa fa-remove'></i></button>
      </div>
    </div>";                                                                                       
    }
?>
                    </div><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

