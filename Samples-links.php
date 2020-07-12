<?php 
include("common.php");
$page="test";
/*
$base_url = url path ===========  
$DOCUMENT_ROOT = server path 
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sample Links</title>
	<?php include($DOCUMENT_ROOT."meta-content.php");?>
	<?php include($DOCUMENT_ROOT."css-scripts.php");?>	
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/header-footer.css">
</head>
<body>
<!-- WEBSITE HEADER STARTS HERE -->
<?php //include($DOCUMENT_ROOT."header.php");?>
<!-- WEBSITE HEADER ENDS HERE -->



<!-- PAGE CONTENT STARTS HERE -->

<ol>
<li><a href="http://demos.q-themes.net/designr/v1.3/">http:/demos.q-themes.net/designr/v1.3/</a></li>

<!-- <li><a href="http://bootstrapbay.com/preview/whisker-responsive-html-portfolio-template-B5FB29C">http://bootstrapbay.com/preview/whisker-responsive-html-portfolio-template-B5FB29C</a></li> -->
<li><a href="http://landingpage4u.ru/samples/whisker/">http://landingpage4u.ru/samples/whisker/</a></li>

<li><a href="http://authenticgoods.co/wrapbootstrap/themes/articulate-v1.2/">http://authenticgoods.co/wrapbootstrap/themes/articulate-v1.2/</a></li>

<li><a href="http://bootstrapbay.com/preview/myfolio-personal-portfolio-template-BDBB9C6">http://bootstrapbay.com/preview/myfolio-personal-portfolio-template-BDBB9C6</a></li>

<li><a href="http://izee.ro/market/mywall/one/">http://izee.ro/market/mywall/one/</a></li>
</ol>

<!-- PAGE CONTENT ENDS HERE -->



<!-- WEBSITE FOOTER STARTS HERE -->
<?php //include($DOCUMENT_ROOT."footer.php");?>
<!-- WEBSITE FOOTER ENDS HERE -->
<?php //include($DOCUMENT_ROOT."js-scripts.php");?>

</body>
</html>