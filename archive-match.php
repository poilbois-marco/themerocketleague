<?php
get_header();

while (have_posts()) : the_post();
?>

<div class="match-container">
    <!-- Vignette et titre de l'article Match -->
    <div class="match-header">
        <?php the_post_thumbnail('large'); ?>
        <h1><?php the_title(); ?></h1>
    </div>

    <!-- Affichage des deux équipes -->
    <?php
    $equipes = get_field('equipes');
    if ($equipes) :
        foreach ($equipes as $equipe) :
    ?>
        <div class="equipe">
            <?php echo wp_get_attachment_image($equipe['vignette'], 'thumbnail'); ?>
            <h2><?php echo esc_html($equipe['nom']); ?></h2>
            <ul>
                <li><?php echo esc_html($equipe['membre_1']); ?></li>
                <li><?php echo esc_html($equipe['membre_2']); ?></li>
                <li><?php echo esc_html($equipe['membre_3']); ?></li>
            </ul>
        </div>
    <?php
        endforeach;
    endif;
    ?>

    <!-- Card Résultats -->
    <div class="card-resultats">
        <h3>Résultats :</h3>
        <div class="temps">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/horloge.png" alt="Temps">
            <?php echo get_the_term_list(get_the_ID(), 'temps', '', ', '); ?>
        </div>
        <?php
        if ($equipes) :
            foreach ($equipes as $equipe) :
        ?>
            <div class="equipe-resultat">
                <span><?php echo esc_html($equipe['nom']); ?></span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/balon.png" alt="Buts">
                <?php echo get_the_term_list($equipe['equipe_id'], 'buts', '', ', '); ?>
            </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</div>

<?php
endwhile;

get_footer();
?>