<?php
//error_reporting(0); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pricing</title>

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

<body class="plan-img">

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
                    <a class="nav-link" href="/healtech/index.php">Home</a>
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
                    <a class="nav-link text-warning" href="/healtech/pricing.php">Pricing</a>
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

    <!-- -------------------plans-------------- -->

    <div class="price-plans div-xl my-3">
        <p class="heading-sm text-center">Choose Your Plan</p>
        <div class="plans d-flex justify-content-around wrap">
            <div class="assets-plan border div-xs my-3 shadow-lg text-center slideRight">
                <p class="font-weight-bold bg-warning py-3 px-4">ASSET MANAGEMENT SYSTEM</p>
                <div class="p-3">
                    <p><span class="heading-md font-weight-bold"> 2000 </span> <i class="fas fa-rupee-sign fa-lg"></i>
                        /month
                    </p>
                    <p>Per 100 Machine Plant</p>
                    <!-- <p>Valid for 1 month</p> -->
                    <button type="button" class="fill-btn btn-warning form-control ">Select</button>
                    <hr>
                    <!-- <ul>
                        <li>
                            <p>Asset Codification</p>
                        </li>
                    </ul> -->
                    <p>Asset Codification</p>
                </div>
            </div>

            <div class="breakdown-plan border div-xs my-3 shadow-lg text-center slideUp">
                <p class="font-weight-bold bg-warning p-3">BREAKDOWN ANALYSIS REPORTS</p>
                <div class="p-3">
                    <p><span class="heading-md font-weight-bold"> 2000 </span> <i class="fas fa-rupee-sign fa-lg"></i>
                        /month
                    </p>
                    <p>Per Machine</p>
                    <!-- <p>Valid for 1 month</p> -->
                    <button type="button" class="fill-btn btn-warning form-control ">Select</button>
                    <hr>
                    <!-- <ul>
                        <li>
                            <p>Detailed reports on Machine breakdown</p>
                        </li>
                    </ul> -->
                    <p>Detailed reports on Machine breakdown</p>
                </div>
            </div>

            <div class="maintenence-plan border div-xs my-3 shadow-lg text-center slideDown">
                <p class="font-weight-bold bg-warning p-3">MACHINE MAINTENANCE SYSTEM</p>
                <div class="p-3">
                    <p><span class="heading-md font-weight-bold"> 500 </span> <i class="fas fa-rupee-sign fa-lg"></i>
                        /month
                    </p>
                    <p>Per Machine</p>
                    <!-- <p>Valid for 1 month</p> -->
                    <button type="button" class="fill-btn btn-warning form-control ">Select</button>
                    <hr>
                    <!-- <ul>
                        <li>
                            <p>Preventive Checklist</p>
                        </li>
                        <li>
                            <p>Predictive Checklist</p>
                        </li>
                    </ul> -->
                    <p>Preventive Checklist</p>
                    <p>Predictive Checklist</p>
                </div>
            </div>

            <div class="action-tools-plan border div-xs my-3 shadow-lg text-center slideLeft">
                <p class="font-weight-bold bg-warning py-3 px-5">CORRECTIVE ACTION TOOLS</p>
                <div class="p-3">
                    <p><span class="heading-md font-weight-bold"> 1000 </span> <i class="fas fa-rupee-sign fa-lg "></i>
                        /month
                    </p>
                    <p>Per Breakdown</p>
                    <!-- <p>Valid for 1 month</p> -->
                    <button type="button" class="fill-btn btn-warning form-control">Select</button>
                    <hr>
                    <!-- <ul>
                        <li>
                            <p>Root Cause Analysis</p>
                        </li>

                        <li>
                            <p>Why-Why Analysis</p>
                        </li>
                        <li>
                            <p>Ishikawa Diagram</p>
                        </li>
                    </ul> -->
                    <p>Root Cause Analysis</p>
                    <p>Why-Why Analysis</p>
                    <p>Ishikawa Diagram</p>
                </div>
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