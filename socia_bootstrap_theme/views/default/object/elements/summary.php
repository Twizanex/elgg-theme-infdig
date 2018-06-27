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
 * Object summary
 * Passing an 'icon' with the variables will wrap the listing in an image block. In that case,
 * variables not listed in @uses (e.g. image_alt) will be passed to the image block.
 *
 * @uses $vars['entity']    ElggEntity
 * @uses $vars['title']     Title link (optional) false = no title, '' = default
 * @uses $vars['metadata']  HTML for entity menu and metadata (optional)
 * @uses $vars['subtitle']  HTML for the subtitle (optional)
 * @uses $vars['tags']      HTML for the tags (default is tags on entity, pass false for no tags)
 * @uses $vars['content']   HTML for the entity content (optional)
 * @uses $vars['icon']      Object icon. If set, the listing will be wrapped with an image block
 * @uses $vars['class']     Class selector for the image block
 * @uses $vars['image_block_vars'] Attributes for the image block wrapper
 */
$entity = elgg_extract('entity', $vars);
if (!$entity instanceof ElggEntity) {
	elgg_log("object/elements/summary expects an ElggEntity in \$vars['entity']", 'ERROR');
}

$title = elgg_extract('title', $vars, '');
if ($title === '' && $entity instanceof ElggEntity) {
	$vars['title'] = elgg_view('output/url', [
		'text' => elgg_get_excerpt($entity->getDisplayName(), 100),
		'href' => $entity->getURL(),
	]);
}

$tags = elgg_extract('tags', $vars, '');
if ($tags === '') {
	$tags = elgg_view('output/tags', [
		'entity' => $entity,
	]);
}

$metadata = elgg_view('object/elements/summary/metadata', $vars);
$title = elgg_view('object/elements/summary/title', $vars);
$subtitle = elgg_view('object/elements/summary/subtitle', $vars);
$extensions = elgg_view('object/summary/extend', $vars);
$content = elgg_view('object/elements/summary/content', $vars);

$date = elgg_view_friendly_time($vars['entity']->getTimeCreated());

// $object = $vars['entity']->getObjectEntity();
// $like_count = likes_count($object);
$timestamp="<span class='elgg-river-timestamp'>$date</span>";
$summary =  $title . $subtitle . $tags . $extensions . $content . $timestamp .$metadata;

$icon = elgg_extract('icon', $vars);
if (isset($icon)) {
	$params = (array) elgg_extract('image_block_vars', $vars, []);
	$class = elgg_extract_class($params);
	$class = elgg_extract_class($vars, $class);
	$params['class'] = $class;
	$params['data-guid'] = $entity->guid;
	
	echo elgg_view_image_block($icon, $summary, $params);
} else {
	echo $summary;
}
