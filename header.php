<?php
/**
 * Header template.
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<?php wp_head(); ?>


<script type="text/javascript">

</script>

    <!-- <script>
      window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', 'UA-154426484-1', '');
      ga('send', 'pageview');
  </script> -->
    <!-- <script async src="https://www.google-analytics.com/analytics.js"></script> -->


</head>
<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap&subset=latin-ext" rel="stylesheet">

        <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NST7NL4');</script>
<!-- End Google Tag Manager -->

<!-- <script async src="https://www.google-analytics.com/analytics.js"></script> -->

<script src="/assets/gmap3.js?body=1" type="text/javascript"></script>
<!-- <script async defer src="//maps.googleapis.com/maps/api/js"> </script> -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSuLdDtJx3JwjSidv1j9c1tkb9kYNJ9aU&" type="text/javascript"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>




<?php if(wp_is_mobile()){$deviceType = 'touch-device';}else{$deviceType = 'not-touch-device';} ?>
<body <?php body_class( $deviceType ); ?>>
	<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NST7NL4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'increase' ); ?></a>

	<?php/* if ( has_nav_menu( 'top' ) ) : ?>
		<div class="navigation-top">
			<div class="wrap">
				<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
			</div><!-- .wrap -->
		</div><!-- .navigation-top -->
	<?php endif; */?>

<?php $navbar_text_color = esc_attr(get_field( 'increase_options_header_text_color' , 'options' )); ?>
<header class="fixed-top header increase-header-<?php echo esc_attr(get_field( 'increase_options_header_text_color' , 'options' )); ?>" id="masthead" style="background-color: <?php echo esc_attr(get_field( 'increase_options_header_background_color' , 'options' )); ?>;">
	<div class="container p-0">
		<nav class="navbar navbar-expand-lg <?php if($navbar_text_color == 'light'){ echo 'navbar-light'; }else{ echo 'navbar-dark'; }; ?>">
			<a
	class="navbar-brand " href="<?php echo esc_url(get_bloginfo('url')); ?>">
				<?php $custom_logo_id = esc_attr(get_theme_mod( 'custom_logo' ));
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if(has_custom_logo()){ ?>
					<img class="shadow-0 shadow" style="
						position: absolute;
					    left: -100px;
						top: 0;
						background: white;
    					padding: 37px 15px 15px 15px;"
						src="<?php echo esc_url( $logo[0] ); ?>" class="d-inline-block" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
					<style>
						.header .navbar-brand img{
							max-height: <?php echo esc_attr(get_field( 'increase_options_header_logo_height' , 'options' )); ?>px
						}

						@media (max-width: 991px) {
							.header .navbar-brand img{
								position:relative !important;
								left: 0 !important;
							 	top: 0 !important;
								max-height: <?php echo esc_attr(get_field( 'increase_options_header_logo_height_mobile' , 'options' )); ?>px
							}
						}
					</style>
				<?php }else{ ?>
					<?php echo esc_attr(get_bloginfo('name')); ?>
				<?php } ?>
			</a>
			<div class="d-lg-none">
				<?php if(!get_field('header_phone_numbers','options')){ ?>
					<button class="btn <?php if($navbar_text_color == 'light'){ echo 'btn-outline-dark'; }else{ echo 'btn-light'; }; ?>" type="button" data-toggle="collapse" data-target="#header-phones" aria-controls="header-phones" aria-expanded="false" aria-label="Phone number">
						<span class="icon-custom increaseicons-phone navbar-custom-icon"></span>
					</button>
				<?php }else{ ?>
					<a href="tel:<?php the_field('header_phone_number_full','options'); ?>" class="btn <?php if($navbar_text_color == 'light'){ echo 'btn-outline-dark'; }else{ echo 'btn-light'; }; ?>" aria-label="Phone number">
						<span class="icon-custom increaseicons-phone navbar-custom-icon"></span>
					</a>
				<?php } ?>
				<?php if ( has_nav_menu( 'header_menu' ) ) { ?>
					<div  class="nav-icon btn  "data-toggle="collapse" data-target="#header-menu" aria-controls="header-menu" aria-expanded="false" aria-label="Toggle navigation">
						<!-- <span class="icon-custom increaseicons-burger navbar-custom-icon"></span> -->
					 <div></div>
				 </div>





				<?php } ?>
			</div>
			<div class="collapse navbar-collapse text-uppercase" id="header-menu">
				<?php if ( has_nav_menu( 'header_menu' ) ) {
					wp_nav_menu(
						array(
							'menu' => 'header_menu',
							'theme_location' => 'header_menu',
							'depth' => 2,
							'container' => '',
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
							'walker' => new WP_Bootstrap_Navwalker()
						)
					);
				} ?>
			</div>
			<?php if(!get_field('header_phone_numbers','options')){ ?>
				<div class="collapse w-100" id="header-phones">
					<?php
					if( have_rows('sale_agents', 'options') ){ ?>
						<ul id="menu-head-phones" class="nav navbar-nav ml-md-auto">
							<?php $i=1; while ( have_rows('sale_agents', 'options') ) : the_row(); ?>
								<li id="menu-phones-<?php echo $i; ?>" class="menu-item menu-item-type-post_type nav-item">
									<a class="nav-link" href="tel:<?php echo esc_attr(get_sub_field('sale_agent_full_phone', 'options')); ?>"><?php echo esc_attr(get_sub_field('sale_agent_show_phone', 'options')); ?> - <?php echo esc_attr(get_sub_field('sale_agent_name', 'options')); ?></a>
								</li>
								<?php $i++; endwhile; ?>
						</ul>
					<?php }	?>

				</div>
			<?php }	?>
		</nav>
	</div>


	<div class="d-none d-xl-block " style="
	position:absolute;
	top:0;
	right:-5px;
	padding: 2px 50px 2px 65px;
	background:#013D8C;
	">
	<a class="text-light" href="tel:<?php the_field('header_phone_number_show','options'); ?>">
	<div style="
	position: absolute;
        left: 35px;
    top: 12px;" class="icon-custom increaseicons-phone navbar-custom-icon text-light h2 d-inline-flex">

	</div>
	<div style="    padding-top: 14px;     padding-left: 14px;" class="text-light pb-3 d-inline-flex"><?php the_field('header_phone_number_full','options'); ?></a></div>

	</div>



</header>
<?php /*
if ( is_front_page() ) {
// Default homepage
?>
<script type="text/javascript">

	     jQuery("#masthead").addClass("background-white-top");
		 jQuery("#ul#menu-meniu-ro > li > a").addClass("color-white-top");

</script>
<?
}
 */?>




<!-- <div id="content">
    <div class="container"> -->
