<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <title>Room booking</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Room booking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
               <h2 class="text-center text-success">Welcome <?php echo $_SESSION['username'];?></h2>
              </li>
            <li class="nav-item active">
              <a class="nav-link" href="db.php">Home <span class="sr-only">(current)</span></a>
            </li>
              <li class="nav-item active">
                 <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          <form action="https://www.google.com/search" method="GET" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
     <div class="jumbotron">
        <h1>Room booking</h1>
        <p>Over 900,000 Hotels Worldwide.Book Now,Pay When You stay.Find The Best Deals From All The Major Hotel Sites.Compare Price Online.Book a Hotel at The Best Rates With Momondo.Trusted And Free Price Comparison.Trusted And Free.Last Minute Deals.Free Cancellation.Choose Form a Wide Range of Properties Which Room Booking.com Offers! Signup For Deals.Become An Affiliate.List Your Property.Register Online.</p>
     </div>
     <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About us</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
               <img src="about1.jpg" class="img-fluid aboutimg">
              </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="text-center">Welcome to Our About Section</h2>
                    <p class="py-3">
                    Room Booking is hotel search allows users to compare hotel prices in just a few clicks from more than 300 booking sites for more than 5.0 million hotels and other types of accommodation in over 190 countries. We help millions of travelers each year compare deals for hotels and accommodations. Get information for weekend trips to cities like Mumbai or Bengaluru and you can find the right hotel on Roombooking.com quickly and easily. Delhi and its surrounding area are great for trips that are a week or longer with the numerous hotels available.With this website you can easily find your ideal hotel and compare prices from different websites. Simply enter where you want to go and your desired travel dates, and let our hotel search engine compare accommodation prices for you. To refine your search results, simply filter by price, distance (e.g. from the beach), star category, facilities and more. From budget hostels to luxury suites, our website makes it easy to book online. You can search from a large variety of rooms and locations across India, like Shimla and Jaipur to popular cities and holiday destinations abroad! 
                    </p>
                </div>
            </div>
        </div>
      </section>
      <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Gallery</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <img src="gl1.jpg" class="img-fluid pb-3">
                <div class="carousel-caption">
                  <h4>Hotel Tara</h4>
                  <p>Room in Shimla</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="gl7.jpg" class="img-fluid pb-3">
                <div class="carousel-caption">
                  <h4>Monalisa Hotel</h4>
                  <p>Room in Varanasi</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="gl3.jpg" class="img-fluid pb-3">
                <div class="carousel-caption">
                  <h4>Raahi Hotel</h4>
                  <p>room in Udaipur</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="gl2.jpg" class="img-fluid pb-3">
                <div class="carousel-caption">
                  <h4>Fab Hotel</h4>
                  <p>room in Pune</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="gl5.jpg" class="img-fluid pb-3">
                <div class="carousel-caption">
                  <h4>Plaza Hotel</h4>
                  <p>Room in Mumbai</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <img src="gl6.jpg" class="img-fluid pb-3">
                <div class="carousel-caption">
                  <h4>Taj Hotel</h4>
                  <p>Room in Manali</p>
                </div>
              </div>
          </div>
        </div>

      </section>





      <footer>
        <p class="p-3 bg-dark text-white text-center">Copyright ??1996-2022 Roombooking.com.All rights reserved.</p>
       </footer>

</body>
</html>