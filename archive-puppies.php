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
                           echo '<h1 class="text-center">' . $hcd_count . ' Available Puppies</h1>';
                        }
                        elseif ($term->taxonomy === 'litter' ) {
                            echo '<h1 class="text-center">' . $term->name . '</h1>';
                            echo '<h2>' . $hcd_count . ' Available Puppies in this Litter</h2>';
                        }
                        elseif ($term->taxonomy === 'breed' ) {
                            echo '<h1 class="text-center lh-1 m-5 fs-1">' . $term->name . ' Puppies<br><span class="fs-5 fw-light fst-italic">(' . $hcd_count . ' Available)</span></h1>';
//                            echo '<h2 class="text-center fs-5 fw-light fst-italic">' . $hcd_count . ' Available</h2>';
                        }
                        else {
                            echo '<h1 class="text-center">' . $hcd_count . ' Available ' . $term->name . ' Puppies</h1>';
                        }
                        ?>
					</header><!-- .page-header -->
                <?php
                    if( $term->name !== 'puppies' )  {
                        echo '<div class="row row-cols-3 g-5">';
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
                        echo '</div>';
                    }
				else {



    // Get list of all taxonomy terms  -- In simple categories title
    $args = array(
        'taxonomy' => 'breed',
        'orderby' => 'name',
        'order'   => 'ASC'
    );
    $cats = get_categories($args);

    // For every Terms of custom taxonomy get their posts by term_id
                    echo '<div class="row">';
    foreach($cats as $cat) {
        ?>
        <div class="col">
        <a href="<?php echo get_category_link( $cat->term_id ) ?>">
            <h2><?php echo $cat->name; ?></h2>
        </a>
            <?php $published_posts = wp_count_posts()->publish;
            echo $published_posts;
            ?>
        </div>


        <?php

        wp_reset_postdata(); // reset global $post;


     }
            echo '</div>';

                    }
				}

				?>

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
