<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2f2b8eabbc432d9e376950643d869b0
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2f2b8eabbc432d9e376950643d869b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2f2b8eabbc432d9e376950643d869b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2f2b8eabbc432d9e376950643d869b0::$classMap;

        }, null, ClassLoader::class);
    }
}
