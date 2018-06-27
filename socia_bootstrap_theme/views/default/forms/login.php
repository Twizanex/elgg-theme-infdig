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
/*$entity = $vars["entity"];
$title = $entity->title;
$subtitle = "";
$image = elgg_view_entity_icon($entity, "small");
$params = array(
    "title" => $title,
    "entity" => $entity,
    "subtitle" => $subtitle,
    "tags" => FALSE,
);
$body = elgg_view("assets/images/logo.png", $params);
echo elgg_view_image_block($image,$body, array());
*/
//echo elgg_echo("<img src='{$vars['url']}mod/socia_bootstrap_theme/assets/images/headerImage.png' />");
//echo elgg_echo("<img src='{$vars['url']}mod/socia_bootstrap_theme/assets/images/infanziaLogo.png' />");
echo elgg_echo("<h2 style='font-family:Lato, Black;text-align:center;font-size:24px;color:#CC1962;'>Accedi</h2>");
echo elgg_echo("<p style='font-family:Lato, Black;text-align:center;font-size:15px;color:#063A54;'>Inserisci le tue credenziali per effettuare l'accesso</p>");


echo elgg_view_field([
    '#type' => 'text',
    'name' => 'username',
    'autofocus' => true,
    'required' => true,
    //'#label' => elgg_echo('loginusername'),
    'placeholder'=> 'Email',
]);

echo elgg_view_field([
    '#type' => 'password',
    'name' => 'password',
    'required' => true,
    //'#label' => elgg_echo('password'),
    'placeholder'=> 'Password',
]);
//echo elgg_view_icon('eye');
echo elgg_view('login/extend', $vars);

if (isset($vars['returntoreferer'])) {
    echo elgg_view_field([
        '#type' => 'hidden',
        'name' => 'returntoreferer',
        'value' => 'true'
    ]);
}

ob_start();
?>
<div class="elgg-foot">
    <div class="checkbox checkbox-primary">
        <label><input type="checkbox" value="">Rimani connesso</label>
    </div>
    <!-- <label class="mtm float-left checkbox checkbox-primary">
        <input type="checkbox" name="persistent" value="true" />
        <?php //echo elgg_echo('Rimani connesso'); ?>
    </label> -->

    <?php
    //button
    echo "<br>";
    echo elgg_view('input/submit', 
        array(
            'value' => elgg_echo('Accedi')
        )
    );

    //register or lost password
    echo elgg_view_menu('login', array(
        'sort_by' => 'priority',
        'class' => 'elgg-menu-general elgg-menu-hz mtm',
    ));
    ?>
</div>
<?php
$footer = ob_get_clean();
elgg_set_form_footer($footer);
