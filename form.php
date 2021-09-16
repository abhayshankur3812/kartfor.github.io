
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
        <link rel="stylesheet" href="css/form.css">
        <!-- For logo icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- For Material icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- For google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

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


        <!-- Section -->
        <section>
            <div class="content-area">
                
                <div class="alerts">
                    <div class="alert alert-danger" style="display:none;">
                        <strong>Error !</strong> Something went wrong !</div>
                    <div class="alert alert-warning" style="display:none;">
                        <strong>Already a Customer!</strong>
                    </div>
                    <div class="alert alert-success" style="display:none;">
                        <strong>Success!</strong> Sign Up Success full.
                    </div>
                </div>

                <!-- Log In Panel. -->
                <div class="login-panel">
                    <div class="panel-head">
                        Sign in
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-title">
                                Log in to Account
                            </div>

                            <hr><br>
                            <label for="email">Email : </label><br>
                            <input type="email" name="login-email" id="login-iptemail" placeholder="Your eKart Email" pattern="[A-z]+@(gmail)+\.(com)$"><br><br>

                            <label for="password">Password : </label><br>
                            <input type="password" name="login-password" id="login-iptpassword" placeholder="Your eKart Password" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}"><br>

                            <div class="checkboxes">
                                <input type="checkbox" id="login-myCheckbox" onclick="passwordCheck(this.id.toString(),'login-iptpassword')">
                                <span style="font-size: 1.7vh; margin-left: 5px;">Show Password</span>
                            </div>
                            <div class="checkboxes">
                                <input type="checkbox" name="login-keepSignIn" id="login-keepSignIn">
                                <span style="font-size: 1.7vh; margin-left: 5px;">Keep me signed in.</span>
                            </div>

                            <br><br>
                            <center><input type="submit" name="login-submit" value="Log In"></center>
                            <br>
                            <hr>
                            <span>Don't have an account? <a href="#" name="signinPanel" onclick="panel(this.name)">Sign in</a></span>
                            <br>
                            <span>Buying for work? <a href="#" name="signinPanel" onclick="panel(this.name)">Create a free business account</a></span>
                        </form>
                    </div>
                </div>

                <!-- Sign In Panel. -->
                <div class="signin-panel">
                    <div class="panel-head">
                        Sign Up
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-title">
                                Create Account
                            </div>
                            <hr><br>

                            <label for="name">Your Name : </label><br>
                            <input type="text" name="signin-name" id="signin-iptname" placeholder="Your Name" pattern="[A-z\sA-z]{1,}"><br><br>

                            <label for="email">Email : </label><br>
                            <input type="email" name="signin-email" id="signin-iptemail" placeholder="Your Email" pattern="[A-z]+@(gmail)+\.(com)$" oninvalid="this.setCustomValidty('Please try \' @gmail.com')"><br><br>

                            <label for="password">Password : </label><br>
                            <input type="password" name="signin-password" id="signin-iptpassword" placeholder="At least 8 characters" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}"><br>
                            <div class="checkboxes">
                                <input type="checkbox" id="signin-myCheckbox" onclick="passwordCheck(this.id.toString(),'signin-iptpassword')">
                                <span style="font-size: 1.5vh; margin-left: 5px;">Show Password</span>
                            </div>
                            <span>Passwords must be contains a UpperCase letter, LowerCase letter, digits and at least 8 characters.</span>

                            <br><br>
                            <center><input type="submit" name="signin-submit" value="Continue"></center>
                            <br>
                            <hr>
                            <span>By continuing, you agree to eKart's Conditions of Use and Privacy Notice.</span>
                            <br>
                        </form>
                        <br>
                        <div class="divider">
                            <div class="divider-hr"><hr></div>
                            <div class="divider-text">New to eKart?</div>
                            <div class="divider-hr"><hr></div>
                        </div>
                        <!-- <br> -->
                        <button name="loginPanel" class="btn" onclick="panel(this.name)">Create your eKart account</button>
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
        <script src="js\form.js"></script>
        <script src="js\const.js"></script>   
    </body>
</html>

<?php
    require 'include/dbfile.php';

    // define variables and set to empty values
    $nameErr = $emailErr = $passwordErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['signin-submit']) && !empty($_POST['signin-submit']) && !empty($_POST["signin-name"])  && !empty($_POST["signin-email"])  && !empty($_POST["signin-password"])) {
            $name = test_input($_POST["signin-name"]);
            $email = test_input($_POST["signin-email"]);
            $password = test_input($_POST["signin-password"]);

            if(isAlreadyCustomer($email)) {
                echo '<script>let alert=document.getElementsByClassName("alert alert-warning");alert[0].style.display="block";</script>';
            }else {
                if(signUp($name,$email,$password)) {
                    echo '<script>let alert=document.getElementsByClassName("alert alert-success");alert[0].style.display="block";</script>';
                }else {
                    echo '<script>let alert=document.getElementsByClassName("alert alert-danger");alert[0].style.display="block";</script>';
                }
            }
        }
        else if (isset($_POST['login-submit']) && !empty($_POST['login-submit']) && !empty($_POST["login-email"]) && !empty($_POST["login-password"])) {
            $email = test_input($_POST["login-email"]);
            $password = test_input($_POST["login-password"]);
            $keepsignin;
            if (isset($_POST['login-keepSignIn'])) {
                $keepsignin= $_POST['login-keepSignIn'];
            } else {
                $keepsignin= "off";
            }
            if(logIn($email,$password)) {
                echo '<script>let alert=document.getElementsByClassName("alert alert-success");alert[0].style.display="block";alert[0].innerHTML="<strong>Success!</strong> Log In Success full."</script>';
                echo '<script>  keepSignIn("'. $email .'","'.$keepsignin.'");</script>';
            }else {
                
                echo '<script>let alert=document.getElementsByClassName("alert alert-danger");alert[0].style.display="block";alert[0].innerHTML="<strong>Error !</strong> Incorrect Id & Password !"</script>';

            }
        }
    }
?>