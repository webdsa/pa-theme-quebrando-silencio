<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6265d2de70197e11e3c98ad63899b22
{
    public static $files = array (
        '413614dbc06bade22a685c0ebe14027c' => __DIR__ . '/..' . '/wordplate/acf/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WordPlate\\Acf\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WordPlate\\Acf\\' => 
        array (
            0 => __DIR__ . '/..' . '/wordplate/acf/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6265d2de70197e11e3c98ad63899b22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6265d2de70197e11e3c98ad63899b22::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6265d2de70197e11e3c98ad63899b22::$classMap;

        }, null, ClassLoader::class);
    }
}