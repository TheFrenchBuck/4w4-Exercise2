<?php get_header() ?>

<main class="site__main">
<h1 class="site__main__titre">Resultat de recherche</h1>
<?php if(have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<article class="site__main__recherche">
    <h3>
        <a href="<?php echo get_permalink();?>">
        <?php the_title() ;?>
        </a>
    </h3>
    <p><?php echo wp_trim_words(get_the_content(),20) ;?></p>
</article>
<?php endwhile; ?>
<?php else: ?> 
<?php endif; ?>
</main>
<?php get_footer() ?>