<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
	<div id="mainContainer">
		<div id="contactPage">
			<?php the_content(); ?>
		</div>
    <div id="cardContainer">
      <!-- Card Publish-->
      <div class="post-module">
        <!-- Thumbnail-->
        <div class="thumbnail">
          <img src="<?php bloginfo('template_url'); ?>/assets//images/publish.jpg"/>
        </div>
        <!-- Post Content-->
        <div class="post-content">
          <div class="category">Artículo</div>
          <h1 class="title">Para publicar un artículo</h1>
          <h2 class="sub_title">Entra en la sección "artículo" y agregalo.</h2>
          <p class="card-description">
            -> Recuerda agregar una imagen por separado en formato png ó jpeg.<br>
            Si no posee una imágen, háganoslo saber y conseguiremos una por usted.<br>
            No se aceptarán:<br>
            ->Trabajos que no posean estructura.<br>
            Su trabajo será verificado y publicado en cuanto se finalice su revisión.</p>
          </div>
        </div>

        <!-- Job Publish-->
        <div class="post-module">
          <!-- Thumbnail-->
          <div class="thumbnail">
            <img src="<?php bloginfo('template_url'); ?>/assets//images/job.jpg"/>
          </div>
          <!-- Post Content-->
          <div class="post-content">
            <div class="category">Oferta de trabajo</div>
            <h1 class="title">Para publicar una oferta</h1>
            <h2 class="sub_title">Entra en la sección "Puesto" y agregalo.</h2>
            <p class="card-description">
              Llena los campos solicitados y si gustas agregar una descripción extra, hazlo en la parte de mensaje.<br>
              No se aceptarán:<br>
              ->Puestos que no posean estructura o el formato solicitado.<br>
              Su oferta será verificada y publicada en cuanto se finalice su revisión.</p>
            </div>
          </div>
        </div>

        <!-- Tabs -->
        <h2 class="demoHeaders">Contacto</h2>
        <div id="tabs" class="ui-tabs ui-corner-all ui-widget ui-widget-content">
          <ul >
            <li><a href="#tabs-2">Artículo</a></li>
            <li><a href="#tabs-3">Puesto</a></li>
            <li><a href="#tabs-1">Opinión</a></li>
          </ul>
          <div id="tabs-1">
            <?php echo do_shortcode('[contact-form-7 id="163" title="Contacto"]'); ?>
          </div>
          <div id="tabs-2">
            <?php echo do_shortcode('[contact-form-7 id="162" title="Articulo"]'); ?>
          </div>
          <div id="tabs-3">
            <?php echo do_shortcode('[contact-form-7 id="161" title="Trabajo"]'); ?>
          </div>
        </div>
      </div>
    <?php endwhile ?>
    <?php get_footer(); ?>