<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



    <?php

    $the_permalink = get_the_permalink ();
    $the_ID = get_the_ID();
    $the_name = get_field('testimonial_name');
    $the_comments = get_field('testimonial_comments');
    $the_puppys_name = get_field('testimonial_puppys_name');
//    $the_content = apply_filters( 'the_content', get_the_content() );
    $the_featured_image = get_the_post_thumbnail( '','large' );
    ?>
    <?php
    if (is_singular()) :
        $is_singular = <<<HTML
                <div class="row">
                    <div class="col hdc-testimonial-single">
                        $the_permalink <br>
                        $the_ID <br>
                        $the_name <br>
                        $the_content <br>
                        $the_featured_image <br>
                    </div>
                </div>
HTML;
    echo $is_singular;
    endif;
    if (is_archive()) :
        $is_archive = <<<HTML
                <div class="row hcd-testimonial">
                    <div class="hcd-testimonial-image">
                        <figure class="wp-block-image">
                            $the_featured_image
                            <figcaption class="text-center p-0 m-0">$the_puppys_name</figcaption>
                        </figure>
                    </div>
                    <div class="hcd-testimonial-text">
                     $the_comments
                     <p class="hcd-owner">- $the_name</p>
                    </div>
                </div>
HTML;
        echo $is_archive;
    endif;
        ?>