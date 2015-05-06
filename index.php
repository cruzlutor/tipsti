<?php get_header(); 

?>

<div class="wrapper">

    <div class="index-page fluid post-loop">

        <div class="fluid-center column">
            <main id="content" role="main">
                <?php get_template_part( 'partials/loop'); ?>
            </main>
        </div>

        <div class="fluid-right column">
            <section class="list-post">
                <?php get_template_part( 'partials/popular'); ?>
            </section>
        </div>

    </div>

</div>

<?php get_footer(); ?>