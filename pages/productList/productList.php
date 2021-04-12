    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="./productList.css" />
    <title>Grocery</title>
    <?php
    include '../../UIComponents/header.php';
    require_once '../../components/cards.php';

    // session_start();
    //   if(isset($_POST['add'])){
    //     print_r($_POST['ID']);
    //   }
    ?>
    <div class="page-wrap">

      <main class="main">
        <div class="product">
          <div class="product-list">
            <h1 class="go">Gourmet</h1>
            <div class="product-container">
              <?php
              $result = gourmet();
              while($row = mysqli_fetch_assoc($result)){
                component($row['img'],$row['name'],$row['product_description'],$row['product_price'],$row['ID'], "gourmet");
              }
              ?>
            </div>

          </div>
          <h1 class="cae">Care</h1>
            <div class="product-container2">
            <?php              
            $result = care();
            while($row = mysqli_fetch_assoc($result)){
              component($row['img'],$row['name'],$row['product_description'],$row['product_price'], $row['ID'], "care");
            }
            ?>
            
            </div>
            <h1 class="bev">Beverages</h1>
            <div class="product-container2">
            <?php
              $result = beverages();
              while($row = mysqli_fetch_assoc($result)){
                component($row['img'],$row['name'],$row['product_description'],$row['product_price'], $row['ID'], "beverages");
              }
              ?>
            </div>
          </div>
        </div>
      </main>
      <?php
      include '../../UIComponents/footer.php';
      include '../../application_top.php';
      ?>

 


