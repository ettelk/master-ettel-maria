<section id="trespostdisplay" class="flexcenter">

      <?php

      $args = array(
      'posts_per_page' => 3,
      'post_type' => 'post',
      'orderby' => 'date',
      'order' => 'DESC',
      );
      $the_query = new WP_Query( $args);
      // Un loop
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        include $plantillas .'/display-posts/card-posts.php';
        //include
      }
      wp_reset_postdata(); 
      ?>

</section>