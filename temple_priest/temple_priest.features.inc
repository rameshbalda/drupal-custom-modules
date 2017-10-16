<?php
/**
 * @file
 * temple_priest.features.inc
 */

/**
 * Implements hook_views_api().
 */
function temple_priest_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function temple_priest_node_info() {
  $items = array(
    'priest_schedule' => array(
      'name' => t('priest schedule'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
