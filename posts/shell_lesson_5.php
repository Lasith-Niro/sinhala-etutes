<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/16/16
 * Time: 7:05 PM
 */
$title="Shell Scripting (Lesson 5)"
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
                                <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 05.</font></span></h2>
                                <h3><span class="label label-success"> Variables </span>&nbsp; <span class="label label-success">User Input</span></h3><br/>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
                                <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>

                                    <img alt="" src="img/blog-2.jpg">
                                    <h3><center><span style='color: #c62828'>Variables</span></center></h3>
                                <br/><br/>
                                <p style="font-size: 20px"><font color="white">
                                        Variable එකක් කියන්නේ මොකද්ද කියලා පහල image එකෙන් තේරුම් ගන්න පුලුවන් නේද?
                                </font></p>
                                <center><img src="data/05/20160414_073858.jpg"/></center>
                                <h4><span style='color: #c62828'>Shell variables types</span></h4>
                                <pre style="color:'white'; font-size: 20px">
1) User defined variables - <br> මේව හදන්නේ userම තමයි. එයාට අවශ්‍ය වැඩ කර ගන්න මේවා භාවිතා කරනවා.
2) Environmental variables - <br> මේ variables හදල තියෙන්නේ shell developersල. ඒව English  capital letters වලින් භවිතා කරනවා.</pre>
<br/>
                                <h3><center><span class="fa fa-user" style='color: #c62828'>  User defined variables</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        හරියට python වලදි variable එකක් හදන විදියටම තමයි shell වලදිත් variables හදන්නේ. <b><u>වෙනසකට තියෙන්නේ සමාන ලකුන දෙපැත්තේ හිස් තැන් තියන්න බෑ...</b></u>
                                        </font></p>
                                <pre style='color:#d1d1d1;background:#000000;'>
name="sinhalae-tutes"
i=5
val=24.25</pre>
                                <h4><center><span style='color: #c62828'>මේ තියෙන්නේ Syntax එක</span></center></h4>
                               <center><img src="data/05/v.png"></center>

                                <h4><center><span class="fa fa-lock" style='color: #c62828'>  Rules</span></center></h4>

                                <pre style="color:'white'; font-size: 20px">
1) <b>Variable එකක අන්තර්ගත වෙන්න පුලුවන් අකුරු-ඉලක්කම්-underscore විතරයි.</b>
    Ex:
        name
        _var
        var5
        my_name
2) <b>Variables case-sensitive</b>
        ඒ කියන්නේ ඔයා simple වලින් variable එක හැදුවොත් නැවත භාවිතා කරන්න ඕනත් simple වලින්මයි. ඒක නිසා  name කියන එකයි Name කියන එකයි Shell ගනන් ගන්නේ  variable දෙකක් විදියටයි.
3) <b>සමාන ලකුන දෙපැත්තේ හිස් තැන් තියන්න බෑ.</b>
        මේ කතාව මම මුලින් කිව්වා නේද...
4) <b>හදන variables, එක terminal session එකකට විතරයි අදාල වෙන්නේ.</b>
        ඒ කියන්නේ එක terminal windowඑකකදි හදපු variable එකක් වෙනත් terminal එකක ඉඳන් හරි terminal  එක close කරල ආයේ open කරලා හරි access කරන්න බෑ.
5) <b>? හා * ලකුණු variable එකක තියෙන්න බෑ.</b>
</pre>

                                <p style="font-size: 20px"><font color="white">
                                        ඔන්න නීති රීතිත් කිව්ව එහෙනම්...
                                </font></p>

                                <h4><center><span style='color: #c62828'>Variable Accessing (භාවිතා කිරීම)</span></center></h4>
                                <p style="font-size: 20px"><font color="white">
                                        හරිම ලේසි වැඩක් කරන්න තියෙන්නේ. හදපු variable එකේ නම ඉස්සරහින් $ එක දාල අදාල වැඩේ කරගන්න.
                                        </font></p>

<!--                                Script 1-->
<!--                                Script 2-->

<hr>
                                <h3><center><span style='color: #c62828'>User Inputs</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        ඔයාලා Linux terminal එක use කරල තියෙනවා නම් අනිවාර්යයෙන් මේ දැන් මං කියන දේ ගැන අත්දැකීමක් ඇති. මොකද sudo command එකක් run කරන හැම වෙලාවකම ඔයාගෙන් password ඉල්ලනව නේ... ඒ කියන්නේ ඔයා Linux read command එක use කරලා...
                                        <br/>
                                        එහෙනම් අපි බලමු කොහොමද user input  එකක් ගන්නේ කියලා..
                                       <br/><br/>
                                        හරිම ලේසියි..
                                    </font></p>
                                <pre style='color:#d1d1d1;background:#000000;'>
<span style='color:#e66170; font-weight:bold; '>read </span> name</pre>
                                <p style="font-size: 20px"><font color="white">
                                        කියල terminal එකේ type කරල enter කරල බලන්න. courser එක blink වෙවී තියේවි, ඔයා input එකක් දෙනකල්.
                                       <br/> මේ shell script එක run කරල බලන්න.
                                        </font></p>
<!--                                     get and print name-->
<!--                                add numbers-->



                                <h3><center><span class="fa fa-tasks" style='color: #c62828'>  Task</span></center></h3>
                                <h4><span style='color: #c62828'> එකතු කිරීම හා අඩු කිරීම කල හැකි Application එකක් හදන්න. </span></h4>
                            </li>
                        </ul>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li class="pager-prev"><a href="shell_lesson_4.php">Older</a></li>
                            <li class="pager-next"><a href="shell_lesson_6.php">Newer</a></li>
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