<?php
/**
 * Insert Dummy Post Data
 */

 $post_title = "BLAINE HURTADO";
 $post_type = "team"; 
 
 /* Attempt to find post id by post name if it exists */
 $found_post_title = get_page_by_title( $post_title, OBJECT, $post_type );
 $found_post_id = $found_post_title->ID;
 
 /*
 ** Check If Page does not exist, if true, create a new post 
 */
 if ( FALSE === get_post_status( $found_post_id ) ): 
 
	   $post_args = array(
		 'post_title' => $post_title,
		 'post_type' => $post_type,
		 'post_status'  => 'publish',
		 /* If you have meta fields to enter data into  
		 'meta_input'   => array(
			 'meta_key1' => 'my value',
			 'meta_key2' => 'my other value',
		 ),
		 */
	   );      
 
 
	   /* Add a new wp post into db, return it's post id */
	   $returned_post_id = wp_insert_post( $post_args );  
 
	   /* Update page template only if using "page" as the post_type */ 
	  // update_post_meta( $returned_post_id, '_wp_page_template', 'my-page-template.php' ); 
 
	   /* Add values into meta fields. Work with ACF CUSTOM FIELDS!! */
	  // $field_key = "My_Field_KEY";
	   //$value = "my custom value";
	  // update_field( $field_key, $value, $returned_post_id );
 
	   //$field_key = "My_Other_Field_KEY";
	  // $value = "my other custom value";
	   //update_field( $field_key, $value, $returned_post_id );
 
	   /* Save a checkbox or select value */
	   // $field_key = "My_Field_KEY";
	   // $value = array("red", "blue", "yellow");
	   // update_field( $field_key, $value, $returned_post_id );
 
	   /* Save to a repeater field value */
	   // $field_key = "My_Field_KEY";
	   // $value = array(
	   //   array(
	   //     "ss_name" => "Foo",
	   //     "ss_type" => "Bar"
	   //   )
	   // );
	   // update_field( $field_key, $value, $returned_post_id );
 
	   /* Echo a response! */
	   //echo "<span class='pg-new'><strong>". $post_title . " Created!</strong></span><br>";
	   //echo "<a href='".esc_url( get_permalink($returned_post_id) )."' target='_Blank'>". $post_title . "</a><p>";

	   endif;