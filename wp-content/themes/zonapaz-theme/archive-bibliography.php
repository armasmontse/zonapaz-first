<?php

$args = [
    'posts_per_page' => 1,
    'post_type' => 'bibliography'
];

$query = new WP_Query($args);

if ($query->found_posts == 0) {
    return_404();
}

wp_safe_redirect(get_permalink($query->posts[0]));