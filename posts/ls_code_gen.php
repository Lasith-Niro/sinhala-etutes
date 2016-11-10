<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/15/16
 * Time: 5:10 PM
 */
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ls code generator</title>
    <meta name="description" content="">
    <meta name="author" content="L2N soft. Inc">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />
    <link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css" />
    <!-- Font Awesome -->
    <link href="../font/css/font-awesome.min.css" rel="stylesheet">

</head>

<form class="form-group" name="gen">
    <h3>Options&nbsp;</h3>
    <div class="container-fluid">
        <div class="row col-xs-6 col-sm-4">
        <input class="" type="checkbox" name="C1"/>&nbsp; Long list format (-l)<br/>
        <input type="checkbox" name="C2"/>&nbsp; List all files / hidden files (-a) <br/>
        <input type="checkbox" name="C3"/>&nbsp; Recursively list directory tree (-R) <br/>
        <input type="checkbox" name="C4"/>&nbsp; List in reverse order (-r) <br/>
        <input type="checkbox" name="C5"/>&nbsp; List with full path (-d $PWD/*)<br/>

        <input type="checkbox" name="C10"/>Sort by : <select name="CM1" onchange="OnCm1Change()">
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
        <select name="CM2" onchange="OnCm2Change()">
            <option selected>Redirect stdout to file</option>
            <option>Redirect &amp; append stdout to file</option>
            <option>Redirect stdout &amp; stderr to file</option>
        </select>
        <input class="form-control" type="text" id="T3" name="T3" value="out.txt">
        <br/>
        <input type="checkbox" name="C31"/>
        <select name="CM3" onchange="OnCm3Change()">
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