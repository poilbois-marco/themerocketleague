<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    
    <div class="match-title">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <?php the_title(); ?>
    </div>
    <article class="match-grid" >
      <div class="match-card">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <?php the_field ("nom_equipe"); ?>
      </div>
      <div class="content" >
        <?php the_content (); ?>
      </div>
    </article>

  <?php endwhile ; ?>
<?php endif; ?>

<?php the_terms( $post->ID, 'temps', 'Temps : ' ); ?><br>
<?php the_terms( $post->ID, 'buts', 'Buts : ' ); ?><br>

<?php get_footer (); ?>