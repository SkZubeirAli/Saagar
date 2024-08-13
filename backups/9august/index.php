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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Saagar Speciality</title>
</head>
<body style="background-color: #333;">
    <header id="mainHeader" class="header transparent">
        <div class="container">
            <div class="d-flex flex-column">
                <div class="top_bar col-12 py-md-3">                
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
    
    
    <main class="home-page">

        <section id="slider_banner_section">
            <div class="container-fluid px-0">
                <div class="owl-theme owl-carousel home_page_banner_slides" id="home_page_banner_slider">
                    <div class="banner_slides">
                        <img src="images/home/liquid_bottles.png" alt="" class="banner_img">
                        <div class="banner_contents_div">
                            <h4 class="banner_content text-light">
                                Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.
                            </h4>
                            <a href="" class="banner_view_button">View Products</a>
                        </div>
                    </div>

                    <div class="banner_slides">
                        <img src="images/home/liquid_jar_with_tripod_stand.png" alt="" class="banner_img">
                        <div class="banner_contents_div">
                            <h4 class="banner_content text-light">
                                consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.
                                Lorem ipsum dolor sit amet,
                            </h4>
                            <a href="" class="banner_view_button">View Products</a>
                        </div>
                    </div>

                    <div class="banner_slides">
                        <img src="images/home/medicine_materials.png" alt="" class="banner_img">
                        <div class="banner_contents_div">
                            <h4 class="banner_content text-light">
                                eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.
                                Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit, sed do
                            </h4>
                            <a href="" class="banner_view_button">View Products</a>
                        </div>
                    </div>

                    <div class="banner_slides">
                        <img src="images/home/liquid_jars.png" alt="" class="banner_img">
                        <div class="banner_contents_div">
                            <h4 class="banner_content text-light">
                                et dolore magna aliqua.
                                Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore
                            </h4>
                            <a href="" class="banner_view_button">View Products</a>
                        </div>
                    </div>
                </div>
                <marquee behavior="scroll" direction="left" class="banner_marque">
                    Your Dedicated Partners for Supply of Specialty Chemicals
                </marquee>
                <div class="animated_arrow_div text-center">
                    <span class="animated_arrow_span">
                        <a href="#our_products">
                            <i class="fa fa-arrow-down animated_arrow_down"></i>
                        </a>
                    </span>
                </div>
            </div>
        </section>

        <section class="white_section our_products" id="our_products">
            <div class="container pt-md-5 pb-md-2">
                <h2 class="product_heading text-center pb-md-1"><span class="our">OUR</span> PRODUCT</h2>
                <div class="row">
                    <div class="col-md-3 our_product_cards_div">
                        <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none w-100">
                            <div class="card">
                                <img src="images/home/our_product_1.png" alt="" class="product_card_image card-img-top">
                                <div class="card-body d-flex">
                                    <p class="card-text">Phosphate Esters & Flame Retardant</p>
                                    <i class="btn btn-primary fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-3 our_product_cards_div">
                        <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none w-100">
                            <div class="card">
                                <img src="images/home/our_product_2.png" alt="" class="product_card_image card-img-top">
                                <div class="card-body d-flex">
                                    <p class="card-text">Surfactant & Antistatic Agent</p>
                                    <i class="btn btn-primary fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-3 our_product_cards_div">
                        <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none w-100">
                            <div class="card">
                                <img src="images/home/our_product_3.png" alt="" class="product_card_image card-img-top">
                                <div class="card-body d-flex">
                                    <p class="card-text">Hydrobromic Acid</p>
                                    <i class="btn btn-primary fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-3 our_product_cards_div">
                        <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none w-100">
                            <div class="card">
                                <img src="images/home/our_product_4.png" alt="" class="product_card_image card-img-top">
                                <div class="card-body d-flex">
                                    <p class="card-text">Plasticizer</p>
                                    <i class="btn btn-primary fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-3 our_product_cards_div">
                        <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none w-100">
                            <div class="card">
                                <img src="images/home/our_product_5.png" alt="" class="product_card_image card-img-top">
                                <div class="card-body d-flex">
                                    <p class="card-text">Anti-hydrolysis Agent</p>
                                    <i class="btn btn-primary fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-3 our_product_cards_div">
                        <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none w-100">
                            <div class="card">
                                <img src="images/home/our_product_6.png" alt="" class="product_card_image card-img-top">
                                <div class="card-body d-flex">
                                    <p class="card-text">Polyurethane & Cast Nylon Additives</p>
                                    <i class="btn btn-primary fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-3 our_product_cards_div">
                        <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none w-100">
                            <div class="card">
                                <img src="images/home/our_product_7.png" alt="" class="product_card_image card-img-top">
                                <div class="card-body d-flex">
                                    <p class="card-text">Green Chemistry</p>
                                    <i class="btn btn-primary fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-3 our_product_cards_div">
                        <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none w-100">
                            <div class="card">
                                <img src="images/home/our_product_8.png" alt="" class="product_card_image card-img-top">
                                <div class="card-body d-flex">
                                    <p class="card-text">C5 Products</p>
                                    <i class="btn btn-primary fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 text-center pt-md-4">
                        <a href="#" class="btn a_btn blue_btn">
                            View All
                        </a>
                    </div>                    
                </div>
            </div>
        </section>

        <section class="white_section py-5" id="company_section">
            <div class="container ">
                <div class="row">
                    <div class="col-md-11 background_blue_img p-md-5">
                        <div class="col-md-8">
                            <h2 class="text-light company_heading">SAGAR SPECIALITY <br class="d-md-block d-none"> CHEMICALS (PVT) LTD.</h2>
                            <p class="since_content text-white">INCORPORATED IN 1974 AS A PARTNERSHIP COMPANY M/S. SAGAR INTERNATIONAL AND CONVERTED TO PVT LTD IN 1999</p>
                            <p class="text-light after_success_content">After successfully recognizing itself as a reliable partner in supply chain management, Sagar Speciality Chemicals Private Limited then started with contract manufacturing.</p>
                            <a href="#" class="btn a_btn white_btn btn-lg mt-3">Read More <i class="fa fa-arrow-right"></i></a>                    
                        </div>
                    </div>
                    <div class="col-12 position-relative">
                        <div class="col-md-5 saagar_speciality_chemical_machine float-end">
                            <img src="images/home/saagar_speciality_chemical.png" alt="Chemical Process" class="img-fluid rounded">
                            <div class="info_box text-start text-light p-md-4 up_and_down">
                                <h4>100k+</h4>
                                <p>Lorem Ipsum</p>
                                <hr>
                                <h4>12M</h4>
                                <p>Lorem Ipsum Lans</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="white_section industry_we_cater">
            <div class="container py-md-5">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h2 class="product_heading text-center pb-md-1 float-start"><span class="our">INDUSTRY</span> WE CATER</h2>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn a_btn blue_btn float-end">
                            View All
                        </a>
                    </div>
                </div>
                <div class="row industry_contents_main_div">
                    <div class="col-md-4 industry_content_div position-relative">
                        <img src="images/home/industry_img_1.png" alt="" class="industry_img">
                        <div class="d-flex industry_content">
                            <a href="" class="industry_text_link ps-md-4">Adhesive and sealant</a>
                            <a href="" class="industry_arrow_link pe-md-3">
                                <img class="rotate45" src="images/home/right_arrow_45deg.png" />
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 industry_content_div position-relative">
                        <img src="images/home/industry_img_2.png" alt="" class="industry_img">
                        <div class="d-flex industry_content">
                            <a href="" class="industry_text_link ps-md-4">Water Treatment</a>
                            <a href="" class="industry_arrow_link pe-md-3">
                                <img class="rotate45" src="images/home/right_arrow_45deg.png" />
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 industry_content_div position-relative">
                        <img src="images/home/industry_img_3.png" alt="" class="industry_img">
                        <div class="d-flex industry_content">
                            <a href="" class="industry_text_link ps-md-4">Unsaturated Polyester Resin</a>
                            <a href="" class="industry_arrow_link pe-md-3">
                                <img class="rotate45" src="images/home/right_arrow_45deg.png" />
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 industry_content_div position-relative">
                        <img src="images/home/industry_img_4.png" alt="" class="industry_img">
                        <div class="d-flex industry_content">
                            <a href="" class="industry_text_link ps-md-4">Food</a>
                            <a href="" class="industry_arrow_link pe-md-3">
                                <img class="rotate45" src="images/home/right_arrow_45deg.png" />
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 industry_content_div position-relative">
                        <img src="images/home/industry_img_5.png" alt="" class="industry_img">
                        <div class="d-flex industry_content">
                            <a href="" class="industry_text_link ps-md-4">Textile</a>
                            <a href="" class="industry_arrow_link pe-md-3">
                                <img class="rotate45" src="images/home/right_arrow_45deg.png" />
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 industry_content_div position-relative">
                        <img src="images/home/industry_img_6.png" alt="" class="industry_img">
                        <div class="d-flex industry_content">
                            <a href="" class="industry_text_link ps-md-4">Specialty Chemicals</a>
                            <a href="" class="industry_arrow_link pe-md-3">
                                <img class="rotate45" src="images/home/right_arrow_45deg.png" />
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 industry_content_div position-relative">
                        <img src="images/home/industry_img_7.png" alt="" class="industry_img">
                        <div class="d-flex industry_content">
                            <a href="" class="industry_text_link ps-md-4">Pharmaceuticals</a>
                            <a href="" class="industry_arrow_link pe-md-3">
                                <img class="rotate45" src="images/home/right_arrow_45deg.png" />
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 industry_content_div position-relative">
                        <img src="images/home/industry_img_8.png" alt="" class="industry_img">
                        <div class="d-flex industry_content">
                            <a href="" class="industry_text_link ps-md-4">Metal Treatment</a>
                            <a href="" class="industry_arrow_link pe-md-3">
                                <img class="rotate45" src="images/home/right_arrow_45deg.png" />
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 industry_content_div position-relative">
                        <img src="images/home/industry_img_9.png" alt="" class="industry_img">
                        <div class="d-flex industry_content">
                            <a href="" class="industry_text_link ps-md-4">Surface Treatment</a>
                            <a href="" class="industry_arrow_link pe-md-3">
                                <img class="rotate45" src="images/home/right_arrow_45deg.png" />
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="blue_section what_we_do">
            <div class="container py-md-5">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h2 class="product_heading what_we_do_heading text-center pb-md-1 float-start"><span class="text-light">WHAT</span> WE DO?</h2>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn a_btn purple_btn float-end border border-2 border-light text-light">
                            View All
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-theme owl-carousel" id="what_we_do_slider">
                        <div class="col-12 what_we_do_main_div">
                            <div class="card">
                                <img src="images/home/what_we_do_img_1.png" class="card-img-top" alt="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a class="what_we_do_link">Read More<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 what_we_do_main_div">
                            <div class="card">
                                <img src="images/home/what_we_do_img_2.png" class="card-img-top" alt="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a class="what_we_do_link">Read More<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 what_we_do_main_div">
                            <div class="card">
                                <img src="images/home/what_we_do_img_3.png" class="card-img-top" alt="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a class="what_we_do_link">Read More<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="white_section why_sscpl pb-md-5">
            <div class="container py-md-5 mb-md-5">
                <div class="row justify-content-between position-relative">
                    <div class="animated_moving_machine py-md-2">
                        <img class="moving_machine" src="images/home/animated_top-tank.png" alt="">
                    </div>
                    <div class="col-md-12 why_sscpl_bg_img position-absolute">
                        <h2 class="product_heading text-light text-center pt-md-5 mt-md-4">WHY SSCPL?</h2>
                        <div class="row pt-md-5">
                            <div class="col-md-3 sscl_contents_main_div text-center pb-md-5">
                                <div class="sscl_img_div"> <img src="images/home/funnel.png" alt="" class="sscl_img"></div>
                                <p class="sscl_content mt-md-3">Product</p>
                            </div>
                            <div class="col-md-3 sscl_contents_main_div text-center pb-md-5">
                                <div class="sscl_img_div"> <img src="images/home/competitve_pricing.png" alt="" class="sscl_img"></div>
                                <p class="sscl_content mt-md-3">Competitve Pricing</p>
                            </div>
                            <div class="col-md-3 sscl_contents_main_div text-center pb-md-5">
                                <div class="sscl_img_div"> <img src="images/home/packaging.png" alt="" class="sscl_img"></div>
                                <p class="sscl_content mt-md-3">Packaging</p>
                            </div>
                            <div class="col-md-3 sscl_contents_main_div text-center pb-md-5">
                                <div class="sscl_img_div"> <img src="images/home/commitment.png" alt="" class="sscl_img"></div>
                                <p class="sscl_content mt-md-3">Commitment</p>
                            </div>
                            <div class="col-md-3 sscl_contents_main_div text-center pb-md-5">
                                <div class="sscl_img_div"> <img src="images/home/delivery.png" alt="" class="sscl_img"></div>
                                <p class="sscl_content mt-md-3">Delivery</p>
                            </div>
                            <div class="col-md-3 sscl_contents_main_div text-center pb-md-5">
                                <div class="sscl_img_div"> <img src="images/home/customised_solutions.png" alt="" class="sscl_img"></div>
                                <p class="sscl_content mt-md-3">Customised Solutions</p>
                            </div>
                            <div class="col-md-3 sscl_contents_main_div text-center pb-md-5">
                                <div class="sscl_img_div"> <img src="images/home/compliances.png" alt="" class="sscl_img"></div>
                                <p class="sscl_content mt-md-3">Compliances</p>
                            </div>
                            <div class="col-md-3 sscl_contents_main_div text-center pb-md-5">
                                <div class="sscl_img_div"> <img src="images/home/customer_support.png" alt="" class="sscl_img"></div>
                                <p class="sscl_content mt-md-3">Customer Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="white_section future_activity">
            <div class="container pb-md-5">
                <div class="row">
                    <div class="col-md-12 pb-md-3">
                        <h2 class="product_heading text-center pb-md-1 float-start"><span class="our">FUTURE</span> ACTIVITES & OBJECTIVES</h2>
                    </div>
                    <div class="owl-theme owl-carousel" id="future_activity_slider">
                        <div class="col-12 future_activites_main_div">
                            <div class="card">
                                <img src="images/home/future_activites_1.png" class="card-img-top" alt="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a class="future_activites_link">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 future_activites_main_div">
                            <div class="card">
                                <img src="images/home/future_activites_2.png" class="card-img-top" alt="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a class="future_activites_link">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 future_activites_main_div">
                            <div class="card">
                                <img src="images/home/future_activites_3.png" class="card-img-top" alt="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a class="future_activites_link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="white_section supply_chain_partner text-light bg-light pb-md-5">
            <div class="container py-md-4">
                <div class="row d-flex justify-content-center position-relative">
                    <div class="content_img_div">
                        <h2 class="product_heading text-light text-center pt-md-5">Supply Chain Partner</h2>
                        <br class="d-md-block d-none">
                        <div class="d-flex justify-content-center spply-chn-content_div">
                            <p class="col-md-9 sply_chn_content text-md-center pb-md-5">
                                We are Preferred Best Exporters for Korea, Brazil, Thailand, USA, 
                                Australia, Japan, Saudi Arabia, UAE, Bangladesh and Sri Lanka.
                            </p>
                        </div>
                    </div>
                    <div class="three_boxes_div col-md-11 row row-cols-2 row-cols-md-3">
                        <div class="col ">
                            <div class="spply_chn_box">
                                <img src="images/home/chemical_list.png" alt="" class="spply_chn_box_img">
                                <h5 class="spply_chn_title my-md-5">Chemical List</h5>
                                <a href="" class="spply_chn_btn">Download</a>
                            </div>
                        </div>

                        <div class="col ">
                            <div class="spply_chn_box">
                                <img src="images/home/partner_with_us.png" alt="" class="spply_chn_box_img">
                                <h5 class="spply_chn_title my-md-5">Partner With Us</h5>
                                <a href="" class="spply_chn_btn">Connect Now</a>
                            </div>
                        </div>

                        <div class="col ">
                            <div class="spply_chn_box">
                                <img src="images/home/certificate.png" alt="" class="spply_chn_box_img">
                                <h5 class="spply_chn_title my-md-5">Certificate</h5>
                                <a href="" class="spply_chn_btn">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="white_section code_of_conduct bg-light">
            <div class="container text-center pb-md-5 pt-md-4">
                <h2 class="col-12 product_heading text-center pb-md-3">CODE of <span class="our">CONDUCT</span></h2>
                <p class="col-12 code_of_content_div pb-md-3">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                    dicta sunt explicabo Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                </p>
                <a href="" class="col-12 spply_chn_btn">Read More</a>
            </div>
        </section>

    </main>


  
<!--     F O O T E R   --> 
<?php include 'footer.php';?>