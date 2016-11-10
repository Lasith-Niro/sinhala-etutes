<?php
/**
 * Created by PhpStorm.
 * User: lasith
 * Date: 6/4/16
 * Time: 8:51 AM
 */

//setup PHP UTF-8 stuff
setlocale(LC_CTYPE, 'en_US.UTF-8');
mb_internal_encoding("UTF-8");
mb_http_output('UTF-8');


//read parameters from HTTP Get URL
$phone = $_GET["phone"];
$smscenter = $_GET["smscenter"];
$text_utf8 = rawurldecode($_GET["text"]);

//if parameters are not present in HTTP url, they can be also present in HTTP header
$headers = getallheaders();
if (empty($phone)) {
    $phone = $headers["phone"];
}
if (empty($smscenter)) {
    $smscenter = $headers["smscenter"];
}
if (empty($text_utf8)) {
    $text_utf8 = rawurldecode($headers["text"]);
}

/*
echo "phone = $phone\n";
echo "smscenter = $smscenter\n";
echo "text_utf8 = $text_utf8\n";
*/
//$items = array();
//array_push($items,$phone, $smscenter, $text_utf8);
$file = fopen("data.csv","a");

//voltage , hz, wot, rs
$list = array();
array_push($list,$text_utf8);

foreach ($list as $line)
{
    fputcsv($file,explode(' ',$line));
}
print_r ($list);

fclose($file);
?>