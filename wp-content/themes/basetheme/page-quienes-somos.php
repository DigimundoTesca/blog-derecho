<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
  <div id="mainContainer">
    <?php the_content(); ?>
    <div id="projects">
      <p class="mobiletext">
        ¡Toca las imagenes!
      </p>
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
      <div class="projectContainer truncate">
        <div class="ih-item square effect6 from_top_and_bottom">
          <a href="#">
            <div class="img"><img src="<?php the_post_thumbnail(); ?>" alt="Imagen de Proyecto">
            </div>
            <div class="info">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
            </div>
          </a>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div class="projectButton">
      <a href="<?php echo get_bloginfo( 'url' ).'/proyectos'?>">Conoce nuestros proyectos</a>
    </div>


  </div>
<?php endwhile ?>

<?php get_footer(); ?>