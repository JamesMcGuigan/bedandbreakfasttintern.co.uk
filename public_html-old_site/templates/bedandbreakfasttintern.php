<?php if($_SERVER['QUERY_STRING'] === 'notemplate') { print $content; exit; } ?>
<?php if($dont_print_template == false) { ?>
<?php //include_once('../Gubed/Gubed.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//dtd xhtml 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/dtd/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php
//ob_start("ob_gzhandler");
include_once('template-processing.php');
@include_once('include/html-functions.php');
@include_once('../include/html-functions.php');
echo <<<HTML
<title>$doctitle</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf8' />
$stylesheet_html
$javascript_html
HTML;

if($inline_style) { echo "\n<style type='text/css'>\n$inline_style\n</style>\n"; }

?>
</head>
<div>
<a name='top'></a>
<div id='banner'></div>
<h2 class='title'>Bed and Breakfast at Forest Cottage, Tintern, Wye Valley</h2>
<div class='content'>
<?php echo $content ?>
</div>
</body> <!-- end id='body' -->
</html>
<?php } // END if($dont_print_template == false) ?>
