      <aside class="mt-24">
        <?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
      </aside>

      <footer class="pt-24 pb-16">
        <p class="text-gray-600">
          <?php bloginfo('slogan'); ?>,

          <a href="<?php echo esc_url(__('https://wordpress.org/', 'twentynineteen')); ?>">
            <?php printf(__('Proudly powered by %s.'), 'WordPress'); ?>
          </a>
        </p>
      </footer>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
