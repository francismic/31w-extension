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

function boite_carrousel(){
    /////////////////////////////////////// HTML
    // Le conteneur d'une boîte
    $contenu = 
    "<section class='carrousel'>"
    .'<button class = "carrousel--fermer">X<button>'
    .'<figure class="carrousel__figure"></figure>'
    .'<form class="carrousel__form"></form>'
    . '</section> <!-- fin class="carrousel" -->';
    
    return $contenu;
   }
   add_shortcode('fm_carrousel', 'boite_carrousel');


?>