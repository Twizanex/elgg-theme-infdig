<?php

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