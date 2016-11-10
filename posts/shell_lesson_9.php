<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/17/16
 * Time: 7:51 PM
 */
$title="Shell Scripting (Lesson 9)"
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
                                <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 09.</font></span></h2>
                                <h3><span class="label label-success">Conditional Statements</span>&nbsp; <span class="label label-success">Expressions</span></h3><br/>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
                                <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>
                                <p style="font-size: 20px"><font color="white">
                                        <br/>
                                        මේකෙදි අපි කතා කරන්නේ  if-else, case වගේ තීරණ ගැනීම්  ගැනයි.
                                        </font></p>
                                <!--                                <img alt="" src="img/blog-2.jpg">-->

                                <br/>

                                <h4><span style='color: #c62828'>Syntax</span></h4>
<!--                                syntax here-->
                                <pre style='color:#d1d1d1;background:#000000;'><span style='color:#e66170; font-weight:bold; '>if</span> <span style='color:#d2cd86; '>[</span> expression <span style='color:#d2cd86; '>]</span><span style='color:#b060b0; '>;</span>
<span style='color:#e66170; font-weight:bold; '>then</span>
	Statements
<span style='color:#e66170; font-weight:bold; '>else</span>
	Statement
<span style='color:#e66170; font-weight:bold; '>fi</span>
</pre>
                                ඒකත් එක්කම මේ Example එක බලන්නකෝ..<br/>
<pre style='color:#d1d1d1;background:#000000;'><span style='color:#9999a9; '>#!</span><span style='color:#007997; '>/bin/bash</span>
<span style='color:#904050; '>echo</span> <span style='color:#00dddd; '>-n</span> <span style='color:#00c4c4; '>"Enter a number 1 &lt; x &lt; 10: "</span>
<span style='color:#904050; '>read</span> num
<span style='color:#e66170; font-weight:bold; '>if</span> <span style='color:#d2cd86; '>[</span> <span style='color:#00c4c4; '>"</span><span style='color:#00c4c4; '>$num</span><span style='color:#00c4c4; '>"</span> <span style='color:#00dddd; '>-lt</span> <span style='color:#008c00; '>10</span> <span style='color:#d2cd86; '>]</span><span style='color:#b060b0; '>;</span> <span style='color:#e66170; font-weight:bold; '>then</span>
	<span style='color:#e66170; font-weight:bold; '>if</span> <span style='color:#d2cd86; '>[</span> <span style='color:#00c4c4; '>"</span><span style='color:#00c4c4; '>$num</span><span style='color:#00c4c4; '>"</span> <span style='color:#00dddd; '>-gt</span> <span style='color:#008c00; '>1</span> <span style='color:#d2cd86; '>]</span><span style='color:#b060b0; '>;</span> <span style='color:#e66170; font-weight:bold; '>then</span>
		<span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"</span><span style='color:#00c4c4; '>$num</span><span style='color:#00c4c4; '>*</span><span style='color:#00c4c4; '>$num</span><span style='color:#00c4c4; '>=$((</span><span style='color:#00c4c4; '>$num</span><span style='color:#00c4c4; '>*</span><span style='color:#00c4c4; '>$num</span><span style='color:#00c4c4; '>))"</span>
	<span style='color:#e66170; font-weight:bold; '>else</span>
		<span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Wrong insertion!"</span>
	<span style='color:#e66170; font-weight:bold; '>fi</span>
<span style='color:#e66170; font-weight:bold; '>else</span>
	<span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Wrong insertion!"</span>
<span style='color:#e66170; font-weight:bold; '>fi</span>
</pre>

                                <p style="font-size: 20px"><font color="white">
                                        මෙහි else කොටස අනිවාර්යයෙන්ම තිබිය යුතුවෙයි.
                                        <br>මතක ඇතුව [ වලට පසුව හා ] වලට පෙර space තිබිය යුතුමයි.
                                        </font></p>
                                <h3><center><span style='color: #c62828'>if-elif-else</span></center></h3>
