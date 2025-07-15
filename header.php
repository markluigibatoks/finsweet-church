<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="sticky top-0">
      <div class="main-box bg-black">
        <div class="wrapper">
          <div class="py-3 lg:py-0 flex items-center">
            <div class="xl:pr-16 pr-8">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" />
            </div>

            <nav class="hidden lg:block pl-16 border-l-2 border-l-white/10">
                <ul class="flex gap-12">
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-tighter font-light opacity-90 text-white hover:underline <?php echo is_front_page() ? 'current-menu-item' : '' ?>" href="<?php echo site_url('/'); ?>">Home</a>
                    </li>
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-tighter font-light opacity-90 text-white hover:underline" href="#">About Us</a>
                    </li>
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-tighter font-light opacity-90 text-white hover:underline" href="#">Sermon</a>
                    </li>
                    <li>
                      <a class="leading-20 uppercase text-label-2 tracking-tighter font-light opacity-90 text-white hover:underline" href="#">Blog</a>
                    </li>
                </ul>
            </nav>
            
            <a href="#" class="button-nav ml-auto">Contact Us</a>
            <button type="button" id="drawer-toggle" class="lg:hidden cursor-pointer text-white text-2xl -mr-4 px-4 leading-8 hover:opacity-80"><i class=" fas fa-bars"></i></button>
          </div>
        </div>
      </div>

      <div id="drawer" class="absolute bg-black w-full text-white h-0 overflow-hidden transition-all ease-in-out duration-700">
        <div class="main-box">    
          <div class="wrapper">
            <!-- Navigation items here -->
          </div>
        </div>
      </div>
    </div>