<?php
    include '../../UIComponents/header.php';
    include '../../application_top.php';
    include '../../components/productDetails.php';
    $uri = parse_url($_SERVER['REQUEST_URI']);
    parse_str($uri['query'],$params);
    $category =$params['category'];
    $id = $params['id'];

    $query = "select * from $category where ID =$id";
    $result = mysqli_query($con, $query);
?>
    <link rel="stylesheet" href="../../pages/productDetails/productDetails.css">
    <title>Buy groceries online</title>

        <div class="container">
            <?php
            if(mysqli_num_rows($result) >=1 ){
                while($row = mysqli_fetch_assoc($result)){
                    component($row['img'],$row['name'],$row['product_price'],$row['product_description']);
                  }
                }
            ?>
        </div>
    <?php
    include '../../UIComponents/footer.php';
    ?>