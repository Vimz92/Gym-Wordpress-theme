<?php 
function create_menu() {
    register_nav_menus(  array(
        'main-menu' => 'Main Menu',

    ));
}
//hook
add_action('init', 'create_menu');



//add normalize or any other external style using this function pass this to wp_head() in header
function gym_fitness_script(){
  wp_enqueue_style('normalize', get_template_directory_uri() . "/css/normalize.css", array(), '8.0.1');   

  wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Staatliches&display=swap', array(), '1.0.0');

  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');
}
//hook
add_Action('wp_enqueue_scripts', 'gym_fitness_script');
?>