<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Onyx</title>
	<link rel="stylesheet" type="text/css" href="./css/home.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
	<link rel="stylesheet" href="template7.css">

	<link href="assests/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="assests/css/main.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/signup.css">
	<link rel="stylesheet" type="text/css" href="./css/home.css">
</head>
<body>
	<!-- Navbar start -->

	<?php include 'header.php'; ?>

	<!--  Navbar End -->

	

	<!-- Home start -->
	<div class="cover-image">
		<h1>Find What You Want With <span class="green">ONYX</span></h1>
		<p>Online Platfrom where you can buy what you want an sell what you have</p>
		<div class="search">
			<div class="input-group">
			  	<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="What are you looking for?">
			  	<div class="input-group-append">
			    	<button class="btn btn-outline-secondary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Catagory &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <i class="fa fa-bars" aria-hidden="true"></i> </button>
			    	<div class="dropdown-menu">
				      <a class="dropdown-item" href="#">Action</a>
				      <a class="dropdown-item" href="#">Another action</a>
				      <a class="dropdown-item" href="#">Something else here</a>
			      	<div role="separator" class="dropdown-divider"></div>
			      	<a class="dropdown-item" href="#">Separated link</a>
			    </div>
			  </div>
			  <button class="btn btn-primary rounded-right">
			  	<img src="./assests/search-icon.svg">
			  Search Now</button>
			</div>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		</div>
		<div class="cards">
			 <a href="#gemstone" class="card">
			 	<img src="./assests/gem.svg">
			 	<p>Gemstone</p>
			 </a>
			 <a href="#product" class="card">
			 	<img src="./assests/product.svg">
			 	<p>Products</p>
			 </a>
			 <a href="add.html" class="card">
			 	<img src="./assests/ring.svg">
			 	<p>Shop</p>
			 </a>
			 <a href="event.html" class="card">
			 	<img src="./assests/star.svg">
			 	<p>Events</p>
			 </a>
		</div>
		<h2 class="title" id="product">Top Selling Jewelleries</h2>
		<div class="shopping-cards">
			<div class="shopping-card">
				<div class="shopping-card-img">
					<img src="./assests/jewellery-1.svg">
				</div>
				<div class="description">
					<p ><b>Jewellery</b> Silver with diamond sterling has all kind of <b>jewellery</b> free </p>
					<p style="line-height: 20px"><span class="price">$0.61 - $1.02</span><span class="pair"> /pair</span><br><span class="middle-text">50 Pieces (MOQ)</span></p>
					<div class="ratings">
						<p style="color: #000000; margin-right: 2%"><b>4.9</b></p>
						<img src="./assests/rate-star.svg">
						<p class="small">(164) “fast dispatch”</p>
					</div>
				</div>
				<div class="buttons">
					<button class="buy-btn" type="button"><a href='payment.html'>Buy Now</a></button>
					<button class="call-btn" type="button"><a href='Chat.html' class='chat'>Chat</a></button>
				</div>
			</div>
			<div class="shopping-card">
				<div class="shopping-card-img">
					<img src="./assests/jewellery-1.svg">
				</div>
				<div class="description">
					<p ><b>Jewellery</b> Silver with diamond sterling has all kind of <b>jewellery</b> free </p>
					<p style="line-height: 20px"><span class="price">$0.61 - $1.02</span><span class="pair"> /pair</span><br><span class="middle-text">50 Pieces (MOQ)</span></p>
					<div class="ratings">
						<p style="color: #000000; margin-right: 2%"><b>4.9</b></p>
						<img src="./assests/rate-star.svg">
						<p class="small">(164) “fast dispatch”</p>
					</div>
				</div>
				<div class="buttons">
					<button class="buy-btn" type="button"><a href='payment.html'>Buy Now</a></button>
					<button class="call-btn" type="button"><a href='Chat.html' class='chat'>Chat</a></button>
				</div>
			</div>
			<div class="shopping-card">
				<div class="shopping-card-img">
					<img src="./assests/jewellery-1.svg">
				</div>
				<div class="description">
					<p ><b>Jewellery</b> Silver with diamond sterling has all kind of <b>jewellery</b> free </p>
					<p style="line-height: 20px"><span class="price">$0.61 - $1.02</span><span class="pair"> /pair</span><br><span class="middle-text">50 Pieces (MOQ)</span></p>
					<div class="ratings">
						<p style="color: #000000; margin-right: 2%"><b>4.9</b></p>
						<img src="./assests/rate-star.svg">
						<p class="small">(164) “fast dispatch”</p>
					</div>
				</div>
				<div class="buttons">
					<button class="buy-btn" type="button"><a href='payment.html'>Buy Now</a></button>
					<button class="call-btn" type="button"><a href='Chat.html' class='chat'>Chat</a></button>
				</div>
			</div>
			<div class="shopping-card">
				<div class="shopping-card-img">
					<img src="./assests/jewellery-1.svg">
				</div>
				<div class="description">
					<p ><b>Jewellery</b> Silver with diamond sterling has all kind of <b>jewellery</b> free </p>
					<p style="line-height: 20px"><span class="price">$0.61 - $1.02</span><span class="pair"> /pair</span><br><span class="middle-text">50 Pieces (MOQ)</span></p>
					<div class="ratings">
						<p style="color: #000000; margin-right: 2%"><b>4.9</b></p>
						<img src="./assests/rate-star.svg">
						<p class="small">(164) “fast dispatch”</p>
					</div>
				</div>
				<div class="buttons">
					<button class="buy-btn" type="button"><a href='payment.html'>Buy Now</a></button>
					<button class="call-btn" type="button"><a href='Chat.html' class='chat'>Chat</a></button>
				</div>
			</div>
			<div class="shopping-card">
				<div class="shopping-card-img">
					<img src="./assests/jewellery-1.svg">
				</div>
				<div class="description">
					<p ><b>Jewellery</b> Silver with diamond sterling has all kind of <b>jewellery</b> free </p>
					<p style="line-height: 20px"><span class="price">$0.61 - $1.02</span><span class="pair"> /pair</span><br><span class="middle-text">50 Pieces (MOQ)</span></p>
					<div class="ratings">
						<p style="color: #000000; margin-right: 2%"><b>4.9</b></p>
						<img src="./assests/rate-star.svg">
						<p class="small">(164) “fast dispatch”</p>
					</div>
				</div>
				<div class="buttons">
					<button class="buy-btn" type="button"><a href='payment.html'>Buy Now</a></button>
					<button class="call-btn" type="button"><a href='Chat.html' class='chat'>Chat</a></button>
				</div>
			</div>
			<div class="shopping-card">
				<div class="shopping-card-img">
					<img src="./assests/jewellery-1.svg">
				</div>
				<div class="description">
					<p ><b>Jewellery</b> Silver with diamond sterling has all kind of <b>jewellery</b> free </p>
					<p style="line-height: 20px"><span class="price">$0.61 - $1.02</span><span class="pair"> /pair</span><br><span class="middle-text">50 Pieces (MOQ)</span></p>
					<div class="ratings">
						<p style="color: #000000; margin-right: 2%"><b>4.9</b></p>
						<img src="./assests/rate-star.svg">
						<p class="small">(164) “fast dispatch”</p>
					</div>
				</div>
				<div class="buttons">
					<button class="buy-btn" type="button"><a href='payment.html'>Buy Now</a></button>
					<button class="call-btn" type="button"><a href='Chat.html' class='chat'>Chat</a></button>
				</div>
			</div>
		</div>

		<h2 class="title" id="gemstone">Popular Gemstones</h2>
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				<div id="carousel-slider" class="owl-carousel">
					
					<div class="carousel">
						<div class="pic">
						  <img src="assests/carousel-img1.svg">
						</div>
						<div class="row">
							<h3 class="title">Sapphire Gemstones</h3>
							<div class="rates">
								<p><img src="assests/rating-stars.svg">&nbsp;&nbsp;&nbsp;&nbsp;<sub>4.9 reviews</sub></p>
							</div>
							<div class="row1">
								<button class="buy-btn" type="button"><a href='payment.html' class="pay-btn">Buy</a></button>
								<p class="price-2">56$</p>
							</div>
						</div>
					  </div>
		
				  <div class="carousel">
					<div class="pic">
					  <img src="assests/carousel-img2.svg">
					</div>
					<div class="row">
						<h3 class="title">Sapphire Gemstones</h3>
						<div class="rates">
							<p><img src="assests/rating-stars.svg">&nbsp;&nbsp;&nbsp;&nbsp;<sub>4.9 reviews</sub></p>
						</div>
						<div class="row1">
							<button class="buy-btn" type="button"><a href='payment.html' class="pay-btn">Buy</a></button>
							<p class="price-2">56$</p>
						</div>
					</div>
				  </div>
		
				  <div class="carousel">
					<div class="pic">
					  <img src="assests/carousel-img1.svg">
					</div>
					<div class="row">
						<h3 class="title">Sapphire Gemstones</h3>
						<div class="rates">
							<p><img src="assests/rating-stars.svg">&nbsp;&nbsp;&nbsp;&nbsp;<sub>4.9 reviews</sub></p>
						</div>
						<div class="row1">
							<button class="buy-btn" type="button"><a href='payment.html' class="pay-btn">Buy</a></button>
							<p class="price-2">56$</p>
						</div>
					</div>
				  </div>

				  <div class="carousel">
					<div class="pic">
					  <img src="assests/carousel-img2.svg">
					</div>
					<div class="row">
						<h3 class="title">Sapphire Gemstones</h3>
						<div class="rates">
							<p><img src="assests/rating-stars.svg">&nbsp;&nbsp;&nbsp;&nbsp;<sub>4.9 reviews</sub></p>
						</div>
						<div class="row1">
							<button class="buy-btn" type="button"><a href='payment.html' class="pay-btn">Buy</a></button>
							<p class="price-2">56$</p>
						</div>
					</div>
				  </div>

				  <div class="carousel">
					<div class="pic">
					  <img src="assests/carousel-img1.svg">
					</div>
					<div class="row">
						<h3 class="title">Sapphire Gemstones</h3>
						<div class="rates">
							<p><img src="assests/rating-stars.svg">&nbsp;&nbsp;&nbsp;&nbsp;<sub>4.9 reviews</sub></p>
						</div>
						<div class="row1">
							<button class="buy-btn" type="button"><a href='payment.html' class="pay-btn">Buy</a></button>
							<p class="price-2">56$</p>
						</div>
					</div>
				  </div>

				  <div class="carousel">
					<div class="pic">
					  <img src="assests/carousel-img2.svg">
					</div>
					<div class="row">
						<h3 class="title">Sapphire Gemstones</h3>
						<div class="rates">
							<p><img src="assests/rating-stars.svg">&nbsp;&nbsp;&nbsp;&nbsp;<sub>4.9 reviews</sub></p>
						</div>
						<div class="row1">
							<button class="buy-btn" type="button"><a href='payment.html' class="pay-btn">Buy</a></button>
							<p class="price-2">56$</p>
						</div>
					</div>
				  </div>

				  <div class="carousel">
					<div class="pic">
					  <img src="assests/carousel-img1.svg">
					</div>
					<div class="row">
						<h3 class="title">Sapphire Gemstones</h3>
						<div class="rates">
							<p><img src="assests/rating-stars.svg">&nbsp;&nbsp;&nbsp;&nbsp;<sub>4.9 reviews</sub></p>
						</div>
						<div class="row1">
							<button class="buy-btn" type="button"><a href='payment.html' class="pay-btn">Buy</a></button>
							<p class="price-2">56$</p>
						</div>
					</div>
				  </div>

				  <div class="carousel">
					<div class="pic">
					  <img src="assests/carousel-img2.svg">
					</div>
					<div class="row">
						<h3 class="title">Sapphire Gemstones</h3>
						<div class="rates">
							<p><img src="assests/rating-stars.svg">&nbsp;&nbsp;&nbsp;&nbsp;<sub>4.9 reviews</sub></p>
						</div>
						<div class="row1">
							<button class="buy-btn" type="button"><a href='payment.html' class="pay-btn">Buy</a></button>
							<p class="price-2">56$</p>
						</div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</div>

		<!-- Full-width images with number and caption text -->
