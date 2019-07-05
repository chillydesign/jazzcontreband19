

<div  id="programme_container">

	<div class="container">

		<!-- <h2 id="events_title" data-title="Programme" style="text-align:center; margin-bottom:50px">Programme</h2> -->


        <div class="column_container">

            <div class="column big_column">
                <div id="events_container">
                    <span class="loading"></span>
                </div>
            </div>
            <aside class="column small_column" >
                <div class="black_box" id="calendar_box" >
                    <h4>Rechercher</h4>

                    <div id="events_calendar">
                        <span class="loading"></span>
                    </div>
                    <div class="clear"></div>
                    <h6  id="show_all_events"><a href="#">Tout le programme</a></h6>
                </div>
            </aside>


		</div>
	</div>
</div>

<?php $event_type = get_sub_field('event_type'); ?>
<?php if($event_type=='evenement_festival'){
	 $category = get_sub_field('year_festival');
} else {
	 $category = get_sub_field('year_season');
} ?>
<script type="text/javascript">
	var calendar_api_url = '<?php echo home_url(); ?>/api/v1/?<?php echo ($event_type); ?>=true&category=<?php echo $category; ?> ';
</script>


<script id="calendar_template" type="x-underscore">
<?php echo file_get_contents( get_stylesheet_directory() . '/templates/calendar.underscore'); ?>
</script>
<script id="events_template" type="x-underscore">
<?php echo file_get_contents( get_stylesheet_directory() . '/templates/events_festival.underscore'); ?>
</script>
