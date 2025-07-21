<?php
/*
  Template Name: Contact Us
  Template Post Type: page
*/

  get_header();

  get_template_part(
    '/partials/page-banner',
    null,
    array(
      'image' => array(
        'src' => get_template_directory_uri() . "/assets/images/contact-us/banner.jpg",
        'alt' => "hands in the air"
      ),
      'heading' => "Get In Touch With Our Church",
      'headingClass' => 'lg:text-white',
      'subheadingClass' => 'text-primary'
    )
  );

  get_template_part('/partials/contact-us/section1');

  get_footer();
?>