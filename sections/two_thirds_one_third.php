<?php //$image =  get_sub_field('one_third_image'); ?>
<?php //$image_position = get_sub_field('image_position'); ?>
<?php $image_position = 'right'; ?>
<?php  $classes = ($image_position == 'right') ?  [ 'big_column', 'small_column' ]  :  [ 'small_column', 'big_column' ]  ; ?>

<div class="container ">
	<div class="column_container">


		<div class="column <?php echo $classes[0]; ?>">
		<?php echo get_sub_field('big_col'); ?>
		</div>


		<div class="<?php echo $classes[1]; ?>">
		<?php echo get_sub_field('small_col'); ?>
		</div>

	</div> <!-- END OF COLUMN CONTAINER -->

</div><!--  END OF CONTAINER -->
