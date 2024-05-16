<?php
/* 
Plugin Name: Precio BTC
Plugin URI: https://lahr0809.github.io
Description: Con este plugin puedes mostrar en cualquier parte de tu sitio web el precio actual de Bitcoin a través de un Shortcode.
Version: 1.0.0
Requires at least: 6.3.1
Requires PHP: 8.0
Author: Luis Hernandez
Author URI: https://lahr0809.github.io
License: MIT
License URL: https://lahr0809.github.io
*/

if (!defined('ABSPATH')) exit;

require_once dirname(__FILE__).'/includes/class-btprice-principal.php';
//$_Cryto = new Principal;

register_activation_hook( __FILE__, array( 'Principal', 'Install' ) );

register_deactivation_hook( __FILE__, array( 'Principal', 'Uninstall' ) );

add_action('admin_menu','Menu');

function Menu(){
    add_menu_page(
        'BTC Price', //Titulo de la pagina
        'BTC Price', //Titulo del menu
        'manage_options', //Capability
        plugin_dir_path(__FILE__).'admin/index.php', //parent
        null, //Funcion del contenido
        plugin_dir_url(__FILE__).'assets/icon.png',
        '5'
    );
}
function encolar_scripts() {
    // Encolar el archivo JavaScript
    wp_enqueue_script(
        'encolar_scripts', // Identificador del script
        plugin_dir_url(__FILE__) . 'assets/js/main.js', // Ruta al script
        array(), // Dependencias (si tiene dependencias, se pasan aquí)
        '1.0', // Versión del script
        true // Cargar en el pie de la página (true) o en el encabezado (false)
    );

//Pasar la ruta del plugin a un script
wp_localize_script(
    'encolar_scripts',
    'miPlugin',//nombre de la variable para utilizar en el script
    array(
        'url' => plugin_dir_url(__FILE__) // Ruta de tu plugin
    )
);
}
add_action('admin_enqueue_scripts', 'encolar_scripts');
add_shortcode('BTCPRICE', array( 'Principal', 'get_pricebtc' ));

?>