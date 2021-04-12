<?php error_reporting(0);?>
<?php
    include '../../UIComponents/header.php';
    include '../../application_top.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $user = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email_exists = "select * from users where email = '$email' ";
    $is_exists = mysqli_query($con, $email_exists);
      if($is_exists &&  mysqli_num_rows($is_exists) > 0){
        echo "<script>
        alert('Email already exists. Try to log in.');
        window.location.href='../../pages/register/register.php';
        </script>";
        die;
      }
    
    $query = "insert into users (name, email, password) values ('$user', '$email', '$password')";
    mysqli_query($con, $query);
    echo "<script>
      alert('Registered Successfully. You can log in now.')
      window.location.href='../../pages/login/login.php';
    </script>";
  }
    
  
?>
    <link rel="stylesheet" href="../../pages/register/register.css">
    <title>Register</title>

    <div id="success" class="success">User Registered.</div>
    <div id="fail" class="fail">Please enter correct information</div>
    <div class="container">
      <form method="post" action="" class="login">
        <h1 class="text">Register</h1>

        <div class="login__user-name">
          <label for="user" class="label">Username</label>
          <input
            type="text"
            name="name"
            class="user-name"
            placeholder="Type your username"
            required
          />
          <label for="email" class="label">Email</label>
          <input
            type="email"
            name="email"
            class="user-name"
            placeholder="Type your email"
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
        <a href="#" class="login__forget">Forgot password?</a>
        <button type="submit" class="login__login" name="submit">Register</button>
        <a href="../../pages/login/login.php" class="login__sign-up">Log In Back</a>
      </form>
    </div>

    <?php
    include '../../UIComponents/footer.php';

    ?>
    
