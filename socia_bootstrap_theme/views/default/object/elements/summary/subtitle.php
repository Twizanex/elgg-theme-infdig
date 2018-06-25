<?php
/**
 * Outputs object subtitle
 * @uses $vars['subtitle'] Subtitle
 */
//$subtitle = elgg_extract('subtitle', $vars);
$owner_link = '';
$owner = $vars['entity']->getOwnerEntity();
if ($owner) {
	$owner_link = elgg_view('output/url', array(
		'href' => $owner->getURL(),
		'text' => $owner->name,
		'is_trusted' => true,
	));
}

$date = elgg_view_friendly_time($vars['entity']->getTimeCreated());

$subtitle = "$owner_link";
if (!$subtitle) {
	return;
}
?>
<div class="elgg-listing-summary-subtitle elgg-subtext"><?= $subtitle ?></div>