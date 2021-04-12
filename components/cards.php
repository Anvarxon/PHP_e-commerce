<?php
    
    function component($img, $name, $product_description, $product_price, $ID, $category){
        $element = "<form action=\"../../pages/productList/productList.php\" method=\"post\">
                <img class=\"gourmet\" src=\"$img\" alt=\"\" />
                <div class=\"product-details\">
                  <h2>$name</h2>
                  <p class=\"info\">
                    $product_description
                  </p>
                  <p class=\"product_price\">$product_price</p>
                  <div class=\"button\">
                    <a name=\"add\" id=\"btn1\" class=\"details\" href=\"../../pages/productDetails/productDetails.php?id=$ID&category=$category\">More Details</a>
                  </div>
                </div>
                  <input type=\"hidden\" name=\"ID\" value=\"$ID\">
                </form>";
                echo $element;
    }
    

    //Get Data From Database;
    function gourmet(){

        $con = mysqli_connect('localhost','root','','ecommerce');
        $sql = "SELECT * FROM gourmet";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    function care(){

        $con = mysqli_connect('localhost','root','','ecommerce');
        $sql = "SELECT * FROM care";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    function beverages(){

        $con = mysqli_connect('localhost','root','','ecommerce');
        $sql = "SELECT * FROM beverages";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

?>