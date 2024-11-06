    <footer>
      <nav>
        <?php
          wp_nav_menu ( array (
            'theme_location' => 'footer-menu'
          )); 
        ?>
      </nav>
        <span class="footer-line"></span>
        <p>Tous droits réservés.</p>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>