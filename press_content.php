


<div class="container press">
<div class="column_container">
    <?php  $count = 0; ?>
<?php while(have_rows('press')): the_row() ;  ?>
    <?php $title =  get_sub_field('title'); ?>
    <?php $image =  get_sub_field('image'); ?>
    <?php $content =  get_sub_field('content'); ?>
    <div class="column">
        <div class="press_container">
        <div class="press_thumb" style=" background-image:url(<?php echo $image['sizes']['small'] ; ?>);">
          <div class="press_description">
            <h3> <?php echo $title ?></h3>
          </div>
        </div>
        <div class="press_content"><?php echo $content; ?></div>
        </div>
    </div>
  <?php  if($count % 3 == 2) echo '</div> <!-- END OF COLUMNCONTAINER --> <div class="column_container">' ; ?>
<?php $count++; ?>
<?php endwhile; ?>
</div><!-- END OF ROW -->
</div>
