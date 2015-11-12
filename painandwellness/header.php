<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" >
	<meta name="google-site-verification" content="jGbm2GEhPqcG4tlHkZtCdoyM1eDI-z6hodIwQF44iTI" />

	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png"/>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico"/>
 
<!--<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>-->
<title><?php bloginfo('name'); ?></title>

<!-- rich snippet -->
<div itemscope itemtype="http://schema.org/NewsArticle" style="visibility:hidden;height:0;">
	<h2 itemprop="headline"><?php echo the_title();?></h2>
	<h3 itemprop="alternativeHeadline"><?php echo substr(strip_tags($post->post_content), 0, 60);?></h3>
	<span itemprop="description"><?php echo substr(strip_tags($post->post_content), 0, 200);?></span>
	<span itemprop="articleBody"><?php echo substr(strip_tags($post->post_content), 0, 600);?></span>
	<img itemprop="image" src="<?php bloginfo('template_url'); ?>/images/mainlogo-v2.jpg" alt="thumbnail 1 summary"/>
	<meta itemprop="datePublished" content="<?php echo get_the_date(); ?>"/>
</div>
<!-- end rich snippet -->

<?php
gravity_form_enqueue_scripts(form_id, ajax);
gravity_form_enqueue_scripts(4, true);
?>

<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/painandwellness.com\/wp-content\/themes\/painandwellness\/js\/wp-emoji-release.min.js"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

<link rel='stylesheet' id='woocommerce-layout-css'  href='<?php bloginfo('template_url'); ?>/assets/css/woocommerce-layout.css' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='<?php bloginfo('template_url'); ?>/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='<?php bloginfo('template_url'); ?>/assets/css/woocommerce.css' type='text/css' media='all' />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/custom.css" type="text/css" media="screen" />

<!-- FONT AWESOME -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css' type='text/css' media='all' />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery/jquery-migrate.min.js'></script>
<style>
	a { color: #117dbf; }
	a:hover, a:focus { color: #117dbf;}
	
	/* Accent Color */
	.header .button, .intro-slider .slide-caption > h5, .intro-small .intro-caption h5, .doctor-name, .ad, .event-date, .paging .current a, .paging li:hover a,
	.section-updates .section-actions .button, .form-appointment .form-actions .button, .subscribe-btn, .widget_wplook_contact_form_widget, .widget_search, .widget_form, .form-submit .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt,
	.woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover  { /*background: #990280;*/background:#51b8f2; }
	.intro-slider .slide-caption-inner, .intro-small .intro-caption h2, .doctor-box, .event-box { border-left-color: #51b8f2; }
	.intro-slider .slide-caption-inner a, .doctor-box a, .event-body > .fa, .format-blockquote blockquote .fa, .section-testimonials .section-head .fa, .woocommerce .woocommerce-result-count { color: #51b8f2; }
	
	/* Accent Color2  */
	.intro.no-bg-img, .doctor-program, .mejs-inner, .mejs-container, .mejs-embed, .mejs-embed body, .mejs-container .mejs-controls, .woocommerce span.onsale, .woocommerce ul.products li.product .button:hover, .cart-status:hover { background: #7f64b5!important; }
	.list-services-alt li:hover a, .list-services-alt .current a, .list-services-alt .current [class^="icon-"], .list-services-alt li:hover [class^="icon-"],
	.section-ribbon i, .list-event-meta a.link, .event h3, .woocommerce .star-rating span, .cart-status a, .cart-status i { color: #7f64b5!important; }
	.article-single-event blockquote { border-left-color: #7f64b5; }
	.woocommerce ul.products li.product .button, .woocommerce ul.products li.product .button:hover { border-color: #7f64b5 }
	.slider-home .slide-body .columns:after, .footer-section-alt::before, .main-head-content .columns::before, .no-main-image, .team-tile-image::after, .service-tile-image::after, .project-tile-image::after, .news-tile-image::after, .section-quote .section-image::after, .section-project .section-head-content .columns::before, .section-project .section-head-actions .scroll-down { background: #51b8f2;}
	.footer { background: #54667a;}
</style>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
<style type="text/css" media="screen">
<?php if ( is_singular() && get_option( 'thread_comments' ) )
                wp_enqueue_script( 'comment-reply' ); ?>
</style>

        <?php wp_head(); ?>
</head>
 
<!--<body <?php body_class(); ?>>-->
<?php if(is_page()){ ?>
	<body class="single single-wpl_post_services postid-108">
<?php } else { ?>
	<body class="home page page-id-9 page-template page-template-template-homepage page-template-template-homepage-php">
<?php } ?>

<div class="wrapper">
	<header class="header">
		<div class="header-bar row">
			<div class="columns large-6 medium-6 mobile-hidden">
									<p>Life is Better When You're at Your Best!</p>
							</div><!-- /.columns large-6 -->

			<div class="columns large-6 medium-6">
				
									<a href="/request-appointment" class="button btn-light-blue waypoint">Request Your Appointment</a>
							</div><!-- /.columns large-6 -->
		</div><!-- /.header-bar row -->

		<div class="row">
			<div class="columns large-3 medium-12">
									<a href="/" class="logo">
						<img src="<?php bloginfo('template_url'); ?>/images/mainlogo-v2.jpg" alt="Health &amp; Medical">
					</a>
							</div><!-- /.columns large-3 -->

			<div class="columns large-7 medium-8 submobile-menu">
				<a href="#" class="btn-menu">
					<span></span>
				</a>
			
			<!-- HEADER NAVIGATION -->
			<nav class="nav">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>

			</div><!-- /.columns large-6 -->

			<div class="columns large-2 medium-4 mobile-hidden headerphone-hidden">
									<div class="phone">
						<i class="fa fa-mobile"></i>
						<small>Call Us</small>
						<a href="tel:469 326 5100">469 326 5100</a>
					</div><!-- /.phone -->
							</div><!-- /.columns large-3 -->
		</div><!-- /.row -->
	</header><!-- /.header -->