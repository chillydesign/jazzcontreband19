<?php get_header(); ?>
<?php if ( is_front_page()  == false) : ?>
		<?php $image = (has_post_thumbnail())  ?  get_the_post_thumbnail_url() : false ?>
		<?php get_template_part( 'partials/page-header' ); ?>
<?php endif; ?>


		<!-- section -->
		<section class="container">

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'webfactor' ); ?></h1>
				<p>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'webfactor' ); ?></a>
				</p>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->



<?php get_footer(); ?>
