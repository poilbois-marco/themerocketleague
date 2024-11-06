<?php
/*
Template Name: Mentions Légales
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="mentions-legales">
      <h1>Mentions Légales</h1>
      <div class="mentions-legales-post">
        <h2>1. Informations sur L'Editeur de RLTeamMatch</h2>
        <p>
            Le site RLTeamMatch.marcopoilbois.fr est édité par :
            <ul>
                <li>Nom de l'Éditeur : RLTeamMatch</li>
                <li>Forme juridique : Auto-entrepreneur</li>
                <li>Capital social : Non applicable (auto-entrepreneur)</li>
                <li>Adresse du siège social : Montbéliard, 25200</li>
                <li>Immatriculation : SIREN 212503882</li>
                <li>Directeur de la publication : Marco Poilbois</li>
                <li>Contact : marcopoilbois@gmail.com</li>
            </ul>
        </p>
      </div>
      <div class="mentions-legales-post">
        <h2>2. Hébergement de RLTeamMatch</h2>
        <p>
            RLTeamMatch est hébergé par :
            <ul>
                <li>Nom de l'hébergeur : Infomaniak Network SA</li>
                <li>Adresse : Rue Eugène-Marziano 25, 1227 Les Acacias, Genève, Suisse</li>
                <li>Contact : support@infomaniak.com, +41 22 820 35 44</li>
            </ul>
        </p>
      </div>
      <div class="mentions-legales-post">
        <h2>3. Propriété Intellectuelle</h2>
        <p>
            Tous les contenus présents sur RLTeamMatch, incluant mais non limités aux
            textes, images, vidéos, logos, et éléments graphiques, sont protégés par la
            législation en vigueur sur la propriété intellectuelle et sont la propriété exclusive
            de l'éditeur ou de ses partenaires. Toute reproduction, distribution, modification,
            ou exploitation sans autorisation est strictement interdite.
            Rocket League est une marque déposée de Psyonix LLC, et le Site respecte les
            droits de propriété de cette marque sans revendiquer de droits de propriété
            dessus.
        </p>
      </div>
      <div class="mentions-legales-post">
        <h2>4. Données Personnelles</h2>
        <p>
            Conformément aux dispositions de la loi Informatique et Libertés et du Règlement
            Général sur la Protection des Données (RGPD), l'éditeur s'engage à garantir la
            confidentialité des informations personnelles fournies par les Utilisateurs du Site.
            Les données personnelles recueillies (nom, email, etc.) sont strictement destinées
            à l'utilisation interne du Site pour la gestion des comptes et l'amélioration des
            services. Conformément à la loi, chaque Utilisateur dispose d'un droit d'accès, de
            rectification, de suppression, et de limitation de ses données. Ces droits peuvent
            être exercés en contactant l'éditeur à l'adresse suivante :
            rlteammatch@gmail.com.
        </p>
      </div>
      <div class="mentions-legales-post">
        <h2>5. Cookies</h2>
        <p>
            RLTeamMatch utilise des cookies afin d'améliorer l'expérience de navigation des
            Utilisateurs et de collecter des données statistiques sur l'utilisation de
            RLTeamMatch. L'Utilisateur peut configurer son navigateur pour refuser les
            cookies, mais cela pourrait altérer le bon fonctionnement de certaines
            fonctionnalités de RLTeamMatch.
        </p>
      </div>
      <div class="mentions-legales-post">
        <h2>6. Limitation de Responsabilité</h2>
        <p>
            L'éditeur de RLTeamMatch met tout en oeuvre pour assurer l'exactitude des
            informations disponibles. Toutefois, il ne peut être tenu responsable d'éventuelles
            erreurs, omissions, ou indisponibilités des informations sur RLTeamMatch, ni des
            dommages directs ou indirects résultant de son utilisation. L'éditeur ne garantit
            pas non plus la compatibilité du Site avec les équipements ou logiciels
            spécifiques de l'Utilisateur.
        </p>
      </div>
      <div class="mentions-legales-post">
        <h2>7. Liens Externes</h2>
        <p>
            RLTeamMatch peut contenir des liens vers d'autres sites. L'éditeur décline toute
            responsabilité quant au contenu ou aux pratiques de confidentialité de ces sites
            externes, qui sont indépendants de RLTeamMatch.
        </p>
      </div>
      <div class="mentions-legales-post">
        <h2>8. Droit Applicable</h2>
        <p>
            Les présentes mentions légales sont soumises au droit français. Tout litige relatif à
            l'utilisation de RLTeamMatch relève de la compétence des tribunaux de Belfort,
            France.
        </p>
      </div>
      <div class="mentions-legales-post">
        <h2>Contact</h2>
        <p>
            Pour toute question ou réclamation concernant le Site, les Utilisateurs peuvent
            contacter l'équipe du RLTeamMatch à l'adresse suivante :
            rlteammatch@gmail.com.
        </p>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>