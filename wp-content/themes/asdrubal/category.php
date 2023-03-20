<?php
get_header();
?>

<div class="generico">

<h1>
    <?php single_cat_title();?>
</h1>

<section id="contenido">
    <?php
    echo category_description();
    ?>
</section>

<section id="articulos">
<?php
 $args = array(
    'cat' => get_query_var('cat'),
    'posts_per_page' => -1,
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
</div>

<?php
get_footer();?>