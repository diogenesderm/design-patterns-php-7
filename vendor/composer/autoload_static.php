<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda9e29e8166260fb820729e8628da63e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda9e29e8166260fb820729e8628da63e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda9e29e8166260fb820729e8628da63e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitda9e29e8166260fb820729e8628da63e::$classMap;

        }, null, ClassLoader::class);
    }
}
