<?php
/*
Plugin Name:  High Signup
Plugin URI:  https://github.com/ernieshigh/bs
Description:  This is a test
Version:      0.0.1
Author:       ernie
Author URI:   https://ernieshigh.dev
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  high-sign
Domain Path:  /languages
*/

function high_signup($content) {
  
  
 
$content .= '<div id="scroll-block" class="high-form-wrap" style="display: none;" >';
$content .= '<h3> Hey Sign up</h3>';
$content .= '<form method="POST" action="" class="high-form" id="add_user">';
$content .= '<input type="text" name="high_name"/>';
$content .= '<input type="email" name="high_email">';
$content .= '<input type="submit" value="Sign me up now!" name="high_submit" onclick="hide_form()">';
$content .= '</form>';
$content .= '</div>';
 

return $content; 
 
} 
add_filter('the_content', 'high_signup'); 



function high_enqueue() {
    wp_enqueue_style( 'high-style', plugin_dir_url( __FILE__ ) . 'high-style.css' );
    wp_enqueue_script( 'high-js', plugin_dir_url( __FILE__ ) . 'high-js.js' );
}

add_action( 'wp_enqueue_scripts', 'high_enqueue' );


include( plugin_dir_path( __FILE__ ) . 'high-functions.php');


function referral_activation(){ 
    high_create_table();
} 
register_activation_hook( __FILE__, 'referral_activation');