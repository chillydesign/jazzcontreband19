
<?php
$tdu = get_template_directory_uri();
$content =  get_sub_field('content');
$numbers =  get_sub_field('numbers');
$image =  get_sub_field('image');
$yellow_box_content =  get_sub_field('yellow_box_content');
$blue_box_content =  get_sub_field('blue_box_content');

$today = date("Ymd");
$events = 	new WP_Query(array(
    'post_type' => 'evenement_festival',
    'posts_per_page' => 3,
    'meta_key'   => 'dates_0_date',
    'orderby'    => 'meta_value_num',
    'order'      => 'ASC',
    'meta_query' => array(
        array(
            'key'     => 'dates_0_date',
            'value'   => $today,
            'compare' => '>=',
        )
    )
));

?>

<header>
    <div class="container">
        <div class="column_container">
            <div class="column small_column">
                <?php get_template_part( 'partials/logo' ); ?>
            </div>
            <div class="column big_column" id="date_box_container">
                <div id="date_box">1→29. <br> 10.2019</div>
            </div>
        </div>

        <div id="road_sign"></div>
        <div id="octagon"></div>
    </div>



<?php $image_url = ($image) ? $image['sizes']['large']  : $tdu . '/img/jazz_photo_1.jpg'; ?>
    <div id="header_background" style="background-image:url('<?php echo $image_url; ?>');"></div>
</header>

<div class="container">
    <div class="column_container column_container_reversed">

        <div id="about_jazzcontreband" class=" column big_column ">
            <div class="green_box">

                <?php if ($numbers): ?>
                <div class="column_container" id="big_infos">
                    <?php foreach ($numbers as $number) : ?>
                        <div class="column">
                            <div class="big_info">
                                <span><?php echo $number['number']; ?> </span>
                                <?php echo $number['text']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif;  // end if numbers ?>


                <?php echo $content; ?>
                <hr />
            </div>
        </div>

        <div id="agenda_front" class="column small_column ">
            <div class="yellow_box">
                <hr  />
            <?php if ($yellow_box_content) : ?>
                <?php echo $yellow_box_content; ?>
            <?php else: ?>

                <h2>Prochainement</h2>
                <h4>Festival JCB - octobre 2018</h4>
                <p>Découvrez toute la programmation du festival JazzContreBand ici!</p>

                <?php while ( $events->have_posts() ) : $events->the_post(); ?>
                    <?php $id =  get_the_ID(); ?>
                    <?php $permalink =  get_the_permalink(); ?>
                    <?php $dates = get_field('dates', $id, false);  ?>
                    <?php $nice_dates =  nice_event_dates($dates) ; ?>

                    <hr  />
                    <div class="upcoming_event upcoming_event_blue">
                        <h6><?php echo $nice_dates; ?></h6>
                        <p><strong>Something</strong></p>
                        <h4><a href="<?php echo $permalink; ?>"><?php the_title(); ?></a></h4>
                        <p>Location</p>
                    </div>

                <?php endwhile; wp_reset_postdata(); ?>

                <?php endif; ?>

            </div>

            <?php if ($blue_box_content) : ?>

                <div class="blue_box" >
                    <hr  />
                    <?php echo $blue_box_content; ?>
            </div>
            <?php endif; ?>
        </div>




    </div>
</header>
