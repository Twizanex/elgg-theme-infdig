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
 * @author     Shane Barron <admin@socia.us>
 * @copyright  2017 SocialApparatus
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.2
 * @link       http://socia.us
 */
$vars['class'] = elgg_extract_class($vars, 'selectpicker form-control');

$defaults = array(
    'disabled' => false,
    'value' => '',
    'options_values' => array(),
    'options' => array(),
);

$vars = array_merge($defaults, $vars);

$options_values = $vars['options_values'];
unset($vars['options_values']);

$options = $vars['options'];
unset($vars['options']);

$value = is_array($vars['value']) ? $vars['value'] : array($vars['value']);
$value = array_map('strval', $value);
unset($vars['value']);

$vars['multiple'] = !empty($vars['multiple']);

// Add trailing [] to name if multiple is enabled to allow the form to send multiple values
if ($vars['multiple'] && !empty($vars['name']) && is_string($vars['name'])) {
    if (substr($vars['name'], -2) != '[]') {
        $vars['name'] = $vars['name'] . '[]';
    }
}

$options_list = '';

if ($options_values) {
    foreach ($options_values as $opt_value => $option) {

        $option_attrs = array(
            'value' => $opt_value,
            'selected' => in_array((string) $opt_value, $value),
        );

        if (is_array($option)) {
            $text = elgg_extract('text', $option, '');
            unset($option['text']);
            if (!$text) {
                elgg_log('No text defined for input/select option with value "' . $opt_value . '"', 'ERROR');
            }

            $option_attrs = array_merge($option_attrs, $option);
        } else {
            $text = $option;
        }

        $options_list .= elgg_format_element('option', $option_attrs, $text);
    }
} else {
    if (is_array($options)) {
        foreach ($options as $option) {

            if (is_array($option)) {
                $text = elgg_extract('text', $option, '');
                unset($option['text']);

                if (!$text) {
                    elgg_log('No text defined for input/select option', 'ERROR');
                }

                $option_attrs = [
                    'selected' => in_array((string) $text, $value),
                ];
                $option_attrs = array_merge($option_attrs, $option);
            } else {
                $option_attrs = [
                    'selected' => in_array((string) $option, $value),
                ];

                $text = $option;
            }

            $options_list .= elgg_format_element('option', $option_attrs, $text);
        }
    }
}

echo "<div class='form-group'>";
echo elgg_format_element('select', $vars, $options_list);
echo "</div>";
