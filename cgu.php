<?php
/*
Template Name: CGU
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="cgu">
      <h1>Conditions Générales d'Utilisation</h1>
      <div class="cgu-post">
        <h2>1. Objet des CGU</h2>
        <p>
            Les présentes Conditions Générales d'Utilisation (CGU) ont pour objet de définir
            les conditions et modalités d'utilisation de notre site (ci-après « RLTeamMatch »),
            ainsi que les droits et obligations des utilisateurs (ci-après « Utilisateur(s) »). En
            accédant au Site, l'Utilisateur accepte sans réserve les présentes CGU.
        </p>
      </div>
      <div class="cgu-post">
        <h2>2. Accès à RLTeamMatch</h2>
        <p>
            RLTeamMatch est accessible à tout Utilisateur disposant d'une connexion internet.
            Toutefois, certaines fonctionnalités peuvent être réservées aux Utilisateurs inscrits
            comme la possibilité de participer à des matchs en tournois. L'inscription
            nécessite la fourniture d'informations personnelles exactes et à jour.
        </p>
      </div>
      <div class="cgu-post">
        <h2>3. Compte Utilisateur</h2>
        <p>
            Lors de son inscription, l'Utilisateur s'engage à fournir des informations exactes et
            à les mettre à jour en cas de modification. L'Utilisateur est responsable de la
            confidentialité de ses identifiants de connexion et de toute activité effectuée
            depuis son compte. En cas de perte ou d'utilisation frauduleuse de ses
            identifiants, il doit en informer RLTeamMatch immédiatement.
        </p>
      </div>
      <div class="cgu-post">
        <h2>4. Propriété Intellectuelle</h2>
        <p>
            RLTeamMatch, son contenu (textes, images, vidéos, logos, etc.), et tous les
            éléments associés sont protégés par les lois en vigueur sur la propriété
            intellectuelle. Toute reproduction, représentation, modification ou exploitation
            partielle ou totale des contenus du Site est interdite sans autorisation préalable.
            Rocket League étant une marque déposée, RLTeamMatch ne revendique aucune
            propriété sur celle-ci et respecte les droits de propriété de Psyonix LLC.
        </p>
      </div>
      <div class="cgu-post">
        <h2>5. Règles de Conduite</h2>
        <p>
            L'Utilisateur s'engage à utiliser RLTeamMatch de manière respectueuse et
            conforme aux lois. Sont strictement interdits :
                ● Les comportements injurieux, diffamatoires, racistes, discriminatoires, ou
                incitant à la haine ;
                ● Toute tentative de piratage ou intrusion non autorisée dans le Site ou ses
                bases de données ;
                ● La diffusion de contenu non autorisé, protégé par des droits d'auteur, ou
                illégal.
            En cas de non-respect de ces règles, RLTeamMatch se réserve le droit de
            suspendre ou de supprimer le compte de l'Utilisateur, sans préavis.
        </p>
      </div>
      <div class="cgu-post">
        <h2>6. Données Personnelles</h2>
        <p>
            RLTeamMatch s'engage à protéger la vie privée de ses Utilisateurs conformément
            aux lois applicables sur la protection des données personnelles. Les données
            collectées sont nécessaires pour la gestion des comptes Utilisateurs et
            l'amélioration des services de RLTeamMatch. L'Utilisateur dispose d'un droit
            d'accès, de rectification, et de suppression de ses données, qu'il peut exercer en
            contactant RLTeamMatch à l'adresse suivante : rlteammatch@gmail.com.
        </p>
      </div>
      <div class="cgu-post">
        <h2>7. Résponsablilité</h2>
        <p>
            RLTeamMatch met tout en oeuvre pour assurer la disponibilité et la qualité des
            informations fournies. Toutefois, RLTeamMatch ne peut être tenu responsable des
            éventuelles erreurs, interruptions, ou dommages directs ou indirects résultant de
            l'utilisation de RLTeamMatch. RLTeamMatch ne garantit pas la compatibilité des
            services avec les équipements ou logiciels spécifiques de l'Utilisateur.
        </p>
      </div>
      <div class="cgu-post">
        <h2>8. Liens Externes</h2>
        <p>
            RLTeamMatch peut contenir des liens vers d'autres sites externes. RLTeamMatch n'a
            aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu
            ou leur politique de confidentialité.
        </p>
      </div>
      <div class="cgu-post">
        <h2>9. Modifications des CGU</h2>
        <p>
            RLTeamMatch se réserve le droit de modifier les présentes CGU à tout moment.
            Toute modification prendra effet immédiatement après sa mise en ligne.
            L'Utilisateur est invité à consulter régulièrement les CGU pour rester informé des
            éventuelles mises à jour.
        </p>
      </div>
      <div class="cgu-post">
        <h2>10. Loi Application et Juridication</h2>
        <p>
            Les présentes CGU sont régies par la loi française. En cas de litige relatif à
            l'interprétation ou à l'exécution des CGU, et en l'absence de résolution amiable, les
            tribunaux compétents de Belfort, France seront seuls compétents.
        </p>
      </div>
      <div class="cgu-post">
        <h2>Contact</h2>
        <p>
            Pour toute question ou demande d'information concernant les présentes CGU,
            l'Utilisateur peut contacter l'équipe de RLTeamMatch à l'adresse suivante :
            rlteammatch@gmail.com.
        </p>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>