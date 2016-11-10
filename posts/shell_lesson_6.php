<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/16/16
 * Time: 10:40 PM
 */
$title="Shell Scripting (Lesson 6)"
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
                                <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 06.</font></span></h2>
                                <h3><span class="label label-success"> Arguments </span> &nbsp; <span class="label label-success">alias</span> </h3><br/>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
                                <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>

                                <img alt="" src="img/blog-2.jpg">
                                <h3><center><span style='color: #c62828'>Argument</span></center></h3>
                                <br/><br/>
                                <p style="font-size: 20px"><font color="white">
                                        Shell Arguments = options + parameters
                                    </font></p>
                                <center><img src="data/06/args.1.png"/></center>

                                <h4><span style='color: #c62828'>Examples</span></h4>
                                <center><img src="data/06/arguments_tbl.png"/></center>
                                <p style="font-size: 20px"><font color="white">
                                        මං හිතනවා ඔයාලට arguments ගැන තේරෙන්න ඇති කියලා.
                                        <br/>
                                        අපි දැන් බලමු shell scripting වලදි කොහොමද arguments access  කරන්නේ කියලා.

                                <img src="data/06/arg1.png"/>
                                        මෙන්න Output එක...
                                <img src="data/06/arg2.png"/>

                                වැදගත්...
                                    </font></p>


                                <pre style="color:'white'; font-size: 20px">
1) $0 වලින් shell script එකේ නම පෙන්වනවා.
2) $* සහ $@ වලින් හැම argument  එකක් ම එකපාරට catch කරන්න පුලුවන්.</pre>
                                <br/>

                                <h3><center><span style='color: #c62828'>Alias</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        alias කියන්නේ command  එකකට අන්වර්ථ නාමයක්. ඒ කියන්නේ user ගෙ පහසුවට අවශ්‍ය command වලට ලේසියෙන් run කරන්න පුලුවන් විදියේ නමක් ආදේශ කරන එක.
                                    </font></p>
                                <h4><span style='color: #c62828'>Syntax</span></h4>
                                <center><img src="data/06/alias.png"/></center>
                                <h3><div class="label label-danger">මේකෙදිත් variable වලට value assign කරනව වගේ සමාන ලකුණ දෙපැත්තේ space තියන්නේ නම් බෑ...</div></h3>
                                <br/><h4><span style='color: #c62828'>Examples</span></h4><br>
                                <p style="font-size: 20px"><font color="white">
                                        1) alias l='ls -al'
                                        <br>
                                        2) alias notepad='gedit'
                                        <br><br/><br/>

                                        මුලින් variables ගැන කියද්දි කිව්වා වගේ මේ alias වැඩ කරන්නේ ඒක createකරපු session  එකට විතරයි. එහෙම නැතුව හැම වෙලාවෙම ඕනෙ නම් තව පොඩි වැඩක් කරන්න ඕන.

                                        <br/><br>දැන් අපි බලමු ඒක කොහොමද කරන්නේ කියලා.
                                    </font></p>
<pre style="color:'white'; font-size: 20px">
1. Terminal එක open කරන්න.  cd ~  ලෙස type කර enter කරන්න. දැන් ඔයා ඉන්නේ home directory එකේ.
2. දැන් nano .bashrc ලෙස type කර enter කරන්න.
3. මේ වගේ screen  එකක් ඔයාට ලැබෙයි.
<img src="data/06/bashrc.png">
4. ඒ file එකේ පහලටම ගිහින් ඔයාට ඕන alias එක type කරල ctrl+x press කරන්න. ඊටපස්සේ y type කරල enter කරන්න.
5. PC එක restart කරල alias එක try කරල බලන්න. වැඩ නේ...</pre><br/>
                                <h3><div class="label label-danger">
                                        .bashrc එකේ වෙන කිසිම වෙනසක් කරන්න නම් එපා...
                                    </div></h3>
                                <p style="font-size: 20px"><font color="white">
                                        මේ තියෙන්න මම ඒ වගේ හදා ගත්ත alias ටිකක්.<br/>
                                        <img src="data/06/aliase.png"/>
                                    </font></p>


                           </li>
                        </ul>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li class="pager-prev"><a href="shell_lesson_5.php">Older</a></li>
                            <li class="pager-next"><a href="shell_lesson_7.php">Newer</a></li>
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