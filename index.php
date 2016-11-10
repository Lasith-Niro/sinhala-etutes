<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/15/16
 * Time: 10:39 AM
 */
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>sinhala-etutes|It's about basics.</title>
    <meta name="description" content="">
    <meta name="author" content="L2N soft. Inc">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Font Awesome -->
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php

include "main_header.php";

?>
<!--/.header-->
<div id="#top"></div>
<section id="home">
    <div class="banner-container">
        <img src="images/banner-bg_new.jpg" alt="banner" />
        <div class="container banner-content">
            <div id="da-slider" class="da-slider">
                <div class="da-slide">
                    <h2>Shell Scripting</h2>
                    <p><a href="posts/shell_lesson_1.php" target="_blank"><font color="white">Basics</font></a></p>
                    <div class="da-img"></div>
                </div>
                <div class="da-slide">
                    <h2>Shell Scripts</h2>
                    <p><a href="posts/shell_lesson_2.php" target="_blank"><font color="white">Introduction</font></a></p>
                    <div class="da-img"></div>
                </div>
                <div class="da-slide">
                    <h2>Shell Scripting</h2>
                    <p><a href="posts/shell_lesson_7.php" target="_blank"><font color="white">Mathamatics operations</font></a></p>
                    <div class="da-img"></div>
                </div>
<!--                <nav class="da-arrows">-->
<!--                    <span class="da-arrows-prev"></span>-->
<!--                    <span class="da-arrows-next"></span>-->
<!--                </nav>-->
            </div>
        </div>
    </div>
</section>
<section id="introText">
    <div class="container">
        <div class="text-center">
            <h1>Sinhala-eTutes</h1>
            <p>It's all about basics.</p>
        </div>
    </div>

</section>
<section id="portfolio" class="page-section section appear clearfix secPad">
    <div class="container">

        <div class="heading text-center">
            <!-- Heading -->
            <h2>Posts</h2>
            <p>Click on images to get more details.</p>
        </div>

        <div class="row">
            <nav id="filter" class="col-md-12 text-center ">
                <ul>
                    <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".linux">Linux</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".software">Software</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".algorithms">Algorithms</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".database">Database</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".other">Other</a></li>
                </ul>
            </nav>
            <div class="col-md-12">
                <div class="row">
                    <div class="portfolio-items isotopeWrapper clearfix" id="3">

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_1.php" class="fancybox">
                                            <h5>Shell Scripting - Basics</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/cheat.png" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/cheat_sheet.php" class="fancybox">
                                            <h5>Shell scripting - Cheat Sheet</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_2.php" class="fancybox">
                                            <h5>Shell scripting - Start scripting</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_3.php" class="fancybox">
                                            <h5>Permissions</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem algorithms">
                            <div class="portfolio-item">
                                <img src="images/portfolio/img9.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="#" class="fancybox">
                                            <h5>Introduction to Algorithms</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_4.php" class="fancybox">
                                            <h5>Shell Commands</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_5.php" class="fancybox">
                                            <h5>Variables / User Inputs</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_6.php" class="fancybox">
                                            <h5>Arguments / Alias</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_7.php" class="fancybox">
                                            <h5>Quotes / Maths</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_8.php" class="fancybox">
                                            <h5>Pipes</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_9.php" class="fancybox">
                                            <h5>Conditional Statements / Expressions</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_10.php" class="fancybox">
                                            <h5>Iteration Statements</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_11.php" class="fancybox">
                                            <h5>Functions</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem linux">
                            <div class="portfolio-item">
                                <img src="images/portfolio/__imgn.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/shell_lesson_12.php" class="fancybox">
                                            <h5>Debug</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem algorithms">
                            <div class="portfolio-item">
                                <img src="images/portfolio/img9.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="#" class="fancybox">
                                            <h5>Sorting Algorithms</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem database">
                            <div class="portfolio-item">
                                <img src="images/portfolio/img1.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="posts/database_sql_joins.php" class="fancybox">
                                            <h5>SQL Joins</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!--services-->
<section id="services" class="secPad">
    <div class="container">
        <div class="heading text-center">
            <!-- Heading -->
            <h2>Our services</h2>
            <p>-----------------------------------------------------</p>
        </div>
        <div class="row">
            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"> <i class="fa fa-desktop"></i>
                    <a href="#"> <h3>Sinhala <span class="id-color">Dictionary</span></h3></a></div>
                <p>Sinhala online dictionary</p>
            </div>
            <!-- end: -->

            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"><i class="fa fa-flag"></i>
                    <a href="#"> <h3>StartUP <span class="id-color">Framework</span></h3></a></div>
                <p>This is a PHP framework developed specially for begginers.You can download and make changes as you wish</p>
            </div>
            <!-- end: -->
        </div>
    </div>
</section>


<!--Quote-->
<section id="quote" class="bg-parlex">
    <div class="parlex-back">
        <div class="container secPad text-center">
            <h2>If I asked people what they wanted, they would have said ‘Faster Horses’.</h2><h3>-Henry Ford</h3>
        </div>
        <!--/.container-->
    </div>
</section>


<!--<section id="aboutMe" class="secPad">-->
<!--    <div class="container">-->
<!--        <div class="heading text-center">-->
<!--            <h2>Hi..! I'm Lasith</h2>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->




