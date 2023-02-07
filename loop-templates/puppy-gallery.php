<style>
    .gallery {
        /*margin: 0 3rem 3rem 0;*/
        display: flex;
        padding: 0;
        /*width: 1000px;*/
        height: 800px;
        overflow: hidden;
    }
    /*all slides*/
    .gallery-photo{
        width:800px;
        height:800px;
        background-size: cover;
        background-position: 50% 50%;
        transition: 0.3s;
        display: none;
        border: 5px solid #fff;
        box-shadow: 1px 1px 5px #333 inset, -1px -1px 5px #333 inset, -10px 10px 0 inset #a27526, -10px -10px 0 inset #a27526, 10px 10px 0 inset #a27526;
    }

    /*all radio set*/
    .gallery-photo-radio{
        display: none;
    }

    /*show photo that is adjacent to checked radio control*/
    .gallery-photo-radio:checked + .gallery-photo{
        display: block;
    }

    /* thumbnail drawer */
    .thumbnails {
        display: flex;
        flex-flow: column-reverse;
    }

    /* each thumbnail */
    .thumb {
        width: calc(75vw/4);
        height: calc(75vw/4);
        background-position: 50% 50%;
        background-size: cover;
        cursor: pointer;
        transition: 0.3s;
        margin: 0px;
        flex: 20 20 20px;
        max-width: 200px;
        max-height: 200px;
        filter: saturate(0) brightness(0.6);
        margin-left: 10px;
    }

    .thumb+.thumb {
        margin-bottom: 10px;
    }
    /* thumb hover effect */
    .thumb:hover{
        opacity: 0.9;
    }

</style>
<?php
if (is_singular()) :
    $puppy_gallery = get_field('puppy_gallery');
    if( $puppy_gallery ): ?>
        <div class="gallery col-lg-8">
            <?php foreach( $puppy_gallery as $puppy_gallery_photo ): ?>
            <style>
                #gallery-photo-<?php echo $puppy_gallery_photo['ID'] ?>:checked ~ .thumbnails .gallery-photo-<?php echo $puppy_gallery_photo['ID'] ?>{
                    z-index: 1;
                    filter: saturate(1) brightness(1);
                }
            </style>
                <input type="radio" name="gallery-photo" id="gallery-photo-<?php echo $puppy_gallery_photo['ID'] ?>" class="gallery-photo-radio" checked/>
                <div class="gallery-photo" style="background-image: url(<?php echo esc_url($puppy_gallery_photo['url']); ?>);"></div>
            <?php endforeach; ?>
            <div class="thumbnails">
                <?php foreach( $puppy_gallery as $puppy_gallery_photo ): ?>
                    <label for="gallery-photo-<?php echo $puppy_gallery_photo['ID'] ?>" class="thumb gallery-photo-<?php echo $puppy_gallery_photo['ID'] ?>" style="background-image: url(<?php echo esc_url($puppy_gallery_photo['sizes']['thumbnail']); ?>);"></label>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endif;