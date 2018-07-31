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

/*****************************************************/
/***********custom all css in this plugin*************/
/*****************************************************/
html{
    min-height:100%;
    position: relative;
}
body {
    margin:0 0 36px 0;
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
    height: 36px;   
    text-align: center;
    background-color: #FFFFFF !important;
    /* padding: 1rem;
    background-color: #efefef; */
    
}
#footer-text{
    margin-top: 10px;

}
form.elgg-search.elgg-search-header{
    visibility: hidden !important;
    /* display: none; */
}
/* *** for navbar header*** */
.navbar.navbar-default.navbar-custom {
    font-family: 'Lato', sans-serif;
    color: #FFFFFF !important;
    background-color: #CC1962;
    /* background-repeat: no-repeat; */
}
.navbar-default .navbar-nav>li>a{
    color: #FFFFFF !important;
    font-weight: normal;
    line-height: 27px;
}
.navbar-left>li>a{
    color: #FFFFFF !important;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
    background-color: transparent;
    text-decoration-line: underline;
    text-decoration-style: solid;
    text-underline-position: under;
    /* padding-bottom: 3px;
    border-bottom: 1px solid #fff; */
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
ul.nav.navbar-nav.navbar>li.elgg-menu-item-blog{
    display: none;
}
/* ul.nav.navbar-nav.navbar>li.elgg-menu-item-thewire{
    position: absolute;
    visibility: hidden;
}
ul.nav.navbar-nav.navbar>li.elgg-menu-item-thewire:after {
  content: 'Aggiornamenti di stato';
  visibility: visible;
} */
/* ******************************************** for nav tabs **************************** */
.nav-tabs {
    border-bottom: 4px solid #033046;
}
.nav-tabs>li{
    min-width: 147px;
    min-height: 40px;
    text-align: center;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
    color: #fff;
    background-color: #033046;
    border: 1px solid #033046;
}
.nav-tabs>li>a {
    margin-right: 0px;
    color: #063A54;
    background-color: #FFFFFF;
    border: 1px solid #8EA5B1;
    border-radius: 0 0 0 0;
    /* Only round the top corners */
    /* -webkit-border-top-left-radius: 8px;
    -webkit-border-top-right-radius: 8px;
    -moz-border-radius-topleft: 8px;
    -moz-border-radius-topright: 8px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px; */

}
.nav-tabs>li:first-child a{
    /* border-top-left-radius: 8px; */
    border-radius: 8px 0 0 0;
}
.nav-tabs>li:last-child a{
    /* border-top-right-radius: 8px; */
    border-radius: 0 8px 0 0;
}
/******************************************All page ***********************************/
.elgg-heading-main{
    font-weight: bold;
    font-size: 24px;
}
.elgg-avatar.elgg-avatar-tiny>a>img{
    border-radius: 50%;
    width: 60px;
    height: 60px;
}
.elgg-image>a>img{
    border-radius: 50%;
    width: 60px;
    height: 60px;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-access{
    display: none;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-edit{
    display: none;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-delete{
    display: none;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-reply{
    display: none;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-previous{
    display: none;
}
.elgg-menu.elgg-menu-entity.elgg-menu-hz.elgg-menu-entity-default>li.elgg-menu-item-thread{
    display: none;
}
#cke_1_top{
    display: none;
}
#cke_1_bottom{
    display: none;
}
#thewire-submit-button{
    color: #fff;
    background-color: #063A54;
    border-color: #063A54;
    margin-left: 87%;
    width: 147px;
    height: 40px;
    margin-bottom: 15px;
}
.elgg-head.clearfix>.elgg-menu.elgg-menu-title.elgg-menu-hz.elgg-menu-title-default>.elgg-menu-item-add>.elgg-menu-content.btn.btn-warning{
    color: #fff;
    background-color: #063A54;
    border-color: #063A54;
    /* margin-left: 87%; */
    width: 147px;
    height: 40px;
    margin-bottom: 15px;
}
#cke_thewire-textarea{
    /* height:100px; */
}
.form-group>#cke_thewire-textarea>.cke_inner.cke_reset>#cke_1_contents{
    hight:100px !important;
}
.elgg-menu.elgg-menu-longtext.elgg-menu-hz.elgg-menu-longtext-default>li.elgg-menu-item-ckeditor-toggler>a.elgg-menu-content.ckeditor-toggle-editor.elgg-longtext-control{
    display: none !important;
}
/******************************************Elgg River ***********************************/
/*header and combo box in one line*/
.elgg-river-layout>.elgg-head.clearfix>.elgg-heading-main>.clearfix{
    display: inline-block;
    overflow: hidden;
    float:right;
    border: 1px solid aqua;
}
.elgg-river-layout>.elgg-head.clearfix>.elgg-heading-main>.clearfix>.elgg-river-selector>span{
    float: left;
    font-size: 14px;
    padding-top: 13px;
    font-family: Lato, Regular;
}
.elgg-river-layout>.elgg-head.clearfix>.elgg-heading-main>.clearfix>.elgg-river-selector>.form-group{
    float: right;
    width: 244px;
    height: 40px;
    margin-bottom: 0px;
}
#elgg-river-selector{
    height: 40px;
}
.elgg-river-layout>.elgg-head.clearfix>.elgg-heading-main{
    overflow: hidden;
    border: 1px solid red;
    margin-bottom: 107px;
}
.elgg-river-layout .elgg-river-selector{
    margin: 0px;
}
/* END */

