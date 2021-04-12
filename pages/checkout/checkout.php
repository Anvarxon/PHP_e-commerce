<?php
    include '../../UIComponents/header.php';
    session_start();

?>
    
    <link rel="stylesheet" href="../../pages/checkout/checkout.css">
    <title>Check out</title>

        <div class="container">
            <form action="">
                <h1>Enter your information</h1>
                <select class="address" name="" id="">
                    <option value="new">New address</option>
                    <option value="existing">Existing address</option>
                </select>
                <input type="text" placeholder="First name" required>
                <input type="text" placeholder="Last name" required>
                <input type="email" placeholder="Email">
                <select class="country" name="" id="">
                    <option value="country">Country</option>
                    <option value="existing">Uzbekistan</option>
                </select>
                <input type="text" placeholder="Street adress">
                <input type="text" placeholder="City">
                <input type="text" placeholder="ZIP code">
                <button onClick="location.href = '../../pages/success/success.php';" class="order" type="submit">Submit</button>
            </form>
        </div>
    <?php
    include '../../UIComponents/footer.php';
    ?>