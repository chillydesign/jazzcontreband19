<?php $images =  get_sub_field('images'); ?>

<?php if ($images) : ?>

<div class="container" style="margin-top:50px">
	<br>
	<div class="img_gallery ">
		<?php foreach($images as $image): ?>
			<a class="gallery" href="<?php echo ($image['url']); ?>"><img src="<?php echo ($image['sizes']['medium']); ?>" alt="" /></a>
		<?php endforeach; ?>
	</div>
	<br>
	<br>
<?php endif; ?>
<div class="clear"></div>

</div>
