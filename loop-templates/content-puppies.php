<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">



		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

    <?php
    $puppy_photo = get_field('photo');
    //        $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $puppy_photo ) {
        $puppy_photo_thumbnail = wp_get_attachment_image( $puppy_photo, 'thumbnail' );
        $puppy_photo_medium = wp_get_attachment_image( $puppy_photo, 'medium' );
        $puppy_photo_large = wp_get_attachment_image( $puppy_photo, 'large' );
        $puppy_photo_full = wp_get_attachment_image( $puppy_photo, 'full' );
        $puppy_photo_portrait_puppy = wp_get_attachment_image( $puppy_photo, 'custom-image-portrait-puppy' );
        $puppy_photo_big_square_puppy = wp_get_attachment_image( $puppy_photo, 'custom-image-big-square-puppy' );
    }
    $the_permalink = get_the_permalink ();
    $puppy_photo_fill = '<img src="' . wp_get_attachment_image_src( get_field('photo'), 'thumbnail' )[0] . '" />';
    $collar_color = get_field( 'collar_color' );
    $collar_color_no_hash = str_replace("#", "", $collar_color);
    $inline_style = '';
    $the_ID = get_the_ID();
    $coloring = get_field('coloring');
    $gender = get_field('gender');
    $breed_chooser = get_field('breed_chooser');
    if ($breed_chooser) :
        $breed_chooser = '<a href="' . esc_url(get_term_link($breed_chooser)) . '">' . esc_html($breed_chooser->name) . '</a>';
    endif;
    $litter_chooser = get_field('litter_chooser');
    if ($litter_chooser) :
        $litter_chooser = '<div><a href="' . esc_url(get_term_link($litter_chooser)) . '">' . esc_html($litter_chooser->name) . '</a></div>';
    endif;?>
    <div class="row text-white">
        <?php require_once ('puppy-gallery.php');

    if (is_singular()) :
        $is_singular = <<<HTML
    
        <div class="col col-4">
            <div class="d-grid gap-2">
                <a href="#" class="btn btn-secondary btn-lg fs-2 text-center"><i class="fa-solid fa-dog"></i> Reserve Puppy!</a>
                <div class="d-flex align-items-center">
                    <div class="row row-cols-2 fs-5">
                        <div class="col col-4 text-end">Breed:</div><div class="col col-8">$breed_chooser</div>
                        <div class="col col-4 text-end">Coloring:</div><div class="col col-8">$coloring</div>
                        <div class="col col-4 text-end">Gender:</div><div class="col col-8">$gender</div>
                        <div class="col col-4 text-end">Litter:</div><div class="col col-8">$litter_chooser</div>
                        <div class="col col-4 text-end">Collar Color:</div><div class="col col-8"><div style="background:$collar_color;width: 25px;height: 25px;border: 2px solid;position: relative;top: 2px;"></div></div>
                        <div class="col col-4 text-end">Collar ID:</div><div class="col col-8 hcd-puppy-id-single"><span style="padding: 0;"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

HTML;
    echo $is_singular;
    endif;
    if (is_archive()) :
        $is_archive = <<<HTML
                <div class="row row-cols-auto">
            <div class="col hcd-puppies-archive" style="text-decoration: none;">
                <div class="hcd-puppy-card row card-group rounded-3 shadow g-0" style="overflow:hidden;">
                    <a href="$the_permalink">
                        <div class="card col">
                            <style>.hcd-puppy-id-color-$collar_color_no_hash:hover {background-color: $collar_color !important;}</style>
                            <span class="hcd-puppy-id hcd-puppy-id-color-$collar_color_no_hash"><i class="fa-solid fa-ring"></i> Collar Color<br>
                                #$the_ID</span>
                                   $puppy_photo_fill
                        </div>
                    </a>
                    <div class="card col">
                        <div class="card-body d-flex flex-wrap hcd-puppy-card-details">
                                <div class="fs-5 text-center align-self-center w-100">$coloring&emsp;|&emsp;$gender</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
HTML;
        echo $is_archive;
    endif;
        ?>

	    <div class="entry-content">

<!--		--><?php
//		the_excerpt();
//		understrap_link_pages();
//		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

<!--		--><?php //understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
