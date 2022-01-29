<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
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
      <strong class="title">Profile Information</strong>
    </div>
    <div class="profile-box box-left">
      <?php

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }


        $query = "SELECT * FROM profileinfo WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";

        ;

        if($result = mysqli_query($con, $query)) {

          $row = mysqli_fetch_assoc($result);

          echo "<div class='info'><div class='part1'><span class='iconify' data-icon='bx:bx-id-card' style='color: #2fc194;' data-width='50' data-height='50'></span><strong>NIC:</strong></div><div class='part2'><span>".$row['nic']."</span></div></div><br>";
          echo "<div class='info'><div class='part1'><span class='iconify' data-icon='icon-park-outline:edit-name' style='color: #2fc194;' data-width='50' data-height='50'></span><strong>Name:</strong></div><div class='part2'> <span>".$row['firstname']." ".$row['lastname']."</span></div></div><br>";
          echo "<div class='info'><div class='part1'><span class='iconify' data-icon='bx:bx-mail-send' style='color: #2fc194;' data-width='50' data-height='50'></span><strong>Email:</strong></div><div class='part2'> <span>".$row['email']."</span></div></div><br>";
          echo "<div class='info'><div class='part1'><span class='iconify' data-icon='akar-icons:phone' style='color: #2fc194;' data-width='50' data-height='50'></span><strong>Contact Number:</strong></div><div class='part2'> <span>".$row['contactno']."</span></div></div><br>";
          echo "<div class='info'><div class='part1'><span class='iconify' data-icon='ep:location' style='color: #2fc194;' data-width='50' data-height='50'></span><strong>Address:</strong></div><div class='part2'> <span>".$row['address']."</span></div></div><br>";
          echo "<div class='info'><div class='part1'><span class='iconify' data-icon='ep:location' style='color: #2fc194;' data-width='50' data-height='50'></span><strong>City:</strong></div><div class='part2'> <span>".$row['city']."</span></div></div><br>";
          echo "<div class='info'><div class='part1'><span class='iconify' data-icon='ep:location' style='color: #2fc194;' data-width='50' data-height='50'></span><strong>Province:</strong></div><div class='part2'> <span>".$row['province']."</span></div></div><br>";
          echo "<div class='info'><div class='part1'><span class='iconify' data-icon='ph:file-zip-bold' style='color: #2fc194;' data-width='50' data-height='50'></span><strong>Zip Code:</strong></div><div class='part2'> <span>".$row['zipcode']."</span></div></div><br>";
          echo "<div class='info'><div class='part1'><span class='iconify' data-icon='fluent:globe-location-20-filled' style='color: #2fc194;' data-width='50' data-height='50'></span><strong>Country:</strong></div><div class='part2'> <span>".$row['country']."</span></div></div><br>";


          $query_date = "SELECT DATE_FORMAT(date_joined, '%m/%d/%Y') FROM profileinfo WHERE id = '".$_SESSION['userid']."'";
          $result = mysqli_query($con, $query_date);

          $row = mysqli_fetch_row($result);

          echo  "<div class='info'><div class='part1'><span class='iconify' data-icon='system-uicons:calendar-date' style='color: #2fc194;' data-width='50' data-height='50'></span><strong>Date Joined:</strong></div><div class='part2'> <span>".$row[0]."</span></div></div><br>";

        } else {

          die("Error with the query in the database");

        }

      ?>
      
      <div class="options">
        <a class="btn btn-primary sign-btn" href="editprofile.php">Edit Profile</a>
        <a class="btn btn-success sign-btn" href="changepassword.php">Change Password</a>
      </div>

      
    </div>

  </section>


	<script src="assests/js/jquery-3.1.1.min.js"></script>
  <script src="assests/js/bootstrap.min.js"></script>
	<script src="assests/js/main.js"></script>
  <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
  
</body>
</html>

<?php


  } else {
    header("location:login.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>