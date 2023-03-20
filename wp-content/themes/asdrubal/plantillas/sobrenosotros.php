<?php
//include_once __DIR__ .  ('/../header.php');
get_header();
/* Template Name: sobre nosotros */
?>


<h1>
    <?php the_title();?>
</h1>

<section id="contenido">
    <?php
    echo the_content();
    ?> 
</section>
<?php
include $plantillas .'trespost.php';
//include 'plantillas/trespost.php';
?>
</div>

<?php
//include_once __DIR__ . ('/../footer.php');
get_footer();?>
