<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea4d5e482720a63dd19d4a573051f776
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pokedex\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pokedex\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea4d5e482720a63dd19d4a573051f776::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea4d5e482720a63dd19d4a573051f776::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea4d5e482720a63dd19d4a573051f776::$classMap;

        }, null, ClassLoader::class);
    }
}
