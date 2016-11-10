<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/18/16
 * Time: 4:21 PM
 */
$title="Shell Scripting (Lesson 11)"
?>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <!--    <link rel="icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon">-->
    <!--    <link rel="shortcut icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon" />-->
    <meta name="description" content="Codester is a free responsive Bootstrap template by Dzyngiri">
    <meta name="keywords" content="free, template, bootstrap, responsive">
    <meta name="author" content="Inbetwin Networks">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>

    <!--    for header-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />
    <link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css" />
    <!-- Font Awesome -->
    <link href="../font/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>
</head>

<body>
<?php
include "../post_header.php";
?>


<br/>
<br/>
<br/>




<div class="bg-content">
    <!--  content  -->
    <div id="content"><div class="ic"></div>
        <div class="container">
            <div class="row">
                <article class="span8">
                    <div class="inner-1">
                        <ul class="list-blog">
                            <li>
                                <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 11.</font></span></h2>
                                <h3><span class="label label-success"> Functions </span>&nbsp;</h3><br/>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
                                <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>

                                <img alt="" src="img/blog-3.jpg">
                                <h3><center><span style='color: #c62828'>Functions</span></center></h3>
                                <br/><br/>
                                <p style="font-size: 20px"><font color="white">
                                        Programming වලදි භාවිතා කරන functions shell වලදි කොහොමද යොදා ගන්නේ කියල තමයි කියන්න යන්නේ.
                                    </font></p>
<!--                                Code here-->
                                <pre style='color:#d1d1d1;background:#000000;'><span style='color:#9999a9; '>#!</span><span style='color:#007997; '>/bin/bash</span><span style='color:#904050; '> </span>
hello<span style='color:#d2cd86; '>()</span>
<span style='color:#b060b0; '>{</span>
<span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"I'm in function hello()"</span>
<span style='color:#b060b0; '>}</span>

<span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Calling function hello()…"</span>
hello
<span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"You are now out of function hello()"</span>
</pre>


<!--                                use parameters with functions-->
                                <p style="font-size: 20px"><font color="white">Argument එක්ක Script එකක් Run කරන විදිය හිතල බලන්නකෝ.</font></p>

                            </li>
                        </ul>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li class="pager-prev"><a href="shell_lesson_10.php">Older</a></li>
                            <li class="pager-next"><a href="shell_lesson_12.php">Newer</a></li>
                        </ul>
                    </nav>
                </article>
                <br>
                <?php
                include "slide_bar.php";
                ?>
            </div>
        </div>
    </div>
</div>
</body>
<?php
include "../footer.php";
?>
<script src="../js/jq-2.1.4.js"></script>
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</html>