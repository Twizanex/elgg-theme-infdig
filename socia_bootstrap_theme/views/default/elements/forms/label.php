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
$label = elgg_extract('label', $vars, '');
$id = elgg_extract('id', $vars);
$required = elgg_extract('required', $vars);

if (!$label) {
    return;
}

if ($required) {
    $indicator = elgg_extract('required_indicator', $vars);
    if (!isset($indicator)) {
        $indicator = elgg_format_element([
            '#tag_name' => 'span',
            'title' => elgg_echo('field:required'),
            'class' => 'elgg-required-indicator',
            '#text' => "&ast;",
        ]);
    }
    if ($indicator) {
        $label .= $indicator;
    }
}

echo elgg_format_element('label', [
    'for' => $id,
    'class' => ''
        ], $label);
