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

  //slick-jquery

  wp_enqueue_style('slickcss', get_template_directory_uri() . "/css/slicknav.min.css", array(), '1.0.10');

  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');

  wp_enqueue_script('jquery');

  wp_enqueue_script('scripts', get_template_directory_uri() . "/js/script.js", array('jquery'), '1.0.10', true); 

  wp_enqueue_script('slicknavjs', get_template_directory_uri() . "/js/jquery.slicknav.js", array('jquery'), '1.0.10', true); //mention it should work in header or footer. True> footer; False > Header
}
//hook
add_Action('wp_enqueue_scripts', 'gym_fitness_script');



// <!-- Enable the featured images in the pages -->
function gymfitness_setup() {

   add_image_size('square', 350, 350, true);
   add_image_size('portrait', 350, 724, true);
   add_image_size('box', 400, 375, true);
   add_image_size('mediumSize', 700, 400, true);
   add_image_size('blog', 966, 644, true);
   add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'gymfitness_setup');



?>



