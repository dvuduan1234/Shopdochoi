<!DOCTYPE html>
<html>
    <head>
        <title>Mobile Shop</title>
        <meta charset="UTF-8">
        <style>
            .container{
                width: 90%;
                margin: 0 auto;
            }
            .header{
                width: 100%;
                height: 150px;
                background-color: #B7DDF7;
            }
            .footer{
                width: 100%;
                height: 100px;
                background-color: #B7DDF7;
            }
            .main{
                width: 100%;
                overflow: hidden;
                background-color: #4C5256;
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
                color: #FFFFFF;
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
                background-color: #792323;
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
    <body>
        <div class="container">
            <div class="header">
                <div class="banner"></div>
                <div class="nav">
                    <ul>
                        <li><a href="mypage.php">Home</a></li>
                        <?php
                        require_once('./dbconnector.php');
                        $cn = new DBConnector();
                        $sql = "Select * From category";
                        $rows = $cn->runQuery($sql);

                        foreach ($rows as $r) {
                            ?>
                            <li><a href="detailpage.php?CatID=<?= $r['CatID'] ?>"><?= $r['CatName'] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="main">
                <div class="hot">
                    <div class="image">
                        <img src="images/phone.jpg" alt="">
                    </div>
                    <div class="detail">
                        <div class="title">
                            Smartphone shop
                        </div>
                        <div class="des">
                            Find your favourite smartphone here !
                        </div>
                    </div>
                </div>
                <div class="seperator">

                </div>
                <div class="list">
                    <?php
//instance an object DBConnector
                    $cn = new DBConnector();
//call the function of object DBConnector
                    $rows = $cn->runQuery('Select * From product');

                    foreach ($rows as $r) {
                        ?>

                        <div class="item">
                            <div class="ititle"><?= $r['ProName'] ?></div>
                            <div class="iimage">
                                <img src="./images/<?= $r['ProImage'] ?>" alt="">
                            </div>
                            <div class="ides">
    <?= $r['ProPrice'] ?> $
                            </div>
                            <div class="idetail">
                                <div class="buttondetail">
                                    Price	
                                </div>
                            </div>
                        </div>
    <?php
}
?>
                </div>
            </div>
            <div class="footer">

            </div>
        </div>
    </body>
</html>