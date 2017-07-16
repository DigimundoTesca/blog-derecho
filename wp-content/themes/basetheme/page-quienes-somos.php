<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
  <div id="mainContainer">
    <?php the_content(); ?>
    <div id="projects">
      <p class="mobiletext">
        ¡Da click en las imagenes!
      </p>
      <div class="projectContainer">
        <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
          <div class="img"><img src="<?php the_field('imagen-proyecto_1') ?>" alt="Imagen de Proyecto"></div>
          <div class="info">
            <h3><?php the_field('titulo_proyecto_1') ?></h3>
            <p><?php the_field('descripcion-proyecto_1') ?></p>
          </div></a></div>
        </div>
        <div class="projectContainer">
          <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
            <div class="img"><img src="<?php the_field('imagen-proyecto_2') ?>" alt="Imagen de Proyecto"></div>
            <div class="info">
              <h3><?php the_field('titulo_proyecto_2') ?></h3>
              <p><?php the_field('descripcion-proyecto_2') ?></p>
            </div></a></div>
          </div>
          <div class="projectContainer">
            <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
              <div class="img"><img src="<?php the_field('imagen-proyecto_3') ?>" alt="Imagen de Proyecto"></div>
              <div class="info">
                <h3><?php the_field('titulo_proyecto_3') ?></h3>
                <p><?php the_field('descripcion-proyecto_3') ?></p>
              </div></a></div>
            </div>
          </div>
          <div class="projectButton">
            <a href="<?php echo get_bloginfo( 'url' ).'/proyectos'?>">Conoce nuestros proyectos</a>
          </div>


        </div>
      <?php endwhile ?>

      <?php get_footer(); ?>