<?php $content_right =  get_sub_field('content_right'); ?>
<?php $content_left =  get_sub_field('content_left'); ?>

<div class="container">
    <div class="column_container column_container_reversed">

        <div id="about_jazzcontreband" class=" column big_column ">
            <?php if ($content_right): ?>
                <div class="black_box">
                    <?php echo $content_right; ?>
                </div>
            <?php endif; ?>

        </div>

        <div id="agenda_front" class="column small_column ">
            <?php if ($content_left): ?>
                <div class="yellow_box">
                    <?php echo $content_left; ?>
                </div>
            <?php endif; ?>
        </div>


    </div>
</div>
