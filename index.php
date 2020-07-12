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
</head>
<body class="home">
<!-- WEBSITE HEADER STARTS HERE -->
<?php include($DOCUMENT_ROOT."header.php");?>
<!-- WEBSITE HEADER ENDS HERE -->



<!-- PAGE CONTENT STARTS HERE -->
<div class="outer_div">
	<section id="home" class="home mysection">
		<div class="inner_div">
			<div class="section1_inner_div">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-5 p-0">
							<div class="who_am_i_left_div">
								I am Bhavik Trivedi<br>
								and I'm a Web
							</div>
						</div>
						<div class="col-lg-7 p-0">
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
						<div class="col-12 p-0 text-center">
							<div class="sm_div">
								<a href="https://www.facebook.com/btdgr8/" target="_blank" class="btn btn-round btn-clear d-inline-block btn-facebook"><i class="fa fa-facebook-f"></i></a>
								<a href="https://www.linkedin.com/in/trivedibhavik/" target="_blank" class="btn btn-round btn-clear d-inline-block btn-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="skype:live:trivedi.bhavik.92" target="_blank" class="btn btn-round btn-clear d-inline-block btn-skype"><i class="fa fa-skype"></i></a>
								<a href="//api.whatsapp.com/send?phone=919920992646" target="_blank" class="btn btn-round btn-clear d-inline-block btn-whatsapp"><i class="fa fa-whatsapp"></i></a>
								<a href="https://www.instagram.com/btdgr8/?hl=en" target="_blank" class="btn btn-round btn-clear d-inline-block btn-instagram"><i class="fa fa-instagram"></i></a>
								<a href="https://www.snapchat.com/add/btdgr8" target="_blank" class="btn btn-round btn-clear d-inline-block btn-snapchat"><i class="fa fa-snapchat-ghost"></i></a>
								<a href="https://twitter.com/bhavikdgr8" target="_blank" class="btn btn-round btn-clear d-inline-block btn-twitter"><i class="fa fa-twitter"></i></a>
								<!-- <a href="javascript:void(0)" target="_blank" class="btn btn-round btn-clear d-inline-block btn-google"><i class="fa fa-google-plus"></i></a> -->
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
						<!-- Here’ a little bit about me -->
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about_title">
						Allow me to introduce myself
					</div>
					<div class="about_desc">
						I am a Frontend / UI UX / Web Developer with over 3 years of experience in Digital Marketing. My interest ranges from Web Development to Web Design. I share a passion for technology, programming, and innovation. I have completed my graduation in Bachelor of Science (Information Technology) from Mumbai University. I was born in Mumbai, India and currently am based out in Mumbai, India.
					</div>
				</div>
				<div class="col-lg-4 text-center">
					<img src="<?php echo $base_url; ?>images/bhavik.png" class="img-fluid">
				</div>
				<div class="col-lg-4">
					<div class="about_title">
						SPECIALIZED IN
					</div>
					<div class="about_desc">
						<div id="accordion">
						    <div class="card">
							    <div class="card-header">
							        <a class="card-link" data-toggle="collapse" href="#collapseOne">
							          	BOOTSTRAP
							        </a>
							    </div>
						      	<div id="collapseOne" class="collapse show" data-parent="#accordion">
						        	<div class="card-body">
						          		Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our SaaS variables and mixins, responsive grid system, extensive pre-built components, and powerful plugins built on jQuery. I have over 3 years of experience of working with Bootstrap.
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
						          		Responsive web design (RWD) is an approach to web design that makes web pages render well on a variety of devices and window or screen sizes. Mobile applications are integrated into our daily lives and I ensure every application developed by me help you reap all market benefits. The websites coded and created by me are 100% compatible with all devices and mobile responsive. 
						        	</div>
						      	</div>
						    </div>
						    <div class="card">
						      	<div class="card-header">
						        	<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
						          		SEO FRIENDLY
						        	</a>
						      	</div>
						      	<div id="collapseThree" class="collapse" data-parent="#accordion">
						        	<div class="card-body">
						          		SEO is a dynamic process that gives your business a powerful push. It is a vital process in improving your web rankings. If your clients cannot find you online, you practically do not exist. <br>
										I help you understand your current standings among your competitors, analyses your website and ensure every element of SEO is configured.
						        	</div>
						      	</div>
						    </div>
						    <div class="card">
						      	<div class="card-header">
						        	<a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
						          		UI FRIENDLY
						        	</a>
						      	</div>
						      	<div id="collapseFour" class="collapse" data-parent="#accordion">
						        	<div class="card-body">
						          		At the most basic level, the user interface (UI) is a series of screens, pages, and visual elements—like buttons and icons—that enable a viewers to interact with a product or service. Websites are the internet real estate. It is essential that your website stands out and clearly displays your company and its products to your customers. I have worked with various businesses and created high quality and responsive websites that stand out in a crowd.
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
						I offer overall web development services and have worked on the latest web technologies as per industry standards.
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
								        	<div class="feature_title">Frontend Development</div>
								        	<div class="feature_desc">
								        		Front-end web development is the practice of converting data to graphical interface for user to view and interact with data through digital interaction using HTML, CSS and JavaScript
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
								        		WordPress is a free and open-source content management system based on PHP & MySQL. Features include a plugin architecture and a template system. It is most associated with blogging but supports other types of web content including more traditional mailing lists and forums, media galleries, and online stores. 
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
								        		Web development is the work involved in developing a web site for the Internet or an intranet . Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social network services.
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
								        		Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; interface design; authoring, including standardised code and proprietary software; user experience design; and search engine optimization.
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
						Being a digital enthusiast my skills and abilities range from web designing to web development. My area of expertise would be in the area of frontend development for Digital assets optimizing industry standards and client expectations
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
							    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50%">50%</div>
							  </div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="skill_div">
						<div class="skill_name">Javascript</div>
						<div class="skill_level">
							<div class="progress">
							    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50%">50%</div>
							  </div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="skill_div">
						<div class="skill_name">PHP</div>
						<div class="skill_level">
							<div class="progress">
							    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:45%">45%</div>
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
						Qualification
					</div>
					<div class="section_subtitle">
						I have completed my graduation in Bachelors of Science in Information Technology from Mumbai University.
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
						I have over 3 years of work experience in the digital marketing space. In my stint, I have worked as a web designer and a web developer in some of the leading digital marketing agencies.
					</div>
				</div>
				<div class="col-12">
					<div class="work_experience_tabs">
						<ul class="nav nav-pills text-center" role="tablist">
						    <!-- <li class="nav-item">
						      	<a class="nav-link " data-toggle="pill" href="#company1">Freelancer</a>
						    </li> -->
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
						    <!-- <div id="company1" class="container tab-pane fade"><br>
						    	<span class="work_desg">Web Developer</span>
						      	<h3>Freelancer</h3>
						      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						    </div> -->
						    <div id="company2" class="container tab-pane active"><br>
						    	<span class="work_desg">Web Developer</span>
						      	<h3>Gozoop Online Pvt Ltd.</h3>
						      	<p>I have worked as a Web Developer at Gozoop, Mumbai for more than 3 years. My responsibilities covered understanding client requirement for developing websites and further developing it to delivering optimum results.</p>
						    </div>
						    <div id="company3" class="container tab-pane fade"><br>
						    	<span class="work_desg">Web Developer/Designer Intern</span>
						      	<h3>Avapya Web Services</h3>
						      	<p>I have worked as a Web Developer / Design Intern at Avapya Web Services for 5 months. As a beginner, I worked on designs and developed them for various clients as per brand guidelines.</p>
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
						Work Highlights
					</div>
					<div class="section_subtitle">
						During my stint of 3+ years of working with the Digital Marketing Agencies, I have worked on various brands and created websites for brands/companies across industries. Here's a glimpse at the key highlights.
					</div>
				</div>
				<?php include($DOCUMENT_ROOT."work-page.php");?>
			</div>
		</div>
	</section>

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
								<!-- Don't be stranger<br>
								Just say hello. --> I'd love to hear from you !
							</div>
						</div>
						<div class="col-sm-6">
							<div class="contact_details_div">
								<div class="contact_a">
									<a href="mailto:trivedi.bhavik.92@gmail.com"><i class="fa fa-icon fa-envelope"></i> trivedi.bhavik.92@gmail.com</a>
								</div>
								<div class="contact_a">
									<a href="skype:live:trivedi.bhavik.92"><i class="fa fa-icon fa-skype"></i> live:trivedi.bhavik.92</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="contact_details_div">
								<div class="contact_a">
									<a href="tel:+91 9920992646"><i class="fa fa-icon fa-phone"></i> +91 9920992646</a>
									<!-- <a href="tel:+971 0529202919"><i class="fa fa-icon fa-phone"></i> +971 0529202919</a> -->
								</div>
								<div class="contact_a">
									<a href="//api.whatsapp.com/send?phone=919920992646" target="_blank"><i class="fa fa-icon fa-whatsapp"></i> +91 9920992646</a>
								</div>
							</div>
						</div>
						<!-- <div class="col-sm-6">
							<div class="form-group">
			                    <div class="group">
			                        <input type="text" id="name" name="name" class="form_fields form-control" placeholder="" autocomplete="off" required=""">
			                        <label>Name <span class="red red_asterix">*</span></label>
			                    </div>
			                </div>
							<div class="form-group">
			                    <div class="group">
			                        <input type="text" id="email" name="email" class="form_fields form-control" placeholder="" autocomplete="off" required=""">
			                        <label>Email <span class="red red_asterix">*</span></label>
			                    </div>
			                </div>
							<div class="form-group">
			                    <div class="group">
			                        <input type="text" id="phone" name="phone" class="form_fields form-control" placeholder="" autocomplete="off" required=""">
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
						</div> -->
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
<!-- PAGE CONTENT ENDS HERE -->

<?php include($DOCUMENT_ROOT."work-modal.php");?>


<!-- WEBSITE FOOTER STARTS HERE -->
<?php include($DOCUMENT_ROOT."footer.php");?>
<!-- WEBSITE FOOTER ENDS HERE -->
<?php include($DOCUMENT_ROOT."js-scripts.php");?>

<script>
	
	
</script>
</body>
</html>