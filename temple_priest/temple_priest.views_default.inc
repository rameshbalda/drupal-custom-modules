<?php
/**
 * @file
 * temple_priest.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function temple_priest_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'priest_schedular';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Priest Schedular';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Priest Schedular';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'fullcalendar';
  /* Relationship: Entity Reference: Referenced Entity */
  $handler->display->display_options['relationships']['field_user_name_target_id']['id'] = 'field_user_name_target_id';
  $handler->display->display_options['relationships']['field_user_name_target_id']['table'] = 'field_data_field_user_name';
  $handler->display->display_options['relationships']['field_user_name_target_id']['field'] = 'field_user_name_target_id';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Timings */
  $handler->display->display_options['fields']['field_timings']['id'] = 'field_timings';
  $handler->display->display_options['fields']['field_timings']['table'] = 'field_data_field_timings';
  $handler->display->display_options['fields']['field_timings']['field'] = 'field_timings';
  $handler->display->display_options['fields']['field_timings']['label'] = '';
  $handler->display->display_options['fields']['field_timings']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_timings']['settings'] = array(
    'format_type' => 'long',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_remaining_days' => 0,
    'show_repeat_rule' => 'show',
  );
  $handler->display->display_options['fields']['field_timings']['delta_offset'] = '0';
  /* Field: Content: User Name */
  $handler->display->display_options['fields']['field_user_name']['id'] = 'field_user_name';
  $handler->display->display_options['fields']['field_user_name']['table'] = 'field_data_field_user_name';
  $handler->display->display_options['fields']['field_user_name']['field'] = 'field_user_name';
  $handler->display->display_options['fields']['field_user_name']['label'] = '';
  $handler->display->display_options['fields']['field_user_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_user_name']['settings'] = array(
    'link' => 1,
  );
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'priest_schedule' => 'priest_schedule',
  );

  /* Display: Priest Schedular */
  $handler = $view->new_display('page', 'Priest Schedular', 'priest_schedular');
  $handler->display->display_options['path'] = 'priest-scheduler';
  $export['priest_schedular'] = $view;

  return $export;
}
