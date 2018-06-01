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
$image_path = $vars['entity']->image_path;
$secondary_theme = $vars['entity']->secondary_theme;
$navbar_style = $vars['entity']->navbar_style;
$panel_type = $vars['entity']->panel_type;

echo elgg_view_field(array(
    "#label" => "Logo Path",
    "#type" => "text",
    "value" => $image_path,
    "name" => "params[image_path]"
));

echo elgg_view_field(array(
    "#label" => "Navbar Style",
    "#type" => "dropdown",
    "value" => $navbar_style,
    "name" => "params[navbar_style]",
    "options_values" => array(
        "default" => "Default",
        "inverse" => "Inverse"
    )
));

echo elgg_view_field(array(
    "#label" => "Panel Type",
    "#type" => "dropdown",
    "value" => $panel_type,
    "name" => "params[panel_type]",
    "options_values" => array(
        "panel-default" => elgg_echo("panel-default"),
        "panel-primary" => elgg_echo("panel-primary"),
        "panel-success" => elgg_echo("panel-success"),
        "panel-info" => elgg_echo("panel-info"),
        "panel-warning" => elgg_echo("panel-warning"),
        "panel-danger" => elgg_echo("panel-danger")
    )
));

echo elgg_view_field(array(
    "#label" => "Secondary Theme",
    "#type" => "dropdown",
    "value" => $secondary_theme,
    "name" => "params[secondary_theme]",
    "options_values" => socia_available_themes()
));
