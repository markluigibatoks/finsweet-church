<?php
  $today = date('Ymd');

  $upcoming_event = new WP_Query([
    'post_type' => 'event',
    'posts_per_page' => 1,
    'meta_key' => 'date',
    'orderBy' => 'meta_value_num',
    'order' => 'ASC',
    'meta_query' => [
      [
        'key' => 'date',
        'value' => $today,
        'compare' => '>=',
        'type' => 'NUMERIC'
      ]
    ]
  ])
?>

<div class="main-box lg:py-32 py-10 bg-white">
  <div class="wrapper">
    <div class="w-full text-center">
        <span class="text-label-2 uppercase">Upcoming Sermons</span>
        <h2 class="lg:mt-4 lg:text-h2 md:text-h4 text-h5 uppercase">Join Us And Become Part <span class="block">Of Something Great</span></h2>
    </div>

      <div class="lg:mt-16 mt-10 flex">

        <?php
          if($upcoming_event->have_posts()) {
            while($upcoming_event->have_posts()) {
              $upcoming_event->the_post();
        ?>
        <div class="relative bg-light-orange md:py-15 md:px-22 px-3 pb-5 pt-10 sm:py-10 sm:px-12 lg:max-w-[435px] w-full text-center lg:text-left">
          <div class="absolute md:top-8 md:right-8 top-2 right-2 text-right">
            <span class="text-h5"><?php echo date('d', strtotime(get_field('date'))) ?></span>
            <span class="text-label-2 uppercase block -mt-2"><?php echo date('F', strtotime(get_field('date'))) ?></span>
          </div>

          <span class="text-gradient uppercase text-cap-3">Upcoming Event</span>
          <h2 class="text-h5 my-4 uppercase"><?php the_title(); ?></h2>
          <p class="opacity-78"><?php echo wp_trim_words(get_the_excerpt(), 12);?></p>

          <div class="max-w-max mx-auto lg:mx-0">
            <div class="mt-8 flex items-start gap-4">
              <div class="flex items-center justify-center">
                <?php echo inline_svg('/assets/images/clock.svg'); ?>
              </div>

              <div class="text-left">
                <span><?php echo date('F d Y', strtotime(get_field('date'))) ?></span>
              </div>
            </div>
            
            <div class="mt-4 flex items-start gap-4">
              <div class="flex items-center justify-center">
                <?php echo inline_svg('/assets/images/pin.svg'); ?>
              </div>

              <address class="not-italic text-left">
                <?php the_field('address')?>
              </address>
            </div>
          </div>

          <a href="<?php the_permalink(); ?>" class="button-secondary block mt-8 mx-auto lg:mx-0">Register</a>
        </div>
        <?php
            }
            wp_reset_postdata();
          }
        ?>
      
        <div class="hidden md:block md:aspect-square lg:aspect-33/20">
          <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri();?>/assets/images/front-page/bottom2-img1.jpg" alt="an angel and fallen angel"/>
        </div>
      </div>
  </div>
</div>