<?php
	$event_type = get_field('type_devenement', 'option');
	$cat = get_field('saison_a_afficher_sur_les_salles', 'option');
 	$id = get_the_ID();
	$today = date("Ymd");

	$args = array(
		'post_type' => $event_type,
		'posts_per_page' => -1,
		'meta_key'   => 'dates_0_date',
		'orderby'    => 'meta_value_num',
		'order'      => 'ASC',
		'meta_query' => array(
			'relation' => 'AND',
			array(
				'key'     => 'members',
				'value'   => $id,
				'compare' => '=',
			),
			array(
				'key'     => 'dates_0_date',
				'value'   => $today,
				'compare' => '>=',
				'type' => 'numeric'
			)

		),
		'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => $cat,
		),
	),
);
	$loop = new WP_Query( $args );
	$post_count = $loop->post_count;
?>
<?php if($post_count >0) : ?>
<section class="section section_upcoming">

	<div class="gray_box upcoming" style="display:none">
	    <div class="container"  style="text-align: center;">
	        <h2><a href ="<?php echo get_sub_field('link'); ?>">A voir ici</a></h2>
	        <h6><a href ="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('link_text'); ?></a></h6>
	    </div>
	</div>



	<div id="prochainement">
	  <h3>Prochainement</h3>
	</div>
	<div id="upcoming_events">

	    <div class="column_container scroll_column_container">
	        <?php $color_classes = [ 'grey_event', 'yellow_event', 'black_event' ]; ?>
	        <?php $o = 0;	while ( $loop->have_posts() ) : $loop->the_post(); ?>
	            <div class="column upcoming_event_column <?php echo $color_classes[$o % 3]; $o++ ?> ">
	                    <a href="<?php the_permalink(); ?>">
	                        <div class="event_thumb" style=" background-image:url(<?php if(has_post_thumbnail()){echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); } else {echo get_template_directory_uri() . '/img/placeholder.jpg';} ?>); background-size:cover;"></div>
	                            <div class="upcoming_description">
	                                <h3><?php the_title(); ?></h3>
	                                <br>
	                                <div class="event_date">
	                                    <?php $id = get_the_ID(); ?>
	                                    <?php $numrows = count(get_field( 'dates' ) );?>
	                                    <?php $i=1; ?>
	                                    <?php while ( have_rows('dates', $id) ) : the_row() ; ?>
	                                        <?php if($i == $numrows ){
	                                            echo get_sub_field('date');
	                                        } else {
	                                            $pieces = explode(" ",  get_sub_field('date'));
	                                            echo $pieces['0'] . ' - ';
	                                        } ?>
	                                        <?php $i++; ?>
	                                    <?php endwhile; ?>
	                                </div>
	                            </div>
	                        </a>
	                </div>

	            <?php endwhile; ?>
	            <?php wp_reset_query(); ?>
	        </div>
	    </div> <!--  END OF UPCOMING EVENTS -->

	</div>
</div>
</section>
<?php endif; ?>
<?php wp_reset_query(); ?>
