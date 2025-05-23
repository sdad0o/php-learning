<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea6234c556a4716e449cff3c05e6631a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitea6234c556a4716e449cff3c05e6631a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea6234c556a4716e449cff3c05e6631a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea6234c556a4716e449cff3c05e6631a::$classMap;

        }, null, ClassLoader::class);
    }
}
