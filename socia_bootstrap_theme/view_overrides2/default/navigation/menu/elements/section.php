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
 * @author     Shane Barron <admin@socia.us>
 * @copyright  2017 SocialApparatus
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.2
 * @link       http://socia.us
 */
$items = elgg_extract('items', $vars, array());
$headers = elgg_extract('show_section_headers', $vars, false);
$attrs['class'] = elgg_extract_class($vars);
$item_class = elgg_extract('item_class', $vars, '');

if ($headers) {
    $name = elgg_extract('name', $vars);
    $section = elgg_extract('section', $vars);
    echo '<h2>' . elgg_echo("menu:$name:header:$section") . '</h2>';
}

$lis = '';

if (is_array($items)) {
    foreach ($items as $menu_item) {
        $lis .= elgg_view('navigation/menu/elements/item', array(
            'item' => $menu_item,
            'item_class' => $item_class,
        ));
    }
}
echo elgg_format_element('ul', $attrs, $lis);
