<?php

use RacunStudioIcarus\Bootstrap;

require_once dirname(__FILE__) . '/vendor/autoload.php';

(new Bootstrap)->start();

add_theme_support( 'post-thumbnails' ); 

function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );