<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="z-10 sticky top-0">
      <div class="z-10 main-box bg-black">
        <div class="wrapper">
          <div class="py-3 lg:py-0 flex items-center">
            <a href="<?php echo site_url('/')?>">
              <div class="xl:pr-16 pr-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo" />
              </div>
            </a>

            <nav class="hidden lg:block pl-16 border-l-2 border-l-white/10">
                <ul class="flex gap-12">
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-normal font-light opacity-90 text-white hover:underline <?php echo is_front_page() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Home</a>
                    </li>
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-normal font-light opacity-90 text-white hover:underline <?php echo is_page('about-us') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                    </li>
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-normal font-light opacity-90 text-white hover:underline <?php echo is_page('sermons') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/sermons'); ?>">Sermons</a>
                    </li>
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-normal font-light opacity-90 text-white hover:underline <?php echo is_home('blog') ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/blog'); ?>">Blog</a>
                    </li>
                </ul>
            </nav>
            
            <a href="<?php echo site_url('/contact-us'); ?>" class="button-nav ml-auto">Contact Us</a>
            <?php get_template_part('/partials/drawer-toggle') ?>
          </div>
        </div>
      </div>

      <?php get_template_part('/partials/drawer') ?>
    </header>