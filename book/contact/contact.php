<?php include 'sendemail.php'; ?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

    <head>

        <!-- Basic -->
        <title>Career Guidance | Contact</title>
        <link rel="shortcut icon" type="image" href="../temp/asset/images/cg logo.png">

        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Page Description and Author -->
        <meta name="description" content="Career Guidance">
        <meta name="author" content="Shahriyar Ahmed">

        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="../temp/asset/bootstrap/css/bootstrap.min.css" type="text/css">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="../temp/asset/font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="../temp/asset/css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="../temp/asset/css/owl.theme.css" type="text/css">
        <link rel="stylesheet" href="../temp/asset/css/owl.transitions.css" type="text/css">
        
        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="../temp/asset/css/animate.css">
        
        <!-- Lightbox CSS -->
        <link rel="stylesheet" type="text/css" href="../temp/asset/css/lightbox.css">

        <!-- Sulfur CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="../temp/asset/css/style.css">

        <!-- Responsive CSS Style -->
        <link rel="stylesheet" type="text/css" href="../temp/asset/css/responsive.css">



        <script src="../temp/asset/js/modernizrr.js"></script>


    </head>


    <body>
    <?php echo $alert; ?>
        <header class="clearfix banner">
        
            <!-- Start Top Bar -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                    
                                <div class="col-md-6">
                                    <!-- Start Contact Info -->
                                    <ul class="contact-details">
                                        <li><a href="#"><i class="fa fa-phone"></i>+91 7208886567</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> careerguidance@gmail.com</a>
                                        </li> 
                                    </ul>
                                    <!-- End Contact Info -->
                                </div><!-- .col-md-6 -->
                                
                                  <!-- .col-md-6 -->
                            </div>
                                
                                
                        </div>
                    </div>                        

                </div><!-- .row -->
            </div><!-- .container -->
            <!-- End Top Bar -->
        
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="../home.php">Career Guidance</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="../home.php">Home</a>
                            </li>
                            <li>
                                <a href="../quizindex.php">Quiz</a>
                            </li>
                            <li>
                                <a href="../temp\newsfeed\news.html">News</a>
                            </li>
                            <li>
                                <a href="../temp/about.html">About us</a>
                            </li>
                            <li>
                                <a href="#portfolio-list">Career Field</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="../temp\science_11_12.html">science</a>
                                    </li>
                                    <li>
                                        <a href="../temp/commerce.html">commerce</a>
                                    </li>
                                    <li>
                                        <a href="../temp/Arts-after 10th.html">arts</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="active" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->
            
        </header>
        
        
        <!-- Start Header Section -->
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Contact with Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
        
        
        
        
        
        

        
        <!-- Start Contact Us Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Contact With Us</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg  form-group">
                <form class="contact" action="" method="post">
                    <div class="row">
                            <div class="col-md-6 " data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 " data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix banner"></div>
                            <div class="col-lg-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="600ms">
                                <div id="success"></div>
                                <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
        </form>
                    
                </div>
            </div>
           
        </div>
        
    </section>

    <div class="google-map">
        <div id="map" data-position-latitude="19.24371868523288" data-position-longitude="72.85410962732117"></div> 
    </div>
        
          <!-- Start Footer Section -->
          <section id="footer-section" class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <!-- <h3 class="section-title">
                                <span>Office Address</span>
                            </h3>
                        </div>
                        
                        <div class="footer-address">
                            <ul>
                                <li class="footer-contact"><i class="fa fa-home"></i>ST. Francis Institute Of Technology</li>
                                <li class="footer-contact"><i class="fa fa-envelope"></i><a href="#">careerguidance@gmail.com</a></li>
                                <li class="footer-contact"><i class="fa fa-phone"></i>+91 7208886567</li>
                                <li class="footer-contact"><i class="fa fa-globe"></i><a href="#" target="_blank">www.sfit.ac.in</a></li>
                            </ul> -->
                        </div>
                    </div><!--/.col-md-3 -->
                    
                    
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <!-- <span>Latest Tweet</span>
                            </h3>
                        </div>
                        
                        <div class="latest-tweet">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-twitter fa-2x media-object"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">About 15 days ago</h4>
                                    <p>Finally #tutsplus start a tutorial on A Beginner’s Guide to Using #joomla . Check it out here http://t.co/i6S4zeW8Z0</p>
                                </div>
                            </div> -->
                        </div>
                    </div><!--/.col-md-3 -->
                    
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <!-- <h3 class="section-title">
                                <span>Stay With us</span>
                            </h3>
                        </div>
                        <div class="subscription">
                            <p>Career-guidance</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your E-mail" id="name" required data-validation-required-message="Please enter your name.">
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>FLICKR STREAM</span>
                            </h3>
                        </div>
                        
                        <div class="flickr-widget">
                            <ul class="flickr-list">
                                <li>
                                    <a href="../temp/asset/images/portfolio/img0.jpg" data-lightbox="picture-1">
                                        <img src="../temp/asset/images/portfolio/img0.jpg" alt="" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="../temp/asset/images/portfolio/im.jpg" data-lightbox="picture-2">
                                        <img src="../temp/asset/images/portfolio/im.jpg" alt="" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="../temp/asset/images/portfolio/engineering.jpg" data-lightbox="picture-3">
                                        <img src="../temp/asset/images/portfolio/engineering.jpg" alt="" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="../temp/asset/images/portfolio/enginering.jpg" data-lightbox="picture-4">
                                        <img src="../temp/asset/images/portfolio/enginering.jpg" alt="" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="../temp/asset/images/portfolio/Commerce.png" data-lightbox="picture-5">
                                        <img src="../temp/asset/images/portfolio/Commerce.png" alt="" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="../temp/asset/images/portfolio/Doctor.jpg" data-lightbox="picture-6">
                                        <img src="../temp/asset/images/portfolio/Doctor.jpg" alt="" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="../temp/asset/images/portfolio/lawyer.jpg" data-lightbox="picture-7">
                                        <img src="../temp/asset/images/portfolio/lawyer.jpg" alt="" class="img-responsive">
                                    </a>
                                </li>
                                <li>
                                    <a href="../temp/asset/images/portfolio/CA.jpg" data-lightbox="picture-8">
                                        <img src="../temp/asset/images/portfolio/CA.jpg" alt="" class="img-responsive">
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div><!--/.col-md-3 -->
                </div><!--/.row -->
            </div><!-- /.container -->
        </section>
        <!-- End Footer Section --> 
        <!-- Sulfur JS File -->
        <script src="../temp/asset/js/jquery-2.1.3.min.js"></script>
        <script src="../temp/asset/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="../temp/asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="../temp/asset/js/owl.carousel.min.js"></script>
        <script src="../temp/asset/js/jquery.appear.js"></script>
        <script src="../temp/asset/js/jquery.fitvids.js"></script>
        <script src="../temp/asset/js/jquery.nicescroll.min.js"></script>
        <script src="../temp/asset/js/lightbox.min.js"></script>
        <script src="../temp/asset/js/count-to.js"></script>
        <script src="../temp/asset/js/styleswitcher.js"></script>
        <!-- Google Map -->
        <script src="../temp/asset/js/map.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        
        <script src="asset/js/script.js"></script>
        <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>\
    
    </body>
</html>