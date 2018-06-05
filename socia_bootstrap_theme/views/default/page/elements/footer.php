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
?>
<style>
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: .5px;
    border-color: #E1E4EA;
} 
#footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:38.5px;   /* Height of the footer */
}
</style>
<div class="footer" id="footer">
    <div class="container">
        <div class='row'>
            <hr>
        </div>
        <div class='row'>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <span style='color: #063A54;'>©2018 Infanzia Digitales. Tutti i diritti riservati.</span>
            </div>
            <div class="col-md-4"></div>
            
        </div>
        <?php
        //echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));
        //echo "<div class='row'><span>©2018 Infanzia Digitales. Tutti i diritti riservati.</span></div>"
        ?>
    </div>
</div>