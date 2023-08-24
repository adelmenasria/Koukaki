<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
	<header id="masthead" class="site-header">
    <div class="navbar">
      <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      <div class="navbar-toggler-wrapper">
        <button id="navbar-toggler" class="navbar-toggler" aria-controls="primary-menu" aria-expanded="false">
          <span class="icon"></span>
        </button>
      </div>
    </div>
		<div id="menu-overlay" class="menu-overlay">
      <nav id="site-navigation" class="menu">
        <a href="http://koukaki.local" class=""><img class="logo-small" src="<?= get_stylesheet_directory_uri() . '/assets/img/logo-menu.png'; ?>" alt="logo menu Fleurs d'oranger & chats errants"></a>
        <ul class="nav">
          <li class="nav-item"><a class="nav-link" href="#story">Histoire</a></li>
          <li class="nav-item"><a class="nav-link" href="#my-characters">Personnages</a></li>
          <li class="nav-item"><a class="nav-link" href="#place">Lieu</a></li>
          <li class="nav-item"><a class="nav-link" href="#studio">Studio Koukaki</a></li>
        </ul>
      </nav><!-- #site-navigation -->
      <div class="menu-footer">Studio Koukaki</div>
    </div>
	</header><!-- #masthead -->
