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


    <link rel="stylesheet" type="text/css" href="plugins/revslider/css/settings.css">

    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/travlez-jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/loading.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="plugins/revslider/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="plugins/revslider/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/js/extensions/revolution.extension.video.min.js"></script>
    <style type="text/css">
        #rev_slider_3_1_wrapper .tp-loader.spinner4 {
            background-color: #ffffff !important;
        }

        .hephaistos .tp-bullet {
            width: 12px;
            height: 12px;
            position: absolute;
            background: rgba(153, 153, 153, 0);
            border: 3px solid rgba(29, 184, 193, 0.9);
            border-radius: 50%;
            cursor: pointer;
            box-sizing: content-box;
            box-shadow: 0px 0px 2px 1px rgba(130, 130, 130, 0.3)
        }

        .hephaistos .tp-bullet:hover,
        .hephaistos .tp-bullet.selected {
            background: rgba(255, 255, 255, 0);
            border-color: rgba(220, 36, 38, 1)
        }

    </style>
</head>

<body>
    <!-- Loading bar -->
    <section id="load-screen">
        <!-- right id is ( load-screen ) -->
        <div class="looding-in background-light-grey padding-tb-200px z-index-99">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-6 text-center">
                        <!-- Loading -->
                        <div class="loading-page">
                            <div class="counter">
                                <div class="text-center"><a href="#"><img src="images/logo.png" alt=""></a></div>
                                <div class="margin-tb-30px padding-8px background-white">
                                    <div class="animation padding-2px background-main-color"></div>
                                </div>
                                <div>loading <span class="num">0%</span></div>
                            </div>
                        </div>
                        <!-- // Loading -->
                    </div>
                </div>
                <!-- // row -->
            </div>
            <!-- // container -->
        </div>
    </section>
    <!-- // Loading bar -->

    <!-- ======= Header  ======= -->
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

                                <ul class="user-area list-inline float-right margin-0px text-white">
                                    <li class="list-inline-item" style="padding-right: 10px; color: black;"><h6></h6></li>
                                    
                                      <a class="btn btn-success" href="cart.php" ><i class="fa fa-shopping-cart fa-fw"></i> Cart : <?php echo $totalTicket ?> </a>
  
                       </ul>
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
                                    <li><a href="flight_view.php">Flights List View</a></li>
                                    
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
    <!-- ======= end Header  ======= -->


    <!-- =======  Rev Slider  ======= -->

    <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="travel-home-new" data-source="gallery" style="margin:0px auto;background:rgba(211,211,211,0);padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 auto mode -->
        <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-8" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_d0c75-ba_1.jpg" data-delay="9000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="https://images.unsplash.com/photo-1610483232624-6a6ff63ad861?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1369&q=80" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                   

                </li>
                <!-- SLIDE  -->
                <li data-index="rs-9" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_a8dd4-ba_2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="https://images.unsplash.com/photo-1595948215236-f9bf96580aa3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 7 -->
                    
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_a23f0-ba_3.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="lofi" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="https://images.unsplash.com/photo-1551960051-20b6e9a3a7ce?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1500&q=80" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 12 -->
                    

                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
    <script type="text/javascript">
        var tpj = jQuery;

        var revapi3;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_3_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_3_1");
            } else {
                revapi3 = tpj("#rev_slider_3_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//localhost/revslider-standalone/revslider/public/assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "hephaistos",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 20,
                            space: 5,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1170, 1024, 778, 480],
                    gridheight: [555, 555, 500, 500],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner4",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/

    </script>
    <!-- ======= end Rev Slider  ======= -->



   
    <!-- ======= Search Filter  ======= -->
    <div class="container">
        <div class="row">
            <div class="col-lg-5">

                <div id="search-filter-in" class="full-width position-absolute sm-position-relative bottom-80px sm-bottom-auto">
                    <div class="search-filter row no-gutters box-shadow sm-tb-40px">
                        <div class="filter-tabs  col-lg-5 background-second-color">
                            <img class="hidden-xs" src="https://www.washingtonpost.com/resizer/XDNLgd1ihU5u3te6FFp4haLzTRg=/1484x0/arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/PBKJ5C6KJJC75BO46RZEWUGL6A.jpg" alt="">
                            <ul class="nav nav-tabs flex-column" role="tablist">
                               
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><i class="fa fa-plane"></i> Flights</a>
                                </li>
                               
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="filter-output booking-form-box col-lg-7">
                            <!-- Tab panes -->
                            <form action="search_flight.php" method="get">
                            <div class="tab-content  padding-30px background-white">
                                
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <!-- ====== Flights ====== -->
                                    <div class="form-group margin-bottom-5px">
                                        <label>Flying from:</label>
                                        <div class="">
                                            <select name="from_flight" class="input-text full-width">
                                                <?php 
                                                    $from_sql="SELECT * FROM airport_list_2";
                                                    $res_from=mysqli_query($conn,$from_sql);
                                                    while($from_list=mysqli_fetch_assoc($res_from)){
                                                ?>
                                                <option value="<?php echo $from_list['airport']?>"><?php echo $from_list['airport']?></option>
                                                <?php
                                            }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group margin-bottom-5px">
                                        <label>Flying To:</label>
                                        <div class="">
                                            <select name="to_flight" class="input-text full-width">
                                                <?php 
                                                    $from_sql_1="SELECT * FROM airport_list";
                                                    $res_from_1=mysqli_query($conn,$from_sql_1);
                                                    while($from_list_1=mysqli_fetch_assoc($res_from_1)){
                                                ?>
                                                <option value="<?php echo $from_list_1['airport']?>"><?php echo $from_list_1['airport']?></option>
                                                <?php
                                            }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group margin-bottom-5px">
                                        <label>Departing:</label>
                                        <div class="date-input"><input type="text" class="input-text datepicker full-width" name="departing_time"></div>
                                    </div>
                                    
                                    <button type="submit" name="flight_search" class="btn-sm btn-lg btn-block background-main-color text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Flights  Search</buttton>
                                    <!-- ====== //  Flights ====== -->
                                </div>
                             
                            </div>
                            </form>
                            <!-- Tab panes -->
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ======= end Search Filter  ======= -->