<div class="carousel-container">
	<div class="mySlides animate">
	  <img src="./assests/bottom-cover.svg" alt="slide" />
	  <div class="number">1 / 5</div>
	</div>
  
	<div class="mySlides animate">
	  <img src="./assests/bottom-cover1.jpg" alt="slide" />
	  <div class="number">2 / 5</div>
	</div>
  
	<div class="mySlides animate">
	  <img src="./assests/bottom-cover2.jpg" alt="slide" />
	  <div class="number">3 / 5</div>
	</div>
  
	<div class="mySlides animate">
	  <img src="./assests/bottom-cover3.jpg" alt="slide" />
	  <div class="number">4 / 5</div>
	</div>
  
	<div class="mySlides animate">
	  <img src="./assests/bottom-cover.svg" alt="slide" />
	  <div class="number">5 / 5</div>
	</div>
  
	<!-- Next and previous buttons -->
	<a class="prev" onclick="prevSlide()">&#10094;</a>
	<a class="next" onclick="nextSlide()">&#10095;</a>
  
	<!-- The dots/circles -->
	<div class="dots-container">
	  <span class="dots" onclick="currentSlide(1)"></span>
	  <span class="dots" onclick="currentSlide(2)"></span>
	  <span class="dots" onclick="currentSlide(3)"></span>
	  <span class="dots" onclick="currentSlide(4)"></span>
	  <span class="dots" onclick="currentSlide(5)"></span>
	</div>
  </div>

	

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#carousel-slider").owlCarousel({
        items: 2,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [990, 2],
        itemsTablet: [768, 1],
        pagination: true,
        navigation: false,
        navigationText: ["", ""],
        slideSpeed: 1000,
        autoPlay: true
      });
    });
  </script>
	<script type="text/javascript" src="./js/home.js"></script>
</body>
</html>

<?php


  } 
  else 
  {
    header("location:home.html");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>