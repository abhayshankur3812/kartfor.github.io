<?php

  // php code for functions
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  
  // -----------------------------------------------------
  // ----------------  Functions  ------------------------
  // -----------------------------------------------------
  // Function for already customer.
  function isAlreadyCustomer($email) {
    require 'dbconfig.php';

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sqlretrive =" SELECT * FROM `user` WHERE `user_email`='$email';";
    $count=mysqli_num_rows(mysqli_query($conn, $sqlretrive));
    if ($count!=0) {
      // SQL Closing
      mysqli_close($conn);
      return true;
    } else {
      // SQL Closing
      mysqli_close($conn);
      return false;
    }
  }

  // Function for Sign Up.
  function signUp($name,$email,$password) {
    require 'dbconfig.php';

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      echo mysqli_error($conn);
    }
    $sqlinsert =" INSERT INTO `user` (`user_name`, `user_email`, `user_password`) VALUES ('$name', '$email', '$password');";
    if (mysqli_query($conn, $sqlinsert)) {
      // SQL Closing
      mysqli_close($conn);
      return true;
    }else {
      echo mysqli_error($conn);
      // SQL Closing
      mysqli_close($conn);
      return false;
    }
  }

  // Function for Log in.
  function logIn($email,$password) {
    require 'dbconfig.php';

    // echo $conn;
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sqlretrive =" SELECT `user_email`, `user_password` FROM `user` WHERE `user_email`='$email';";
    $res=mysqli_query($conn, $sqlretrive);
    if (mysqli_num_rows($res)>0) {
      $row = mysqli_fetch_assoc($res);
      if ($row["user_email"]==$email && $row["user_password"]==$password) {
        // SQL Closing
        mysqli_close($conn);
        return true;
      }
      else {
        // SQL Closing
        mysqli_close($conn);
        return false;
      }       
    } else {
      // SQL Closing
      mysqli_close($conn);
      return false;
    }
  }  

?>