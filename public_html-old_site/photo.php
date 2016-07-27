<?php
php error_reporting (E_ALL ^ E_NOTICE);

include('data.php');
$imagedir = "images/$season/";
$photo = "images/$season/$_SERVER[QUERY_STRING].jpg";
$desc  = ($photos[$season][$_SERVER['QUERY_STRING']]) ?  $photos[$season][$_SERVER['QUERY_STRING']]
                                                       :  $photos[$_SERVER['QUERY_STRING']];

if($_SERVER['QUERY_STRING']
&& strpos($photo,'../') === false
&& file_exists($photo)) {
  $imgalt   = ($desc) ? $desc : $photo;
  $imgtitle = ($desc) ? $desc : '';
  //$img_width  = 800;
  //$img_height = 600;
  list($img_width, $img_height, $img_type, $img_attr) = @getimagesize($photo);


  $content .= "<div class='bigphoto'><img src='$photo' alt='$imgalt' title='$imgtitle' width='$img_width' height='$img_height' /><span class='bigphoto-desc'>$desc</span></div>";
} else {
  $content .= "<div class='bigphoto-desc'>Unknown Photo</div>";
}
$content .= "<p class='back'><a href='index.htm'>Back to Main Page</a></p>";

include_once('templates/bedandbreakfasttintern.php');

?>