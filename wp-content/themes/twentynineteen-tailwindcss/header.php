<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body class="font-sans bg-white text-gray-900 leading-normal antialiased">
    <div class="max-w-5xl mx-auto px-4 2xl:max-w-6xl">
      <header class="mt-16 mb-24">
        <div>
          <p class="text-2xl">
            <a href="<?php echo esc_url(home_url( '/' )); ?>" class="text-black hover:text-gray-800">
              <?php bloginfo('slogan'); ?>
            </a>
            <span class="font-serif font-thin text-gray-700">
              &mdash; <?php bloginfo('description'); ?>
            </span>
          </p>
        </div>

        <?php if (has_nav_menu('menu-1')): ?>
          <nav>
            <?php wp_nav_menu() ?>
          </nav>
        <?php endif; ?>
      </header>