.elgg-image-block .elgg-image {
    padding-left:5px;
}
.elgg-avatar.elgg-avatar-small>a>img{
    border-radius: 50%;
    width: 60px;
    height: 60px;
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

.elgg-body>.elgg-river-summary{
    font-size: 13px;
}
.elgg-body>.elgg-river-attachments, .elgg-river-message, .elgg-river-content {
    border-left: 0px solid #DCDCDC;
    margin: 8px 0 5px 0;
    padding-left: 0px;
    font-size: 16px;
}
.elgg-body>.elgg-river-timestamp {
    color: #063A54;
    opacity: 0.6;
    font-family: Lato, Regular;
    font-size: 14px;
    font-style: normal;
    line-height: 14px;
    padding-right: 44px;
}
.elgg-body>.elgg-river-like{
    color: #063A54;
    opacity: 0.6;
    font-family: Lato, Regular;
    font-size: 14px;
    font-style: normal;
    line-height: 14px;
    padding-right: 44px;
}
.elgg-body>.elgg-river-comment{
    color: #063A54;
    opacity: 0.6;
    font-family: Lato, Regular;
    font-size: 14px;
    font-style: normal;
    line-height: 14px;
    padding-right: 44px;
}
.elgg-menu.elgg-menu-river.elgg-menu-hz.elgg-menu-river-default>li.elgg-menu-item-comment>a>span:after{
    content: "Commenta";
    color: #063A54;
    opacity: 1.0;
    font-family: Lato;
    font-size: 14px;
    font-weight: Bold;
    line-height: 14px;
    padding-right: 14px;
    padding-left: 10px;
}
.elgg-menu.elgg-menu-river.elgg-menu-hz.elgg-menu-river-default>li.elgg-menu-item-likes>a>span:after{
    content: "Mi Piace";
    color: #063A54;
    opacity: 1.0;
    font-family: Lato;
    font-size: 14px;
    font-weight: Bold;
    line-height: 14px;
    padding-right: 14px;
    padding-left: 10px;
}
.elgg-menu.elgg-menu-river.elgg-menu-hz.elgg-menu-river-default>li.elgg-menu-item-unlike>a>span:after{
    content: "Mi Piace";
    color: #063A54;
    opacity: 1.0;
    font-family: Lato;
    font-size: 14px;
    font-weight: Bold;
    line-height: 14px;
    padding-right: 14px;
    padding-left: 10px;
}
.elgg-menu.elgg-menu-river.elgg-menu-hz.elgg-menu-river-default>li.elgg-menu-item-likes-count{
    display: none;
}
.elgg-menu.elgg-menu-river.elgg-menu-hz.elgg-menu-river-default>li.elgg-menu-item-delete{
    display: none;
}
/* ***********************************for font: Lato. *********************************/
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/S6uyw4BMUTPHjxAwXjeu.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/S6uyw4BMUTPHjx4wXg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}