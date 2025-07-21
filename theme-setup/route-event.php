<?php

add_action('rest_api_init', 'eventRegistrationRoutes');

function eventRegistrationRoutes() {
  register_rest_route('/wp/v1/', 'event-registration', array(
    'methods' => 'POST',
    'callback' => 'createEventRegistration'
  ));
}

function createEventRegistration($data) {

  $event_id = intval($data['event_id']);
  $event_title = get_the_title($event_id);

  try {
    wp_insert_post(array(
      'post_type' => 'event_registration',
      'post_status' => 'pending',
      'post_title' => $event_title,
      'meta_input' => array(
        'event' => $data['event_id'],
        'full_name' => $data['full_name'],
        'email' => $data['email'],
      )
    ));

    wp_send_json_success([
      'message' => 'Event Registration submitted successfully',
    ]);
  } catch(e) {
    wp_send_json_error(['message' => 'Failed to register to an event']);
  }
}