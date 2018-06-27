<?php

/**
 * Twitter&reg; Bootstrap Theme for Elgg
 *
 * Converts all Elgg css elements to Twitter&reg; Bootstrap elements.  Helps 
 * Designers create beautiful Bootstrap themes for Elgg.
 *
 * PHP version 5.6
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Elgg Themes
 * @author     Nur Alam
 * @copyright  2017 SocialApparatus
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0
 */
if (!elgg_in_context("admin")) {
    $headers = elgg_extract('show_section_headers', $vars, false);

    if (empty($vars['name'])) {
        $msg = elgg_echo('view:missing_param', array('name', 'navigation/menu/page'));
        elgg_log($msg, 'WARNING');
        $vars['name'] = '';
    }

    $class = 'nav nav-pills nav-stacked mbm';
    if (isset($vars['class'])) {
        $class = "$class {$vars['class']}";
    }

    if (isset($vars['selected_item'])) {
        $parent = $vars['selected_item']->getParent();

        while ($parent) {
            $parent->setSelected();
            $parent = $parent->getParent();
        }
    }

    foreach ($vars['menu'] as $section => $menu_items) {
        echo elgg_view('navigation/menu/elements/section', array(
            'items' => $menu_items,
            'class' => "$class elgg-menu-page-$section",
            'section' => $section,
            'name' => $vars['name'],
            'show_section_headers' => $headers
        ));
    }
} else {
    $headers = elgg_extract('show_section_headers', $vars, false);

    if (empty($vars['name'])) {
        $msg = elgg_echo('view:missing_param', array('name', 'navigation/menu/page'));
        elgg_log($msg, 'WARNING');
        $vars['name'] = '';
    }

    $class = 'elgg-menu elgg-menu-page';
    if (isset($vars['class'])) {
        $class = "$class {$vars['class']}";
    }

    if (isset($vars['selected_item'])) {
        $parent = $vars['selected_item']->getParent();

        while ($parent) {
            $parent->setSelected();
            $parent = $parent->getParent();
        }
    }

    foreach ($vars['menu'] as $section => $menu_items) {
        echo elgg_view('navigation/menu/elements/section', array(
            'items' => $menu_items,
            'class' => "$class elgg-menu-page-$section",
            'section' => $section,
            'name' => $vars['name'],
            'show_section_headers' => $headers
        ));
    }
}