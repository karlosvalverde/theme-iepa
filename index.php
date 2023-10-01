<?php get_header(); ?>

        <div class="col-12 col-lg-10 <?php if (is_front_page()) echo 'offset-lg-2'; ?> h-100 <?php if (!is_front_page()) echo 'd-flex'; ?> align-items-md-center mt-5 mt-md-0 pt-5 pt-md-0">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <p><?php the_content(__('(more...)')); ?></p>
                <hr> <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>

<?php get_footer(); ?>
