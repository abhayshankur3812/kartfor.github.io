<?php 
    require 'dbconfig.php';

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    if (isset($_REQUEST['categoryIdForProducts'])) {
        $categoryId=$_REQUEST['categoryIdForProducts'];
        $sqlretrive =" SELECT `table_name` FROM `category` WHERE `category_id`=$categoryId;";
        $result = mysqli_query($conn, $sqlretrive);
        $row = mysqli_fetch_assoc($result);
        $tableName=$row["table_name"];
        $sqlretrive =" SELECT * FROM `".$tableName."`";
        $result = mysqli_query($conn, $sqlretrive);
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $jsondata=json_decode($row["model_description"],true);
                $val=array_values($jsondata);
                echo "<div class='panel-content-list' data-id='".$row["model_id"]."' onclick='showProduct(this)'>
                <div class='panel-content-item'> 
                    <div class='content-item-section1'>
                        <div class='content-item-img'>
                            <img class='product-img' src='image/mobiles/Mobile8.jpeg' alt=''>
                        </div>
                        <div class='content-item-fav'>
                            <input type='checkbox'  name='favourite-product' id=''>
                        </div>
                    </div>
                    <div class='content-item-section2'>
                        <span class='content-item-title'>
                            ".$row["brand_name"]." ".$row["model_name"]."
                        </span>
                        <div class='content-item-rating'>
                            ".$row["model_rating"]."
                        </div>
                        <div class='content-item-description'>
                            <ul>
                                <li>".$val[0]."</li>
                                <li>".$val[1]."</li>
                                <li>".$val[2]."</li>
                                <li>".$val[3]."</li>
                                <li>".$val[4]."</li>
                            </ul>
                        </div>
                    </div>
                    <div class='content-item-section3'>
                        <div class='content-item-price'>
                            ".$row["model_price"]."
                        </div>
                        <div class='content-item-orderplace'>
                            <input type='button' value='Order Now'>
                            <input type='button' value='Add To Cart'>
                        </div>
                    </div>
                </div>
            </div>";
            }
        } else {
        echo "No Results Found";
        }
    } 
    if (isset($_REQUEST['categoryIdForBrands'])) {
        $categoryId=$_REQUEST['categoryIdForBrands'];
        $sqlretrive2 ="SELECT * FROM `brand` WHERE `category_id`=".$categoryId;
        $result2 = mysqli_query($conn, $sqlretrive2);
        if (mysqli_num_rows($result2) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result2)) {
                // $jsondata=json_decode($row["model_description"],true);
                // $val=array_values($jsondata);
                echo "<div class='left-panel-content-body-items' data-id='".$row["brand_id"]."'>
                <img class='brand-img' src='data:image/jpeg;base64,".base64_encode($row["brand_image"])."' alt='".$row["brand_name"]."'>
            </div>";
            }
        } else {
        echo "No Results Found";
        }
    }
    
    // SQL Closing
    mysqli_close($conn);
    

?>