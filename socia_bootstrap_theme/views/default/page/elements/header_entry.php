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
?>     
    <?php 
        echo elgg_echo("<img style='height: 12px; width: 100%; ' src='{$vars['url']}mod/socia_bootstrap_theme/assets/images/headerImage.png' / >");
    ?>
        
    
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?php 
                    //style='height: 56px; width: 211.45px;'
                    echo elgg_echo("<img  src='{$vars['url']}mod/socia_bootstrap_theme/assets/images/infanziaLogo.png' />");
                ?>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <?php
