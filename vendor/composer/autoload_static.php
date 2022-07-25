<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c8d4703d508c5da85f8bc4be6d9284a
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c8d4703d508c5da85f8bc4be6d9284a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c8d4703d508c5da85f8bc4be6d9284a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c8d4703d508c5da85f8bc4be6d9284a::$classMap;

        }, null, ClassLoader::class);
    }
}
