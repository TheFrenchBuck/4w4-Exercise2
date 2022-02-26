<?php get_header() ?>
<main class="site__main">
    <!-- <h1>------ page.php ------</h1> -->
<?php
    if (have_posts()) : while(have_posts()) :the_post();
?>
<article class="cours">
    <h1 class="cour__titre">
        <?php the_title() ?>
    </h1>
    <?php the_content() ?>
</article>
<?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>