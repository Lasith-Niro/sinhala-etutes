<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/17/16
 * Time: 7:37 PM
 */
$title="Shell Scripting (Lesson 8)"
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
                                <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 08.</font></span></h2>
                                <h3><span class="label label-success">Pipes</span> </h3><br/>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
                                <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>

                                <!--                                <img alt="" src="img/blog-2.jpg">-->
                                <h3><center><span style='color: #c62828'>Linux Pipes</span></center></h3>
                                <br/>
                                <p style="font-size: 20px"><font color="white">
                                        මේක pipe එකක් කිව්වට මේවායේ ගලා යන්නේ වතුර නැත්නම් ද්‍රව වර්ග එහෙම නෙමෙයි. මේවයේ ගමන් කරන්නේ command වල outputs.<br>
                                        pipes වල තියෙන විශේෂත්වය තමයි මුල් command එකේ output  එක කිසිම තැනක save නොවී (temporary වත් save නොවේ.) ඊලඟ command එකට input එකක් වීමයි.
                                    </font></p>
                                <center><img src="data/08/pipes_drow.png"/></center>
                                <p style="font-size: 20px"><font color="white">
                                        මේ රූපයේ පේනවා වගේ, Command1 එකේ output එක Command2 එකට input එකක් වෙනවා.
                                        </font></p>
                                <h4><span style='color: #c62828'>Example</span></h4>
                                <p style="font-size: 20px"><font color="white">
                                        1) history | more
                                        <img src="data/08/history_more.png"/>
                                        <br/>
                                        2) ls | more
                                        <img src="data/08/ls_more.png"/>
                                        <br/>
                                        විශේෂයෙන් ගොඩක් output තියෙන දේවල් බලන්න සහ sorting වැඩ වලට pipes භාවිතා කරනවා.
                                    </font></p>
                            </li>
                        </ul>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li class="pager-prev"><a href="shell_lesson_7.php">Older</a></li>
                            <li class="pager-next"><a href="shell_lesson_9.php">Newer</a></li>
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