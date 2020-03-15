<?php if (have_rows('flexible')) : ?>
    <?php while (have_rows('flexible')) : the_row(); ?>
        <?php if (get_row_layout() == 'full_image') : ?>
            <?php $full_image = get_sub_field('full_image'); ?>
            <?php if ($full_image) { ?>
                <section class="pro z msmal bdm">
                    <div class="bg" style="background-image:url(<?php echo $full_image['sizes']['large']; ?>);"></div>
                    <div class="container fw">
                        <?php get_template_part('template-parts/content', 'branding'); ?>
                    </div>
                </section>
            <?php } ?>
        <?php elseif (get_row_layout() == 'centred') : ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center cap">
                        <p><?php the_sub_field('content'); ?></p>
                    </div>
                </div>
            </div>
        <?php elseif (get_row_layout() == 'left_image_-_right_content') : ?>
            <section class="fcil">
                <?php $image = get_sub_field('image'); ?>
                <?php if ($image) { ?>
                    <div class="pro hlv z">
                        <div class="bg" style="background-image:url(<?php echo $image['sizes']['large']; ?>);"></div>
                        <div class="container fw">
                            <?php get_template_part('template-parts/content', 'branding'); ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="container lc">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 offset-md-7">
                            <?php the_sub_field('content'); ?>
                            <?php $call_to_action = get_sub_field('call_to_action'); ?>
                            <?php if ($call_to_action) { ?>
                                <a href="<?php echo $call_to_action['url']; ?>" class="btn target=" <?php echo $call_to_action['target']; ?>"><?php echo $call_to_action['title']; ?>
                                    <svg width="34" height="16" viewBox="0 0 34 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33 8H0" stroke="black" />
                                        <path d="M26 1L33 8L26 15" stroke="black" />
                                    </svg>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == 'right_image_-_left_content') : ?>
            <section class="fcil">
                <?php $image = get_sub_field('image'); ?>
                <?php if ($image) { ?>
                    <div class="pro hlv ri z">
                        <div class="bg" style="background-image:url(<?php echo $image['sizes']['large']; ?>);"></div>
                        <div class="container fw">
                            <?php get_template_part('template-parts/content', 'branding'); ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="container lc">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-5">
                            <?php the_sub_field('content'); ?>
                            <?php $call_to_action = get_sub_field('call_to_action'); ?>
                            <?php if ($call_to_action) { ?>
                                <a href="<?php echo $call_to_action['url']; ?>" class="btn target=" <?php echo $call_to_action['target']; ?>"><?php echo $call_to_action['title']; ?>
                                    <svg width="34" height="16" viewBox="0 0 34 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M33 8H0" stroke="black" />
                                        <path d="M26 1L33 8L26 15" stroke="black" />
                                    </svg>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == '70vw_image') : ?>
            <?php $image = get_sub_field('image'); ?>
            <div class="pro hlv ri z mxs">
                <div class="bg" style="background-image:url(<?php echo $image['sizes']['large']; ?>);"></div>
                <div class="container fw">
                    <?php get_template_part('template-parts/content', 'branding'); ?>
                </div>
            </div>
        <?php elseif (get_row_layout() == '70vw_image_right') : ?>
            <?php $image = get_sub_field('image'); ?>
            <?php if ($image) { ?>
                <div class="pro hlv ri z mxs fr">
                    <div class="bg" style="background-image:url(<?php echo $image['sizes']['large']; ?>);"></div>
                    <div class="container fw">
                        <?php get_template_part('template-parts/content', 'branding'); ?>
                    </div>
                </div>
            <?php } ?>
        <?php elseif (get_row_layout() == 'halve_halve') : ?>
            <div class="container pa">
                <div class="row">
                    <div class="col-md-6">
                        <?php if (have_rows('left')) : ?>
                            <?php while (have_rows('left')) : the_row(); ?>
                                <?php the_sub_field('content'); ?>
                                <?php $call_to_action = get_sub_field('call_to_action'); ?>
                                <?php if ($call_to_action) { ?>
                                    <a href="<?php echo $call_to_action['url']; ?>" class="btn target=" <?php echo $call_to_action['target']; ?>"><?php echo $call_to_action['title']; ?>
                                        <svg width="34" height="16" viewBox="0 0 34 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33 8H0" stroke="black" />
                                            <path d="M26 1L33 8L26 15" stroke="black" />
                                        </svg>
                                    </a>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <?php if (have_rows('Right')) : ?>
                            <?php while (have_rows('Right')) : the_row(); ?>
                                <?php the_sub_field('content'); ?>
                                <?php $call_to_action = get_sub_field('call_to_action'); ?>
                                <?php if ($call_to_action) { ?>
                                    <a href="<?php echo $call_to_action['url']; ?>" class="btn target=" <?php echo $call_to_action['target']; ?>">
                                        <?php echo $call_to_action['title']; ?>
                                        <svg width="34" height="16" viewBox="0 0 34 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33 8H0" stroke="black" />
                                            <path d="M26 1L33 8L26 15" stroke="black" />
                                        </svg>
                                    </a>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>