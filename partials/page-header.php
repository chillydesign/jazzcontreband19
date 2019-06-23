<?php
global $image;

if ( $image == NULL ||  $image == false) {
     //$image = get_template_directory_uri() . '/img/placeholder.jpg';
     $image = get_site_url() . '/wp-content/themes/jazzcontreband18/img/jazz_photo_1.jpg';
};
 ?>
<header>
    <div class="container">
        <div class="column_container">
            <div class="column small_column">
                <?php get_template_part( 'partials/logo' ); ?>
            </div>
            <div class="column big_column">
            </div>
        </div>
    </div>
    <div id="header_background" class="event_bg" style="background-image:url('<?php echo $image; ?>')"></div>
</header>
