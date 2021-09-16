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
        <link rel="stylesheet" href="css/product.css">
        <!-- For logo icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- For Material icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- For google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
        <!-- Prefunctioning JavaScript  -->
        <!-- <script src="js/server.js"></script> -->
        <title>Kart for</title>
    </head>
    
<body>
    <?php 
        require_once 'header.php';
    ?>

    <!-- Content Area -->
    <section class="display-flex" id="content">
        <div class="display-flex" id="content-area" data-productid="">
            <div class="display-flex" id="content-area-left-panel">
                <div class="display-flex" id="product-left-area">
                    <div class="display-flex" id="product-left-section1">
                        <div class="display-flex" id="product-img">
                            <img id="product-img-main" src="./image/mobiles/Mobile7.jpeg" width="100%" height="100%" alt="">
                        </div>
                        <div id="product-fav">
                            <input type="checkbox"  name="favourite-product" id="">
                        </div>
                    </div>
                    <div class="display-flex" id="product-left-section2">
                        <div class="display-flex list-arrow" onclick="prevImg()">
                            <i class="material-icons" style="line-height: 2;">&#xe5cb;</i>
                        </div>
                        <div id="product-imgs-list">
                            <div class="imgs-list-items">
                                <img class="product-imgs" onmouseover="imgin(this)" onmouseout="imgout()" onclick="imgclick(this)" src="" height="100%" width="100%" alt="1">
                            </div>
                            <div class="imgs-list-items">
                                <img class="product-imgs" src="" height="100%" width="100%" alt="2">
                            </div>
                            <div class="imgs-list-items">
                                <img class="product-imgs" src="" height="100%" width="100%" alt="3">
                            </div>
                            <div class="imgs-list-items">
                                <img class="product-imgs" src="" height="100%" width="100%" alt="4">
                            </div>
                            <div class="imgs-list-items">
                                <img class="product-imgs" src="" height="100%" width="100%" alt="5">
                            </div>
                            <div class="imgs-list-items">
                                <img class="product-imgs" src="" height="100%" width="100%" alt="6">
                            </div>
                        </div>
                        <div class="display-flex list-arrow" onclick="nextImg()">
                            <i class="material-icons" style="line-height: 2;">&#xe5cc;</i>
                        </div>
                    </div>
                    <div class="display-flex" id="product-left-section3">
                        <input type="button" value="Add to Cart">
                        <input type="button" value="Buy Now">
                    </div>
                </div>
            </div>
            <div class="display-flex" id="content-area-right-panel">
                <div class="display-flex" id="product-right-area">
                    <div class="padding-5-10">
                        <span id="title"> IPhone</span>
                    </div>
                    <div class="padding-5-10">
                        <span id="rating">4.5<i class="material-icons" style="font-size: 15px;font-weight: bolder;background-color: transparent;vertical-align: middle;margin-inline-start: 5px;">&#xe83a;</i></span>
                    </div>
                    <div class="padding-5-10">
                        <span id="price-new">50000/-</span>
                        <span id="price-old">52000/-</span>
                    </div>
                    <div class="padding-5-10">
                        <ul>
                            <li>
                                <span class="offers">Bank Offer</span>
                            </li>
                            <li>
                                <span class="offers">Credit Card Offer</span>
                            </li>
                            <li>
                                <span class="offers">EMI Offer</span>
                            </li>
                            <li>
                                <span class="offers">Cashback Offer</span>
                            </li>
                        </ul>
                    </div>
                    <div class="padding-5-10">
                        <img id="brand" src=".\image\brand\iphone.jpg" alt="">
                        <span id="warranty">  
                            warranty
                        </span>  
                    </div>
                    <div class="padding-5-10">
                        <fieldset class="fieldsets">
                            <legend>Variants</legend>
                            <ul>
                                <li>
                                    <div class="fieldsets-div">
                                        <span class="fieldsets-div-title">
                                            RAM
                                        </span>
                                        <span class="fieldsets-div-content">
                                            <span class="content-tiems">3GB</span>
                                            <span class="content-tiems">4GB</span>
                                            <span class="content-tiems">6GB</span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="fieldsets-div">
                                        <span class="fieldsets-div-title">
                                            Storage
                                        </span>
                                        <span class="fieldsets-div-content">
                                            <span class="content-tiems">64GB</span>
                                            <span class="content-tiems">128GB</span>
                                            <span class="content-tiems">512GB</span>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="fieldsets-div">
                                        <span class="fieldsets-div-title">
                                            Color
                                        </span>
                                        <span class="fieldsets-div-content">
                                            <span class="content-tiems">Red</span>
                                            <span class="content-tiems">White</span>
                                            <span class="content-tiems">Black</span>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                    </div>
                    <div class="padding-5-10">
                        <fieldset class="fieldsets">
                            <legend>Highlights</legend>
                            <ul>
                                <li>RAM</li>
                                <li>ROM</li>
                                <li>Display</li>
                                <li>Processor</li>
                                <li>xyz</li>
                            </ul>
                        </fieldset>
                    </div>
                    <div class="padding-5-10">
                    <fieldset class="fieldsets">
                            <legend>Seller</legend>
                            <div class="fieldsets-div">
                                <span class="fieldsets-div-title">
                                    Seller Id
                                </span>
                                <span class="fieldsets-div-content">
                                    Description
                                </span>
                            </div>
                        </fieldset>
                    </div>
                    <div class="padding-5-10">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2">General</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Model Name </th>
                                    <td>IPhone</td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2">General</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Model Name </th>
                                    <td>IPhone</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        require_once 'footer.php';
    ?>
    <!-- JavaScripts -->
    <!-- <script src="js\index.js"></script> -->
    <script src="js/product.js"></script>
    <script src="js\const.js"></script>
    
</body>
</html>