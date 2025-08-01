<div class="main-box p-0 w-full h-full relative">
  <img class="object-cover w-full h-full" src="<?php echo $args['image']['src']; ?>" alt="<?php echo $args['image']['alt'] ?>"/>

  <div class="main-box py-10 bg-black text-white lg:text-black lg:bg-transparent lg:absolute lg:left-0 lg:top-0 lg:h-full">
      <div class="wrapper lg:flex lg:items-center lg:h-full">
          <div class="lg:text-left text-center">
            <span class="uppercase font-bold <?php echo isset($args['subheadingClass']) ? $args['subheadingClass'] : 'lg:text-black' ?> "><?php echo get_the_title(); ?></span>
            <h2 class="lg:mt-4 uppercase align-top lg:text-h2 md:text-h4 text-h5 <?php echo isset($args['headingClass']) ? $args['headingClass'] : 'lg:text-black' ?> "><?php echo $args['heading']; ?></h2>
          </div>
      </div>
  </div>
</div>

