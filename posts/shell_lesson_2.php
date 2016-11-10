<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/16/16
 * Time: 8:27 AM
 */

$title="Shell Scripting (Lesson 2)"
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
    <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 02.</font></span></h2>
    <h3><span class="label label-success"> Shell Scripts </span></h3><br/>
    <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
    <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
    <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
    <div class="clear"></div>

<!--    <img alt="" src="img/blog-3.jpg">-->
<!--    <h3><center><span style='color: #c62828'>ls command</span></center></h3>-->
    <br/><br/>
    <p style="font-size: 20px"><font color="white">Shell script  එකක් කියන්නේ shell command කිහිපයක් එක file එකක ලියා තබන එක. මෙම script එක run කලාම ලියා තිබෙන command ඉහල සිට පහලට execute වීම සිදු වෙනවා. හරියට Java code එකක්,Python  code එකක් executeවෙනවා වගේ.
            <br>
            <h3> <center><span class="fa fa-question-circle" style='color: #c62828'> WHY shell scripts.</span></center></h3>
            <br/>
            <br/>
            <p style="font-size: 20px"><font color="white">අපි shell scripts ලියන්නේ හේතු කිහිපයක් නිසා. ඒ තමයි,</font></p>

            <pre style="color:'white'; font-size: 20px">
1) ක්‍රියවලි ස්වයංක්‍රිය කිරිම.
        Ex: software installations
2) User inputs ලබා ගෙන ඒවාට අනුව ක්‍රියා කිරීම.
        Ex: Process එකක් execute කිරිම හෝ නැවැත්වීම.
3) කාල කලමනකරණය
        Ex: Shell script එකක් run කරන අතර තුර තවත් වැඩ කිරීමට හැකිය.
            </pre>
            <br/>
            <br/>
            <br/>

            <h3> <center><span class="fa fa-flag-checkered" style='color: #c62828'> HOW to write shell scripts</span></center></h3>

            <p style="font-size: 20px"><font color="white">
                    Shell script ලිවීම සඳහා text editor එකක් අවශ්‍ය වෙනවා. ඒ සඳහා <i>gedit, geany, sublime </i> වගේ text processing software එකක් භාවිතා කල යුතු වෙනවා. nano  editor එක උනත් භවිතා කරන්න පුලුවන්.
                    Shell script ගැන කථා කරන විට file permission ගැන අනිවර්යයෙන් කථා කල යුතුම වෙනවා.  ඒ ගැන අපි වෙනම පාඩමකදි කථා කරමු.
                    ඒ වගේම shell script එක .sh කියන file type එකෙන් save කල යුතු වෙනවා.<br>
                    මම නම් භාවිතා කරන්නේ nano text editor එක. මොකද Terminal එකෙන් වැඩ කරන්න තියෙන ආසාව නිසා.
                    </font></p>
            <img src="data/02/nano.png"/>

            <h3><center><span class="fa fa-comment" style='color: #c62828'> Comments in shell script</span></center></h3>

            <p style="font-size: 20px"><font color="white">
                    Comments වලින් shell script එක පිලිඹඳව විස්තර කරන්න පුලුවන්. Comment කිරිම සඳහා # භාවිතා කරනවා.
                    <br>Ex: #this is comment
                </font></p>
            <pre style='color:#d1d1d1;background:#000000;'><span style='color:#9999a9; '>#!</span><span style='color:#007997; '>/bin/bash</span>
<span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Welcome"</span>
<span style='color:#9999a9; '>#welcome </span>
<span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"end of the program"</span>
</pre>
<br/>
<br/>
            <h3><center><span class="fa fa-linux" style='color: #c62828'> First shell script</span></center></h3>

            <p style="font-size: 20px"><font color="white">
                    මේ තියෙන commands copy කරල text file එකක paste කරලා first.sh නමින් save කරන්න.
                    </font></p>
            <pre style='color:#d1d1d1;background:#000000;'><span style='color:#9999a9; '>#!</span><span style='color:#007997; '>/bin/bash</span>
clear
<span style='color:#904050; '>echo</span> “<span style='color:#e34adc; '>&lt;</span>= CALANDER =<span style='color:#e34adc; '>></span>”
cal
<span style='color:#904050; '>exit</span> <span style='color:#008c00; '>0</span>
</pre>

            <p style="font-size: 20px"><font color="white">
                    දැන් file එක save කල තැනට  terminal එකෙන් directory එක change කරලා මේ command එක run  කරන්න.
                    </font></p>
            <pre style='color:#d1d1d1;background:#000000;'>sudo chmod +x first<span style='color:#e66170; font-weight:bold; '>.</span>sh
</pre>

            <p style="font-size: 20px"><font color="white">
                    එතකොට Administrator password එක type කරන්න කියයි. ඒකත් type කරලා enter කලම script එක execute කරන්න පුලුවන් තත්වයට එනවා. දැන් ./first.sh type කරල  file එක execute කරන්න.
                    <br/>
                    නැත්නම්  sh first.sh type කරල  file එක execute කරන්න.
                    </font></p>
</ul>
</div>
    <nav>
        <ul class="pager">
            <li class="pager-prev"><a href="shell_lesson_1.php">Older</a></li>
            <li class="pager-next"><a href="shell_lesson_3.php">Newer</a></li>
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