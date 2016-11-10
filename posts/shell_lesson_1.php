<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/14/16
 * Time: 12:36 AM
 */
$title="Shell Scripting (Lesson 1)"
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
                                <h2><span style="color: #c62828">Linux Shell Scripting – Lesson 01.</font></span></h2>
                                <h3><span class="label label-success"> Basics </span></h3><br/>
                                <time datetime="2016-04-14" class="date-1"><i class="icon-calendar icon-white"></i> 14.04.2016</time>
                                <div class="name-author dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
<!--                                <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a>-->
                                <div class="clear"></div>
                                <img alt="" src="img/blog-1.jpg">
                                <h3><center><span style='color: #c62828'>ls command</span></center></h3>
                                <p style="font-size: 20px"><font color="white">Terminal එකෙන් ෆෝල්ඩරයක අන්තර්ගතය බලා ගැනීමට "ls" commandඑක භාවිතා කරන්න පුලුවන්.
                                        <br>ls command එකේ සම්පූර්ණ විස්තරයක් manual file (man ls) එකේ තියෙනවා. සමහර විශේෂ අවස්ථා කිහිපයක් දැන් අපි බලමු.
                                        <br>
                                        <ol>
                                            <li>ls -a<br>ෆොල්ඩරයේ තිබෙන සැඟවුන* files ද පෙන්වනවා.</li>
                                            <li>ls -l<br>ෆොල්ඩරයේ තිබෙන files දිගු ආකාරයේ විස්තර සහිතව පෙන්වනවා. පහත වගුවේ අදාල විස්තර දක්වා ඇත.
                                                <br/><table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>File permission</th>
                                                        <th>Num. of links</th>
                                                        <th>Owner name</th>
                                                        <th>Owner group</th>
                                                        <th>File size</th>
                                                        <th>Last modified time</th>
                                                        <th>file/dir name</th>
                                                    </tr>
                                                    </thead>
                                                    </table>
                                                මේ example එක බලන්න.
                                                <img src="data/01/ls-l_details.png" alt="" />
                                            </li>
                                            <li>ls -r<br/>ෆොල්ඩරයේ තිබෙන files reverse order එකෙන් පෙන්වනවා. [z-a]</li>
                                            <li>ls -R<br/>ෆෝල්ඩරය තුල ඇති ෆෝල්ඩර වලද අන්තරතය පෙන්වයි.(recursevely)</li>
                                            <li>ls --sort="option"<br/>Files වර්ග කර පෙන්වනවා.දී ඇති option එක භවිතා කරමින් වර්ග කරනු ලබයි.
                                            <center><img src="data/01/tbl_sort.png"/></center>
                                            <img src="data/01/ls-l-S.png" alt="" />
                                            </li>

                                            <li>Exit status<br>Shell commandඑකක් run කලාම, run කරන ලද commandඑක  successful නම් value එකක් ද, unsuccessfulනම් තවත් value එකක් ද returnවෙයි. එම value එකට exit statusඑක ලෙස හඳුන්වනු ලබයි.
                                                “echo $?” මගින් අදාල value එක බලාගන්න පුලුවන්.
                                            <img src="data/01/tbl_exit.png"></li>
                                        </ol>
                                </font></p>

                                <h3><center><span style='color: #c62828'>ls command with wild cards ( කැළෑ කොල )</span></center></h3>
                                <p style="font-size: 20px"><font color="white">Linux systems වල wild cards භාවිතා කරන්නේ character එකකට හරි string එකකට හරි ආදේශකයක් විදියට..
                                        <br>
                                        <h4><span style='color: #c62828'>කැළෑ කාඩ් වර්ග</span></h4>
                                        <pre style='color:#d1d1d1;background:#000000;'>
<b>1) Star Wildcard (*) - ඕනෑම character ප්‍රමාණයක් (බිංදුව හෝ වැඩි ප්‍රමාණයක්) අදේශ කරනවා.<br>
2) Question Mark Wildcard (?) - එක් ? ලකුණකින් ඕනෑම එක් character එකක් නිරූපණය වෙනවා.<br>
3) Square Brackets (range wildcard)  - පරාසයක් දක්වනවා. පරාසය තුල ඕනෑම සංකලනයක් නිරූපණය කල හැක.</b>
                                        </pre>
                                        <h4><span style='color: #c62828'>උදාහරණ:</span></h4>
                                        <pre>
1. ls -l ss*
    list files starting “ss” and end of the file is anything
2. ls -l *sh
    list files end with “sh”. First characters are not considered.
3. ls -l ss2.??
    list files starting with “ss2.” and end with two more characters.
    Ex: ss2.sh / ss2.ko
4. ls -l *.????
    list files as contains any file name and file type must contain four characters
