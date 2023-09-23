<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>
<?php

$shapely_transparent_header         = get_theme_mod( 'shapely_transparent_header', 0 );
$shapely_transparent_header_opacity = get_theme_mod( 'shapely_sticky_header_transparency', 100 );

if ( 1 == $shapely_transparent_header && $shapely_transparent_header_opacity ) {
	if ( $shapely_transparent_header_opacity < 100 ) {
		$style = 'style="background: rgba(255, 255, 255, 0.' . esc_attr( $shapely_transparent_header_opacity ) . ');"';
	} else {
		$style = 'style="background: rgba(255, 255, 255, ' . esc_attr( $shapely_transparent_header_opacity ) . ');"';
	}
} else {
	$style = '';
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>

	<header id="masthead" class="site-header<?php echo get_theme_mod( 'mobile_menu_on_desktop', false ) ? ' mobile-menu' : ''; ?>" role="banner">
		
</div>
	<div class="custom_header"style="background-color:#404050; filter:brightness(110%);">
		<div class="row custom" style="height:auto !imporant;">
			<div class="col-md-4 "><img src="http://localhost/uk_word/wp-content/uploads/2023/09/Group-19.png" id="options" alt=""></div>
			<div class="col-md-4 text-center"><img src="http://localhost/uk_word/wp-content/uploads/2023/09/BBM_Logo-1.png" id="logomid" alt=""></div>
			<div class="col-md-4 right">
			<div class="col text-right right">
                        <img src="http://localhost/uk_word/wp-content/uploads/2023/09/first.png" class="img-fluid top1">
                        <img src="http://localhost/uk_word/wp-content/uploads/2023/09/second.png" class="img-fluid top1">
                        <img src="http://localhost/uk_word/wp-content/uploads/2023/09/third.png" class="img-fluid top2">
                        <img src="http://localhost/uk_word/wp-content/uploads/2023/09/quote.png" class="img-fluid top3">
                        <div class="div my-1 text-right">
                            <img src="http://localhost/uk_word/wp-content/uploads/2023/09/bui.png" class="socialicon">
                            <img src="http://localhost/uk_word/wp-content/uploads/2023/09/6.png" class="socialicon">
                            <img src="http://localhost/uk_word/wp-content/uploads/2023/09/7.png" class="socialicon">
                            <img src="http://localhost/uk_word/wp-content/uploads/2023/09/8-1.png" class="socialicon">
                        </div>    
                    </div>
			</div>
		</div>
	</div>
	</header><!-- #masthead -->
	<div id="content" class="main-container">
		<?php if ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_404() && ! is_page_template( 'page-templates/template-widget.php' ) ) : ?>
			<div class="header-callout">
				<?php shapely_top_callout(); ?>
			</div>
		<?php endif; ?>

		<section class="content-area <?php echo ( get_theme_mod( 'top_callout', true ) ) ? '' : ' pt0 '; ?>">
			<div id="main" class="<?php echo ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_page_template( 'page-templates/template-widget.php' ) ) ? 'container' : ''; ?>" role="main">




		