<header class="header">
        <nav>
          <a href="../../pages/productList/productList.php" class="logo">Grocery</a>
          <div class="middle">
            <a href="../../pages/productList/productList.php" class="shop">Home</a>
          </div>
          <div class="sign">
            <a href="../login/login.php" class="sign-out">Sign In</a>
            <a href="../cart/cart.php" class="cart">Cart</a>
          </div>
        </nav>
</header>

<style>
    .header > nav {
  height: 8rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #fff;
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
  text-transform: uppercase;
  border-bottom: 2px solid #eee;
}

.logo {
  text-decoration: none;
  font-size: 2rem;
  color: #777;
  margin-left: 2rem;
  transition: all 0.2s;
}
.logo:hover {
  transform: scale(1.1);
  color: rgb(0, 139, 35);
}
.middle {
  margin-left: 9rem;
}
.middle > * {
  text-decoration: none;
  font-size: 2rem;
  color: #777;
}
.middle > a:not(:first-child) {
  margin-left: 2rem;
}
.middle > a:not(:last-child) {
  padding-bottom: 0.3rem;
}
.middle > a:hover:not(:last-child) {
  border-bottom: 0.2rem solid rgb(0, 139, 35);
}
.shop {
  padding-bottom: 0.3rem;
  border-bottom: 0.2rem solid rgb(0, 139, 35);
}
.sign {
  margin-right: 2rem;
}
.sign > * {
  text-decoration: none;
  font-size: 2rem;
  color: #777;
  padding-bottom: 0.3rem;
}
.sign > a:not(:last-child) {
  margin-right: 2rem;
}
.sign > *:hover {
  border-bottom: 0.2rem solid rgb(0, 139, 35);
}
</style>