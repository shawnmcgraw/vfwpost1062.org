<?php 

  // enqueue js
  function add_theme_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(''), 1, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), 1, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), 1, true );
  }

  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
 

  // theme support
  if ( ! function_exists( 'posttheme_setup' ) ) :

    function posttheme_setup() {
      // nav menu
      register_nav_menus( array('primary' => __( 'Primary Menu', 'posttheme' )) );
      // featured images on posts
      add_theme_support( 'post-thumbnails' );
      // title tags
      add_theme_support( 'title-tag' );
      // html5 
      add_theme_support( 'html5', 
        array( 'comment-list', 'comment-form', 'search-form' ) 
      );
      // support for post formats
      add_theme_support( 'post-formats', 
        array ( 'aside', 'gallery', 'quote', 'image', 'video' ) 
      );
    }
  endif; // posttheme_setup
  add_action( 'after_setup_theme', 'posttheme_setup' );

  // newsletter custom post type
  function newsletter_custom_post_type() {
    register_post_type(
      'newsletter',
      array(
        'rewrite' => array('slug', 'newsletter'),
        'labels' => array(
          'name' => 'Newsletter',
          'singular_name' => 'Newsletter',
          'add_new_item' => 'Add New Newsletter',
          'edit_item' => 'Edit Newsletter'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
          'title', 'thumbnail', 'editor', 'excerpt'
        )
      )
    );
  }

  add_action( 'init', 'newsletter_custom_post_type' );

  function posttheme_init_widgets($id){
    register_sidebar(array(
      'name'  => 'Box1',
      'id'    => 'box1',
      'before_widget' => '<div class="col-lg-4 card">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5>',
      'after_title'   => '</h5>'
    ));

    register_sidebar(array(
      'name'  => 'Box2',
      'id'    => 'box2',
      'before_widget' => '<div class="col-lg-4 card">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5>',
      'after_title'   => '</h5>'
    ));

    register_sidebar(array(
      'name'  => 'Box3',
      'id'    => 'box3',
      'before_widget' => '<div class="col-lg-4 card">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5>',
      'after_title'   => '</h5>'
    ));
  }

  add_action('widgets_init', 'posttheme_init_widgets');

  // add custom size for carousel images
  add_image_size('carousel_image', 1300, 600, TRUE);

  add_filter('image_size_names_choose', 'posttheme_custom_image_sizes');
  function posttheme_custom_image_sizes($sizes){
    return array_merge($sizes, array(
      'carousel_image' => __('Carousel')
    ));
  }

  // Customizer File
  require get_template_directory(). '/inc/customizer.php';

?>