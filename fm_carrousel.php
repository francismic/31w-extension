<?php
/**
 *
 * @package           Carrousel
 * @author            Francis Michaud
 * @copyright         College de Maisonneuve
 * @license           GPL-2.0-or-later
 *
 * Plugin Name: fm_carrousel
 * Description: Permet d'afficher une boite modale de l'image selectionnée d'une galerie. Pour ensuite accéder à toutes les images de la galerie.
 * Author: Francis Michaud
 * Author URI: https://github.com/francismic
 * 
 */

   ## filemtime() // retourne en milliseconde le temps de la dernière sauvegarde
## plugin_dir_path() // retourne le chemin du répertoire du plugin
## __FILE__ // le fichier en train de s'exécuter
## wp_enqueue_style() // Intègre le link:css dans la page
## wp_enqueue_script() // intègre le script dans la page
## wp_enqueue_scripts // le hook

function fm_enqueue(){

    $version_css = filemtime(plugin_dir_path(__file__). "style.css");
    $version_js = filemtime(plugin_dir_path(__file__). "js/carrousel.js");
    /* var_dump(__FILE__); die(); */
    wp_enqueue_style("fm_carrousel",plugin_dir_url( __FILE__)  . "style.css",
    array(),
    $version_css,
    false);

wp_enqueue_script("fm_carrousel", plugin_dir_url( __FILE__) . "js/carrousel.js",
                array(),
                $version_js,
                true);
    
};

add_action("wp_enqueue_scripts","fm_enqueue");


function fm_boite_carrousel(){
    /////////////////////////////////////// HTML
    // Le conteneur d'une boîte
    $contenu = 
        "
        <button class='bouton'>Ouvrir le carrousel</button>
        <div class='carrousel'>"

            // --fermer parce que ACTION __figure parce que élément se trouve dans carrousel
            .'<button class="carrousel__x">X</button>'
            .'<figure class="carrousel__figure"></figure>'
            .'<form class="carrousel__form"></form>'
        .'</div> <!-- fin class="carrousel" -->';
        
        return $contenu;
   }
   add_shortcode('fm_carrousel', 'fm_boite_carrousel');


?>