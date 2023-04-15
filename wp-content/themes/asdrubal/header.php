<!DOCTYPE html>
<html <?php language_attributes (); ?>>

<head>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type='text/css' media='all'>
<?php  /*    
<link href="/css/fonts.css" rel="stylesheet">
<link rel="stylesheet" href="/css/estilos.css"> -->
*/ 
include 'components/metas-seo.php';
wp_head();
?>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/sobre-nosotros/">Sobre Nosotros</a></li>
                <li><a href="/servicios-seo/">Servicios SEO</a></li>
                <li><a href="/pricing/">Tarifas</a></li>
                <li><a href="/casos-de-exito/">Casos de Éxito</a></li>
                <li><a href="/blog/">Blog</a></li>
                <li><a href="https://strapi.io/features/media-library" target="_blank">Media Library</a></li>
                <li><span> Hoy es <?php echo date ("d/M/Y") ;?><span></li>
            </ul>
        </nav>
    </header>