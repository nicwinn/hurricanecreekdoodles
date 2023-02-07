<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<style>
    /*.hcd-puppy-id-single span:before {*/
    /*    content: "Collar Color ";*/
    /*}*/
    .hcd-puppy-id-single span:after {
        content: "#<?php the_ID(); ?>";
        /*font-size: .65rem;*/
    }

</style>
<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'puppies' );
//					understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
//					if ( comments_open() || get_comments_number() ) {
//						comments_template();
//					}
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
<!--			--><?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
