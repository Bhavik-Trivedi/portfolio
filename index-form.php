<?php 
include("common.php");
include("connect.php");
$db = new Database();

$conn = $db->dbConnection();

$page='home';

/*

$base_url = url path ===========*/

$stmt = $conn->prepare("select * from userdata1 where flag = 1");

$stmt->execute();

$rowCount = $stmt->rowCount();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bhavik Trivedi's Portfolio</title>
	<?php include($DOCUMENT_ROOT."meta-content.php");?>
	<?php include($DOCUMENT_ROOT."css-scripts.php");?>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/header-footer.css">
</head>
<body class="home">
<!-- WEBSITE HEADER STARTS HERE -->
<?php include($DOCUMENT_ROOT."header.php");?>
<!-- WEBSITE HEADER ENDS HERE -->



<!-- PAGE CONTENT STARTS HERE -->

<!-- <section id="home" class="home mysection">
	<div class="inner_div">
		<div class="section1_inner_div">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-sm-5 p-0">
						<div class="who_am_i_left_div">
							I am Bhavik Trivedi<br>
							and I'm a Web
						</div>
					</div>
					<div class="col-sm-7 p-0">
						<div class="who_am_i_slider">
							<div class="who_am_i_swiper swiper-container">
							    <div class="swiper-wrapper">
							        <div class="swiper-slide">
							        	Designer
							        </div>
							        <div class="swiper-slide">
							        	Developer
							        </div>
							        <div class="swiper-slide">
							        	Expert
							        </div>
							    </div>
							</div>
						</div>
					</div>
					<div class="col-12 text-center">
						<div class="sm_div">
							<a href="javascript:void(0)" class="btn btn-round btn-clear d-inline-block btn-facebook"><i class="fa fa-facebook-f"></i></a>
							<a href="javascript:void(0)" class="btn btn-round btn-clear d-inline-block btn-linkedin"><i class="fa fa-linkedin"></i></a>
							<a href="javascript:void(0)" class="btn btn-round btn-clear d-inline-block btn-skype"><i class="fa fa-skype"></i></a>
							<a href="javascript:void(0)" class="btn btn-round btn-clear d-inline-block btn-twitter"><i class="fa fa-twitter"></i></a>
							<a href="javascript:void(0)" class="btn btn-round btn-clear d-inline-block btn-instagram"><i class="fa fa-instagram"></i></a>
							<a href="javascript:void(0)" class="btn btn-round btn-clear d-inline-block btn-google"><i class="fa fa-google-plus"></i></a>
							<a href="javascript:void(0)" class="btn btn-round btn-clear d-inline-block btn-snapchat"><i class="fa fa-snapchat-ghost"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about" class="about mysection">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					ABOUT ME
				</div>
				<div class="section_subtitle">
					LET'S INTRODUCE MYSELF
				</div>
			</div>
			<div class="col-sm-4">
				<div class="about_title">
					FEW WORDS ABOUT ME
				</div>
				<div class="about_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="col-sm-4 text-center">
				<img src="<?php echo $base_url; ?>images/bhavik.png" class="img-fluid">
			</div>
			<div class="col-sm-4">
				<div class="about_title">
					SPECIALIZED IN
				</div>
				<div class="about_desc">
					<div id="accordion">
					    <div class="card">
						    <div class="card-header">
						        <a class="card-link" data-toggle="collapse" href="#collapseOne">
						          	BOOTSTRAP 3 & 4
						        </a>
						    </div>
					      	<div id="collapseOne" class="collapse show" data-parent="#accordion">
					        	<div class="card-body">
					          		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					        	</div>
					      	</div>
					    </div>
					    <div class="card">
					      	<div class="card-header">
					        	<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
					          		100% MOBILE RESPONSIVE
					      		</a>
					      	</div>
					      	<div id="collapseTwo" class="collapse" data-parent="#accordion">
					        	<div class="card-body">
					          		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					        	</div>
					      	</div>
					    </div>
					    <div class="card">
					      	<div class="card-header">
					        	<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
					          		UI & SEO FRIENDLY
					        	</a>
					      	</div>
					      	<div id="collapseThree" class="collapse" data-parent="#accordion">
					        	<div class="card-body">
					          		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					        	</div>
					      	</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="services" class="services mysection">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					What I offer
				</div>
				<div class="section_subtitle">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
				</div>
			</div>
			<div class="col-12">
				<div class="features_slider_main_div">
					<div class="features_slider_div">
						<div class="features_swiper swiper-container">
						    <div class="swiper-wrapper">
						        <div class="swiper-slide">
						        	<div class="feature_div">
							        	<div class="feature_logo">
							        		<i class="fa fa-html5" aria-hidden="true"></i>
							        	</div>
							        	<div class="feature_title">UI Development</div>
							        	<div class="feature_desc">
							        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							        		tempor incididunt ut labore et dolore magna aliqua.
							        	</div>
						        	</div>
						        </div>
						        <div class="swiper-slide">
						        	<div class="feature_div">
							        	<div class="feature_logo">
							        		<i class="fa fa-wordpress" aria-hidden="true"></i>
							        	</div>
							        	<div class="feature_title">Wordpress Development</div>
							        	<div class="feature_desc">
							        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							        		tempor incididunt ut labore et dolore magna aliqua.
							        	</div>
						        	</div>
						        </div>
						        <div class="swiper-slide">
						        	<div class="feature_div">
							        	<div class="feature_logo">
							        		<i class="fa fa-code" aria-hidden="true"></i>
							        	</div>
							        	<div class="feature_title">Web Development</div>
							        	<div class="feature_desc">
							        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							        		tempor incididunt ut labore et dolore magna aliqua.
							        	</div>
						        	</div>
						        </div>
						        <div class="swiper-slide">
						        	<div class="feature_div">
							        	<div class="feature_logo">
							        		<i class="fa fa-crop" aria-hidden="true"></i>
							        	</div>
							        	<div class="feature_title">Web Design</div>
							        	<div class="feature_desc">
							        		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							        		tempor incididunt ut labore et dolore magna aliqua.
							        	</div>
						        	</div>
						        </div>
						    </div>
						    <div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="skills" class="skills mysection">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					Skills & Abilities
				</div>
				<div class="section_subtitle">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
				</div>
			</div>
			<div class="col-sm-6">
				<div class="skill_div">
					<div class="skill_name">HTML5</div>
					<div class="skill_level">
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:90%">90%</div>
						  </div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="skill_div">
					<div class="skill_name">CSS3</div>
					<div class="skill_level">
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:85%">85%</div>
						  </div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="skill_div">
					<div class="skill_name">Bootstrap</div>
					<div class="skill_level">
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:80%">80%</div>
						  </div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="skill_div">
					<div class="skill_name">Wordpress</div>
					<div class="skill_level">
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">70%</div>
						  </div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="skill_div">
					<div class="skill_name">Jquery</div>
					<div class="skill_level">
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%">40%</div>
						  </div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="skill_div">
					<div class="skill_name">Javascript</div>
					<div class="skill_level">
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%">40%</div>
						  </div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="skill_div">
					<div class="skill_name">PHP</div>
					<div class="skill_level">
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:60%">60%</div>
						  </div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="skill_div">
					<div class="skill_name">Photoshop</div>
					<div class="skill_level">
						<div class="progress">
						    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">70%</div>
						  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="education" class="education mysection">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					Education
				</div>
				<div class="section_subtitle">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
				</div>
			</div>
			<div class="col-12">
				<div class="education_slider_main_div">
					<div class="education_slider_div">
						<div class="education_swiper swiper-container">
						    <div class="swiper-wrapper">
						        <div class="swiper-slide">
						        	<div class="degree_name">Bachelor of Science (Information Technology)</div>
						        	<div class="institution_name">Mumbai University</div>
						        	<div class="passing_year">2015</div>
						        </div>
						        <div class="swiper-slide">
						        	<div class="degree_name">Higher Secondary Certificate (Science)</div>
						        	<div class="institution_name">Maharashtra State Board</div>
						        	<div class="passing_year">2010</div>
						        </div>
						        <div class="swiper-slide">
						        	<div class="degree_name">Secondary School Certificate</div>
						        	<div class="institution_name">Maharashtra State Board</div>
						        	<div class="passing_year">2007</div>
						        </div>
						    </div>
						    <div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="work_experience" class="work_experience mysection">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_title">
					Work Experience
				</div>
				<div class="section_subtitle">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
				</div>
			</div>
			<div class="col-12">
				<div class="work_experience_tabs">
					<ul class="nav nav-pills text-center" role="tablist">
					    <li class="nav-item">
					      	<a class="nav-link active" data-toggle="pill" href="#company2">Gozoop</a>
					    </li>
					    <li class="nav-item">
					      	<a class="nav-link" data-toggle="pill" href="#company3">Avapya</a>
					    </li>
					</ul>
				</div>
			</div>
			<div class="col-12">
				<div class="work_experience_tabs_content">
					<div class="tab-content">
					    <div id="company2" class="container tab-pane active"><br>
					    	<span class="work_desg">Web Developer</span>
					      	<h3>Gozoop</h3>
					      	<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					    </div>
					    <div id="company3" class="container tab-pane fade"><br>
					    	<span class="work_desg">Web Developer/Designer Intern</span>
					      	<h3>Avapya</h3>
					      	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
					    </div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>

