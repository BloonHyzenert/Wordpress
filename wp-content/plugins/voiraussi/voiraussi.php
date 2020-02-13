<?php
/*
Plugin Name: Voir aussi
Plugin URI: https://mon-siteweb.com/
Description: Ceci est mon premier plugin
Author: Audran
Version: 1.0
Author URI: http://mon-siteweb.com/
*/

add_shortcode('voiraussi', 'lien');

function lien($attrs){
    if (!isset($attrs['id'])) {
      return "";
    }
    if($attrs['id']==42){
        return '<a href="'.$attrs['id'].'">Ceci est mon article : '.$attrs['id'].'</a>';
    }
    return '<a href="'.$attrs['id'].'">Voir aussi : '.$attrs['id'].'</a>';
}
