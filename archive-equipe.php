<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    
    <div class="equipe-title">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <?php the_title(); ?>
    </div>
    <article class="equipes-grid">
      <div class="equipe-content">
        <?php the_content(); ?>
      </div>
    </article>
    
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>