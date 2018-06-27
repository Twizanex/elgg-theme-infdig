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
$tabs = array(
    'newest' => array(
        'text' => elgg_echo('sort:newest'),
        'href' => 'groups/all?filter=newest',
        'priority' => 200,
    ),
    'alpha' => array(
        'text' => elgg_echo('sort:alpha'),
        'href' => 'groups/all?filter=alpha',
        'priority' => 250,
    ),
    'popular' => array(
        'text' => elgg_echo('sort:popular'),
        'href' => 'groups/all?filter=popular',
        'priority' => 300,
    ),
    'featured' => array(
        'text' => elgg_echo('groups:featured'),
        'href' => 'groups/all?filter=featured',
        'priority' => 400,
    ),
);

if (elgg_is_active_plugin('discussions')) {
    $tabs['discussion'] = array(
        'text' => elgg_echo('discussion:latest'),
        'href' => 'groups/all?filter=discussion',
        'priority' => 500,
    );
}

foreach ($tabs as $name => $tab) {
    $tab['name'] = $name;

    if ($vars['selected'] == $name) {
        $tab['selected'] = true;
    }

    elgg_register_menu_item('filter', $tab);
}

echo elgg_view_menu('filter', array('sort_by' => 'priority', 'class' => 'nav nav-tabs'));
