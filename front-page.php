<?php get_header() ?>
<main class="principal">
    <!-- test  -->
        <!-- <h2 class="formation__titre">-------front-page.php---------</h2> -->
            <?php if (have_posts()):the_post()?>
                    <?php
                        the_title();
                        the_content();
                    ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>