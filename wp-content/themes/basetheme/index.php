<?php get_header(); ?>
<?php get_template_part( 'blog-banner' );  ?>
<?php while (have_posts()): the_post(); ?>
  <div id="mainContainer" class="posts">
    <div class="post_image">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="author">
      <div class="date">
        <time >
          <span class="day"><?php echo the_time('d'); ?></span>
          <span class="month"><?php echo the_time('M'); ?></span>
        </time>
      </div>
      <p>Publicado por: </p>
      <span><?php the_field('autor') ?></span>
    </div>
    <div class="post_cont">
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="post_button">Leer más</a>
    </div>
  </div>
<?php endwhile ?>
<?php get_footer(); ?>  