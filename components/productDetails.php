<?php
    

    function component($img, $name, $product_price, $product_description){
        $element = "<div class=\"products\">
        <img src=\"$img\" alt=\"\">
        <div class=\"details\">
            <h1>$name</h1>
            <p>$product_price</p>
            <p>$product_description</p>
            <button onclick=\"location.href='../../pages/cart/cart.php'\">Add to cart</button>
            <button onclick=\"location.href='../../pages/checkout/checkout.php'\">Buy Now</button>
        </div>
    </div>";
                echo $element;
    }