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

elgg_require_js('elgg/thewire');

$post = elgg_extract('post', $vars);
//$char_limit = (int)elgg_get_plugin_setting('limit', 'thewire');
$char_limit = 0;

$text = elgg_echo('post');
if ($post) {
	$text = elgg_echo('reply');
}
$chars_left = elgg_echo('thewire:charleft');

$parent_input = '';
if ($post) {
	$parent_input = elgg_view('input/hidden', array(
		'name' => 'parent_guid',
		'value' => $post->guid,
	));
}

$count_down = "<span>$char_limit</span> $chars_left";
$num_lines = 2;
if ($char_limit == 0) {
	$num_lines = 3;
	$count_down = '';
} else if ($char_limit > 140) {
	$num_lines = 3;
}

$post_input = elgg_view('input/longtext', array(
	'name' => 'body',
	'class' => 'mtm',
	'id' => 'thewire-textarea',
	'rows' => $num_lines,
	'data-max-length' => $char_limit,
));

$submit_button = elgg_view('input/submit', array(
	'value' => $text,
	'id' => 'thewire-submit-button',
));

echo <<<HTML
	$post_input
<div id="thewire-characters-remaining">
	$count_down
</div>
<div class="elgg-foot mts">
	$parent_input
	$submit_button
</div>
HTML;
