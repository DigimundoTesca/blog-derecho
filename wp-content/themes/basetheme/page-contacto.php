<?php get_header(); ?>
<?php get_template_part( 'banner' );  ?>
<?php while (have_posts()): the_post(); ?>
	<div id="mainContainer">
		<div id="contactPage">
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile ?>
<?php get_footer(); ?>