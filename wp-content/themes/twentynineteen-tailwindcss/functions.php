<?php

wp_enqueue_style( 'style', get_stylesheet_uri() );

add_action('widgets_init', function () {
  register_sidebar(
    array(
      'name' => 'Sidebar',
      'id' => 'tw-sidebar',
      'before_title' => '<h2 class="text-4xl font-bold text-gray-800 mt-6 mb-4 tracking-tight">',
      'after_title' => '</h2>',
      'before_widget' => '<div class="mt-10 w-1/2 px-6">',
      'after_widget' => '</div>',
    )
  );
});
