om-header-top-bar
<nav class="om-nav-content-vertical">
  <div class="om-header-nav-logo">
    <a href="<?= site_url(); ?>">
      <img class="om-photo-oliv" src="<?= get_template_directory_uri();?>/assets/images/photo-moi.png">
      <span><?= bloginfo('name'); ?> </span>
    </a>


  </div>

        <?php
        wp_nav_menu([
            'menu'            => 'main-navigation',
            'theme_location'  => 'main-navigation',
            'container'       => '',
            'container_id'    => 'bs4navbar',
            'container_class' => '',
            'menu_id'         => false,
            'menu_class'      => '',
            'depth'           => 4,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
        ]);
        ?>
        <div class="om-recherche-nav"><?php get_search_form(true);?></div>
</nav>
