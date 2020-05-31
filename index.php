<?php
//error_reporting(0); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home</title>

    <!-- ----logo in title bar---- -->
    <link rel="icon" href="./images/healtech_logo.png" type="image/x-icon">

    <!-- ---------------- css --------------- -->

    <!-- ----comman css files-- -->
    <?php
    readfile('css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/index.css">

</head>

<body class="bg-black">

    <!-- -------------------------navbar-------------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <a class="navbar-brand d-inline-flex" href="/healtech/index.php">
            <div class="brand-img">
                <img src="/healtech/images/healtech_logo.png" alt="healtech-logo">
            </div>
            <div class="brand-name my-auto">
                <h5 class="font-weight-bold text-warning">HEALTECH CONSULTANTS</h5>
                <h6 class="font-italic">Foreseeing the Unforeseen</h6>
            </div>
        </a>
        <button class="navbar-toggler" id="ChangeToggle" type="button" data-target="#collapsibleNavbar"
            onclick="openNav()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="overlay ml-auto " id="collapsibleNavbar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                <i class="fas fa-times text-white d-lg-none fa-2x"></i>
            </a>
            <ul class="navbar-nav overlay-content">
                <li class="nav-item nav-item-first">
                    <a class="nav-link text-warning" href="/healtech/index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownftrmenu" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Features
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownftrmenu">
                        <a class="dropdown-item" href="/healtech/features_asset_mgmt.php">Asset Management System</a>
                        <a class="dropdown-item" href="/healtech/features_breakdown_analysis.php">Breakdown Analysis
                            Reports</a>
                        <a class="dropdown-item" href="/healtech/features_maintenance.php">Maintenance</a>
                        <a class="dropdown-item" href="/healtech/features_action_tools.php">Corrective Action Tools</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownftrmenu" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownftrmenu">
                        <a class="dropdown-item" href="/healtech/resources_rca.php">Root Cause Analysis</a>
                        <a class="dropdown-item" href="/healtech/resources_wwa.php">Why-Why Analysis
                        </a>
                        <a class="dropdown-item" href="/healtech/features_breakdown_analysis.php">SOP of Maintenance</a>
                        <a class="dropdown-item" href="/healtech/features_maintenance.php">Effective PM Checklist</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="/healtech/pricing.php">Pricing</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/healtech/about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/healtech/blogs.php">Blogs</a>
                </li>

                <?php
                if(isset($_SESSION['user']))
                { 
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fas fa-user-circle text-primary"></i>
                        <?php
                    echo " ".$_SESSION['profile_name'];
                    ?>
                    </a>
                    <div class="dropdown-menu navbar-light">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <?php
                        if($_SESSION['admin'])
                        {
                    ?>
                        <a class="dropdown-item" href="report_workshops.php">Workshops</a>
                        <a class="dropdown-item " href="report_intro-details_feedback.php">intro-detailss And
                            Feedback</a>
                        <?php     
                        }
                    ?>
                        <a class="dropdown-item logout-hover" href="logout.php">Logout</a>
                    </div>
                </li>
                <?php
                }
                else
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Sign In</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>

    <!-- -------------------home parallax image-------------- -->

    <div class="home-img fadeIn">

        <div class="home-img-content p-5 div-md text-center text-white mx-auto">
            <p> Organize, Automate and Simplify<br>
                your Maintenance Operations with<br>
                Limble's Modern CMMS Maintenance Software </p>
        </div>

    </div>


    <!-- ------------------introduction-------------- -->
    <div class="bg-black py-5 text-center  text-white">
        <p class="heading-sm font-weight-bold">INTRODUCING</p>
        <p class="heading-lg font-weight-bolder">HEALTECH CONSULTANTS SERVICES</p>
    </div>

    <!-- ----------------------videos------------------------- -->

    <!-- ----who we are --- -->
    <div class="intro-details bg-grey wrap-reverse slideAnimRight">
        <div class="video div-md">
            <iframe src="https://www.youtube.com/embed/HPfnVvzAijw" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>
        <div class="text my-auto text-center text-primary div-md">
            <p class="heading-lg"> WHO WE ARE</p>
            <!-- <button type="button" onclick="window.location.href = 'about.php'" class="btn btn-outline-warning btn-lg">
                <i class="fas fa-arrow-right"></i> Know More</button> -->
            <a href="about.php">
                <button type="button" class="btn btn-outline-warning btn-lg">
                    <i class="fas fa-arrow-right"></i> Know More</button>
            </a>
        </div>
    </div>

    <!-- ----what we provide --- -->
    <div class="intro-details bg-grey wrap slideAnimLeft">
        <div class="text my-auto text-center text-warning  div-md">
            <p class="heading-lg">WHAT WE PROVIDE</p>
            <button type="button" onclick="window.location.href = 'index.php#contact-us'"
                class="btn btn-outline-primary btn-lg"><i class="fas fa-phone"></i> Get In Touch</button>
        </div>
        <div class="video div-md">
            <iframe src="https://www.youtube.com/embed/HPfnVvzAijw" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>
    </div>

    <!-- -----------------services-------------------- -->

    <!-- -------------------assembly parallax image-------------- -->

    <div class="assembly-img parallax-txt-img slideAnimUp">

        <!-- ----------------------Contact ---------------------- -->
        <div class="contact-details wrap my-auto ">

            <div class="address text-white center div-md" id="contact-us">
                <p class="heading-md text-warning font-weight-bold">CONTACT US</p>
                <p class="heading-xs">Pune, Maharashtra, India</p>
                <p class="heading-xs">info@healtechconsultants.com</p>
                <p class="heading-xs">8855865771</p>
            </div>


            <div class="contact-form div-md text-white bg-grey">
                <form action="" method="post" class="p-10 form-bottom">
                    <p class="heading-md text-primary text-center font-weight-bold">WRITE US</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="name" class="form-control" placeholder="* Name" name="name" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" placeholder="* Email" name="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Contact Number" name="contact">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Address" name="address">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="row">
                            <input type="text" class="form-control" placeholder="* Subject" name="subject" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <textarea class="form-control textarea" rows="3" placeholder="* Type your message here ..."
                                name="message" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="fill-btn btn-primary form-control btn-lg heading-xs">
                        <i class="fas fa-paper-plane"></i> Submit
                    </button>
                </form>
            </div>
        </div>

    </div>
    <!-- -------------------------Footer--------------------- -->
    <?php
    readfile('footer.html');
    ?>

    <!-- -----------Comman bootstrap javascripts-------------- -->
    <?php
    readfile('scripts.html');
    ?>

    <!-- ----------------page specific javascripts------------- -->



</body>

</html>