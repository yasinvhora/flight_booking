<?php
    include "simple_config.php";
    include "add_ticket.php";
    include "function.inc.php";
    $obj=new add_to_cart();
    $totalTicket=$obj->totalTicket();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Travelz HTML5 Multipurpose Travel Template</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
    <meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700" rel="stylesheet">
    <!-- CSS Files -->


    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/travlez-jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/sticky-sidebar.js"></script>


</head>

<body>
    <!-- Header  -->
    <header class="background-white box-shadow">
        <div class="background-main-color padding-tb-5px">
            <div class="container">
                <div class="row">
                    <div class="col-sm d-none d-sm-block text-white">Modern Creative Website ....</div>
                    <div class="col-sm">
                        <ul class="list-inline text-center margin-0px text-white">
                            <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- // Social -->
                    </div>
                    <div class="col-sm d-none d-sm-block">
                      
                           <?php   
                         
                         if(isset($_SESSION['user_front_login']))  
                         {  

                              ?>
                              
                                <ul class="user-area list-inline float-right margin-0px text-white">
                                    <li class="list-inline-item" style="padding-right: 10px; color: black;"><h6></h6></li>
                                    
                                      <a class="btn btn-primary" href="edituser.php" ><i class="fa fa-user fa-fw"></i> User : <?php echo $_SESSION['user_front_login'] ?></a>
                                    
                                                    <li class="list-inline-item  padding-right-10px" style="padding-left: 10px;"><a href="logout.php"><i class="fa fa-unlock padding-right-5px"></i>logout</a></li>
                               <?php
                           }
                         else  
                         {  
                              ?>
                            

                             <ul class="user-area list-inline float-right margin-0px text-white">
                                                    <li class="list-inline-item  padding-right-10px"><a href="login.php"><i class="fa fa-lock padding-right-5px"></i>login</a></li>
                                                    
                                                    <li class="list-inline-item"><a href="register.php"><i class="fa fa-user-plus padding-right-5px"></i>register</a></li>
                            <?php                        
                                }  
                            ?>                          
            
                       </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-output">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3">
                        <a id="logo" href="01-home.html" class="d-inline-block margin-tb-10px"><img src="images/logo.png" alt=""></a>
                        <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a>
                    </div>
                   <div class="col-lg-9 position-inherit">
                        <ul id="menu-main" class="nav-menu float-right link-padding-tb-20px dropdown-dark">
                            <li class="active mega-menu mega-links mega-links-4columns"><a href="index.php">Home</a>
                              
                            </li>
                           

                         
                         
                            <li class="has-dropdown"><a href="#">Flights</a>
                                <ul class="sub-menu">
                                    <li><a href="flight-list.html">Flights List View</a></li>
                                   
                                </ul>
                            </li>
                      
                            <li>
                                <a href="about_us.php">About Us</a>
                            </li> 
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li> 
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- // Header  -->
    <!-- Page title --->
    <section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">flight list</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="#" class="text-grey-4">Home</a></li>
                <li><a href="#" class="text-grey-4">pages</a></li>
                <li class="active">flight list</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- // Page title --->