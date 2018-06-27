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
$class = 'elgg-layout elgg-layout-two-sidebar clearfix';
if (isset($vars['class'])) {
    $class = "$class {$vars['class']}";
}
?>

<div class="<?php echo $class; ?>">
    <div class="elgg-sidebar-alt">
        <?php
        echo elgg_view('page/elements/sidebar_alt', $vars);
        ?>
    </div>

    <div class="elgg-main elgg-body">
        <?php
        echo elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));

        echo elgg_view('page/layouts/elements/header', $vars);

        echo $vars['content'];

        // @deprecated 1.8
        if (isset($vars['area1'])) {
            echo $vars['area1'];
        }

        echo elgg_view('page/layouts/elements/footer', $vars);
        ?>
    </div>
    <div class="elgg-sidebar">
        <?php
        // With the mobile experience in mind, the content order is changed in socia theme,
        // by moving sidebar below main content.
        // On smaller screens, blocks are stacked in left to right order: content, sidebar.
        echo elgg_view('page/elements/sidebar', $vars);
        ?>
    </div>
</div>
