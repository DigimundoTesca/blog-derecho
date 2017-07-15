<?php
/*
Template Name: banner
*/
?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<header id="banner" class="home" style="background-image: url('<?php echo $thumb['0'];?>')">
  <h1><?php the_title(); ?></h1>
  <div class="separator">
    <span></span>
  </div>
  <h4>Investigación jurídica y actualidad</h4>
  <div id="bannerMenu">
    <a class="logoLink" href="<?php esc_url(home_url('/')); ?>">
      <span class="logo">
        <?php bloginfo(name); ?>
      </span>
    </a>
    <nav class="mainMenu"> <!-- Burger menu -->
      <div id="nav-icon1">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
    <nav id="mobileMenu" class="active"> <!-- Mobile menu -->
      <ul class="links"> 
        <?php 
          $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'menu-links'
            );
          wp_nav_menu($args);
        ?>
      </ul>
    </nav>
    <nav id="largeMenu"> <!-- Mobile menu -->
      <?php 
        $args = array(
          'theme_location' => 'header-menu',
          'container' => 'nav',
          'container_class' => 'menu-links'
          );
        wp_nav_menu($args);
      ?>
    </nav>
  </div>
</header>