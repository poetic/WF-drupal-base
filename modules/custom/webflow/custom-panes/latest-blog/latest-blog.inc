<?php

$plugin = array(
	// 'single' => TRUE,
  'title' => t('Latest Blogs'),
  'description' => t('Latest Blogs'),
  'category' => t('Home Page'),
  'render callback' => 'latest_blogs_render',
);

function latest_blogs_render() {
	$block = new stdClass();
	$rendered_teaser = array();
	$query = new EntityFieldQuery();

	$query->entityCondition('entity_type', 'node')
				->entityCondition('bundle', 'blog')
				->propertyCondition('status', NODE_PUBLISHED)
				->propertyOrderBy('created', 'DESC')
				->range(0,2);
	$result = $query->execute();
	if(isset($result['node'])) {
		$nodes = node_load_multiple(array_keys($result['node']));
	}
	foreach($nodes as $node) {
		$rendered_teaser[] = node_view($node, 'teaser');
	}
	//dpm($rendered_teaser);
	$teaser = $rendered_teaser;
	$block->title = '';
	$block->content = theme('latest-blog', array('teaser' => $teaser));
 // $block->content = theme('lastest-blog', array('teaser' => $teaser));
	return $block;
}
