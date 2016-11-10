<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/18/16
 * Time: 4:47 PM
 */
$title="Shell Scripting (Lesson 12)"
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
                                <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 12.</font></span></h2>
                                <h3><span class="label label-success"> Debugging </span></h3><br/>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
                                <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>

<!--                                <img alt="" src="img/blog-2.jpg">-->
                                <h3><center><span style='color: #c62828'>Debug</span></center></h3>
                                <br/><br/>
                                <p style="font-size: 20px"><font color="white">
                                        Bash debugging සඳහා options දෙකක් ලබා දී තිබෙනවා. ඒ තමයි,
                                    </font></p>

                                <pre style="color:'white'; font-size: 20px">
1) <b>-x</b> : හැම line එකකදිම execute වෙන්න කලින් variables අදේශ කිරීම පෙන්වනවා.
2) <b>-v</b> : හැම line එකකදිම script එක පෙන්වනවා.</pre>
                                <br/>
                                <h4><span style='color: #c62828'>භාවිතය</span></h4>
<pre style="color:'white'; font-size: 20px">
    #!/bin/bash -x
    #!/bin/bash -v
    #!/bin/bash -xv</pre>
                                <p style="font-size: 20px"><font color="white">
                                        පහත example එක බලන්න..
                                        </font></p>


<pre style='color:#d1d1d1;background:#000000;'><span style='color:#9999a9; '>#!</span><span style='color:#007997; '>/bin/bash</span><span style='color:#904050; '> -v</span>
<span style='color:#904050; '>echo</span> <span style='color:#00dddd; '>-n</span> <span style='color:#00c4c4; '>"Enter a number : "</span><span style='color:#b060b0; '>;</span><span style='color:#904050; '>read</span> x
<span style='color:#904050; '>let</span> sum<span style='color:#d2cd86; '>=</span><span style='color:#008c00; '>0</span>
<span style='color:#e66170; font-weight:bold; '>for</span> <span style='color:#b060b0; '>(</span><span style='color:#b060b0; '>(</span> i<span style='color:#d2cd86; '>=</span><span style='color:#008c00; '>1</span> <span style='color:#b060b0; '>;</span> $i<span style='color:#e34adc; '>&lt;</span>$x <span style='color:#b060b0; '>;</span> i<span style='color:#d2cd86; '>=</span>$i+<span style='color:#008c00; '>1</span> <span style='color:#b060b0; '>)</span><span style='color:#b060b0; '>)</span><span style='color:#b060b0; '>;</span><span style='color:#e66170; font-weight:bold; '>do</span>
	<span style='color:#904050; '>let</span> <span style='color:#00c4c4; '>"sum = </span><span style='color:#00c4c4; '>$sum</span><span style='color:#00c4c4; '> + </span><span style='color:#00c4c4; '>$i</span><span style='color:#00c4c4; '>"</span>
<span style='color:#e66170; font-weight:bold; '>done</span>
<span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"The sum of first </span><span style='color:#00c4c4; '>$x</span><span style='color:#00c4c4; '> number is : </span><span style='color:#00c4c4; '>$sum</span><span style='color:#00c4c4; '>"</span>
</pre>
<!--                                example code-->


                                <img src="data/12/de-v.png"/>
                                <br/>
                                <img src="data/12/de-x.png"/>


                                <br/>
                                <br/>
                                <br/>
                                <hr>
                                <hr>
                                <hr>

                                <p style="font-size: 30px"><font color="red">
                                        එහෙනම් මෙතනින් Basic පාඩම් ටික ඉවරයි. අපි Advanced Shell scriptings ගැන ඊළඟ පාඩම් වලින් කතා කරමු...
                                    </font></p>


                            </li>
                        </ul>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li class="pager-prev"><a href="shell_lesson_11.php">Older</a></li>
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