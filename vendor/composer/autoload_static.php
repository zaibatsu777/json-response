<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3571c0d81bd63fbaf41df186feb84886
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Devscreencast\\ResponseClass\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Devscreencast\\ResponseClass\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3571c0d81bd63fbaf41df186feb84886::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3571c0d81bd63fbaf41df186feb84886::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3571c0d81bd63fbaf41df186feb84886::$classMap;

        }, null, ClassLoader::class);
    }
}