<!--Experience-->
<!--    <section id="aboutMe" class="secPad">-->
<!--    	<div class="container">-->
<!--           <div class="heading text-center">-->
<!--<!--                 Heading-->
<!--                <h2>Professional Experience</h2>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>-->
<!--            </div>-->
<!--        <div id="timeline"><div class="row timeline-movement timeline-movement-top">-->
<!--        <div class="timeline-badge timeline-future-movement">-->
<!--            <a href="#">-->
<!--                <span class="glyphicon glyphicon-plus"></span>-->
<!--            </a>-->
<!--        </div>-->
<!--        <div class="timeline-badge timeline-filter-movement">-->
<!--            <a href="#">-->
<!--                <span class="glyphicon glyphicon-time"></span>-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--    <div class="row timeline-movement">-->
<!---->
<!--        <div class="timeline-badge">-->
<!--            <span class="timeline-balloon-date-day">Feb</span>-->
<!--            <span class="timeline-balloon-date-month">2014</span>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="col-sm-6  timeline-item">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-11">-->
<!--                    <div class="timeline-panel credits">-->
<!--                        <ul class="timeline-panel-ul">-->
<!--                            <li><span class="importo">Mussum ipsum cacilds</span></li>-->
<!--                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>-->
<!--                            <li><p><small class="text-muted"> 18/02/2014 - Present</small></p> </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-sm-6  timeline-item">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-offset-1 col-sm-11">-->
<!--                    <div class="timeline-panel debits">-->
<!--                        <ul class="timeline-panel-ul">-->
<!--                            <li><span class="importo">Mussum ipsum cacilds</span></li>-->
<!--                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>-->
<!--                            <li><p><small class="text-muted"> 18/02/2014 - Present</small></p> </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--<!--    due-->
<!---->
<!--    <div class="row timeline-movement">-->
<!---->
<!---->
<!--        <div class="timeline-badge">-->
<!--            <span class="timeline-balloon-date-day">Mar</span>-->
<!--            <span class="timeline-balloon-date-month">2013</span>-->
<!--        </div>-->
<!---->
<!--        <div class="col-sm-offset-6 col-sm-6  timeline-item">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-offset-1 col-sm-11">-->
<!--                    <div class="timeline-panel debits">-->
<!--                        <ul class="timeline-panel-ul">-->
<!--                            <li><span class="importo">Mussum ipsum cacilds</span></li>-->
<!--                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>-->
<!--                            <li><p><small class="text-muted"> 10/03/2013 - 18/02/2014</small></p> </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-sm-6  timeline-item">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-11">-->
<!--                    <div class="timeline-panel credits">-->
<!--                        <ul class="timeline-panel-ul">-->
<!--                            <li><span class="importo">Mussum ipsum cacilds</span></li>-->
<!--                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>-->
<!--                            <li><p><small class="text-muted"> 10/03/2013 - 18/02/2014</small></p> </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--    <div class="row timeline-movement">-->
<!---->
<!---->
<!--        <div class="timeline-badge">-->
<!--            <span class="timeline-balloon-date-day">Jan</span>-->
<!--            <span class="timeline-balloon-date-month">2010</span>-->
<!--        </div>-->
<!---->
<!--        <div class="col-sm-offset-6 col-sm-6  timeline-item">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-offset-1 col-sm-11">-->
<!--                    <div class="timeline-panel debits">-->
<!--                        <ul class="timeline-panel-ul">-->
<!--                            <li><span class="importo">Mussum ipsum cacilds</span></li>-->
<!--                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>-->
<!--                            <li><p><small class="text-muted"> 11/01/2010 - 10/03/2013</small></p> </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-sm-6  timeline-item">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-11">-->
<!--                    <div class="timeline-panel credits">-->
<!--                        <ul class="timeline-panel-ul">-->
<!--                            <li><span class="importo">Mussum ipsum cacilds</span></li>-->
<!--                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>-->
<!--                            <li><p><small class="text-muted"> 11/01/2010 - 10/03/2013</small></p> </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!--    </div>-->
<!--    </section>-->


<!--Portfolio-->


<!--Contact -->
<section id="contactUs" class="page-section secPad">
    <div class="container">

        <div class="row">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>Let's Keep In Touch!</h2>
                <p>Thank you for visiting out sinhala-etutes. If you would like to get into contact with us, please fill out the form below.</p>
            </div>
        </div>

        <div class="row mrgn30">

            <form method="post" action="" id="contactfrm" role="form">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="comments">Comments</label>
                        <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
                    </div>
                    <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
                    <div class="result"></div>
                </div>
            </form>
            <div class="col-sm-4">
                 <h4><span class="fa fa-map-marker"></span> Address:</h4>
                <address>
                    Lasith Niroshan<br>
                    No.219,<br>
                    Thellambura,Galle.
                    <br>
                </address>
                <h4><span class="fa fa-mobile-phone">&nbsp;</span>Phone:</h4>
                <address>
                    071-283-7662<br>
                </address>
            </div>
        </div>
    </div>
    <!--/.container-->
</section>
<?php
include "footer.php";
?>
</body>

<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
<!-- Slimscroll -->
<script src="../jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../js/demo.js"></script>
</html>

