<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb08a31b6e03a11194ac7613e7d0ccc33
{
    public static $files = array (
        '09d2824c449d03a86ee11619f6e3ca30' => __DIR__ . '/../..' . '/app/helpers/constants.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb08a31b6e03a11194ac7613e7d0ccc33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb08a31b6e03a11194ac7613e7d0ccc33::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb08a31b6e03a11194ac7613e7d0ccc33::$classMap;

        }, null, ClassLoader::class);
    }
}
