


<div class="container">
<div class="column_container">
    <?php  $count = 0; ?>
<?php while(have_rows('galleries')): the_row() ;  ?>
    <?php $page =  get_sub_field('link'); ?>
    <?php $image =  get_sub_field('image'); ?>
    <div class="column">
    <a class="event_gallery" href="<?php echo $page->guid; ?>">


        <div class="event_thumb" style="padding:30%; background-image:url(<?php echo $image['sizes']['small'] ; ?>);"></div>
        <div class="upcoming_description">
          <h3> <?php echo $page->post_title; ?></h3>
        </div>


  </a>
  </div>
  <?php  if($count % 2 == 1) echo '</div> <!-- END OF ROW --> <div class="column_container">' ; ?>
<?php $count++; ?>
<?php endwhile; ?>
</div><!-- END OF ROW -->
</div>
