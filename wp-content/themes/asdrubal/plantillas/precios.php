<?php
//include_once __DIR__ .  ('/../header.php');
get_header();
/* Template Name: pricing */
?>

<div class="">Las mejores tarifas</div>

<h1>
    <?php the_title();?>
</h1>

<section id="contenido">
    <?php
    echo the_content();
    ?> 
</section>

</div>

<?php
//include_once __DIR__ . ('/../footer.php');
get_footer();?>
