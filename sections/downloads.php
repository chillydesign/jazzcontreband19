<div class="gray_box">

	<div class="container ">

	<?php if(!empty(get_sub_field('introduction'))){ ?>
		<div class="introduction"><?php echo get_sub_field('introduction'); ?></div>
	<?php } ?>
		<div class="column_container download_columns">
		<?php $i=1; ?>
		<?php while ( have_rows('documents') ) : the_row(); ?>
			<div class="column">
				<p><a target="_blank" href="<?php echo get_sub_field('document'); ?>"><i class="fa fa-download" aria-hidden="true"></i> <?php echo get_sub_field('nom_affiche'); ?></a></p>
			</div>
		<?php if($i % 3 == 0){echo '</div><div class="column_container download_columns">';} ?>
		<?php $i++; ?>
		<?php endwhile; ?>
		</div> <!-- END OF ROW -->


	</div><!--  END OF CONTAINER -->
</div>
<br>
<br>
<br>
