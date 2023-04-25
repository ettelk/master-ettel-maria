<?php
$term = get_queried_object();
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>

<!-- Metaetiquetas del Máster -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="UTF-8" />

       <?php $metarobots_checked_values = get_field( 'metarobots', $term );
       if ( $metarobots_checked_values ) : ?>
           <meta name="robots" content="<?php the_field ('metarobots', $term); ?>">
       <?php endif; ?>

       <?php the_field('custom_meta', $term);?>
     
       <title><?php the_field( 'title', $term); ?></title>
       <meta name="description" content="<?php the_field( 'metadescription', $term); ?>">
       <link rel="canonical" href="<?php if (get_field('canonical', $term)){the_field('canonical', $term);}
        else {echo $url_sin_string;}
        ?>"> 

        <!-- Open Graph / Facebook -->
    
        <meta property="og:title" content="<?php 
        if (get_field('open_graph_title', $term))
        {the_field( 'open_graph_title', $term );} 
        else{the_field( 'title', $term);}  
        ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php if (get_field('canonical', $term)){the_field('canonical', $term);}
        else {echo $url_sin_string;}?>">
        <meta property="og:description" content="<?php the_field( 'open_graph_description', $term ); ?>">
        <meta property="og:image" content="<?php 
        if (get_field('open_graph_image', $term))
        {the_field('open_graph_image', $term);} 
        else{the_field('default_image', $term);}  
        ?>">
        <meta property="og:image:secure_url" content="<?php the_field( 'open_graph_image' ); ?>">
        <meta property="og:image:alt" content="<?php the_field( 'title', $term); ?>">

        <!-- Twitter Cards -->
        <meta property="twitter:title" content="<?php
        if (get_field( 'twitter_title', $term ))
        {the_field('twitter_title', $term);} 
        elseif(get_field('open_graph_title', $term)){the_field('open_graph_title', $term);}
        else{the_field( 'title', $term);}    
        ?>">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="<?php if (get_field('canonical', $term)){the_field('canonical', $term);}
        else {echo $url_sin_string;}?>">
        <meta property="twitter:description" content="<?php the_field( 'twitter_description', $term ); ?>">
        <meta property="twitter:image" content="<?php the_field( 'open_graph_image' ); ?>">
        <meta property="twitter:site" content="@SEO_Tecnico">
        <meta property="twitter:creator" content="@SEO_Tecnico">

<!-- Fin de las metaetiquetas -->