5. ls -l ????.*
    list files starting with four characters with any file type.
6. Ls -l [a-s]5.??
    list files begin with a to s character, end with 5 and file type must have two characters.
                                        </pre>
                                        </font></p>
                                <h3><center><span style='color: #c62828'>clear</span></center></h3>
                                <p style="font-size: 20px"><font color="white">Terminal screen එක හිස් කරනවා.
                                <br>
                                </font></p>

                                <h3><center><span style='color: #c62828'>cd</span></center></h3>
                                <p style="font-size: 20px"><font color="white">GUI වලින් ෆෝල්ඩරයක් click කරලා open  කරනවා වගේ terminal එකෙන් ෆෝල්ඩරයක් තුලට යන්න භවිතා කරන්නේ cd command එක.
                                        <br>
                                    </font></p>

                                <h3><center><span style='color: #c62828'>rm</span></center></h3>
                                <p style="font-size: 20px"><font color="white">භාවිතා කරන්නේfiles හෝ directories delete කරන්න. අනිවාර්යයෙන්ම file එකේ හෝ dierctory එකේ නම argument එකක් විදියට දෙන්න ඕන. ඒ වගේම පහල තියෙන්නේ optional parameters.
                                        <br>
                                        <center><img src="data/01/rm.png"/></center>
                                    </font></p>
                            </li>

                            <li>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <span>ls code generator</span><a class="pull-right" data-toggle="collapse" href="#collapse1"><i class="fa fa-plus"></i></a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse">
                                            <div class="panel-body">

                                                <form class="form-group" name="gen">
                                                    <h3>Options&nbsp;</h3>
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <input type="checkbox" name="C1"/>&nbsp; Long list format (-l)<br/>
                                                            <input type="checkbox" name="C2"/>&nbsp; List all files / hidden files (-a) <br/>
                                                            <input type="checkbox" name="C3"/>&nbsp; Recursively list directory tree (-R) <br/>
                                                            <input type="checkbox" name="C4"/>&nbsp; List in reverse order (-r) <br/>
                                                            <input type="checkbox" name="C5"/>&nbsp; List with full path (-d $PWD/*)<br/>

                                                            <input type="checkbox" name="C10"/>Sort by :
                                                            <select class="form-control" name="CM1" onchange="OnCm1Change()">
                                                                <option selected>File size (-S)</option>
                                                                <option>File extension name (-X)</option>
                                                                <option>File time &amp; date (-t)</option>
                                                                <option>Last access time (-u)</option>
                                                                <option>Version (-v)</option>
                                                                <option>No sort (-U)</option>
                                                                <option>File name (default)</option>
                                                            </select>
                                                            <h3>Files / folders</h3>
                                                            <input type="checkbox" name="C20"/>Files: <input class="form-control" type="text" id="T1" name="T1" placeholder="file1 file2">
                                                            <br/>
                                                            <input type="checkbox" name="C21"/>Folders: <input class="form-control" type="text" id="T2" name="T2" placeholder="dir1 dir2">

                                                            <h3>Output redirection</h3>
                                                            <input type="checkbox" name="C30"/>
                                                            <select class="form-control" name="CM2" onchange="OnCm2Change()">
                                                                <option selected>Redirect stdout to file</option>
                                                                <option>Redirect &amp; append stdout to file</option>
                                                                <option>Redirect stdout &amp; stderr to file</option>
                                                            </select>
                                                            <input class="form-control" type="text" id="T3" name="T3" value="out.txt">
                                                            <br/>
                                                            <input type="checkbox" name="C31"/>
                                                            <select class="form-control" name="CM3" onchange="OnCm3Change()">
                                                                <option selected>Redirect stderr to file</option>
                                                                <option>Redirect &amp; append stderr to file</option>
                                                            </select>
                                                            <input class="form-control" type="text" id="T4" name="T4"  value="err.txt">

                                                            <br/><br/>
                                                            <input type="button" value="Generate Code" name="B1" onclick="GenerateButton()" class="btn btn-success">
                                                            <input type="reset" value="Reset" name="B2" onclick="ResetButton()" class="btn btn-danger">
                                                            <br/>
                                                            <span class="alert-danger"><i>Click</i> on textbox to select code, then copy and paste it into terminal</span>
                                                            <br/>
                                                            <textarea class="form-control" rows="3" id="TA1" name="TA1" onclick="OnSelectCode()"></textarea>
                                                            <br><br/>
                                                            <input type="button" value="Select Code" name="B3" onclick="OnSelectCode()" class="btn btn-info">
                                                        </div>
                                                    </div>
                                                </form>

                                                <p>&nbsp;</p>
                                                <hr>

                                                <script type="text/javascript">
                                                    <!--
                                                    var isIE = false;
                                                    var T1,T2,T1_val,T2_val;

                                                    window.onload = new function()
                                                    {
                                                        T1 = document.getElementById('T1');
                                                        T2 = document.getElementById('T2');

                                                        if (navigator.appName == 'Microsoft Internet Explorer')
                                                            isIE = true;
                                                    }
                                                    function selectFile()
                                                    {
                                                        var fileElem = document.getElementById("fileElem");
                                                        fileElem.focus();
                                                        fileElem.click();
                                                    }
                                                    function loadFile()
                                                    {
                                                        var fileSelect = document.getElementById("fileSelect");
                                                        var fileElem = document.getElementById("fileElem");
                                                        if( !isIE )
                                                        {
                                                            T1.value = '';
                                                            for (var i=0; i<fileElem.files.length; i++)
                                                            {
                                                                T1.value += fileElem.files[i].name;
                                                                if( i<fileElem.files.length-1 ) T1.value += ' ';
                                                            }
                                                        }
                                                        else
                                                        {
                                                            var s = fileElem.value;
                                                            var i = s.lastIndexOf("\\");
                                                            T1.value = s.substr(i+1);
                                                        }
                                                        document.gen.C20.checked = true;
                                                    }
                                                    function OnCm1Change()
                                                    {
                                                        document.gen.C10.checked=true;
                                                    }
                                                    function OnCm2Change()
                                                    {
                                                        document.gen.C30.checked=true;
                                                    }
                                                    function OnCm3Change()
                                                    {
                                                        document.gen.C31.checked=true;
                                                    }
                                                    function OnSelectCode()
                                                    {
                                                        document.gen.TA1.select();
                                                    }
                                                    function GenerateButton()
                                                    {
                                                        C1 = document.gen.C1.checked;
                                                        C2 = document.gen.C2.checked;
                                                        C3 = document.gen.C3.checked;
                                                        C4 = document.gen.C4.checked;
                                                        C5 = document.gen.C5.checked;
                                                        C10 = document.gen.C10.checked;
                                                        C20 = document.gen.C20.checked;
                                                        C21 = document.gen.C21.checked;
                                                        C30 = document.gen.C30.checked;
                                                        C31 = document.gen.C31.checked;
                                                        T1_val = T1.value;
                                                        T2_val = T2.value;
                                                        if( T1_val=='' ) T1_val='file1 file2';
                                                        if( T2_val=='' ) T2_val='dir1 dir2';

                                                        txt = 'ls';
                                                        if( C1||C2||C3||C4||C5||C10 ) txt+=' -';
                                                        if( C1 ) txt+='l';
                                                        if( C2 ) txt+='a';
                                                        if( C3 ) txt+='R';
                                                        if( C4 ) txt+='r';
                                                        if( C5 ) txt+='d';
                                                        if( C10 )
                                                        {
                                                            i = document.gen.CM1.selectedIndex;
                                                            if( i==0 ) txt+='S';
                                                            else if( i==1 ) txt+='X';
                                                            else if( i==2 ) txt+='t';
                                                            else if( i==3 ) txt+='u';
                                                            else if( i==4 ) txt+='v';
                                                            else if( i==5 ) txt+='U';
                                                        }
                                                        if( C5 ) txt+=' $PWD/*';
                                                        if( C20 ) txt+=' '+T1_val;
                                                        if( C21 ) txt+=' '+T2_val;
                                                        if( C30 )
                                                        {
                                                            i = document.gen.CM2.selectedIndex;
                                                            file = document.gen.T3.value;
                                                            if( i==0 ) txt += ' > '+file;
                                                            else if( i==1 ) txt += ' >> '+file;
                                                            else txt += ' &> '+file;
                                                        }
                                                        if( C31 )
                                                        {
                                                            i = document.gen.CM3.selectedIndex;
                                                            file = document.gen.T4.value;
                                                            if( i==0 ) txt += ' 2> '+file;
                                                            else txt += ' 2>> '+file;
                                                        }

                                                        document.getElementById('TA1').value = txt;
                                                    }
                                                    //-->
                                                </script>




                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h3><center><span class="fa fa-tasks" style='color: #c62828'>  Task</span></center></h3>
                                <h4><span style='color: #c62828'> /bin ෆොල්ඩර් එකේ සියලුම Files details ls_bin.txt file හි store කරන්න.</span></h4><br/>
                                <h4><span style='color: #c62828'> <a href="data/01/ls_bin.sh" download> Download Answer </a></span></h4>


                            </li>
                        </ul>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li class="pager-prev"><a href="#">Older</a></li>
                            <li class="pager-next"><a href="shell_lesson_2.php">Newer</a></li>
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