<!--                                Syntax here-->
                                <pre style='color:#d1d1d1;background:#000000;'><span style='color:#e66170; font-weight:bold; '>if</span> <span style='color:#d2cd86; '>[</span> expression <span style='color:#d2cd86; '>]</span><span style='color:#b060b0; '>;</span>
<span style='color:#e66170; font-weight:bold; '>then</span>
	Statements
<span style='color:#e66170; font-weight:bold; '>elif</span> <span style='color:#d2cd86; '>[</span> expression <span style='color:#d2cd86; '>]</span><span style='color:#b060b0; '>;</span>
<span style='color:#e66170; font-weight:bold; '>then</span>
	Statement
<span style='color:#e66170; font-weight:bold; '>else</span>
	Statement
<span style='color:#e66170; font-weight:bold; '>fi</span>
</pre>
                                <h3><center><span style='color: #c62828'>case</span></center></h3>
<pre style='color:#d1d1d1;background:#000000;'><span style='color:#e66170; font-weight:bold; '>case</span> $var <span style='color:#e66170; font-weight:bold; '>in</span>
	val1<span style='color:#e34adc; '>)</span>
		statements<span style='color:#e34adc; '>;;</span>
	val2<span style='color:#e34adc; '>)</span>
		statements<span style='color:#e34adc; '>;;</span>
	<span style='color:#d2cd86; '>*</span><span style='color:#e34adc; '>)</span>
		statements<span style='color:#e34adc; '>;;</span>
<span style='color:#e66170; font-weight:bold; '>esac</span>
</pre>
                                මේ Example එක බලන්නකෝ.
<pre style='color:#d1d1d1;background:#000000;'><span style='color:#9999a9; '>#!</span><span style='color:#007997; '>/bin/bash</span>

<span style='color:#904050; '>echo</span> <span style='color:#00dddd; '>-n</span> <span style='color:#00c4c4; '>"Enter a number 1 &lt; x &lt; 10: "</span>
<span style='color:#904050; '>read</span> x
<span style='color:#e66170; font-weight:bold; '>case</span> $x <span style='color:#e66170; font-weight:bold; '>in</span>
	<span style='color:#008c00; '>1</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Value of x is 1."</span><span style='color:#e34adc; '>;;</span>
	<span style='color:#008c00; '>2</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Value of x is 2."</span><span style='color:#e34adc; '>;;</span>
	<span style='color:#008c00; '>3</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Value of x is 3."</span><span style='color:#e34adc; '>;;</span>
	<span style='color:#008c00; '>4</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Value of x is 4."</span><span style='color:#e34adc; '>;;</span>
	<span style='color:#008c00; '>5</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Value of x is 5."</span><span style='color:#e34adc; '>;;</span>
	<span style='color:#008c00; '>6</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Value of x is 6."</span><span style='color:#e34adc; '>;;</span>
	<span style='color:#008c00; '>7</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Value of x is 7."</span><span style='color:#e34adc; '>;;</span>
	<span style='color:#008c00; '>8</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Value of x is 8."</span><span style='color:#e34adc; '>;;</span>
	<span style='color:#008c00; '>9</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Value of x is 9."</span><span style='color:#e34adc; '>;;</span>
	<span style='color:#008c00; '>0</span> <span style='color:#e34adc; '>|</span> <span style='color:#008c00; '>10</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Wrong number."</span><span style='color:#e34adc; '>;;</span>
	<span style='color:#d2cd86; '>*</span><span style='color:#e34adc; '>)</span> <span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Unrecognized value."</span><span style='color:#e34adc; '>;;</span>
<span style='color:#e66170; font-weight:bold; '>esac</span>
</pre>
                                <h3><span style='color: #c62828'><font color="red">අතිවිශේෂ....</font></span></h3>
