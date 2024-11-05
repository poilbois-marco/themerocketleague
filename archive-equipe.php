<?php get_header(); ?>

<div class="equipes">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <article class="equipe">
    <div class="title-equipe">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <?php the_title(); ?>
    </div>
    <div class="content-equipe">
      <?php the_content(); ?>
    </div>
  </article>

  <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>