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
 * Object full view
 *
 * @uses $vars['entity']        ElggEntity
 * @uses $vars['icon']          HTML for the content icon
 * @uses $vars['summary']       HTML for the content summary
 * @uses $vars['body']          HTML for the content body
 * @uses $vars['class']         Optional additional class for the content wrapper
 * @uses $vars['header_params'] Vars to pass to the header image block wrapper
 */
$entity = elgg_extract('entity', $vars);
if (!$entity instanceof ElggEntity) {
	elgg_log("object/elements/full expects an ElggEntity in \$vars['entity']", 'ERROR');
}

$class = elgg_extract_class($vars, ['elgg-listing-full', 'elgg-content', 'clearfix']);
unset($vars['class']);

$header = elgg_view('object/elements/full/header', $vars);
$body = elgg_view('object/elements/full/body', $vars);

echo elgg_format_element('div', [
	'class' => $class,
	'data-guid' => $entity->guid,
		], $header . $body);


