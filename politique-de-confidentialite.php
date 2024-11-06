<?php
/*
Template Name: Politique de Confidentialité
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="politique-de-confidentialite">
      <h1>Politique de Confidentialité</h1>
      <p>
        La présente Politique de Confidentialité décrit les pratiques de RLTeamMatch
        concernant la collecte, l'utilisation et la protection des données personnelles des
        utilisateurs (ci-après « Utilisateur(s) »). En utilisant RLTeamMatch, l'Utilisateur
        accepte les pratiques décrites dans cette Politique de Confidentialité.
      </p>
      <div class="politique-de-confidentialite-post">
        <h2>1. Collecte des Données Personnelles</h2>
        <p>
            RLTeamMatch peut collecter les données personnelles des Utilisateurs de
            différentes manières :
            <ul>
                <li>Lors de l'inscription : Nom, prénom, adresse email, pseudonyme.</li>
                <li>Lors de la navigation sur RLTeamMatch : Cookies, adresse IP, données de navigation.</li>
                <li>Lors de la participation aux événements ou tournois e-sport : Informations de profil, statistiques de jeu, préférences d'événements.</li>
            </ul>
        </p>
      </div>
      <div class="politique-de-confidentialite-post">
        <h2>2. Utilisation des Données Collectées</h2>
        <p>
            Les données personnelles collectées sont utilisées dans les buts suivants :
            <ul>
                <li>Gestion des comptes Utilisateurs : Assurer un accès sécurisé et personnalisé aux services RLTeamMatch.</li>
                <li>Amélioration des services : Analyser les interactions et comportements pour adapter le contenu et optimiser l'expérience utilisateur.</li>
                <li>Communication : Envoyer des notifications, actualités, et informations sur les tournois et événements.</li>
                <li>Analyses statistiques : Mener des études pour comprendre les préférences des Utilisateurs et améliorer le contenu.</li>
            </ul>
        </p>
      </div>
      <div class="politique-de-confidentialite-post">
        <h2>3. Cookies</h2>
        <p>
            Le Site utilise des cookies pour améliorer l'expérience de navigation des
            Utilisateurs. Les cookies sont de petits fichiers stockés sur le terminal de
            l'Utilisateur qui permettent d'enregistrer ses préférences et d'analyser l'utilisation
            de RLTeamMatch. L'Utilisateur peut configurer son navigateur pour refuser les
            cookies. Toutefois, cela pourrait limiter certaines fonctionnalités de RLTeamMatch.
        </p>
      </div>
      <div class="politique-de-confidentialite-post">
        <h2>4. Conservation des Données</h2>
        <p>
            Les données personnelles des Utilisateurs sont conservées pour une durée
            nécessaire à la réalisation des objectifs précités et en conformité avec les
            obligations légales. Une fois cette durée écoulée, les données seront supprimées
            ou anonymisées.
        </p>
      </div>
      <div class="politique-de-confidentialite-post">
        <h2>5. Partage des Données</h2>
        <p>
            Les données personnelles des Utilisateurs ne seront pas vendues, louées, ou
            échangées avec des tiers. Elles peuvent cependant être partagées avec des
            prestataires de services techniques ou partenaires dans le cadre des
            événements, uniquement si nécessaire et sous réserve d'un engagement de
            confidentialité.
        </p>
      </div>
      <div class="politique-de-confidentialite-post">
        <h2>6. Sécurité des Données</h2>
        <p>
            RLTeamMatch met en oeuvre des mesures de sécurité techniques et organisationnelles
            pour protéger les données personnelles des Utilisateurs contre toute perte,
            utilisation abusive, ou accès non autorisé. Toutefois, RLTeamMatch ne peut
            garantir une sécurité absolue des données transmises sur internet.
        </p>
      </div>
      <div class="politique-de-confidentialite-post">
        <h2>7. Droits des Utilisateurs</h2>
        <p>
            Conformément aux lois sur la protection des données, l'Utilisateur dispose des droits suivants :
            <ul>
                <li>Droit d'accès : Obtenir une copie des données personnelles détenues.</li>
                <li>Droit de rectification : Modifier les données inexactes ou incomplètes.</li>
                <li>Droit de suppression : Demander la suppression des données personnelles.</li>
                <li>Droit de limitation : Limiter le traitement des données dans certains cas.</li>
                <li>Droit d'opposition : S'opposer au traitement de ses données pour des raisons légitimes.</li>
                <li>Droit à la portabilité : Recevoir les données fournies dans un format structuré.</li>
            </ul>
        </p>
        <p>
            Pour exercer ces droits, l'Utilisateur peut contacter RLTeamMatch à l'adresse
            suivante : rlteammatch@gmail.com.
        </p>
      </div>
      <div class="politique-de-confidentialite-post">
        <h2>8. Modifications de la Poitique de Confidentialité</h2>
        <p>
            RLTeamMatch se réserve le droit de modifier la présente Politique de
            Confidentialité à tout moment. Toute modification sera publiée sur cette page, et
            l'Utilisateur est invité à la consulter régulièrement pour rester informé des
            pratiques de collecte et de traitement des données.
        </p>
      </div>
      <div class="politique-de-confidentialite-post">
        <h2>Contact</h2>
        <p>
            Pour toute question concernant cette Politique de Confidentialité ou le traitement
            des données personnelles, l'Utilisateur peut contacter l'équipe RLTeamMatch à
            l'adresse suivante : rlteammatch@gmail.com.
        </p>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>