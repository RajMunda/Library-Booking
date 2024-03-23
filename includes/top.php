<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./includes/asset/icon/icon.jpg" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .nav-icon{
            width: 4vw;
        }
    </style>

    <title><?php echo$title; ?></title>
</head>
<body>
    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        
        <img src="./includes/asset/images/logo.jpg" class="img fluid nav-icon m-2"  alt="">
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

    