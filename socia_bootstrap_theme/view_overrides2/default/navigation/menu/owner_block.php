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
$menu = $vars['menu']['default'];

if (is_array($menu)) {
    echo '<ul class="nav nav-pills nav-stacked">';
    foreach ($menu as $m) {
        $text = $m->getText();
        $href = $m->getHref();
        $selected = $m->getSelected() ? "active" : "";
        echo "<li role='presentation' class='$selected'><a href='$href'>$text</a></li>";
    }
    echo '</ul>';
}