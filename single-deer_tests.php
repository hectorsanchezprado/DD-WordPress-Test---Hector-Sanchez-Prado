<?php get_header(); ?>

<div class="deer-test-content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="deer-test-meta">
                <p><strong>Start Date:</strong> <?php the_field('start_date'); ?></p>
                <p><strong>End Date:</strong> <?php the_field('end_date'); ?></p>
            </div>
            <div class="deer-test-description">
                <?php the_field('description'); ?>
            </div>
            <div class="deer-test-cover">
                <?php $image = get_field('cover_image'); ?>
                <?php if ($image) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="deer-test-application-link">
                <a href="<?php the_field('application_link'); ?>" target="_blank">Apply Now</a>
            </div>
    <?php
        endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>
