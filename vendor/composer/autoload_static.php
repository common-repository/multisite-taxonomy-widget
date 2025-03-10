<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit209ec4c650923c63bdee8fcf3caae985
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lloc\\Mtw\\' => 9,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lloc\\Mtw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit209ec4c650923c63bdee8fcf3caae985::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit209ec4c650923c63bdee8fcf3caae985::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit209ec4c650923c63bdee8fcf3caae985::$classMap;

        }, null, ClassLoader::class);
    }
}
