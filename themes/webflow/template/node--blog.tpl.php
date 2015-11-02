<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
//dpm($submitted);
 // dpm($node);
  //dpm($created);
 // print render($content['body']);
 // print render($content['field_image']);
  hide($content['field_taxonomy']);

  // $file = file_load($content['field_image'][0]['#item']['fid']);
  // $file_url = file_create_url($file->uri);
  //print '<img class="" src="'.$file_url.'"';
 // date ($created [$timestamp = time() ] );
$ts = $created;
$date = new DateTime("@$ts");
$topics = $content['field_taxonomy']['#items'];
$full_topics_link = '';
foreach($topics as $topic) {
  $term = $topic['taxonomy_term'];
  $url = str_replace(" ", "-", strtolower($term->name));
  $full_topics_link .= '<a class="link blog-tag-link" href="/blog/'.$url.'">'.$term->name.'</a>';
}
//dpm($content);
 $node_author = user_load($node->uid);
 //dpm($node_author->name);
?>
<?php
  // $did = 8;
// $mini_panel = module_invoke('panels_mini', 'block_view', 'blog_header');    
// print $mini_panel['content'];
?>
       
<div class="w-section blog-article">
    <div class="w-container blog-article-container">
      <div class="date-tag-author">
        <div class="date-text"><?php print $date->format('F j, Y'); ?></div><?php print $full_topics_link; ?>
      <!--   <div class="date-text"> <?php //print render($node_author->name); ?> </div> -->
      </div>
      <h1 class="h1 secondary"><?php print $title; ?></h1>
       <div class="body blog-content">
        <?php print render($content['body']); ?>
      </div>
      <?php
      $block = module_invoke('sharethis', 'block_view', 'sharethis_block');
      //dpm($block);
      print render($block['content']);
      ?>
      <img class="divider-line" src="/files/images/blogdivider.svg">
    </div>
  </div>
<?php
  $latest_blog = ctools_content_render('latest-blog', 'latest-blog', NULL, NULL, NULL, NULL);
//  dpm($latest_blog);
  print ($latest_blog->content);
?>


