<?php

wp_enqueue_style( 'style', get_stylesheet_uri() );

// override the widget styles for sidebar-1
add_action('after_setup_theme', function () {
  register_nav_menus(
      array(
        'menu-1' => __( 'Primary', 'twentynineteen_tailwindcss' ),
        'footer' => __( 'Footer Menu', 'twentynineteen_tailwindcss' ),
        'social' => __( 'Social Links Menu', 'twentynineteen_tailwindcss' ),
      )
    );
  remove_action( 'widgets_init', 'twentynineteen_widgets_init' );
});

add_action('widgets_init', function () {
  register_sidebar(
    array(
      'name' => 'Sidebar',
      'id' => 'sidebar-1',
      'before_title' => '<h2 class="text-5xl font-bold mt-6 mb-4 tracking-tight">',
      'after_title' => '</h2>',
      'before_widget' => '<div class="mt-10 w-full md:w-1/2 px-6 text-2xl">',
      'after_widget' => '</div>',
    )
  );
});
