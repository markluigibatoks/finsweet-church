<?php
/*
  Template Name: Sermons
  Template Post Type: page
*/

  get_header();

  get_template_part(
    '/partials/page-banner',
    null,
    array(
      'image' => array(
        'src' => get_template_directory_uri() . "/assets/images/sermons/banner.jpg",
        'alt' => "a big cross with mountains on the background"
      ),
      'heading' => "Take Part In Our Sermon"
    )
  );

  get_template_part('/partials/sermons/section1');
  get_template_part('/partials/sermons/section2');

  get_footer();
?>