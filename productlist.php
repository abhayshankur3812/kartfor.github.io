<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Web Icon -->
        <link rel="shortcut icon" href="image/logo/eKartIcon.jpg" type="image/x-icon">
        <!-- For Web Style  -->
        <link rel="stylesheet" href="css/const.css">
        <link rel="stylesheet" href="css/productlist.css">
        <!-- For logo icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- For Material icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- For google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- Prefunctioning JavaScript  -->
        <script src="js/productlist-prefun.js"></script>
        <script src="js/server.js"></script>
        <title>Kart for</title>
    </head>
    <body onload="<?php echo "getProducts('".$_REQUEST['categoryId']."')"; ?>">
        
        <?php 
            require_once 'header.php';
        ?>

        <!-- Content Area -->
        <section id="content">
            <div class="content-top">
                <div id="top-panel">
                    <div class="top-panel-banner"><img src="image/banner/banner11.png" alt="" height="100%" width="100%"></div>
                </div>
            </div>
            <div class="content-center">

                <div class="aside" id="left-panel">
                    <div class="panel-content">
                        <span id="left-panel-content-title">
                            Shop by Brand
                        </span>
                        <hr width="100%">
                        <div id="left-panel-content-body">
                            
                            <!-- <div class="left-panel-content-body-items">
                                <img class="brand-img" src="image/brand/realme.jpg" alt="">
                            </div>
                            <div class="left-panel-content-body-items">
                                <img class="brand-img" src="image/brand/narzo.jpg" alt="">
                            </div>
                            <div class="left-panel-content-body-items">
                                <img class="brand-img" src="image/brand/iphone.jpg" alt="">
                            </div>
                            <div class="left-panel-content-body-items">
                                <img class="brand-img" src="image/brand/poco.jpg" alt="">
                            </div>
                            <div class="left-panel-content-body-items">
                                <img class="brand-img" src="image/brand/xiaomi.jpg" alt="">
                            </div>
                            <div class="left-panel-content-body-items">
                                <img class="brand-img" src="image/brand/samsung.jpg" alt="">
                            </div>
                            <div class="left-panel-content-body-items">
                                <img class="brand-img" src="image/brand/infinix.jpg" alt="">
                            </div>
                            <div class="left-panel-content-body-items">
                                <img class="brand-img" src="image/brand/oppo.jpg" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="aside" id="center-panel">
                    <div class="panel-content" id="center-panel-content">
                        
                    </div>
                </div>

                <div class="aside">
                    right
                </div>
            </div>
            
        </section>

        <?php 
            require_once 'footer.php';
        ?>

        <!-- JavaScripts -->
        <script src="js\const.js"></script>    

    </body>
</html>