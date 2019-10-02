<?php

namespace RacunStudioIcarus;

class Enqueuer
{
    public function start()
    {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_script( 'script', get_template_directory_uri() .'/script.js' );
    }
}