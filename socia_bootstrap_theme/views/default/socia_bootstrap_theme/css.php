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
/* <style> /**/


    .elgg-widget-content {
        padding:0;
    }
    .elgg-widget-title {
        margin-bottom:0px;
    }
    h3 {
        font-size:19px;
    }
    .elgg-page-header {
        padding:10px 0px 10px 0px;
    }
    .panel-primary .panel-heading a,
    .panel-success .panel-heading a,
    .panel-info .panel-heading a,
    .panel-warning .panel-heading a,
    .panel-danger .panel-heading a {
        color:#ffffff;
    }

    /* ***************************************
            MISC
    *****************************************/
    #dashboard-info {
        border: 1px solid #DCDCDC;
        margin: 0 10px 15px;
    }
    .elgg-sidebar input[type=text],
    .elgg-sidebar input[type=number],
    .elgg-sidebar input[type=password] {
        box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
    }
    .elgg-module .elgg-list-river {
        border-top: none;
    }
    .elgg-module > .elgg-body > .elgg-list, /* margin for group modules */
    .elgg-module .elgg-widget-content > .elgg-list { /* margin for profile and dashboard widgets */
        margin-top: 0;
    }
    /* ***************************************
            ICONS
    *****************************************/
    .elgg-icon-hover-menu-hover,
    .elgg-icon-hover-menu,
    .elgg-icon-hover-menu:hover,
    :focus > .elgg-icon-hover-menu {
        width: 100%;
        height: 100%;
    }
    .elgg-icon-hover-menu-hover:before,
    .elgg-icon-hover-menu:before {
        position: absolute;
        bottom: 0;
        right: 0;
    }
    /* ***************************************
            RESPONSIVE
    *****************************************/
    html {
        font-size: 100%;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }
    .elgg-button-nav {
        display: none;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        color: #FFF;
        float: left;
        padding: 10px 18px;
    }
    .elgg-button-nav:hover {
        color: #FFF;
        text-decoration: none;
        background-color: #60B8F7;
    }
    .elgg-button-nav .elgg-icon-bars {
        font-size: 18px;
        color: #fff;
        vertical-align: middle;
    }
    @media (max-width: 1030px) {
        .elgg-menu-topbar-default > li:first-child a {
            margin-left: 0;
        }
        .elgg-page-footer {
            padding: 0 20px;
        }
    }
    @media (max-width: 820px) {
        .elgg-page-default {
            min-width: 0;
        }
        .elgg-page-body {
            padding: 0;
        }
        .elgg-main {
            padding: 12px 20px 10px;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .elgg-layout-one-sidebar .elgg-main,
        .elgg-layout-two-sidebar .elgg-main {
            width: 100%;
        }
        .elgg-sidebar {
            border-left: none;
            border-top: 1px solid #DCDCDC;
            border-bottom: 1px solid #DCDCDC;
            background-color: #FAFAFA;
            width: 100%;
            float: left;
            padding: 27px 20px 20px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.05) inset;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .elgg-sidebar-alt {
            display: none;
        }
        .elgg-page-default .elgg-page-footer > .elgg-inner {
            border-top: none;
        }
        .elgg-menu-footer {
            float: none;
            text-align: center;
        }
        .elgg-menu-page,
        .elgg-sidebar .elgg-menu-owner-block,
        .elgg-menu-groups-my-status {
            border-bottom: 1px solid #DCDCDC;
        }
        .elgg-menu-page a,
        .elgg-sidebar .elgg-menu-owner-block li a,
        .elgg-menu-groups-my-status li a {
            border-color: #DCDCDC;
            border-style: solid;
            border-width: 1px 1px 0 1px;
            margin: 0;
            padding: 10px;
            background-color: #FFFFFF;
        }
        .elgg-menu-page a:hover,
        .elgg-sidebar .elgg-menu-owner-block li a:hover,
        .elgg-menu-groups-my-status li a:hover,
        .elgg-menu-page li.elgg-state-selected > a,
        .elgg-sidebar .elgg-menu-owner-block li.elgg-state-selected > a,
        .elgg-menu-groups-my-status li.elgg-state-selected > a {
            color: #444;
            background-color: #F0F0F0;
            text-decoration: none;
        }
        .elgg-river-item input[type=text] {
            width: 100%;
        }
        .elgg-river-item input[type=submit] {
            margin: 5px 0 0 0;
        }
        /***** CUSTOM INDEX ******/
        .elgg-col-1of2 {
            float: none;
            width: 100%;
        }
        .prl {
            padding-right: 0;
        }
        /***** WIDGETS ******/
        .elgg-col-1of3,
        .elgg-col-2of3,
        #elgg-widget-col-1,
        #elgg-widget-col-2,
        #elgg-widget-col-3 {
            float: none;
            min-height: 0 !important;
            width: 100%;
        }
        .elgg-module-widget {
            margin: 0 0 15px;
        }
        .custom-index-col1 > .elgg-inner,
        .custom-index-col2 > .elgg-inner {
            padding: 0;
        }
        #dashboard-info {
            margin: 0 0 15px;
        }
    }
    @media (min-width: 767px) {
        .elgg-nav-collapse {
            display: block !important;
        }
    }
    @media (max-width: 766px) {
        .elgg-page-header > .elgg-inner h1 {
            padding-top: 10px;
        }
        .elgg-heading-site, .elgg-heading-site:hover {
            font-size: 1.6em;
        }
        .elgg-button-nav {
            cursor: pointer;
            display: block;
        }
        .elgg-nav-collapse {
            clear: both;
            display: none;
            width: 100%;
        }
        #login-dropdown a {
            padding: 10px 18px;
        }
        .elgg-menu-site {
            float: none;
        }
        .elgg-menu-site > li > ul {
            position: static;
            display: block;
            left: 0;
            margin-left: 0;
            border: none;
            box-shadow: none;
            background: none;
        }
        .elgg-more,
        .elgg-menu-site-more li,
        .elgg-menu-site > li > ul {
            width: auto;
        }
        .elgg-menu-site ul li {
            float: none;
            margin: 0;
        }
        .elgg-more > a {
            border-bottom: 1px solid #294E6B;
        }
        .elgg-menu-site > li {
            border-top: 1px solid #294E6B;
            clear: both;
            float: none;
            margin: 0;
        }
        .elgg-menu-site > li:first-child {
            border-top: none;
        }
        .elgg-menu-site > li > a {
            padding: 10px 18px;
        }
        .elgg-menu-site-more > li > a {
            color: #FFF;
            background: none;
            padding: 10px 18px 10px 30px;
        }
        .elgg-menu-site-more > li:last-child > a,
        .elgg-menu-site-more > li:last-child > a:hover {
            border-radius: 0;
        }
        .elgg-menu-site-more > li.elgg-state-selected > a,
        .elgg-menu-site-more > li > a:hover {
            background-color: #60B8F7;
            color: #FFF;
        }
    }
    @media (max-width: 600px) {
        .groups-profile-fields {
            float: left;
            padding-left: 0;
        }
        #profile-owner-block {
            border-right: none;
            width: auto;
        }
        #profile-details {
            display: block;
            float: left;
        }
        #groups-tools > li {
            width: 100%;
            margin-bottom: 20px;
        }
        #groups-tools > li:nth-child(odd) {
            margin-right: 0;
        }
        #groups-tools > li:last-child {
            margin-bottom: 0;
        }
        .elgg-menu-entity, .elgg-menu-annotation {
            margin-left: 0;
        }
        .elgg-menu-entity > li, .elgg-menu-annotation > li {
            margin-left: 0;
            margin-right: 15px;
        }
        .elgg-subtext {
            float: left;
            margin-right: 15px;
        }
    }

