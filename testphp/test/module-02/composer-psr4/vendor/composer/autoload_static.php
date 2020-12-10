<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36bce83c8f98079b5f36b92f0878b3ae
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit36bce83c8f98079b5f36b92f0878b3ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36bce83c8f98079b5f36b92f0878b3ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36bce83c8f98079b5f36b92f0878b3ae::$classMap;

        }, null, ClassLoader::class);
    }
}