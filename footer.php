    <div id="cookie-banner" class="cookie-banner">
      <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site. Veuillez choisir vos préférences.</p>
      <div class="cookie-buttons">
        <button id="accept-all-cookies">Accepter tous les cookies</button>
        <button id="accept-necessary-cookies">Accepter uniquement les cookies nécessaires</button>
        <button id="reject-all-cookies">Refuser tous les cookies</button>
      </div>
    </div>

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