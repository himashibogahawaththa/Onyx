<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_POST['update'])) {

    $oldpass = clean($_POST['oldpass']);
    $newpass = clean($_POST['newpass']);
    $confirmpass = clean($_POST['confirmpass']);

    $query = "SELECT password FROM profileinfo WHERE password = '$oldpass'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0) {

      if($newpass == $confirmpass) {

        $query = "UPDATE profileinfo SET password = '$newpass' WHERE id='".$_SESSION['userid']."'";

        if($result = mysqli_query($con, $query)) {

          $_SESSION['prompt'] = "Password updated.";
          $_SESSION['password'] = $newpass;
          header("location:profile.php");
          exit;

        } else {

          die("Error with the query");

        }

      } else {

        $_SESSION['errprompt'] = "The new passwords you entered doesn't match.";;

      }

    } else {

      $_SESSION['errprompt'] = "You've entered a wrong old password.";

    }

  }

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <title>Change Password</title>
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

  <section>
    
    <div class="container">
      <strong class="title">Change Password</strong>
    </div>
    

    <div class="edit-form box-left clearfix">

      <?php 
        if(isset($_SESSION['errprompt'])) {
          showError();
        }
      ?>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">


        <div class="form-group">
          <label for="oldpass">Old Password</label>
          <input type="password" class="form-control inputStyles " name="oldpass" placeholder="Old Password" style="padding:20px;" required>
        </div>


        <div class="form-group">
          <label for="newpass">New Password</label>
          <input type="password" class="form-control inputStyles " name="newpass" placeholder="New Password" style="padding:20px;" required>
        </div>

        <div class="form-group">
          <label for="confirmpass">Confirm Password</label>
          <input type="password" class="form-control inputStyles " name="confirmpass" placeholder="Confirm Password" style="padding:20px;" required>
        </div>

        <div class="form-footer">
          <a href="profile.php">Go back</a>
          <input class="btn btn-primary sign-btn" type="submit" name="update" value="Update Password">
        </div>
        

      </form>
    </div>

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php

  } else {
    header("location:profile.php");
  }

  unset($_SESSION['errprompt']);
  mysqli_close($con);

?>