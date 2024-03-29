<?php

// function wf_preprocess_html(&$variables) {
//   drupal_add_js('https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js', array('type' => 'external'));
//   drupal_add_js('WebFont.load({google: {families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]}});', 'inline');
// }

function wf_preprocess_node(&$vars) {
  $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'];
  $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
  
}
function wf_preprocess_image(&$variables) {
  if(isset($variables['style_name'])) {
    if($variables['style_name'] == 'blog-teaser') {
      $variables['attributes']['class'][] = "blog-article-thumbnail";
      //$variables['attributes']['class'][] = "with-shadow";
    }
  }
  //var_dump($variables);
}
function wf_pager($variables) {
  $tags = $variables['tags'];
  $element = $variables['element'];
  $parameters = $variables['parameters'];
  $quantity = $variables['quantity'];
  global $pager_page_array, $pager_total;

  // Calculate various markers within this pager piece:
  // Middle is used to "center" pages around the current page.
  $pager_middle = ceil($quantity / 2);
  // current is the page we are currently paged to
  $pager_current = $pager_page_array[$element] + 1;
  // first is the first page listed by this pager piece (re quantity)
  $pager_first = $pager_current - $pager_middle + 1;
  // last is the last page listed by this pager piece (re quantity)
  $pager_last = $pager_current + $quantity - $pager_middle;
  // max is the maximum page number
  $pager_max = $pager_total[$element];
  // End of marker calculations.

  // Prepare for generation loop.
  $i = $pager_first;
  if ($pager_last > $pager_max) {
    // Adjust "center" if at end of query.
    $i = $i + ($pager_max - $pager_last);
    $pager_last = $pager_max;
  }
  if ($i <= 0) {
    // Adjust "center" if at start of query.
    $pager_last = $pager_last + (1 - $i);
    $i = 1;
  }
  // End of generation loop preparation.

  //$li_first = theme('pager_first', array('text' => (isset($tags[0]) ? $tags[0] : t('« first')), 'element' => $element, 'parameters' => $parameters));
  $li_previous = theme('pager_previous', array('text' => ( t('<<')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
  $li_next = theme('pager_next', array('text' => (t('>>')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
  //$li_last = theme('pager_last', array('text' => (isset($tags[4]) ? $tags[4] : t('last »')), 'element' => $element, 'parameters' => $parameters));

  if ($pager_total[$element] > 1) {
    // if ($li_first) {
    //   $items[] = array(
    //     'class' => array('pager-first'),
    //     'data' => $li_first,
    //   );
    // }
    if ($li_previous) {
      $items[] = array(
        'class' => array('page pagination'),
        'data' => $li_previous,
      );
    }

    // When there is more than one page, create the pager list.
    if ($i != $pager_max) {
      if ($i > 1) {
        $items[] = array(
          'class' => array('page pagination'),
          'data' => '…',
        );
      }
      // Now generate the actual pager piece.
      for (; $i <= $pager_last && $i <= $pager_max; $i++) {
        if ($i < $pager_current) {
          $items[] = array(
            'class' => array('page pagination'),
            'data' => theme('pager_previous', array('text' => $i, 'element' => $element, 'interval' => ($pager_current - $i), 'parameters' => $parameters)),
          );
        }
        if ($i == $pager_current) {
          $items[] = array(
            'class' => array('page pagination'),
            'data' => $i,
          );
        }
        if ($i > $pager_current) {
          $items[] = array(
            'class' => array('page pagination'),
            'data' => theme('pager_next', array('text' => $i, 'element' => $element, 'interval' => ($i - $pager_current), 'parameters' => $parameters)),
          );
        }
      }
      if ($i < $pager_max) {
        $items[] = array(
          'class' => array('page pagination'),
          'data' => '…',
        );
      }
    }
    // End generation.
    if ($li_next) {
      $items[] = array(
        'class' => array('page pagination'),
        'data' => $li_next,
      );
    }
    // if ($li_last) {
    //   $items[] = array(
    //     'class' => array('pager-last'),
    //     'data' => $li_last,
    //   );
    // }
  
    return '<h2 class="element-invisible">' . t('Pages') . '</h2>' . theme('item_list', array(
      'items' => $items,
      'attributes' => array('class' => array('w-list-unstyled display-inline')),
    ));
  }
}
