<?php
get_header(); ?>

<section class="pro z x" style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'large'); ?>);">
    <div class="container fw">
        <?php get_template_part('template-parts/content', 'branding'); ?>
    </div>
    <div class="container fh">
        <div class="row xs top">
            <div class="col-md-6">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<div class="the_title">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<div id="main-content">
    <?php if (have_rows('intro')) : ?>
        <?php while (have_rows('intro')) : the_row(); ?>
            <div class="container intr">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <?php the_sub_field('intro_content'); ?>
                        <?php $call_to_action = get_sub_field('call_to_action'); ?>
                        <?php if ($call_to_action) { ?>
                            <a href="<?php echo $call_to_action['url']; ?>" class="btn" target="<?php echo $call_to_action['target']; ?>"><?php echo $call_to_action['title']; ?>
                                <svg width="34" height="16" viewBox="0 0 34 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33 8H0" stroke="black" />
                                    <path d="M26 1L33 8L26 15" stroke="black" />
                                </svg>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-3 offset-md-1 services d-none d-md-block">
                        <?php
                        $geleverde_dienst_array = get_field('geleverde_dienst');
                        if ($geleverde_dienst_array) { ?>
                            <?php foreach ($geleverde_dienst_array as $geleverde_dienst_item) { ?>
                                <span><?php echo $geleverde_dienst_item; ?></span>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_template_part('template-parts/content', 'flex'); ?>

</div>

<?php get_footer(); ?>