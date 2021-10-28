<?php get_header(); ?>
      <?php 
      // wykonuj dopóki są posty
        while(have_posts()){  
          // wyswietl post 
          the_post(); ?>     
          <?php the_content(); ?>
       <?php  }
          //  wywołanie kolejnej strony wpisów, ilość wpisów na jednej stronie blogu ustawiamy w ustawienia czytanie
           echo paginate_links();

      ?>

    </div>
    <?php get_footer(); ?>