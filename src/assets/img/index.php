<?php

    require_once(dirname(__FILE__). "/vendor/autoload.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    require(dirname(__FILE__)."/vendor/phpmailer/phpmailer/src/Exception.php");
    require(dirname(__FILE__)."/vendor/phpmailer/phpmailer/src/PHPMailer.php");
    require(dirname(__FILE__)."/vendor/phpmailer/phpmailer/src/SMTP.php");

    if( isset($_POST['submit-email']) ){

        $subject_from = isset($_POST['subject'])?$_POST['subject']:"";
        $name_from =  isset($_POST['name'])?$_POST['name']:"Unknown";
        $email_from = isset($_POST['email'])?$_POST['email']:"unknown@mail.com";
        $message_from = isset($_POST['message'])?$_POST['message']:"No message"."</p>";

        $mail = new PHPMailer;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        //Enable SMTP debugging.
        $mail->SMTPDebug = 0;
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();
        //Set SMTP host name
        $mail->Host = "smtpout.secureserver.net";
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;
        //Provide username and password
        $mail->Username = "admin@carlosramirez.ca";
        $mail->Password = "Tibana@01";

        $mail->addAddress("eramirezcarlos@gmail.com", "Carlos A Ramirez");
        $mail->Port = 80;

        $mail->isHTML(true);

        $mail->From = isset($_POST['email'])?$_POST['email']:"unknown@mail.com";
        $mail->FromName = isset($_POST['name'])?$_POST['name']:"Unknown";
        $mail->Subject = "Portfolio - " .$subject_from." - " .$email_from . " - " . $name_from;


        $content = $message_from;

        $mail->Body =   $content;

        $mail->AltBody = $content;


        if(!$mail->send())
        {
            $_POST['email_error'] =  $mail->ErrorInfo;
        }
        else
        {
            $_POST['email_success'] = "Message has been sent successfully";
        }


    }


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Carlos Arturo Ramirez - Professional Portfolio">
    <meta name="keywords"
          content="portfolio, resume, cv,  personal, developer, fullstack developer, toronto, developer, clean, modern, pega developer, pega ux specialist">
    <meta name="author" content="Carlos Arturo Ramirez">

    <title>Carlos Arturo Ramirez - Professional Portfolio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!--== bootstrap ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!--== font-awesome ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!--== magnific-popup ==-->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">

    <!--== owl carousel ==-->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">

    <!--== animate css ==-->
    <link href="assets/css/animate.min.css" rel="stylesheet">

    <!--== style css ==-->
    <link href="style.css" rel="stylesheet">

    <!--== responsive css ==-->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!--== theme color css ==-->
    <link href="assets/theme-color/color_1.css" rel="stylesheet">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176528496-1"></script>
	<script>
  	  	window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  	  	gtag('config', 'UA-176528496-1');
	</script>
	<link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Roboto&display=swap" rel="stylesheet"> 	

    <!--== jQuery ==-->
    <script src="assets/js/jquery-2.1.4.min.js"></script>


    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--======= PRELOADER =======-->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!--===== HEADER AREA =====-->
<header class="navbar custom-navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="logo">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a class="theme-color" href="index.html">&lt;&gt;Imagine&lt;&sol;&gt;</i></a>
                    <!--== logo ==-->
                </div>
            </div>

            <div class="col-md-9 col-sm-8 col-xs-12">
                <nav class="main-menu">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav"> <!--== manin menu ==-->
                            <li class="active"><a class="smoth-scroll" href="#home">Home</a></li>
                            <li><a class="smoth-scroll" href="#about">About</a></li>
                            <li><a class="smoth-scroll" href="#services">service</a></li>
                            <li><a class="smoth-scroll" href="#work">work</a></li>
                            <li><a class="smoth-scroll" href="#testimonial">testimonial</a></li>
                            <li><a class="smoth-scroll" href="#contact">contact</a></li>
                            <!--
                            <li><a class="smoth-scroll" href="blog.html">blog</a></li>
                            -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div> <!--/.row-->
    </div> <!--/.container-->
</header>
<!--===== END HEADER AREA ======-->

<!--======= WELCOME AREA =======-->
<div id="home" class="welcome-area"
     style="background-image: url(assets/img/main-bg-glass.jpg); background-attachment: fixed;">
	 <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/ZwCOeHTvdeQ', containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:0.6, addRaster:true, quality:'highres'}"></div>
	 
    <div class="welcome-table">
        <div class="welcome-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="welcome-text">
                            <h1 class="theme-color">Carlos A. Ramirez</h1>
                            <div class="element"></div>

                        </div>
                        <div class="home-arrow">
                            <a href="#about" class="smoth-scroll"><i class="fa fa-angle-double-down"></i></a>
                        </div>
                    </div>
                </div> <!--/.row-->
            </div> <!--/.container-->
        </div>
    </div>


</div>
<!--===== END WELCOME AREA =====-->

<!--===== ABOUT AREA =====-->
<div id="about" class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="author-image">
                    <img src="assets/img/main_pic.jpg" alt="Carlos Arturo's Image"> <!--=== about image ===-->
                </div>
            </div>

            <div class="col-md-7">
                <div class="tab" role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist"> <!-- Nav tabs -->
                        <li role="presentation" class="active"><a href="#Section1" role="tab"
                                                                  data-toggle="tab">about</a></li>
                        <li role="presentation"><a href="#Section2" role="tab" data-toggle="tab">Skills</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="Section1"> <!-- Single Tab -->
                            <h4 class="about-heading">I'm a based in Toronto software Engineer with <span>Web</span> &
                                <span>Mobile</span> Experience</h4>
                            <p>Skilled in planning, designing, developing, implementing, debugging and trouble shooting
                                applications in various technologies such as LAMPStack PHP, NodeJS Isomorphic, Java </p>
                            <p>I possess certificates in Web Design, Mobile Development, Java Development, also
                                certified in PEGA CSA (Certified System Architect) and Oracle PL/SQL Certified
                                Professional</p>
                            <ul class="social-links"> <!--=== social-links ===-->
                                <!--
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                -->
                                <li><a href="https://twitter.com/eramirezcarlos?lang=en"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/carlos-arturo-ramirez-2800281a8/"><i class="fa fa-linkedin"></i></a></li>
                                <!--
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                -->
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section2"> <!-- Single Tab -->
                            <div class="single-skill"> <!-- Single Skill -->
                                <div class="skill-info">
                                    <h4>Web Development</h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 99%;"><span>99%</span></div>
                                </div>
                            </div>
                            <div class="single-skill"> <!-- Single Skill -->
                                <div class="skill-info">
                                    <h4>PHP LAMPStack (CodeIgniter, Laravel, Zend )</h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 99%;"><span>99%</span></div>
                                </div>
                            </div>
                            <div class="single-skill"> <!-- Single Skill -->
                                <div class="skill-info">
                                    <h4>UI/UX Development (Isomorphic, MEAN) </h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 95%;"><span>95%</span></div>
                                </div>
                            </div>
                            <div class="single-skill"> <!-- Single Skill -->
                                <div class="skill-info">
                                    <h4>UI/UX Design</h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 95%;"><span>95%</span></div>
                                </div>
                            </div>
                            <div class="single-skill"> <!-- Single Skill -->
                                <div class="skill-info">
                                    <h4>Bussiness Analisis </h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100" style="width:75%;"><span>75%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/.row-->
    </div> <!--/.container-->
</div>
<!--===== END ABOUT AREA =====-->

<!--===== SERVICES AREA =====-->
<div id="services" class="services-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>What I do</h2>
                </div>
            </div>
        </div> <!--/.row-->
        <div class="container">
            <div class="row row-eq-height">

                <div  class="col-md-4 col-sm-6"> <!-- Single Service -->
                    <div class="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="0.4s">
                        <div class="service-img" style="background-image: url(assets/img/service/web_development.png) "></div>
                        <h3>Web Development</h3>
                        <p>Built, created and maintained websites. It included aspects such as web design, web publishing,
                            web programming, and database management.</p>
                        <div class="service-overlay text-left">
                            <ul class="clearfix">
                                <li><i class="fa fa-long-arrow-right"></i> Web Template Implementations</li>
                                <li><i class="fa fa-long-arrow-right"></i> Database Architecture</li>
                                <li><i class="fa fa-long-arrow-right"></i> Custom Web Design</li>
                                <li><i class="fa fa-long-arrow-right"></i> Responsive Web Design</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div  class="col-md-4 col-sm-6"> <!-- Single Service -->
                    <div class="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="1.0s">
                        <div class="service-img" style="background-image: url(assets/img/service/php_image.png) "></div>
                        <h3>PHP Development</h3>
                        <p>Developed Applications using PHP for Industries such as communications, transportation, e-commerce and
                            recruiting.</p>
                        <div class="service-overlay text-left">
                            <ul class="clearfix">
                                <li><i class="fa fa-long-arrow-right"></i> LAMPStack/LEMPStack PHP</li>
                                <li><i class="fa fa-long-arrow-right"></i>PHP Frameworks (CodeIgniter, Laravel, Zend</li>
                                <li><i class="fa fa-long-arrow-right"></i> Webserver Administration</li>
                                <li><i class="fa fa-long-arrow-right"></i>Database Administration</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div  class="col-md-4 col-sm-6"> <!-- Single Service -->
                    <div class="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="1.4s">
                        <div class="service-img" style="background-image: url(assets/img/service/pega_image.png) "></div>
                        <h3>PEGA Development</h3>
                        <p>Used specifications to create draft case life cycles and user views along with webservice integrations.</p>
                        <div class="service-overlay text-left">
                            <ul class="clearfix">
                                <li><i class="fa fa-long-arrow-right"></i> User Interfase Forms</li>
                                <li><i class="fa fa-long-arrow-right"></i> Configured Automated Decisions</li>
                                <li><i class="fa fa-long-arrow-right"></i> Helped Draft User Interfaces</li>
                                <li><i class="fa fa-long-arrow-right"></i> Unit Testing of Cases</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div> <!--/.row-->
        </div>
        <div class="container ">
            <div class="row row-eq-height">

                <div class="col-md-4 col-sm-6"> <!-- Single Service -->
                    <div class="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="0.8s">
                        <div class="service-img" style="background-image: url(assets/img/service/app_development.png) "></div>
                        <h3>App development</h3>
                        <p>Developed Apps for mobile using Android and Apple iOS</p>
                        <div class="service-overlay text-left">
                            <ul class="clearfix">
                                <li><i class="fa fa-long-arrow-right"></i> Apple iOS Apps Development</li>
                                <li><i class="fa fa-long-arrow-right"></i> Android Apps Development</li>
                                <li><i class="fa fa-long-arrow-right"></i> Web Apps Development</li>
                                <li><i class="fa fa-long-arrow-right"></i> Hybrid Apps Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="1.2s">
                        <div class="service-img" style="background-image: url(assets/img/service/isomorphic_image.png) "></div>
                        <h3>Isomorphic and Javascript </h3>
                        <p>Developed applications using MEAN ( Angular ) and React.</p>
                        <div class="service-overlay text-left">
                            <ul class="clearfix">
                                <li><i class="fa fa-long-arrow-right"></i> Mongo, Express, Angular, NodeJS</li>
                                <li><i class="fa fa-long-arrow-right"></i> Javascript Web Service Integrations</li>
                                <li><i class="fa fa-long-arrow-right"></i> Isomorphic applications with Mern</li>
                                <li><i class="fa fa-long-arrow-right"></i> CSS Pre-processing with SaSS</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="0.6s">
                        <div class="service-img" style="background-image: url(assets/img/service/seo_image.png) "></div>
                        <h3>Seo Optimization</h3>
                        <p>Implemented techniques and tactics to increase the amount of visitors to my websites.</p>
                        <div class="service-overlay text-left">
                            <ul class="clearfix">
                                <li><i class="fa fa-long-arrow-right"></i> Best Web Practices Applied</li>
                                <li><i class="fa fa-long-arrow-right"></i> Accessible</li>
                                <li><i class="fa fa-long-arrow-right"></i> Well Customized pages</li>
                                <li><i class="fa fa-long-arrow-right"></i> Powerful Performance</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div> <!--/.container-->
</div>
<!--====== END SERVICES AREA ======-->


<!--====== WORK AREA ======-->
<div id="work" class="work-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>Recent Work.</h2>
                    <p>Here's some samples of my work</p>
                </div>
            </div>
        </div> <!--/.row-->

        <div class="row">
            <ul class="work-list text-center">
                <li class="filter" data-filter="all">all</li>
                <!--
                <li class="filter" data-filter=".medias">media</li>
                <li class="filter" data-filter=".illustration">illustration</li>
                <li class="filter" data-filter=".branding">Branding</li>
                -->
            </ul>
        </div> <!--/.row-->

        <div class="work-inner">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 mix medias "> <!-- Single Work -->
                    <div class="single-work">
                        <img src="assets/img/work/alto_interactive_archive.png" alt="">
                        <div class="item-hover">
                            <div class="work-table">
                                <div class="work-tablecell">
                                    <div class="hover-content">
                                        <h4>Alto Interactive</h4>
                                        <a href="#" class="work-link" data-toggle="modal"
                                           data-target="#projectModal1"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mix branding"> <!-- Single Work -->
                    <div class="single-work">
                        <img src="assets/img/work/el_negocio_archive.png" alt="">
                        <div class="item-hover">
                            <div class="work-table">
                                <div class="work-tablecell">
                                    <div class="hover-content">
                                        <h4>El Negocio</h4>
                                        <a href="#" class="work-link" data-toggle="modal"
                                           data-target="#projectModal2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mix illustration"> <!-- Single Work -->
                    <div class="single-work">
                        <img src="assets/img/work/koodo_mobile_archive.png" alt="">
                        <div class="item-hover">
                            <div class="work-table">
                                <div class="work-tablecell">
                                    <div class="hover-content">
                                        <h4>Koodo Mobile - SelfServ</h4>
                                        <a href="#" class="work-link" data-toggle="modal"
                                           data-target="#projectModal3"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-md-4 col-sm-6 col-xs-12 mix branding">
                    <div class="single-work">
                        <img src="assets/img/work/4.jpg" alt="">
                        <div class="item-hover">
                            <div class="work-table">
                                <div class="work-tablecell">
                                    <div class="hover-content">
                                        <h4>Project Name here</h4>
                                        <a href="#" class="work-link" data-toggle="modal"
                                           data-target="#projectModal4"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mix medias">
                    <div class="single-work">
                        <img src="assets/img/work/5.jpg" alt="">
                        <div class="item-hover">
                            <div class="work-table">
                                <div class="work-tablecell">
                                    <div class="hover-content">
                                        <h4>Project Name here</h4>
                                        <a href="#" class="work-link" data-toggle="modal"
                                           data-target="#projectModal5"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mix illustration">
                    <div class="single-work">
                        <img src="assets/img/work/6.jpg" alt="">
                        <div class="item-hover">
                            <div class="work-table">
                                <div class="work-tablecell">
                                    <div class="hover-content">
                                        <h4>Project Name here</h4>
                                        <a href="#" class="work-link" data-toggle="modal"
                                           data-target="#projectModal6"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <div class="col-md-12">
                    <!-- Work Modal One  -->
                    <div tabindex="0" class="modal fade" id="projectModal1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Project Overview</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/img/work/alto_interactive_archive.png" alt="work-1">
                                    <h3>Alto Interactive</h3>
                                    <p>It is a non-specificifed topic blog that allows the users to submit posts of any kind. It also has the fuctionality of
                                    allowing the users to register themselves, search, browse among content. It includes samples of google maps implementation and some other Mashups.</p>
                                    <ul class="list-unstyled project-list">
                                        <li><label>Client : </label> 2348148 Ontario</li>
                                        <li><label>Category :</label> Web Development</li>
                                        <li><label>Date : </label> 12 october 2017</li>
                                        <li><label>Project Url : </label> <a href="#">www.altointeractive.com</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- End Work Modal  -->

                    <!-- Work Modal Two  -->
                    <div tabindex="0" class="modal fade" id="projectModal2">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Project Overview</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/img/work/el_negocio_archive.png" alt="work-1">
                                    <h3>El Negocio</h3>
                                    <p>It is the e-commerce website of the Toronto based Artist Jaime Leon, it was developed using
                                        PHP CodeIgniter it is integrated with PayPal to process e-payments.</p>
                                    <ul class="list-unstyled project-list">
                                        <li><label>Client : </label> Jaime Leon</li>
                                        <li><label>Category :</label> Web Development</li>
                                        <li><label>Date : </label> 12 october 2017</li>
                                        <li><label>Project Url : </label> <a href="#">www.elnegocio.ca</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- End Work Modal  -->

                    <!-- Work Modal Three  -->
                    <div tabindex="0" class="modal fade" id="projectModal3">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Project Overview</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/img/work/koodo_mobile_archive.png" alt="work-1">
                                    <h3>Koodo Mobile - SelfServ</h3>
                                    <p>This website offers the cellphone subscriber the chance to maintain their profiles, make payments and make some other account transactions.</p>
                                    <ul class="list-unstyled project-list">
                                        <li><label>Client : </label> Koodo Mobile</li>
                                        <li><label>Category :</label> Web Development/Maintenance</li>
                                        <li><label>Date : </label> 12 october 2017</li>
                                        <li><label>Project Url : </label> <a href="http://www.koodomobile.com">http://www.koodomobile.com</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- End Work Modal  -->

                    <!-- Work Modal Four  -->
                    <div tabindex="0" class="modal fade" id="projectModal4">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Project Overview</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/img/work/4.jpg" alt="work-1">
                                    <h3>Project Name Here</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor massa
                                        sed velit egestas vulputate. Morbi turpis tellus, porta in cursus at, finibus
                                        vitae dui. Nam mollis quam a sem iaculis euismod. Pellentesque habitant morbi
                                        tristique senectus et netus et malesuada fames ac turpis egestas. Sed ac
                                        pharetra justo, vel dapibus tortor.</p>
                                    <ul class="list-unstyled project-list">
                                        <li><label>Client : </label> John Doe</li>
                                        <li><label>Category :</label> Web Design</li>
                                        <li><label>Date : </label> 12 october 2017</li>
                                        <li><label>Project Url : </label> <a href="#">www.example.net</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- End Work Modal  -->

                    <!-- Work Modal Five  -->
                    <div tabindex="0" class="modal fade" id="projectModal5">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Project Overview</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/img/work/5.jpg" alt="work-1">
                                    <h3>Project Name Here</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor massa
                                        sed velit egestas vulputate. Morbi turpis tellus, porta in cursus at, finibus
                                        vitae dui. Nam mollis quam a sem iaculis euismod. Pellentesque habitant morbi
                                        tristique senectus et netus et malesuada fames ac turpis egestas. Sed ac
                                        pharetra justo, vel dapibus tortor.</p>
                                    <ul class="list-unstyled project-list">
                                        <li><label>Client : </label> John Doe</li>
                                        <li><label>Category :</label> Web Design</li>
                                        <li><label>Date : </label> 12 october 2017</li>
                                        <li><label>Project Url : </label> <a href="#">www.example.net</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- End Work Modal  -->

                    <!-- Work Modal Six  -->
                    <div tabindex="0" class="modal fade" id="projectModal6">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Project Overview</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/img/work/6.jpg" alt="work-1">
                                    <h3>Project Name Here</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor massa
                                        sed velit egestas vulputate. Morbi turpis tellus, porta in cursus at, finibus
                                        vitae dui. Nam mollis quam a sem iaculis euismod. Pellentesque habitant morbi
                                        tristique senectus et netus et malesuada fames ac turpis egestas. Sed ac
                                        pharetra justo, vel dapibus tortor.</p>
                                    <ul class="list-unstyled project-list">
                                        <li><label>Client : </label> John Doe</li>
                                        <li><label>Category :</label> Web Design</li>
                                        <li><label>Date : </label> 12 october 2017</li>
                                        <li><label>Project Url : </label> <a href="#">www.example.net</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- End Work Modal  -->

                </div>
            </div> <!--/.row-->
        </div>
    </div><!--/.container-->
</div>
<!--====== END WORK AREA ======-->

<!--===== STAT AREA ======-->
<div class="stat-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-stat">
                    <div class="inner">
                        <div class="stat-icon-box">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="stat-content">
                            <h2 class="counter">40</h2>
                            <h3>Happy Clients</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-stat">
                    <div class="inner">
                        <div class="stat-icon-box">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="stat-content">
                            <h2 class="counter">10</h2>
                            <h3>YEARS OF EXPERIENCE</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-stat">
                    <div class="inner">
                        <div class="stat-icon-box">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <div class="stat-content">
                            <h2 class="counter">256</h2>
                            <h3>Projects completed</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-stat">
                    <div class="inner">
                        <div class="stat-icon-box">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="stat-content">
                            <h2 class="counter">6</h2>
                            <h3>Award Won</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/.row -->
    </div> <!--/.container -->
</div>
<!--===== END STAT AREA ======-->

<!--==== TESTIMONIAL AREA =====-->
<div id="testimonial" class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>What people say.</h2>
                </div>
            </div>
        </div> <!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-list">
                    <div class="single-testimonial"> <!-- Single testimonial  -->
                        <div class="t-author">
                            <div class="t-image">
                                <img src="assets/img/testimonial/Ahmad_Al_Tamimi.png" alt="">
                            </div>
                            <div class="t-name">
                                <h4>Ahmad Al-Tamimi</h4>
                                Cloud & Microservices Architect
                            </div>
                        </div>
                        <div class="t-content">
                            <p>I have enjoyed working with Carlos. He is one of the best people I have brought to 3mushrooms Corp as he was highly dedicated and excellent in following commands and processes. Carlos brought fantastic results and values to 3mushrooms in the production sector of PHP web development, and I would love to work with him again. Great guy. Thank you Carlos for all of your efforts and great work..</p>
                        </div>
                    </div>
                    <div class="single-testimonial"> <!-- Single testimonial  -->
                        <div class="t-author">
                            <div class="t-image">
                                <img src="assets/img/testimonial/avatar_image.png" alt="">
                            </div>
                            <div class="t-name">
                                <h4>Peter Garcia</h4>
                                Information Technology Professional
                            </div>
                        </div>
                        <div class="t-content">
                            <p>Carlos Ramirez worked under my direction for approximately 16 months as a Programmer/Developer on an integrated recruiting and employee management platform processing 1300 applications per month. His expertise in the LAMP Stack framework was extremely valuable in the development of a stable feature-rich system. His responsibility included building the enterprise application integration and B2B connectivity.</p>

                            <p>As part of Carlos’ role he communicated frequently with the operational managers and users in order to understand their IT requirements and resolve technical issues. His interaction with peers is highly commendable. Notable also is his decency and polite disposition.</p>

                            <p>I recommend Carlos as a strong candidate for a similar technical position in any other organization and would readily hire him should the circumstance arise in the future..</p>
                        </div>
                    </div>
                    <div class="single-testimonial"> <!-- Single testimonial  -->
                        <div class="t-author">
                            <div class="t-image">
                                <img src="assets/img/testimonial/Yazmin-Lombana.png" alt="">
                            </div>
                            <div class="t-name">
                                <h4>Yazmin Lombana</h4>
                                Manager at Imperial Plaza Mall
                            </div>
                        </div>
                        <div class="t-content">
                            <p>I have worked with Carlos in the past in a Bussiness joint venture. It was a great experience with lots of professional achievements</p>
                            <p>The control of processes software was a successful implementation, I recommend Carlos for his outstanding technical expertise and commitment</p>
                        </div>
                    </div>
                    <!--
                    <div class="single-testimonial">
                        <div class="t-author">
                            <div class="t-image">
                                <img src="assets/img/testimonial/4.jpg" alt="">
                            </div>
                            <div class="t-name">
                                <h4>PAUL FLAVIUS</h4>
                                Graphic Designer
                            </div>
                        </div>
                        <div class="t-content">
                            <p>Lorem ipsum dolor sit amet, consectetuer adiping elit, sed diam nonummy nibh euismod
                                tinunt ut laoreet dolore magna aliquam.</p>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div> <!-- / row -->
    </div> <!--/.container-->
</div>
<!--==== END TESTIMONIAL AREA =====-->

<!--==== CTA AREA =====-->
<div class="cta-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="wow fadeInLeft" data-wow-delay="0.4s">Do you have any project?</p>
                <h2 class="wow fadeInRight" data-wow-delay="0.8s">Let's work together indeed!</h2>
                <a href="#contact" class="smoth-scroll wow fadeInDown" data-wow-delay="1.2s">get quotes</a>
            </div>
        </div>
    </div>
</div>
<!--==== END CTA AREA =====-->

<!--====== CONTACT INFO AREA ======-->
<div id="contact" class="contact-info-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>contact me.</h2>
                    <p>Feel Free to Contact</p>
                </div>
            </div>
        </div>
        <?php
            if (isset( $_POST['email_success']) ){
                include('success.php');
            }else if( isset($_POST['email_error']) ){
                include('error.php');
            }
        ?>

        <div class="row">
            <div class="col-md-7">
                <div class="contact-form">
                    <form id="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!-- Start Contact From -->
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-user-o"></i>
                                        <input id="form_name" type="text" name="name" class="form-control"
                                               placeholder="Name*" required="required" data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-envelope-o"></i>
                                        <input id="form_email" type="email" name="email" class="form-control"
                                               placeholder="Email*" required="required"
                                               data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <i class="fa fa-question-circle-o"></i>
                                        <input id="form_subject" type="text" name="subject" class="form-control"
                                               placeholder="Subject*" required="required"
                                               data-error="Subject is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <i class="fa fa-comment-o"></i>
                                        <textarea id="form_message" name="message" class="form-control"
                                                  placeholder="Message*" rows="7" required="required"
                                                  data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-effect btn-sent" value="Send message" name="submit-email">
                                </div>
                            </div>
                        </div>
                    </form> <!-- End Contact From -->
                </div>
            </div>

            <div class="col-md-5">
                <div class="single-info"> <!-- Single Info -->
                    <div class="info-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="info-content">
                        <h5>my location:</h5>
                        <p>Concorde Place, Toronto<br> Canada</p>
                    </div>
                </div>
                <div class="single-info"> <!-- Single Info -->
                    <div class="info-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h5>Phone number:</h5>
                        <p>(+1) 312 788 7680</p>
                    </div>
                </div>
                <div class="single-info"> <!-- Single Info -->
                    <div class="info-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h5>email address:</h5>
                        <p>eramirezcarlos@gmail.com</p>
                    </div>
                </div>
            </div>
        </div> <!--/.row-->
    </div> <!--/.container-->
</div>
<!--===== END CONTACT INFO AREA ======-->

<!--====== FOOTER AREA ======-->
<footer class="footer">
    <div class="container">
        <div class="row wow zoomIn" data-wow-delay="0.4s">
            <div class="col-md-12 text-center">
                <p>&copy;<script type="text/JavaScript"> var theDate = new Date();
                document.write(theDate.getFullYear()) </script>
                    <strong>Carlos Ramirez</strong>. All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!--====== END FOOTER AREA ======-->


<!--== plugins js ==-->
<script src="assets/js/plugins.js"></script>

<!--== typed js ==-->
<script src="assets/js/typed.js"></script>

<!--== stellar js ==-->
<script src="assets/js/jquery.stellar.min.js"></script>

<!--== counterup js ==-->
<script src="assets/js/jquery.counterup.min.js"></script>

<!--== waypoints js ==-->
<script src="assets/js/jquery.waypoints.min.js"></script>

<!--== wow js ==-->
<script src="assets/js/wow.min.js"></script>

<!--== validator js ==-->
<script src="assets/js/validator.min.js"></script>

<!--== mixitup js ==-->
<script src="assets/js/jquery.mixitup.js"></script>

<!--== contact js ==-->
<script src="assets/js/contact.js"></script>

<!--== YTPlayer js ==-->
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
<script>
        jQuery(function(){
            jQuery("#bgndVideo").YTPlayer();
        });
</script>

<!--== main js ==-->
<script src="assets/js/main.js"></script>
</body>
</html>
