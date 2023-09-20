<?php
// Cosas del SEO del footer
function wp_seofooter() {
    // Esto se llama desde el header.php
    $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
    //$protocol = 'https://';
    $url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
    $term = get_queried_object();
    $proyectoname = "master-ettel-maria.test";

    the_field( 'custom_meta_footer', $term );

    if ( is_home() || ( is_front_page() && is_page() ) ) {
        // hacer algo si es la página principal
        // No funciona por algún motivo extraño
        ?>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "EM Agency",
            "url": "<?php echo $url_sin_string;?>",
            "logo": "<?php echo get_template_directory_uri(); ?>/images/w-logo-blue.png"
        }    
        </script>

        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "NewsArticle",
        "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?php echo $url_sin_string;?>"
         },
        "headline": "<?php the_title(); ?>",
        "image": [
        "<?php the_field('open_graph_image', $term ); ?>"
         ],
        "datePublished": "<?php echo get_the_date('c'); ?>",
        "dateModified": "<?php echo get_the_modified_date('c'); ?>",
        "description": "<?php the_field("metadescription", $term ); ?>"
         }
        </script>

        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Asdrubal proyecto",
        "url": "<?php echo $url_sin_string;?>",
        "logo": "<?php echo get_template_directory_uri(); ?>/images/logo.png"
        }
        </script>
        
        <?php 
    } elseif ( is_singular() || is_category() ) {
        // hacer algo si es una publicación o categoría
    }
}

//do something just on a category archive page
add_action ('wp_footer', 'wp_seofooter'); //hook que lanza la función y carga el contenido en el head

?>
