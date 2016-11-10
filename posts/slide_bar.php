<?php
/**
 * Created by PhpStorm.
 * User: lasithniro
 * Date: 4/15/16
 * Time: 4:51 PM
 */
function files($path,&$files = array())
{
    $dir = opendir($path."/.");
    while($item = readdir($dir))
        if(is_file($sub = $path."/".$item))
            $files[] = $item;else
            if($item != "." and $item != "..")
                files($sub,$files);
    return($files);
}

files('fun');

    function read_newLine($file){
        $array = explode("\n", file_get_contents($file));
        return $array;
    }

//$arr[] = read_newLine("posts.txt");
//print_r($arr);
//print_r(explode(',',read_newLine("posts.txt")[0]));



?>
<article class="span3">
<!--    <h3 class="extra">Search</h3>-->
<!--    <form id="search" action="search.php" method="GET" accept-charset="utf-8" >-->
<!--        <div class="clearfix">-->
<!--            <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" >-->
<!--            <a href="#" onClick="document.getElementById('search').submit()" class="btn btn-1">Search</a> </div>-->
<!--    </form>-->
    <br/>
<!--    <br/>-->
<!--    <br/>-->
<!--    <br/>-->
<!--    <div class="extra" style="background: #232323">-->
<!--        <ol class="breadcrumb extra">-->
<!--            <li><a href="#">Home</a></li>-->
<!--            <li><a href="#">Private</a></li>-->
<!--            <li><a href="#">Pictures</a></li>-->
<!--            <li class="active">Vacation</li>-->
<!--        </ol>-->
<!--    </div>-->

    <ol class="breadcrumb extra2">
        <li><a href="../index.php">Home</a> </li>
        <li><a href="#"><?php echo ($title);?></a> </li>
    </ol>

    <h3><span style="color: #c62828">Recent Posts</span></h3>


    <ul class="list extra extra1">
    <?php
    $post_name = ["Shell scripting - Basics", "Shell scripting - Starting", "Shell scripting - Permissions","Shell scripting - Commands","Shell scripting - Variables/Input", "Shell scripting - Arguments/alias", "Shell scripting - Quotes/Maths", "Shell scripting - Pipes", "Shell scripting - Conditions", "Shell scripting - Iterations","Shell scripting - Functions","Shell scripting - Degugging"];
    $post = ["1","2","3","4","5","6","7","8","9","10","11","12"];
    for ($i=0;$i<=4;$i++){
        $r = rand(1,11);
        $page = $post[$r];
        $link = "shell_lesson_".$page.".php";
        $x = $post_name[$r];
        ?>
        <li><a href="<?php echo($link); ?>"><?php echo($x); ?></a></li>
        <?php
       // echo($link."<br/>");
    }
    ?>
    </ul>

    <h3><span style="color: #c62828">Random images from Internet</span></h3>

        <?php
        $r = rand(0,16);
        for ($x=0;$x<=5;$x++){
            $va = files('fun');
            ?>
            <li><img src="fun/<?php echo $va[$r];?>"></li><br/><br/>
        <?php
            $r = rand(0,16);
        }
        ?>
    
</article>