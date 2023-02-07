<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<nav id="main-nav" class="fixed-top hcd-top-nav" aria-labelledby="main-nav-label">
    <h2 id="main-nav-label" class="screen-reader-text">
        <?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
    </h2>
    <h1 class="text-center"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><i class="fa-solid fa-paw"></i> <?php bloginfo( 'name' ); ?></a></h1>


    <?php
    wp_nav_menu(
        array(
            'theme_location'  => 'primary',
            'container_class' => 'nav justify-content-center',
            'container_id'    => '',
            'menu_class'      => '',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'depth'           => 2,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
        )
    );
    ?>
</nav>