<pre style="color:'white'; font-size: 20px">
1. $var කියන එක expression එකක් වෙන්නත් පුලුවන්, එහෙම        නැත්නම් මොකක් හරි value එකක් වෙන්නත් පුලුවන්.
2. හැම statement  එකම  semicolonදෙකකින් අවසන් වෙන්න ඕන.
3. *) එක හරියට Java වල default statement වගේ. කිසිම check     එකකට නොගැලපෙන එකට හරි යන්න තමයි මේක ලියන්නේ.</pre>

                                <br/>
                                <hr>
                                <h3><span style='color: #c62828'>Expressions</span></h3>
                                <table cellpadding="4" cellspacing="0" width="100%">
                                <colgroup><col width="74*">
                                    <col width="26*">
                                    <col width="79*">
                                    <col width="77*">
                                </colgroup><tbody><tr valign="top">
                                    <td rowspan="5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="29%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3"><font color="#000000"><span style="text-decoration: none"><span style="font-weight: normal">String
			comparison - </span></span></font></font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">වචන
			සංසන්දනය</span></font></font></p>
                                    </td>
                                    <td colspan="2" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="41%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">මේ
			ක්‍රමයේදී අපිට වචන</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">(Strings)
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">සංසන්දනය
			කිරීමක් තමයි කරන්නේ</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                        <p align="left"><br>
                                        </p>
                                    </td>
                                    <td rowspan="5" style="border: 1px solid #000000; padding: 0.04in" width="30%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    s1 = s2 ]  =&gt;	(true if s1 same as s2, else false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    s1 != s2 ] =&gt;	(true if s1 not same as s2, else false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    s1 ]          =&gt;		(true if s1 is not empty, else false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    -n s1 ]     =&gt;	(true if s1 has a length greater then 0, else
                                                    false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    -z s2 ]    =&gt;	(true if s2 has a length of 0, otherwise false)</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">=</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">සමාන
			භාවය සංසන්දනය කරනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">!=</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">අසමාන
			භාවය සංසන්දනය කරනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-n</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">ස්ට්‍රින්ග්
			එකේ දිග</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">(length)
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">බිංදුවට
			වඩා විශාලද කියා බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-z</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">ස්ට්‍රින්ග්
			එකේ දිග</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">(length)
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">බිංදුවට
			සමානද කියා බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td rowspan="7" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" height="3" width="29%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3"><font color="#000000"><span style="text-decoration: none"><span style="font-weight: normal">Numeric
			comparison  - </span></span></font></font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">සංඛ්‍යාත්මක
			සංසන්දනය</span></font></font></p>
                                    </td>
                                    <td colspan="2" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="41%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">සංඛ්‍යා
			සංසන්දනය කිරීම මෙහිදී සිදු
			කරනු ලබයි</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                        <p align="left"><br>
                                        </p>
                                    </td>
                                    <td rowspan="7" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0.04in" width="30%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    n1 -eq n2 ]=&gt;(true if n1 same as n2, else false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    n1 -ge n2 ]=&gt;(true if n1greater then or equal to n2, else
                                                    false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    n1 -le n2 ]=&gt;(true if n1 less then or equal to n2, else false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    n1 -ne n2 ]=&gt;(true if n1 is not same as n2, else false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    n1 -gt n2 ]=&gt;(true if n1 greater then n2, else false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    n1 -lt n2 ]=&gt;(true if n1 less then n2, else false)</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-eq</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">සංඛ්‍යා
			දෙක සමානද කියා බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-ge</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එක්
			සංඛ්‍යාවක් අනෙකට වඩා විශාල
			හෝ සමානද කියා බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-le</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එක්
			සංඛ්‍යාවක් අනෙකට වඩා කුඩා
			හෝ සමානද කියා බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-ne</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">සංඛ්‍යා
			දෙක අසමානද කියා බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-gt</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එක්
			සංඛ්‍යාවක් අනෙකට වඩා විශාලද
			කියා බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-lt</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එක්
			සංඛ්‍යාවක් අනෙකට වඩා කුඩාද
			කියා බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td rowspan="8" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" height="1" width="29%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3"><font color="#000000"><span style="text-decoration: none"><span style="font-weight: normal">File
			operators - </span></span></font>File </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">සංසන්දනය</span></font></font></p>
                                    </td>
                                    <td colspan="2" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="41%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">Files
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">සඳහා
			කල හැකි සංසන්දන මේ යටතට
			වැටේ</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                        <p align="left"><br>
                                        </p>
                                    </td>
                                    <td rowspan="8" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0.04in" width="30%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    -d fname ]=&gt;(true if fname is a directory, otherwise false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    -f fname ]=&gt;(true if fname is a file, otherwise false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    -e fname ]=&gt;(true if fname exists, otherwise false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    -s fname ]=&gt;(true if fname length is greater then 0, else
                                                    false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    -r fname ]=&gt;(true if fname has the read permission, else false)
                                                </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    -w fname ]=&gt;(true if fname has the write permission, else
                                                    false) </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">[
                                                    -x fname ]=&gt;(true if fname has the execute permission, else
                                                    false) </font></font>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-d</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">දී
			ඇති </span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">path
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එක
			</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">directory</font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එකක්ද
			කියා බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-f</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">දී
			ඇති </span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">path
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එක
			</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">file</font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එකක්ද
			කියා බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-e</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">දී
			ඇති </span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">file
                                                    name</font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එක
			පවතින එකක්ද කියා බලනවා</span></font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-r</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">දී
			ඇති </span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">file
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එකට
			හෝ </span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">directory</font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එකට
			</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">read
                                                    permissiosn</font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">තිබේදැයි
			බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-s</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">දී
			ඇති </span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">file
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එකේ
			</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">length
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එක
			බිංදුවට වඩා වැඩිද කියා
			බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-w</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">දී
			ඇති </span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">file
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එකට
			හෝ </span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">directory
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එකට
			</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">write
                                                    permissions </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">තිබේදැයි
			බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-x</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">දී
			ඇති </span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">file
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එකට
			හෝ </span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">directory
                                                </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">එකට
			</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">execute
                                                    permissions </font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">තිබේදැයි
			බලනවා</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td rowspan="6" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" height="2" width="29%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3"><font color="#000000"><span style="text-decoration: none"><span style="font-weight: normal">Logical
			operators - </span></span></font></font></font><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">තර්කානුකූල
			සංසන්දනය</span></font></font></p>
                                    </td>
                                    <td colspan="2" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="41%">
                                        <p align="left"><font face="FreeSans"><font style="font-size: 12pt" size="3"><span lang="hi-IN">තර්කානුකූලව
			යම් යම් දේ සංසන්දනය කිරීම
			මෙහිදී සිදු කරනු ලබයි</span></font></font><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">.</font></font></p>
                                        <p align="left"><br>
                                        </p>
                                    </td>
                                    <td rowspan="6" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0.04in" width="30%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">#!/bin/bash
                                                </font></font>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">echo
                                                    -n "Enter a number 1 &lt; x &lt; 10: " </font></font>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">read
                                                    num </font></font>
                                        </p>
                                        <p align="left"><br>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">if
                                                    [ "$num" -gt 1 -a "$num" -lt 10 ]; </font></font>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">then
                                                </font></font>
                                        </p>
                                        <p align="left">        <font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">echo
                                                    "$num*$num=$(($num*$num))" </font></font>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">else
                                                </font></font>
                                        </p>
                                        <p align="left">        <font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">echo
                                                    "Wrong insertion!" </font></font>
                                        </p>
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">fi
                                                </font></font>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">!</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">NOT
                                                </font></font>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-a</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">AND</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">-o</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">OR</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">&amp;&amp;</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">AND</font></font></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="10%">
                                        <p align="left"><font color="#ff3333"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">||</font></font></font></p>
                                    </td>
                                    <td style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in" width="31%">
                                        <p align="left"><font face="Times New Roman, serif"><font style="font-size: 12pt" size="3">OR</font></font></p>
                                    </td>
                                </tr>
                                </tbody></table>

                                <h4><span style='color: #c62828'> <a href="data/09/expression-table.pdf" download> Download the expression table </a></span></h4>
                            </li>
                        </ul>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li class="pager-prev"><a href="shell_lesson_8.php">Older</a></li>
                            <li class="pager-next"><a href="shell_lesson_10.php">Newer</a></li>
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