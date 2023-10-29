<?php get_header(); ?>

    <div class="row align-items-center justify-content-center m-0 flex-grow-1">
        <div class="iepa-color-1 px-0">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(__('(more...)')); ?>
                <?php
                    $current_page = $_SERVER['REQUEST_URI'];
                    $page = '/editions/ed-1/';

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

                    if ($current_page === $page && $child_pages->have_posts()) : ?>
                        <div class="col-sm-10 mx-auto p-3">
                            <div class="row justify-content-center">
                                <?php while ($child_pages->have_posts()) : $child_pages->the_post(); ?>
                                    <div class="p-5 m-5 iepa-card">
                                        <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                                            <div class="row <?php $i = 0; echo ($i % 2 === 0) ? 'flex-row-reverse' : ''; ?> align-items-center m-5">
                                                <div class="position-relative col <?php echo (get_the_ID() % 2 === 0) ? 'offset-lg-1' : ''; ?> p-0">
                                                    <div class="position-absolute top-0 start-0 w-100 h-100 iepa-bg-color-2"></div>
                                                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img img-fluid', 'title' => 'Feature image']); ?>
                                                </div>
                                                <div class="col-lg-4 <?php echo (get_the_ID() % 2 === 0) ? '' : 'offset-lg-1'; ?>">
                                                    <h2 class="mb-5 text-break iepa-title-2"><?php the_title(); ?></h2>
                                                    <div class="excerpt">
                                                        <?php the_excerpt(); ?>
                                                        <!-- < ?php
                                                            $excerpt = get_the_excerpt();
                                                            $excerpt = substr($excerpt, 0, 260);
                                                            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                                            echo $result;
                                                        ?> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php $i++; endwhile; ?>
                            </div>
                        </div>
                    <?php
                    // Restore the original post data
                    wp_reset_postdata();

                    endif;
                ?>
                <!-- < ?php
                    // Get the current page
                    $current_page = get_queried_object();

                    // Check if the current page is either '/editions/ed-1/' or '/ed-1/'
                    if (is_page('editions/ed-1') || is_page('ed-1') || ($current_page && ($current_page->post_name === 'ed-1'))) {

                        // Determine the parent page ID based on the current page
                        $parent_page_id = null;
                        if (is_page('editions/ed-1')) {
                            $parent_page_id = get_page_by_path('editions/ed-1')->ID;
                        } else if ($current_page && $current_page->post_name === 'ed-1') {
                            $parent_page_id = $current_page->post_parent;
                        }

                        // Get the child pages of the parent page
                        $child_pages = get_pages(array(
                            'post_parent' => $parent_page_id,
                            'post_status' => 'publish',
                        ));

                        // Iterate over the child pages
                        foreach ($child_pages as $child_page) {

                            // Get the name of the child page
                            $title = $child_page->post_title;

                            // Get the thumbnail of the child page
                            $thumbnail_id = get_post_thumbnail_id($child_page->ID);
                            $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'thumbnail');

                            // Get the short description of the child page
                            $excerpt = $child_page->post_excerpt;

                            // Show the listing
                            echo '<li>
                            <a href="' . get_permalink($child_page->ID) . '">
                                <img src="' . $thumbnail_url . '" alt="' . $title . '">
                                <h3>' . $title . '</h3>
                                <p>' . $excerpt . '</p>
                            </a>
                            </li>';

                        }
                    }
                ?> -->

                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </div>

<?php get_footer(); ?>
