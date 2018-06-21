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

<?php
$navbar_style = elgg_get_plugin_setting("navbar_style", "socia_bootstrap_theme");
if (!$navbar_style) {
    $navbar_style = "default";
}
$url = elgg_get_site_url();
?>
<nav class="navbar navbar-custom navbar-default <?php //echo $navbar_style; ?>">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <ul class="navbar-header navbar-left">
            <li><a class="navbar-brand" href="<?php echo $url; ?>" style="font-size:24px; line-height: 29px;">  Rete </a></li>
        </ul>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
        <ul class="nav navbar-nav navbar-center">
            <?php
            echo elgg_view_menu('site', array(
                "sort_by" => "priority"
            ));
            // if (elgg_is_logged_in()) {
            //      /*             hide the Blog menu*/
            //     $item = new ElggMenuItem('blog', elgg_echo('blog:blogs'), 'blog/all');
            //     elgg_register_menu_item('site', $item);
            //     /**show menu */
            //     echo elgg_view_menu('site');
            // }
            if (elgg_is_active_plugin("search")) {
                //echo elgg_view("search/header");
            }
            // echo elgg_view_menu('site_right', array(
            //     "sort_by" => "priority"
            // ));
            ?>
        </ul><!-- /.navbar-collapse -->
        <ul class="nav navbar-nav navbar-right">
            <?php
                $user = elgg_get_logged_in_user_entity();
                if (!$user) {
                    throw new InvalidParameterException('registration:usernamenotvalid');
                }
                $username = $user->username;
                $userProfileIcon = getProfileIcon($user);
                /* *** *** *** */
                
                /* *** *** *** */
            ?>
            <li class="dropdown">
                <a href="#" class='dropdown-toggle' data-toggle='dropdown' role='button'>
                    <img src="<?php echo $userProfileIcon; ?>" style="border-radius: 50%;" alt="Avatar" width="30" height="30"> 
                    <?php echo $username; ?>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Account</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>