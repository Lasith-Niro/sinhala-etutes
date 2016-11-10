<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/15/16
 * Time: 5:06 PM
 */

$title="Linux cheat sheet"
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


    <script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>
    <!--    <script>-->
    <!--        jQuery(window).load(function() {-->
    <!--            $x = $(window).width();-->
    <!--            if($x > 1024)-->
    <!--            {-->
    <!--                jQuery("#content .row").preloader();}-->
    <!---->
    <!--            jQuery(".list-blog li:last-child").addClass("last");-->
    <!--            jQuery(".list li:last-child").addClass("last");-->
    <!---->
    <!---->
    <!--            jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});-->
    <!--        });-->
    <!---->
    <!--    </script>-->

    <!--[if lt IE 8]>
    <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
    <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <![endif]-->

    <!--Google analytics code-->
    <!--    <script type="text/javascript">-->
    <!--        var _gaq = _gaq || [];-->
    <!--        _gaq.push(['_setAccount', 'UA-29231762-1']);-->
    <!--        _gaq.push(['_setDomainName', 'dzyngiri.com']);-->
    <!--        _gaq.push(['_trackPageview']);-->
    <!---->
    <!--        (function() {-->
    <!--            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;-->
    <!--            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';-->
    <!--            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);-->
    <!--        })();-->
    <!--    </script>-->
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
                                <h3>Linux Cheat Sheet </h3>
                                <h3></h3>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
                                <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>
                                <img alt="" src="data/misc/cheatsheet.jpg">
                            </li>
                        </ul>
                    </div>
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
</html>