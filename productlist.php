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
        
    <!-- Header -->
    <header>
        <div class="heading">
            <div id="heading-content-1">
                <img src="image/logo/eKartLogo.jpg" alt="eKartLogo" id="head-logo">
            </div>
            <div id="heading-content-2">
                <div class="search">
                    <input type="text" name="search" placeholder="Search...">
                    <!-- Google Icons Unicode for  Search -->
                    <i class="material-icons" style="font-size: 5vh; margin-left: 5px;">&#xe8b6;</i>
                </div>
            </div>
            <div id="heading-content-3">
                <div class="contact-logos">
                    <!-- Facebook -->
                    <a class="contact-logos-icon" style="color: #3b5998;" href="#!" role="button">
                        <i class="fab fa-facebook-f fa-lg me-3"></i>
                    </a>

                    <!-- Twitter -->
                    <a class="contact-logos-icon" style="color: #55acee;" href="#!" role="button">
                        <i class="fab fa-twitter fa-lg me-3"></i>
                    </a>

                    <!-- Whatsapp -->
                    <a class="contact-logos-icon" style="color: #25d366;" href="#!" role="button">
                        <i class="fab fa-whatsapp fa-lg me-3"></i>
                    </a>

                    <!-- Instagram -->
                    <a class="contact-logos-icon" style="color: #ac2bac;" href="#!" role="button">
                        <i class="fab fa-instagram fa-lg me-3"></i>
                    </a>
                </div>
            </div>
        </div>

    </header>


    <!-- Nav-Bar -->
    <nav>
        <div class="topmenu-lgscrn">
            <ul>
                <li>
                    <div class="lgscrn-menu" style="margin: 0 2vh;">
                        <button id="button-more" onclick="openTopLinks(this.id)">
                            <i class="material-icons" style="font-size: 1.5vw;font-weight: bold;">&#xe5d2;</i>More
                        </button>
                    </div>
                </li>
                <li>
                    <ul>
                        <li>
                            <div class="lgscrn-menu">
                                <button id="button-home" onclick="openTopLinks(this.id)">
                                    <i class="material-icons"
                                        style="font-size: 1.5vw;font-weight: bold;">&#xe88a;</i>Home
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="lgscrn-menu dropdown">
                                <button id="button-category" onclick="openTopLinks(this.id)">
                                    <i class="material-icons"
                                        style="font-size: 1.5vw;font-weight: bold;">&#xe896;</i>Category
                                </button>
                                <div class="dropdown-content">
                                    <ul>
                                        <li>
                                            <div class="dropdown-content-list" data-list="list-mobile"
                                                onclick="products(this)">Mobiles</div>
                                        </li>
                                        <li>
                                            <div class="dropdown-content-list" data-list="list-fashion"
                                                onclick="products(this)">Fashion<div>
                                        </li>
                                        <li>
                                            <div class="dropdown-content-list" data-list="list-electronics"
                                                onclick="products(this)">Electronics
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-content-list" data-list="list-appliances" 
                                                onclick="products(this)">Appliances
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="lgscrn-menu">
                                <button id="button-deals" onclick="openTopLinks(this.id)">
                                    <i class="material-icons"
                                        style="font-size: 1.5vw;font-weight: bold;">&#xe8cb;</i>Deals
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="lgscrn-menu">
                                <button id="button-prime" onclick="openTopLinks(this.id)">
                                    <i class="material-icons"
                                        style="font-size: 1.5vw;font-weight: bold;">&#xe86e;</i>Prime
                                </button>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="lgscrn-menu">
                        <button id="button-cart" onclick="openTopLinks(this.id)">
                            <i class="material-icons" style="font-size: 1.5vw;font-weight: bold;">&#xe8cc;</i>Cart
                        </button>
                    </div>
                </li>
            </ul>
        </div>

        <div class="topmenu-smscrn">
            <ul>
                <li>
                    <!-- Google Icons Unicode for Menu  -->
                    <div class="smscrn-menu" id="sm-more" onclick="openTopLinks(this.id)">
                        <i class="material-icons" style="font-size: 3.5vh; font-weight: bold;">&#xe5d2;</i>
                    </div>
                </li>
                <li>
                    <!-- Google Icons Unicode for Home  -->
                    <div class="smscrn-menu" id="sm-home" onclick="openTopLinks(this.id)">
                        <i class="material-icons" style="font-size: 3.5vh; font-weight: bold;">&#xe88a;</i>
                    </div>
                </li>
                <li>
                    <div class="smscrn-menu" id="smscrn-menu-search-block">
                        <input type="text" id="smscrn-menu-search-input" name="search" placeholder="Search...">
                        <!-- Google Icons Unicode for  Search -->
                        <i class="material-icons" style="font-size: 3.5vh; font-weight: bold;">&#xe8b6;</i>
                    </div>
                </li>
                <li>
                    <!-- Google Icons Unicode for Cart  -->
                    <div class="smscrn-menu" id="sm-cart" onclick="openTopLinks(this.id)">
                        <i class="material-icons" style="font-size: 3.5vh; font-weight: bold;">&#xe8cc;</i>
                    </div>
                </li>
            </ul>
        </div>

        <div id="sidemenu-smscrn">
            <div class="sidemenu-top-smscrn">
                <div id="sidemenu-top-smscrn1">
                    <!-- Google Icons Unicode for  User Account -->
                    <i class="material-icons" style="margin: auto 3vw;">&#xe853;</i>
                    Hello ! User
                </div>
                <!-- Google Icons Unicode for  Close -->
                <i class="material-icons" id="sidemenu-close" onclick="closeSideMenu()">&#xe5cd;</i>
            </div>
            <ul>
                <li>
                    <div class="sidemenu-content" id="sidemenu-content-1" onclick="openSideLinks(this);">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe8cb;</i></div>
                        <div class="sidemenu-content-text">Today's Deals</div>
                    </div>
                </li>
                <li>
                    <div class="sidemenu-content dropdown" id="sidemenu-content-2" onclick="dropdown()">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe896;</i></div>
                        <div class="sidemenu-content-text">Shop by Category</div>
                    </div>
                    <div id="dropdown-content-2">
                        <ul>
                            <li>
                                <div class="dropdown-content-list" data-list="list-mobile"
                                    onclick="products(this)">Mobiles</div>
                            </li>
                            <li>
                                <div class="dropdown-content-list" data-list="list-fashion"
                                    onclick="products(this)">Fashion<div>
                            </li>
                            <li>
                                <div class="dropdown-content-list" data-list="list-electronics"
                                    onclick="products(this)">Electronics
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-content-list" data-list="list-appliances" 
                                    onclick="products(this)">Appliances
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="sidemenu-content" id="sidemenu-content-3" onclick="openSideLinks(this);">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe851;</i></div>
                        <div class="sidemenu-content-text">Your Account</div>
                    </div>
                </li>
                <li>
                    <div class="sidemenu-content" id="sidemenu-content-4" onclick="openSideLinks(this);">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe854;</i></div>
                        <div class="sidemenu-content-text">Your Orders</div>
                    </div>
                </li>
                <li>
                    <div class="sidemenu-content" id="sidemenu-content-5" onclick="openSideLinks(this);">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe8a1;</i></div>
                        <div class="sidemenu-content-text">eKart Pay</div>
                    </div>
                </li>
                <li>
                    <div class="sidemenu-content" id="sidemenu-content-6" onclick="openSideLinks(this);">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe86e;</i></div>
                        <div class="sidemenu-content-text">Premium</div>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="sidemenu-content" id="sidemenu-content-7" onclick="openSideLinks(this);">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe8b8;</i></div>
                        <div class="sidemenu-content-text">Settings</div>
                    </div>
                </li>
                <li>
                    <div class="sidemenu-content" id="sidemenu-content-8" onclick="openSideLinks(this);">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe7fb;</i></div>
                        <div class="sidemenu-content-text">Customer Service</div>
                    </div>
                </li>
                <li>
                    <div class="sidemenu-content" id="sidemenu-content-9" onclick="openSideLinks(this);">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe88e;</i></div>
                        <div class="sidemenu-content-text">About</div>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="sidemenu-content" id="sidemenu-content-10" style="display: none;"
                        onclick="openSideLinks(this);">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe879;</i></div>
                        <div class="sidemenu-content-text">Log out</div>
                    </div>
                    <div class="sidemenu-content" id="sidemenu-content-11" style="display: none;"
                        onclick="openSideLinks(this);">
                        <div class="sidemenu-content-icon"><i class="material-icons">&#xe879;</i></div>
                        <div class="sidemenu-content-text">Sign In</div>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="sidemenu-content">
                        <img src="image/logo/eKartLogo.jpg" alt="eKartLogo"  width="75%" height="25%">
                    </div>
                </li>
            </ul>
        </div>
    </nav>


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

        <!-- Footer -->
        <footer>
            <h3><b>get IT </b> Copyright
                <i class="material-icons" style="color: black; background: transparent;">&#xe90c;</i> 2021
            </h3>
        </footer>


        <!-- JavaScripts -->
        <script src="js\const.js"></script>    

    </body>
</html>