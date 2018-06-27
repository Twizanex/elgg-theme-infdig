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
$value = "";
if (array_key_exists('value', $vars)) {
    $value = $vars['value'];
} elseif ($value = get_input('q', get_input('tag', NULL))) {
    $value = $value;
}

$class = "navbar-form navbar-left";
if (isset($vars['class'])) {
    $class = "$class {$vars['class']}";
}

// @todo - create function for sanitization of strings for display in 1.8
// encode <,>,&, quotes and characters above 127
if (function_exists('mb_convert_encoding')) {
    $display_query = mb_convert_encoding($value, 'HTML-ENTITIES', 'UTF-8');
} else {
    // if no mbstring extension, we just strip characters
    $display_query = preg_replace("/[^\x01-\x7F]/", "", $value);
}

// render placeholder separately so it will double-encode if needed
$placeholder = htmlspecialchars(elgg_echo('search'), ENT_QUOTES, 'UTF-8');

$search_attrs = elgg_format_attributes(array(
    'type' => 'text',
    'class' => 'form-control',
    'size' => '21',
    'name' => 'q',
    'autocapitalize' => 'off',
    'autocorrect' => 'off',
    'required' => true,
    'value' => $display_query,
        ));
?>

<!-- <form class="<?php //echo $class; ?>" action="<?php //echo elgg_get_site_url(); ?>search" method="get">
    <div class="form-group">
        <input placeholder="<?php //echo $placeholder; ?>" <?php //echo $search_attrs; ?> />
        
    </div>
    <button type="submit" class="btn btn-info"><?php //echo elgg_echo('search:go'); ?></button>
</form> -->







