<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">



		<div class="entry-meta">

<!--			--><?php //understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		the_content();
		understrap_link_pages();
		?>
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
        ?>
        <div class="row">
            <div class="col col-5 hdc-puppy-photo-single">
                <?php echo $puppy_photo_medium; ?><br>
                <p class="hcd-puppy-id-single" style="
                    /*color: */<?php //the_field( 'collar_color' ); ?>/*;*/
                    /*border: 1px solid */<?php //the_field( 'collar_color' ); ?>/*;*/
                    /*border-left:10px solid */<?php //the_field( 'collar_color' ); ?>/*;*/
                    background: <?php the_field( 'collar_color' ); ?>;
                    ">
                    <span class="hcd-puppy-id-single-inverted-text"></span>
                </p>
            </div>
            <div class="col col-7 d-flex align-items-center">
<!--                    --><?php //the_title( '<h1 class="card-title">', '</h1>' ); ?>
<!--                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                <div class="row row-cols-2 fs-5">
                    <div class="col col-3 text-end">Breed:</div><div class="col col-9"><?php $breed_chooser = get_field( 'breed_chooser' ); ?>
                        <?php if ( $breed_chooser ) : ?>
                            <a href="<?php echo esc_url( get_term_link( $breed_chooser ) ); ?>" class="hdc-breed-link">
                                <?php echo esc_html( $breed_chooser->name ); ?>
                            </a>
                        <?php endif; ?></div>
                    <div class="col col-3 text-end">Coloring:</div><div class="col col-9"><?php the_field('coloring'); ?></div>
                    <div class="col col-3 text-end">Gender:</div><div class="col col-9"><?php the_field('gender'); ?></div>
                    <div class="col col-3 text-end">Litter:</div><div class="col col-9"><?php $litter_chooser = get_field( 'litter_chooser' ); ?>
                        <?php if ( $litter_chooser ) : ?>
                            <a href="<?php echo esc_url( get_term_link( $litter_chooser ) ); ?>" class="hdc-litter-link">
                                <?php echo esc_html( $litter_chooser->name ); ?>
                            </a>
                            </strong>
                        <?php endif; ?></div>
                </div>

            </div>
            <div class="d-grid col col-12 mx-auto">
                <a href="#" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Contact us about this puppy</a>
            </div>
        </div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
