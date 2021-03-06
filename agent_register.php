<?php
     include './database/controller.php';
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Agent Register Form</title>
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

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="plugins/revslider_1/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.video.min.js"></script>

</head>

<body>

    <section class="background-main-color padding-tb-130px full-screen">
        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-lg-4">

                    <div class="text-center margin-bottom-30px">
                        <a href="#"><img src="images/logo-light.png" alt=""></a>
                    </div>

                    <div class="padding-30px text-white background-dark border-1 border-grey-4 box-shadow">
                        <form method="post">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-form-label"><strong>Agentname</strong></label>
                                <input type="text" class="form-control rounded-0 background-grey-4 border-0" id="inputEmail3"
                                name="username" placeholder="username">
                            </div>
                            
                               <div class="form-group">
                                <label for="inputEmail3" class="col-form-label"><strong>Mobile</strong></label>
                                <input type="text" class="form-control rounded-0 background-grey-4 border-0" id="inputEmail3"
                                name="Mobile" placeholder="Mobile">
                                </div>
                                
                                 <div class="form-group">
                                <label for="inputEmail3" class="col-form-label"><strong>Address</strong></label>
                                <input type="text" class="form-control rounded-0 background-grey-4 border-0" id="inputEmail3"
                                name="Address" placeholder="Address">
                                </div>
                             

                             <div class="form-group">
                                <label for="inputEmail3" class="col-form-label"><strong>Email</strong></label>
                                <input type="email" class="form-control rounded-0 background-grey-4 border-0" id="inputEmail3" placeholder="Email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-form-label"><strong>Password</strong></label>
                                <input type="password" class="form-control rounded-0 background-grey-4 border-0" id="inputPassword3" name="password"placeholder="Password">
                            </div>
                            
                        
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block rounded-0 background-main-color" name="agent_signup">
                            </div>
                                         already account ? <a href="agent_login.php"><b style="padding-left: 5px; color:red;">Login</b></a>

                        </form>
                    </div>
                </div>


            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </section>

    <!-- // Footer -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>
