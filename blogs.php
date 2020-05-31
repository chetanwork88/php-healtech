<?php
//error_reporting(0); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Blogs</title>

    <!-- ----logo in title bar---- -->
    <link rel="icon" href="./images/healtech_logo.png" type="image/x-icon">


    <!-- ---------------- css --------------- -->

    <!-- ----comman css files-- -->
    <?php
    readfile('css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="/healtech/css/blogs.css">

</head>

<body class="blog-img">

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
                    <a class="nav-link text-warning" href="/healtech/blogs.php">Blogs</a>
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

    <!-- -------------------blog list----------------- -->
    <div class="d-flex justify-content-around blog-list div-xl wrap">

        <!-- --------fetching blogs from database -->
        <?php      
        require "db_connect.php";
        if($db_connected == true)
        {
            $input = array();
            function truncateLongText ($string, $limit) {
                // return with no change if string is shorter than $limit
                $break=".";
                $pad=" ...";
                
                
                if(strlen($string) <= $limit)
                {
                    return $string;
                }

                // is $break present between $limit and the end of the string? 
                if ( false !== ($breakpoint = strpos($string, $break, $limit)) ) {
                    if($breakpoint < strlen($string) - 1) {
                        $string = substr($string, 0, $breakpoint) . $pad;
                    }
                }

                return $string;
            }
            
            $sql = "SELECT b.blog_id,b.blog_title,b.blog_body,b.sys_creation_date as creation_date,
                    g.first_name,g.last_name
                    FROM blog b ,users g  WHERE b.created_by = g.username order by blog_id desc";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) 
            {   
                while($row = $result->fetch_assoc()) 
                {
        ?>

        <!-- ----display blogs in cards manner -->

        <div class="col-lg-5 bg-white blog-card my-5 p-3 text-center rounded shadow-lg slideUp">
            <p class="heading-xs font-weight-bold ">
                <?php echo nl2br($row["blog_title"]); ?></p>
            <br>
            <p class="text-justify">
                <?php
                $output = null;
                $output = truncateLongText($row["blog_body"],400);
                echo nl2br($output);
            ?>
            </p>

            <a href="blog_list.php?blog_id=<?php echo $row["blog_id"] ?>&blog_name =<?php echo $row["blog_title"] ?> ">
                <button type="button" class="btn btn-outline-primary " name="cont-read-submit-btn">
                    Continue Reading ...</button>
            </a>

            <footer class="blockquote-footer mt-2">
                <?php
                    echo $row["first_name"]." ".$row["last_name"]."  ( ".$row["creation_date"]." )";
                ?>
            </footer>

        </div>

        <?php                
                }
            }
        }   
        ?>

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