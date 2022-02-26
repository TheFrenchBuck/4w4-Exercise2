<?php get_header() ?>
<main class="site__main">

            <!-- test -->
    <!-- <h1>------ single-post.php ------</h1> -->
<?php
    if (have_posts()) : while(have_posts()) :the_post();
?>
<article class="cours">
    
    <h1 class="cour__titre">
        <?php the_title() ?>
    </h1>
    <section>
    <?php the_post_thumbnail("thumbnail"); ?>
    <p>
        <?php the_content() ?>
        
    </p>
    </section>
    
</article>
<?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>