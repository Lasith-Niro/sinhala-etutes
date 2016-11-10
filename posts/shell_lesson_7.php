<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/17/16
 * Time: 7:01 PM
 */
$title="Shell Scripting (Lesson 7)"
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
                                <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 07.</font></span></h2>
                                <h3><span class="label label-success"> Quotes </span> &nbsp; <span class="label label-success">Maths</span> </h3><br/>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
                                <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>

<!--                                <img alt="" src="img/blog-2.jpg">-->
                                <h3><center><span style='color: #c62828'>Quotes</span></center></h3>
                                <br/>
                                <img src="data/07/20160414_113409.jpg"/>

                                <p style="font-size: 20px"><font color="white">
                                        මෙන්න මේ script එක run කරල බලන්න.
                                    </font></p>

<!--                                Code here-->

                                <h3><center><span style='color: #c62828'>Maths</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        shell වලදි ගණිතමය සුළු කිරීම කරන්න තමයි දැන් අපි හදන්නේ. අපිට ක්‍රම දෙකක් භවිතා කරන්න පුලුවන්.

                                        <br/>මුල් ක්‍රමය තමයි <b><i>expr command</b></i> එක.
                                    </font></p>
                                <h4><span style='color: #c62828'>Syntax</span></h4>
                                <center><img src="data/07/expr_syn.png"/></center>
                                <p style="font-size: 20px"><font color="white">
                                        මෙතනදි නම් operator එක දෙපැත්තෙන් space තියන්නම ඕන හොදඳ...නැත්නම් වෙන දේත් try කරල බලන්නකෝ............
                                    </font></p>
                                <h4><span style='color: #c62828'>Example</span></h4>
                                <p style="font-size: 20px"><font color="white">
                                        1) expr 10 + 5<br>
                                        2) expr 20 – 1<br>
                                        3) echo `expr 5 * 10`<br>
                                    </font></p>
                                <h4><span style='color: #c62828'>ගණිත කර්ම</span></h4>



<pre style="color:'white'; font-size: 20px">
1) <b>එකතු කිරීම</b>
        expr 5 + 5
2) <b>අඩු කිරීම</b>
        expr 5 - 5
3) <b>බෙදීම</b>
        expr 5 / 5
4) <b>වැඩි කිරීම</b>
        <font color="red">මෙතනදි පොඩි වෙනසක් කරන්න වෙනවා...මොකද වැඩි කිරීමට යොදා ගන්න * ලකුණ , අපි මුලින් ඉගෙන ගත්ත wild-card එකක් නිසා එක පාරම use කරන්න බෑ.. ඒකනිසා shell එකට කියන්න ඕන මේ wild card * නෙමෙයි , අපිට ඕන වැඩි කරන්න කියල.ඒ සඳහා \* විදියට භාවිතා කරන්න ඕන.</font>
        expr 5 \* 2
5) <b>මොඩ් අගය</b>
        මොඩ් අගය කියන්නේ සංඛ්‍යාවක් තවත් සංඛ්‍යාවකින් බෙදූ විට ඉතිරි වෙන අගය.
        expr 5 % 2</pre>
                                <br/>
                                <p style="font-size: 20px"><font color="white">
                                        අනිත් ක්‍රමය තමයි  <b><i>bc</i></b> <br/>
                                        terminal එකේ bc කියල type කරල enter කරන්න. දැන් ඔයාට ඕන ගණිත කර්ම කරන්න.
                                        අවශ්‍ය වැඩේ කරගෙන quit type කරල enter කලාම program එක close වෙනවා.
                                        </font></p>

                                <img src="data/07/bc.png"/>
                            </li>
                        </ul>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li class="pager-prev"><a href="shell_lesson_6.php">Older</a></li>
                            <li class="pager-next"><a href="shell_lesson_8.php">Newer</a></li>
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