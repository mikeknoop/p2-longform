<?php
/**
 * Header template.
 *
 * @package P2
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="http://async.zapier.com/wp-content/uploads/2013/09/favicon.ico" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="header">
<?php do_action( 'before' ); ?>

	<div class="sleeve">
		<a href="<?php echo home_url( '/' ); ?>"><img src="http://async.zapier.com/wp-content/uploads/2013/09/async.png" /></a>
	</div>

    <?php if (is_user_logged_in()): ?> 
    <div class="avatar">
		<?php
			global $current_user;
      		get_currentuserinfo();
		?>
        <a href="http://async.zapier.com/wp-admin/"><?php echo $current_user->user_login; ?></a>
		<a href="http://async.zapier.com/wp-admin/"><?php echo get_avatar( get_current_user_id(), 30 ); ?></a>
	</div>
    <?php endif; ?>
    
	<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<div role="navigation" class="site-navigation main-navigation">
		<h1 class="assistive-text"><?php _e( 'Menu', 'p2' ); ?></h1>
		<div class="assistive-text skip-link"><a href="#main" title="<?php esc_attr_e( 'Skip to content', 'p2' ); ?>"><?php _e( 'Skip to content', 'p2' ); ?></a></div>

		<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'fallback_cb'    => '__return_false',
		) ); ?>
	</div>
	<?php endif; ?>
</div>

<div id="wrapper">

	<?php get_sidebar(); ?>