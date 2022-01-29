<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_POST['login'])) {

    $uname = clean($_POST['username']);
    $pword = clean($_POST['password']);

    $query = "SELECT * FROM profileinfo WHERE username = '$uname' AND password = '$pword'";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_assoc($result);

      $_SESSION['userid'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];

      header("location:profile.php");
      exit;

    } else {

      $_SESSION['errprompt'] = "Wrong username or password.";

    }

  }

  if(!isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

	<title>Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assests/css/bootstrap.min.css" rel="stylesheet">
  <link href="assests/css/main.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./css/signup.css">
	<link rel="stylesheet" type="text/css" href="./css/home.css">
    
</head>
<body>

  <?php include 'header.php'; ?>
     
  <div id="signUp">
    <div class="left" style="margin-left:10%;">
      <h1>Sign In to Explore Core</h1>
      <p>If You Don't Have An Account<br>You Can <a href="register.php" class="green"><b>Register Here!</b></a></span></p>
      <img src="./assests/signUp-gem.svg" alt="image">
    </div>

    <div class="right" style="margin: 5% 0">
      <section class="center-text">
        <div class="login-form box-center">
          <?php 

            if(isset($_SESSION['prompt'])) {
              showPrompt();
            }

            if(isset($_SESSION['errprompt'])) {
              showError();
            }

          ?>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            
            <div class="form-group">
              <label for="username" class="sr-only">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username" style="margin:0;" required autofocus>
            </div>

            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" style="margin:0;" required>
            </div>
            
            <a href="register.php">Need an account?</a>
            <button class="btn btn-primary sign-btn" type="submit" name="login" value="Log In" style="margin:10% auto;">Sign In </button>

          </form>
        </div>
      </section>
    </div>
  </div>

  <script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>

<?php

  } else {
    header("location:profile.php");
    exit;
  }

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);

  mysqli_close($con);

?>