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