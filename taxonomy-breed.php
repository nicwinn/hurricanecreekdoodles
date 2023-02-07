<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
<!--			--><?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					?>
					<header class="page-header">
                        <?php $term = get_queried_object();
                            $hcd_count = $post_count = $GLOBALS['wp_query']->found_posts;
                        if( $term->name === 'puppies' )  {
                           echo '<h1 class="text-center">' . $hcd_count . ' Available Pups</h1>';
                        }
                        elseif ($term->taxonomy === 'litter' ) {
                            echo '<h1 class="text-center">' . $term->name . '</h1>
                            <h2>' . $hcd_count;
                            echo ' Available Puppies in this Litter</h1>';
                        }
                        else {
                            echo '<h1 class="text-center">' . $hcd_count . ' Available ' . $term->name . ' Puppies</h1>';
                        }
                        ?>
					</header><!-- .page-header -->
                <div class="row row-cols-4 g-5">
                    <?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content-puppies', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>
                </div>

			</main><!-- #main -->

<!--			--><?php
//			// Display the pagination component.
//			understrap_pagination();
//			// Do the right sidebar check.
//			get_template_part( 'global-templates/right-sidebar-check' );
//			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
