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

function genere_html(){
    /////////////////////////////////////// HTML
    // Le conteneur d'une boîte
    $contenu = 
    "<div class='boite'>"
    . "<code>-----Auteur: " . get_the_author() . "</code>"
    . "<date>-----Date de publication: " . get_the_date() . "</date>"
    . "<code>-----Adresse URL" . get_the_guid() . "</code>"
    . '</div> <!-- fin class="boite" -->';
    
    return $contenu;
   }
   add_shortcode('fm_carrousel', 'genere_html');


?>