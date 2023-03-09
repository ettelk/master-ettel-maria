<!DOCTYPE html>
<html <?php language_attributes (); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type='text/css' media='all'>
<?php  /*    
<link href="/css/fonts.css" rel="stylesheet">
<link rel="stylesheet" href="/css/estilos.css"> -->
*/ 
wp_head();
?>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/open-source">Open Source</a></li>
                <li><a href="/customizable">Customizable</a></li>
                <li><a href="/nueva">Nueva</a></li>
                <li><a href="/basica">Web Básica</a></li>
                <li><a href="https://strapi.io/features/media-library" target="_blank">Media Library</a></li>
                <li><span> Hoy es <?php echo date ("d/M/Y") ;?><span></li>
            </ul>
        </nav>
    </header>