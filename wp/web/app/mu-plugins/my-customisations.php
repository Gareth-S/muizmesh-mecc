<?php
/**
 * Plugin Name: My Customizations
 * Description: Theme customizations and overrides.
 * Author: Dav Dev
 */


add_action( 'admin_footer', 'my_admin_css' );
function my_admin_css() {
   echo '<style>
      /*Put your CSS code here*/
   </style>';
}

//if ( function_exists( 'some_wp_rocket_function' ) ) { 
	// do something with some_wp_rocket_function() here
//}

// Turn off the author credit in the site footer
add_filter( 'primer_author_credit', '__return_false' );

//get_template_part( 'template-parts/footer/site', 'info' );

//echo “Copyright MuizenMesh Community”;

