<?php 
include("common.php");
$page='home';

/*

$base_url = url path ===========*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bhavik Trivedi's Portfolio</title>
	<?php include($DOCUMENT_ROOT."meta-content.php");?>
	<?php include($DOCUMENT_ROOT."css-scripts.php");?>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/header-footer.css">
	<style>
		#home {
		    background-image: url(images/01.jpg);
		}
		.yellow{
		  color: yellow;
		}
	</style>
</head>
<body class="home">
<!-- WEBSITE HEADER STARTS HERE -->
<?php //include($DOCUMENT_ROOT."header.php");?>
<!-- WEBSITE HEADER ENDS HERE -->



<!-- PAGE CONTENT STARTS HERE -->
<div class="outer_div">
	<section id="home" class="home mysection">
		<div class="inner_div">
			<div class="section1_inner_div">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12 p-0">
							<div class="who_am_i_left_div text-center">
								<div class="who_am_i_swiper">
									<div class="swiper-slide">
										Days to go:<br>
										<span id="demo"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- PAGE CONTENT ENDS HERE -->

<?php //include($DOCUMENT_ROOT."work-modal.php");?>


<!-- WEBSITE FOOTER STARTS HERE -->
<?php //include($DOCUMENT_ROOT."footer.php");?>
<!-- WEBSITE FOOTER ENDS HERE -->
<?php include($DOCUMENT_ROOT."js-scripts.php");?>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 13, 2019 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Here You FLY !!!";
    $("#demo").addClass("yellow");
  }
}, 1000);
</script>
</body>
</html>