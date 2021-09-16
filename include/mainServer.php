<?php
    require 'dbconfig.php';

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_REQUEST['category'])) {
        $categoryName=getCategoryName($_REQUEST['category']);
        $sqlretrive =" SELECT `category_id` FROM `category` WHERE `category_name`='$categoryName';";
        $res=mysqli_query($conn, $sqlretrive);
        $row = mysqli_fetch_assoc($res);
        $id=$row["category_id"];
        echo $id; 
    }
    
    // SQL Closing
    mysqli_close($conn);

    // Funtion to get Category Name.
    function getCategoryName($var) {
        $category=explode("-",$var,2);
        return $category[1];
    }
?>