<?php
//error_reporting(0); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <!-- ----logo in title bar---- -->
    <link rel="icon" href="./images/healtech_logo.png" type="image/x-icon">


    <!-- ---------------- css --------------- -->

    <!-- ----comman css files-- -->
    <?php
    readfile('css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/signin.css">

</head>

<body class="log-in-img">

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
                    <a class="nav-link text-warning" href="login.php">Sign In</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>

    <!-- -------------------sign up-------------- -->


    <div class="log-in sign-in div-ms text-black rounded shadow-lg my-5 slideRight">
        <p class="heading-md text-center bg-success text-white py-2">LOG IN</p>
        <form action="" method="post" class="py-2 px-5">
            <div class="d-flex justify-content-between">
                <div class="form-icon">
                    <i class="fas fa-envelope fa-2x"></i>
                </div>
                <div class="form-input">
                    <input type="text" minlength="5" maxlength="50" placeholder="* E-mail / Contact Number"
                        name="username" required>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="form-icon">
                    <i class="fas fa-lock fa-2x"></i>
                </div>
                <div class="form-input">
                    <input type="password" placeholder="* Password" data-toggle="tooltip" minlength="8" maxlength="30"
                        name="password" required>
                </div>
            </div>

            <div class="d-flex justify-content-around mt-4 ">
                <button type="submit" class="btn btn-outline-success">
                    <i class="fas fa-user"></i> Log in
                </button>

                <a href="signup.php">
                    <button type="button" class="btn btn-outline-dark">
                        <i class="fas fa-user-plus"></i> Sign up
                    </button>
                </a>
            </div>
            <!-- <hr>

            <div class="d-flex justify-content-around mt-4 div-lg">
                <a target="_blank" href="#"><i class="fab fa-facebook-f fa-lg "></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter fa-lg "></i></a>
                <a target="_blank" href="#"><i class="fab fa-google fa-lg"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin-in fa-lg"></i></a>
            </div> -->
            <hr>
            <div class="text-center my-3">
                <a href="forgot_password.php">
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fas fa-key"></i> Forgot Password
                    </button>
                </a>
            </div>

        </form>
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