<?php
/*
Plugin Name: Auteurs_supplémentaires
Plugin URI: https://mon-siteweb.com/
Description: Ceci est mon premier plugin
Author: Audran
Version: 1.0
Author URI: http://mon-siteweb.com/
*/

if (!defined('WPINC')) {
  die;
}

$Auteur = new Auteur();

class Auteur
{
  public $auteurs = "...";

  public function __construct()
  {
    $this->hooks();
    $this->shortcode();
  }

  public function hooks()
  {
    if (is_admin()) {
      add_action('add_meta_boxes', [$this, 'add_meta_boxes'], 10, 1);
      add_action('save_post', [$this, 'save_form'], 10, 1);
    }
  }

  public function add_meta_boxes()
  {
    add_meta_box('auteur-meta-box', 'AuteursBox', [$this, 'display_form'], 'page', 'normal');
    add_meta_box('auteur-meta-box', 'AuteursBox', [$this, 'display_form'], 'post', 'normal');
  }

  public function display_form($post)
  {
    $this->auteurs = get_post_meta($post->ID, 'auteurs', true);

    ?>
    <table class="form-table">
      <tbody>
      <tr>
        <th scope="row"><label for="auteurs">Titre</label></th>
        <td><input type="text" id="auteurs" name="auteurs" value="<?= esc_html($this->auteurs) ?>" class="regular-text">
        </td>
      </tr>
      </tbody>
    </table>
    <?php
  }

  public function save_form($post_id)
  {
    if (!isset($_POST['auteurs'])) {
      return;
    }
    update_post_meta($post_id, 'auteurs', sanitize_text_field($_POST['auteurs']));
    $this->auteurs = get_post_meta(get_the_ID(), 'auteurs', true);
  }


  public function shortcode()
  {
      add_shortcode('auteurs', [$this, 'printAuteurs']);
  }

  public function printAuteurs($atts = [], $content = null){
    if (!isset($atts['post'])) {
      return $this->auteurs;
    }
    $auteurs = get_post_meta($atts->post, 'auteurs', true);
    if($auteurs == "John, Paul, George et Ringo")
         return $auteurs;
    else return "<p>...</p>";
  }

}
