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
$default_items = elgg_extract('default', $vars['menu'], array());
$more_items = elgg_extract('more', $vars['menu'], array());

echo '<ul class="nav navbar-nav navbar">';
foreach ($default_items as $menu_item) {
    echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
}

if ($more_items) {
    echo '<li class="dropdown">';

    $more = elgg_echo('more');
    echo "<a href=\"#\" class='dropdown-toggle' data-toggle='dropdown' role='button'>$more <span class='caret'></span></a>";

    echo elgg_view('navigation/menu/elements/section', array(
        'class' => 'dropdown-menu',
        'items' => $more_items,
    ));

    echo '</li>';
}
echo '</ul>';
