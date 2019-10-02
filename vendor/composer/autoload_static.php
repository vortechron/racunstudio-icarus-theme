<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae7af7c25cd9b7de13dbf4bd145f5017
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RacunStudioIcarus\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RacunStudioIcarus\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae7af7c25cd9b7de13dbf4bd145f5017::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae7af7c25cd9b7de13dbf4bd145f5017::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
