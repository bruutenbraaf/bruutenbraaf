<?php
get_header(); ?>
<section class="pro z pgh">
    <div class="container fw">
        <?php get_template_part('template-parts/content', 'branding'); ?>
    </div>
    <div class="container fh align-items-center d-flex intp">
        <div class="row">
            <div class="col-md-6">
                <h1><?php the_field('intro_content'); ?></h1>
            </div>
        </div>
    </div>
    <div class="lined">
    </div>
</section>

<div id="main-content" class="pgm">
    <?php get_template_part('template-parts/content', 'flex'); ?>
</div>

<?php get_footer(); ?>