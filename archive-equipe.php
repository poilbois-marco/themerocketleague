<?php
global $wp_query;
echo '<pre>';
print_r($wp_query);
echo '</pre>';
?>

<?php get_header(); ?>

<section class="equipe">
  <div class="equipe-grid">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
  
        <div class="equipe-title">
          <img src="/assets/equipe.png" alt="Equipe" class="group-icon">
          <h1>Équipes</h1>
        </div>
  
        <article class="equipe-card">
          <?php the_post_thumbnail('medium'); ?>
  
          <h2 class="equipe-name"><?php the_title(); ?></h2>
  
          <?php
            $membres_ids = get_field('membre_1');
            if ($membres_ids) :
                foreach ($membres_ids as $user_id) :
                    $user = get_user_by('ID', $user_id);
                    if ($user) :
                        echo "<p>" . esc_html($user->user_login) . "</p>";
                    endif;
                endforeach;
            endif;
          ?>
          <?php
            $membres_ids = get_field('membre_2');
            if ($membres_ids) :
                foreach ($membres_ids as $user_id) :
                    $user = get_user_by('ID', $user_id);
                    if ($user) :
                        echo "<p>" . esc_html($user->user_login) . "</p>";
                    endif;
                endforeach;
            endif;
          ?>
          <?php
            $membres_ids = get_field('membre_3');
            if ($membres_ids) :
                foreach ($membres_ids as $user_id) :
                    $user = get_user_by('ID', $user_id);
                    if ($user) :
                        echo "<p>" . esc_html($user->user_login) . "</p>";
                    endif;
                endforeach;
            endif;
          ?>
        </article>
  
        <?php the_posts_pagination(); ?>
  
        <?php else : ?>
          <p>Aucune équipe trouvée.</p>
  
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php the_terms( $post->ID, 'membre_1', 'Membre 1 : ' ); ?><br>
<?php the_terms( $post->ID, 'membre_2', 'Membre 2 : ' ); ?><br>
<?php the_terms( $post->ID, 'membre_3', 'Membre 3 : ' ); ?><br>

<?php get_footer(); ?>