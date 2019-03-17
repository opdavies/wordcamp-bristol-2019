<?php get_header(); ?>

<?php
if ( have_posts() ) : ?>
  <div class="w-12 block border-t-2 border-grey-darker mb-6"></div>

  <?php
  while ( have_posts() ) : the_post(); ?>

    <h2 class="text-4xl md:text-5xl font-bold mt-6 mb-8">
      <a class="text-black hover:text-grey-darkest hover:no-underline" href="<?php print get_permalink() ?>">
        <?php the_title(); ?>
      </a>
    </h2>

    <div class="max-w-xl font-serif text-xl leading-loose">
      <?php the_content(); ?>
    </div>

    <footer class="text-grey-darker my-10">
      <ul class="list-reset flex flex-wrap">
        <li class="flex items-center mr-5 mb-2">
          <svg class="fill-current text-grey-darker mr-2" width="16" height="16" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
          <a href="#0">oliver</a>
        </li>

        <li class="flex items-center mr-5 mb-2">
          <svg class="fill-current text-grey-darker mr-2" width="16" height="16" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><path id="a" d="M0 0h24v24H0V0z"></path></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"></use></clipPath><path clip-path="url(#b)" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm4.2 14.2L11 13V7h1.5v5.2l4.5 2.7-.8 1.3z"></path></svg>
          <a href="#0">March 12, 2019</a>
        </li>

        <li class="flex items-center mr-5 mb-2">
          <svg class="fill-current text-grey-darker mr-2" width="16" height="16" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
          <a href="#0">Uncategorized</a>
        </li>

        <li class="flex items-center mr-5 mb-2">
          <svg class="fill-current text-grey-darker mr-2" width="16" height="16" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
          <a href="#0">1 Comment</a>
        </li>
      </ul>
    </footer>

  <?php
    endwhile;
  else :
    _e( 'Sorry, no posts were found.', 'textdomain' );
  endif;
?>

<?php
get_footer();
