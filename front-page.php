<?php
get_header(); ?>


<?php if (have_rows('header')) : ?>
    <?php while (have_rows('header')) : the_row(); ?>
        <section class="int">
            <div class="container">
                <div class="row container">
                    <div class="col-md-6 offset-md-3 justify-content-center text-center">
                        <h1><?php the_sub_field('intro_titel'); ?></h1>
                    </div>
                </div>
                <div class="line">
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php $loop = new WP_Query(array(
    'post_type' => 'projecten',
    'posts_per_page' => 5,
    'order' => 'DESC'
)); ?>
<?php if ($loop->have_posts()) : ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <section class="pro msmal">
            <div class="bg" style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);"></div>
            <div class="container fw">
                <?php get_template_part('template-parts/content', 'branding'); ?>
            </div>
            <div class="container fh">
                <a href="<?php the_permalink(); ?>">
                    <div class="row container xr">
                        <div class="col-md-6 offset-md-3 justify-content-center text-center">
                            <h4>
                                <?php
                                $geleverde_dienst_array = get_field('geleverde_dienst');
                                $string = rtrim(implode(', ', $geleverde_dienst_array), ',');
                                echo $string;
                                ?>
                            </h4>
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </a>
            </div>
            <a href="<?php the_permalink(); ?>" class="the_link"></a>
        </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>