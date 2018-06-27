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
$options = $vars;

$type = elgg_extract('type', $vars, 'horizontal');

$options['class'] = "nav nav-tabs";
if (isset($vars['class'])) {
    $options['class'] = "{$options['class']} {$vars['class']}";
}

unset($options['tabs']);
unset($options['type']);

$attributes = elgg_format_attributes($options);

if (isset($vars['tabs']) && is_array($vars['tabs']) && !empty($vars['tabs'])) {
    ?>
    <ul <?php echo $attributes; ?>>
        <?php
        foreach ($vars['tabs'] as $info) {
            $class = elgg_extract('class', $info, '');
            $id = elgg_extract('id', $info, '');

            $selected = elgg_extract('selected', $info, FALSE);
            if ($selected) {
                $class .= ' active';
            }

            $class_str = ($class) ? "class=\"$class\"" : '';
            $id_str = ($id) ? "id=\"$id\"" : '';

            $options = $info;
            unset($options['class']);
            unset($options['id']);
            unset($options['selected']);

            if (!isset($info['href']) && isset($info['url'])) {
                $options['href'] = $info['url'];
                unset($options['url']);
            }
            if (!isset($info['text']) && isset($info['title'])) {
                $options['text'] = $options['title'];
                unset($options['title']);
            }
            if (isset($info['link_class'])) {
                $options['class'] = $options['link_class'];
                unset($options['link_class']);
            }

            if (isset($info['link_id'])) {
                $options['id'] = $options['link_id'];
                unset($options['link_id']);
            }

            $link = elgg_view('output/url', $options);

            echo "<li $id_str $class_str>$link</li>";
        }
        ?>
    </ul>
    <?php
}