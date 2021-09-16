<?php
    require 'dbconfig.php';

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // $str='{
    //     "ROM": "64 GB ROM",
    //     "Display": "15.49 cm (6.1 inch) Liquid Retina HD Display",
    //     "Camera": "12MP + 12MP | 12MP Front Camera",
    //     "OS": "A13 Bionic Chip Processor",
    //     "Warranty": "Brand Warranty of 1 Year"
    // }';
    // $sql = "UPDATE `mobiles` SET `model_description`='".$str."' WHERE `model_id`=0010011009";
    
    //     if (mysqli_query($conn, $sql)) {
    //     echo "Record updated successfully";
    //     } else {
    //     echo "Error updating record: " . mysqli_error($conn);
    //     }


    // $sql = "SELECT `model_description` FROM `mobiles` WHERE `model_id`=0010011010";
    // $res=mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($res);
    // $jsondata=json_decode($row["model_description"],true);
    // // foreach($jsondata as $index=>$value){
    // //     echo $index;
    // // }
    // $val=array_values($jsondata);
    // // for($i=0;$i<count($jsondata);$i++) {
    //     echo $val[1];
    // // }
    // // print_r($jsondata["0"]);

    // SQL Closing
    mysqli_close($conn);
?>
