<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foodi3</title>


    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/freelancer.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/half-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">


    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Foodi3</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Jobs</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url();?>index.php/restaurantreg/AdminRegistration">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <!--<header style="background-color: #D2527F;">-->
      <!---->
        <!--<div class="container">-->
            <!--<div class="row">-->
                <!--<div class="col-lg-12">-->
                    <!--<img class="img-responsive" src="img/portfolio/bullet2.gif" alt="">-->
                    <!--<div class="intro-text">-->
                        <!--<span class="name" style="color:black;">Welcome To Vermont</span>-->
                        <!--<hr class="star-light">-->
                        <!--<span class="skills"style="color:black;">Home to Land of Color & Stories told through Flowers</span>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</header>-->
    <header id="myCarousel" class="carousel slide" style="margin-top: 2%">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo base_url();?>assets/img/portfolio/slider3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Welcome to foodi3</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo base_url();?>assets/img/portfolio/slider4.png');"></div>
                <div class="carousel-caption">
                    <h2>Find Jobs</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo base_url();?>assets/img/portfolio/slider5.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Know how to cook</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo base_url();?>assets/img/portfolio/slider6.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Enjoy the Food you cook</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo base_url();?>assets/img/portfolio/slider7.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Teach</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Jobs</h2>
                    <hr>
                </div>
            </div>
            <div class="row">

            </div>
            <div class="row" style="margin-bottom: 2%">
               <div class="col-md-2"></div>
                <div class="col-md-5">
                   <div>
                       <a href="#" class="btn btn-lg btn-outline" style="background-color: #16A085">
                           <i class="fa fa-user"> </i> Register to find a job
                       </a>
                   </div>
               </div>
                <div class="col-md-5">
                    <div>
                        <a href="<?php echo base_url();?>index.php/RestaurantReg/AdminRegistration" class="btn btn-lg btn-outline" style="background-color: #6C7A89">
                            <i class="fa fa-key"></i> Register your Restaurant
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about" style="background-color: #4183D7;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>bluh bluh
                       </p>
                </div>

                <div class="col-lg-4">
                    <p> bluh buh/p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-user"></i> Do Job Search
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container" style="width: 100%">
                <div class="row">
                    <div class="footer-col col-md-3">
                        <h3>Foodi3</h3>
                    </div>
                    <div class="footer-col col-md-3">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="footer-col col-md-3">
                        <h3>Telephone:</h3>
                    </div>
                    <div class="footer-col col-md-3">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Foodi3 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Event</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Blah</p>
                            <ul class="list-inline item-details">
                                <li>Offer:
                                    <strong><a href="">On sale</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="">April 2016</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="">Flowers</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                          <div class="modal-body">
                            <h2>Event</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Blah</p>
                            <ul class="list-inline item-details">
                                <li>Offer:
                                    <strong><a href="">On sale</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="">April 2016</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="">Flowers</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                             <div class="modal-body">
                            <h2>Event</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Blah</p>
                            <ul class="list-inline item-details">
                                <li>Offer:
                                    <strong><a href="">On sale</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="">April 2016</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="">Flowers</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Event</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Blah</p>
                            <ul class="list-inline item-details">
                                <li>Offer:
                                    <strong><a href="">On sale</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="">April 2016</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="">Flowers</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
               <div class="modal-body">
                            <h2>Event</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Blah</p>
                            <ul class="list-inline item-details">
                                <li>Offer:
                                    <strong><a href="">On sale</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="">April 2016</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="">Flowers</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                       <div class="modal-body">
                            <h2>Event</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Blah</p>
                            <ul class="list-inline item-details">
                                <li>Offer:
                                    <strong><a href="">On sale</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="">April 2016</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="">Flowers</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/cbpAnimatedHeader.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/classie.js"></script>

    <!-- Contact Form JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/freelancer.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>
</body>

</html>