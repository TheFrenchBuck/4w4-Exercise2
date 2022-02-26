<footer class="site__footer">
    
<?php 

        $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
        wp_nav_menu(array(
                            "menu"=>"simple",
                            "container"=>"nav",
                            "container_class"=>"site__footer__menu",
                            "menu_class"=>"site__footer__menu__ul",

                            "link_before"=>$icone)); ?>
                            <div class="site__footer__info3">
                <div class="left">
                    <p class="elem__p">À propos</p>
                    <p class="elem__p">Règles de confidentialité</p>
                    <p class="elem__p">Médias</p>

                </div>
        <div class="millieu">
            <p class="elem__p">Trouver une personne</p>
        <?php get_search_form() ?></div>
        
        <div class="right">
        
        <p class="elem__p">Un service Trouver un campus de formation</p>
        <p class="elem__p">FAQ</p>
        </div>

        
        </div>
        <div class="site__footer__info1">
        
                <div><p class="elem__p">Un site web fait par une élève du TIM à l'aide de Wordpress.</p>
                </div>
                <div><h3 class="elem__h3">Fait par Zachary Arsenault</h3></div>
        
        
            <div><h2 class="elem__h2">Ce footer</h2></div>
        
    
    </div>

        
        
</footer>

</body>

</html>