<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/18/16
 * Time: 11:21 AM
 */
$title="Shell Scripting (Lesson 10)"
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
                                <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 10.</font></span></h2>
                                <h3><span class="label label-success"> Iteration Statements </span></h3><br/>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
                                <!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>

                                <img alt="" src="img/blog-2.jpg">
                                <h3><center><span style='color: #c62828'>FOR structure</span></center></h3>
                                <br/><br/>
                                <p style="font-size: 20px"><font color="white">
                                        variable range එකක් තුල loop කිරීමට for structureභාවිතා කරනවා.
                                    </font></p>

<!--                                Syntax here-->
<pre style='color:#d1d1d1;background:#000000;'><span style='color:#e66170; font-weight:bold; '>for</span> j <span style='color:#e66170; font-weight:bold; '>in</span> array
<span style='color:#e66170; font-weight:bold; '>do</span>
		Statements
<span style='color:#e66170; font-weight:bold; '>done</span>
</pre>
                                <p style="font-size: 20px"><font color="white">
                                        array එකේ element එකෙන් එකට j assign වෙනවා.<br/>
                                        වැඩියෙන් තේරුම් ගන්න මෙන්න මේ example  එක බලන්න.
                                        </font></p>
<!--                                Example-->
<pre style='color:#d1d1d1;background:#000000;'><span style='color:#9999a9; '>#!</span><span style='color:#007997; '>/bin/bash</span>

<span style='color:#904050; '>let</span> sum<span style='color:#d2cd86; '>=</span><span style='color:#008c00; '>0</span>
<span style='color:#e66170; font-weight:bold; '>for</span> num <span style='color:#e66170; font-weight:bold; '>in</span> <span style='color:#008c00; '>1</span> <span style='color:#008c00; '>2</span> <span style='color:#008c00; '>3</span> <span style='color:#008c00; '>4</span> <span style='color:#008c00; '>5</span>
<span style='color:#e66170; font-weight:bold; '>do</span>
	<span style='color:#904050; '>let</span> <span style='color:#00c4c4; '>"sum = </span><span style='color:#00c4c4; '>$sum</span><span style='color:#00c4c4; '> + </span><span style='color:#00c4c4; '>$num</span><span style='color:#00c4c4; '>"</span>
<span style='color:#e66170; font-weight:bold; '>done</span>
<span style='color:#904050; '>echo</span> $sum
</pre>
                                <p style="font-size: 20px"><font color="white">
                                        shell වලදි array එකක තියෙන්න පුලුවන් උපරිම elements ගණන 1024.
                                        </font></p>

                                <h4><center><span style='color: #c62828'>Array Initializing</span></center></h4>
                                <p style="font-size: 20px"><font color="white">array එක initialize කරන්න ප්‍රධාන ක්‍රම දෙකක් තියෙනවා.</font></p>
                                <pre style="color:'white'; font-size: 20px">
1. <b>Elements එකෙන් එක initialize කිරීම.</b>
    Ex:	url[0]=sinhalae_tutes
        url[1]=facebook
        url[2]=google
        url[3]=ugvle
2. <b>Array එකම initialize කිරීම.</b>
    Ex: url=(sinhalae_tutes facebook google ugvle)</pre>
                                <h4><center><span style='color: #c62828'>Array Accessing</span></center></h4>
                                <pre style="color:'white'; font-size: 20px">
1. <b>Element එකෙන් එක access කිරීම.</b>
        ${array_name[i]}
        මෙතන i කියන්නේ element එකේ index එක.
        Ex:
            echo ${url[1]}
2. <b>Elements ඔක්කොම එක පාර access කිරීම.</b>
        ${array_name[*]}
        මෙතන * වලින් හැම element එකම access කරනවා.
        Ex:
            echo ${url[*]}</pre>
                                <hr>
                                <h4><center><span style='color: #c62828'>Array එකට for loop</span></center></h4>
<!--                                Syntax here-->
<pre style='color:#d1d1d1;background:#000000;'><span style='color:#e66170; font-weight:bold; '>for</span> j <span style='color:#e66170; font-weight:bold; '>in</span> ${array_name<span style='color:#d2cd86; '>[</span><span style='color:#00c4c4; '>*</span><span style='color:#d2cd86; '>]</span>}
<span style='color:#e66170; font-weight:bold; '>do</span>
		Statements
<span style='color:#e66170; font-weight:bold; '>done</span>
</pre>
                                <hr>
                                <h3><center><span style='color: #c62828'>C-like for loop</span></center></h3>
<!--                                Syntax here-->
                                <pre style='color:#d1d1d1;background:#000000;'><span style='color:#e66170; font-weight:bold; '>for</span> <span style='color:#b060b0; '>(</span><span style='color:#b060b0; '>(</span> initialize <span style='color:#b060b0; '>;</span> condition <span style='color:#b060b0; '>;</span> increment <span style='color:#b060b0; '>)</span><span style='color:#b060b0; '>)</span><span style='color:#b060b0; '>;</span>
<span style='color:#e66170; font-weight:bold; '>do</span>
	Statements
<span style='color:#e66170; font-weight:bold; '>done</span>
</pre>
                                <hr>
                                <h3><center><span style='color: #c62828'>WHILE structure</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        මෙමගින් යම් condition එකක් True වන තෙක් command set එකක් execute කරගන්න පුලුවන්. Condition එක False උන ගමන් loop එක terminate වෙනවා.
                                        <br/>එමනිසා command එක False නොවුනොත් loop එක terminate වෙන්නේ නෑ.
                                        </font></p>
