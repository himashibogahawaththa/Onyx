<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';


  if(isset($_POST['register'])) {

    $uname = clean($_POST['username']); 
    $pword = clean($_POST['password']); 
    $nic = clean($_POST['nic']); 
    $fname = clean($_POST['firstname']); 
    $lname = clean($_POST['lastname']); 
    $email = clean($_POST['email']);
    $contact = clean($_POST['contactno']);
    $address = clean($_POST['address']);
    $city = clean($_POST['city']);
    $province = clean($_POST['province']);
    $zip = clean($_POST['zipcode']);
    $country = clean($_POST['country']);

    $query = "SELECT username FROM profileinfo WHERE username = '$uname'";
    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) == 0) {

      $query = "SELECT nic FROM profileinfo WHERE nic = '$nic'";
      $result = mysqli_query($con,$query);

      if(mysqli_num_rows($result) == 0) {

        $query = "INSERT INTO profileinfo (username, password, nic, firstname, lastname, email, contactno, address, city, province, zipcode, country, date_joined)
        VALUES ('$uname', '$pword', '$nic', '$fname', '$lname', '$email', '$contact', '$address', '$city', ' $province', '$zip', '$country', NOW())";

        if(mysqli_query($con, $query)) {

          $_SESSION['prompt'] = "Account registered. You can now log in.";
          header("location:login.php");
          exit;

        } else {

          die("Error with the query");

        }

      } else {

        $_SESSION['errprompt'] = "Your NIC already exists.";

      }

    } else {

      $_SESSION['errprompt'] = "Username already exists.";

    }

  } 

?>

<!DOCTYPE html>
<html>
<head>

  <title>Register</title>
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
      <div class="left">
        <h1>Sign Up With Us To Discover New</h1>
        <p>Do You Already Have An 
            <br>Account, Then   <a href="login.php" class="green"><b>Login Here!</b></a></span></p>
        <img src="./assests/signUp-gem.svg" alt="image">
      </div>

      <div class="right">
        <section class="center-text">
          <div class="registration-form box-center clearfix">
          <?php 
              if(isset($_SESSION['errprompt'])) {
                showError();
              }
          ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
          <div class="row">
            <div class="account-info col-sm-6">
              <fieldset>
                <legend>Account Info</legend>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username (must be unique)" required>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
              </fieldset>
            </div>

            <div class="personal-info col-sm-6">
              <fieldset>
                <legend>Personal Info</legend>
                <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                </div>

                <div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                  <label for="nic">NIC</label>
                  <input type="text" class="form-control" name="nic" placeholder="NIC Number (must be unique)" required>
                </div>

                <div class="form-group">
                  <label for="contactno">Contact Number</label>
                  <input type="tel" class="form-control" name="contactno" placeholder="Contact Number" required>
                </div>

                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" name="address" placeholder="Address" required>
                </div>

                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" name="city" placeholder="City" required>
                </div>

                <div class="form-group">
                  <label for="province">Province</label>
                  <select class="form-control inputStyles" name="province">
                    <option value="Central Province">Central Province</option>
                    <option value="Eastern Province">Eastern Province</option>
                    <option value="Northern Province">Northern Province</option>
                    <option value="Southern Province">Southern Province</option>
                    <option value="Western Province">Western Province</option>
                    <option value="North Western Province">North Western Province</option>
                    <option value="North Central Province">North Central Province</option>
                    <option value="Uva Province">Uva Province</option>
                    <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="zipcode">Zip Code</label>
                  <input type="text" class="form-control" name="zipcode" placeholder="Zip Code" required>
                </div>

                <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" class="form-control" name="country" placeholder="Country" required>
                </div>
              </fieldset>
            </div>
          </div>
          <div class="row1">
            <a href="login.php" class="sign-btn">Go back</a>
            <button class="btn btn-primary sign-btn" type="submit" name="register" value="Register">Sign Up</button>
          </div>
        </form>
      </div>
    </section>
    
    <script src="assets/js/jquery-3.1.1.min.js"></script>
	  <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

<?php 

  unset($_SESSION['errprompt']);
  mysqli_close($con);

?>