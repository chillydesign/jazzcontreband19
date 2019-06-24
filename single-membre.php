<?php get_header(); ?>



	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'partials/page-header' ); ?>

				<?php $phone = get_field('phone'); ?>
							<?php $address = get_field('address'); ?>
							<?php $country = get_field('country'); ?>
							<?php $website = get_field('website'); ?>
							<?php // add https:// if not included in the url  ?>
							<?php $website_http = ( strpos($website, '//') > 0  ) ?  $website :  'http://' . $website   ; ?>

				<div class="container">
				    <div class="column_container column_container_reversed">

				        <div id="about_jazzcontreband" class=" column big_column ">
				                <div class="grey_box">
													<h1><?php the_title(); ?></h1>
													<div><?php echo get_field('description'); ?></div>
				                </div>

				        </div>

				        <div id="agenda_front" class="column small_column ">
				                <div class="yellow_box">
													<hr>
														<h2><strong>Contact</strong></h2>
														<hr>
														<div class="content membres_details">

														<?php if (get_field('website')){ ?>
															<h4><i class="fa fa-link" aria-hidden="true"></i> Site web</h4>
															<p><a target="_blank" href="<?php echo $website_http; ?>"><?php echo $website; ?></a></p>
														<?php } ?>

														<?php if (get_field('phone')){ ?>
															<h4><i class="fa fa-phone" aria-hidden="true"></i> Téléphone</h4>
															<p><?php echo get_field('phone'); ?></p>
														<?php } ?>

														<?php if (get_field('address')){ ?>
															<h4><i class="fa fa-map-marker" aria-hidden="true"></i> Adresse</h4>
															<p><?php echo get_field('address'); ?><br><?php echo get_field('country'); ?></p>
														<?php } ?>

														</div>
				                </div>
				        </div>


				    </div>
				</div>


<?php include('events-salle.php'); ?>



            <div id="map_section" style="margin-bottom:0;" >
                			<?php echo do_shortcode('[jazz_membres_map]'); ?>
            </div>

	</div> <!-- END OF ROW -->


</div><!--  END OF CONTAINER -->

	</section>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>

		<h1><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h1>

	</article>
	<!-- /article -->

<?php endif; ?>





<?php get_footer(); ?>