/***********custom all css in this plugin*************/


body {
    position: relative;
    margin: 0;
    padding-bottom: 6rem;
    min-height: 100%;
    font-family: Lato;
    color: #063A54;
    background-color: #F2F4F7 !important;
}
a{
    color: #063A54;
    font-weight: bold;
}
/* *** for footer *** */
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
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    width:100%;
    height:38.5px;   
    text-align: center;
    /* padding: 1rem;
    background-color: #efefef; */
    
}

/* *** for navbar header*** */
.navbar.navbar-default.navbar-custom {
    color: #FFFFFF !important;
    background-color: #12839E;
    /* background-repeat: no-repeat; */
}
.navbar-default .navbar-nav>li>a{
    color: #FFFFFF !important;
}
.navbar-left>li>a{
    color: #FFFFFF !important;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
    background-color: transparent;
    text-decoration: underline;
}
.navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
}
/* .elgg-page-body {
padding: 0 20px;
background: #F2F4F7;
} */

/* *** for nav tabs *** */
.nav-tabs {
    border-bottom: 4px solid #033046;
    
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
    color: #fff;
    background-color: #033046;
}
.nav-tabs>li>a {
    margin-right: 0px;
    color: #063A54;
    background-color: #FFFFFF;
    border: 1px solid #8EA5B1;
}

.elgg-river-layout .elgg-list-river {
    border-top: 0px solid #DCDCDC;
}

.elgg-list {
    margin: 0px 0;
    /* margin-left: 2px; */
    border: 1px solid #8EA5B1;
    background-color: #FFFFFF;
    border-radius: 0px 0px 8px 8px;
    box-shadow: 0px 7px 24px #d5dde1;
}
.elgg-list > li {
    border-bottom: 1px solid #E1E4EA;
}