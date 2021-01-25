<?php
/**
 * Template Functions
 *
 * This file provides template specific custom functions that are
 * not provided by the DokuWiki core.
 * It is common practice to start each function with an underscore
 * to make sure it won't interfere with future core functions.
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

function _tpl_usertools() {
    /* the optional second parameter of tpl_action() switches between a link and a button,
     e.g. a button inside a <li> would be: tpl_action('edit', 0, 'li') */
    tpl_toolsevent('usertools', array(
        'admin'     => tpl_action('admin', 1, 'li', 1),
        'profile'   => tpl_action('profile', 1, 'li', 1),
        'register'  => tpl_action('register', 1, 'li', 1),
        'login'     => tpl_action('login', 1, 'li', 1),
    ));
}

function _tpl_sitetools() {
    tpl_toolsevent('sitetools', array(
        'recent'    => tpl_action('recent', 1, 'li', 1),
        'media'     => tpl_action('media', 1, 'li', 1),
        'index'     => tpl_action('index', 1, 'li', 1),
    ));
}

function _tpl_pagetools() {
    tpl_toolsevent('pagetools', array(
        'edit'      => tpl_action('edit', 1, 'li', 1),
        'revisions' => tpl_action('revisions', 1, 'li', 1),
        'backlink'  => tpl_action('backlink', 1, 'li', 1),
        'subscribe' => tpl_action('subscribe', 1, 'li', 1),
        'revert'    => tpl_action('revert', 1, 'li', 1),
        'top'       => tpl_action('top', 1, 'li', 1),
    ));
}

function _tpl_detailtools() {
    echo tpl_action('mediaManager', 1, 'li', 1);
    echo tpl_action('img_backto', 1, 'li', 1);
}
