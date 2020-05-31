<?php
//error_reporting(0); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ishikawa Diagram</title>

    <!-- ----logo in title bar---- -->
    <link rel="icon" href="./images/healtech_logo.png" type="image/x-icon">


    <!-- ---------------- css --------------- -->

    <!-- ----comman css files-- -->
    <?php
    readfile('css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/resources.css">

</head>

<body class="bg-light-grey">

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

                <li class="nav-item dropdown text-warning">
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

    <!-- -------------------root cause analysis content-------------- -->
    <div class="resource-content div-lg p-3 my-5 shadow-lg slideDown">
        <p class="heading-md text-center my-3 text-success">Ishikawa Diagram</p>

        <p>The Ishikawa diagram or cause-and-effect diagram, also known as a fish-bone diagram, to show the potential
            causes that could lead to an effect. It is also useful to facilitate brainstorming when the potential root
            cause of a failure is unknown.
            <div class="text-center my-3">
                <img src="./images/resources/ishikawa_dia.png" alt="">
            </div>
            <span class="font-weight-bold">Key Points</span>
            <ul>
                <li>Ideally, these are used with a multifunctional team. </li>
                <li>The factors should at minimum be considered during an RCA. </li>
                <li>Each item in the cause-and-effect diagram should be evaluated. This could mean simply eliminating
                    the item as a possibility or testing to evaluate the contribution of the item to the failure under
                    investigation. </li>
                <li>Each item in the cause-and-effect diagram can be broken down into subitems</li>
            </ul>
            <div class="text-center my-3">
                <img src="./images/resources/ishikawa_dia2.png" alt="">
            </div>
            <span class="font-weight-bold text-center"> Procedure</span>
            <ol>
                <li>Draw a horizontal line with an arrow pointing to the right.</li>
                <li>List the effect (failure) under investigation in front of the arrow.</li>
                <li>Draw three arrows below the horizontal line and three arrows
                    above the horizontal line. They should be pointing toward the line
                    and angled toward the right at approximately a 50° angle</li>
                <li>Label each of the lines with the six MS: man (people), measurements,
                    material, milieu (environment), methods, and machine
                    (equipment). Note: The categories may be modified as needed.</li>
                <li>Use horizontal arrows pointing toward the angled arrows under
                    each effect category. Here, the individual subcategories of effects
                    should be listed.</li>
                <li>If necessary, the subcategories can be further broken down with
                    additional lower level categories.</li>
                <li>Each potential effect should be evaluated to support or reject it as
                    influencing the failure.</li>
            </ol>
        </p>

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