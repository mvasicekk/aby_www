<?php
function render_menu_tree($menu_tree) {
    print '<ul>';
    foreach ($menu_tree as $link) {
        print '<li>';
        $link_path = '#';
        $link_title = $link['link']['link_title'];
        if($link['link']['link_path']) {
            $link_path = drupal_get_path_alias($link['link']['link_path']);
        }
        print '<a href="/' . $link_path . '">' . $link_title . '</a>';
        if(count($link['below']) > 0) {
            render_menu_tree($link['below']);
        }
        print '</li>';
    }
    print '</ul>';
}


function jobsTheme_css_alter(&$css) {

  // Sort CSS items, so that they appear in the correct order.
  // This is taken from drupal_get_css().
  uasort($css, 'drupal_sort_css_js');

  // The Print style sheets
  // I will populate this array with the print css (usually I have only one but just in case…)
  $print = array();

  // I will add some weight to the new $css array so every element keeps its position
  $weight = 0;

  foreach ($css as $name => $style) {

    // I leave untouched the conditional stylesheets
    // and put all the rest inside a 0 group
    if ($css[$name]['browsers']['!IE']) {
      $css[$name]['group'] = 0;
      $css[$name]['weight'] = ++$weight;
      $css[$name]['every_page'] = TRUE;
    }

    // I move all the print style sheets to a new array
    if ($css[$name]['media'] == 'print') {
      // remove and add to a new array
      $print[$name] = $css[$name];
      unset($css[$name]);
    }

  }

  // I merge the regular array and the print array
  $css = array_merge($css, $print);

}

function jobsTheme_menu_link($variables) {

  //get path alias of current page
  $current_path = drupal_get_path_alias();

  //get path alias of menu item
  $menu_path = drupal_get_path_alias($variables['element']['#href']);

  //if the href of the menu item is found in the current path
  if (strstr($current_path, $menu_path)){
    //add active-trail class to li and a tags for that item
    $variables['element']['#attributes']['class'][] = 'active-trail';
    $variables['element']['#localized_options']['attributes']['class'][] = 'active-trail';
  }

  return theme_menu_link($variables);
}

/*
 * Implements hook_theme().
 *
*/
function jobsTheme_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'jobsTheme') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'jobsThemeE_preprocess_user_login'
  ),
 );
return $items;
}
