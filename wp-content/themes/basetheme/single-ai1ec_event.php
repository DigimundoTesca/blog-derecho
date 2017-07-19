<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
  <div id="mainContainer">
    <h3><?php the_title(); ?></h3>
    <div class="single_post_image">
      <?php the_post_thumbnail(); ?>
    </div>
    <?php the_content(); ?>
  </div>
<?php endwhile ?>
<?php get_footer(); ?>