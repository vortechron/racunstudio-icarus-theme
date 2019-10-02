<?php

namespace RacunStudioIcarus;

class Router
{
    protected $catch;
    protected $view;

    public function catch($catch)
    {
        $this->catch = $catch;

        return $this;
    }

    public function load($view)
    {
        $this->view = $view;

        add_action('init', function () use ($view) {
            $url_path = trim(parse_url(add_query_arg(array()), PHP_URL_PATH), '/'); 
            $pos = strpos($url_path, $this->catch); 

            if ($pos == $this->catch) {
            // if ( $url_path === 'retail' ) {
               // load the file if exists

               $load = locate_template($view, true);
               if ($load) {
                  exit(); // just exit if template was found and loaded
               }
            }
        });
    }
}