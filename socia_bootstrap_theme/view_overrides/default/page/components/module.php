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
$panel_type = elgg_get_plugin_setting("panel_type", "socia_bootstrap_theme");
if (!$panel_type) {
    $panel_type = "panel-default";
}

if (!elgg_in_context("admin")) {

    $type = elgg_extract('type', $vars, false);
    $title = elgg_extract('title', $vars, '');
    $body = elgg_extract('body', $vars, '');
    $footer = elgg_extract('footer', $vars, '');
    $show_inner = elgg_extract('show_inner', $vars, false);

    $attrs = [
        'id' => elgg_extract('id', $vars),
        'class' => elgg_extract_class($vars, "panel $panel_type"),
    ];

    if ($type) {
        $attrs['class'][] = "elgg-module-$type";
    }

    $header = elgg_extract('header', $vars);
    if ($title) {
        $header = elgg_format_element('h3', ['class' => 'panel-title'], $title);
    }

    if ($header !== null) {
        $header = elgg_format_element('div', ['class' => 'panel-heading', 'style' => 'position:relative;'], $header);
    }
    $body = elgg_format_element('div', ['class' => 'panel-body'], $body);
    if ($footer) {
        $footer = elgg_format_element('div', ['class' => 'panel-footer'], $footer);
    }

    $contents = $header . $body . $footer;
    if ($show_inner) {
        $contents = elgg_format_element('div', ['class' => 'container-fluid'], $contents);
    }

    echo elgg_format_element('div', $attrs, $contents);
} else {
    $type = elgg_extract('type', $vars, false);
    $title = elgg_extract('title', $vars, '');
    $body = elgg_extract('body', $vars, '');
    $footer = elgg_extract('footer', $vars, '');
    $show_inner = elgg_extract('show_inner', $vars, false);

    $attrs = [
        'id' => elgg_extract('id', $vars),
        'class' => elgg_extract_class($vars, 'elgg-module'),
    ];

    if ($type) {
        $attrs['class'][] = "elgg-module-$type";
    }

    $header = elgg_extract('header', $vars);
    if ($title) {
        $header = elgg_format_element('h3', [], $title);
    }

    if ($header !== null) {
        $header = elgg_format_element('div', ['class' => 'elgg-head'], $header);
    }
    $body = elgg_format_element('div', ['class' => 'elgg-body'], $body);
    if ($footer) {
        $footer = elgg_format_element('div', ['class' => 'elgg-foot'], $footer);
    }

    $contents = $header . $body . $footer;
    if ($show_inner) {
        $contents = elgg_format_element('div', ['class' => 'elgg-inner'], $contents);
    }

    echo elgg_format_element('div', $attrs, $contents);
}