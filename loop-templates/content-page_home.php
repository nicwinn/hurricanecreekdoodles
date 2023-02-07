<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<!--<h1 class="text-center"><i class="fa-solid fa-paw"></i> --><?php //bloginfo( 'name' ); ?><!--</h1>-->
    <h2 class="text-center hcd-script-font" style="font-size: 3rem; padding: 1.1rem;"><?php bloginfo( 'description' ); ?></h2>
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
