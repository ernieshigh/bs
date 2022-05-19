<?php
/***
	*
	* Functions for adding users to database
	*
***/


if(isset ($_POST['high_submit'])){
	
$name = $_POST['high_name'];
$email = $_POST['high_email'];

	global $wpdb;

  $table_name = $wpdb->prefix . 'subscriber';
  $wpdb->insert( $table_name, array(
    'sub_name' => $name,
    'sub_email' => $email
  ));
	
	
} 