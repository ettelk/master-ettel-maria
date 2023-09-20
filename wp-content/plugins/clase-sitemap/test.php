<?php
/* 
Plugin Name: Lección de sitemap
Plugin URI:
Description: Ejercicio para la clase de plugin propio
Author: Asdrubal
Author URI: https://carlos.sanchezdonate.com
Version: 2.0.6.5
License: GPLv2
*/
// Borrar el sitemap nativo de Wordpress:
include'includes/del-sitemap.php';
// Generar plantilla
include 'includes/template-generator.php';
// Datos estructurados
 include 'includes/json.php';
?>
   
    