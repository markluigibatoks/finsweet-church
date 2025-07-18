<?php
/*
  Template Name: About Us
  Template Post Type: page
*/

  get_header();

  get_template_part(
    '/partials/page-banner',
    null,
    array(
      'image' => array(
        'src' => get_template_directory_uri() . "/assets/images/about-us/banner.jpg",
        'alt' => "a place full of trees"
      ),
      'heading' => "Serving the world around us"
    )
  );

  get_template_part('/partials/about-us/section1');

  get_footer();
?>