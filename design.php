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
	<title>Design</title>
	<?php include($DOCUMENT_ROOT."meta-content.php");?>
	<?php include($DOCUMENT_ROOT."css-scripts.php");?>	
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/header-footer.css">
</head>
<body>
<!-- WEBSITE HEADER STARTS HERE -->
<?php //include($DOCUMENT_ROOT."header.php");?>
<!-- WEBSITE HEADER ENDS HERE -->



<!-- PAGE CONTENT STARTS HERE -->


Section1 (Home)<br>
===============<br>
Whisker - menu<br>
DesignR - Logo<br>
DesignR - moving text + bg<br>
Articulate - Bg + SM icons<br>
Andre Martin - Hire me button<br><br>

Section2 (Services)<br>
===================<br>
Myfolio - entire services section<br><br>

Section3 (Features)<br>
===================<br>
Myfolio - entire features section<br><br>

Section4 (Work)<br>
===============<br>
Myfolio - entire work section<br><br>

Section5 (My story)<br>
===================<br>
Andre Martin - ABout + Skills + Education + Work experience
Whisker - Resume<br><br>

Section6 (Portfolio)<br>
====================<br>
Myfolio - Portfolio section<br><br>

Section7 (Contact me)<br>
=====================<br>
Andre Martin - form/idea<br>
DesignR - bg<br><br>

Section8 (Footer)<br>
=================<br>
DesignR - Footer (Text,menu,logo)<br>
Whisker - Social Icons & Copyright<br>
Andre Martin - Text & Copyright<br>



<!-- PAGE CONTENT ENDS HERE -->



<!-- WEBSITE FOOTER STARTS HERE -->
<?php //include($DOCUMENT_ROOT."footer.php");?>
<!-- WEBSITE FOOTER ENDS HERE -->
<?php //include($DOCUMENT_ROOT."js-scripts.php");?>

</body>
</html>