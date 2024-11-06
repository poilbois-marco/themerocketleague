<?php
/*
Template Name: Page Connexion
*/

get_header();

// Traitement du formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = sanitize_user($_POST['login']);
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    $creds = array(
        'user_login'    => $login,
        'user_password' => $password,
        'remember'      => $remember
    );

    $user = wp_signon($creds, false);

    if (is_wp_error($user)) {
        $error = $user->get_error_message();
    } else {
        wp_redirect(home_url()); // Redirection après connexion réussie
        exit;
    }
}
?>

<div class="connexion">
    <h1><?php the_title(); ?></h1>

    <?php if (isset($error)) : ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <p>
            <label for="login">Pseudo ou adresse e-mail :</label>
            <input type="text" name="login" id="login" required>
        </p>
        <p>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
        </p>
        <p>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Se souvenir de moi</label>
        </p>
        <p>
            <input type="submit" value="Se connecter">
        </p>
    </form>

    <p>
        <a href="<?php echo wp_lostpassword_url(); ?>">Mot de passe oublié ?</a>
    </p>
    <p>
        Pas encore de compte ? <a href="<?php echo home_url('/inscription'); ?>">S'inscrire</a>
    </p>
</div>

<?php get_footer(); ?>