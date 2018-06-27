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
/*<style>/**/

    #notificationstable td.namefield {
        width:250px;
        text-align: left;
        vertical-align: middle;
    }
    #notificationstable td.namefield p {
        margin:0;
        vertical-align: middle;
        line-height: 1.1em;
        padding:5px 0 5px 0;
    }
    #notificationstable td.namefield p.namefieldlink {
        margin:5px 0 0 0;
    }
    #notificationstable td.namefield a img {
        float:left;
        width:25px;
        height:25px;
        margin:5px 10px 5px 5px;
    }
    #notificationstable td.emailtogglefield,
    #notificationstable td.smstogglefield {
        width:50px;
        text-align: center;
        vertical-align: middle;
    }
    #notificationstable td.spacercolumn {
        width:30px;
    }
    #notificationstable td {
        border-bottom: 1px solid #DCDCDC;
        padding: 6px 0;
    }
    #notificationstable td.emailtogglefield input {
        margin-right:36px;
        margin-top:5px;
    }
    #notificationstable td.emailtogglefield a {
        width:46px;
        height:24px;
        cursor: pointer;
        display: block;
    }
    #notificationstable td.sitetogglefield {
        width:50px;
        text-align: center;
        vertical-align: middle;
    }
    #notificationstable td.sitetogglefield input {
        margin-right:36px;
        margin-top:5px;
    }
    #notificationstable td.sitetogglefield a {
        width:46px;
        height:24px;
        cursor: pointer;
        display: block;
    }
    #notificationstable td.emailtogglefield a.emailtoggleOff {
        background: url(<?= elgg_get_simplecache_url('notifications/icon_notifications_email.gif'); ?>) no-repeat right 2px;
    }
    #notificationstable td.emailtogglefield a.emailtoggleOn {
        background: url(<?= elgg_get_simplecache_url('notifications/icon_notifications_email.gif'); ?>) no-repeat right -36px;
    }
    #notificationstable td.sitetogglefield a.sitetoggleOff {
        background: url(<?= elgg_get_simplecache_url('notifications/icon_notifications_site.gif'); ?>) no-repeat right 2px;
    }
    #notificationstable td.sitetogglefield a.sitetoggleOn {
        background: url(<?= elgg_get_simplecache_url('notifications/icon_notifications_site.gif'); ?>) no-repeat right -37px;
    }
    .notification_friends,
    .notification_personal,
    .notifications_per_user {
        margin-bottom: 25px;
    }



