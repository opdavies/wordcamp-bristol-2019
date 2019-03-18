<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body class="font-sans bg-white text-black leading-normal antialiased">
    <div class="max-w-4xl mx-auto px-4">
      <header class="mt-16 mb-24">
        <p class="text-2xl">
          <?php bloginfo('slogan'); ?>

          <span class="font-serif font-thin text-gray-600">
            &mdash; <?php bloginfo('description'); ?>
          </span>
        </p>
      </header>
