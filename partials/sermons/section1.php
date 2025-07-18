<div class="main-box lg:py-32 py-10 bg-white">
  <div class="wrapper">
    <div class="w-full text-center">
        <span class="text-label-2 uppercase">Upcoming Sermons</span>
        <h2 class="lg:mt-4 lg:text-h2 md:text-h4 text-h5 uppercase">Join Us And Become Part <span class="block">Of Something Great</span></h2>
    </div>

      <div class="lg:mt-16 mt-10 flex">
        <div class="relative bg-light-orange md:py-15 md:px-22 px-3 pb-5 pt-10 sm:py-10 sm:px-12 lg:max-w-[435px] w-full text-center lg:text-left">
          <div class="absolute md:top-8 md:right-8 top-2 right-2 text-right">
            <span class="text-h5">20</span>
            <span class="text-label-2 uppercase block -mt-2">July</span>
          </div>

          <span class="text-gradient uppercase text-cap-3">Upcoming Event</span>
          <h2 class="text-h5 my-4 uppercase">Watch And Listen <span class="md:block">To Our Sermons</span></h2>
          <p class="opacity-78">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

          <div class="max-w-max mx-auto lg:mx-0">
            <div class="mt-8 flex items-start gap-4">
              <div class="flex items-center justify-center">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/images/clock.svg') ?>
              </div>

              <div class="text-left">
                <span>Friday 23:39 IST</span>
                <span class="block">Saturday 11:20 ISD</span>
              </div>
            </div>
            
            <div class="mt-4 flex items-start gap-4">
              <div class="flex items-center justify-center">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/images/pin.svg') ?>
              </div>

              <address class="not-italic text-left">
                <span>No 233 Main St. New York,</span>
                <span class="block">United States</span>
              </address>
            </div>
          </div>

          <a href="#" class="button-secondary block mt-8 mx-auto lg:mx-0">Register</a>
        </div>
      
        <div class="hidden md:block md:aspect-square lg:aspect-33/20">
          <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/bottom2-img1.jpg" alt="an angel and fallen angel"/>
        </div>
      </div>

      <a href="#" class="hover:underline block ml-auto max-w-max mt-12 text-label-1">View all Sermons <i class="fas fa-arrow-right"></i></a>
  </div>
</div>