<?php 

// Enables post-thumbnails
function bp_theme_setup() {
    // Add support for featured image
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'bp_theme_setup');


// Active Nav Menu option
function register_navigation_menu() {
  register_nav_menu('primary', 'Header Navigation Menu');
}
add_action('after_setup_theme', 'register_navigation_menu');


/** Hides icons when a editor is logged in the admin-dashboard **/
if( current_user_can('editor') ) {  
  function emersonthis_remove_add_media() { // Remove media buttons from all pages and post
      remove_action( 'media_buttons', 'media_buttons' ); // do this conditionally if you want to be more selective
  }
  add_action('admin_head', 'emersonthis_remove_add_media');

  function emersonthis_custom_menu_page_removing() { // Hides pages from the dashboard admin menu 
    remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'edit.php' );                   //Posts
    remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'tools.php' );                  //Tools
  }
  add_action( 'admin_menu', 'emersonthis_custom_menu_page_removing' );
} // if








