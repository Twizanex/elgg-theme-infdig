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
if (elgg_get_context() != 'login' && elgg_get_context()!= 'register') {

$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));

$header = elgg_view('page/elements/header', $vars);
$navbar = elgg_view('page/elements/navbar', $vars);
$content = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);

$body = <<<__BODY
<div class="elgg-page elgg-page-default">
	<div class="elgg-page-messages">
		$messages
	</div>
__BODY;

$body .= elgg_view('page/elements/topbar_wrapper', $vars);

$body .= <<<__BODY
	<div class="elgg-page-header">
            <div class="container">
                <div class="row">
                    $header
                </div>
            </div>
	</div>
        $navbar
        <div class='container body'>
                $content
                <div style='clear:both;'></div>
        </div>
        $footer
</div>
__BODY;

$body .= elgg_view('page/elements/foot');

$head = elgg_view('page/elements/head', $vars['head']);

$params = array(
    'head' => $head,
    'body' => $body,
);

if (isset($vars['body_attrs'])) {
    $params['body_attrs'] = $vars['body_attrs'];
}

echo elgg_view("page/elements/html", $params);

}/***********************************************************************for login and registration page*/
else{

    $header = elgg_view('page/elements/header_entry', $vars);
    $content = elgg_view('page/elements/body', $vars);
    $footer = elgg_view('page/elements/footer', $vars);
    

$body .= <<<__BODY
    <div class="" style="margin-top: -7px;">
            $header
    </div>
        
        <div class='container body'>
                $content
                <div style='clear:both;'></div>
        </div>
        $footer
</div>
__BODY;
    
    $body .= elgg_view('page/elements/foot');
    
    $head = elgg_view('page/elements/head', $vars['head']);
    
    $params = array(
        'head' => $head,
        'body' => $body,
    );
    
    if (isset($vars['body_attrs'])) {
        $params['body_attrs'] = $vars['body_attrs'];
    }
    
    echo elgg_view("page/elements/html", $params);
}