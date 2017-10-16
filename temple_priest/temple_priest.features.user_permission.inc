<?php
/**
 * @file
 * temple_priest.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function temple_priest_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create priest_schedule content'.
  $permissions['create priest_schedule content'] = array(
    'name' => 'create priest_schedule content',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any priest_schedule content'.
  $permissions['delete any priest_schedule content'] = array(
    'name' => 'delete any priest_schedule content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'delete own priest_schedule content'.
  $permissions['delete own priest_schedule content'] = array(
    'name' => 'delete own priest_schedule content',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any priest_schedule content'.
  $permissions['edit any priest_schedule content'] = array(
    'name' => 'edit any priest_schedule content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'edit own priest_schedule content'.
  $permissions['edit own priest_schedule content'] = array(
    'name' => 'edit own priest_schedule content',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'node',
  );

  return $permissions;
}
