<?php
/*
Template Name: Page Inscription
*/

get_header();

// Traitement du formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pseudo = sanitize_user($_POST['pseudo']);
    $nom = sanitize_text_field($_POST['nom']);
    $prenom = sanitize_text_field($_POST['prenom']);
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérification des champs
    $errors = array();

    if (empty($pseudo)) $errors[] = "Le pseudo est requis.";
    if (empty($nom)) $errors[] = "Le nom est requis.";
    if (empty($prenom)) $errors[] = "Le prénom est requis.";
    if (empty($email)) $errors[] = "L'adresse e-mail est requise.";
    if (empty($password)) $errors[] = "Le mot de passe est requis.";
    if ($password !== $confirm_password) $errors[] = "Les mots de passe ne correspondent pas.";

    // Si pas d'erreurs, créer l'utilisateur
    if (empty($errors)) {
        $user_id = wp_create_user($pseudo, $password, $email);
        if (!is_wp_error($user_id)) {
            // Mise à jour des informations supplémentaires
            wp_update_user(array(
                'ID' => $user_id,
                'first_name' => $prenom,
                'last_name' => $nom
            ));
            
            echo "<p class='success'>Inscription réussie ! Vous pouvez maintenant vous connecter.</p>";
        } else {
            $errors[] = $user_id->get_error_message();
        }
    }
}
?>

<div class="inscription">
              
    <h1><?php the_title(); ?></h1>

    <div class="entry-content">
        <?php
        // Affichage des erreurs
        if (!empty($errors)) {
            echo '<ul class="errors">';
            foreach ($errors as $error) {
                echo '<li>' . esc_html($error) . '</li>';
            }
            echo '</ul>';
        }
        ?>
        <form method="post" action="">
            <p>
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" required>
            </p>
            <p>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </p>
            <p>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
            </p>
            <p>
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email">
            </p>
            <p>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </p>
            <p>
                <label for="confirm_password">Confirmer le mot de passe :</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </p>
            <p>
                <input type="submit" value="S'inscrire">
            </p>
        </form>
    </div>

</div>

<?php get_footer(); ?>