<section id="works_section" class="works_section mysection">
	<div class="container recentwork-filter">
		<div class="row rw_filter">
			<div class="col-12">
				<div class="section_title">
					Recent Works
				</div>
				<div class="section_subtitle">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
				</div>
			</div>
			<div class="col-12">
				<div class="recent_works_slider_tabs_div" data-control-type="boot-filter-drop-down" 
				data-control-name="location-filter" 
				data-control-action="filter" data-display="static">
					<ul>
						<li><a href="javascript:void(0)" class="recent_works_slider_tabs_div_a active_a" for="All" data-path="default" data-jplist-selected="true">All</a></li>
						<li><a href="javascript:void(0)" class="recent_works_slider_tabs_div_a" for="Dubai" data-path=".Dubai" data-jplist-selected="false">Dubai</a></li>
						<li><a href="javascript:void(0)" class="recent_works_slider_tabs_div_a" for="India" data-path=".India" data-jplist-selected="false">India</a></li>
					</ul>
				</div>
			</div>
			<div class="col-12">
				<div class="recent_works_slider_main_div">
					<div class="recent_works_slider_div">
						<div class="recent_works_swiper swiper-container">
						    <div class="swiper-wrapper list">
						        <div class="swiper-slide list-item"><span class="India swiper-slide-content">Slide 1</span></div>
						      	<div class="swiper-slide list-item"><span class="Dubai swiper-slide-content">Slide 2</span></div>
						      	<div class="swiper-slide list-item"><span class="Dubai swiper-slide-content">Slide 3</span></div>
						      	<div class="swiper-slide list-item"><span class="India swiper-slide-content">Slide 4</span></div>
						      	<div class="swiper-slide list-item"><span class="Dubai swiper-slide-content">Slide 5</span></div>
						      	<div class="swiper-slide list-item"><span class="Dubai swiper-slide-content">Slide 6</span></div>
						      	<div class="swiper-slide list-item"><span class="India swiper-slide-content">Slide 7</span></div>
						      	<div class="swiper-slide list-item"><span class="Dubai swiper-slide-content">Slide 8</span></div>
						      	<div class="swiper-slide list-item"><span class="Dubai swiper-slide-content">Slide 9</span></div>
						      	<div class="swiper-slide list-item"><span class="India swiper-slide-content">Slide 10</span></div>
						      	<div class="swiper-slide list-item"><span class="Dubai swiper-slide-content">Slide 11</span></div>
						      	<div class="swiper-slide list-item"><span class="Dubai swiper-slide-content">Slide 12</span></div>
						    </div>
						    <div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section id="contact_section" class="contact_section mysection">
	<div class="inner_div">
		<div class="container">
			<form class="contactform" method="POST" role="form" id="contactform" novalidate="">
				<div class="row">
					<div class="contactme_div col-12">
						<div class="section_title">
							Contact me
						</div>
						<div class="section_subtitle">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
		                    <div class="group">
		                        <input type="text" id="name" name="name" class="form_fields form-control" placeholder="" autocomplete="off" required="">
		                        <label>Name <span class="red red_asterix">*</span></label>
		                    </div>
		                </div>
						<div class="form-group">
		                    <div class="group">
		                        <input type="text" id="email" name="email" class="form_fields form-control" placeholder="" autocomplete="off" required="">
		                        <label>Email <span class="red red_asterix">*</span></label>
		                    </div>
		                </div>
						<div class="form-group">
		                    <div class="group">
		                        <input type="text" id="phone" name="phone" class="form_fields form-control" placeholder="" autocomplete="off" required="">
		                        <label>Phone <span class="red red_asterix">*</span></label>
		                    </div>
		                </div>
					</div>
					<div class="col-sm-6">
						<div class="otherdetailscomments">
		                    <div class="form-group">
		                        <div class="group textarea_group">
		                            <textarea name="yourmessage" class="form_fields textarea_field form-control" rows="10" id="yourmessage" autocomplete="off" required="" aria-required="true"></textarea>
		                            <label>Your Message <span class="red red_asterix">*</span></label>
		                        </div>
		                    </div>
		                </div>
					</div>
					<div class="col-12">
						<div class="form-group text-center">
							<button type="submit" class="btn btn-primary send_btn">Send</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<!-- PAGE CONTENT ENDS HERE -->



