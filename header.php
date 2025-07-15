<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="sticky top-0">
      <div class="z-10 main-box bg-black">
        <div class="wrapper">
          <div class="py-3 lg:py-0 flex items-center">
            <div class="xl:pr-16 pr-6">
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
            <button id="drawer-toggle" class="relative ml-2 -mr-2 p-2 cursor-pointer">
              <div class="relative w-6 h-4 group">
                <span class="absolute left-0 top-0 w-6 h-1 bg-white rounded transition-all duration-300 ease-in-out origin-center group-[.open]:top-1/2 group-[.open]:left-1/2 group-[.open]:-translate-x-1/2 group-[.open]:-translate-y-1/2 group-[.open]:rotate-45"></span>

                <span class="absolute left-0 top-2 w-6 h-1 bg-white rounded transition-all duration-300 ease-in-out opacity-100 group-[.open]:opacity-0"></span>

                <span class="absolute left-0 top-4 w-6 h-1 bg-white rounded transition-all duration-300 ease-in-out origin-center group-[.open]:top-1/2 group-[.open]:left-1/2 group-[.open]:-translate-x-1/2 group-[.open]:-translate-y-1/2 group-[.open]:rotate-[-45deg]"></span>
              </div>
            </button>
          </div>
        </div>
      </div>

      <div id="drawer" class="absolute top-0 bg-black w-full text-white h-0 overflow-hidden transition-all ease-in-out duration-700">
        <div class="main-box overflow-auto h-full">    
          <div class="wrapper">
            <!-- Navigation items here -->
          </div>
        </div>
      </div>
    </div>