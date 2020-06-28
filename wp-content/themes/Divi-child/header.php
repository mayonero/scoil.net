<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php elegant_description(); elegant_keywords(); elegant_canonical(); do_action( 'et_head_meta' ); $template_directory_uri = get_template_directory_uri(); ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script type="text/javascript"> document.documentElement.className = 'js'; </script>
 
	<?php if(is_search() || is_archive() || is_single()) { ?>
		<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/layout/archive.css" type="text/css" media="all">
    <?php } ?>
    <?php $logo = ( $user_logo = et_get_option( 'divi_logo' ) ) && ! empty( $user_logo ) ? $user_logo : $template_directory_uri . '/images/logo.png'; ?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container row">
            <h1 id="logo-home">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
                </a>
            </h1>
        </div>
    </header>
