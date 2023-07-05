<?php
/**
 * @file
 * Administration user interface for the module.
 */

/**
 * Implements hook_form().
 */
function ding_koege_signup_admin_settings_form($form, &$form_state) {
  $info_text = file_get_contents(drupal_get_path('module', 'ding_koege_signup') . '/ding_koege_signup_text.html');

  $form['ding_koege_signup_content']= array(
    '#type' => 'textarea',
    '#title' => t('Content'),
    '#default_value' => variable_get('ding_koege_signup_content', $info_text),
    '#rows' => 50,
  );

  return system_settings_form($form);
}
