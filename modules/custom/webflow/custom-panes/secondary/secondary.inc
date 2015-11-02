
<?php

$plugin = array(
  // 'single' => TRUE,
  'title' => t('Secondary Section'),
  'description' => t('Secondary Section'),
  'category' => t('Home Page'),
  'edit form' => 'secondary_edit_form',
  'render callback' => 'secondary_render',
  // need to have default value
  'defaults' => array(
    'activities' => array(array(
      'image' => NULL,
      'link' => NULL,
      'collection' => array(
        'text' => NULL,
      )
    ))
  )
);
function secondary_edit_form($form, &$form_state) {
  $conf = $form_state['conf'];

  $form['activities'] = array(
    '#type' => 'fieldset',
    '#tree' => TRUE,
    '#title' => t('Sliders'),
    '#prefix' => '<div id="activities-wrapper">',
    '#suffix' => '</div>',
  );

 if(isset($form_state['num_slide'])) {
    $form_state['num_slide'] = $form_state['num_slide'];
  }elseif( isset($conf['activities']) && (sizeof($conf['activities']) - 1 > 0)  ) {
    $form_state['num_slide'] = sizeof($conf['activities'])-1;
  }else {
    $form_state['num_slide'] = 1;
  }


  // if(isset($form_state['num_slide'])) {
  //   $form_state['num_slide'] = $form_state['num_slide'];
  // }elseif(!in_array(NULL, array_values($conf['activities'][0]))) {
  //   $form_state['num_slide'] = sizeof($conf['activities'])-1;
  // }else {
  //   $form_state['num_slide'] = 1;
  // }


  for($i = 0; $i < $form_state['num_slide']; $i++) {

if(isset($form_state['count_slides'][$i]['collection_count'])) {
      $form_state['count_slides'][$i]['collection_count'] = $form_state['count_slides'][$i]['collection_count'];
    }elseif(isset($conf['activities'][$i]) && !in_array(NULL, $conf['activities'][$i]['collection'])) {
      $form_state['count_slides'][$i]['collection_count'] = sizeof($conf['activities'][$i]['collection'])-1;
    }else {
      $form_state['count_slides'][$i]['collection_count'] = 1;
    } 

    
    // if(isset($form_state['count_slides'][$i]['collection_count'])) {
    //   $form_state['count_slides'][$i]['collection_count'] = $form_state['count_slides'][$i]['collection_count'];

    // }elseif(!in_array(NULL, array_values($conf['activities'][$i]['collection']) != 0)) {
    //   $form_state['count_slides'][$i]['collection_count'] = sizeof($conf['activities'][$i]['collection'])-1;
    // }else {
    //   $form_state['count_slides'][$i]['collection_count'] = 1;
    // }

    $form['activities'][$i]['image'] = array(
     '#title'  =>  t('Icon'),
      '#type' => 'managed_file',
      '#upload_location' => 'public://usage/',
      '#description' => t('Icon'),
      "#upload_validators"  => array("file_validate_extensions" => array("png gif jpg svg")),
      //'#default_value' => !empty($conf['activities'][$i]['image']) ? $conf['activities'][$i]['image'] : null
      '#default_value' => !empty($conf['activities'][$i]['image']) ? $conf['activities'][$i]['image'] : null
    );
     $form['activities'][$i]['link'] = array(
      '#title'  =>  t('Title'),
      '#type' => 'textfield',
      '#default_value' => isset($conf['activities'][$i]['link']) ? $conf['activities'][$i]['link'] : null,
    );
    $form['activities'][$i]['collection'] = array(
      '#title'  =>  t('Collection'),
      '#type' => 'fieldset',
      '#tree' => TRUE,
      '#prefix' => '<div id="collection-wrapper-'.$i.'">',
      '#suffix' => '</div>',
    );

    for($j = 0; $j < $form_state['count_slides'][$i]['collection_count']; $j++) {
      //dpm($conf);
      $form['activities'][$i]['collection'][$j]['text'] = array(
        '#title'  =>  t('Collection Text'),
        '#type' => 'textfield',
       // empty($conf['delta']) ? 0 : $conf['delta']
    //   '#default_value' => empty($conf['activities'][$i]['collection'][$j]['text']) ? : null,
       '#default_value' => isset($conf['activities'][$i]['collection'][$j]['text']) ? $conf['activities'][$i]['collection'][$j]['text'] : null,
      );
    }
    $form['activities'][$i]['collection']['collection_add_one'] = array(
       '#type' => 'submit',
       '#default_value' => t('Add Collection'),
       '#href' => '',
       '#name' => 'Add-Collection-'.$i,
       '#submit' => array('secondary_collection_add_more_add_one'),
       '#ajax' => array(
         'callback' => 'secondary_collection_add_more_callback',
         'wrapper' => 'collection-wrapper-'.$i,
      ),
     );
  }

  $form['activities']['add_one'] = array(
    '#type' => 'submit',
    '#default_value' => t('Add'),
    '#name' => 'Add',
    '#submit' => array('secondary_add_more_add_one'),
    '#ajax' => array(
      'callback' => 'secondary_add_more_callback',
      'wrapper' => 'activities-wrapper',
   ),
  );
  // The two function calls below are necessary if we want to use a media
  // element type, because it causes ajax requests, which in turn call
  // drupal_form_rebuild(), and without the below includes, Drupal will
  // not be able to rebuild the form.

  // Include the CTools content type plugin file, because it provides
  // the ctools_content_configure_form_defaults() function, which is needed
  // when rebuilding the form, because of an ajax action, like selecting
  // a media element.
  ctools_form_include($form_state, 'content');
  // Include this plugin file as well, so that when the form is rebuilt, it
  // can successfully retrieve the settings form.
  ctools_form_include($form_state, 'secondary', 'webflow', 'custom-panes/secondary');

  $form['#ctools_content_type_links'] = TRUE;

  return $form;
}

