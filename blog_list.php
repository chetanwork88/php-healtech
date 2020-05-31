<?php
//error_reporting(0); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Blog List</title>

    <!-- ----logo in title bar---- -->
    <link rel="icon" href="./images/healtech_logo.png" type="image/x-icon">


    <!-- ---------------- css --------------- -->

    <!-- ----comman css files-- -->
    <?php
    readfile('css.html');
    ?>

    <!-- page specific css-->
    <link rel="stylesheet" type="text/css" href="./css/blog_list.css">

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

    <!-- -------------------blog details-------------- -->
    <div class="blog-details text-center div-lg bg-white my-5 py-5 px-4 rounded slideExpandUp shadow-lg">

        <!-- ----------------back button------------ -->
        <button type="button" onclick="window.location.href = 'blogs.php'" class="btn btn-outline-primary"> <i
                class="fas fa-arrow-left"></i> Return</button>

        <?php
        require "db_connect.php";
        if($db_connected == true)
        { 
            $id = $_GET['blog_id'];
            //if not admin show enrolled profile-tables
            $username = $_SESSION['user'];
            $sql = "SELECT b.blog_id,b.blog_title,b.blog_body,DATE(b.sys_creation_date) as creation_date,
                    g.first_name,g.last_name
                    FROM blog b ,users g WHERE b.created_by = g.username  AND blog_id = '$id' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {   
                while($row = $result->fetch_assoc()) 
                {
        ?>

        <!-- -----------------------blog details ------------------->
        <div class="text-center  my-3">
            <p class="heading-xs font-weight-bold ">
                <?php echo nl2br($row["blog_title"]); ?></p>
            <br>
            <p class="text-justify">
                <?php
                    echo nl2br($row["blog_body"]);
                ?>
            </p>

            <footer class="blockquote-footer mt-2">
                <?php
                    echo $row["first_name"]." ".$row["last_name"]."  ( ".$row["creation_date"]." )";
                ?>
            </footer>
        </div>

        <?php
                }
            }
            
            // --------------------delete blog button for admiin-------------
           
            if(!$_SESSION['admin'])
            {
        ?>
        <div class="delete-blog">
            <button type="button" data-toggle="modal" data-target="#del-blog-modal" class="btn btn-outline-danger mb-2">
                <i class="fas fa-trash-alt"></i> Delete Blog</button>
        </div>

        <div class="modal fade" id="del-blog-modal">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header bg-danger text-white">
                        <h4 class="modal-title ">Delete Blog</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p class="text-center">Are you Sure you want to delete this blog?</p>
                        <hr>
                        <div class="del-blog-form">
                            <form action="blog_review_db.php" method="post">
                                <input type="hidden" name="blog_id" id="blog_id" value="<?php echo $id ?>">
                                <div class="d-flex justify-content-around">
                                    <button type="submit" name="del-blog"
                                        class="btn btn-outline-danger text-center">Delete</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            }
        ?>

        <!-- ----------------back button------------ -->
        <button type="button" onclick="window.location.href = 'blogs.php'" class="btn btn-outline-info"> <i
                class="fas fa-arrow-left"></i> Return</button>

        <!-- ---------------------comments------------------ -->
        <hr>
        <div class="comments">

            <!-- -------comment form------ -->
            <form class="form-lg" action="/action_page.php">
                <textarea minlength="2" class="form-control border-primary" maxlength="1000" rows="2" name="comment"
                    placeholder=" Add your views."></textarea>

                <button type="submit" class="btn btn-outline-primary mt-4"><i class="fas fa-comment-medical"></i> Add
                    Comment</button>
            </form>

            <!-- --------fetching comments from db----------- -->

            <?php        
            // fetching comments for the blog
            $sql = "SELECT  b.blog_id,b.blog_comment_id,b.comment,b.sys_creation_date as creation_date,
                            g.first_name,g.last_name
                            FROM blog_comments b LEFT JOIN users g 
                            ON b.commented_by = g.username  INNER JOIN blog bg
                            ON b.blog_id = bg.blog_id
                            AND b.blog_id = '$id'
                            ORDER BY b.sys_creation_date DESC";
                            
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {
        ?>

            <div class="comment-list">
                <hr>
                <p class="heading-xs text-success text-left mb-2">Comments</p>
            </div>
            <?php
                while($row = $result->fetch_assoc()) 
                {    
                    if(empty($row['first_name']) || empty($row['last_name']))
                    {
                        $row['first_name'] = "Anonymous";
                        $row['last_name'] = null;
                    }
                ?>

            <p>
                <?php echo nl2br($row["comment"]); ?>
            </p>

            <footer class="blockquote-footer mt-2">
                <?php
                        echo $row["first_name"]." ".$row["last_name"]."  ( ".$row["creation_date"]." )";
                    ?>
            </footer>

            <!-- ----------access to admin for deleting comments--------- -->
            <?php 
                if(!$_SESSION['admin'])
                { 
                ?>

            <div class="delete-comment">
                <button type="button" data-toggle="modal" data-target="#del-comment-modal"
                    class="btn btn-outline-danger my-2">
                    <i class="fas fa-trash-alt"></i> Delete Comment</button>
            </div>

            <div class="modal fade" id="del-comment-modal">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header bg-danger text-white">
                            <h4 class="modal-title ">Delete comment</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p class="text-center">Are you Sure you want to delete this comment?</p>
                            <hr>
                            <div class="del-comment-form">
                                <form action="blog_review_db.php" method="post">
                                    <input type="hidden" name="blog_id" id="blog_id" value="<?php echo $id ?>">
                                    <div class="d-flex justify-content-around">
                                        <button type="submit" name="del-blog"
                                            class="btn btn-outline-danger text-center">Delete</button>
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="width:50%;">
            <?php
                }
                }
            ?>
            <div class="delete-all-comment div-sm">
                <button type="button" data-toggle="modal" data-target="#del-all-comment-modal"
                    class="fill-btn btn-danger form-control btn-lg heading-xs">
                    <i class="fas fa-trash-alt"></i> Delete All Comments</button>
            </div>

            <div class="modal fade" id="del-all-comment-modal">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header bg-danger text-white">
                            <h4 class="modal-title">Delete All comments</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p class="text-center">Are you Sure you want to delete all comments of this blog?</p>
                            <hr>
                            <div class="del-comment-form">
                                <form action="blog_review_db.php" method="post">
                                    <input type="hidden" name="blog_id" id="blog_id" value="<?php echo $id ?>">
                                    <div class="d-flex justify-content-around">
                                        <button type="submit" name="del-blog"
                                            class="btn btn-outline-danger text-center">Delete</button>
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php    
            }
            ?>
        </div>
        <!-- ------------------related blogs----------------- -->
        <hr>
        <div class="related-blogs ">
            <p class="heading-xs text-success text-left">Related Articles</p>

            <?php
                $sql = "SELECT blog_id,blog_title FROM blog WHERE blog_id != '$id' ORDER BY RAND() LIMIT 5";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                    ?>
            <ul>
                <?php   
                    while($row = $result->fetch_assoc()) 
                    {
                ?>

                <!-- -----------------------blog details ------------------->
                <li>
                    <a class="heading-xs text-left"
                        href="blog_list.php?blog_id=<?php echo $row["blog_id"] ?>&blog_name =<?php echo $row["blog_title"] ?> ">
                        <?php echo nl2br($row["blog_title"]); ?>
                    </a>
                </li>
            </ul>
            <?php
                    }
                }
                ?>
        </div>
        <?php
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