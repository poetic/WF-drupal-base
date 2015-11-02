
<?php

$plugin = array(
  // 'single' => TRUE,
  'title' => t('Social'),
  'description' => t('Social'),
  'category' => t('Home Page'),
  'edit form' => 'social_edit_form',
  'render callback' => 'social_render',
  // need to have default value
  'defaults' => array(
    'title' => '',
    'socials' => array(array(
      'image' => '',
      'link' => ''
    ))
  )
);
function social_edit_form($form, &$form_state) {
  $conf = $form_state['conf'];

  $form['title'] = array(
    '#title'  =>  t('title'),
    '#type' => 'textfield',
    '#default_value' => isset($conf['title']) ? $conf['title'] : null,
  );
  // dpm($conf);
  $form['socials'] = array(
    '#type' => 'fieldset',
    '#tree' => TRUE,
    '#title' => t('Social Media'),
    '#prefix' => '<div id="usage-wrapper" style="border-bottom: solid 1px #ccc;">',
    '#suffix' => '</div>',
  );

  if(isset($form_state['usage_count'])) {
    $form_state['usage_count'] = $form_state['usage_count'];
  }elseif(!in_array(NULL, array_values($conf['socials'][0]))) {
    $form_state['usage_count'] = sizeof($conf['socials']) -1;
  }else {
    $form_state['usage_count'] = 1;
  }


  //dpm($form_state);
  for ($i = 0; $i < $form_state['usage_count']; $i++) {
    $form['socials'][$i]['image'] = array(
      '#title'  =>  t('Social Media Image'),
      '#type' => 'managed_file',
      '#upload_location' => 'public://usage/',
      '#description' => t('Social Media Image'),
      "#upload_validators"  => array("file_validate_extensions" => array("png gif jpg svg")),
      '#default_value' => !empty($conf['socials'][$i]['image']) ? $conf['socials'][$i]['image'] : null
    );
    $form['socials'][$i]['link'] = array(
      '#title'  =>  t('Social Media Link'),
      '#type' => 'textfield',
      '#default_value' => isset($conf['socials'][$i]['link']) ? $conf['socials'][$i]['link'] : null,
    );

  }

  $form['socials']['add_one'] = array(
    '#type' => 'submit',
    '#value' => t('Add'),
    '#href' => '',
    '#submit' => array('social_add_one'),
    '#ajax' => array(
      'callback' => 'social_add_one_callback',
      'wrapper' => 'usage-wrapper',
    ),
  );

  ctools_form_include($form_state, 'content');
  // Include this plugin file as well, so that when the form is rebuilt, it
  // can successfully retrieve the settings form.
  ctools_form_include($form_state, 'social', 'webflow', 'custom-panes/social');
  return $form;

}

function social_add_one($form, &$form_state) {
  $form_state['usage_count']++;
  $form_state['rebuild'] = TRUE;
}

function social_add_one_callback($form, &$form_state) {
  return $form['socials'];
}

function social_edit_form_submit($form, &$form_state) {
  for($i = 0; $i < sizeof($form_state['values']['socials'])-1; $i++) {
    if($form_state['values']['socials'][$i]['image'] !=0) {
      $file = file_load($form_state['values']['socials'][$i]['image']);
      $file->status = FILE_STATUS_PERMANENT;
      file_save($file);
      file_usage_add($file, 'webflow', 'image', $i);
      variable_set('usage_index_'.$i, $file->fid);
    }elseif($form_state['values']['socials'][$i]['image'] ==0) {
      unset($form_state['values']['socials'][$i]);
    }
  }
  foreach (array_keys($form_state['plugin']['defaults']) as $key) {
    if (isset($form_state['values'][$key])) {
      $form_state['conf'][$key] = $form_state['values'][$key];
    }
  }
}


function social_render($subtype, $conf, $panel_args, $context = NULL) {

  drupal_add_js(drupal_get_path('module','webflow').'/custom-panes/js/instafeed.min.js');
    drupal_add_js(drupal_get_path('module','webflow').'/custom-panes/js/main.js');
  // dpm($conf);
  array_pop($conf['socials']);
  $socials = array();
  $block = new stdClass();
  //dpm($conf);
  for($i = 0; $i < sizeof($conf['socials']); $i++) {
    if($conf['socials'][$i]['image'] != 0) {
      $file = file_load($conf['socials'][$i]['image']);
      $file_url = file_create_url($file->uri);
      $image = $file_url;
      $socials[$i]['image'] = $image;
    }
    $socials[$i]['link'] = $conf['socials'][$i]['link'];
  }
  $title = $conf['title'];

  $block->title = '';
  $block->content = theme('social', array('title' => $title, 'socials' => $socials));
  return $block;
}

