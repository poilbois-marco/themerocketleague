<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="post">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
  <?php else : ?>
    <p class="nothing">
      Il n'y a pas de Post à afficher !
    </p>
<?php endif; ?>