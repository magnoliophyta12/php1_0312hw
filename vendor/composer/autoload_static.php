<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd274e65d603243785433eb8953cf68a5
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
            0 => __DIR__ . '/../..' . '/src/models',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd274e65d603243785433eb8953cf68a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd274e65d603243785433eb8953cf68a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd274e65d603243785433eb8953cf68a5::$classMap;

        }, null, ClassLoader::class);
    }
}