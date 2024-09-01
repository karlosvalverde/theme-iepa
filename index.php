<?php get_header(); ?>

    <div class="row align-items-center justify-content-center m-0 flex-grow-1 text-break">
        <div class="iepa-color-1 px-0">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(__('(more...)')); ?>
                <?php
                    $current_page = $_SERVER['REQUEST_URI'];
                    $page_substring = '/editions/ed-';

                    // Get the current page ID
                    $current_page_id = get_queried_object_id();

                    // Query child pages of the current page
                    $args = array(
                        'post_type'      => 'page', // Change to 'post' if you're working with posts.
                        'post_parent'    => $current_page_id,
                        'posts_per_page' => -1, // Display all child pages.
                        'orderby'        => 'menu_order', // Order by menu order.
                        'order'          => 'ASC', // You can use 'ASC' for ascending or 'DESC' for descending.
                    );

                    $child_pages = new WP_Query($args);

                    if (strpos($current_page, $page_substring) !== false && $child_pages->have_posts()) : ?>
                        <div class="col-sm-10 mx-auto p-3">
                            <div class="row justify-content-center">
                                <?php $i = 0; while ($child_pages->have_posts()) : $child_pages->the_post(); ?>
                                    <?php if (get_the_title() === "Editorial") : ?>
                                        <div class="position-relative iepa-border-top my-5">
                                            <p class="position-absolute top-0 end-0 ps-3 iepa-bg-color-3 iepa-mt-n iepa-font-size-2">Editorial</p>
                                        </div>
                                        <div class="p-5 m-5 iepa-card iepa-bg-color-4">
                                            <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                                                <div class="row align-items-center m-sm-5">
                                                    <div class="position-relative col-lg my-5 p-0">
                                                        <div class="position-absolute top-0 start-0 w-100 h-100 iepa-bg-color-2"></div>
                                                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img img-fluid', 'title' => 'Feature image']); ?>
                                                    </div>
                                                    <div class="col-lg-5 offset-lg-1">
                                                        <h2 class="mb-5 iepa-title-2"><?php the_title(); ?></h2>
                                                        <div class="excerpt">
                                                            <?php the_excerpt(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="position-relative iepa-border-top my-5">
                                            <p class="position-absolute top-0 start-0 pe-3 iepa-bg-color-3 iepa-mt-n iepa-font-size-2">Artigos</p>
                                        </div>
                                    <?php else : ?>
                                        <div class="p-5 m-5 iepa-card">
                                            <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                                                <div class="row <?php echo ($i % 2 === 0) ? 'flex-row-reverse' : ''; ?> align-items-center m-sm-5">
                                                    <div class="position-relative col-lg <?php echo ($i % 2 === 0) ? 'offset-lg-1' : ''; ?> my-5 p-0">
                                                        <div class="position-absolute top-0 start-0 w-100 h-100 iepa-bg-color-2"></div>
                                                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img img-fluid', 'title' => 'Feature image']); ?>
                                                    </div>
                                                    <div class="col-lg-5 <?php echo ($i % 2 === 0) ? '' : 'offset-lg-1'; ?>">
                                                        <h2 class="mb-5 iepa-title-2"><?php the_title(); ?></h2>
                                                        <div class="excerpt">
                                                            <?php the_excerpt(); ?>
                                                            <!-- < ?php
                                                                $excerpt = get_the_excerpt();
                                                                $excerpt = substr($excerpt, 0, 260);
                                                                $result = substr($excerpt, 0, strrpos($excerpt, ' ')) + '/n/n Saiba mais ';
                                                                echo $result;
                                                            ?> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php $i++; endwhile; ?>
                            </div>
                        </div>
                    <?php
                    // Restore the original post data
                    wp_reset_postdata();

                    endif;
                ?>
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </div>

<?php get_footer(); ?>
