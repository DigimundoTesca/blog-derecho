<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
  <div id="mainContainer">
    <?php the_content(); ?>
    <div id="mainProjects">
      <?php 
      $args = array(
        'post_type' => 'proyectosblog',
        'posts_per_page' => 1000,
        'orderby' => 'title',
        'order' => 'ASC'
        );
      $proye = new WP_Query($args);
      while ($proye->have_posts()): $proye->the_post();
      ?>
      <div class="mainProjectContainer">
        <div class="img"><?php the_post_thumbnail(); ?>
        </div>
        <div>
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>
<?php endwhile ?>
<?php get_footer(); ?>