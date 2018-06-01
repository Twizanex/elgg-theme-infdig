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
if (isset($vars['breadcrumbs'])) {
    $breadcrumbs = $vars['breadcrumbs'];
} else {
    $breadcrumbs = elgg_get_breadcrumbs();
}

if (!is_array($breadcrumbs) || !$breadcrumbs) {
    return;
}

$attrs['class'] = elgg_extract_class($vars, ['breadcrumb row']);
$lis = '';

foreach ($breadcrumbs as $breadcrumb) {
    // We have to escape text (without double-encoding). Titles in core plugins are HTML escaped
    // on input, but we can't guarantee that other users of this view and of elgg_push_breadcrumb()
    // will do so.
    if (!empty($breadcrumb['link'])) {
        $crumb = elgg_view('output/url', array(
            'href' => $breadcrumb['link'],
            'text' => $breadcrumb['title'],
            'encode_text' => true,
            'is_trusted' => true,
        ));
    } else {
        $crumb = htmlspecialchars($breadcrumb['title'], ENT_QUOTES, 'UTF-8', false);
    }

    $lis .= "<li>$crumb</li>";
}

echo elgg_format_element('ul', $attrs, $lis);
