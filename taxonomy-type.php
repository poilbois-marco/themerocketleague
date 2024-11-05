<?php get_header(); ?>

<div class="matchs" >
  <p class="heading" >
    Type : <?php single_term_title(); ?>
  </p>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      
      <article class="match" >
        <?php the_terms( $post->ID, 'temps', 'Temps : ' );?><br>
        <?php the_terms( $post->ID, 'buts', 'Buts: ' ); ?> <br>
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <h1 class="title" >
          <a href="<?php the_permalink(); ?>" >
            <?php the_title(); ?>
          </a>
        </h1>
        <div class="content" >
          <?php the_content(); ?>
        </div>
      </article>

    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>