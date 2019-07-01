<?php 

global $query_args;

$posts_per_page = $query_args['posts_per_page'];

$query_args['posts_per_page'] = 1;

$query = new WP_Query( $query_args );

$query_args['offset'] += $query_args['posts_per_page'];

$query_args['posts_per_page'] = $posts_per_page;

if ($query->have_posts()):

    while($query->have_posts()): $query->the_post();

        add_to_global_query();
        
        get_template_part('views/layouts/post-with-content-and-image');

    endwhile;

endif;

wp_reset_postdata();