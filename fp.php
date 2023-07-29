<?php require_once("include/db.php"); ?>
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/Funtions.php"); ?>
<?php

if(isset($_POST["submit"])){
    $Name = mysqli_real_escape_string($connection, $_POST["name"]);
    $Email = mysqli_real_escape_string($connection, $_POST["email"]);
    $Comment = mysqli_real_escape_string($connection, $_POST["comment"]);
    $CurrentTime=time();
    $DateTime=strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);
    $DateTime;
    $PostId= $_GET["id"];
    echo $Name ; 
    echo $Email ;
    echo $Comment ;
    if(empty($Name)){
        $_SESSION["ERRORMessage"] =  "All fields are required";
    }elseif(strlen($Comment) >500){
        $_SESSION["ERRORMessage"] =  "Comment cannot be above 500 characters";
    }else{
        global $connection;
        $PostIDFromURL=$_GET['id'];
        $Query="INSERT INTO test (datetime, name, email, comment, status, admin_panel_id)
        VALUES ('$DateTime', '$Name', '$Email', '$Comment', 'OFF', '$PostIDFromURL')";
        $Execute= mysqli_query($connection, $Query);
        if($Execute){
            $_SESSION["SuccessMessage"] =  "Comment Submitted Successfully";
            Redirect_to("FullPost.php?id={$PostId}");
            
        }else{
            $_SESSION["ERRORMessage"] =  "Failed to Submit Post";
            Redirect_to("FullPost.php?id={$PostId}");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="logo.ico" />
    <title>SRA</title>
    <!-- Bootstrap -->
    <link href="css1/css/bootstrap.min.css" rel="stylesheet">

    <link href="css1/css/bootstrap.css" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="css1/js/dl-menu/component.css" rel="stylesheet">
    <!--SLICK SLIDER CSS-->
    <link rel="stylesheet" type="text/css" href="css1/css/slick.css" />
    <!-- Font Awesome StyleSheet CSS -->
    <link href="css1/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome StyleSheet CSS -->
    <link href="css1/css/svg.css" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="css1/css/prettyPhoto.css" rel="stylesheet">
    <!-- Shortcodes CSS -->
    <link href="css1/css/shortcodes.css" rel="stylesheet">
    <!-- Widget CSS -->
    <link href="css1/css/widget.css" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="css1/css/typography.css" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="css1/style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="css1/css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css1/css/responsive.css" rel="stylesheet">
    <style>
        .header-overlay {
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            z-index: 1;
            background: black;
            opacity: 0.7;
        }
        
        .text-responsive {
            font-size: calc(100% + 1vw + 1vh);
        }
        
        p {
            word-break: keep-all;
        }
        
        .ww {
            margin: 5px;
        }
        
        .w {
            color: #000;
            margin-left: 20px;
            font-weight: 00;
        }
        
        .button {
            background-color: #AC0307;
            color: #fff;
        }
    </style>
</head>

<body>

    <!--iqoniq Wrapper Start-->
    <div class="iq_wrapper">
        <!--Header Wrap Start-->
        <header class="iq_header_1">
            <div class="container">

                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

                    <a class="iq_logo" href="#">
                        <img src="css1/images/logo.jpg" class="d-inline-block align-top" alt="">
                    </a>

                    <button class="button navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navigation collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="ww navbar-nav">
                            <li class="w nav-item active">
                                <a class=" nav-link" href="index.html"><i class="fa fa-home "></i> Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="w nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-money "></i> Paid Dues
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="100level.php">100 Level List</a>
                                    <a class="dropdown-item" href="200level.php">200 Level List</a>
                                    <a class="dropdown-item" href="300level.php">300 Level List</a>
                                    <a class="dropdown-item" href="400level.php">400 Level List</a>
                                </div>
                            </li>
                            <li class="w nav-item">
                                <a class="nav-link" href="about-us.html"><i class="fa fa-user"></i> About Us</a>
                            </li>
                            <li class="w nav-item">
                                <a class="nav-link" href="sports.html"><i class="fa fa-circle"></i> Sports</a>
                            </li>
                            <li class="w nav-item">
                                <a class="nav-link" href="blog-large.PHP"><i class="fa fa-pencil" aria-hidden="true"></i> Blog</a>
                            </li>
                            <li class="w nav-item">
                                <a class="nav-link" href="event-calender.html"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Event Calender</a>
                            </li>
                            <li class="w nav-item">
                                <a class="nav-link" href="messages/index.php"><i class="fa fa-commenting" aria-hidden="true"></i> Anonymous Message</a>
                            </li>
                            <li class="w nav-item">
                                <a class="nav-link" href="login.php"><i class="fa fa-lock" aria-hidden="true"></i> Admin</a>
                            </li>

                        </ul>
                    </div>
                </nav>

            </div>
            <!--Navigation wrap End-->
    </div>
    <!--Top Strip Wrap End-->
    </div>
    </header>
    <!--Header Wrap End-->
        <!--Banner Wrap Start-->
        <div class="iner_banner">
            <div class="container">
                <h5>Blog</h5>
                <div class="banner_iner_capstion">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog - detail</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Banner Wrap End-->
        <!--iqoniq Content Start-->
        <div class="iq_content_wrap">
            <!--blog1_detail START-->
            <section>
                <!--blog_detail_page START-->
                <div class="blog1_detail">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">

                        <?php
                              global $connection;
                              if(isset($_GET["SearchButton"])){
                                $Search = $_GET["Search"];
                               $ViewQuery= "SELECT * FROM admin_panel 
                               WHERE datetime LIKE '%$Search%'
                               OR title LIKE '%$Search%'
                                 OR category LIKE '%$Search%'
                                 OR post LIKE '%$Search%'";
                               }else{
                               $PostIDFromURL = $_GET["id"];
                              $ViewQuery= "SELECT * FROM admin_panel WHERE id='$PostIDFromURL'
                                 ORDER BY id desc";
                              }
                        
                                  $Execute = mysqli_query($connection, $ViewQuery);
                                 while($DataRows=mysqli_fetch_array($Execute)){
                                   $PostId = $DataRows["id"];
                                  $DateTime = $DataRows["datetime"];
                                 $Title = $DataRows["title"];
                                 $Category = $DataRows["category"];
                                 $Admin = $DataRows["author"];
                                 $Image = $DataRows["image"];
                                 $Post = $DataRows["post"]; 
                           ?>
                                <!--blog_detail_page START-->
                                <div class="blog_detail_page">
                                    <figure>
                                        <img src="Upload/<?php echo $Image; ?>" alt="">
                                    </figure>
                                    <!--Heading Wrap Start-->
                                    <div class="iq_heading_1 text-left">
                                        <h4><?php echo htmlentities($Title);?></h4>
                                    </div>
                                    <!--Heading Wrap End-->
                                    <ul class="blog_detail_navi">
                                        <li>
                                        <?php echo htmlentities($DateTime);?>
                                        </li>
                                    </ul>
                                    <p><?php echo nl2br($Post); ?> </p>
                                 </div>
                                 <!--blog_detail_area end-->
                               
                                 <?php } ?>
                                </div>
                                
                            <div class="col-sm-offset-1 col-md-3">
                                <div class="aside-bar">
                                    <!--course_inrp_side_search START-->
                                    
                                    </div>
                                    <!--course_inrp_side_search end-->
                                    <!--coures_archives start-->
                                    <div class="widget widget_archive">
                                        <!--Widget Title Start-->
                                        <h5 class="widget-title"><span>our</span> Course</h5>
                                        <!--Widget Title End-->
                                        <ul>
                                <li>
                                    <a href="messages/index.php">Anonymous</a>
                                </li>
                                <li>
                                    <a href="blog-large.PHP">Blog</a>
                                </li>
                                <li>
                                    <a href="sports.html">Sports</a>
                                </li>
                                <li>
                                    <a href="event-calender.html">Calender</a>
                                </li>

                            </ul>
                                    </div>
                                    <!--coures_archives end-->
                                    <!--POPULAR START-->
                                   
                                        <!--POPULAR THUMB START-->
                                        <div class="popular_thumb">
                                            <figure>
                                                <img src="extra-images/popular-thumb3.jpg" alt="" />
                                            </figure>
                                            <!--COURES POPULAR CAPSTION START-->
                                          
                                            <!--COURES POPULAR CAPSTION END-->
                                        </div>
                                        <!--POPULAR THUMB END-->
                                    </div>
                                    <!--POPULAR END-->
                                    <!--COURES CATEGORIES START-->
                                   
                                            </div>
                                            <!--COURES POPULAR CAPSTION END-->
                                        </div>
                                        <!--POPULAR THUMB END-->
                                        <!--POPULAR THUMB START-->
                                      
                                        <!--POPULAR THUMB END-->
                                        <!--POPULAR THUMB START-->
                                        <div class="popular_thumb">
                                            <figure>
                                                <img src="extra-images/popular-thumb3.jpg" alt="" />
                                            </figure>
                                          
                                            <!--COURES POPULAR CAPSTION END-->
                                        </div>
                                        <!--POPULAR THUMB END-->
                                    </div>
                                    <!--POPULAR END-->
                                    <!--POPULAR START-->
                                  
                                    <!--POPULAR END-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--BLOG1 PAGE END-->
            </section>
        </div>
        <!--iqoniq Content End-->
        <!--Contact Info Wrap Start-->
        <div class="iq_contact_info ">
            <div class="container ">
                <ul>
                    <li>
                        <i class="fa fa-map-marker "></i>
                        <div class="iq_info_wrap ">
                            <h5>Veritas University</h5>
                            <p>Bwarri Area<span>Council</span></p>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-phone "></i>
                        <div class="iq_info_wrap ">
                            <h5>Contact Number</h5>
                            <span>+234802784811</span>
                            <span>+234730034134</span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-phone "></i>
                        <div class="iq_info_wrap ">
                            <h5>Email;</h5>
                            <a href="sra@voiceofvuna.com ">sra@voiceofvuna.com</a>
                            <a href="help@voiceofvuna.com ">help@voiceofvuna.com</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--Contact Info Wrap End-->
        <!--Footer Wrap Start-->
        <footer class="iq_footer_bg ">
            <div class="container ">
                <div class="row ">
                    <!--Widget About Start-->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="iq_uni_title ">
                            <!--Widget Title Start-->
                            <h4>Availability<span>Periods</span></h4>
                            <!--Widget Title End-->
                            <ul>
                                <li><span>Moday - Friday</span> 08:00- 05:00</li>
                                <li><span>Saturday</span> Closed</li>
                                <li><span>Sunday</span> Closed</li>
                            </ul>
                        </div>
                    </div>
                    <!--Widget About End-->
                    <!--Widget Archive Start-->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="widget widget_archive ">
                            <!--Widget Title Start-->
                            <h5 class="widget-title "><span>Our</span> Services</h5>
                            <!--Widget Title End-->
                            <!--Social Media Start-->
                            <ul>
                                <li>
                                    <a href="messages/index.php">Anonymous</a>
                                </li>
                                <li>
                                    <a href="blog-large.PHP">Blog</a>
                                </li>
                                <li>
                                    <a href="sports.html">Sports</a>
                                </li>
                                <li>
                                    <a href="event-calender.html">Calender</a>
                                </li>

                            </ul>
                            <!--Social Media End-->
                        </div>
                    </div>
                    <!--Widget Archive End-->
                    <!--Widget Flickr Start-->

                    <!--Widget Flickr End-->
                    <!--Widget News Letter Start-->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="widget iq_footer_newsletter ">

                            <!--Widget Title Start-->
                            <h5 class="widget-title border-none "><span>Our</span> socials</h5>
                            <!--Widget Title Start-->
                            <ul class="iq_footer_social ">
                                <li>
                                    <a href="https://instagram.com/veritasblock?utm_medium=copy_link "><i class="fa fa-instagram "></i></a>
                                </li>
                                <li>
                                    <a href="# "><i class="fa fa-twitter "></i></a>
                                </li>
                                <li>
                                    <a href="# "><i class="fa fa-facebook "></i></a>
                                </li>
                                <li>
                                    <a href="# "><i class="fa fa-pinterest "></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Widget News Letter End-->
                </div>
            </div>
        </footer>
        <!--Footer Wrap End-->
                <!--SEARCH section ENDS-->
            </div>
        </div>
    </div>
    <!--iqoniq Wrapper End-->`
    <!--Javascript Library-->
      <script>
        setTimeout(function() {
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
    <script src="1/js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="1/js/bootstrap.min.js"></script>
    <!--Dl Menu Script-->
    <script src="1/js/dl-menu/modernizr.custom.js"></script>
    <script src="1/js/dl-menu/jquery.dlmenu.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="1/js/jquery.prettyPhoto.js"></script>
    <!--Custom JavaScript-->
    <script src="1/js/custom.js"></script>
</body>


</html>
</body>


</html>