<?php   

function namespace_add_custom_types( $query ) {
    if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
      $query->set( 'post_type', array(
       'post', 'nav_menu_item', 'bd'
          ));
        return $query;
      }
  }
  add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

function corvanders_register_assets(){
   
    wp_register_style('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
    wp_register_style('stylesheet', 'style.css');
  }



add_action('wp_enqueue_style','corvanders_register_assets');


function post_thumbnail(){

    add_image_size( 'single-post-thumbnail', 590, 180 );
}




