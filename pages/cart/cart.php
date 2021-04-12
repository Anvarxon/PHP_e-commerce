<?php error_reporting(0);?>
<?php
    include '../../UIComponents/header.php';
    session_start();

?>
    <link rel="stylesheet" href="../../pages/cart/cart.css">
    <title>cart</title>

        <div class="container">
        <div class="cart">
            <div class="top">
                <p class="name">My cart</p>
            </div>
            <div class="bottom">
                <img class="img" src="../../resources/img/bbv2.jpeg" alt="">
                <div class="detail">
                    <p class="product_price">$22.99</p>
                    <p class="name">Simply Orange. Pulp Free Orange</p>
                    <select name="" id="" class="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <p class="save">🤍 save for later</p>
                </div>
            </div>
        </div>

        <div class="checkout">
            <div class="order">
                <p class="total">Total:</p>
                <div class="product_price">
                    <p class="sub-total">Sub-total:</p>
                    <p class="amount">$22.99</p>
                </div>
                
                <p class="delivery">Delivery</p>
                <select name="" id="" class="method">
                        <option value="1">Free delivery</option>
                        <option value="2">Fast Delivery</option>
                </select>
                <button onclick="location.href='../../pages/checkout/checkout.php'" class="check">Checkout</button>
            </div>
        </div>
    </div>
    <?php
    include '../../UIComponents/footer.php';
    session_start();
    ?>