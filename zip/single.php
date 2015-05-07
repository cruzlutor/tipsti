<?php get_header(); ?>

<div class="wrapper">
    <div class="post-page fluid">
        <div class="fluid-center column">
            <main id="content" class="" role="main">

                <?php the_post();?>
                
                <article class="post">

                    <header class="post-header">
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <section class="post-meta">
                            <?php echo get_avatar(get_the_author_meta('ID'), '24'); ?>
                            <?php the_author_posts_link(); ?>
                            <time class="post-date" datetime="<?php the_time('F jS, Y'); ?>"><?php the_time('F jS, Y'); ?></time>
                        </section>
                    </header>

                    <aside class="share-post">
                        <a href="javascript:void(0)" onClick="javascript:fbShare('<?php echo get_permalink(); ?>')" class="share-button fb"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:void(0)" onClick="javascript:twShare('<?php echo get_permalink(); ?>', '<?php the_title(); ?>', 'tipsticom')" class="share-button tw"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:void(0)" onClick="javascript:psShare('<?php echo get_permalink(); ?>')"  class="share-button ps"><i class="fa fa-google-plus"></i></a>
                    </aside>

                    <section class="post-content">
                        <?php the_content(); ?>
                    </section>

                </article>   

                <aside class="share-post">
                    <a href="javascript:void(0)" onClick="javascript:fbShare('<?php echo get_permalink(); ?>')" class="share-button fb"><i class="fa fa-facebook"></i></a>
                    <a href="javascript:void(0)" onClick="javascript:twShare('<?php echo get_permalink(); ?>', '<?php the_title(); ?>', 'tipsticom')" class="share-button tw"><i class="fa fa-twitter"></i></a>
                    <a href="javascript:void(0)" onClick="javascript:psShare('<?php echo get_permalink(); ?>')"  class="share-button ps"><i class="fa fa-google-plus"></i></a>
                </aside>

                <div class="post-commnets">
                    <h2>Que opinas? Unete a la conversacion</h2>
                    <div class="fb-comments" data-href="http://www.juegospormonton.com" width="100%" data-numposts="5" data-colorscheme="light"></div>    
                </div>

            </main>
        </div>

        <div class="fluid-right column">
            <section class="list-post">
                <?php get_template_part( 'partials/related'); ?>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>