<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script src="<?php bloginfo('template_directory')?>/jq/css_browser_selector.js" type="text/javascript"></script>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/jq/jquery-1.8.2.min.js"></script> 
<script type='text/javascript'>
jQuery(document).ready(function() {
jQuery("#dropmenu ul ul").css({display: "none"}); // Opera Fix
jQuery("#dropmenu li").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(268);
		},function(){
		jQuery(this).find('ul:first').css({visibility: "hidden"});
		$("#dropmenu li li:has(ul)").addClass("parent");
		});
		
		$("#mob_header select").change(function(){
	window.location = this.value;
});
		

});
</script> 
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/jq/responsiveslides.min.js"></script>
<script type="text/javascript" >
    $(function () {
      $("#slider4").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 1000,
        namespace: "centered-btns"
      });
    });
</script>
<!-- Google Recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-52886085-1', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');
</script>
</head>
<body>
<div id="logo">
<nav class="language">
	<!--<span><a class="loginlink" href="http://www.duesseldorfer-toastmasters.de/login/">Login</a> |</span>-->
	<span>Sprache / Language</span>
	<a href="<?php echo get_option('home'); ?>/en/"><img class="flag" src="<?php bloginfo('template_directory')?>/images/flags/flag_gb.svg" alt="EN"></a>
	<a href="<?php echo get_option('home'); ?>/"><img class="flag" src="<?php bloginfo('template_directory')?>/images/flags/flag_de.svg" alt="DE"></a>
</nav>
<div class="log_s">
<?php if(get_option_tree("logo_image")) { ?>
	<a href="<?php echo get_option('home'); ?>/">
    	<img class="logoImg" src="<?php echo get_option_tree("logo_image"); ?>" alt="Logo" />
    </a>
<?php } else {?>
<p class="logo"><a href="<?php echo get_option('home'); ?>/"><?php echo get_split_title();  ?></a></p>
<!--<h1><a href="<?php echo get_option('home'); ?>/"><?php echo get_split_title();  ?></a></h1>-->
<p> <?php echo get_bloginfo ( 'description' );  ?></p>
<?php }?>
</div>
</div>
<div id="header">
    <div id="dropmenu">
          <?php  wp_nav_menu(array('theme_location'=>'header_Menu','container'=>'','items_wrap' => '%3$s')); ?>
    </div>
</div>
<div id="mob_header">
	<?php echo wp_mobile_menu( array( 'menu_name' => 'header_Menu', 'id' => 'main-menu-mob' ) ) ; ?>
</div>
<?php if(!is_home()) {?>
<div class="page-topimg">
<?php if(get_field('banner')) {?>
<img src="<?php the_field('banner'); ?>" />
<?php } else {?>
<img src="<?php bloginfo('template_directory')?>/images/page-top.jpg" />
<?php } ?>
</div>
<?php } ?>
<div id="page">