<?php

$plugin = array(
	// 'single' => TRUE,
  'title' => t('Maestro Header Band'),
  'description' => t('Header Band'),
  'category' => t('Home Page'),
  'edit form' => 'maestro_edit_form',
  'render callback' => 'maestro_render',
  // need to have default value
  'defaults' => array(
    'title' => '',
    'description' => ''
  )
);
function maestro_edit_form($form, &$form_state) {
	$conf = $form_state['conf'];
	$form['title'] = array(
		'#title'	=>	t('Title'),
		'#type'	=> 'textfield',
    '#default_value' => $conf['title'],
		'#required'	=> TRUE,
	);
	$form['description'] = array(
		'#title'	=>	t('Title'),
		'#type'	=> 'text_format',
    '#default_value' => $conf['description']['value'],
		'#format' => 'full_html'
	);
	return $form;
}

function maestro_edit_form_submit($form, &$form_state) {
	foreach (array_keys($form_state['plugin']['defaults']) as $key) {
	  if (isset($form_state['values'][$key])) {
	    $form_state['conf'][$key] = $form_state['values'][$key];
	  }
	}
}

function maestro_render($subtype, $conf, $panel_args, $context = NULL) {
	$pm_page = page_manager_get_current_page();
	dpm($pm_page);
	$block = new stdClass();
	$title = $conf['title'];
	$description = $conf['description']['value'];
	$block->title = '';
  $block->content = theme('maestro', array('title' => $title, 'description' => $description));
  // $block->admin_links = array(
  //   'maestro_header' => array(
  //     'title' => t('Edit Maestro Header Band'),
  //     'href' => '/panels/ajax/editor/edit-pane/panel_context:page-home::page_home__panel::::/16',
  //     'query' => array('reload' => 'true', 'ctools-content-type-links-panes-from-page' => 'true'),
  //     'attributes' => array('class' => array('ctools-use-modal')),
  //   ),
  // );
  return $block;
}
// panels/ajax/editor/edit-pane/panel_context:page-home::page_home__panel::::/16

