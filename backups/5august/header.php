<?php
// Get the current page's title
$pageTitle = "Saagar Chemicals"; // Set a default title

// Define titles for each page using a switch statement
switch ($_SERVER["SCRIPT_NAME"]) {
   
    case "/about-us.php":
        $pageTitle ="About Us";
        break;
    case "/services.php":
        $pageTitle ="Services";
        break;
   case "/industries.php":
        $pageTitle ="Industries";
        break;
    case "/contact-us.php":
        $pageTitle ="Contact Us";
        break;
    case "/career.php":
        $pageTitle ="Career";
        break;
    case "/hiring-contact-form-2.php":
        $pageTitle ="Hiring";
        break;
    case "/recruitment.php":
        $pageTitle ="Recruitment";
        break;
    case "/sourcing.php":
        $pageTitle ="Sourcing";
        break;
    case "/bench-sales.php":
        $pageTitle ="Bench Sales";
        break;
    case "/business-development.php":
        $pageTitle ="Business Development";
        break;
    case "/data-research.php":
        $pageTitle ="Data Research";
        break;
    case "/training-&-development.php":
        $pageTitle ="Training & Development";
        break;
    case "/our-process.php":
        $pageTitle ="Our Process";
        break;
    case "/our-team.php":
        $pageTitle ="Our Team";
        break;
    case "/insights.php":
        $pageTitle ="Insight";
        break;
    // Add more cases for other pages as needed
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" crossorigin="anonymous" />-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Saagar Speciality</title>
</head>
<body style="background-color: #333;">
    <header id="mainHeader" class="header">
        <div class="container">
            <div class="d-flex flex-column">
                <div class="top_bar col-12 pt-md-3">                
                    <ul class="mb-2 list-group list-unstyled list-group-horizontal mb-md-0 float-end">
                        <!-- <li class="list-group-item">
                            <a class="nav-link" href="#">ENG</a>
                        </li> -->
                        <li class="list-group-item">
                            <a class="nav-link" href="#"><i class="fa fa-linkedin-in"></i></a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="#"><i class="fa fa-x-twitter"></i></a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="menu">
                    <nav class="navbar navbar-expand-lg navbar-dark pt-md-0">
                        <a class="navbar-brand" href="index.php">
                            <img class="header_logo" src="images/header_logo.png" alt="Sagar Logo"> 
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end pb-md-3" id="navbarNav">
                            <ul class="navbar-nav gap-md-3 mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="product-categories.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about-us.php">Company Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="what-we-do.php">Partner with us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="career.php">Career</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="enquire.php">Client</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="nav-link" href="#"><i class="fa fa-search text-light"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="sidebar_instant_links">
            <div class="sidebar_social_media">
                <ul class="list-group-item list-unstyled mb-0 mt-1">
                    <li class="list-item">
                        <a href="" class="sidebar_social_media_link">
                            <i class="fa fa-linkedin-in"></i>                       
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="" class="sidebar_social_media_link">
                            <i class="fa fa-instagram"></i>                       
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="" class="sidebar_social_media_link">
                            <i class="fa fa-x-twitter"></i>                       
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="" class="sidebar_social_media_link">
                            <i class="fa fa-facebook"></i>                       
                        </a>
                    </li>
                </ul>
            </div>
            <div class="newsletter">
                <div class="d-flex position-relative rotate-90">
                    <label class="file-upload-label" for="fileUpload">NewsLetter<i class="fa fa-file-arrow-down"> </i></label>
                    <input type="file" id="fileUpload" name="file" class="file-upload-input">
                </div>
            </div>
        </div>
    </header>
    