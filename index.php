<?php
    $current_page = $_SERVER['REQUEST_URI'];

    get_header();
?>

    <div class="row align-items-center justify-content-center m-0 flex-grow-1">
        <div class="iepa-color-1 col-sm-8 <?php if (!is_front_page()) echo 'text-center'; ?>">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="mb-5 pb-5">
                    <h1 class="mb-5 iepa-title"><?php the_title(); ?></h1>
                    <?php the_content(__('(more...)')); ?>
                </div>
                <!-- <hr> -->
                <?php endwhile; else: ?>
                    <?php if ($current_page === "/about") : ?>
                        <h1 class="iepa-title">Es un test, hamijo.</h1>
                    <? else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
            <?php endif; ?>

        </div>
    </div>

<?php get_footer(); ?>
