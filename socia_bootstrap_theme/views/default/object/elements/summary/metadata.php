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
 * Outputs object metadata
 * @uses $vars['metadata'] Metadata/menu
 * @uses $vars['entity']    ElggEntity
 */

$metadata = elgg_extract('metadata', $vars);
/******************************************update*************************/
// $item = $vars['entity'];
// /* @var ElggRiverItem $item */

// $object = $item->getObjectEntity();
// /* count comment and make link */
// $comment_count = $object->countComments();
// $like_count = likes_count($object);

// /* end count comment and make link */
// $total_like="<span class='elgg-river-like'>Piace a $like_count persone</span>";
// $total_comment="<span class='elgg-river-comment'>$comment_count Commenti</span>";
// $metadata=$total_like.$total_comment;
/******************************************update*************************/
if (!$metadata) {
	return;
}
echo $metadata;