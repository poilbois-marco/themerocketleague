<?php get_header(); ?>

<div class="main single">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post">
        <div class="post-content">
          <?php the_content(); ?>
        </div>
        <div class="post-comments">
          <?php comments_template(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
