<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/16/16
 * Time: 5:44 PM
 */
$title="Shell Scripting (Lesson 4)"
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
                                <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 04.</font></span></h2>
                                <h3><span class="label label-success"> Shell Commands </span></h3><br/>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
                                <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>

                                    <img alt="" src="img/blog-3.jpg">
                                <br/>

                                <h3><center><span style='color: #c62828'>echo</span></center></h3>
                                <p style="font-size: 20px"><font color="white">අවශ්‍ය text ප්‍රින්ට් කර ගැනීමට භාවිතා කරයි.
                                </font></p>
                                <h4><span style='color: #c62828'>Syntax</span></h4>
                                <pre style='color:#d1d1d1;background:#000000;'>echo [SHORT-OPTION] [STRING]</pre>
                                <p style="font-size: 20px"><font color="white">echo සමග භාවිතා කල හැකි options.
                                        </font></p>
                                       <pre style="color:'white'; font-size: 20px">
1) -n : Output එක new lineඑකකට යවන්න එපා කියන option එක.
        Ex: echo -n "sinhala-etutes.xyz"
2) -e : Output එකේ \t , \b … වගේ special characters වැඩ කරන්න කියන option එක.
        Ex: echo -e "sinhala-etutes.w\bxyz"
            </pre>

                                <h4><span style='color: #c62828'>Special characters</span></h4>
                                <center><img src="data/04/echo.png"/></center>
                                        <br/>
                                        <br/>
                                <hr>
                                <h3><center><span style='color: #c62828'>cal</span></center></h3>
                                <p style="font-size: 20px"><font color="white">ලොකු දෙයක් නම් වෙන්නේ නෑ. හැබැයි Calendar එක පෙන්වනවා.</font></p>
                                <img src="data/04/cal.png"/>

                                <hr>
                                <h3><center><span style='color: #c62828'>cp</span></center></h3>
                                <p style="font-size: 20px"><font color="white">Files හා Folders copy කිරිමට භාවිතා කරයි. <br/>ctrl+c එක්ක ctrl+v වලින් ඔයාලා ලේසියෙන් කරන දේ terminal එකෙන් කරන්න ඕන නම් cp use කරන්න.</font></p>

                                <hr>
                                <h3><center><span style='color: #c62828'>whoami</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        දැනට log වී සිටින userid එක පෙන්වයි.</font></p>
                                <hr>

                                <h3><center><span style='color: #c62828'>whereis</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        Files වල path එක සොයා ගැනීමට යොදා ගනී.</font></p>
                                <hr>

                                <h3><center><span style='color: #c62828'>yes</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        Terminate කරන තුරු outputඑක print කරනු ලබයි.(infinite while loop)
                                  <br/>  Ex: yes "sinhalae-tutes"</font></p>
                                <hr>

                                <h3><center><span style='color: #c62828'>gzip</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        compress files <br> uncompress කිරිමට gunzip භාවිතා කරයි.

                                    </font></p>

                                <h3><center><span style='color: #c62828'><a href="cheat_sheet.php">Shell Cheat Sheet</a></span></center></h3>
                            </li>
                            </ul>
                        </div>
                    <nav>
                        <ul class="pager">
                            <li class="pager-prev"><a href="shell_lesson_3.php">Older</a></li>
                            <li class="pager-next"><a href="shell_lesson_5.php">Newer</a></li>
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