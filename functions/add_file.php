<?php

function add_file()
{
  $directory_uri = get_template_directory_uri();

  wp_enqueue_style('main-styles', $directory_uri . "/assets/index-4lka0P9J.css");
}
add_action('wp_enqueue_scripts', 'add_file');
