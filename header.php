<!DOCTYPE html>
<html>
<head>
	<title>Onyx</title>
	<link rel="stylesheet" type="text/css" href="./css/home.css">
  <link rel="stylesheet" type="text/css" href="./css/adds.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container" style="width: 100% !important; display: flex; justify-content: space-between;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="width: 100%;">
    <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

      <a class="navbar-brand" href="login.php">Student Information System</a>
    </div> -->

    <!-- Collect the nav links, forms, and other content for toggling -->

<!-- Navbar start -->
        <div class="header">
		      <nav class="navbar">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
              <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="blog_one.html">BLOG</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>
            <div class="post-ad-btn">
              <button><a href='posting_ad.html' class="post-ad">POSTING AD</a></button>
            </div>
	    
	<!--  Navbar End -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="display: flex !important; align-items: center;">
              <?php 

                if(isset($_SESSION['username'], $_SESSION['password'])) {

              ?>

              <form class="navbar-form navbar-right" action="searchresults.php" method="GET">

                <div class="search-area">
                  <div class="form-group">

                    <div class="search-wrap">

                      <label for="searchbox" class="sr-only">Search:</label>
                      <input type="text" class="form-control" name="searchbox" id="searchbox" placeholder="Search by name" required autocomplete="off">
                      
                      <div class="search-results hide"></div>

                    </div>
                    

                  </div>
                  <input type="submit" name="search" id="search-btn" value="Search" class="btn btn-default">

                </div>
                
                <div class="welcome"><?php echo "Welcome, <a href='profile.php'>".$_SESSION['username']."</a>!";?></div>

                <a href="logout.php">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>

              </form>

              <?php 

                } else {
                  echo "<span class='not-logged'>Not logged in.</span>";
                }

              ?>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </nav>
    </div>
  </body>
</html>
