<?php

wp_enqueue_style( 'style', get_stylesheet_uri() );

function tw_widgets() {
  register_sidebar(
    array(
      'name' => 'Sidebar',
      'id' => 'tw-sidebar',
      'before_title' => '<h2 class="text-4xl font-bold text-gray-800">',
      'after_title' => '</h2>',
      'before_widget' => '<div class="mt-16 w-1/2 px-6">',
      'after_widget' => '</div>',
    )
  );
}
add_action('widgets_init', 'tw_widgets');
