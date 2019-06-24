<?php /* Template Name: Salles */ get_header(); ?>




<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'partials/page-header' ); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php include('section-loop.php'); ?>

        <div id="map_section">

        <?php echo do_shortcode('[jazz_membres_map]'); ?>
        </div>
        <section class="section  section_colonnes" style="margin-bottom:80px;">



            <div class="container ">
                <div class="column_container">
                    <div class="column">
                        <div class="yellow_box">
                            <div class="title">
                                <h2><strong>Salles en France</strong></h2>
                            </div>
                            <div class="content">
                                <?php
                                $args = array( 'orderby'=>'post_title', 'order'=>'ASC', 'post_type' => 'membre', 'posts_per_page' => -1, 'meta_key'	=> 'country', 'meta_value'	=> 'france' );
                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();
                                if($i>1){echo '<hr>';}
                                echo '<a class="member_link" href="'. get_permalink() . '"> <div id="' . basename(get_permalink())  . '">';
                                echo '<h4>'; the_title(); echo '</h4>';
                                echo '<p class="membre_ville">' . get_field('ville') . '</p>';
                                echo '</div></a>';
                                $i++;
                            endwhile;
                            wp_reset_postdata();

                            ?>

                        </div>
                    </div> <!-- END OF YELLOW BOX -->
                </div> <!--END OF COLUMN -->
                <div class="column">
                    <div class="grey_box">
                        <div class="title">
                            <h2><strong>Salles en Suisse</strong></h2>
                        </div>
                        <div class="content">

                            <?php
                            $args = array( 'orderby'=>'post_title', 'order'=>'ASC',  'post_type' => 'membre', 'posts_per_page' => -1, 'meta_key'	=> 'country', 'meta_value'	=> 'suisse' );
                            $loop = new WP_Query( $args );
                            $i=1;
                            while ( $loop->have_posts() ) : $loop->the_post();
                            if($i>1){echo '<hr>';}
                            echo '<a class="member_link" href="'. get_permalink() . '"> <div id="' . basename(get_permalink())  . '">';
                            echo '<h4>'; the_title(); echo '</h4>';
                            echo '<p class="membre_ville">' . get_field('ville') . '</p>';
                            echo '</div></a>';
                            $i++;
                        endwhile;
                        wp_reset_postdata();

                        ?>

                    </div>
                </div> <!-- END OF GREY BOX -->
            </div> <!--END OF COLUMN -->
        </div> <!-- END OF COLUMN CONTAINER -->

    </div><!--  END OF CONTAINER -->

</section>


<div class="clear"></div>

</article>
<!-- /article -->

<?php endwhile; ?>

<?php endif; ?>





<?php get_footer(); ?>
