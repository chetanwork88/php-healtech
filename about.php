<?php
//error_reporting(0); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>About</title>

    <!-- ----logo in title bar---- -->
    <link rel="icon" href="./images/healtech_logo.png" type="image/x-icon">


    <!-- ---------------- css --------------- -->

    <!-- ----comman css files-- -->
    <?php
    readfile('css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/about.css">

</head>

<body class="bg-black">

    <!-- -------------------------navbar-------------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark " id="navbar">
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
                    <a class="nav-link " href="/healtech/index.php">Home</a>
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
                    <a class="nav-link text-warning" href="/healtech/about.php">About</a>
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

    <!-- -------------------WHO WE ARE -------------- -->
    <div class="about-us-img parallax-txt-img slideDown">
        <div class="about-us div-md text-center py-5">
            <p class="heading-md text-white font-weight-bolder">WHO WE ARE</p>
            <p class="text-white text-justify px-5">
                HealTech Consultants was founded in 2020 with a single mission: to be the most successful, creative and
                ground-breaking consulting agency . We approach each of our clients with fresh eyes to
                develop customized, unique strategies.
                <br><br>
                Though we’ve grown since our founding, we’re still the same agency at heart. Let us help make your
                dreams a reality. Are you ready to set your brand or business on the path to success? Give us a call
                today and see what we can do for you.
                <br><br>
            </p>
            <button type="button" onclick="showHideDiv()" class="btn btn-outline-warning btn-lg">
                <i class="fas fa-arrow-down"></i> Know More</button>
        </div>
    </div>

    <div class="about-us-hidden div-xl bg-grey slideAnimUp" id="about-us-hidden">
        <p class="heading-md text-center text-warning pt-3">About Us</p>
        <p class="text-white text-justify px-4 pb-3">
            HealTech Consultants was founded in 2020 with a single mission: to be the most successful, creative and
            ground-breaking consulting agency . We approach each of our clients with fresh eyes to
            develop customized, unique strategies.
            <br><br>
            Though we’ve grown since our founding, we’re still the same agency at heart. Let us help make your
            dreams a reality. Are you ready to set your brand or business on the path to success? Give us a call
            today and see what we can do for you.
            <br><br>
            From day one, we realized we have the potential to make a real difference.
            <br><br>
            We realized that every time someone uses one of our features, it is an opportunity for Healtech to save
            our customers time. Even improvements that only save 10 seconds off a task will add up over time. Our
            approach of constantly improving operating and maintaining procedures and optimizing various corrective
            action tools has helped each of our customers save thousands of hours as their team take help of
            Healtech Consultants.
            <br><br>
            To put this to the test, some of our customers measured their work output before and after implementing
            Healtech. They have all reported a work output increase of at least 20%.
            <br><br>
            We are serious about foreseeing the unforeseen.
        </p>
    </div>

    <!-- -------------------Contact Us-------------- -->

    <div class="about-contact wrap text-center text-white div-lg ">
        <div class="bg-primary div-md slideAnimRight">
            <div class="my-5">
                <p class="heading-lg font-weight-bold">CONTACT</p>
            </div>
        </div>
        <div class="div-md bg-grey slideAnimLeft">
            <div class="my-5">
                <p class="heading-xs">Pune, Maharashtra, India</p>
                <p class="heading-xs">info@healtechconsultants.com</p>
                <p class="heading-xs">8855865771</p>
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