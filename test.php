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
	<title></title>
	<?php include($DOCUMENT_ROOT."meta-content.php");?>
	<?php include($DOCUMENT_ROOT."css-scripts.php");?>	
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/header-footer.css">
</head>
<body>
<!-- WEBSITE HEADER STARTS HERE -->
<?php include($DOCUMENT_ROOT."header.php");?>
<!-- WEBSITE HEADER ENDS HERE -->



<!-- PAGE CONTENT STARTS HERE -->


CONTENT HERE


<!-- PAGE CONTENT ENDS HERE -->



<!-- WEBSITE FOOTER STARTS HERE -->
<?php include($DOCUMENT_ROOT."footer.php");?>
<!-- WEBSITE FOOTER ENDS HERE -->
<?php include($DOCUMENT_ROOT."js-scripts.php");?>

</body>
</html>