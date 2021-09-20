
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
        
        <?php 
            require_once 'header.php';
        ?>

        <!-- Section -->
        <section>
            <div class="content-area">
                
                <div class="alerts">
                    <div id="danger" class="alert alert-danger" style="display:none;"></div>
                    <div id="warning" class="alert alert-warning" style="display:none;"></div>
                    <div id="success" class="alert alert-success" style="display:none;"></div>
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
                            <label for="email">Email  </label><br>
                            <input type="email" name="login-email" id="login-iptemail" placeholder="Your eKart Email" pattern="[A-z]+@(gmail)+\.(com)$"><br><br>

                            <label for="password">Password  </label><br>
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

                            <label for="name">Your Name  </label><br>
                            <input type="text" name="signin-name" id="signin-iptname" placeholder="Your Name" pattern="[A-z\sA-z]{1,}"><br><br>

                            <label for="email">Email  </label><br>
                            <input type="email" name="signin-email" id="signin-iptemail" placeholder="Your Email" pattern="[A-z]+@(gmail)+\.(com)$" oninvalid="this.setCustomValidty('Please try \' @gmail.com')"><br><br>

                            <label for="password">Password  </label><br>
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
     
        <?php 
            require_once 'footer.php';
        ?>
         
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
                echo '<script>let alert=document.getElementById("warning");alert.style.display="block";
                alert.innerHTML="<strong>Already a Customer!</strong>"</script>';
            }else {
                if(signUp($name,$email,$password)) {
                    echo '<script>let alert=document.getElementById("success");alert.style.display="block";
                    alert.innerHTML="<strong>Success!</strong> Sign Up Success full."</script>';
                }else {
                    echo '<script>let alert=document.getElementById("danger");alert.style.display="block";
                    alert.innerHTML="<strong>Error !</strong> Something went wrong !"</script>';
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
            if(isAlreadyCustomer($email)) { 
                if(logIn($email,$password)) {
                    echo '<script>let alert=document.getElementById("success");alert.style.display="block";
                    alert.innerHTML="<strong>Success!</strong> Log In Success full."</script>';
                    echo '<script>  keepSignIn("'. $email .'","'.$keepsignin.'");</script>';
                }else {
                    echo '<script>let alert=document.getElementById("danger");alert.style.display="block";
                    alert.innerHTML="<strong>Error !</strong> Incorrect Password !"</script>';
                }
            }else {
                echo '<script>let alert=document.getElementById("warning");alert.style.display="block";
                alert.innerHTML="<strong>Not a Customer!</strong> Sign In"</script>';
            }
        }
    }
?>