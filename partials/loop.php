<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <article class="post">

        <?php echo the_post_thumbnail('thum-m', array('class' => 'post-image'));?>

        <div class="post-resume">
            
            <header class="post-header">
                <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            </header>

            <section class="post-excerpt">
                <?php the_excerpt(); ?>
            </section>

            <footer class="post-meta">
                <?php echo get_avatar(get_the_author_meta('ID'), '24'); ?>
                <?php the_author_posts_link(); ?>
                <time class="post-date" datetime="<?php the_time('F jS, Y'); ?>"><?php the_time('F jS, Y'); ?></time>
            </footer>

        </div>

    </article>

<?php endwhile; endif; ?>