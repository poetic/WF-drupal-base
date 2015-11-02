<?php

$plugin = array(
	// 'single' => TRUE,
  'title' => t('taxonomy'),
  'description' => t('taxonomy'),
  'category' => t('Home Page'),
  'render callback' => 'taxonomy_render',
);

function taxonomy_render() {
	$block = new stdClass();
	$term_options_list = array();      
if ($range_vocab = taxonomy_vocabulary_machine_name_load('all_topics')) {
  $efq = new EntityFieldQuery();
  $result = $efq->entityCondition('entity_type', 'taxonomy_term')
    ->propertyCondition('vid', $range_vocab->vid)
    ->propertyOrderBy('weight')
    ->execute();
  if (!empty($result['taxonomy_term'])) {
    // The results contain an array of entity stubs keyed by {term}.tid.
    // The stub only has {term}.tid and vocabulary_machine_name.
    $first_term_stub = current($result['taxonomy_term']);
    $first_term_tid = key($result['taxonomy_term']);

    // To load all terms.
    $terms = taxonomy_term_load_multiple(array_keys($result['taxonomy_term']));
    // To generate an options list.
    foreach ($terms as $term) {
      // To hook into i18n and everything else, use entity_label().
      $term_options_list[$term->tid] = entity_label('taxonomy_term', $term);
      // Single language, no term label alters.
      $term_options_list[$term->tid] = $term->name;      
    }
  }
}




$topics = taxonomy_get_tree(1);



// IMPORTANT. This was for a select list that expects raw values.
// If ANYTHING else is required, escape the term names, either here
// or where the name is used.
$safe_term_options_list = array_map('check_plain', $term_options_list);
	//dpm($safe_term_options_list);
	$teasers = array();
	$teasers = $safe_term_options_list;
	//dpm($teasers);
	$block->title = '';
	

  // $block->content = theme('taxonomy', array('teasers' => $teasers));
  $block->content = theme('taxonomy', array('topics' => $topics));
 // $block->content = theme('lastest-blog', array('teaser' => $teaser));
	return $block;
}
