<?php
get_header(); ?>

<section class="pro z pgh">
    <div class="container fw">
        <?php get_template_part('template-parts/content', 'branding'); ?>
    </div>
    <div class="container fh align-items-center d-flex intp">
        <div class="row">
            <div class="col-md-6">
                <h1><?php the_field('projecten_archive_intro', 'option'); ?></h1>
            </div>
        </div>
    </div>
    <div class="lined">
    </div>
</section>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
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