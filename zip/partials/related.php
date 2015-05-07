<h3 class="column-title">Post similares</h3>

<ul>
<?php

    $tags = wp_get_post_tags($post->ID);
    
    if ($tags) {
        $tag_ids = array();

        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

        $args=array(
            'tag__in' => $tag_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page'=>4, // Number of related posts to display.
            'caller_get_posts'=>1
        );
         
        $my_query = new wp_query( $args );
     
        while( $my_query->have_posts() ){ $my_query->the_post(); ?>
             
            <li>
                <a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail('thum-m'); ?></a>
                <h3><a rel="external" href="<? the_permalink()?>"><?php the_title(); ?></a></h3>
            </li>
         
        <?php } ?>

    <?php } ?>

    <?php wp_reset_query(); ?>

</ul>