<!--                                Syntax here-->
                                <pre style='color:#d1d1d1;background:#000000;'><span style='color:#e66170; font-weight:bold; '>while</span> <span style='color:#d2cd86; '>[</span> expression <span style='color:#d2cd86; '>]</span>
<span style='color:#e66170; font-weight:bold; '>do</span>
	Statement
<span style='color:#e66170; font-weight:bold; '>done</span>
</pre>
                                <hr>
                                <h3><center><span style='color: #c62828'>Continue Statement</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        ඇත්තටම අපි programming වලදි භාවිතා කරන continue statement එකම තමයි මෙතනත් තියෙන්නේ. ඒ කියන්නේ, loop එකේ continue statement එකට පහලින් තියෙන code set එක skip කරල ඊලග iteration එකට පනිනවා.
                                        <br>
                                        Example එක බැලුවම තව ටිකක් තේරේවි..
                                    </font></p>
<!--                                code here-->
<pre style='color:#d1d1d1;background:#000000;'><span style='color:#9999a9; '>#!</span><span style='color:#007997; '>/bin/bash</span>
LIMIT<span style='color:#d2cd86; '>=</span><span style='color:#008c00; '>19</span>
<span style='color:#904050; '>echo</span>
<span style='color:#904050; '>echo</span> <span style='color:#00c4c4; '>"Printing numbers 1 through 20 (but not 3 and 11)"</span>
a<span style='color:#d2cd86; '>=</span><span style='color:#008c00; '>0</span>
<span style='color:#e66170; font-weight:bold; '>while</span> <span style='color:#d2cd86; '>[</span> $a <span style='color:#00dddd; '>-le</span> <span style='color:#00c4c4; '>"</span><span style='color:#00c4c4; '>$LIMIT</span><span style='color:#00c4c4; '>"</span> <span style='color:#d2cd86; '>]</span><span style='color:#b060b0; '>;</span> <span style='color:#e66170; font-weight:bold; '>do</span>
	a<span style='color:#d2cd86; '>=</span>$<span style='color:#b060b0; '>(</span><span style='color:#b060b0; '>(</span>$a+<span style='color:#008c00; '>1</span><span style='color:#b060b0; '>)</span><span style='color:#b060b0; '>)</span>
	<span style='color:#e66170; font-weight:bold; '>if</span> <span style='color:#d2cd86; '>[</span> <span style='color:#00c4c4; '>"</span><span style='color:#00c4c4; '>$a</span><span style='color:#00c4c4; '>"</span> <span style='color:#00dddd; '>-eq</span> <span style='color:#008c00; '>3</span> <span style='color:#d2cd86; '>]</span> <span style='color:#b060b0; '>||</span> <span style='color:#d2cd86; '>[</span> <span style='color:#00c4c4; '>"</span><span style='color:#00c4c4; '>$a</span><span style='color:#00c4c4; '>"</span> <span style='color:#00dddd; '>-eq</span> <span style='color:#008c00; '>11</span> <span style='color:#d2cd86; '>]</span>
	<span style='color:#e66170; font-weight:bold; '>then</span>
		<span style='color:#904050; '>continue</span>
	<span style='color:#e66170; font-weight:bold; '>fi</span>
	<span style='color:#904050; '>echo</span>  <span style='color:#00c4c4; '>"</span><span style='color:#00c4c4; '>$a</span><span style='color:#00c4c4; '>"</span>
<span style='color:#e66170; font-weight:bold; '>done</span>
</pre>
                                <p style="font-size: 20px"><font color="white">
                                        බලන්න code එක run කලාම 3 හා 11 skip වෙනවා නේද?
                                        </font></p>

                                <hr>
                                <h3><center><span style='color: #c62828'>Break Statement</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        මම මුකුත් කියන්න ඕන නෑ නේද....Break කියන්නේ ඉතින් break තමයි. වෙන මොනවද ඉතින් loop එක එතනම නවතිනවා.(breaks out of it)
                                    </font></p>

                                <hr>
                                <h3><center><span style='color: #c62828'>Until Statement</span></center></h3>
                                <p style="font-size: 20px"><font color="white">
                                        මේකත් loop වර්ගයක්ම තමයි. හරියට while loop එක වගේම තමයි වැඩ. ඒ කියන්නේ condition එක true වන තෙක් loop එක වැඩ කරනවා.
                                        <div class="label label-danger">
                                            “Until this condition is true, do this.”
                                        </div>
                                    </font></p>
<!--                                Syntax here-->
                                <pre style='color:#d1d1d1;background:#000000;'><span style='color:#e66170; font-weight:bold; '>until</span> <span style='color:#d2cd86; '>[</span> expression <span style='color:#d2cd86; '>]</span>
<span style='color:#e66170; font-weight:bold; '>do</span>
	Statement
<span style='color:#e66170; font-weight:bold; '>done</span>
</pre>
                                <h3><center><span class="fa fa-tasks" style='color: #c62828'>  Task</span></center></h3>
                                <h4><span style='color: #c62828'> Terminal Menu program එකක් හදන්න.<br/>C - calander එක print කරන්න, W - Log වෙලා ඉන්න userව print කරන්න., P - Current directory එක print කරන්න. ,E - Exit
 </span></h4><br/>
                                <h4><span style='color: #c62828'> <a href="data/10/menu.sh" download> Download Answer </a></span></h4>

                            </li>
                        </ul>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li class="pager-prev"><a href="shell_lesson_9.php">Older</a></li>
                            <li class="pager-next"><a href="shell_lesson_11.php">Newer</a></li>
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