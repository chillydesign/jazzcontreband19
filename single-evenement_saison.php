<?php get_header(); ?>


<!-- section -->
<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php $has_image =  has_post_thumbnail(); ?>
        <?php $image = ($has_image)  ?  get_the_post_thumbnail_url() :  false; ?>
        <?php get_template_part('event-content'); ?>

	<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>

		<h1><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h1>

	</article>
	<!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->




<?php get_footer(); ?>
