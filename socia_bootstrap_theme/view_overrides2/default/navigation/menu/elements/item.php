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
$item = $vars['item'];

$link_class = '';
if ($item->getSelected()) {
    $link_class = 'active';
}

$children = $item->getChildren();
if ($children) {
    $item->addLinkClass($link_class);
    $item->addLinkClass('dropdown');
}

$item_class = $item->getItemClass();
if ($item->getSelected()) {
    $item_class = "$item_class active";
}
if (isset($vars['item_class']) && $vars['item_class']) {
    $item_class .= ' ' . $vars['item_class'];
}

echo "<li class=\"$item_class\">";
echo elgg_view_menu_item($item);
if ($children) {
    echo elgg_view('navigation/menu/elements/section', array(
        'items' => $children,
    ));
}
echo '</li>';
