
<?php
$pane_name = 'footer' ;
$form_name = str_replace(' ', '_', $pane_name);

$plugin = array(
  // 'single' => TRUE,
  'title' => t(''.$pane_name.''),
  'description' => t(''.$pane_name.''),
  'category' => t('Home Page'),
  'edit form' => ''.$form_name.'_edit_form',
  'render callback' => ''.$form_name.'_render',
  // need to have default value
  'defaults' => array(
    'logo' => '',
    'email' => '',
    'poetic' => '',

  )
);
function footer_edit_form($form, &$form_state) {
  $conf = $form_state['conf'];

  $form['logo'] = array(
    '#title'  =>  t('logo'),
    '#type' => 'managed_file',
    '#upload_location' => 'public://usage/',
    '#description' => t('Upload Logo'),
    "#upload_validators"  => array("file_validate_extensions" => array("png gif jpg svg")),
    '#default_value' => !empty($conf['logo']) ? $conf['logo'] : null
  );
  $form['email'] = array(
    '#title'  =>  t('email'),
    '#type' => 'textfield',
    '#default_value' => isset($conf['email']) ? $conf['email'] : null,
  );
  $form['poetic'] = array(
    '#title'  =>  t('poetic logo'),
    '#type' => 'managed_file',
    '#upload_location' => 'public://usage/',
    '#description' => t('Upload poetic logo'),
    "#upload_validators"  => array("file_validate_extensions" => array("png gif jpg svg")),
    '#default_value' => !empty($conf['poetic']) ? $conf['poetic'] : null
  );

  ctools_form_include($form_state, 'content');
  // Include this plugin file as well, so that when the form is rebuilt, it
  // can successfully retrieve the settings form.
  ctools_form_include($form_state, 'footer', 'webflow', 'custom-panes/footer');

  return $form;

}

function footer_edit_form_submit($form, &$form_state) {
  foreach (array_keys($form_state['plugin']['defaults']) as $key) {
    if (isset($form_state['values'][$key])) {
      $form_state['conf'][$key] = $form_state['values'][$key];
    }
  }
}

function footer_render($subtype, $conf, $panel_args, $context = NULL) {
  $block = new stdClass();

  $logo = $conf['logo'];
  if($conf['logo']!= 0) {
    $file = file_load($conf['logo']);
    $file_url = file_create_url($file->uri);
    $logo = $file_url;
  }
  $email = $conf['email'];
  $poetic = $conf['poetic'];
  if($conf['poetic']!= 0) {
    $file = file_load($conf['poetic']);
    $file_url = file_create_url($file->uri);
    $poetic = $file_url;
  }

  $block->title = '';
  $block->content = theme('footer', array('logo' => $logo, 'email' => $email, 'poetic' => $poetic));
  return $block;
}

