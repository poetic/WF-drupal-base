<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'ft6ALBjLtv';
$options['db_name'] = 'makercom';
$options['db_user'] = 'makercom';
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.39',
      'description' => 'This platform is running Drupal 7.39',
    ),
  ),
  'profiles' => 
  array (
    'rune' => 
    array (
      'name' => 'rune',
      'filename' => './profiles/rune/rune.profile',
      'info' => 
      array (
        'name' => 'Rune',
        'description' => 'Rune distribution',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'contextual',
          1 => 'file',
          2 => 'image',
          3 => 'list',
          4 => 'menu',
          5 => 'number',
          6 => 'options',
          7 => 'path',
          8 => 'search',
          9 => 'shortcut',
          10 => 'taxonomy',
          11 => 'admin_menu',
          12 => 'admin_views',
          13 => 'adminimal_admin_menu',
          14 => 'ckeditor',
          15 => 'coffee',
          16 => 'content_menu',
          17 => 'ctools',
          18 => 'diff',
          19 => 'email_registration',
          20 => 'entity',
          21 => 'entity_token',
          22 => 'entityreference',
          23 => 'expire',
          24 => 'features',
          25 => 'features_override',
          26 => 'filefield_paths',
          27 => 'jquery_update',
          28 => 'module_filter',
          29 => 'pathauto',
          30 => 'strongarm',
          31 => 'token',
          32 => 'uuid',
          33 => 'uuid_features',
          34 => 'uuid_panel_node',
          35 => 'views_bulk_operations',
          36 => 'webform',
          37 => 'webform_uuid',
          38 => 'rune_admin_theme',
          39 => 'rune_ckeditor',
          40 => 'rune_coffee',
          41 => 'rune_environments',
          42 => 'rune_fences',
          43 => 'rune_image_toolkit',
          44 => 'rune_jquery_update',
          45 => 'rune_performance_settings',
          46 => 'rune_permissions',
          47 => 'rune_text_formats',
          48 => 'rune_panels',
        ),
        'version' => NULL,
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
      ),
      'version' => '7.39',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'actions_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions (VBO)',
        'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
        'package' => 'Administration',
        'core' => '7.x',
        'version' => '7.x-3.3',
        'project' => 'views_bulk_operations',
        'datestamp' => '1435764542',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'addressfield' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/addressfield/addressfield.module',
      'name' => 'addressfield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Address Field',
        'description' => 'Manage a flexible address field, implementing the xNAL standard.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'addressfield.migrate.inc',
          1 => 'views/addressfield_views_handler_field_country.inc',
          2 => 'views/addressfield_views_handler_filter_country.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'addressfield',
        'datestamp' => '1429819382',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'addressfield_staticmap' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/addressfield_staticmap/addressfield_staticmap.module',
      'name' => 'addressfield_staticmap',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Address Field Static Map',
        'description' => 'Provides Google Static Map based on entity address fields.',
        'configure' => 'admin/config/system/addressfield_staticmap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'addressfield',
          1 => 'block',
        ),
        'version' => '7.x-1.0',
        'project' => 'addressfield_staticmap',
        'datestamp' => '1358979011',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'adminimal_admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/adminimal_admin_menu/adminimal_admin_menu.module',
      'name' => 'adminimal_admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu Adminimal Theme',
        'description' => 'Clean and minimal theme for the administration menu module.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-1.5',
        'project' => 'adminimal_admin_menu',
        'datestamp' => '1390792706',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7305',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/administration/admin_menu',
        'dependencies' => 
        array (
          0 => 'system (>7.10)',
        ),
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'admin_views' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/admin_views/admin_views.module',
      'name' => 'admin_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '12',
      'info' => 
      array (
        'name' => 'Administration views',
        'description' => 'Replaces all system object management pages in Drupal core with real views.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_bulk_operations (>=7.x-3.2)',
        ),
        'files' => 
        array (
          0 => 'plugins/views_plugin_display_system.inc',
          1 => 'plugins/views_plugin_access_menu.inc',
          2 => 'tests/admin_views.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'admin_views',
        'datestamp' => '1436376676',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'advagg' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/advagg/advagg.module',
      'name' => 'advagg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced CSS/JS Aggregation',
        'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/advagg.test',
        ),
        'configure' => 'admin/config/development/performance/advagg',
        'version' => '7.x-2.10',
        'project' => 'advagg',
        'datestamp' => '1432163583',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'advagg_bundler' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/advagg/advagg_bundler/advagg_bundler.module',
      'name' => 'advagg_bundler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Bundler',
        'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/bundler',
        'version' => '7.x-2.10',
        'project' => 'advagg',
        'datestamp' => '1432163583',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'advagg_css_cdn' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/advagg/advagg_css_cdn/advagg_css_cdn.module',
      'name' => 'advagg_css_cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CDN CSS',
        'description' => 'Use a shared CDN for CSS libraries, Google Libraries API currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '7.x-2.10',
        'project' => 'advagg',
        'datestamp' => '1432163583',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'advagg_css_compress' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/advagg/advagg_css_compress/advagg_css_compress.module',
      'name' => 'advagg_css_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Compress CSS',
        'description' => 'Compress CSS with a 3rd party compressor, YUI currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/css-compress',
        'version' => '7.x-2.10',
        'project' => 'advagg',
        'datestamp' => '1432163583',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'advagg_js_cdn' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/advagg/advagg_js_cdn/advagg_js_cdn.module',
      'name' => 'advagg_js_cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CDN Javascript',
        'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'version' => '7.x-2.10',
        'project' => 'advagg',
        'datestamp' => '1432163583',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'advagg_js_compress' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/advagg/advagg_js_compress/advagg_js_compress.module',
      'name' => 'advagg_js_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Compress Javascript',
        'description' => 'Compress Javascript with a 3rd party compressor; JSMin+, JSMin c ext, JShrink, & JSqueeze currently.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/js-compress',
        'version' => '7.x-2.10',
        'project' => 'advagg',
        'datestamp' => '1432163583',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'advagg_mod' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/advagg/advagg_mod/advagg_mod.module',
      'name' => 'advagg_mod',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg Modifier',
        'description' => 'Allows one to alter the CSS and JS array.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/mod',
        'version' => '7.x-2.10',
        'project' => 'advagg',
        'datestamp' => '1432163583',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'advagg_validator' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/advagg/advagg_validator/advagg_validator.module',
      'name' => 'advagg_validator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AdvAgg CSS/JS Validator',
        'description' => 'Validate the CSS & JS files used in Aggregation for syntax errors.',
        'package' => 'Advanced CSS/JS Aggregation',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advagg',
        ),
        'configure' => 'admin/config/development/performance/advagg/validator',
        'version' => '7.x-2.10',
        'project' => 'advagg',
        'datestamp' => '1432163583',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'auto_entitylabel' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/auto_entitylabel/auto_entitylabel.module',
      'name' => 'auto_entitylabel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Automatic Entity Labels',
        'description' => 'Allows hiding of entity label fields and automatic label creation.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.3',
        'project' => 'auto_entitylabel',
        'datestamp' => '1419756181',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'auto_nodetitle' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/auto_nodetitle/auto_nodetitle.module',
      'name' => 'auto_nodetitle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Automatic Nodetitles',
        'description' => 'Allows hiding of the content title field and automatic title creation.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'auto_nodetitle.install',
          1 => 'auto_nodetitle.module',
          2 => 'auto_nodetitle.js',
        ),
        'version' => '7.x-1.0',
        'project' => 'auto_nodetitle',
        'datestamp' => '1307449915',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'better_exposed_filters' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/better_exposed_filters/better_exposed_filters.module',
      'name' => 'better_exposed_filters',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Better Exposed Filters',
        'description' => 'Allow the use of checkboxes or radio buttons for exposed Views filters',
        'core' => '7.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'better_exposed_filters_exposed_form_plugin.inc',
          1 => 'tests/better_exposed_filters.test',
        ),
        'version' => '7.x-3.2',
        'project' => 'better_exposed_filters',
        'datestamp' => '1428077889',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.2',
    ),
    'better_formats' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/better_formats/better_formats.module',
      'name' => 'better_formats',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Better Formats',
        'description' => 'Enhances the core input format system by managing input format defaults and settings.',
        'core' => '7.x',
        'configure' => 'admin/config/content/formats',
        'version' => '7.x-1.0-beta1',
        'project' => 'better_formats',
        'datestamp' => '1343262404',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta1',
    ),
    'bg_image' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/bg_image/bg_image.module',
      'name' => 'bg_image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Background Image',
        'description' => 'Provides a settings page and an API for putting background images on the page using CSS. This module doesn\'t do anything on it\'s own. It is implemented by other modules such as bg_image_context and bg_image_ui.',
        'core' => '7.x',
        'package' => 'Background Images',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'version' => '7.x-1.4',
        'project' => 'bg_image',
        'datestamp' => '1409075303',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'bg_image_context' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/bg_image/bg_image_context/bg_image_context.module',
      'name' => 'bg_image_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Background Image Context',
        'description' => 'Defines a new Context reaction for adding css backround images to the page.',
        'version' => '7.x-1.4',
        'core' => '7.x',
        'project' => 'bg_image',
        'dependencies' => 
        array (
          0 => 'bg_image',
          1 => 'context',
        ),
        'datestamp' => '1409075303',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'bg_image_formatter' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/bg_image_formatter/bg_image_formatter.module',
      'name' => 'bg_image_formatter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Background Images Formatter',
        'description' => 'Background Images Formatter provides an image formatter to display images in background.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'bg_image',
        ),
        'version' => '7.x-1.3',
        'project' => 'bg_image_formatter',
        'datestamp' => '1407566328',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'bg_image_ui' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/bg_image/bg_image_ui/bg_image_ui.module',
      'name' => 'bg_image_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Background Image UI',
        'description' => 'Provides an interface to apply background images to specific pages.',
        'version' => '7.x-1.4',
        'core' => '7.x',
        'project' => 'bg_image',
        'dependencies' => 
        array (
          0 => 'bg_image',
        ),
        'datestamp' => '1409075303',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'ckeditor' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ckeditor/ckeditor.module',
      'name' => 'ckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CKEditor',
        'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
        'core' => '7.x',
        'package' => 'User interface',
        'configure' => 'admin/config/content/ckeditor',
        'version' => '7.x-1.16',
        'project' => 'ckeditor',
        'datestamp' => '1413311935',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.16',
    ),
    'cloudflare' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/cloudflare/cloudflare.module',
      'name' => 'cloudflare',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cloudflare',
        'description' => 'Administer your Cloudflare account by reporting Threats and Spam.',
        'package' => 'Spam control',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'cloudflare.module',
        ),
        'configure' => 'admin/config/people/cloudflare',
        'version' => '7.x-1.0-beta4',
        'project' => 'cloudflare',
        'datestamp' => '1388171905',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta4',
    ),
    'coffee' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/coffee/coffee.module',
      'name' => 'coffee',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Coffee',
        'description' => 'An administrative module to switch between admin pages real fast, like Alfred or Spotlight on OS X.',
        'core' => '7.x',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'coffee.admin.inc',
          1 => 'coffee.hooks.inc',
        ),
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'configure' => 'admin/config/user-interface/coffee',
        'version' => '7.x-2.2',
        'project' => 'coffee',
        'datestamp' => '1396514348',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'colorbox' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/colorbox/colorbox.module',
      'name' => 'colorbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Colorbox',
        'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
        'dependencies' => 
        array (
          0 => 'libraries (2.x)',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/media/colorbox',
        'files' => 
        array (
          0 => 'views/colorbox_handler_field_colorbox.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'colorbox',
        'datestamp' => '1410514129',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'computed_field' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/computed_field/computed_field.module',
      'name' => 'computed_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Computed Field',
        'description' => 'Defines a field type that allows values to be "computed" via PHP code.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'computed_field.install',
          1 => 'computed_field.module',
        ),
        'version' => '7.x-1.0',
        'project' => 'computed_field',
        'datestamp' => '1386094705',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'content_menu' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/content_menu/content_menu.module',
      'name' => 'content_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Content Menu',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'description' => 'Content centric menu management interface for editors.',
        'package' => 'User interface',
        'core' => '7.x',
        'php' => '5.2.4',
        'version' => '7.x-1.0',
        'project' => 'content_menu',
        'datestamp' => '1361228328',
      ),
      'version' => '7.x-1.0',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'contextual_range_filter' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/contextual_range_filter/contextual_range_filter.module',
      'name' => 'contextual_range_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Contextual Range Filter',
        'description' => 'Provides option to contextually filter Views by alphabetic, list or numeric ranges, e.g. <em>http://yoursite.com/yourview/50--99.95</em>',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/contextual_range_filter_handler_argument_date_range.inc',
          1 => 'views/contextual_range_filter_handler_argument_list_range.inc',
          2 => 'views/contextual_range_filter_handler_argument_numeric_range.inc',
          3 => 'views/contextual_range_filter_handler_argument_string_range.inc',
          4 => 'views/contextual_range_filter_plugin_argument_validate_numeric_range.inc',
          5 => 'views/contextual_range_filter_plugin_argument_validate_string_range.inc',
        ),
        'configure' => 'admin/config/content/contextual-range-filter',
        'core' => '7.x',
        'version' => '7.x-1.7',
        'project' => 'contextual_range_filter',
        'datestamp' => '1428468182',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'countries' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/countries/countries.module',
      'name' => 'countries',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Countries',
        'description' => 'A module that provides a FAPI / Field country element and a simple wrapper module to store / update country data.',
        'package' => 'Fields',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views/views_handler_argument_countries_country.inc',
          1 => 'views/views_handler_field_countries_continent.inc',
          2 => 'views/views_handler_filter_countries_continents_list.inc',
          3 => 'views/views_handler_filter_countries_list.inc',
          4 => 'countries.migrate.inc',
          5 => 'tests/countries.test',
        ),
        'configure' => 'admin/config/regional/countries',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'recommends' => 
        array (
          0 => 'countryicons',
        ),
        'version' => '7.x-2.3',
        'project' => 'countries',
        'datestamp' => '1409450929',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'countries_configuration' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/countries/modules/countries_configuration/countries_configuration.module',
      'name' => 'countries_configuration',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Countries configuration',
        'description' => 'A configuration utility module to assist storing country specific data.',
        'package' => 'Fields',
        'version' => '7.x-2.3',
        'core' => '7.x',
        'project' => 'countries',
        'datestamp' => '1409450929',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'countries_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/countries/modules/countries_example/countries_example.module',
      'name' => 'countries_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Countries Example',
        'description' => 'Countries example module',
        'core' => '7.x',
        'package' => 'Example modules',
        'dependencies' => 
        array (
          0 => 'countries',
        ),
        'version' => '7.x-2.3',
        'project' => 'countries',
        'datestamp' => '1409450929',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'countries_i18n' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/countries/modules/countries_i18n/countries_i18n.module',
      'name' => 'countries_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Countries translation',
        'description' => 'Translation of countries.',
        'core' => '7.x',
        'package' => 'Multilingual - Internationalization',
        'dependencies' => 
        array (
          0 => 'countries',
          1 => 'i18n_string',
        ),
        'version' => '7.x-2.3',
        'project' => 'countries',
        'datestamp' => '1409450929',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/css-cache.inc',
          2 => 'includes/math-expr.inc',
          3 => 'includes/stylizer.inc',
          4 => 'tests/css_cache.test',
        ),
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.39',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'date' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Makes date/time fields available.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'date.migrate.inc',
          1 => 'tests/date_api.test',
          2 => 'tests/date.test',
          3 => 'tests/date_field.test',
          4 => 'tests/date_migrate.test',
          5 => 'tests/date_validation.test',
          6 => 'tests/date_timezone.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
      ),
      'version' => '7.x-2.8',
    ),
    'date_all_day' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/date/date_all_day/date_all_day.module',
      'name' => 'date_all_day',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date All Day',
        'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_api' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/date/date_api/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date.css',
          ),
        ),
        'files' => 
        array (
          0 => 'date_api.module',
          1 => 'date_api_sql.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'dependencies' => 
        array (
        ),
      ),
      'version' => '7.x-2.8',
    ),
    'date_context' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/date/date_context/date_context.module',
      'name' => 'date_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Context',
        'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'context',
        ),
        'files' => 
        array (
          0 => 'date_context.module',
          1 => 'plugins/date_context_date_condition.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_migrate_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
      'name' => 'date_migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'date_repeat',
          2 => 'date_repeat_field',
          3 => 'features',
          4 => 'migrate',
        ),
        'description' => 'Examples of migrating with the Date module',
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-date_migrate_example-body',
            1 => 'node-date_migrate_example-field_date',
            2 => 'node-date_migrate_example-field_date_range',
            3 => 'node-date_migrate_example-field_date_repeat',
            4 => 'node-date_migrate_example-field_datestamp',
            5 => 'node-date_migrate_example-field_datestamp_range',
            6 => 'node-date_migrate_example-field_datetime',
            7 => 'node-date_migrate_example-field_datetime_range',
          ),
          'node' => 
          array (
            0 => 'date_migrate_example',
          ),
        ),
        'files' => 
        array (
          0 => 'date_migrate_example.migrate.inc',
        ),
        'name' => 'Date Migration Example',
        'package' => 'Features',
        'project' => 'date',
        'version' => '7.x-2.8',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_popup' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/date_popup',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'themes/datepicker.1.7.css',
          ),
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_repeat' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'tests/date_repeat.test',
          1 => 'tests/date_repeat_form.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
      ),
      'version' => '7.x-2.8',
    ),
    'date_repeat_field' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/date/date_repeat_field/date_repeat_field.module',
      'name' => 'date_repeat_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat Field',
        'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
          2 => 'date_repeat',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date_repeat_field.css',
          ),
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_tools' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/tools',
        'files' => 
        array (
          0 => 'tests/date_tools.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_views' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/date/date_views/date_views.module',
      'name' => 'date_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Views',
        'description' => 'Views integration for date fields and date functionality.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'views',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'includes/date_views_argument_handler.inc',
          1 => 'includes/date_views_argument_handler_simple.inc',
          2 => 'includes/date_views_filter_handler.inc',
          3 => 'includes/date_views_filter_handler_simple.inc',
          4 => 'includes/date_views.views.inc',
          5 => 'includes/date_views_plugin_pager.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
      ),
      'version' => '7.x-2.8',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'devel' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7006',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'devel_generate' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'configure' => 'admin/config/development/generate',
        'files' => 
        array (
          0 => 'devel_generate.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'diff' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/diff/diff.module',
      'name' => 'diff',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7305',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Diff',
        'description' => 'Show differences between content revisions.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'DiffEngine.php',
        ),
        'version' => '7.x-3.2',
        'project' => 'diff',
        'datestamp' => '1352784357',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.2',
    ),
    'dragdropfile' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/dragdropfile/dragdropfile.module',
      'name' => 'dragdropfile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drag Drop File',
        'description' => 'Drag n Drop files in entity forms',
        'core' => '7.x',
        'configure' => 'admin/config/media/dragdropfile',
        'dependencies' => 
        array (
          0 => 'jquery_update',
          1 => 'file',
        ),
        'version' => '7.x-1.4',
        'project' => 'dragdropfile',
        'datestamp' => '1441385586',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'dragndrop_upload' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/dragndrop_upload/dragndrop_upload.module',
      'name' => 'dragndrop_upload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drag & Drop Upload',
        'description' => 'Provides an element and widgets for drag & drop upload',
        'core' => '7.x',
        'package' => 'Media',
        'version' => '7.x-1.0-alpha2',
        'project' => 'dragndrop_upload',
        'datestamp' => '1395160764',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'dragndrop_upload_element' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/dragndrop_upload/modules/dragndrop_upload_element/dragndrop_upload_element.module',
      'name' => 'dragndrop_upload_element',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drag & Drop Upload Element',
        'description' => 'Provides an element for drag & drop upload',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'dragndrop_upload',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'dragndrop_upload',
        'datestamp' => '1395160764',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'dragndrop_upload_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/dragndrop_upload/modules/dragndrop_upload_example/dragndrop_upload_example.module',
      'name' => 'dragndrop_upload_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drag & Drop Upload: Examples',
        'description' => 'Contains examples of how to create droppable zones.',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'dragndrop_upload_element',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'dragndrop_upload',
        'datestamp' => '1395160764',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'dragndrop_upload_file' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/dragndrop_upload/modules/dragndrop_upload_file/dragndrop_upload_file.module',
      'name' => 'dragndrop_upload_file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drag & Drop Upload: File field widget',
        'description' => 'Provides a drag & drop upload widget for a File field',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'dragndrop_upload_element',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'dragndrop_upload',
        'datestamp' => '1395160764',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'dragndrop_upload_image' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/dragndrop_upload/modules/dragndrop_upload_image/dragndrop_upload_image.module',
      'name' => 'dragndrop_upload_image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drag & Drop Upload: Image field widget',
        'description' => 'Provides a drag & drop upload widget for an Image field',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'dragndrop_upload_file',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'dragndrop_upload',
        'datestamp' => '1395160764',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'dragndrop_upload_media' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/dragndrop_upload/modules/dragndrop_upload_media/dragndrop_upload_media.module',
      'name' => 'dragndrop_upload_media',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drag & Drop Upload: Media module integration',
        'description' => 'Allows to use Media browser when selecting files to upload',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'dragndrop_upload_file',
          1 => 'media',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'dragndrop_upload',
        'datestamp' => '1395160764',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'dragndrop_upload_multi' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/dragndrop_upload/modules/dragndrop_upload_multi/dragndrop_upload_multi.module',
      'name' => 'dragndrop_upload_multi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drag & Drop Upload: Multiupload support',
        'description' => 'Provides a multiupload functionality for the Drag & Drop Upload widgets',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'dragndrop_upload',
          1 => 'multiupload_filefield_widget',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'dragndrop_upload',
        'datestamp' => '1395160764',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'dragndrop_upload_video' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/dragndrop_upload/modules/dragndrop_upload_video/dragndrop_upload_video.module',
      'name' => 'dragndrop_upload_video',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drag & Drop Upload: Video field widget',
        'description' => 'Provides a drag & drop upload widget for a Video field',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'video',
          1 => 'dragndrop_upload_file',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'dragndrop_upload',
        'datestamp' => '1395160764',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'editablefields' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/editablefields/editablefields.module',
      'name' => 'editablefields',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Editable Fields',
        'description' => 'Allows you to make some fields editable from the display.',
        'package' => 'Fields',
        'version' => '7.x-1.0-alpha2',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'project' => 'editablefields',
        'datestamp' => '1321966541',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'email' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/email/email.module',
      'name' => 'email',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Email',
        'description' => 'Defines an email field type.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'email.migrate.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'email',
        'datestamp' => '1397134155',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'email_registration' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/email_registration/email_registration.module',
      'name' => 'email_registration',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Email Registration',
        'description' => 'Allows users to register with an e-mail address as their username.',
        'files' => 
        array (
          0 => 'email_registration.test',
        ),
        'core' => '7.x',
        'version' => '7.x-1.2',
        'project' => 'email_registration',
        'datestamp' => '1398265775',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'entity' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/entity/entity.module',
      'name' => 'entity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity API',
        'description' => 'Enables modules to work with any entity type and to provide entities.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity.features.inc',
          1 => 'entity.i18n.inc',
          2 => 'entity.info.inc',
          3 => 'entity.rules.inc',
          4 => 'entity.test',
          5 => 'includes/entity.inc',
          6 => 'includes/entity.controller.inc',
          7 => 'includes/entity.ui.inc',
          8 => 'includes/entity.wrapper.inc',
          9 => 'views/entity.views.inc',
          10 => 'views/handlers/entity_views_field_handler_helper.inc',
          11 => 'views/handlers/entity_views_handler_area_entity.inc',
          12 => 'views/handlers/entity_views_handler_field_boolean.inc',
          13 => 'views/handlers/entity_views_handler_field_date.inc',
          14 => 'views/handlers/entity_views_handler_field_duration.inc',
          15 => 'views/handlers/entity_views_handler_field_entity.inc',
          16 => 'views/handlers/entity_views_handler_field_field.inc',
          17 => 'views/handlers/entity_views_handler_field_numeric.inc',
          18 => 'views/handlers/entity_views_handler_field_options.inc',
          19 => 'views/handlers/entity_views_handler_field_text.inc',
          20 => 'views/handlers/entity_views_handler_field_uri.inc',
          21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          22 => 'views/handlers/entity_views_handler_relationship.inc',
          23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
        ),
        'version' => '7.x-1.6',
        'project' => 'entity',
        'datestamp' => '1424876582',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'entityreference' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/entityreference/entityreference.module',
      'name' => 'entityreference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference',
        'description' => 'Provides a field that can reference other entities.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'entityreference.migrate.inc',
          1 => 'plugins/selection/abstract.inc',
          2 => 'plugins/selection/views.inc',
          3 => 'plugins/behavior/abstract.inc',
          4 => 'views/entityreference_plugin_display.inc',
          5 => 'views/entityreference_plugin_style.inc',
          6 => 'views/entityreference_plugin_row_fields.inc',
          7 => 'tests/entityreference.handlers.test',
          8 => 'tests/entityreference.taxonomy.test',
          9 => 'tests/entityreference.admin.test',
          10 => 'tests/entityreference.feeds.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'entityreference',
        'datestamp' => '1384973110',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'entityreference_behavior_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
      'name' => 'entityreference_behavior_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference Behavior Example',
        'description' => 'Provides some example code for implementing Entity Reference behaviors.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entityreference',
        ),
        'version' => '7.x-1.1',
        'project' => 'entityreference',
        'datestamp' => '1384973110',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'entity_token' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/entity/entity_token.module',
      'name' => 'entity_token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity tokens',
        'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_token.tokens.inc',
          1 => 'entity_token.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.6',
        'project' => 'entity',
        'datestamp' => '1424876582',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'entity_view_mode' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/entity_view_mode/entity_view_mode.module',
      'name' => 'entity_view_mode',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity view modes',
        'description' => 'Allows administrators to define custom view modes for entities via the administration user interface.',
        'core' => '7.x',
        'recommends' => 
        array (
          0 => 'field_ui',
        ),
        'configure' => 'admin/config/system/entity-view-modes',
        'files' => 
        array (
          0 => 'entity_view_mode.test',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'entity_view_mode',
        'datestamp' => '1368242411',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'environment' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/environment/environment.module',
      'name' => 'environment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '-100',
      'info' => 
      array (
        'name' => 'Environment',
        'description' => 'Sets the environment variable for a site instance',
        'core' => '7.x',
        'configure' => 'admin/config/environment',
        'version' => '7.x-1.0',
        'project' => 'environment',
        'datestamp' => '1427999679',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'environment_context' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/environment/modules/environment_context/environment_context.module',
      'name' => 'environment_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Environment Context',
        'description' => 'Use environment setting within context',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'environment',
          1 => 'context',
        ),
        'version' => '7.x-1.0',
        'project' => 'environment',
        'datestamp' => '1427999679',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'environment_force' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/environment/modules/environment_force/environment_force.module',
      'name' => 'environment_force',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Environment Force',
        'description' => 'Resets the environment to that specified in settings.php on every page load.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'environment',
        ),
        'version' => '7.x-1.0',
        'project' => 'environment',
        'datestamp' => '1427999679',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'environment_indicator' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/environment_indicator/environment_indicator.module',
      'name' => 'environment_indicator',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Environment indicator',
        'description' => 'Adds a color indicator for the different environments.',
        'core' => '7.x',
        'configure' => 'admin/config/development/environment-indicator',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'plugins/export_ui/ctools_export_ui_environment_indicator.class.php',
        ),
        'version' => '7.x-2.6',
        'project' => 'environment_indicator',
        'datestamp' => '1427715493',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.6',
    ),
    'environment_indicator_variable' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/environment_indicator/environment_indicator_variable/environment_indicator_variable.module',
      'name' => 'environment_indicator_variable',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Environment indicator variables',
        'description' => 'Adds a variable a realm for environment.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'variable_realm (7.x-2.x)',
          1 => 'variable_store (7.x-2.x)',
          2 => 'environment_indicator',
        ),
        'files' => 
        array (
          0 => 'class/EnvironmentVariableRealmController.php',
        ),
        'version' => '7.x-2.6',
        'project' => 'environment_indicator',
        'datestamp' => '1427715493',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.6',
    ),
    'environment_readonly' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/environment/modules/environment_readonly/environment_readonly.module',
      'name' => 'environment_readonly',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'environment',
        ),
        'description' => 'Provides a Read Only environment state',
        'name' => 'Read Only Environment',
        'recommends' => 
        array (
          0 => 'context',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'environment_readonly.css',
          ),
        ),
        'version' => '7.x-1.0',
        'project' => 'environment',
        'datestamp' => '1427999679',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'eva' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/eva/eva.module',
      'name' => 'eva',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Eva',
        'description' => 'Provides a Views display type that can be attached to entities.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'files' => 
        array (
          0 => 'eva_plugin_display_entity.inc',
        ),
        'version' => '7.x-1.2',
        'project' => 'eva',
        'datestamp' => '1343701935',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'expire' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/expire/expire.module',
      'name' => 'expire',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cache Expiration',
        'description' => 'Logic for expiring cached pages.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'configure' => 'admin/config/system/expire',
        'files' => 
        array (
          0 => 'includes/expire.api.inc',
          1 => 'includes/expire.comment.inc',
          2 => 'includes/expire.domain.inc',
          3 => 'includes/expire.interface.inc',
          4 => 'includes/expire.menu_link.inc',
          5 => 'includes/expire.node.inc',
          6 => 'includes/expire.user.inc',
          7 => 'includes/expire.votingapi.inc',
          8 => 'includes/expire.file.inc',
        ),
        'version' => '7.x-2.0-rc4',
        'project' => 'expire',
        'datestamp' => '1414746830',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-rc4',
    ),
    'features' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '7.x',
        'package' => 'Features',
        'files' => 
        array (
          0 => 'tests/features.test',
        ),
        'configure' => 'admin/structure/features/settings',
        'version' => '7.x-2.5',
        'project' => 'features',
        'datestamp' => '1428944073',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'features_override' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/features_override/features_override.module',
      'name' => 'features_override',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Features Override',
        'description' => 'Allows exported Features to be overridden',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'features',
        ),
        'package' => 'Features',
        'version' => '7.x-2.0-rc2',
        'project' => 'features_override',
        'datestamp' => '1406903928',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-rc2',
    ),
    'feeds' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/feeds/feeds.module',
      'name' => 'feeds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds',
        'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
        'package' => 'Feeds',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'job_scheduler',
        ),
        'files' => 
        array (
          0 => 'includes/FeedsConfigurable.inc',
          1 => 'includes/FeedsImporter.inc',
          2 => 'includes/FeedsSource.inc',
          3 => 'libraries/ParserCSV.inc',
          4 => 'libraries/http_request.inc',
          5 => 'libraries/PuSHSubscriber.inc',
          6 => 'plugins/FeedsCSVParser.inc',
          7 => 'plugins/FeedsFetcher.inc',
          8 => 'plugins/FeedsFileFetcher.inc',
          9 => 'plugins/FeedsHTTPFetcher.inc',
          10 => 'plugins/FeedsNodeProcessor.inc',
          11 => 'plugins/FeedsOPMLParser.inc',
          12 => 'plugins/FeedsParser.inc',
          13 => 'plugins/FeedsPlugin.inc',
          14 => 'plugins/FeedsProcessor.inc',
          15 => 'plugins/FeedsSimplePieParser.inc',
          16 => 'plugins/FeedsSitemapParser.inc',
          17 => 'plugins/FeedsSyndicationParser.inc',
          18 => 'plugins/FeedsTermProcessor.inc',
          19 => 'plugins/FeedsUserProcessor.inc',
          20 => 'tests/feeds.test',
          21 => 'tests/common_syndication_parser.test',
          22 => 'tests/feeds_date_time.test',
          23 => 'tests/feeds_mapper_date.test',
          24 => 'tests/feeds_mapper_date_multiple.test',
          25 => 'tests/feeds_mapper_field.test',
          26 => 'tests/feeds_mapper_file.test',
          27 => 'tests/feeds_mapper_hooks.test',
          28 => 'tests/feeds_mapper_link.test',
          29 => 'tests/feeds_mapper_path.test',
          30 => 'tests/feeds_mapper_profile.test',
          31 => 'tests/feeds_mapper_unique.test',
          32 => 'tests/feeds_mapper.test',
          33 => 'tests/feeds_mapper_config.test',
          34 => 'tests/feeds_fetcher_file.test',
          35 => 'tests/feeds_mapper_format_config.test',
          36 => 'tests/feeds_fetcher_http.test',
          37 => 'tests/feeds_parser_sitemap.test',
          38 => 'tests/feeds_parser_syndication.test',
          39 => 'tests/feeds_processor_node.test',
          40 => 'tests/feeds_processor_term.test',
          41 => 'tests/feeds_processor_user.test',
          42 => 'tests/feeds_push.test',
          43 => 'tests/feeds_scheduler.test',
          44 => 'tests/feeds_mapper_link.test',
          45 => 'tests/feeds_mapper_summary.test',
          46 => 'tests/feeds_mapper_taxonomy.test',
          47 => 'tests/http_request.test',
          48 => 'tests/parser_csv.test',
          49 => 'views/feeds_views_handler_argument_importer_id.inc',
          50 => 'views/feeds_views_handler_field_importer_name.inc',
          51 => 'views/feeds_views_handler_field_log_message.inc',
          52 => 'views/feeds_views_handler_field_severity.inc',
          53 => 'views/feeds_views_handler_field_source.inc',
          54 => 'views/feeds_views_handler_filter_severity.inc',
          55 => 'views/feeds_views_plugin_argument_validate_feed_nid.inc',
        ),
        'version' => '7.x-2.0-beta1',
        'project' => 'feeds',
        'datestamp' => '1436615941',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1',
    ),
    'feeds_import' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/feeds/feeds_import/feeds_import.module',
      'name' => 'feeds_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Import',
        'description' => 'An example of a node importer and a user importer.',
        'core' => '7.x',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'feeds',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'feeds_importer' => 
          array (
            0 => 'node',
            1 => 'user',
          ),
        ),
        'files' => 
        array (
          0 => 'feeds_import.test',
        ),
        'version' => '7.x-2.0-beta1',
        'project' => 'feeds',
        'datestamp' => '1436615941',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1',
    ),
    'feeds_news' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/feeds/feeds_news/feeds_news.module',
      'name' => 'feeds_news',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds News',
        'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
        'core' => '7.x',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'features',
          2 => 'feeds',
          3 => 'views',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'feeds:feeds_importer_default:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'feeds_importer' => 
          array (
            0 => 'feed',
            1 => 'opml',
          ),
          'field_base' => 
          array (
            0 => 'field_feed_item_description',
          ),
          'field_instance' => 
          array (
            0 => 'node-feed_item-field_feed_item_description',
          ),
          'node' => 
          array (
            0 => 'feed',
            1 => 'feed_item',
          ),
          'views_view' => 
          array (
            0 => 'feeds_defaults_feed_items',
          ),
        ),
        'files' => 
        array (
          0 => 'feeds_news.module',
          1 => 'feeds_news.test',
        ),
        'version' => '7.x-2.0-beta1',
        'project' => 'feeds',
        'datestamp' => '1436615941',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1',
    ),
    'feeds_tamper' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/feeds_tamper/feeds_tamper.module',
      'name' => 'feeds_tamper',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Tamper',
        'description' => 'Modify feeds data before it gets saved.',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'files' => 
        array (
          0 => 'tests/feeds_tamper.test',
          1 => 'tests/feeds_tamper_plugins.test',
          2 => 'tests/feeds_tamper_efq_finder.test',
        ),
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'feeds_tamper',
        'datestamp' => '1433291282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'feeds_tamper_ui' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/feeds_tamper/feeds_tamper_ui/feeds_tamper_ui.module',
      'name' => 'feeds_tamper_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Tamper Admin UI',
        'description' => 'Administrative UI for Feeds Tamper module.',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'feeds_tamper',
          1 => 'feeds_ui',
        ),
        'files' => 
        array (
          0 => 'tests/feeds_tamper_ui.test',
        ),
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'feeds_tamper',
        'datestamp' => '1433291282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'feeds_ui' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/feeds/feeds_ui/feeds_ui.module',
      'name' => 'feeds_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds Admin UI',
        'description' => 'Administrative UI for Feeds module.',
        'package' => 'Feeds',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'configure' => 'admin/structure/feeds',
        'files' => 
        array (
          0 => 'feeds_ui.test',
        ),
        'version' => '7.x-2.0-beta1',
        'project' => 'feeds',
        'datestamp' => '1436615941',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1',
    ),
    'feeds_xpathparser' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/feeds_xpathparser/feeds_xpathparser.module',
      'name' => 'feeds_xpathparser',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Feeds XPath Parser',
        'description' => 'Parse an XML or HTML document using XPath.',
        'package' => 'Feeds',
        'dependencies' => 
        array (
          0 => 'feeds',
        ),
        'files' => 
        array (
          0 => 'FeedsXPathParserBase.inc',
          1 => 'FeedsXPathParserHTML.inc',
          2 => 'FeedsXPathParserXML.inc',
          3 => 'FeedsXPathParserQueryParser.inc',
          4 => 'FeedsXPathParserDOMXPath.inc',
          5 => 'tests/feeds_xpathparser.test',
          6 => 'tests/feeds_xpathparser_parser_html.test',
          7 => 'tests/feeds_xpathparser_parser_xml.test',
          8 => 'tests/feeds_xpathparser_query_parser.test',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'feeds_xpathparser',
        'datestamp' => '1418270885',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'fences' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/fences/fences.module',
      'name' => 'fences',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fences',
        'description' => 'Configurable field wrappers',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'configure' => 'admin/config/content/fences',
        'version' => '7.x-1.0',
        'project' => 'fences',
        'datestamp' => '1335373578',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'field_collection' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/field_collection/field_collection.module',
      'name' => 'field_collection',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field collection',
        'description' => 'Provides a field collection field, to which any number of fields can be attached.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'files' => 
        array (
          0 => 'field_collection.test',
          1 => 'field_collection.info.inc',
          2 => 'views/field_collection_handler_relationship.inc',
          3 => 'field_collection.migrate.inc',
        ),
        'configure' => 'admin/structure/field-collections',
        'package' => 'Fields',
        'version' => '7.x-1.0-beta8',
        'project' => 'field_collection',
        'datestamp' => '1415122384',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta8',
    ),
    'field_collection_feeds' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/field_collection_feeds/field_collection_feeds.module',
      'name' => 'field_collection_feeds',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field Collection Feeds',
        'description' => 'Provides feeds integration for field collection.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field_collection',
          1 => 'feeds',
        ),
        'version' => '7.x-1.0-alpha3',
        'project' => 'field_collection_feeds',
        'datestamp' => '1371543951',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha3',
    ),
    'field_group' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/field_group/field_group.module',
      'name' => 'field_group',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field Group',
        'description' => 'Provides the ability to group your fields on both form and display.',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'ctools',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/field_group.ui.test',
          1 => 'tests/field_group.display.test',
        ),
        'version' => '7.x-1.4',
        'project' => 'field_group',
        'datestamp' => '1401918529',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'field_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/field_permissions/field_permissions.module',
      'name' => 'field_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field Permissions',
        'description' => 'Set field-level permissions to create, update or view fields.',
        'package' => 'Fields',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field_permissions.module',
          1 => 'field_permissions.admin.inc',
          2 => 'field_permissions.test',
        ),
        'configure' => 'admin/reports/fields/permissions',
        'version' => '7.x-1.0-beta2',
        'project' => 'field_permissions',
        'datestamp' => '1327510549',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta2',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'field_validation' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/field_validation/field_validation.module',
      'name' => 'field_validation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field Validation',
        'description' => 'Add validation rules to fields.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'field_validation_validator.inc',
        ),
        'version' => '2.x-dev-dev',
        'project' => 'field_validation',
        'datestamp' => '1413029143',
        'php' => '5.2.4',
      ),
      'version' => '2.x-dev-dev',
    ),
    'field_validation_extras' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/field_validation/field_validation_extras/field_validation_extras.module',
      'name' => 'field_validation_extras',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field validation extras',
        'description' => 'Extra validators for Field validation 7.x-2.x.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field_validation',
        ),
        'version' => '2.x-dev-dev',
        'project' => 'field_validation',
        'datestamp' => '1413029143',
        'php' => '5.2.4',
      ),
      'version' => '2.x-dev-dev',
    ),
    'field_validation_ui' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/field_validation/field_validation_ui.module',
      'name' => 'field_validation_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field Validation UI',
        'description' => 'UI for Field Validation.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field_validation',
          1 => 'ctools',
        ),
        'version' => '2.x-dev-dev',
        'project' => 'field_validation',
        'datestamp' => '1413029143',
        'php' => '5.2.4',
      ),
      'version' => '2.x-dev-dev',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'filefield_paths' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/filefield_paths/filefield_paths.module',
      'name' => 'filefield_paths',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7107',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File (Field) Paths',
        'description' => 'Adds improved Token based file sorting and renaming functionalities.',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'package' => 'Fields',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filefield_paths.install',
          1 => 'filefield_paths.module',
          2 => 'modules/features.inc',
          3 => 'modules/file.inc',
          4 => 'modules/filefield_paths.drush.inc',
          5 => 'modules/filefield_paths.inc',
          6 => 'modules/image.inc',
          7 => 'modules/token.inc',
          8 => 'modules/video.inc',
        ),
        'version' => '7.x-1.0-beta4',
        'project' => 'filefield_paths',
        'datestamp' => '1366871711',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta4',
    ),
    'filefield_sources' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/filefield_sources/filefield_sources.module',
      'name' => 'filefield_sources',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File Field Sources',
        'description' => 'Extends File fields to allow referencing of existing files, remote files, and server files.',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'package' => 'Fields',
        'core' => '7.x',
        'version' => '7.x-1.9',
        'project' => 'filefield_sources',
        'datestamp' => '1383155428',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'file_entity' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/file_entity/file_entity.module',
      'name' => 'file_entity',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File entity',
        'description' => 'Extends Drupal file entities to be fieldable and viewable.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'file',
          2 => 'ctools',
          3 => 'system (>=7.9)',
        ),
        'files' => 
        array (
          0 => 'views/views_handler_argument_file_type.inc',
          1 => 'views/views_handler_field_file_rendered.inc',
          2 => 'views/views_handler_field_file_type.inc',
          3 => 'views/views_handler_filter_file_type.inc',
          4 => 'views/views_handler_filter_schema_type.inc',
          5 => 'views/views_handler_field_file_filename.inc',
          6 => 'views/views_handler_field_file_link.inc',
          7 => 'views/views_handler_field_file_link_edit.inc',
          8 => 'views/views_handler_field_file_link_delete.inc',
          9 => 'views/views_handler_field_file_link_download.inc',
          10 => 'views/views_handler_field_file_link_usage.inc',
          11 => 'views/views_plugin_row_file_rss.inc',
          12 => 'views/views_plugin_row_file_view.inc',
          13 => 'file_entity.test',
        ),
        'configure' => 'admin/config/media/file-settings',
        'version' => '7.x-2.0-beta1',
        'project' => 'file_entity',
        'datestamp' => '1412420930',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'flag' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/flag/flag.module',
      'name' => 'flag',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag',
        'description' => 'Create customized flags that users can set on entities.',
        'core' => '7.x',
        'package' => 'Flags',
        'configure' => 'admin/structure/flags',
        'test_dependencies' => 
        array (
          0 => 'token',
          1 => 'rules',
        ),
        'files' => 
        array (
          0 => 'includes/flag/flag_flag.inc',
          1 => 'includes/flag/flag_entity.inc',
          2 => 'includes/flag/flag_node.inc',
          3 => 'includes/flag/flag_comment.inc',
          4 => 'includes/flag/flag_user.inc',
          5 => 'includes/flag.cookie_storage.inc',
          6 => 'includes/flag.entity.inc',
          7 => 'flag.rules.inc',
          8 => 'includes/views/flag_handler_argument_entity_id.inc',
          9 => 'includes/views/flag_handler_field_ops.inc',
          10 => 'includes/views/flag_handler_field_flagged.inc',
          11 => 'includes/views/flag_handler_filter_flagged.inc',
          12 => 'includes/views/flag_handler_sort_flagged.inc',
          13 => 'includes/views/flag_handler_relationships.inc',
          14 => 'includes/views/flag_plugin_argument_validate_flaggability.inc',
          15 => 'tests/flag.test',
        ),
        'version' => '7.x-3.6',
        'project' => 'flag',
        'datestamp' => '1425327793',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'flag_actions' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/flag/flag_actions.module',
      'name' => 'flag_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag actions',
        'description' => 'Execute actions on Flag events.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'configure' => 'admin/structure/flags/actions',
        'files' => 
        array (
          0 => 'flag.install',
          1 => 'flag_actions.module',
        ),
        'version' => '7.x-3.6',
        'project' => 'flag',
        'datestamp' => '1425327793',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'flag_bookmark' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/flag/flag_bookmark/flag_bookmark.module',
      'name' => 'flag_bookmark',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flag Bookmark',
        'description' => 'Provides an example bookmark flag and supporting views.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'flag',
        ),
        'package' => 'Flags',
        'version' => '7.x-3.6',
        'project' => 'flag',
        'datestamp' => '1425327793',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'flexslider' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/flexslider/flexslider.module',
      'name' => 'flexslider',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider',
        'description' => 'Integrate the FlexSlider 2 library with Drupal',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'dependencies' => 
        array (
          0 => 'libraries (>=2.x)',
          1 => 'ctools',
          2 => 'image',
        ),
        'files' => 
        array (
          0 => 'theme/flexslider.theme.inc',
          1 => 'flexslider.test',
        ),
        'configure' => 'admin/config/media/flexslider',
        'version' => '7.x-2.0-alpha3',
        'project' => 'flexslider',
        'datestamp' => '1378663043',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'flexslider_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/flexslider/flexslider_example/flexslider_example.module',
      'name' => 'flexslider_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider Example',
        'description' => 'Sample implementation of FlexSlider',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'context',
          1 => 'features',
          2 => 'flexslider',
          3 => 'flexslider_fields',
          4 => 'flexslider_views',
          5 => 'image',
          6 => 'menu',
          7 => 'strongarm',
          8 => 'views',
        ),
        'features' => 
        array (
          'context' => 
          array (
            0 => 'flexslider_example_thumbnail',
          ),
          'ctools' => 
          array (
            0 => 'context:context:3',
            1 => 'flexslider:flexslider_default_preset:1',
            2 => 'strongarm:strongarm:1',
            3 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:1',
          ),
          'field' => 
          array (
            0 => 'node-flexslider_example-field_flexslider_example_image',
            1 => 'node-flexslider_example-field_flexslider_example_slidesh',
          ),
          'flexslider_optionset' => 
          array (
            0 => 'flexslider_carousel_with_min_and_max_ranges',
            1 => 'flexslider_default_basic_carousel',
            2 => 'flexslider_default_slider_thumbnail_controlnav',
            3 => 'flexslider_default_slider_w_thumbnail_slider',
            4 => 'flexslider_default_thumbnail_captions',
            5 => 'flexslider_default_thumbnail_slider',
          ),
          'menu_custom' => 
          array (
            0 => 'menu-flexslider-example',
          ),
          'node' => 
          array (
            0 => 'flexslider_example',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__flexslider_example',
          ),
          'views_view' => 
          array (
            0 => 'flexslider_views_example',
          ),
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'flexslider',
        'datestamp' => '1378663043',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'flexslider_fields' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/flexslider/flexslider_fields/flexslider_fields.module',
      'name' => 'flexslider_fields',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider Fields',
        'description' => 'Adds a display mode in Fields for FlexSlider',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'dependencies' => 
        array (
          0 => 'flexslider',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'flexslider',
        'datestamp' => '1378663043',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'flexslider_views' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/flexslider/flexslider_views/flexslider_views.module',
      'name' => 'flexslider_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider Views Style',
        'description' => 'Adds a Views style plugin for FlexSlider',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'flexslider',
        ),
        'files' => 
        array (
          0 => 'flexslider_views.module',
          1 => 'flexslider_views.views.inc',
          2 => 'flexslider_views_plugin_style_flexslider.inc',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'flexslider',
        'datestamp' => '1378663043',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'geocoder' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/geocoder/geocoder.module',
      'name' => 'geocoder',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Geocoder',
        'description' => 'An API and widget to geocode various known data into other GIS data types.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'geophp',
          1 => 'ctools',
        ),
        'version' => '7.x-1.2',
        'project' => 'geocoder',
        'datestamp' => '1346083034',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'geofield' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/geofield/geofield.module',
      'name' => 'geofield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Geofield',
        'description' => 'Stores geographic and location data (points, lines, and polygons).',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'geophp (>=1.7)',
          1 => 'ctools',
        ),
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'geofield.module',
          1 => 'geofield.install',
          2 => 'geofield.elements.inc',
          3 => 'geofield.widgets.inc',
          4 => 'geofield.formatters.inc',
          5 => 'geofield.openlayers.inc',
          6 => 'geofield.feeds.inc',
          7 => 'tests/geofield.test',
          8 => 'views/geofield.views.inc',
          9 => 'views/handlers/geofield_handler_sort.inc',
          10 => 'views/handlers/geofield_handler_field.inc',
          11 => 'views/handlers/geofield_handler_filter.inc',
          12 => 'views/handlers/geofield_handler_argument_proximity.inc',
          13 => 'views/proximity_plugins/geofieldProximityBase.inc',
          14 => 'views/proximity_plugins/geofieldProximityManual.inc',
          15 => 'views/proximity_plugins/geofieldProximityGeocoder.inc',
          16 => 'views/proximity_plugins/geofieldProximityEntityURL.inc',
          17 => 'views/proximity_plugins/geofieldProximityOtherGeofield.inc',
          18 => 'views/proximity_plugins/geofieldProximityCurrentUser.inc',
          19 => 'views/proximity_plugins/geofieldProximityExposedFilter.inc',
          20 => 'views/proximity_plugins/geofieldProximityContextualFilter.inc',
        ),
        'version' => '7.x-2.3',
        'project' => 'geofield',
        'datestamp' => '1411337638',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'geofield_map' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/geofield/modules/geofield_map/geofield_map.module',
      'name' => 'geofield_map',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Geofield Map',
        'description' => 'Provides a basic mapping interface for Geofields.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'geofield',
        ),
        'files' => 
        array (
          0 => 'includes/geofield_map.views.inc',
          1 => 'includes/geofield_map_plugin_style_map.inc',
        ),
        'version' => '7.x-2.3',
        'project' => 'geofield',
        'datestamp' => '1411337638',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'geophp' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/geophp/geophp.module',
      'name' => 'geophp',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'geoPHP',
        'description' => 'Wraps the geoPHP library: advanced geometry operations in PHP',
        'core' => '7.x',
        'version' => '7.x-1.7',
        'project' => 'geophp',
        'datestamp' => '1352084822',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.7',
    ),
    'googleanalytics' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/google_analytics/googleanalytics.module',
      'name' => 'googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics',
        'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
        'core' => '7.x',
        'package' => 'Statistics',
        'configure' => 'admin/config/system/googleanalytics',
        'files' => 
        array (
          0 => 'googleanalytics.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'token',
        ),
        'version' => '7.x-2.1',
        'project' => 'google_analytics',
        'datestamp' => '1417276982',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.1',
    ),
    'google_fonts' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/google_fonts/google_fonts.module',
      'name' => 'google_fonts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Fonts',
        'description' => 'Make use of Open Source fonts using the <a href="http://code.google.com/apis/webfonts/">Google Fonts API</a>',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'google_fonts.module',
          1 => 'google_fonts.admin.inc',
          2 => 'google_fonts.install',
        ),
        'configure' => 'admin/config/system/google_fonts',
        'version' => '7.x-2.3',
        'project' => 'google_fonts',
        'datestamp' => '1310455318',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'gtranslate' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/gtranslate/gtranslate.module',
      'name' => 'gtranslate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'GTranslate',
        'description' => 'Uses Google power to translate your web site.',
        'configure' => 'admin/config/regional/gtranslate',
        'package' => 'Multilanguage',
        'core' => '7.x',
        'version' => '7.x-1.10',
        'project' => 'gtranslate',
        'datestamp' => '1398503928',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.10',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'hybridauth' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/hybridauth/hybridauth.module',
      'name' => 'hybridauth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HybridAuth',
        'description' => 'Provides HybridAuth social sign-on.',
        'core' => '7.x',
        'package' => 'HybridAuth',
        'configure' => 'admin/config/people/hybridauth',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-2.13',
        'project' => 'hybridauth',
        'datestamp' => '1435138387',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.13',
    ),
    'hybridauth_bonus' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/hybridauth/hybridauth_bonus/hybridauth_bonus.module',
      'name' => 'hybridauth_bonus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HybridAuth Bonus',
        'description' => 'Provides HybridAuth bonus features, like roles choosing upon registration.',
        'core' => '7.x',
        'package' => 'HybridAuth',
        'configure' => 'admin/config/people/hybridauth',
        'dependencies' => 
        array (
          0 => 'hybridauth',
        ),
        'version' => '7.x-2.13',
        'project' => 'hybridauth',
        'datestamp' => '1435138387',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.13',
    ),
    'hybridauth_ulogin' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/hybridauth/hybridauth_ulogin/hybridauth_ulogin.module',
      'name' => 'hybridauth_ulogin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HybridAuth uLogin',
        'description' => 'Migrate uLogin identities to HybridAuth.',
        'core' => '7.x',
        'package' => 'HybridAuth',
        'configure' => 'admin/config/people/hybridauth/ulogin',
        'dependencies' => 
        array (
          0 => 'hybridauth',
        ),
        'version' => '7.x-2.13',
        'project' => 'hybridauth',
        'datestamp' => '1435138387',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.13',
    ),
    'i18n' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n.module',
      'name' => 'i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Internationalization',
        'description' => 'Extends Drupal support for multilingual features.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'variable',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_object.inc',
          1 => 'i18n.test',
        ),
        'configure' => 'admin/config/regional/i18n',
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_block' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_block/i18n_block.module',
      'name' => 'i18n_block',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block languages',
        'description' => 'Enables language selector for blocks and optional block translation.',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_block.inc',
          1 => 'i18n_block.test',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_contact' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_contact/i18n_contact.module',
      'name' => 'i18n_contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact translation',
        'description' => 'Makes contact categories and replies available for translation.',
        'dependencies' => 
        array (
          0 => 'contact',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_field' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_field/i18n_field.module',
      'name' => 'i18n_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field translation',
        'description' => 'Translate field properties',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_field.inc',
          1 => 'i18n_field.test',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_forum' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_forum/i18n_forum.module',
      'name' => 'i18n_forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual forum',
        'description' => 'Enables multilingual forum, translates names and containers.',
        'dependencies' => 
        array (
          0 => 'forum',
          1 => 'i18n_taxonomy',
          2 => 'i18n_node',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_forum.test',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_menu' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_menu/i18n_menu.module',
      'name' => 'i18n_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu translation',
        'description' => 'Supports translatable custom menu items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'menu',
          2 => 'i18n_string',
          3 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_menu.inc',
          1 => 'i18n_menu.test',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_node' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_node/i18n_node.module',
      'name' => 'i18n_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual content',
        'description' => 'Extended node options for multilingual content',
        'dependencies' => 
        array (
          0 => 'translation',
          1 => 'i18n',
          2 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/node',
        'files' => 
        array (
          0 => 'i18n_node.test',
          1 => 'i18n_node.variable.inc',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_panels' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/panels/i18n_panels/i18n_panels.module',
      'name' => 'i18n_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels translation',
        'description' => 'Supports translatable panels items.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'panels',
          2 => 'i18n_string',
          3 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-3.5',
        'project' => 'panels',
        'datestamp' => '1422472985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.5',
    ),
    'i18n_path' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_path/i18n_path.module',
      'name' => 'i18n_path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path translation',
        'description' => 'Define translations for generic paths',
        'dependencies' => 
        array (
          0 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_path.inc',
          1 => 'i18n_path.test',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_redirect' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_redirect/i18n_redirect.module',
      'name' => 'i18n_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation redirect',
        'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_select' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_select/i18n_select.module',
      'name' => 'i18n_select',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Multilingual select',
        'description' => 'API module for multilingual content selection',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/select',
        'files' => 
        array (
          0 => 'i18n_select.test',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_string' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_string/i18n_string.module',
      'name' => 'i18n_string',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'String translation',
        'description' => 'Provides support for translation of user defined strings.',
        'dependencies' => 
        array (
          0 => 'locale',
          1 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_string.admin.inc',
          1 => 'i18n_string.inc',
          2 => 'i18n_string.test',
        ),
        'configure' => 'admin/config/regional/i18n/strings',
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_sync' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_sync/i18n_sync.module',
      'name' => 'i18n_sync',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Synchronize translations',
        'description' => 'Synchronizes taxonomy and fields accross translations of the same content.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_sync.module',
          1 => 'i18n_sync.install',
          2 => 'i18n_sync.module.inc',
          3 => 'i18n_sync.node.inc',
          4 => 'i18n_sync.test',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_taxonomy/i18n_taxonomy.module',
      'name' => 'i18n_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy translation',
        'description' => 'Enables multilingual taxonomy.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'i18n_string',
          2 => 'i18n_translation',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_taxonomy.inc',
          1 => 'i18n_taxonomy.pages.inc',
          2 => 'i18n_taxonomy.admin.inc',
          3 => 'i18n_taxonomy.test',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_translation' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_translation/i18n_translation.module',
      'name' => 'i18n_translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Translation sets',
        'description' => 'Simple translation sets API for generic objects',
        'dependencies' => 
        array (
          0 => 'i18n',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'i18n_translation.inc',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_user' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_user/i18n_user.module',
      'name' => 'i18n_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User mail translation',
        'description' => 'Translate emails sent from the User module.',
        'core' => '7.x',
        'package' => 'Multilingual - Internationalization',
        'dependencies' => 
        array (
          0 => 'i18n_variable',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'i18n_variable' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/i18n/i18n_variable/i18n_variable.module',
      'name' => 'i18n_variable',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable translation',
        'description' => 'Multilingual variables that switch language depending on page language.',
        'dependencies' => 
        array (
          0 => 'i18n',
          1 => 'variable_store (7.x-2.x)',
          2 => 'variable_realm (7.x-2.x)',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'configure' => 'admin/config/regional/i18n/variable',
        'files' => 
        array (
          0 => 'i18n_variable.class.inc',
          1 => 'i18n_variable.test',
        ),
        'version' => '7.x-1.13',
        'project' => 'i18n',
        'datestamp' => '1430999922',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.13',
    ),
    'iframe' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/iframe/iframe.module',
      'name' => 'iframe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Iframe',
        'description' => 'Defines simple iframe field types.',
        'package' => 'CCK',
        'version' => '7.x-1.3',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field_ui',
        ),
        'files' => 
        array (
          0 => 'iframe.module',
          1 => 'iframe.install',
        ),
        'required' => false,
        'project' => 'iframe',
        'datestamp' => '1428451383',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'imageapi_optimize' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/imageapi_optimize/imageapi_optimize.module',
      'name' => 'imageapi_optimize',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI Optimize',
        'description' => 'An optimized version Image Toolkits',
        'core' => '7.x',
        'version' => '7.x-1.2',
        'project' => 'imageapi_optimize',
        'datestamp' => '1414735130',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'imagecache_actions' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/imagecache_actions/imagecache_actions.module',
      'name' => 'imagecache_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Actions',
        'description' => 'Provides utility code for a number of additional image effects that can be found in the sub modules.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'version' => '7.x-1.5',
        'project' => 'imagecache_actions',
        'datestamp' => '1417256282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'imagecache_autorotate' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/imagecache_actions/autorotate/imagecache_autorotate.module',
      'name' => 'imagecache_autorotate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Autorotate',
        'description' => 'Provides an image effect to autorotate an image based on EXIF data.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'version' => '7.x-1.5',
        'project' => 'imagecache_actions',
        'datestamp' => '1417256282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'imagecache_canvasactions' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/imagecache_actions/canvasactions/imagecache_canvasactions.module',
      'name' => 'imagecache_canvasactions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Canvas Actions',
        'description' => 'Provides image effects for manipulating image canvases: define canvas, image mask, watermark, underlay background image, rounded corners, composite source to image and resize by percent effect. Also provides an aspect switcher (portrait/landscape).',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imagecache_actions',
          1 => 'image',
        ),
        'version' => '7.x-1.5',
        'project' => 'imagecache_actions',
        'datestamp' => '1417256282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'imagecache_coloractions' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/imagecache_actions/coloractions/imagecache_coloractions.module',
      'name' => 'imagecache_coloractions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Color Actions',
        'description' => 'Provides image effects color-shifting, invert colors, brightness, posterize and alpha transparency effects. Also provides a change image format effect.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imagecache_actions',
          1 => 'image',
        ),
        'files' => 
        array (
          0 => 'imagecache_coloractions.install',
          1 => 'imagecache_coloractions.module',
          2 => 'transparency.inc',
          3 => 'tests/green.imagecache_preset.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'imagecache_actions',
        'datestamp' => '1417256282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'imagecache_customactions' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/imagecache_actions/customactions/imagecache_customactions.module',
      'name' => 'imagecache_customactions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Custom Actions',
        'description' => 'Provides the custom and subroutine image effects.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imagecache_actions',
          1 => 'image',
        ),
        'version' => '7.x-1.5',
        'project' => 'imagecache_actions',
        'datestamp' => '1417256282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'imagecache_testsuite' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/imagecache_actions/tests/imagecache_testsuite.module',
      'name' => 'imagecache_testsuite',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache_actions Test Suite',
        'description' => 'Displays a collection of demo image styles.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imagecache_actions',
          1 => 'system_stream_wrapper',
        ),
        'features' => 
        array (
          'image' => 
          array (
            0 => 'corners_combo',
          ),
        ),
        'version' => '7.x-1.5',
        'project' => 'imagecache_actions',
        'datestamp' => '1417256282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'imagecache_token' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/imagecache_token/imagecache_token.module',
      'name' => 'imagecache_token',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Token',
        'description' => 'Provides additional image tokens for use with ImageCache',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'token',
        ),
        'package' => 'Image',
        'core' => '7.x',
        'configure' => 'admin/config/media/imagecache-token',
        'version' => '7.x-1.0-rc1+0-dev',
        'project' => 'imagecache_token',
        'datestamp' => '1438478940',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1+0-dev',
    ),
    'imagefield_tokens' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/imagefield_tokens/imagefield_tokens.module',
      'name' => 'imagefield_tokens',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageField Tokens',
        'description' => 'Adds additional settings to the Image field alt/title attributes.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'imagefield_tokens',
        'datestamp' => '1380582815',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'image_effects_text' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/imagecache_actions/image_effects_text/image_effects_text.module',
      'name' => 'image_effects_text',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Effects Text',
        'description' => 'Provides an image effect to overlay text captions on images.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'imagecache_actions',
        ),
        'version' => '7.x-1.5',
        'project' => 'imagecache_actions',
        'datestamp' => '1417256282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'image_effects_text_test' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/imagecache_actions/image_effects_text/image_effects_text_test/image_effects_text_test.module',
      'name' => 'image_effects_text_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Effects Text test',
        'description' => 'Defines image styles that test the text effect.',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'image_effects_text',
          2 => 'imagecache_canvasactions',
          3 => 'system_stream_wrapper',
        ),
        'version' => '7.x-1.5',
        'project' => 'imagecache_actions',
        'datestamp' => '1417256282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'image_exif_autorotate' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/image_exif_autorotate/image_exif_autorotate.module',
      'name' => 'image_exif_autorotate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image EXIF Autorotate',
        'description' => 'Automatically rotates any managed file image.',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'imagecache_autorotate',
        ),
        'version' => '7.x-1.0',
        'project' => 'image_exif_autorotate',
        'datestamp' => '1422432482',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'image_gallery' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/image/contrib/image_gallery/image_gallery.module',
      'name' => 'image_gallery',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Gallery',
        'description' => 'Allows sorting and displaying of image galleries based on categories.',
        'package' => 'Image',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'taxonomy',
        ),
        'core' => '7.x',
        'version' => '7.x-1.x-dev',
        'project' => 'image',
        'datestamp' => '1435186085',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'image_import' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/image/contrib/image_import/image_import.module',
      'name' => 'image_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Import',
        'description' => 'Allows batches of images to be imported from a directory on the server.',
        'package' => 'Image',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'core' => '7.x',
        'version' => '7.x-1.x-dev',
        'project' => 'image',
        'datestamp' => '1435186085',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'image_im_advanced' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/image/contrib/image_im_advanced/image_im_advanced.module',
      'name' => 'image_im_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageMagick Advanced Options',
        'description' => 'Adds advanced options to the ImageMagick image toolkit.',
        'package' => 'Image',
        'core' => '7.x',
        'version' => '7.x-1.x-dev',
        'project' => 'image',
        'datestamp' => '1435186085',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'image_legacy' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/image/image_legacy.module',
      'name' => 'image_legacy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image legacy',
        'description' => 'Convert Drupal 6 image nodes to use the Drupal 7 image field. Requires Field convert module.',
        'package' => 'Image',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'image_legacy.module',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'image',
        'datestamp' => '1435186085',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'image_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/image/image_migrate/image_migrate.module',
      'name' => 'image_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Migrate',
        'description' => 'Provides migration classes for Image module data.',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'migrate',
          2 => 'migrate_d2d',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'image_migrate.image.inc',
          1 => 'image_migrate.image_attach.inc',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'image',
        'datestamp' => '1435186085',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'image_migrate_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/image/image_migrate/image_migrate_example/image_migrate_example.module',
      'name' => 'image_migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Migrate Example',
        'description' => 'Sample migration from D6 to D7.',
        'dependencies' => 
        array (
          0 => 'image_migrate',
        ),
        'core' => '7.x',
        'version' => '7.x-1.x-dev',
        'project' => 'image',
        'datestamp' => '1435186085',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'image_styles_admin' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/imagecache_actions/image_styles_admin/image_styles_admin.module',
      'name' => 'image_styles_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image styles admin',
        'description' => 'Provides additional administrative functionality to duplicate, export or import image styles.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'version' => '7.x-1.5',
        'project' => 'imagecache_actions',
        'datestamp' => '1417256282',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'image_url_formatter' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/image_url_formatter/image_url_formatter.module',
      'name' => 'image_url_formatter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image URL Formatter',
        'description' => 'Add an URL formatter for image field',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'image',
        ),
        'files' => 
        array (
          0 => 'image_url_formatter.module',
        ),
        'version' => '7.x-1.4',
        'project' => 'image_url_formatter',
        'datestamp' => '1378820223',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'imce' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/imce/imce.module',
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE',
        'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
        'core' => '7.x',
        'package' => 'Media',
        'configure' => 'admin/config/media/imce',
        'version' => '7.x-1.9',
        'project' => 'imce',
        'datestamp' => '1400275428',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'imce_filefield' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/imce_filefield/imce_filefield.module',
      'name' => 'imce_filefield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE for File Field',
        'description' => 'Allows users to select files from IMCE File Browser for file fields.',
        'dependencies' => 
        array (
          0 => 'file',
          1 => 'imce',
        ),
        'package' => 'Media',
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'imce_filefield',
        'datestamp' => '1428520988',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'inline_entity_form' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/inline_entity_form/inline_entity_form.module',
      'name' => 'inline_entity_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Inline Entity Form',
        'description' => 'Provides a widget for inline management (creation, modification, removal) of referenced entities. ',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'system (>7.14)',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/entity.inline_entity_form.inc',
          1 => 'includes/node.inline_entity_form.inc',
          2 => 'includes/taxonomy_term.inline_entity_form.inc',
          3 => 'includes/commerce_product.inline_entity_form.inc',
          4 => 'includes/commerce_line_item.inline_entity_form.inc',
        ),
        'version' => '7.x-1.6',
        'project' => 'inline_entity_form',
        'datestamp' => '1434553381',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'inline_messages' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/inline_messages/inline_messages.module',
      'name' => 'inline_messages',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Inline Messages',
        'description' => 'Displays form messages (error/status/warning) inline',
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/inline_messages',
        'files' => 
        array (
          0 => 'inline_messages.module',
          1 => 'inline_messages.install',
          2 => 'inline_messages.admin.inc',
          3 => 'js/jquery.scrollTo-1.4.2-min.js',
          4 => 'js/inline_messages.js',
        ),
        'version' => '7.x-1.0',
        'project' => 'inline_messages',
        'datestamp' => '1289421345',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'job_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/job_scheduler/job_scheduler.module',
      'name' => 'job_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Job Scheduler',
        'description' => 'Scheduler API',
        'files' => 
        array (
          0 => 'job_scheduler.module',
          1 => 'job_scheduler.install',
          2 => 'JobScheduler.inc',
          3 => 'JobSchedulerCronTab.inc',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'version' => '7.x-2.0-alpha3',
        'project' => 'job_scheduler',
        'datestamp' => '1336466457',
        'dependencies' => 
        array (
        ),
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'job_scheduler_trigger' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
      'name' => 'job_scheduler_trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Job Scheduler Trigger',
        'description' => 'Creates scheduler triggers that fire up at certain days, times',
        'core' => '7.x',
        'php' => '5.2',
        'dependencies' => 
        array (
          0 => 'job_scheduler',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'job_scheduler',
        'datestamp' => '1336466457',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'jquery_ui' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/jquery_ui/jquery_ui.module',
      'name' => 'jquery_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery UI',
        'description' => 'Provides the jQuery UI plug-in to other Drupal modules.',
        'package' => 'User interface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'jquery_ui.module',
          1 => 'jquery_ui.install',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'jquery_ui',
        'datestamp' => '1380584061',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'jquery_update' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Update jQuery and jQuery UI to a more recent version.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/development/jquery_update',
        'version' => '7.x-3.0-alpha2',
        'project' => 'jquery_update',
        'datestamp' => '1432926553',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha2',
    ),
    'lang_dropdown' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/lang_dropdown/lang_dropdown.module',
      'name' => 'lang_dropdown',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Language Switcher Dropdown',
        'package' => 'Multilingual',
        'description' => 'Provides a dropdown select to switch between available languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'configure' => 'admin/structure/block',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'lang_dropdown.module',
          1 => 'lang_dropdown.install',
        ),
        'version' => '7.x-2.5',
        'project' => 'lang_dropdown',
        'datestamp' => '1387127905',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'lang_dropdown_hideout' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/lang_dropdown/lang_dropdown_hideout/lang_dropdown_hideout.module',
      'name' => 'lang_dropdown_hideout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Language Switcher Dropdown Hideout',
        'package' => 'Multilingual',
        'description' => 'Allow to hide specific languages from the switcher for certain roles.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'configure' => 'admin/structure/block',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'lang_dropdown_hideout.module',
          1 => 'lang_dropdown_hideout.install',
        ),
        'version' => '7.x-2.5',
        'project' => 'lang_dropdown',
        'datestamp' => '1387127905',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'leaflet' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/leaflet/leaflet.module',
      'name' => 'leaflet',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Leaflet',
        'description' => 'Integration with the Leaflet map scripting library.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'libraries',
        ),
        'files' => 
        array (
          0 => 'leaflet.formatters.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'leaflet',
        'datestamp' => '1390350505',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'leaflet_demo' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/leaflet_more_maps/leaflet_demo/leaflet_demo.module',
      'name' => 'leaflet_demo',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Leaflet Demo',
        'description' => 'Creates a block showcasing all Leaflet-powered maps available on your system. Optionally use with "IP Geolocation Views and Maps" to center the maps on your current location.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'leaflet',
        ),
        'version' => '7.x-1.11',
        'project' => 'leaflet_more_maps',
        'datestamp' => '1426476800',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'leaflet_more_maps' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/leaflet_more_maps/leaflet_more_maps.module',
      'name' => 'leaflet_more_maps',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Leaflet More Maps',
        'description' => 'Adds a swag of map styles to Leaflet, e.g Thunderforest, Esri, MapBox',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'leaflet',
        ),
        'config' => 'admin/config/system/leaflet_more_maps',
        'version' => '7.x-1.11',
        'project' => 'leaflet_more_maps',
        'datestamp' => '1426476800',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'leaflet_views' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/leaflet/leaflet_views/leaflet_views.module',
      'name' => 'leaflet_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Leaflet views',
        'description' => 'Views integration for the Leaflet module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'leaflet',
          1 => 'geofield',
          2 => 'views',
          3 => 'entity',
        ),
        'files' => 
        array (
          0 => 'leaflet_views.views.inc',
          1 => 'leaflet_views_plugin_style.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'leaflet',
        'datestamp' => '1390350505',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'libraries' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version-dependent and shared usage of external libraries.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'system (>=7.11)',
        ),
        'files' => 
        array (
          0 => 'tests/libraries.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'libraries',
        'datestamp' => '1391965716',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'link' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/link/link.module',
      'name' => 'link',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Link',
        'description' => 'Defines simple link field types.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'link.module',
          1 => 'link.migrate.inc',
          2 => 'tests/link.test',
          3 => 'tests/link.attribute.test',
          4 => 'tests/link.crud.test',
          5 => 'tests/link.crud_browser.test',
          6 => 'tests/link.token.test',
          7 => 'tests/link.validate.test',
          8 => 'views/link_views_handler_argument_target.inc',
          9 => 'views/link_views_handler_filter_protocol.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'link',
        'datestamp' => '1413924830',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'linkit' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/linkit/linkit.module',
      'name' => 'linkit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Linkit',
        'description' => 'Provides an easy interface for inserting links.',
        'core' => '7.x',
        'configure' => 'admin/config/content/linkit',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'entity',
        ),
        'files' => 
        array (
          0 => 'includes/profile.class.php',
          1 => 'includes/search_plugin.class.php',
          2 => 'plugins/linkit_search/entity.class.php',
          3 => 'plugins/linkit_search/file.class.php',
          4 => 'plugins/linkit_search/node.class.php',
          5 => 'plugins/linkit_search/taxonomy_term.class.php',
          6 => 'plugins/linkit_search/user.class.php',
          7 => 'test/linkit.test',
          8 => 'test/linkit_profile.test',
          9 => 'test/linkit_search_plugin.test',
          10 => 'test/linkit_search_plugin_node.test',
          11 => 'test/linkit_search_plugin_user.test',
          12 => 'test/linkit_search_plugin_taxonomy_term.test',
          13 => 'test/linkit_field.test',
        ),
        'version' => '7.x-3.3',
        'project' => 'linkit',
        'datestamp' => '1420580858',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'mailsystem' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/mailsystem/mailsystem.module',
      'name' => 'mailsystem',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'package' => 'Mail',
        'name' => 'Mail System',
        'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
        'php' => '5.0',
        'core' => '7.x',
        'configure' => 'admin/config/system/mailsystem',
        'dependencies' => 
        array (
          0 => 'filter',
        ),
        'files' => 
        array (
          0 => 'MailsystemDelegateMailSystem.inc',
        ),
        'version' => '3.x-dev-dev',
        'project' => 'mailsystem',
        'datestamp' => '1405814219',
      ),
      'version' => '3.x-dev-dev',
    ),
    'manualcrop' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/manualcrop/manualcrop.module',
      'name' => 'manualcrop',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Manual Crop',
        'description' => 'Lets you manually crop an image based upon the image style effects.',
        'package' => 'Image',
        'core' => '7.x',
        'configure' => 'admin/config/media/manualcrop',
        'dependencies' => 
        array (
          0 => 'image (>=7.8)',
          1 => 'libraries (>=2.1)',
        ),
        'files' => 
        array (
          0 => 'includes/views/manualcrop.views.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'manualcrop',
        'datestamp' => '1428756185',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'masquerade' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/masquerade/masquerade.module',
      'name' => 'masquerade',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Masquerade',
        'description' => 'This module allows permitted users to masquerade as other users.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'masquerade.test',
        ),
        'configure' => 'admin/config/people/masquerade',
        'version' => '7.x-1.0-rc7',
        'project' => 'masquerade',
        'datestamp' => '1394333639',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc7',
    ),
    'media' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/media/media.module',
      'name' => 'media',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media',
        'description' => 'Provides the core Media API',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file_entity',
          1 => 'image',
          2 => 'views',
        ),
        'test_dependencies' => 
        array (
          0 => 'token',
        ),
        'files' => 
        array (
          0 => 'includes/MediaReadOnlyStreamWrapper.inc',
          1 => 'includes/MediaBrowserPluginInterface.inc',
          2 => 'includes/MediaBrowserPlugin.inc',
          3 => 'includes/MediaBrowserUpload.inc',
          4 => 'includes/MediaBrowserView.inc',
          5 => 'includes/MediaEntityTranslationHandler.inc',
          6 => 'includes/media_views_plugin_display_media_browser.inc',
          7 => 'includes/media_views_plugin_style_media_browser.inc',
          8 => 'tests/media.test',
        ),
        'configure' => 'admin/config/media/browser',
        'version' => '7.x-2.0-beta1+8-dev',
        'project' => 'media',
        'datestamp' => '1439999344',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1+8-dev',
    ),
    'mediafield' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/media/modules/mediafield/mediafield.module',
      'name' => 'mediafield',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media Field',
        'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media',
        ),
        'version' => '7.x-2.0-beta1+8-dev',
        'project' => 'media',
        'datestamp' => '1439999344',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1+8-dev',
    ),
    'media_bulk_upload' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/media/modules/media_bulk_upload/media_bulk_upload.module',
      'name' => 'media_bulk_upload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media Bulk Upload',
        'description' => 'Adds support for uploading multiple files at a time.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media',
          1 => 'multiform',
          2 => 'plupload',
        ),
        'test_dependencies' => 
        array (
          0 => 'multiform',
          1 => 'plupload',
        ),
        'files' => 
        array (
          0 => 'includes/MediaBrowserBulkUpload.inc',
          1 => 'tests/media_bulk_upload.test',
        ),
        'version' => '7.x-2.0-beta1+8-dev',
        'project' => 'media',
        'datestamp' => '1439999344',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1+8-dev',
    ),
    'media_internet' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/media/modules/media_internet/media_internet.module',
      'name' => 'media_internet',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media Internet Sources',
        'description' => 'Provides an API for accessing media on various internet services',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media',
        ),
        'files' => 
        array (
          0 => 'includes/MediaBrowserInternet.inc',
          1 => 'includes/MediaInternetBaseHandler.inc',
          2 => 'includes/MediaInternetFileHandler.inc',
          3 => 'includes/MediaInternetNoHandlerException.inc',
          4 => 'includes/MediaInternetValidationException.inc',
          5 => 'tests/media_internet.test',
        ),
        'version' => '7.x-2.0-beta1+8-dev',
        'project' => 'media',
        'datestamp' => '1439999344',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1+8-dev',
    ),
    'media_wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/media/modules/media_wysiwyg/media_wysiwyg.module',
      'name' => 'media_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media WYSIWYG',
        'description' => 'Adds support for embedding media using client-side WYSIWYG editors.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media',
        ),
        'test_dependencies' => 
        array (
          0 => 'ckeditor',
          1 => 'token',
          2 => 'wysiwyg',
        ),
        'files' => 
        array (
          0 => 'media_wysiwyg.test',
          1 => 'tests/media_wysiwyg.file_usage.test',
          2 => 'tests/media_wysiwyg.macro.test',
        ),
        'configure' => 'admin/config/media/browser',
        'version' => '7.x-2.0-beta1+8-dev',
        'project' => 'media',
        'datestamp' => '1439999344',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1+8-dev',
    ),
    'media_wysiwyg_view_mode' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/media/modules/media_wysiwyg_view_mode/media_wysiwyg_view_mode.module',
      'name' => 'media_wysiwyg_view_mode',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Media WYSIWYG View Mode',
        'description' => 'Enables files inside of the WYSIWYG editor to be displayed using a separate view mode.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'media_wysiwyg',
        ),
        'files' => 
        array (
          0 => 'media_wysiwyg_view_mode.test',
        ),
        'version' => '7.x-2.0-beta1+8-dev',
        'project' => 'media',
        'datestamp' => '1439999344',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-beta1+8-dev',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'menu_attributes' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/menu_attributes/menu_attributes.module',
      'name' => 'menu_attributes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu attributes',
        'description' => 'Allows administrators to specify custom attributes for menu items.',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/structure/menu/settings',
        'files' => 
        array (
          0 => 'menu_attributes.test',
        ),
        'version' => '7.x-1.0-rc3',
        'project' => 'menu_attributes',
        'datestamp' => '1413756231',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc3',
    ),
    'metatag' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag.module',
      'name' => 'metatag',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag',
        'description' => 'Adds support and an API to implement meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'system (>=7.28)',
          1 => 'ctools',
          2 => 'token',
        ),
        'configure' => 'admin/config/search/metatags',
        'files' => 
        array (
          0 => 'metatag.inc',
          1 => 'metatag.migrate.inc',
          2 => 'metatag.test',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_app_links' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_app_links/metatag_app_links.module',
      'name' => 'metatag_app_links',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: App Links',
        'description' => 'Provides support for applinks.org meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_context' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_context/metatag_context.module',
      'name' => 'metatag_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Context',
        'description' => 'Assigned Metatag using Context definitions, allowing them to be assigned by path and other criteria.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'context',
          1 => 'metatag',
        ),
        'files' => 
        array (
          0 => 'metatag_context.test',
        ),
        'configure' => 'admin/config/search/metatags/context',
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_dc' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_dc/metatag_dc.module',
      'name' => 'metatag_dc',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Dublin Core',
        'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_devel' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_devel/metatag_devel.module',
      'name' => 'metatag_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag:Devel',
        'description' => 'Provides development / debugging functionality for the Metatag module. Integrates with Devel Generate.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_facebook' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_facebook/metatag_facebook.module',
      'name' => 'metatag_facebook',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Facebook',
        'description' => 'Provides support for Facebook\'s custom meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_google_plus' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_google_plus/metatag_google_plus.module',
      'name' => 'metatag_google_plus',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Google+',
        'description' => 'Provides support for Google+ \'itemscope\' meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'files' => 
        array (
          0 => 'metatag_google_plus.inc',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_opengraph' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_opengraph/metatag_opengraph.module',
      'name' => 'metatag_opengraph',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag:OpenGraph',
        'description' => 'Provides support for Open Graph Protocol meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_panels' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_panels/metatag_panels.module',
      'name' => 'metatag_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Panels',
        'description' => 'Provides Metatag integration within the Panels interface.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'metatag',
          2 => 'panels',
          3 => 'token',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_twitter_cards' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
      'name' => 'metatag_twitter_cards',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Twitter Cards',
        'description' => 'Provides support for Twitter\'s Card meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_verification' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_verification/metatag_verification.module',
      'name' => 'metatag_verification',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Verification',
        'description' => 'Various meta tags for verifying ownership of a site.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'metatag_views' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/metatag/metatag_views/metatag_views.module',
      'name' => 'metatag_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Views',
        'description' => 'Provides Metatag integration within the Views interface.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'metatag_views_plugin_display_extender_metatags.inc',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'metatag',
        'datestamp' => '1429022312',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'migrate' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/migrate/migrate.module',
      'name' => 'migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Migrate',
        'description' => 'Import content from external sources',
        'package' => 'Migration',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/base.inc',
          1 => 'includes/field_mapping.inc',
          2 => 'includes/migration.inc',
          3 => 'includes/destination.inc',
          4 => 'includes/exception.inc',
          5 => 'includes/group.inc',
          6 => 'includes/handler.inc',
          7 => 'includes/map.inc',
          8 => 'includes/source.inc',
          9 => 'includes/team.inc',
          10 => 'migrate.mail.inc',
          11 => 'plugins/destinations/block_custom.inc',
          12 => 'plugins/destinations/entity.inc',
          13 => 'plugins/destinations/term.inc',
          14 => 'plugins/destinations/user.inc',
          15 => 'plugins/destinations/node.inc',
          16 => 'plugins/destinations/comment.inc',
          17 => 'plugins/destinations/file.inc',
          18 => 'plugins/destinations/path.inc',
          19 => 'plugins/destinations/fields.inc',
          20 => 'plugins/destinations/poll.inc',
          21 => 'plugins/destinations/table.inc',
          22 => 'plugins/destinations/table_copy.inc',
          23 => 'plugins/destinations/menu.inc',
          24 => 'plugins/destinations/menu_links.inc',
          25 => 'plugins/destinations/statistics.inc',
          26 => 'plugins/destinations/variable.inc',
          27 => 'plugins/sources/csv.inc',
          28 => 'plugins/sources/db2.inc',
          29 => 'plugins/sources/files.inc',
          30 => 'plugins/sources/json.inc',
          31 => 'plugins/sources/list.inc',
          32 => 'plugins/sources/mongodb.inc',
          33 => 'plugins/sources/multiitems.inc',
          34 => 'plugins/sources/sql.inc',
          35 => 'plugins/sources/sqlmap.inc',
          36 => 'plugins/sources/mssql.inc',
          37 => 'plugins/sources/oracle.inc',
          38 => 'plugins/sources/spreadsheet.inc',
          39 => 'plugins/sources/xml.inc',
          40 => 'tests/import/options.test',
          41 => 'tests/plugins/destinations/comment.test',
          42 => 'tests/plugins/destinations/node.test',
          43 => 'tests/plugins/destinations/table.test',
          44 => 'tests/plugins/destinations/term.test',
          45 => 'tests/plugins/destinations/user.test',
          46 => 'tests/plugins/sources/xml.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'migrate',
        'datestamp' => '1435760949',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'migrate_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/migrate/migrate_example/migrate_example.module',
      'name' => 'migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Migrate Example',
        'description' => 'Example migration data.',
        'package' => 'Migration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'image',
          2 => 'comment',
          3 => 'migrate',
          4 => 'list',
          5 => 'number',
        ),
        'files' => 
        array (
          0 => 'beer.inc',
          1 => 'wine.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'migrate',
        'datestamp' => '1435760949',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'migrate_example_baseball' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/migrate/migrate_example_baseball/migrate_example_baseball.module',
      'name' => 'migrate_example_baseball',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'migrate',
          2 => 'number',
        ),
        'description' => 'Import baseball box scores.',
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-migrate_example_baseball-body',
            1 => 'node-migrate_example_baseball-field_attendance',
            2 => 'node-migrate_example_baseball-field_duration',
            3 => 'node-migrate_example_baseball-field_home_batters',
            4 => 'node-migrate_example_baseball-field_home_game_number',
            5 => 'node-migrate_example_baseball-field_home_pitcher',
            6 => 'node-migrate_example_baseball-field_home_score',
            7 => 'node-migrate_example_baseball-field_home_team',
            8 => 'node-migrate_example_baseball-field_outs',
            9 => 'node-migrate_example_baseball-field_park',
            10 => 'node-migrate_example_baseball-field_start_date',
            11 => 'node-migrate_example_baseball-field_visiting_batters',
            12 => 'node-migrate_example_baseball-field_visiting_pitcher',
            13 => 'node-migrate_example_baseball-field_visiting_score',
            14 => 'node-migrate_example_baseball-field_visiting_team',
          ),
          'node' => 
          array (
            0 => 'migrate_example_baseball',
          ),
        ),
        'files' => 
        array (
          0 => 'migrate_example_baseball.migrate.inc',
        ),
        'name' => 'migrate_example_baseball',
        'package' => 'Migration',
        'php' => '5.2.4',
        'version' => '7.x-2.8',
        'project' => 'migrate',
        'datestamp' => '1435760949',
      ),
      'version' => '7.x-2.8',
    ),
    'migrate_example_oracle' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/migrate/migrate_example/migrate_example_oracle/migrate_example_oracle.module',
      'name' => 'migrate_example_oracle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'image',
          2 => 'migrate',
        ),
        'description' => 'Content type supporting example of Oracle migration',
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-migrate_example_oracle-body',
            1 => 'node-migrate_example_oracle-field_mainimage',
          ),
          'node' => 
          array (
            0 => 'migrate_example_oracle',
          ),
        ),
        'files' => 
        array (
          0 => 'migrate_example_oracle.migrate.inc',
        ),
        'name' => 'Migrate example - Oracle',
        'package' => 'Migration',
        'project' => 'migrate',
        'version' => '7.x-2.8',
        'datestamp' => '1435760949',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'migrate_ui' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/migrate/migrate_ui/migrate_ui.module',
      'name' => 'migrate_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Migrate UI',
        'description' => 'UI for managing migration processes',
        'package' => 'Migration',
        'configure' => 'admin/content/migrate/configure',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'migrate',
        ),
        'files' => 
        array (
          0 => 'migrate_ui.wizard.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'migrate',
        'datestamp' => '1435760949',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'mimemail' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/mimemail/mimemail.module',
      'name' => 'mimemail',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mime Mail',
        'description' => 'Send MIME-encoded emails with embedded images and attachments.',
        'dependencies' => 
        array (
          0 => 'mailsystem',
          1 => 'system (>=7.24)',
        ),
        'package' => 'Mail',
        'core' => '7.x',
        'configure' => 'admin/config/system/mimemail',
        'files' => 
        array (
          0 => 'includes/mimemail.mail.inc',
          1 => 'tests/mimemail.test',
          2 => 'tests/mimemail_rules.test',
          3 => 'tests/mimemail_compress.test',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'mimemail',
        'datestamp' => '1394018015',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta3',
    ),
    'mimemail_action' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/mimemail/modules/mimemail_action/mimemail_action.module',
      'name' => 'mimemail_action',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mime Mail Action',
        'description' => 'Provide actions for Mime Mail.',
        'package' => 'Mail',
        'dependencies' => 
        array (
          0 => 'mimemail',
          1 => 'trigger',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-beta3',
        'project' => 'mimemail',
        'datestamp' => '1394018015',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta3',
    ),
    'mimemail_compress' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/mimemail/modules/mimemail_compress/mimemail_compress.module',
      'name' => 'mimemail_compress',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mime Mail CSS Compressor',
        'description' => 'Converts CSS to inline styles in an HTML message. (Requires the PHP DOM extension.)',
        'package' => 'Mail',
        'dependencies' => 
        array (
          0 => 'mimemail',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'mimemail_compress.inc',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'mimemail',
        'datestamp' => '1394018015',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta3',
    ),
    'mixpanel' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/mixpanel/mixpanel.module',
      'name' => 'mixpanel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mixpanel',
        'description' => 'Provides integration with the Mixpanel realtime analytics service.',
        'package' => 'Mixpanel',
        'core' => '7.x',
        'configure' => 'admin/config/services/mixpanel',
        'version' => '7.x-1.2',
        'project' => 'mixpanel',
        'datestamp' => '1397304257',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'mixpanel_defaults' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/mixpanel/modules/mixpanel_defaults/mixpanel_defaults.module',
      'name' => 'mixpanel_defaults',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mixpanel defaults',
        'description' => 'Sends some basic Drupal events to Mixpanel.',
        'package' => 'Mixpanel',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'mixpanel',
        ),
        'version' => '7.x-1.2',
        'project' => 'mixpanel',
        'datestamp' => '1397304257',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'mixpanel_rules' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/mixpanel/modules/mixpanel_rules/mixpanel_rules.module',
      'name' => 'mixpanel_rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mixpanel rules',
        'description' => 'Allows you to define what gets tracked by Mixpanel via the Rules module.',
        'package' => 'Mixpanel',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'mixpanel',
          1 => 'rules',
        ),
        'version' => '7.x-1.2',
        'project' => 'mixpanel',
        'datestamp' => '1397304257',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'module_filter' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/module_filter/module_filter.module',
      'name' => 'module_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module filter',
        'description' => 'Filter the modules list.',
        'core' => '7.x',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'module_filter.install',
          1 => 'module_filter.js',
          2 => 'module_filter.module',
          3 => 'module_filter.admin.inc',
          4 => 'module_filter.theme.inc',
          5 => 'css/module_filter.css',
          6 => 'css/module_filter_tab.css',
          7 => 'js/module_filter.js',
          8 => 'js/module_filter_tab.js',
        ),
        'configure' => 'admin/config/user-interface/modulefilter',
        'version' => '7.x-2.0',
        'project' => 'module_filter',
        'datestamp' => '1424631189',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7015',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'office_hours' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/office_hours/office_hours.module',
      'name' => 'office_hours',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Office hours',
        'description' => 'Defines a \'weekly office hours\' field type, allowing you to specify when an Entity is open or closed.',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/office_hours_handler_filter_open.inc',
          1 => 'includes/office_hours_handler_filter_hours.inc',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'office_hours.css',
          ),
        ),
        'version' => '7.x-1.4',
        'project' => 'office_hours',
        'datestamp' => '1420021687',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.39',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'panelizer' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/panelizer/panelizer.module',
      'name' => 'panelizer',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7115',
      'weight' => '21',
      'info' => 
      array (
        'name' => 'Panelizer',
        'description' => 'Allow any node type to have custom panel displays, similar to the panel node type.',
        'package' => 'Panels',
        'dependencies' => 
        array (
          0 => 'panels',
          1 => 'ctools',
          2 => 'page_manager',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/content/panelizer',
        'files' => 
        array (
          0 => 'plugins/views/panelizer_handler_field_link.inc',
          1 => 'plugins/views/panelizer_handler_panelizer_status.inc',
          2 => 'plugins/views/panelizer_handler_filter_panelizer_status.inc',
          3 => 'plugins/views/panelizer_plugin_row_panelizer_node_view.inc',
          4 => 'plugins/entity/PanelizerEntityDefault.class.php',
        ),
        'version' => '3.x-dev-dev',
        'project' => 'panelizer',
        'datestamp' => '1415298142',
        'php' => '5.2.4',
      ),
      'version' => '3.x-dev-dev',
    ),
    'panels' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/panels/panels.module',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7303',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels',
        'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
        'core' => '7.x',
        'package' => 'Panels',
        'version' => '7.x-3.5',
        'configure' => 'admin/structure/panels',
        'dependencies' => 
        array (
          0 => 'ctools (>1.5)',
        ),
        'files' => 
        array (
          0 => 'panels.module',
          1 => 'includes/common.inc',
          2 => 'includes/legacy.inc',
          3 => 'includes/plugins.inc',
          4 => 'plugins/views/panels_views_plugin_row_fields.inc',
        ),
        'project' => 'panels',
        'datestamp' => '1422472985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.5',
    ),
    'panels_content_cache' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/panels_content_cache/panels_content_cache.module',
      'name' => 'panels_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels Content Cache',
        'core' => '7.x',
        'package' => 'Panels',
        'description' => 'A content based caching plugin for panels. Allows panel caches to be expired based on content creation / updates.',
        'dependencies' => 
        array (
          0 => 'panels (>=3.4)',
        ),
        'version' => '7.x-1.2',
        'project' => 'panels_content_cache',
        'datestamp' => '1419347945',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'panels_everywhere' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/panels_everywhere/panels_everywhere.module',
      'name' => 'panels_everywhere',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels everywhere',
        'description' => 'Allow your site to use Panels instead of Blocks to lay out your pages.',
        'package' => 'Panels',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'panels (>=3.4)',
          1 => 'ctools (>=1.4)',
          2 => 'page_manager',
        ),
        'version' => '7.x-1.0-rc2',
        'project' => 'panels_everywhere',
        'datestamp' => '1421524381',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc2',
    ),
    'panels_ipe' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/panels/panels_ipe/panels_ipe.module',
      'name' => 'panels_ipe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panels In-Place Editor',
        'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
        'package' => 'Panels',
        'version' => '7.x-3.5',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'configure' => 'admin/structure/panels',
        'files' => 
        array (
          0 => 'panels_ipe.module',
        ),
        'project' => 'panels',
        'datestamp' => '1422472985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.5',
    ),
    'panels_mini' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/panels/panels_mini/panels_mini.module',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mini panels',
        'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
        'package' => 'Panels',
        'version' => '7.x-3.5',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/export_ui/panels_mini_ui.class.php',
        ),
        'project' => 'panels',
        'datestamp' => '1422472985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.5',
    ),
    'panels_node' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/panels/panels_node/panels_node.module',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Panel nodes',
        'description' => 'Create nodes that are divided into areas with selectable content.',
        'package' => 'Panels',
        'version' => '7.x-3.5',
        'dependencies' => 
        array (
          0 => 'panels',
        ),
        'configure' => 'admin/structure/panels',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'panels_node.module',
        ),
        'project' => 'panels',
        'datestamp' => '1422472985',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.5',
    ),
    'paragraphs' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/paragraphs/paragraphs.module',
      'name' => 'paragraphs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Paragraphs',
        'description' => 'Paragraphs module to control your content flow.',
        'core' => '7.x',
        'package' => 'Paragraphs',
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'files' => 
        array (
          0 => 'ParagraphsItemEntity.inc',
          1 => 'ParagraphsItemMetadataController.inc',
          2 => 'migrate/destinations/MigrateDestinationParagraphsItem.inc',
          3 => 'migrate/fields/ParagraphsMigrateParagraphsFieldHandler.inc',
          4 => 'views/paragraphs_handler_relationship.inc',
        ),
        'version' => '7.x-1.0-beta6',
        'project' => 'paragraphs',
        'datestamp' => '1423671198',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta6',
    ),
    'paragraphs_bundle_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/paragraphs/modules/paragraphs_bundle_permissions/paragraphs_bundle_permissions.module',
      'name' => 'paragraphs_bundle_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Paragraphs Bundle Permissions',
        'description' => 'Add view / create / update / delete permissions for all paragraph bundles.',
        'core' => '7.x',
        'package' => 'Paragraphs',
        'dependencies' => 
        array (
          0 => 'paragraphs',
        ),
        'version' => '7.x-1.0-beta6',
        'project' => 'paragraphs',
        'datestamp' => '1423671198',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta6',
    ),
    'paragraphs_i18n' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/paragraphs/modules/paragraphs_i18n/paragraphs_i18n.module',
      'name' => 'paragraphs_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Paragraphs - Internationalization',
        'description' => 'Allow paragraph bundles to be duplicate for translation.',
        'core' => '7.x',
        'package' => 'Paragraphs',
        'dependencies' => 
        array (
          0 => 'paragraphs',
          1 => 'replicate',
          2 => 'replicate_paragraphs',
        ),
        'version' => '7.x-1.0-beta6',
        'project' => 'paragraphs',
        'datestamp' => '1423671198',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta6',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'pathauto' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'pathauto.test',
        ),
        'configure' => 'admin/config/search/path/patterns',
        'recommends' => 
        array (
          0 => 'redirect',
        ),
        'version' => '7.x-1.2',
        'project' => 'pathauto',
        'datestamp' => '1344525185',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'phone' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/phone/phone.module',
      'name' => 'phone',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Phone',
        'description' => 'The phone module allows administrators to define a field type for phone numbers.',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'phone.migrate.inc',
          1 => 'tests/phone.au.test',
          2 => 'tests/phone.be.test',
          3 => 'tests/phone.br.test',
          4 => 'tests/phone.ca.test',
          5 => 'tests/phone.ch.test',
          6 => 'tests/phone.cl.test',
          7 => 'tests/phone.cn.test',
          8 => 'tests/phone.cr.test',
          9 => 'tests/phone.cs.test',
          10 => 'tests/phone.eg.test',
          11 => 'tests/phone.es.test',
          12 => 'tests/phone.fr.test',
          13 => 'tests/phone.hu.test',
          14 => 'tests/phone.il.test',
          15 => 'tests/phone.int.test',
          16 => 'tests/phone.it.test',
          17 => 'tests/phone.jo.test',
          18 => 'tests/phone.nl.test',
          19 => 'tests/phone.nz.test',
          20 => 'tests/phone.pa.test',
          21 => 'tests/phone.ph.test',
          22 => 'tests/phone.pk.test',
          23 => 'tests/phone.pl.test',
          24 => 'tests/phone.ru.test',
          25 => 'tests/phone.se.test',
          26 => 'tests/phone.sg.test',
          27 => 'tests/phone.ua.test',
          28 => 'tests/phone.uk.test',
          29 => 'tests/phone.za.test',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-beta1',
        'project' => 'phone',
        'datestamp' => '1389732224',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta1',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'profile2' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/profile2/profile2.module',
      'name' => 'profile2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile2',
        'description' => 'Supports configurable user profiles.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'profile2.admin.inc',
          1 => 'profile2.info.inc',
          2 => 'profile2.test',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'configure' => 'admin/structure/profiles',
        'version' => '7.x-1.3',
        'project' => 'profile2',
        'datestamp' => '1356482021',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'profile2_i18n' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/profile2/contrib/profile2_i18n.module',
      'name' => 'profile2_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile2 translation',
        'description' => 'Translate profile2 types.',
        'dependencies' => 
        array (
          0 => 'profile2',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'version' => '7.x-1.3',
        'project' => 'profile2',
        'datestamp' => '1356482021',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'profile2_og_access' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/profile2/contrib/profile2_og_access.module',
      'name' => 'profile2_og_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile2 group access',
        'description' => 'Adds Organic groups permissions to control profile access on the group level.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'profile2',
          1 => 'og',
        ),
        'package' => 'Organic groups',
        'version' => '7.x-1.3',
        'project' => 'profile2',
        'datestamp' => '1356482021',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'profile2_page' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/profile2/contrib/profile2_page.module',
      'name' => 'profile2_page',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile2 pages',
        'description' => 'Adds separate pages for viewing and editing profiles.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'profile2',
        ),
        'version' => '7.x-1.3',
        'project' => 'profile2',
        'datestamp' => '1356482021',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'property_validation' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/field_validation/property_validation/property_validation.module',
      'name' => 'property_validation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Property Validation',
        'description' => 'Add validation rules to properties.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'ctools',
          2 => 'entity',
        ),
        'files' => 
        array (
          0 => 'property_validation_validator.inc',
        ),
        'version' => '2.x-dev-dev',
        'project' => 'field_validation',
        'datestamp' => '1413029143',
        'php' => '5.2.4',
      ),
      'version' => '2.x-dev-dev',
    ),
    'quicktabs' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/quicktabs/quicktabs.module',
      'name' => 'quicktabs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Quicktabs',
        'description' => 'Render content with tabs and other display styles',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'quicktabs.module',
          1 => 'quicktabs.classes.inc',
          2 => 'includes/quicktabs_style_plugin.inc',
          3 => 'tests/quicktabs.test',
        ),
        'configure' => 'admin/structure/quicktabs',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-3.6',
        'project' => 'quicktabs',
        'datestamp' => '1380731929',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'quicktabs_tabstyles' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/quicktabs/quicktabs_tabstyles/quicktabs_tabstyles.module',
      'name' => 'quicktabs_tabstyles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Quicktabs Styles',
        'description' => 'Adds predefined tab styles to choose from per Quicktabs instance.',
        'core' => '7.x',
        'configure' => 'admin/structure/quicktabs/styles',
        'dependencies' => 
        array (
          0 => 'quicktabs',
        ),
        'version' => '7.x-3.6',
        'project' => 'quicktabs',
        'datestamp' => '1380731929',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'rabbit_hole' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/rabbit_hole/rabbit_hole.module',
      'name' => 'rabbit_hole',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rabbit Hole',
        'description' => 'Basic functionality that is shared among the different Rabbit Hole modules.',
        'core' => '7.x',
        'version' => '7.x-2.23',
        'project' => 'rabbit_hole',
        'datestamp' => '1405026229',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.23',
    ),
    'range' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/range/range.module',
      'name' => 'range',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Numeric range',
        'description' => 'Provides numeric range field.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/range.unit.test',
          1 => 'views/range_handler_filter_numeric_range.inc',
          2 => 'views/range_handler_argument_numeric_range.inc',
          3 => 'migrate/destinations/range.inc',
        ),
        'version' => '7.x-1.3',
        'project' => 'range',
        'datestamp' => '1423651988',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'range_content_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/range/modules/range_content_migrate/range_content_migrate.module',
      'name' => 'range_content_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Range Content Migrate',
        'description' => 'Migrate range fields and field data from CCK D6 format to the D7 field format. Required to migrate data, can be disabled once all fields have been migrated.',
        'package' => 'CCK',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'content_migrate',
          1 => 'range',
        ),
        'version' => '7.x-1.3',
        'project' => 'range',
        'datestamp' => '1423651988',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'redirect' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/redirect/redirect.module',
      'name' => 'redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Redirect',
        'description' => 'Allows users to redirect from old URLs to new URLs.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'redirect.controller.inc',
          1 => 'redirect.test',
          2 => 'views/redirect.views.inc',
          3 => 'views/redirect_handler_filter_redirect_type.inc',
          4 => 'views/redirect_handler_field_redirect_source.inc',
          5 => 'views/redirect_handler_field_redirect_redirect.inc',
          6 => 'views/redirect_handler_field_redirect_operations.inc',
          7 => 'views/redirect_handler_field_redirect_link_edit.inc',
          8 => 'views/redirect_handler_field_redirect_link_delete.inc',
        ),
        'configure' => 'admin/config/search/redirect/settings',
        'version' => '7.x-1.0-rc2',
        'project' => 'redirect',
        'datestamp' => '1435607289',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc2',
    ),
    'rest_server' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/services/servers/rest_server/rest_server.module',
      'name' => 'rest_server',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'REST Server',
        'description' => 'Provides an REST server.',
        'package' => 'Services - servers',
        'files' => 
        array (
          0 => 'rest_server.module',
          1 => 'includes/RESTServer.inc',
          2 => 'includes/ServicesContentTypeNegotiator.inc',
          3 => 'includes/ServicesRESTServerFactory.inc',
          4 => 'includes/ServicesContext.inc',
          5 => 'includes/ServicesParser.inc',
          6 => 'includes/ServicesFormatter.inc',
          7 => 'tests/ServicesRESTServerTests.test',
          8 => 'tests/rest_server_mock_classes.inc',
          9 => 'lib/bencode.php',
          10 => 'lib/mimeparse.php',
        ),
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'libraries (>=2.x)',
        ),
        'core' => '7.x',
        'version' => '7.x-3.12',
        'project' => 'services',
        'datestamp' => '1429118524',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.12',
    ),
    'rh_file' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/rabbit_hole/modules/rh_file/rh_file.module',
      'name' => 'rh_file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rabbit Hole files',
        'description' => 'Adds Rabbit Hole functionality for files.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rabbit_hole',
          1 => 'file_entity',
        ),
        'version' => '7.x-2.23',
        'project' => 'rabbit_hole',
        'datestamp' => '1405026229',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.23',
    ),
    'rh_node' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/rabbit_hole/modules/rh_node/rh_node.module',
      'name' => 'rh_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rabbit Hole nodes',
        'description' => 'Adds Rabbit Hole functionality for nodes.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rabbit_hole',
          1 => 'node',
        ),
        'version' => '7.x-2.23',
        'project' => 'rabbit_hole',
        'datestamp' => '1405026229',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.23',
    ),
    'rh_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/rabbit_hole/modules/rh_taxonomy/rh_taxonomy.module',
      'name' => 'rh_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rabbit Hole taxonomy terms',
        'description' => 'Adds Rabbit Hole functionality for taxonomy terms.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rabbit_hole',
          1 => 'taxonomy',
        ),
        'version' => '7.x-2.23',
        'project' => 'rabbit_hole',
        'datestamp' => '1405026229',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.23',
    ),
    'rh_user' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/rabbit_hole/modules/rh_user/rh_user.module',
      'name' => 'rh_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rabbit Hole users',
        'description' => 'Adds Rabbit Hole functionality for users.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'rabbit_hole',
          1 => 'user',
        ),
        'version' => '7.x-2.23',
        'project' => 'rabbit_hole',
        'datestamp' => '1405026229',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.23',
    ),
    'rules' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/rules/rules.module',
      'name' => 'rules',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules',
        'description' => 'React on events and conditionally evaluate actions.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules.features.inc',
          1 => 'tests/rules.test',
          2 => 'includes/faces.inc',
          3 => 'includes/rules.core.inc',
          4 => 'includes/rules.event.inc',
          5 => 'includes/rules.processor.inc',
          6 => 'includes/rules.plugins.inc',
          7 => 'includes/rules.state.inc',
          8 => 'includes/rules.dispatcher.inc',
          9 => 'modules/node.eval.inc',
          10 => 'modules/php.eval.inc',
          11 => 'modules/rules_core.eval.inc',
          12 => 'modules/system.eval.inc',
          13 => 'ui/ui.controller.inc',
          14 => 'ui/ui.core.inc',
          15 => 'ui/ui.data.inc',
          16 => 'ui/ui.plugins.inc',
        ),
        'dependencies' => 
        array (
          0 => 'entity_token',
          1 => 'entity',
        ),
        'version' => '7.x-2.7',
        'project' => 'rules',
        'datestamp' => '1399041230',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.7',
    ),
    'rules_admin' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/rules/rules_admin/rules_admin.module',
      'name' => 'rules_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules UI',
        'description' => 'Administrative interface for managing rules.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_admin.module',
          1 => 'rules_admin.inc',
        ),
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'version' => '7.x-2.7',
        'project' => 'rules',
        'datestamp' => '1399041230',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.7',
    ),
    'rules_i18n' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/rules/rules_i18n/rules_i18n.module',
      'name' => 'rules_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules translation',
        'description' => 'Allows translating rules.',
        'dependencies' => 
        array (
          0 => 'rules',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_i18n.i18n.inc',
          1 => 'rules_i18n.rules.inc',
          2 => 'rules_i18n.test',
        ),
        'version' => '7.x-2.7',
        'project' => 'rules',
        'datestamp' => '1399041230',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.7',
    ),
    'rules_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
      'name' => 'rules_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Scheduler',
        'description' => 'Schedule the execution of Rules components using actions.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_scheduler.admin.inc',
          1 => 'rules_scheduler.module',
          2 => 'rules_scheduler.install',
          3 => 'rules_scheduler.rules.inc',
          4 => 'rules_scheduler.test',
          5 => 'includes/rules_scheduler.handler.inc',
          6 => 'includes/rules_scheduler.views_default.inc',
          7 => 'includes/rules_scheduler.views.inc',
          8 => 'includes/rules_scheduler_views_filter.inc',
        ),
        'version' => '7.x-2.7',
        'project' => 'rules',
        'datestamp' => '1399041230',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.7',
    ),
    'rune_admin_theme' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_admin_theme/rune_admin_theme.module',
      'name' => 'rune_admin_theme',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune Admin Theme',
        'description' => 'Set Adminimal as the admin theme and use it for editing content.',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'project' => 'rune_admin_theme',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'strongarm',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'variable' => 
          array (
            0 => 'admin_theme',
            1 => 'node_admin_theme',
          ),
        ),
        'project path' => 'profiles/rune/modules',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_ckeditor' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_ckeditor/rune_ckeditor.module',
      'name' => 'rune_ckeditor',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune CKEditor',
        'description' => 'Sane CKEditor profiles. Set autoParagraph = false;',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'project' => 'rune_ckeditor',
        'dependencies' => 
        array (
          0 => 'ckeditor',
        ),
        'features' => 
        array (
          'ckeditor_profile' => 
          array (
            0 => 'Advanced',
            1 => 'Full',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'project path' => 'profiles/rune/modules',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_coffee' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_coffee/rune_coffee.module',
      'name' => 'rune_coffee',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune Coffee',
        'description' => 'Include main menu in coffee.',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'project' => 'rune_coffee',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'strongarm',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'variable' => 
          array (
            0 => 'coffee_settings_menus',
          ),
        ),
        'project path' => 'profiles/rune/modules',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_commerce' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_commerce/rune_commerce.module',
      'name' => 'rune_commerce',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune Commerce',
        'description' => 'Enable to add all commerce modules to site.',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'dependencies' => 
        array (
          0 => 'commerce',
          1 => 'commerce_add_to_cart_confirmation',
          2 => 'commerce_addressbook',
          3 => 'commerce_amex',
          4 => 'commerce_backoffice',
          5 => 'commerce_backoffice_content',
          6 => 'commerce_backoffice_order',
          7 => 'commerce_backoffice_product',
          8 => 'commerce_cart',
          9 => 'commerce_checkout',
          10 => 'commerce_checkout_progress',
          11 => 'commerce_customer',
          12 => 'commerce_customer_ui',
          13 => 'commerce_flat_rate',
          14 => 'commerce_line_item',
          15 => 'commerce_line_item_ui',
          16 => 'commerce_order',
          17 => 'commerce_order_ui',
          18 => 'commerce_payflow',
          19 => 'commerce_payment',
          20 => 'commerce_payment_example',
          21 => 'commerce_payment_ui',
          22 => 'commerce_paypal',
          23 => 'commerce_paypal_ec',
          24 => 'commerce_paypal_wpp',
          25 => 'commerce_paypal_wps',
          26 => 'commerce_price',
          27 => 'commerce_pricing_attributes',
          28 => 'commerce_product',
          29 => 'commerce_product_pricing',
          30 => 'commerce_product_pricing_ui',
          31 => 'commerce_product_reference',
          32 => 'commerce_product_ui',
          33 => 'commerce_shipping',
          34 => 'commerce_shipping_ui',
          35 => 'commerce_tax',
          36 => 'commerce_tax_ui',
          37 => 'commerce_ui',
          38 => 'countries',
          39 => 'views_megarow',
        ),
        'features' => 
        array (
          'features_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'project path' => 'profiles/rune/modules',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_environments' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_environments/rune_environments.module',
      'name' => 'rune_environments',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune Environments',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'project' => 'rune_environments',
        'dependencies' => 
        array (
          0 => 'environment',
          1 => 'environment_indicator',
        ),
        'features' => 
        array (
          'features_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'project path' => 'profiles/rune/modules',
        'description' => '',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_fences' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_fences/rune_fences.module',
      'name' => 'rune_fences',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Rune Fences',
        'description' => 'Fences hack to make "no markup" the default option.',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'project' => 'rune_fences',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'features',
          2 => 'fences',
          3 => 'strongarm',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'variable' => 
          array (
            0 => 'fences_default_classes',
            1 => 'fences_default_markup',
          ),
        ),
        'project path' => 'profiles/rune/modules',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_image_toolkit' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_image_toolkit/rune_image_toolkit.module',
      'name' => 'rune_image_toolkit',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune Image Toolkit',
        'description' => 'Default jpeg quality to 100%',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'project' => 'rune_image_toolkit',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'imageapi_optimize',
          2 => 'strongarm',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'variable' => 
          array (
            0 => 'image_jpeg_quality',
            1 => 'image_toolkit',
            2 => 'imageapi_optimize_jpegoptim',
            3 => 'imageapi_optimize_jpegtran',
            4 => 'imageapi_optimize_optipng',
            5 => 'imageapi_optimize_pngcrush',
            6 => 'imageapi_optimize_pngquant',
            7 => 'imageapi_optimize_service',
            8 => 'imageapi_optimize_toolkit',
          ),
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_jquery_update' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_jquery_update/rune_jquery_update.module',
      'name' => 'rune_jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune jQuery Update',
        'description' => 'Default version of jQuery Update',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'project' => 'rune_jquery_update',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'strongarm',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'variable' => 
          array (
            0 => 'jquery_update_compression_type',
            1 => 'jquery_update_jquery_cdn',
            2 => 'jquery_update_jquery_version',
          ),
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_panels' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_panels/rune_panels.module',
      'name' => 'rune_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune Panels',
        'description' => 'Enable modules to configure panels and panelizer',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'dependencies' => 
        array (
          0 => 'page_manager',
          1 => 'panelizer',
          2 => 'panels_everywhere',
        ),
        'features' => 
        array (
          'features_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'project path' => 'profiles/rune/modules',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_performance_settings' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_performance_settings/rune_performance_settings.module',
      'name' => 'rune_performance_settings',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune Performance Settings',
        'description' => 'Various performance settings for production ready sites.',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'strongarm',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'variable' => 
          array (
            0 => 'block_cache',
            1 => 'cache',
            2 => 'cron_safe_threshold',
            3 => 'page_compression',
            4 => 'preprocess_css',
            5 => 'preprocess_js',
          ),
        ),
        'project path' => 'profiles/rune/modules',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_permissions/rune_permissions.module',
      'name' => 'rune_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune Permissions',
        'description' => 'Allows users to view published content.',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'project' => 'rune_permissions',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'node',
        ),
        'features' => 
        array (
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'user_permission' => 
          array (
            0 => 'access content',
          ),
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'rune_text_formats' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/rune_text_formats/rune_text_formats.module',
      'name' => 'rune_text_formats',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rune Text Formats',
        'description' => 'Default text formats (filtered_html, full_html, plain_text, no_formatting)',
        'core' => '7.x',
        'package' => 'Rune',
        'version' => '7.x-1.0',
        'project' => 'rune_text_formats',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'filter',
        ),
        'features' => 
        array (
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'filter' => 
          array (
            0 => 'filtered_html',
            1 => 'full_html',
            2 => 'no_formatting',
            3 => 'plain_text',
          ),
        ),
        'project path' => 'profiles/rune/modules',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    's3fs' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/s3fs/s3fs.module',
      'name' => 's3fs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'S3 File System',
        'description' => 'Adds an Amazon Simple Storage Service-based remote file system to Drupal.',
        'core' => '7.x',
        'configure' => 'admin/config/media/s3fs/settings',
        'dependencies' => 
        array (
          0 => 'libraries (2.x)',
        ),
        'files' => 
        array (
          0 => 'S3fsStreamWrapper.inc',
          1 => 'tests/s3fs.test',
        ),
        'version' => '7.x-2.1',
        'project' => 's3fs',
        'datestamp' => '1427743382',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.1',
    ),
    'save_edit' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/save_edit/save_edit.module',
      'name' => 'save_edit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Save & Edit',
        'description' => 'Gives a "<a href="http://drupal.org/project/save_edit">Save & Edit</a>" button on node pages. No Kittens were harmed during the creation of this module.',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/content/save-edit',
        'version' => '7.x-1.0-beta1',
        'project' => 'save_edit',
        'datestamp' => '1340830936',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta1',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'services' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/services/services.module',
      'name' => 'services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Services',
        'description' => 'Provide an API for creating web services.',
        'package' => 'Services',
        'core' => '7.x',
        'php' => '5.x',
        'configure' => 'admin/structure/services',
        'files' => 
        array (
          0 => 'includes/services.runtime.inc',
          1 => 'tests/functional/NoAuthEndpointTestRunner.test',
          2 => 'tests/functional/ServicesResourceNodeTests.test',
          3 => 'tests/functional/ServicesResourceUserTests.test',
          4 => 'tests/functional/ServicesResourceSystemTests.test',
          5 => 'tests/functional/ServicesResourceCommentTests.test',
          6 => 'tests/functional/ServicesResourceTaxonomyTests.test',
          7 => 'tests/functional/ServicesResourceFileTests.test',
          8 => 'tests/functional/ServicesResourceDisabledTests.test',
          9 => 'tests/functional/ServicesEndpointTests.test',
          10 => 'tests/functional/ServicesParserTests.test',
          11 => 'tests/functional/ServicesAliasTests.test',
          12 => 'tests/functional/ServicesXMLRPCTests.test',
          13 => 'tests/functional/ServicesVersionTests.test',
          14 => 'tests/functional/ServicesArgumentsTests.test',
          15 => 'tests/functional/ServicesSecurityTests.test',
          16 => 'tests/unit/ServicesSpycLibraryTests.test',
          17 => 'tests/ui/ServicesUITests.test',
          18 => 'tests/services.test',
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-3.12',
        'project' => 'services',
        'datestamp' => '1429118524',
      ),
      'version' => '7.x-3.12',
    ),
    'services_oauth' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/services/auth/services_oauth/services_oauth.module',
      'name' => 'services_oauth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OAuth Authentication',
        'description' => 'Provides OAuth authentication for the services module',
        'package' => 'Services - authentication',
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'oauth_common',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'version' => '7.x-3.12',
        'project' => 'services',
        'datestamp' => '1429118524',
      ),
      'version' => '7.x-3.12',
    ),
    'shareaholic' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/shareaholic/shareaholic.module',
      'name' => 'shareaholic',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shareaholic | share buttons, analytics, related content',
        'description' => 'Whether you want to get people sharing, keep them on your site, grow your fans, make money, or know who\'s reading your content, Shareaholic will help you get it done.',
        'configure' => 'admin/config/shareaholic/settings',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shareaholic.module',
          1 => 'tests/shareaholic.test',
          2 => 'tests/utilities.test',
          3 => 'tests/admin.test',
          4 => 'tests/public.test',
          5 => 'tests/http.test',
          6 => 'tests/cache.test',
          7 => 'tests/public_js.test',
        ),
        'version' => '7.x-3.24',
        'project' => 'shareaholic',
        'datestamp' => '1442418247',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.24',
    ),
    'sharethis' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/sharethis/sharethis.module',
      'name' => 'sharethis',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ShareThis',
        'description' => 'Add the <a href="http://www.sharethis.com/">ShareThis</a> widget to nodes on your site.',
        'core' => '7.x',
        'package' => 'Sharing',
        'configure' => 'admin/config/services/sharethis',
        'files' => 
        array (
          0 => 'views/sharethis_handler_field_link.inc',
        ),
        'version' => '7.x-2.10',
        'project' => 'sharethis',
        'datestamp' => '1422441977',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud.test',
          10 => 'tests/entity_crud_hook_test.test',
          11 => 'tests/entity_query.test',
          12 => 'tests/error.test',
          13 => 'tests/file.test',
          14 => 'tests/filetransfer.test',
          15 => 'tests/form.test',
          16 => 'tests/graph.test',
          17 => 'tests/image.test',
          18 => 'tests/lock.test',
          19 => 'tests/mail.test',
          20 => 'tests/menu.test',
          21 => 'tests/module.test',
          22 => 'tests/pager.test',
          23 => 'tests/password.test',
          24 => 'tests/path.test',
          25 => 'tests/registry.test',
          26 => 'tests/schema.test',
          27 => 'tests/session.test',
          28 => 'tests/tablesort.test',
          29 => 'tests/theme.test',
          30 => 'tests/unicode.test',
          31 => 'tests/update.test',
          32 => 'tests/xmlrpc.test',
          33 => 'tests/upgrade/upgrade.test',
          34 => 'tests/upgrade/upgrade.comment.test',
          35 => 'tests/upgrade/upgrade.filter.test',
          36 => 'tests/upgrade/upgrade.forum.test',
          37 => 'tests/upgrade/upgrade.locale.test',
          38 => 'tests/upgrade/upgrade.menu.test',
          39 => 'tests/upgrade/upgrade.node.test',
          40 => 'tests/upgrade/upgrade.taxonomy.test',
          41 => 'tests/upgrade/upgrade.trigger.test',
          42 => 'tests/upgrade/upgrade.translatable.test',
          43 => 'tests/upgrade/upgrade.upload.test',
          44 => 'tests/upgrade/upgrade.user.test',
          45 => 'tests/upgrade/update.aggregator.test',
          46 => 'tests/upgrade/update.trigger.test',
          47 => 'tests/upgrade/update.field.test',
          48 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'simplify' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/simplify/simplify.module',
      'name' => 'simplify',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Simplify',
        'description' => 'Simplifies the user interface by hiding particular fields.',
        'core' => '7.x',
        'package' => 'User interface',
        'configure' => 'admin/config/user-interface/simplify',
        'version' => '7.x-3.3',
        'project' => 'simplify',
        'datestamp' => '1429513382',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'smtp' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/smtp/smtp.module',
      'name' => 'smtp',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SMTP Authentication Support',
        'description' => 'Allow for site emails to be sent through an SMTP server of your choice.',
        'core' => '7.x',
        'package' => 'Mail',
        'configure' => 'admin/config/system/smtp',
        'files' => 
        array (
          0 => 'smtp.mail.inc',
          1 => 'smtp.phpmailer.inc',
          2 => 'smtp.transport.inc',
        ),
        'version' => '7.x-1.2',
        'project' => 'smtp',
        'datestamp' => '1420662781',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'special_menu_items' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/special_menu_items/special_menu_items.module',
      'name' => 'special_menu_items',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Special menu items',
        'description' => 'Allow users to add placeholder and/or separator menu items.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'configure' => 'admin/config/system/special_menu_items',
        'version' => '7.x-2.0',
        'project' => 'special_menu_items',
        'datestamp' => '1346788411',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'strongarm' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/strongarm/strongarm.module',
      'name' => 'strongarm',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '-1000',
      'info' => 
      array (
        'name' => 'Strongarm',
        'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'strongarm.admin.inc',
          1 => 'strongarm.install',
          2 => 'strongarm.module',
        ),
        'version' => '7.x-2.0',
        'project' => 'strongarm',
        'datestamp' => '1339604214',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'subpathauto' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/subpathauto/subpathauto.module',
      'name' => 'subpathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Sub-pathauto',
        'description' => 'Provides support for extending sub-paths of URL aliases.',
        'core' => '7.x',
        'configure' => 'admin/config/search/path/subpaths',
        'files' => 
        array (
          0 => 'subpathauto.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'subpathauto',
        'datestamp' => '1347990612',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'superfish' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/superfish/superfish.module',
      'name' => 'superfish',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Superfish',
        'description' => 'jQuery Superfish plugin for your Drupal menus.',
        'package' => 'User interface',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'menu',
        ),
        'configure' => 'admin/config/user-interface/superfish',
        'core' => '7.x',
        'version' => '1.x-dev-dev',
        'project' => 'superfish',
        'datestamp' => '1404564167',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7079',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'system_stream_wrapper' => 
    array (
      'filename' => '/var/aegir/platforms/rune/sites/all/modules/system_stream_wrapper/system_stream_wrapper.module',
      'name' => 'system_stream_wrapper',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System stream wrapper',
        'description' => 'Provides stream wrappers to access files in module, theme, profile, and library files and directories.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'SystemStreamWrapper.inc',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'system_stream_wrapper',
        'datestamp' => '1318473407',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'term_depth' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ctools/term_depth/term_depth.module',
      'name' => 'term_depth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Term Depth access',
        'description' => 'Controls access to context based upon term depth',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.9',
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'themekey' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/themekey/themekey.module',
      'name' => 'themekey',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ThemeKey',
        'description' => 'Map themes to Drupal paths or object properties.',
        'core' => '7.x',
        'package' => 'ThemeKey',
        'configure' => 'admin/config/user-interface/themekey/settings',
        'dependencies' => 
        array (
          0 => 'system (>=7.22)',
        ),
        'files' => 
        array (
          0 => 'ThemeKeyEntityFieldQuery.php',
          1 => 'modules/themekey_browser_detection.php',
          2 => 'tests/themekey.test',
          3 => 'tests/ThemekeyDrupalPropertiesTestCase.test',
          4 => 'tests/ThemekeyModulePluginsTestCase.test',
          5 => 'tests/ThemekeyNodePropertiesTestCase.test',
          6 => 'tests/ThemekeyRuleChainTestCase.test',
          7 => 'tests/ThemekeySystemPropertiesTestCase.test',
          8 => 'tests/ThemekeyUITestCase.test',
        ),
        'version' => '7.x-3.3',
        'project' => 'themekey',
        'datestamp' => '1422966217',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'themekey_compat' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/themekey/themekey_compat.module',
      'name' => 'themekey_compat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ThemeKey Compatibility',
        'description' => 'Optionally disable the theme switching capability of core and additional modules. Their theme switching capabilities will become part of the ThemeKey rule chain instead and therefor configurable.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'themekey',
        ),
        'package' => 'ThemeKey',
        'configure' => 'admin/config/user-interface/themekey/settings/compat',
        'version' => '7.x-3.3',
        'project' => 'themekey',
        'datestamp' => '1422966217',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'themekey_css' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/themekey/themekey_css/themekey_css.module',
      'name' => 'themekey_css',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ThemeKey CSS (Experimental)',
        'description' => 'Define rules to dynamically add CSS files to a page. Experimental!',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'themekey',
        ),
        'package' => 'ThemeKey',
        'configure' => 'admin/config/user-interface/themekey/css',
        'version' => '7.x-3.3',
        'project' => 'themekey',
        'datestamp' => '1422966217',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'themekey_debug' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/themekey/themekey_debug.module',
      'name' => 'themekey_debug',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ThemeKey Debug',
        'description' => 'Debug ThemeKey, see which rules are applied and the current values of all properties.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'themekey',
        ),
        'package' => 'ThemeKey',
        'configure' => 'admin/config/user-interface/themekey/settings/debug',
        'version' => '7.x-3.3',
        'project' => 'themekey',
        'datestamp' => '1422966217',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'themekey_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/themekey/themekey_example/themekey_example.module',
      'name' => 'themekey_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ThemeKey Example',
        'description' => 'Implements parts of the ThemeKey API as an example for Developers.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'themekey',
        ),
        'package' => 'Example modules',
        'version' => '7.x-3.3',
        'project' => 'themekey',
        'datestamp' => '1422966217',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'themekey_features' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/themekey/themekey_features.module',
      'name' => 'themekey_features',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ThemeKey Features (Beta)',
        'description' => 'Export single rules with Features.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'themekey',
          1 => 'features',
        ),
        'package' => 'ThemeKey',
        'version' => '7.x-3.3',
        'project' => 'themekey',
        'datestamp' => '1422966217',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'themekey_redirect' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/themekey/themekey_redirect/themekey_redirect.module',
      'name' => 'themekey_redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ThemeKey Redirect',
        'description' => 'Provides an additional rule chain to define rules to redirect the user.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'themekey',
        ),
        'package' => 'ThemeKey',
        'configure' => 'admin/config/user-interface/themekey/redirects',
        'version' => '7.x-3.3',
        'project' => 'themekey',
        'datestamp' => '1422966217',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'themekey_simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/themekey/tests/themekey_simpletest.module',
      'name' => 'themekey_simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ThemeKey Testing',
        'description' => 'Just a fake module for testing ThemeKey plugins.',
        'core' => '7.x',
        'package' => 'Development',
        'version' => '7.x-3.3',
        'project' => 'themekey',
        'datestamp' => '1422966217',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'themekey_ui' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/themekey/themekey_ui.module',
      'name' => 'themekey_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ThemeKey UI',
        'description' => 'Integrates ThemeKey with Drupal administration forms.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'themekey',
        ),
        'package' => 'ThemeKey',
        'configure' => 'admin/config/user-interface/themekey/settings/ui',
        'version' => '7.x-3.3',
        'project' => 'themekey',
        'datestamp' => '1422966217',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'themekey_user_profile' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/themekey/themekey_user_profile.module',
      'name' => 'themekey_user_profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ThemeKey User Profile',
        'description' => 'Allows users to select their own theme for this site. Replaces the corresponding feature that existed in Drupal 6 Core.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'themekey',
          1 => 'themekey_ui',
        ),
        'package' => 'ThemeKey',
        'configure' => 'admin/config/user-interface/themekey/settings/ui',
        'version' => '7.x-3.3',
        'project' => 'themekey',
        'datestamp' => '1422966217',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'title' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/title/title.module',
      'name' => 'title',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Title',
        'description' => 'Replaces entity legacy fields with regular fields.',
        'core' => '7.x',
        'package' => 'Fields',
        'configure' => 'admin/config/content/title',
        'dependencies' => 
        array (
          0 => 'system (>7.14)',
        ),
        'files' => 
        array (
          0 => 'title.module',
          1 => 'views/views_handler_title_field.inc',
          2 => 'tests/title.test',
        ),
        'version' => '7.x-1.0-alpha7',
        'project' => 'title',
        'datestamp' => '1363626024',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha7',
    ),
    'token' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.test',
        ),
        'version' => '7.x-1.6',
        'project' => 'token',
        'datestamp' => '1425149060',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'token_filter' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/token_filter/token_filter.module',
      'name' => 'token_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token Filter',
        'description' => 'Allows token values to be used as filters',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'token',
        ),
        'version' => '7.x-1.1',
        'project' => 'token_filter',
        'datestamp' => '1325700944',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.39',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.39',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/rune/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7018',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'uuid' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/uuid/uuid.module',
      'name' => 'uuid',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7103',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Universally Unique ID',
        'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
        'core' => '7.x',
        'package' => 'UUID',
        'configure' => 'admin/config/system/uuid',
        'files' => 
        array (
          0 => 'uuid.test',
        ),
        'dependencies' => 
        array (
          0 => 'node',
          1 => 'user',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'uuid',
        'datestamp' => '1414581343',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'uuid_features' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/uuid_features/uuid_features.module',
      'name' => 'uuid_features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '-50',
      'info' => 
      array (
        'name' => 'UUID Features',
        'description' => 'Provides features integration for content (nodes, taxonomy, etc) based on the UUID module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'uuid',
          2 => 'entity',
        ),
        'package' => 'Features',
        'configure' => 'admin/structure/features/uuid_features',
        'version' => '1.x-dev-dev',
        'project' => 'uuid_features',
        'datestamp' => '1429166334',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'uuid_panel_node' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/uuid_panel_node/uuid_panel_node.module',
      'name' => 'uuid_panel_node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID node Panels integration',
        'description' => 'Makes it possible to include a node as a pane referenced by his uuid',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'uuid',
          1 => 'panels',
        ),
        'package' => 'UUID',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'uuid_path' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/uuid/uuid_path/uuid_path.module',
      'name' => 'uuid_path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Path',
        'description' => 'Provides export functionality for url aliases.',
        'core' => '7.x',
        'package' => 'UUID',
        'dependencies' => 
        array (
          0 => 'uuid',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'uuid',
        'datestamp' => '1414581343',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'uuid_services' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/uuid/uuid_services/uuid_services.module',
      'name' => 'uuid_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Services',
        'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
        'core' => '7.x',
        'package' => 'Services - resources',
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'uuid',
          2 => 'entity',
        ),
        'version' => '1.x-dev-dev',
        'project' => 'uuid',
        'datestamp' => '1414581343',
        'php' => '5.2.4',
      ),
      'version' => '1.x-dev-dev',
    ),
    'uuid_services_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/uuid/uuid_services_example/uuid_services_example.module',
      'name' => 'uuid_services_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Services Example',
        'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
        'core' => '7.x',
        'package' => 'Features',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'rest_server',
          1 => 'services',
          2 => 'uuid',
          3 => 'uuid_services',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'services:services:3',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'services_endpoint' => 
          array (
            0 => 'uuid_services_example',
          ),
        ),
        'version' => '1.x-dev-dev',
        'project' => 'uuid',
        'datestamp' => '1414581343',
      ),
      'version' => '1.x-dev-dev',
    ),
    'variable' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/variable/variable.module',
      'name' => 'variable',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable',
        'description' => 'Variable Information and basic variable API',
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/forum.variable.inc',
          1 => 'includes/locale.variable.inc',
          2 => 'includes/menu.variable.inc',
          3 => 'includes/node.variable.inc',
          4 => 'includes/system.variable.inc',
          5 => 'includes/taxonomy.variable.inc',
          6 => 'includes/translation.variable.inc',
          7 => 'includes/user.variable.inc',
          8 => 'variable.test',
        ),
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'variable_admin' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/variable/variable_admin/variable_admin.module',
      'name' => 'variable_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable admin',
        'description' => 'Variable Administration UI',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'variable_example' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/variable/variable_example/variable_example.module',
      'name' => 'variable_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable example',
        'description' => 'An example module showing how to use the Variable API and providing some variables.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'variable_store',
        ),
        'package' => 'Example modules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'variable_example.variable.inc',
        ),
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'variable_realm' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/variable/variable_realm/variable_realm.module',
      'name' => 'variable_realm',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable realm',
        'description' => 'API to use variable realms from different modules',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.5',
        'files' => 
        array (
          0 => 'variable_realm.class.inc',
          1 => 'variable_realm_union.class.inc',
        ),
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'variable_store' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/variable/variable_store/variable_store.module',
      'name' => 'variable_store',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable store',
        'description' => 'Database storage for variable realms. This is an API module.',
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'version' => '7.x-2.5',
        'files' => 
        array (
          0 => 'variable_store.class.inc',
          1 => 'variable_store.test',
        ),
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'variable_views' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/variable/variable_views/variable_views.module',
      'name' => 'variable_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Variable views',
        'description' => 'Provides views integration for variable, included a default variable argument.',
        'dependencies' => 
        array (
          0 => 'variable',
          1 => 'views',
        ),
        'package' => 'Variable',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views_plugin_argument_default_variable.inc',
          1 => 'includes/views_handler_field_variable_title.inc',
          2 => 'includes/views_handler_field_variable_value.inc',
        ),
        'version' => '7.x-2.5',
        'project' => 'variable',
        'datestamp' => '1398250128',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'varnish' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/varnish/varnish.module',
      'name' => 'varnish',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Varnish',
        'description' => 'Provides integration with the Varnish HTTP accelerator.',
        'core' => '7.x',
        'configure' => 'admin/config/development/varnish',
        'package' => 'Caching',
        'files' => 
        array (
          0 => 'varnish.admin.inc',
          1 => 'varnish.cache.inc',
          2 => 'varnish.test',
        ),
        'version' => '7.x-1.0-beta3',
        'project' => 'varnish',
        'datestamp' => '1410442429',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta3',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_messages.inc',
          2 => 'handlers/views_handler_area_result.inc',
          3 => 'handlers/views_handler_area_text.inc',
          4 => 'handlers/views_handler_area_text_custom.inc',
          5 => 'handlers/views_handler_area_view.inc',
          6 => 'handlers/views_handler_argument.inc',
          7 => 'handlers/views_handler_argument_date.inc',
          8 => 'handlers/views_handler_argument_formula.inc',
          9 => 'handlers/views_handler_argument_many_to_one.inc',
          10 => 'handlers/views_handler_argument_null.inc',
          11 => 'handlers/views_handler_argument_numeric.inc',
          12 => 'handlers/views_handler_argument_string.inc',
          13 => 'handlers/views_handler_argument_group_by_numeric.inc',
          14 => 'handlers/views_handler_field.inc',
          15 => 'handlers/views_handler_field_counter.inc',
          16 => 'handlers/views_handler_field_boolean.inc',
          17 => 'handlers/views_handler_field_contextual_links.inc',
          18 => 'handlers/views_handler_field_custom.inc',
          19 => 'handlers/views_handler_field_date.inc',
          20 => 'handlers/views_handler_field_entity.inc',
          21 => 'handlers/views_handler_field_markup.inc',
          22 => 'handlers/views_handler_field_math.inc',
          23 => 'handlers/views_handler_field_numeric.inc',
          24 => 'handlers/views_handler_field_prerender_list.inc',
          25 => 'handlers/views_handler_field_time_interval.inc',
          26 => 'handlers/views_handler_field_serialized.inc',
          27 => 'handlers/views_handler_field_machine_name.inc',
          28 => 'handlers/views_handler_field_url.inc',
          29 => 'handlers/views_handler_filter.inc',
          30 => 'handlers/views_handler_filter_boolean_operator.inc',
          31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          32 => 'handlers/views_handler_filter_combine.inc',
          33 => 'handlers/views_handler_filter_date.inc',
          34 => 'handlers/views_handler_filter_equality.inc',
          35 => 'handlers/views_handler_filter_entity_bundle.inc',
          36 => 'handlers/views_handler_filter_group_by_numeric.inc',
          37 => 'handlers/views_handler_filter_in_operator.inc',
          38 => 'handlers/views_handler_filter_many_to_one.inc',
          39 => 'handlers/views_handler_filter_numeric.inc',
          40 => 'handlers/views_handler_filter_string.inc',
          41 => 'handlers/views_handler_filter_fields_compare.inc',
          42 => 'handlers/views_handler_relationship.inc',
          43 => 'handlers/views_handler_relationship_groupwise_max.inc',
          44 => 'handlers/views_handler_sort.inc',
          45 => 'handlers/views_handler_sort_date.inc',
          46 => 'handlers/views_handler_sort_formula.inc',
          47 => 'handlers/views_handler_sort_group_by_numeric.inc',
          48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          49 => 'handlers/views_handler_sort_random.inc',
          50 => 'includes/base.inc',
          51 => 'includes/handlers.inc',
          52 => 'includes/plugins.inc',
          53 => 'includes/view.inc',
          54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          63 => 'modules/book/views_plugin_argument_default_book_root.inc',
          64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          65 => 'modules/comment/views_handler_field_comment.inc',
          66 => 'modules/comment/views_handler_field_comment_depth.inc',
          67 => 'modules/comment/views_handler_field_comment_link.inc',
          68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          72 => 'modules/comment/views_handler_field_comment_node_link.inc',
          73 => 'modules/comment/views_handler_field_comment_username.inc',
          74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          76 => 'modules/comment/views_handler_field_node_comment.inc',
          77 => 'modules/comment/views_handler_field_node_new_comments.inc',
          78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          81 => 'modules/comment/views_handler_filter_node_comment.inc',
          82 => 'modules/comment/views_handler_sort_comment_thread.inc',
          83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          85 => 'modules/comment/views_plugin_row_comment_rss.inc',
          86 => 'modules/comment/views_plugin_row_comment_view.inc',
          87 => 'modules/contact/views_handler_field_contact_link.inc',
          88 => 'modules/field/views_handler_field_field.inc',
          89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          90 => 'modules/field/views_handler_argument_field_list.inc',
          91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
          92 => 'modules/field/views_handler_argument_field_list_string.inc',
          93 => 'modules/field/views_handler_filter_field_list.inc',
          94 => 'modules/filter/views_handler_field_filter_format_name.inc',
          95 => 'modules/locale/views_handler_field_node_language.inc',
          96 => 'modules/locale/views_handler_filter_node_language.inc',
          97 => 'modules/locale/views_handler_argument_locale_group.inc',
          98 => 'modules/locale/views_handler_argument_locale_language.inc',
          99 => 'modules/locale/views_handler_field_locale_group.inc',
          100 => 'modules/locale/views_handler_field_locale_language.inc',
          101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          102 => 'modules/locale/views_handler_filter_locale_group.inc',
          103 => 'modules/locale/views_handler_filter_locale_language.inc',
          104 => 'modules/locale/views_handler_filter_locale_version.inc',
          105 => 'modules/node/views_handler_argument_dates_various.inc',
          106 => 'modules/node/views_handler_argument_node_language.inc',
          107 => 'modules/node/views_handler_argument_node_nid.inc',
          108 => 'modules/node/views_handler_argument_node_type.inc',
          109 => 'modules/node/views_handler_argument_node_vid.inc',
          110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          112 => 'modules/node/views_handler_field_node.inc',
          113 => 'modules/node/views_handler_field_node_link.inc',
          114 => 'modules/node/views_handler_field_node_link_delete.inc',
          115 => 'modules/node/views_handler_field_node_link_edit.inc',
          116 => 'modules/node/views_handler_field_node_revision.inc',
          117 => 'modules/node/views_handler_field_node_revision_link.inc',
          118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          120 => 'modules/node/views_handler_field_node_path.inc',
          121 => 'modules/node/views_handler_field_node_type.inc',
          122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          123 => 'modules/node/views_handler_filter_node_access.inc',
          124 => 'modules/node/views_handler_filter_node_status.inc',
          125 => 'modules/node/views_handler_filter_node_type.inc',
          126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          127 => 'modules/node/views_plugin_argument_default_node.inc',
          128 => 'modules/node/views_plugin_argument_validate_node.inc',
          129 => 'modules/node/views_plugin_row_node_rss.inc',
          130 => 'modules/node/views_plugin_row_node_view.inc',
          131 => 'modules/profile/views_handler_field_profile_date.inc',
          132 => 'modules/profile/views_handler_field_profile_list.inc',
          133 => 'modules/profile/views_handler_filter_profile_selection.inc',
          134 => 'modules/search/views_handler_argument_search.inc',
          135 => 'modules/search/views_handler_field_search_score.inc',
          136 => 'modules/search/views_handler_filter_search.inc',
          137 => 'modules/search/views_handler_sort_search_score.inc',
          138 => 'modules/search/views_plugin_row_search_view.inc',
          139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          140 => 'modules/system/views_handler_argument_file_fid.inc',
          141 => 'modules/system/views_handler_field_file.inc',
          142 => 'modules/system/views_handler_field_file_extension.inc',
          143 => 'modules/system/views_handler_field_file_filemime.inc',
          144 => 'modules/system/views_handler_field_file_uri.inc',
          145 => 'modules/system/views_handler_field_file_status.inc',
          146 => 'modules/system/views_handler_filter_file_status.inc',
          147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
          164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
          165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
          166 => 'modules/system/views_handler_filter_system_type.inc',
          167 => 'modules/translation/views_handler_argument_node_tnid.inc',
          168 => 'modules/translation/views_handler_field_node_link_translate.inc',
          169 => 'modules/translation/views_handler_field_node_translation_link.inc',
          170 => 'modules/translation/views_handler_filter_node_tnid.inc',
          171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          172 => 'modules/translation/views_handler_relationship_translation.inc',
          173 => 'modules/user/views_handler_argument_user_uid.inc',
          174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          175 => 'modules/user/views_handler_field_user.inc',
          176 => 'modules/user/views_handler_field_user_language.inc',
          177 => 'modules/user/views_handler_field_user_link.inc',
          178 => 'modules/user/views_handler_field_user_link_cancel.inc',
          179 => 'modules/user/views_handler_field_user_link_edit.inc',
          180 => 'modules/user/views_handler_field_user_mail.inc',
          181 => 'modules/user/views_handler_field_user_name.inc',
          182 => 'modules/user/views_handler_field_user_permissions.inc',
          183 => 'modules/user/views_handler_field_user_picture.inc',
          184 => 'modules/user/views_handler_field_user_roles.inc',
          185 => 'modules/user/views_handler_filter_user_current.inc',
          186 => 'modules/user/views_handler_filter_user_name.inc',
          187 => 'modules/user/views_handler_filter_user_permissions.inc',
          188 => 'modules/user/views_handler_filter_user_roles.inc',
          189 => 'modules/user/views_plugin_argument_default_current_user.inc',
          190 => 'modules/user/views_plugin_argument_default_user.inc',
          191 => 'modules/user/views_plugin_argument_validate_user.inc',
          192 => 'modules/user/views_plugin_row_user_view.inc',
          193 => 'plugins/views_plugin_access.inc',
          194 => 'plugins/views_plugin_access_none.inc',
          195 => 'plugins/views_plugin_access_perm.inc',
          196 => 'plugins/views_plugin_access_role.inc',
          197 => 'plugins/views_plugin_argument_default.inc',
          198 => 'plugins/views_plugin_argument_default_php.inc',
          199 => 'plugins/views_plugin_argument_default_fixed.inc',
          200 => 'plugins/views_plugin_argument_default_raw.inc',
          201 => 'plugins/views_plugin_argument_validate.inc',
          202 => 'plugins/views_plugin_argument_validate_numeric.inc',
          203 => 'plugins/views_plugin_argument_validate_php.inc',
          204 => 'plugins/views_plugin_cache.inc',
          205 => 'plugins/views_plugin_cache_none.inc',
          206 => 'plugins/views_plugin_cache_time.inc',
          207 => 'plugins/views_plugin_display.inc',
          208 => 'plugins/views_plugin_display_attachment.inc',
          209 => 'plugins/views_plugin_display_block.inc',
          210 => 'plugins/views_plugin_display_default.inc',
          211 => 'plugins/views_plugin_display_embed.inc',
          212 => 'plugins/views_plugin_display_extender.inc',
          213 => 'plugins/views_plugin_display_feed.inc',
          214 => 'plugins/views_plugin_display_page.inc',
          215 => 'plugins/views_plugin_exposed_form_basic.inc',
          216 => 'plugins/views_plugin_exposed_form.inc',
          217 => 'plugins/views_plugin_exposed_form_input_required.inc',
          218 => 'plugins/views_plugin_localization_core.inc',
          219 => 'plugins/views_plugin_localization.inc',
          220 => 'plugins/views_plugin_localization_none.inc',
          221 => 'plugins/views_plugin_pager.inc',
          222 => 'plugins/views_plugin_pager_full.inc',
          223 => 'plugins/views_plugin_pager_mini.inc',
          224 => 'plugins/views_plugin_pager_none.inc',
          225 => 'plugins/views_plugin_pager_some.inc',
          226 => 'plugins/views_plugin_query.inc',
          227 => 'plugins/views_plugin_query_default.inc',
          228 => 'plugins/views_plugin_row.inc',
          229 => 'plugins/views_plugin_row_fields.inc',
          230 => 'plugins/views_plugin_row_rss_fields.inc',
          231 => 'plugins/views_plugin_style.inc',
          232 => 'plugins/views_plugin_style_default.inc',
          233 => 'plugins/views_plugin_style_grid.inc',
          234 => 'plugins/views_plugin_style_list.inc',
          235 => 'plugins/views_plugin_style_jump_menu.inc',
          236 => 'plugins/views_plugin_style_mapping.inc',
          237 => 'plugins/views_plugin_style_rss.inc',
          238 => 'plugins/views_plugin_style_summary.inc',
          239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          240 => 'plugins/views_plugin_style_summary_unformatted.inc',
          241 => 'plugins/views_plugin_style_table.inc',
          242 => 'tests/handlers/views_handlers.test',
          243 => 'tests/handlers/views_handler_area_text.test',
          244 => 'tests/handlers/views_handler_argument_null.test',
          245 => 'tests/handlers/views_handler_argument_string.test',
          246 => 'tests/handlers/views_handler_field.test',
          247 => 'tests/handlers/views_handler_field_boolean.test',
          248 => 'tests/handlers/views_handler_field_custom.test',
          249 => 'tests/handlers/views_handler_field_counter.test',
          250 => 'tests/handlers/views_handler_field_date.test',
          251 => 'tests/handlers/views_handler_field_file_extension.test',
          252 => 'tests/handlers/views_handler_field_file_size.test',
          253 => 'tests/handlers/views_handler_field_math.test',
          254 => 'tests/handlers/views_handler_field_url.test',
          255 => 'tests/handlers/views_handler_field_xss.test',
          256 => 'tests/handlers/views_handler_filter_combine.test',
          257 => 'tests/handlers/views_handler_filter_date.test',
          258 => 'tests/handlers/views_handler_filter_equality.test',
          259 => 'tests/handlers/views_handler_filter_in_operator.test',
          260 => 'tests/handlers/views_handler_filter_numeric.test',
          261 => 'tests/handlers/views_handler_filter_string.test',
          262 => 'tests/handlers/views_handler_sort_random.test',
          263 => 'tests/handlers/views_handler_sort_date.test',
          264 => 'tests/handlers/views_handler_sort.test',
          265 => 'tests/test_handlers/views_test_area_access.inc',
          266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
          269 => 'tests/plugins/views_plugin_display.test',
          270 => 'tests/styles/views_plugin_style_jump_menu.test',
          271 => 'tests/styles/views_plugin_style.test',
          272 => 'tests/styles/views_plugin_style_base.test',
          273 => 'tests/styles/views_plugin_style_mapping.test',
          274 => 'tests/styles/views_plugin_style_unformatted.test',
          275 => 'tests/views_access.test',
          276 => 'tests/views_analyze.test',
          277 => 'tests/views_basic.test',
          278 => 'tests/views_argument_default.test',
          279 => 'tests/views_argument_validator.test',
          280 => 'tests/views_exposed_form.test',
          281 => 'tests/field/views_fieldapi.test',
          282 => 'tests/views_glossary.test',
          283 => 'tests/views_groupby.test',
          284 => 'tests/views_handlers.test',
          285 => 'tests/views_module.test',
          286 => 'tests/views_pager.test',
          287 => 'tests/views_plugin_localization_test.inc',
          288 => 'tests/views_translatable.test',
          289 => 'tests/views_query.test',
          290 => 'tests/views_upgrade.test',
          291 => 'tests/views_test.views_default.inc',
          292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          294 => 'tests/node/views_node_revision_relations.test',
          295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          296 => 'tests/user/views_handler_field_user_name.test',
          297 => 'tests/user/views_user_argument_default.test',
          298 => 'tests/user/views_user_argument_validate.test',
          299 => 'tests/user/views_user.test',
          300 => 'tests/views_cache.test',
          301 => 'tests/views_view.test',
          302 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.11',
        'project' => 'views',
        'datestamp' => '1430321048',
      ),
      'version' => '7.x-3.11',
    ),
    'views_accordion' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_accordion/views_accordion.module',
      'name' => 'views_accordion',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Accordion',
        'description' => 'Provides an accordion views display plugin.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_accordion_style_plugin.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'views_accordion',
        'datestamp' => '1422545700',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'views_bootstrap' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_bootstrap/views_bootstrap.module',
      'name' => 'views_bootstrap',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bootstrap',
        'package' => 'Views',
        'description' => 'Bootstrap Components',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'plugins/carousel/views_bootstrap_carousel_plugin_style.inc',
          1 => 'plugins/carousel/views_bootstrap_carousel_plugin_rows.inc',
          2 => 'plugins/thumbnail/views_bootstrap_thumbnail_plugin_style.inc',
          3 => 'plugins/thumbnail/views_bootstrap_thumbnail_plugin_rows.inc',
          4 => 'plugins/grid/views_bootstrap_grid_plugin_style.inc',
          5 => 'plugins/accordion/views_bootstrap_accordion_plugin_style.inc',
          6 => 'plugins/tab/views_bootstrap_tab_plugin_style.inc',
          7 => 'plugins/media/views_bootstrap_media_plugin_style.inc',
          8 => 'plugins/table/views_bootstrap_table_plugin_style.inc',
        ),
        'version' => '7.x-3.1',
        'core' => '7.x',
        'project' => 'views_bootstrap',
        'datestamp' => '1398607429',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2.9',
        'files' => 
        array (
          0 => 'plugins/operation_types/base.class.php',
          1 => 'views/views_bulk_operations_handler_field_operations.inc',
        ),
        'version' => '7.x-3.3',
        'project' => 'views_bulk_operations',
        'datestamp' => '1435764542',
      ),
      'version' => '7.x-3.3',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'version' => '7.x-1.9',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'project' => 'ctools',
        'datestamp' => '1440020680',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'views_content_cache' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_content_cache/views_content_cache.module',
      'name' => 'views_content_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Content Cache',
        'description' => 'Provides a views cache plugin based on content type changes.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'plugins/views_content_cache/base.inc',
          1 => 'plugins/views_content_cache/comment.inc',
          2 => 'plugins/views_content_cache/node.inc',
          3 => 'plugins/views_content_cache/node_only.inc',
          4 => 'plugins/views_content_cache/og.inc',
          5 => 'plugins/views_content_cache/votingapi.inc',
          6 => 'views/views_content_cache_plugin_cache.inc',
          7 => 'tests/views_content_cache.test',
        ),
        'version' => '7.x-3.0-alpha3',
        'project' => 'views_content_cache',
        'datestamp' => '1383658110',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha3',
    ),
    'views_data_export' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_data_export/views_data_export.module',
      'name' => 'views_data_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Data Export',
        'description' => 'Plugin to export views data into various file formats',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'plugins/views_data_export_plugin_display_export.inc',
          1 => 'plugins/views_data_export_plugin_style_export.inc',
          2 => 'plugins/views_data_export_plugin_style_export_csv.inc',
          3 => 'plugins/views_data_export_plugin_style_export_xml.inc',
          4 => 'tests/base.test',
          5 => 'tests/csv_export.test',
          6 => 'tests/doc_export.test',
          7 => 'tests/txt_export.test',
          8 => 'tests/xls_export.test',
          9 => 'tests/xml_export.test',
        ),
        'version' => '7.x-3.0-beta8',
        'project' => 'views_data_export',
        'datestamp' => '1409118835',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta8',
    ),
    'views_field_view' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_field_view/views_field_view.module',
      'name' => 'views_field_view',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Field View',
        'description' => 'Embeds a view inside a view as field',
        'core' => '7.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_field_view_handler_field_view.inc',
          1 => 'tests/views_field_view.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'views_field_view',
        'datestamp' => '1369511162',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'views_json' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_datasource/views_json.module',
      'name' => 'views_json',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views JSON',
        'description' => 'Views style plugin to render node content as JSON.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_json.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'views_megarow' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_megarow/views_megarow.module',
      'name' => 'views_megarow',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views megarow',
        'description' => 'Open views links in a modal.',
        'core' => '7.x',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'configure' => 'admin/config/user-interface/views_megarow',
        'files' => 
        array (
          0 => 'includes/views/plugins/views_plugin_style_table_megarows.inc',
          1 => 'includes/views/handlers/views_handler_field_megarow_links.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'views_megarow',
        'datestamp' => '1438968242',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'views_rdf' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_datasource/views_rdf.module',
      'name' => 'views_rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views RDF',
        'description' => 'Views style plugin to render node content as RDF.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_rdf.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.11',
        'project' => 'views',
        'datestamp' => '1430321048',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.11',
    ),
    'views_xhtml' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_datasource/views_xhtml.module',
      'name' => 'views_xhtml',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views XHTML',
        'description' => 'Views style plugin to render node content as XHTML microformats.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_xml',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_xhtml.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'views_xml' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/views_datasource/views_xml.module',
      'name' => 'views_xml',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views XML',
        'description' => 'Views style plugin to render node content as XML.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views/plugins/views_plugin_style_xml.inc',
        ),
        'version' => '7.x-1.0-alpha2',
        'project' => 'views_datasource',
        'datestamp' => '1423859528',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha2',
    ),
    'webform' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7429',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '7.x',
        'package' => 'Webform',
        'configure' => 'admin/config/content/webform',
        'php' => '5.3',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'test_dependencies' => 
        array (
          0 => 'token',
        ),
        'files' => 
        array (
          0 => 'includes/webform.webformconditionals.inc',
          1 => 'includes/exporters/webform_exporter_delimited.inc',
          2 => 'includes/exporters/webform_exporter_excel_delimited.inc',
          3 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
          4 => 'includes/exporters/webform_exporter.inc',
          5 => 'views/webform_handler_area_result_pager.inc',
          6 => 'views/webform_handler_field_form_body.inc',
          7 => 'views/webform_handler_field_is_draft.inc',
          8 => 'views/webform_handler_field_node_link_edit.inc',
          9 => 'views/webform_handler_field_node_link_results.inc',
          10 => 'views/webform_handler_field_submission_count.inc',
          11 => 'views/webform_handler_field_submission_data.inc',
          12 => 'views/webform_handler_field_submission_link.inc',
          13 => 'views/webform_handler_field_webform_status.inc',
          14 => 'views/webform_handler_filter_is_draft.inc',
          15 => 'views/webform_handler_filter_submission_data.inc',
          16 => 'views/webform_handler_filter_webform_status.inc',
          17 => 'views/webform_handler_numeric_data.inc',
          18 => 'views/webform_handler_relationship_submission_data.inc',
          19 => 'views/webform_plugin_row_submission_view.inc',
          20 => 'views/webform.views.inc',
          21 => 'tests/components.test',
          22 => 'tests/conditionals.test',
          23 => 'tests/permissions.test',
          24 => 'tests/submission.test',
          25 => 'tests/webform.test',
        ),
        'version' => '7.x-4.9',
        'project' => 'webform',
        'datestamp' => '1432669985',
      ),
      'version' => '7.x-4.9',
    ),
    'webform_phone' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/webform_phone/webform_phone.module',
      'name' => 'webform_phone',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Webform Phone Number',
        'description' => 'Phone Field type for webform.',
        'package' => 'Webform',
        'dependencies' => 
        array (
          0 => 'webform',
          1 => 'phone (1.x)',
        ),
        'files' => 
        array (
          0 => 'webform_phone.module',
        ),
        'core' => '7.x',
        'version' => '7.x-1.21',
        'project' => 'webform_phone',
        'datestamp' => '1420529914',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.21',
    ),
    'webform_uuid' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/webform_uuid/webform_uuid.module',
      'name' => 'webform_uuid',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Webform UUID',
        'description' => 'Enables basic UUID/Deploy support for webforms, components and validation rules.',
        'core' => '7.x',
        'package' => 'Webform',
        'dependencies' => 
        array (
          0 => 'webform',
          1 => 'uuid',
        ),
        'version' => '7.x-1.1',
        'project' => 'webform_uuid',
        'datestamp' => '1417985581',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'xmlrpc_server' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/services/servers/xmlrpc_server/xmlrpc_server.module',
      'name' => 'xmlrpc_server',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XMLRPC Server',
        'description' => 'Provides a XMLRPC server.',
        'package' => 'Services - servers',
        'files' => 
        array (
          0 => 'xmlrpc_server.module',
        ),
        'dependencies' => 
        array (
          0 => 'services',
        ),
        'core' => '7.x',
        'version' => '7.x-3.12',
        'project' => 'services',
        'datestamp' => '1429118524',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.12',
    ),
    'xmlsitemap' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/xmlsitemap/xmlsitemap.module',
      'name' => 'xmlsitemap',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap',
        'description' => 'Creates an XML sitemap conforming to the <a href="http://sitemaps.org/">sitemaps.org protocol</a>.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'xmlsitemap.module',
          1 => 'xmlsitemap.inc',
          2 => 'xmlsitemap.admin.inc',
          3 => 'xmlsitemap.drush.inc',
          4 => 'xmlsitemap.generate.inc',
          5 => 'xmlsitemap.xmlsitemap.inc',
          6 => 'xmlsitemap.pages.inc',
          7 => 'xmlsitemap.install',
          8 => 'xmlsitemap.test',
        ),
        'recommends' => 
        array (
          0 => 'robotstxt',
        ),
        'configure' => 'admin/config/search/xmlsitemap',
        'version' => '7.x-2.2',
        'project' => 'xmlsitemap',
        'datestamp' => '1422607989',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'xmlsitemap_custom' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/xmlsitemap/xmlsitemap_custom/xmlsitemap_custom.module',
      'name' => 'xmlsitemap_custom',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap custom',
        'description' => 'Adds user configurable links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_custom.module',
          1 => 'xmlsitemap_custom.admin.inc',
          2 => 'xmlsitemap_custom.install',
          3 => 'xmlsitemap_custom.test',
        ),
        'configure' => 'admin/config/search/xmlsitemap/custom',
        'version' => '7.x-2.2',
        'project' => 'xmlsitemap',
        'datestamp' => '1422607989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'xmlsitemap_engines' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/xmlsitemap/xmlsitemap_engines/xmlsitemap_engines.module',
      'name' => 'xmlsitemap_engines',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap engines',
        'description' => 'Submit the sitemap to search engines.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_engines.module',
          1 => 'xmlsitemap_engines.admin.inc',
          2 => 'xmlsitemap_engines.install',
          3 => 'tests/xmlsitemap_engines.test',
        ),
        'recommends' => 
        array (
          0 => 'site_verify',
        ),
        'configure' => 'admin/config/search/xmlsitemap/engines',
        'version' => '7.x-2.2',
        'project' => 'xmlsitemap',
        'datestamp' => '1422607989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'xmlsitemap_i18n' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/xmlsitemap/xmlsitemap_i18n/xmlsitemap_i18n.module',
      'name' => 'xmlsitemap_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap internationalization',
        'description' => 'Enables multilingual XML sitemaps.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'i18n',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_i18n.module',
          1 => 'xmlsitemap_i18n.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'xmlsitemap',
        'datestamp' => '1422607989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'xmlsitemap_menu' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/xmlsitemap/xmlsitemap_menu/xmlsitemap_menu.module',
      'name' => 'xmlsitemap_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap menu',
        'description' => 'Adds menu item links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'menu',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_menu.module',
          1 => 'xmlsitemap_menu.install',
          2 => 'xmlsitemap_menu.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'xmlsitemap',
        'datestamp' => '1422607989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'xmlsitemap_node' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/xmlsitemap/xmlsitemap_node/xmlsitemap_node.module',
      'name' => 'xmlsitemap_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap node',
        'description' => 'Adds content links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_node.module',
          1 => 'xmlsitemap_node.install',
          2 => 'xmlsitemap_node.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'xmlsitemap',
        'datestamp' => '1422607989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'xmlsitemap_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/xmlsitemap/xmlsitemap_taxonomy/xmlsitemap_taxonomy.module',
      'name' => 'xmlsitemap_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap taxonomy',
        'description' => 'Add taxonomy term links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'taxonomy',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_taxonomy.module',
          1 => 'xmlsitemap_taxonomy.install',
          2 => 'xmlsitemap_taxonomy.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'xmlsitemap',
        'datestamp' => '1422607989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'xmlsitemap_user' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/xmlsitemap/xmlsitemap_user/xmlsitemap_user.module',
      'name' => 'xmlsitemap_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap user',
        'description' => 'Adds user profile links to the sitemap.',
        'package' => 'XML sitemap',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'xmlsitemap_user.module',
          1 => 'xmlsitemap_user.install',
          2 => 'xmlsitemap_user.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'xmlsitemap',
        'datestamp' => '1422607989',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'youtube' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/youtube/youtube.module',
      'name' => 'youtube',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'YouTube Field',
        'description' => 'Provides a YouTube widget for fields.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'image',
          2 => 'file',
        ),
        'files' => 
        array (
          0 => 'youtube.migrate.inc',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/youtube.css',
          ),
        ),
        'configure' => 'admin/config/media/youtube',
        'version' => '7.x-1.6',
        'project' => 'youtube',
        'datestamp' => '1431952689',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
    'youtube_colorbox' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/modules/contrib/youtube/modules/youtube_colorbox/youtube_colorbox.module',
      'name' => 'youtube_colorbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'YouTube Field Colorbox',
        'description' => 'Provides Colorbox support to YouTube Field thumbnail display settings.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'colorbox',
          1 => 'youtube',
        ),
        'version' => '7.x-1.6',
        'project' => 'youtube',
        'datestamp' => '1431952689',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.6',
    ),
  ),
  'themes' => 
  array (
    'adminimal' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/themes/contrib/adminimal_theme/adminimal.info',
      'name' => 'adminimal',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Adminimal',
        'description' => 'A simple one-column, tableless, minimalist administration theme.',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'js/jRespond.js',
          1 => 'js/adminimal_theme.js',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
          'display_icons_config' => '1',
          'custom_css' => '0',
          'use_custom_media_queries' => '0',
          'media_query_mobile' => 'only screen and (max-width: 480px)',
          'media_query_tablet' => 'only screen and (min-width : 481px) and (max-width : 1024px)',
        ),
        'regions' => 
        array (
          'content_before' => 'Before Content',
          'sidebar_left' => 'Sidebar Left',
          'content' => 'Content',
          'sidebar_right' => 'Sidebar Right',
          'content_after' => 'After Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'version' => '7.x-1.21',
        'project' => 'adminimal_theme',
        'datestamp' => '1425236582',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.21',
    ),
    'bartik' => 
    array (
      'filename' => '/var/aegir/platforms/rune/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'bootstrap' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/themes/contrib/bootstrap/bootstrap.info',
      'name' => 'bootstrap',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bootstrap',
        'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
        'core' => '7.x',
        'regions' => 
        array (
          'navigation' => 'Navigation',
          'header' => 'Top Bar',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'Primary',
          'sidebar_second' => 'Secondary',
          'footer' => 'Footer',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'bootstrap_breadcrumb' => '1',
          'bootstrap_breadcrumb_home' => '0',
          'bootstrap_breadcrumb_title' => '1',
          'bootstrap_navbar_position' => '',
          'bootstrap_navbar_inverse' => '0',
          'bootstrap_region_well-navigation' => '',
          'bootstrap_region_well-header' => '',
          'bootstrap_region_well-highlighted' => '',
          'bootstrap_region_well-help' => '',
          'bootstrap_region_well-content' => '',
          'bootstrap_region_well-sidebar_first' => 'well',
          'bootstrap_region_well-sidebar_second' => '',
          'bootstrap_region_well-footer' => '',
          'bootstrap_anchors_fix' => '1',
          'bootstrap_anchors_smooth_scrolling' => '1',
          'bootstrap_popover_enabled' => '1',
          'bootstrap_popover_animation' => '1',
          'bootstrap_popover_html' => '0',
          'bootstrap_popover_placement' => 'right',
          'bootstrap_popover_selector' => '',
          'bootstrap_popover_trigger' => 
          array (
            '\'hover\'' => '0',
            '\'focus\'' => '0',
            '\'click\'' => 'click',
          ),
          'bootstrap_popover_title' => '',
          'bootstrap_popover_content' => '',
          'bootstrap_popover_delay' => '0',
          'bootstrap_popover_container' => 'body',
          'bootstrap_tooltip_enabled' => '1',
          'bootstrap_tooltip_descriptions' => '1',
          'bootstrap_tooltip_animation' => '1',
          'bootstrap_tooltip_html' => '0',
          'bootstrap_tooltip_placement' => 'auto left',
          'bootstrap_tooltip_selector' => '',
          'bootstrap_tooltip_trigger' => 
          array (
            '\'hover\'' => 'hover',
            '\'focus\'' => 'focus',
            '\'click\'' => '0',
          ),
          'bootstrap_tooltip_delay' => '0',
          'bootstrap_tooltip_container' => 'body',
          'bootstrap_cdn' => '3.0.2',
          'bootstrap_bootswatch' => '',
          'toggle_name' => '1',
          'toggle_search' => '1',
        ),
        'exclude' => 
        array (
          'css' => 
          array (
            0 => 'misc/vertical-tabs.css',
            1 => 'modules/aggregator/aggregator.css',
            2 => 'modules/book/book.css',
            3 => 'modules/comment/comment.css',
            4 => 'modules/dblog/dblog.css',
            5 => 'modules/file/file.css',
            6 => 'modules/filter/filter.css',
            7 => 'modules/forum/forum.css',
            8 => 'modules/help/help.css',
            9 => 'modules/menu/menu.css',
            10 => 'modules/node/node.css',
            11 => 'modules/openid/openid.css',
            12 => 'modules/poll/poll.css',
            13 => 'modules/search/search.css',
            14 => 'modules/statistics/statistics.css',
            15 => 'modules/syslog/syslog.css',
            16 => 'modules/system/maintenance.css',
            17 => 'modules/system/system.maintenance.css',
            18 => 'modules/system/system.menus.css',
            19 => 'modules/system/system.messages.css',
            20 => 'modules/system/system.theme.css',
            21 => 'modules/taxonomy/taxonomy.css',
            22 => 'modules/tracker/tracker.css',
            23 => 'modules/update/update.css',
            24 => 'modules/user/user.css',
          ),
        ),
        'simplytest_dependencies' => 
        array (
          0 => 'jquery_update',
        ),
        'version' => '7.x-3.0',
        'project' => 'bootstrap',
        'datestamp' => '1384678107',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/rune/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'ohm' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/themes/contrib/omega/ohm/ohm.info',
      'name' => 'ohm',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ohm',
        'description' => 'Omega based demonstration theme. Serves as a best-practice reference for the Omega documentation. Ohm will be constantly updated as best practice evolves so shouldn\'t be used in production.',
        'base theme' => 'omega',
        'screenshot' => 'screenshot.png',
        'engine' => 'phptemplate',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/ohm.normalize.css',
            1 => 'css/ohm.hacks.css',
            2 => 'css/ohm.styles.css',
            3 => 'css/ohm.no-query.css',
          ),
        ),
        'regions' => 
        array (
          'branding' => 'Branding',
          'navigation' => 'Navigation bar',
          'header' => 'Header',
          'hero' => 'Hero',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'First sidebar',
          'sidebar_second' => 'Second sidebar',
          'footer' => 'Footer',
        ),
        'layout' => 
        array (
          'hero' => 
          array (
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/layouts/hero/ohm-hero.layout.css',
              ),
            ),
          ),
        ),
        'settings' => 
        array (
          'toggle_logo' => '1',
          'toggle_name' => '1',
          'toggle_slogan' => '1',
          'toggle_node_user_picture' => '1',
          'toggle_comment_user_picture' => '1',
          'toggle_comment_user_verification' => '1',
          'toggle_favicon' => '1',
          'toggle_main_menu' => '1',
          'toggle_secondary_menu' => '1',
          'omega_toggle_front_page_content' => '1',
          'default_logo' => '1',
          'logo_path' => '',
          'logo_upload' => '',
          'default_favicon' => '1',
          'favicon_path' => '',
          'favicon_upload' => '',
          'omega_toggle_extension_assets' => '1',
          'omega_libraries' => 
          array (
            'selectivizr' => 
            array (
              'status' => '0',
            ),
            'respond' => 
            array (
              'status' => '0',
            ),
            'pie' => 
            array (
              'status' => '0',
            ),
            'html5shiv' => 
            array (
              'status' => '1',
            ),
            'messages' => 
            array (
              'status' => '1',
            ),
          ),
          'omega_toggle_extension_compatibility' => '1',
          'omega_conditional_classes_html' => '1',
          'omega_apple_touch' => '1',
          'omega_cleartype' => '1',
          'omega_handheld_friendly' => '1',
          'omega_mobile_optimized' => '1',
          'omega_viewport' => '1',
          'omega_viewport_user_scaleable' => '1',
          'omega_chrome_edge' => '1',
          'omega_chrome_popup' => '0',
          'omega_chrome_notice' => '0',
          'omega_toggle_extension_layouts' => '1',
          'omega_layout' => 'ohm-hero',
          'omega_toggle_extension_development' => '1',
          'omega_rebuild_theme_registry' => '0',
          'omega_rebuild_aggregates' => '0',
          'omega_browser_width_indicator' => '0',
          'omega_livereload' => '1',
          'omega_livereload_script' => 'http://localhost:35729/livereload.js',
          'omega_livereload_host' => 'localhost',
          'omega_livereload_port' => '35729',
          'omega_demo_regions' => '1',
          'omega_demo_regions_list' => 
          array (
            'navigation' => 'navigation',
            'header' => 'header',
            'hero' => 'hero',
            'highlighted' => 'highlighted',
            'help' => 'help',
            'content' => 'content',
            'sidebar_first' => 'sidebar_first',
            'sidebar_second' => 'sidebar_second',
            'footer' => 'footer',
          ),
        ),
        'version' => '7.x-4.3',
        'project' => 'omega',
        'datestamp' => '1413819533',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-4.3',
    ),
    'omega' => 
    array (
      'filename' => '/var/aegir/platforms/rune/profiles/rune/themes/contrib/omega/omega/omega.info',
      'name' => 'omega',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Omega',
        'description' => 'A powerful HTML5 base theme framework utilizing tools like <a href="http://sass-lang.com/" title="Sass">Sass</a>, <a href="http://compass-style.org/" title="Compass">Compass</a>, <a href="http://gruntjs.com/" title="Grunt">Grunt</a>, <a href="http://bower.io/" title="Bower">Bower</a>, <a href="http://rvm.io/" title="Ruby Version Manager">Ruby Version Manager</a>, <a href="http://bundler.io/" title="Bundler">Bundler</a> and more.',
        'screenshot' => 'screenshot.png',
        'engine' => 'phptemplate',
        'core' => '7.x',
        'regions' => 
        array (
          'branding' => 'Branding',
          'header' => 'Header',
          'navigation' => 'Navigation',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'First Sidebar',
          'sidebar_second' => 'Second Sidebar',
          'footer' => 'Footer',
        ),
        'plugins' => 
        array (
          'panels' => 
          array (
            'layouts' => 'panels/layouts',
            'styles' => 'panels/styles',
          ),
        ),
        'version' => '7.x-4.3',
        'project' => 'omega',
        'datestamp' => '1413819533',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-4.3',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/rune/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/rune/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.39',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1440020197',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.39',
    ),
  ),
);
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
# local non-aegir-generated additions
@include_once('/var/aegir/platforms/rune/sites/maker.com/local.drushrc.php');
