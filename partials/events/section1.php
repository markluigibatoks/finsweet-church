<div class="main-box lg:py-32 py-10">
  <div class="wrapper">
    <?php
      if(have_posts()) {
        while(have_posts()) {
          the_post();
    ?>
    <div class="flex flex-col lg:flex-row items-start justify-between gap-5">
      <div class="mx-auto lg:mx-0">
        <div class="mb-8 max-w-max mx-auto w-full">
          <img class="object-cover w-full h-full !m-0" src="<?php echo get_the_post_thumbnail_url(null, 'featured-image'); ?>" alt="featured image"/>
        </div>
        <span class="text-gradient text-cap-3 uppercase">Upcoming Event</span>
        <h2 class="lg:text-h2 md:text-h4 text-h5 uppercase my-0 lg:my-4"><?php the_title(); ?></h2>

        <div class="prose max-w-7xl mx-auto">
          <?php the_content(); ?>
        </div>
      </div>
      

      <form class="lg:max-w-[400px] xl:max-w-[522px] w-full bg-white h-auto p-10">
        <h3 class="md:text-h4 text-h5">Register Now</h3>
        <div class="flex gap-4 lg:mt-8 mt-5">
          <div class="mt-8 flex flex-col md:flex-row lg:flex-col xl:flex-row items-start gap-4">
            <div class="flex items-start gap-4">
              <div class="flex items-center justify-center">
                <?php echo inline_svg('/assets/images/pin.svg'); ?>
              </div>

              <address class="not-italic text-left">
                No 233 Main St. New York, United States
              </address>
            </div>

            <div class="flex items-start gap-4">
              <div class="flex items-center justify-center">
                <?php echo inline_svg('/assets/images/clock.svg'); ?>
              </div>

              <div class="text-left whitespace-nowrap">
                <span>13 May, 2018</span>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-8 flex flex-col gap-8">
            <label>
              <span class="text-cap-3">Name</span>
              <input type="name" class="w-full p-2 border-b-grey border-b-1" placeholder="John Doe"/>
            </label>

            <label>
              <span class="text-cap-3">Email</span>
              <input type="email" class="w-full p-2 border-b-grey border-b-1" placeholder="abc@email.com"/>
            </label>

            <button type="button" class="button-nav max-w-max mx-auto lg:mx-0 cursor-pointer">Register Now</button>
        </div>

      </form>


    </div>

    <?php
        }
      }
    ?>
  </div>
</div>