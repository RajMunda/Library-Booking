<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./asset/icon/icon.jpg" type="image/x-icon">
  <title>Library Seat Booking System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css">
  <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .myImg{
        height: 30vh;
    }
    .nav-icon{
        width: 4vw;
    }
    .carousel{
        height: 90vh;
    }
    .cimg{
        height: 90vh;
    }
  </style>
    
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      
      <img src="images/logo.jpg" class="img fluid nav-icon m-2"  alt="">
            <a class="navbar-brand" href="#">Library Seat<br> Booking System </a>    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
            <li class="nav-item">
                        <a class="nav-link" href="service.php">Our service</a>
                    </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>
        </ul>
        <?php if(!isset($_SESSION['user'])){ ?>

        <form class="d-flex">
            <a class="nav-link btn btn-outline-success text-light mx-2" aria-current="page"  href="Registration.php">Register</a>
            </form>
            <form>
            <a class="nav-link btn btn-outline-info text-light mx-2" aria-current="page" href="login.php">Login</a>
            </form>
            <?php } else { ?>
            <form>
            <a class="nav-link btn btn-outline-danger text-light mx-2" aria-current="page" href="log_out.php">Log Out</a>
            </form>
            <?php } ?>
      </div>
    </div>
  </nav>

  <!--Carousel-->
  <div id="carouselExampleIndicators" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.jpg" class="d-block w-100 cimg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" class="d-block w-100 cimg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/3.jpg" class="d-block w-100 cimg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/4.jpg" class="d-block w-100 cimg" alt="...">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Carousel End-->

    <!--Main-->
    <div class="container  my-4">
        <div class="card-group">
            <div class="card m-2">
                <img src="images/maulana.jpg" class="card-img-top img-thumbnail myImg" alt="...">
                <div class="card-body">
                    <a href='./maulanaAzadLibrary.php'><button type="button" class="btn btn-primary"><b>Maulana Azad Library</b>
                    <h5 class="card-title">Address:</h5>
                    <p class="card-text"> Anjuman Plaza, Top Floor of, Mahatma Gandhi Main Rd, Ranchi, Jharkhand 834001</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </button></a>
                </div>
            </div>
            <div class="card m-2">
                <img src="images/urdu.jpg" class="card-img-top img-thumbnail myImg" alt="...">
                <div class="card-body">
                    <button type="button" class="btn btn-success"><b>Urdu library</b>
                    <h5 class="card-title">Address:</h5>
                    <p class="card-text"> 987G+V4J, Mahatma Gandhi Main Rd, New Daily Market, Lower Bazaar, Ranchi, Jharkhand 834001
                    </p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </button>
                </div>
            </div>
            <div class="card m-2" >
                <img src="images/ranchi.jpg" class="card-img-top img-thumbnail myImg" alt="...">
                <div class="card-body"><button type="button" class="btn btn-danger"><b>Ranchi Library</b>
                    <h5 class="card-title">Address:</h5>
                    <p class="card-text">Near Firayalal Sharda Babu Lane, &, Mahatma Gandhi Main Rd, Ranchi, Jharkhand 834001</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </button>
                </div>
            </div>
        </div>

    </div>
    <!--Main end-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
