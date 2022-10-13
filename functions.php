<?php


function l1fter_theme_support(){
    add_theme_support("title-tag");
};
add_action("after_setup_theme","l1fter_theme_support");

function l1fter_menus(){
    $location = array(
        'primary' => "Desktop primary left sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($location);
}
add_action("init","l1fter_menus");
function l1fter_register_styles(){
    $version = wp_get_theme()->get("Version");
    
    wp_enqueue_style("l1fter-caroussel", get_template_directory_uri() . "/assets/vendors/owl-carousel/css/owl.carousel.css", array(),"1.0","all");
    wp_enqueue_style("l1fter-owl", get_template_directory_uri()."/assets/vendors/owl-carousel/css/owl.theme.default.css", array(),"1.0","all");
    wp_enqueue_style("l1fter-themify", get_template_directory_uri()."/assets/vendors/themify-icons/css/themify-icons.css", array(),"1.0","all");

    wp_enqueue_style("l1fter-bootstrap", get_template_directory_uri()."/assets/css/ollie.css", array(),$version,"all");
};




add_action("wp_enqueue_scripts","l1fter_register_styles");
function l1fter_register_scripts(){
    $version = wp_get_theme()->get("Version");
    // wp_enqueue_style("l1fter-scss", get_template_directory_uri()."/build/index.css", array(),$version,"all");
    
    wp_enqueue_script("l1fter-jquery", get_template_directory_uri()."/assets/vendors/jquery/jquery-3.4.1.js", array(),"1.0","all");
    wp_enqueue_script("l1fter-bootstrapbundl", get_template_directory_uri()."/assets/vendors/bootstrap/bootstrap.bundle.js", array(),"1.0","all");
    wp_enqueue_script("l1fter-bootstrapaff", get_template_directory_uri()."/assets/vendors/bootstrap/bootstrap.affix.js", array(),"1.0","all");
    wp_enqueue_script("l1fter-owl-carousel", get_template_directory_uri()."/assets/vendors/owl-carousel/js/owl.carousel.js", array(),$version,"all");
    wp_enqueue_script("l1fter-ollie", get_template_directory_uri()."/assets/js/ollie.js", array(),$version,"all");
};




add_action("wp_enqueue_scripts","l1fter_register_scripts");
?>