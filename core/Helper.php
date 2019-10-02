<?php

namespace RacunStudioIcarus;

class Helper
{
    public static function view($path, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        require_once get_template_directory() . '/views/'. $path;
    }
}