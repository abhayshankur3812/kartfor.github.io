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
    <link rel="stylesheet" href="css/index.css">
    <!-- For logo icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- For Material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- For google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Prefunctioning JavaScript  -->
    <script src="js/index-prefun.js"></script>
    <!-- <script src="js/server.js"></script> -->
    <title>Kart for</title>
</head>

<body>


    <!-- Header -->
    <header>
        <div class="heading">
            <div id="heading-content-1">
                <img src="image/logo/eKartLogo.jpg" alt="eKartLogo" id="head-logo">
            </div>
            <div id="heading-content-2">
                <div class="search">
                    <input type="text" name="search" placeholder="Search...">
                    <!--  Google Icons Unicode for  Search -->
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
    <section>
        <div class="content-area">
            <div class="content-item" id="content-item1">
                <div class="slide-content">
                    <img class="image-slides" src="image/banner/sale-banner1.png" alt="sale-banner1">
                    <img class="image-slides" src="image/banner/sale-banner2.png" alt="sale-banner2">
                    <img class="image-slides" src="image/banner/sale-banner3.png" alt="sale-banner3">
                </div>
            </div>
            <div class="content-item" id="content-item2">
                <div class="content-item-title">Top Brands</div>
                <div class="content-item-img">
                    <img src="image/banner/banner1.png" alt="banner1" width="100%" height="100%">
                </div>
            </div>
            <div class="content-item" id="content-item3">
                <div class="content-item-list">
                    <div class="content-item-list-title">
                        New Launch's Mobiles
                    </div>
                    <div class="content-item-list-area">
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/mobiles/Mobile1.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="mobile">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/mobiles/Mobile2.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="mobile">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/mobiles/Mobile3.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="mobile">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/mobiles/Mobile4.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="mobile">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/mobiles/Mobile5.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="mobile">
                        </div>
                    </div>
                </div>
                <div class="content-item-list">
                    <div class="content-item-list-title">
                        New Fashion Trend
                    </div>
                    <div class="content-item-list-area">
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/fashion/mensWear/Mens1.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="fashion">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/fashion/womensWear/Womens1.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="fashion">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/fashion/kidsWear/Kids1.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="fashion">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/fashion/watches/Watch1.jpg"
                                onload="loadImageSize(this,parentElement)" alt="fashion">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/fashion/shoe/Shoe2.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="fashion">
                        </div>
                    </div>
                </div>
                <div class="content-item-list">
                    <div class="content-item-list-title">
                        Best Appliances
                    </div>
                    <div class="content-item-list-area">
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/appliances/ac/Electronics7.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="appliances">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/appliances/accesories/Electronics8.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="appliances">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/appliances/tv/Electronics1.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="appliances">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/appliances/washingMachine/Electronics5.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="appliances">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/appliances/tv/Electronics3.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="appliances">
                        </div>
                    </div>
                </div>
                <div class="content-item-list">
                    <div class="content-item-list-title">
                        Beast Laptops
                    </div>
                    <div class="content-item-list-area">
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/Laptop/Laptop1.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="laptops">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/Laptop/Laptop2.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="laptops">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/Laptop/Laptop3.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="laptops">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/Laptop/Laptop4.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="laptops">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/Laptop/Laptop5.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="laptops">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-item" id="content-item4">
                <div class="content-item-title">Get Fashioned on Your Price </div>
                <div class="content-item-img">
                    <img class="image-slides" src="image/banner/fashion-banner1.png" alt="sale-banner1">
                    <img class="image-slides" src="image/banner/fashion-banner2.png" alt="sale-banner2">
                    <img class="image-slides" src="image/banner/fashion-banner3.png" alt="sale-banner3">
                </div>
            </div>
            <div class="content-item" id="content-item5">
                <div class="content-item-list">
                    <div class="content-item-list-title">
                        Shop by Category
                    </div>
                    <div class="content-item-list-area">
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/category/appliances.jpg"
                                onload="loadImageSize(this,parentElement)" alt="appliances">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/category/electronics.jpg"
                                onload="loadImageSize(this,parentElement)" alt="electronics">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/category/mobiles.jpg" onload="loadImageSize(this,parentElement)"
                                alt="mobile">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/category/fashion.jpg" onload="loadImageSize(this,parentElement)"
                                alt="fashion">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-item" id="content-item6">
                <div class="content-item-list">
                    <div class="content-item-list-title">
                        Recommended
                    </div>
                    <div class="content-item-list-area">
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/mobiles/Mobile5.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="mobile">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/Laptop/Laptop5.jpeg" onload="loadImageSize(this,parentElement)"
                                alt="laptops">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/fashion/womensWear/Womens3.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="fashion">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/fashion/shoe/Shoe1.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="shoe">
                        </div>
                        <div class="content-item-list-area-imgs">
                            <img class="img" src="image/fashion/mensWear/Mens1.jpeg"
                                onload="loadImageSize(this,parentElement)" alt="shoe">
                        </div>
                    </div>
                </div>
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
    <script src="js\index.js"></script>
    <script src="js\const.js"></script>
</body>

</html>