<!-- WEBSITE FOOTER STARTS HERE -->
<?php include($DOCUMENT_ROOT."footer.php");?>
<!-- WEBSITE FOOTER ENDS HERE -->
<?php include($DOCUMENT_ROOT."js-scripts.php");?>
<script>
		$("#contactform .send_btn").click(function() {

	        var name = $('#name').val();
	        var email = $('#email').val();
	        var phone = $('#phone').val();
	        var yourmessage = $('#yourmessage').val();



	        $('#name').css("border","2px solid #282828");
	        $('#email').css("border","2px solid #282828");
	        $('#phone').css("border","2px solid #282828");
	        $('#yourmessage').css("border","2px solid #282828");



	        if(name === ''){

	            $('#name').focus();
	            $('#name').css("border","2px solid red");
	            return false;
	        }

	        else if(email === ''){
	            $('#email').focus();
	            $('#email').css("border","2px solid red");
	            return false;
	        }

	        else if(!validateEmail(email)){
	            $('#email').focus();
	            $('#email').css("border","2px solid red");
	            return false;
	        }

	        else if(phone === ''){
	            $('#phone').focus();
	            $('#phone').css("border","2px solid red");
	            return false;
	        }

	        else if(isNaN(phone)){
	            $('#phone').focus();
	            $('#phone').css("border","2px solid red");
	            return false;
	        }

	        else if(phone.length > 10 || phone.length < 10){
	            $('#phone').focus();
	            $('#phone').css("border","2px solid red");
	            return false;
	        }

	        else if(yourmessage === ''){
	            $('#yourmessage').focus();
	            $('#yourmessage').css("border","2px solid red");
	            return false;
	        }        

	       	else{
	               	var base_url = window.location.origin;
	               	$.ajax({

	                   	url: 'action.php',

	                   	type: 'post',

	                   	data: {name: name,email: email,phone: phone,yourmessage: yourmessage},

	                   	success:function(responseText){

	                       

	                       	if(responseText == 1){

	                          	// window.location.href="thankyou";
	                          	alert(responseText);
	                          	alert("Form Submitted !");

	                       	}

	                       else if(responseText == 2){
	                       		alert(responseText);
	                          	//$('.email_id_error').show();

	                          	$(".email_id_error").show().delay(5000).fadeOut();

	                          	$('#email').css("border","2px solid red");

	                          	return false;

	                       	}

	                       	else

	                       	{

	                           alert(responseText);

	                       	}

	                   	}

	               	});
	           	}

	    });    

	    function validateEmail($email) {

	      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

	      return emailReg.test( $email );

	    }
	
</script>
</body>
</html>