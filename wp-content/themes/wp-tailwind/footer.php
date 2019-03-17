      <footer class="pt-24 pb-16">
        <p class="text-grey-darker">
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
