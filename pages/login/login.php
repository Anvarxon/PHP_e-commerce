<?php error_reporting(0);?>
<?php
    include '../../UIComponents/header.php';
    
    session_start();

?>
    <link rel="stylesheet" href="./login.css">
    <title>Login</title>

    <div id="success" class="success">Logged in successfully. ✔</div>
    <div id="fail" class="fail">Invalid information</div>
    <div class="container">
      <form method="post" action="login.php" class="login">
        <h1 class="text">Login</h1>

        <div class="login__user-name">
          <label for="user" class="label">Username</label>
          <input
            type="text"
            name="user"
            class="user-name"
            placeholder="Type your username"
            required
          />
        </div>
        <div class="login__password">
          <label for="user" class="label">Password</label>
          <input
            type="password"
            name="password"
            class="password"
            placeholder="Type your password"
            required
          />
        </div>
        <a href="#" class="login__forget">Forgot password</a>
        <input type="submit" class="login__login" name="submit" value="Login">
        
        <a href="../register/register.php" class="login__sign-up">Or Sign Up</a>
      </form>
    </div>
    <?php
    include '../../UIComponents/footer.php';
    ?>
    <?php
      
      include '../../application_top.php';
      if(isset($_POST["submit"]))
      {
        
        
        $username = mysqli_real_escape_string($con, $_POST['user']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        
        $query=mysqli_query($con,"SELECT * from users where name='$username' && password='$password'");
        
        $count=mysqli_num_rows($query);
        
        if($count == 1)
        {
          echo '<script>
          document.getElementById("success").style.display = "block";
          </script>';
          header("Refresh: 2, url='../../pages/productList/productList.php'");
        }
        else
        {
          echo '<script>
          document.getElementById("fail").style.display = "block";
          </script>';
          header("Refresh: 2, url='../../pages/login/login.php'");
      }
	
	
}
      
    ?>
   
