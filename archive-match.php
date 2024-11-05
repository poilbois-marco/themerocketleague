<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    
    <div class="match-title">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <?php the_title(); ?>
    </div>
    <article class="match-grid" >
      <ul>
        <li class="match-card">
          <?php the_post_thumbnail( 'thumbnail' ); ?>
          <?php the_field ("temps"); ?>
        </li>
        <li class="match-card">
          <?php the_post_thumbnail( 'thumbnail' ); ?>
          <?php the_field ("buts" ); ?>
        </li>
      </ul>
      <div class="content" >
        <?php the_content (); ?>
      </div>
    </article>

  <?php endwhile ; ?>
<?php endif; ?>

<?php get_footer (); ?>