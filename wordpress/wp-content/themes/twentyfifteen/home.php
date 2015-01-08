<?php
/*
Template Name: home
*/

//get_header(); ?>
	<div id="primary" class="content-area">
	<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>株式会社Minato</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo get_template_directory_uri(); ?>/helios/js/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/helios/js/jquery.dropotron.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/helios/js/jquery.scrolly.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/helios/js/jquery.onvisible.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/helios/js/skel.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/helios/js/skel-layers.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/helios/js/init.js"></script>
		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
		<link rel="stylesheet" href="css/style2.css" />
		<noscript>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/helios/css/skel.css" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/helios/css/style.css" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/helios/css/style-desktop.css" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/helios/css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

		body {
			max-width: 700px;
			margin: 0 auto;
		}
	</style>
	
	</head>
<body class="homepage">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<section id="homes">
		<!-- Header -->
		<div id="background_logo">
		</div>
		<div id="thumb">
			<img class="minatologo" src="./images/minato_logo.png">
		</div>
				<!-- Nav -->
					<nav id="nav" style="color: white;">
						<ul>
							<li><a href="#skel-layers-wrapper" class="button circled scrolly">Home</a></li>
							<li><a href="#banner" class="button circled scrolly">Concept</a></li>
							<li><a href="#member" class="button circled scrolly">Members</a></li>
							<li><a href="#base" class="button circled scrolly">Base</a></li>
						</ul>
					</nav>
</section>
		<!-- Banner -->
			<div id="concept" class="wrapper style1">
				<section id="banner">
					<header>
						<h2><strong>Concept</strong></h2>
						<p>
							
						</p>
					</header>
				</section>
			</div>
		<!-- Carousel -->
			<div id="member" class="wrapper style1">
				<section id="banner1">
					<header>
						<h2><strong>Members</strong></h2>
						<p></p>
					</header>
				</section>
				<section id="member_article" class="container special">
					<div class="row">
						<article class="member_article 4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/andou.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Member Name</a></h3>
							</header>
							<p>
								<a class="fancybox" href="#inline1" title="Member Name">Full Information</a>
							</p>
						</article>
						<article class="member_article 4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/jen.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Member Name</a></h3>
							</header>
							<p>
								<a class="fancybox" href="#inline2" title="Member Name">Full Information</a>
							</p>
						</article>
						<article class="member_article 4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/daniel.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Member Name</a></h3>
							</header>
							<p>
								<a class="fancybox" href="#inline3" title="Member Name">Full Information</a>
							</p>
						</article>
						<article class="member_article 4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/felman.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Member Name</a></h3>
							</header>
							<p>
								<a class="fancybox" href="#inline4" title="Member Name">Full Information</a>
							</p>
						</article>
						<article class="member_article 4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/prof_pic.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Member Name</a></h3>
							</header>
							<p>
								<a class="fancybox" href="#inline5" title="Member Name">Full Information</a>
							</p>
						</article>
						<article class="member_article 4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/andou.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Member Name</a></h3>
							</header>
							<p>
								<a class="fancybox" href="#inline6" title="Member Name">Full Information</a>
							</p>
						</article>
						<article class="member_article 4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/jen.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Member Name</a></h3>
							</header>
							<p>
								<a class="fancybox" href="#inline7" title="Member Name">Full Information</a>
							</p>
						</article>
						<article class="member_article 4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/daniel.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Member Name</a></h3>
							</header>
							<p>
								<a class="fancybox" href="#inline8" title="Member Name">Full Information</a>
							</p>
						</article>
						<article class="member_article 4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/felman.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Member Name</a></h3>
							</header>
							<p>
								<a class="fancybox" href="#inline9" title="Member Name">Full Information</a>
							</p>
						</article>
						<article class="member_article 4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/prof_pic.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Member Name</a></h3>
							</header>
							<p>
								<a class="fancybox" href="#inline10" title="Member Name">Full Information</a>
							</p>
						</article>
					</div>
				</section>

			</div>
			
		<!-- Features -->
		
			<div id=base class="wrapper style1">
				<section id="banner2">
					<header>
						<h2><strong>Our Bases</strong></h2>
						<p></p>
					</header>
				</section>
				<section id="features" class="container special">
					<div class="row">
						<article class="4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/pic16.png" alt="" /></a>
							<header>
								<h3><a href="#">Base 1</a></h3>
							</header>
							<p>
								Details , description here. Details , description here. Details , description here. Details , description here.
							</p>
						</article>
						<article class="4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/pic17.png" alt="" /></a>
							<header>
								<h3><a href="#">Base 2</a></h3>
							</header>
							<p>
								Details , description here. Details , description here. Details , description here. Details , description here.
							</p>
						</article>
						<article class="4u special">
							<a href="#" class="image featured"><img src="<?php echo get_template_directory_uri(); ?>/helios/images/pic18.png" alt="" /></a>
							<header>
								<h3><a href="#">Base 3</a></h3>
							</header>
							<p>
								Details , description here. Details , description here. Details , description here. Details , description here.
							</p>
						</article>
					</div>
				</section>

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Contact -->
								<section class="contact">
									<header>
										<h3>Nisl turpis nascetur interdum?</h3>
									</header>
									<p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
									<ul class="icons">
										<!-- <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li> -->
										<li>
										<div class="fb-like-box" data-href="https://www.facebook.com/pages/minatocoltd/102274136519328" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
										<!-- <a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a> -->
										</li>
										<!-- <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
										<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=http://minato.localhost/&title=Minato.co.jp.dev&summary=Minaco.co.jp.dev&source=TheNameOfYourSiteGoesHere" rel="nofollow" onclick="NewWindow(this.href,'template_window','550','400','yes','center');return false" onfocus="this.blur()" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										 -->
										 </ul>
								</section>
							
							<!-- Copyright -->
								<div class="copyright">
									<ul class="menu">
										<li>&copy; All Rights Reserved 2014, Minato Co.,Ltd</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							
						</div>
					
					</div>
				</div>
			</div>

	</body>
</html>
	</div><!-- .content-area -->
<div class="member_popup">
<div id="inline1" class="member_popup" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/andou.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<div id="inline2" class="member_popup" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/jen.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<div id="inline3" class="member_popup" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/daniel.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<div id="inline4" class="member_popup" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/felman.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<div id="inline5" class="member_popup" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/prof_pic.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<div id="inline6" class="member_popup" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/andou.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<div id="inline7" class="member_popup" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/jen.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<div id="inline8" class="member_popup" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/daniel.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<div id="inline9" class="member_popup" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/member_images/felman.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<div id="inline10" class="member_popup" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/prof_pic.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<div id="inline1" style="width:400px;text-align:center;display: none;">
	<img src="<?php echo get_template_directory_uri(); ?>/helios/images/prof_pic.jpg" alt="" />
	</br>
	<h3>Member Name</h3>
	</br>
	<p>
		Position:
	</br>		
		Hobby:
	</br>		
		Interest:
	</p>
</div>
<?php get_footer(); ?>
