<?php
/***
	*
	* Functions for adding users to database
	*
***/


function high_create_table () {
    global $wpdb;  
    $table_name = $wpdb->prefix . "subscribers"; 
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        sub_name text NOT NULL,
        sub_email varchar(200) NOT NULL, 
        PRIMARY KEY  (id)
    ) $charset_collate;";

    $wpdb->query($sql);
}


if(isset ($_POST['high_submit'])){
	
$name = $_POST['high_name'];
$email = $_POST['high_email'];

	global $wpdb;

  $table_name = $wpdb->prefix . 'subscribers';
  $wpdb->insert( $table_name, array(
    'sub_name' => $name,
    'sub_email' => $email
  ));
	
	
} 