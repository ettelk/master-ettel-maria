<?php
//include_once 'header.php';
get_header();?>

<div class="generico">

<h1>
    <?php the_title();?>
</h1>
<style>
img.aspectimagebody
{aspect-ratio: 3/2;
object-fit: cover;}
</style>    
<div class="descripcion-corta"><?php the_field( 'descripcion_corta' ); ?></div> 
<section id="contenido">
<img height= "800px" class="aspectimagebody" src="<?php the_field( 'body_image' ); ?>" />
    <?php
    echo the_content();
    ?>  
</section>

</div>

<?php
//include_once 'footer.php';
get_footer();?>
