<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body class="font-sans bg-white text-gray-900 leading-normal antialiased">
    <div class="max-w-6xl mx-auto px-4">
      <header class="mt-16 mb-24">
        <p class="text-2xl">
            <a href="<?php echo esc_url(home_url( '/' )); ?>" class="text-black hover:text-gray-800">
              <?php bloginfo('slogan'); ?>
            </a>
          <span class="font-serif font-thin text-gray-700">
            &mdash; <?php bloginfo('description'); ?>
          </span>
        </p>
      </header>
