<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_POST['update'])) {

    $fname = clean($_POST['firstname']);
    $lname = clean($_POST['lastname']);
    $nic = clean($_POST['nic']); 
    $fname = clean($_POST['firstname']); 
    $lname = clean($_POST['lastname']); 
    $email = clean($_POST['email']);
    $contactno = clean($_POST['contactno']);
    $address = clean($_POST['address']);
    $city = clean($_POST['city']);
    $province = clean($_POST['province']);
    $zipcode = clean($_POST['zipcode']);
    $country = clean($_POST['country']);

    $query = "UPDATE profileinfo SET firstname = '$fname', lastname = '$lname', nic = '$nic', email = '$email', contactno = '$contactno', address = '$address', city = '$city', province = '$province', zipcode = '$zipcode', country = '$country'
    WHERE id='".$_SESSION['userid']."'";

    if($result = mysqli_query($con, $query)) {

      $_SESSION['prompt'] = "Profile Updated";
      header("location:profile.php");
      exit;

    } else {

      die("Error with the query");

    }

  }

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <title>Edit Profile</title>
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
      <strong class="title">Edit Profile</strong>
    </div>
    <div class="edit-form box-left clearfix">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <div class="form-group">
          <label>User ID:</label>
          <?php 
            $query = "SELECT id FROM profileinfo WHERE id = '".$_SESSION['userid']."'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_row($result);
            echo "<p>".$row[0]."</p>";
          ?>
        </div>

        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" class="form-control inputStyles" name="firstname" placeholder="First Name" style="padding:20px;" required>
        </div>

        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" class="form-control inputStyles" name="lastname" placeholder="Last Name" style="padding:20px;" required>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control inputStyles" name="email" placeholder="Email" style="padding:20px;" required>
        </div>

        <div class="form-group">
          <label for="nic">NIC</label>
          <input type="text" class="form-control inputStyles" name="nic" placeholder="NIC Number (must be unique)" style="padding:20px;" required>
        </div>

        <div class="form-group">
          <label for="contactno">Contact Number</label>
          <input type="tel" class="form-control inputStyles" name="contactno" placeholder="Contact Number" style="padding:20px;" required>
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control inputStyles" name="address" placeholder="Address" style="padding:20px;" required>
        </div>

        <div class="form-group">
          <label for="city">City</label>
          <input type="text" class="form-control inputStyles" name="city" placeholder="City" style="padding:20px;" required>
        </div>

        <div class="form-group">
          <label for="province">Province</label>
          <select class="form-control inputStyles" name="province" style="padding:15px;">
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
          <input type="text" class="form-control inputStyles" name="zipcode" placeholder="Zip Code" style="padding:20px;" required>
        </div>

        <div class="form-group">
          <label for="country">Country</label>
          <input type="text" class="form-control inputStyles" name="country" placeholder="Country" style="padding:20px;" required>
       </div>
        
        <div class="form-footer">
          <a href="profile.php">Go back</a>
          <input class="btn btn-primary sign-btn" type="submit" name="update" value="Update Profile">
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

  mysqli_close($con);

?>