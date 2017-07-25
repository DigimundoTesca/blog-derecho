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
          <h2 class="sub_title">Envia un archivo comprimido en formato "ZIP" conteniendo:</h2>
          <p class="card-description">
            Documento a publicar en formato .doc o .docx de Microsoft Office Word con el siguiente formato:<br>
            ->Fuente: Georgia, tamaño 12 <br>
            ->Interlineado: 1,5 <br>
            ->Por lo menos una imagen contenida en el documento y por separado en formato png.<br>
            Si no posee una imagem, háganoslo saber y conseguiremos una por usted.<br>
            Curriculum e información de contacto.
            No se aceptarán:<br>
            ->Trabajos que no posean estructura o el formato solicitado.<br>
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
            <h2 class="sub_title">Envia un archivo comprimido en formato "ZIP" conteniendo:</h2>
            <p class="card-description">
              Documento en formato .doc o .docx de Microsoft Office Word con el siguiente contenido:<br>
              -> Nombre de puesto.<br>
              -> Descripción completa del puesto.<br>
              -> Nombre completo de la empresa.<br>
              -> Página web de la empresa.<br>
              -> Nombre completo de persona que postula el puesto..<br>
              -> Curriculum e información de contacto.<br>
              No se aceptarán:<br>
              ->Trabajos que no posean estructura o el formato solicitado.<br>
              Su trabajo será verificado y publicado en cuanto se finalice su revisión.</p>
            </div>
          </div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="122" title="Formulario de contacto"]'); ?>
      </div>
    <?php endwhile ?>
    <?php get_footer(); ?>