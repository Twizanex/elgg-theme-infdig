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

elgg_push_context('owner_block');

// groups and other users get owner block
$owner = elgg_get_page_owner_entity();
if ($owner instanceof ElggGroup || $owner instanceof ElggUser) {

    $header = elgg_view_entity($owner, array('full_view' => false));

    $body = elgg_view_menu('owner_block', array('entity' => $owner, 'class' => 'list-group'));

    $body .= elgg_view('page/elements/owner_block/extend', $vars);

    echo elgg_view('page/components/module', array(
        'header' => $header,
        'body' => $body,
        'class' => '',
    ));
}

elgg_pop_context();
