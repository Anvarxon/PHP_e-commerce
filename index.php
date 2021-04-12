<script>
  switch (window.location.pathname) {
    case '/':
    case '/anvarkhon':
    case '/anvarkhon/':
    default:
      location.assign('/anvarkhon/pages/productList/productlist.php')
  }
</script>
<?php
switch ($_SERVER['SERVER_NAME']) {
  case '/anvarkhon/pages/login': {
      include('./pages/login');
      break;
    }
  case '/anvarkhon/pages/register': {
      include('./pages/register');
      break;
    }
  case '/anvarkhon/pages/productDetails': {
      include('./pages/productDetails');
      break;
    }
  case '/anvarkhon/pages/cart': {
      include('./pages/cart');
      break;
    }
  default: {
      include('./pages/productList');
      break;
    }
}
?>