function secondary_collection_add_more_add_one($form, &$form_state) {
  $index = explode('-', $form_state['triggering_element']['#ajax']['wrapper']);
  
  $form_state['count_slides'][$index[2]]['collection_count']++;
  $form_state['rebuild'] = TRUE;
}
function secondary_collection_add_more_callback($form, &$form_state) {
 $index = explode('-', $form_state['triggering_element']['#ajax']['wrapper']);
  
  // $commands[] = ajax_command_replace('#collection-wrapper-'.$index[2], render($form['sliders'][$index[2]]['collection']));
  
  // return array('#type' => 'ajax', '#commands' => $commands);

  return $form['activities'][$index[2]]['collection']; 
}

function secondary_add_more_add_one($form, &$form_state) {
  $form_state['num_slide']++;
  $form_state['rebuild'] = TRUE;
}
function secondary_add_more_callback($form, &$form_state) {
  return $form['activities'];
}

function secondary_edit_form_submit($form, &$form_state) {
  //dpm($conf);
  for($i = 0; $i < sizeof($form_state['values']['activities']); $i++) {
    if($form_state['values']['activities'][$i]['image'] !=0) {
      $file = file_load($form_state['values']['activities'][$i]['image']);
      $file->status = FILE_STATUS_PERMANENT;
      file_save($file);
      file_usage_add($file, 'webflow', 'image', $i);
      variable_set('usage_index_'.$i, $file->fid);
    }elseif($form_state['values']['activities'][$i]['image'] ==0) {
      unset($form_state['values']['activities'][$i]);
    }
  }
  foreach (array_keys($form_state['plugin']['defaults']) as $key) {
    if (isset($form_state['values'][$key])) {
      $form_state['conf'][$key] = $form_state['values'][$key];
    }
  }
}


function secondary_render($subtype, $conf, $panel_args, $context = NULL) {
  // dpm($conf);
  array_pop($conf['activities']);

//dpm($conf['activities']);
  $activities = array();
  //$collections = array();
  $block = new stdClass();
  //dpm($conf);
  for($i = 0; $i < sizeof($conf['activities']); $i++) {
    if(isset($conf['activities'][$i]['image'])) {
      $file = file_load($conf['activities'][$i]['image']);
      $file_url = file_create_url($file->uri);
      $conf['activities'][$i]['image'] = $file_url;
      $image = $file_url;
      $activities[$i]['image'] = $image;
    }
    $activities[$i]['link'] = $conf['activities'][$i]['link'];
    array_pop($conf['activities'][$i]['collection']);
    $activities[$i]['collection'] = $conf['activities'][$i]['collection'];
    
  //  $conf['collection'][$j]['text'] = $file_url;
    // $collections = $conf['collection'][$i]['text'];
  }

  $contextual_links = ctools_content_type_links_build_page_contextual_links($subtype, $conf, $panel_args, $context);

  $block->title = '';
  $block->content = theme('secondary', array('activities' => $activities,'contextual_links' => $contextual_links));
  return $block;
}

