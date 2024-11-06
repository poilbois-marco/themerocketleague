<?php
get_header();

// Vérifier si l'utilisateur est connecté
if (!is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
}

// Récupérer l'utilisateur connecté
$current_user = wp_get_current_user();
$profile_picture = get_user_meta($current_user->ID, 'profile_picture', true);
$team_name = get_user_meta($current_user->ID, 'team_name', true);
?>

<div class="profile-container">

    <div class="profile-card">
        <div class="profile-picture">
            <?php
            if ($profile_picture) {
                echo '<img src="' . esc_url($profile_picture) . '" alt="Photo de profil">';
            } else {
                echo get_avatar($current_user->ID, 150);
            }
            ?>
        </div>
        <h2><?php echo esc_html($current_user->display_name); ?></h2>
        
        <div class="profile-stats">
            <div class="stat-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/parties-jouees.png" alt="Parties jouées">
                <?php 
                    $parties_jouees = get_user_meta($current_user->ID, 'parties_jouees', true);
                    if (!empty($parties_jouees)) {
                        echo esc_html($parties_jouees);
                    } else {
                        echo '0';
                    }
                ?>
            </div>
            <div class="stat-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/victoires.png" alt="Victoires">
                <?php 
                    $victoires = get_user_meta($current_user->ID, 'victoires', true);
                    if (!empty($victoires)) {
                        echo esc_html($victoires);
                    } else {
                        echo '0';
                    }
                ?>
            </div>
        </div>

        <div class="user-team">
            <h2>Votre équipe :</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image-exemple-equipe.png" alt="Image de l'équipe">
            <?php 
            if ($team_name) {
                echo '<p>' . esc_html($team_name) . '</p>';
            } else {
                echo '<p>Aucune équipe assignée</p>';
            }
            ?>
        </div>

        <div class="profile-actions">
            <a href="<?php echo wp_lostpassword_url(); ?>" class="button-password">Changer de mot de passe</a>
            <a href="<?php echo wp_logout_url(home_url()); ?>" class="button-logout">Se déconnecter</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>