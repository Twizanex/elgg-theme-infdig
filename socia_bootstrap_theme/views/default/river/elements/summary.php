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
/**
 * Short summary of the action that occurred
 *
 * @vars['item'] ElggRiverItem
 */

$item = $vars['item'];

$subject = $item->getSubjectEntity();
$object = $item->getObjectEntity();

$subject_link = elgg_view('output/url', array(
	'href' => $subject->getURL(),
	'text' => $subject->name,
	'class' => 'elgg-river-subject',
	'is_trusted' => true,
));

$object_text = $object->title ? $object->title : $object->name;
$object_link = elgg_view('output/url', array(
	'href' => $object->getURL(),
	'text' => elgg_get_excerpt($object_text, 100),
	'class' => 'elgg-river-object',
	'is_trusted' => true,
));

$action = $item->action_type;
$type = $item->type;
$subtype = $item->subtype ? $item->subtype : 'default';

// check summary translation keys.
// will use the $type:$subtype if that's defined, otherwise just uses $type:default
$key = "river:$action:$type:$subtype";
$summary = elgg_echo($key, array($subject_link, $object_link));

if ($summary == $key) {
	$key = "river:$action:$type:default";
	$summary = elgg_echo($key, array($subject_link, $object_link));
}

echo $summary;
