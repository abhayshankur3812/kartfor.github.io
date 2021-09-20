<?php
    require 'dbconfig.php';
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    //get the q parameter from URL
    $q = $_REQUEST['q'];
    $name = "";
    $sqlretrive =" SELECT `user_name` FROM `user` WHERE `user_email`='$q';";
    $res=mysqli_query($conn, $sqlretrive);
    if (mysqli_num_rows($res)>0) {
        $row = mysqli_fetch_assoc($res);
        $name = $row["user_name"];
    }
    $name = strtok($name, " ");
    $text='<i class="material-icons" style="margin: auto 1.5vw;">&#xe853;</i>Hello '. $name ;
    echo $text;
?>