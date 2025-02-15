<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a0dcddf7a184af1ead2abd1f577b4bc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a0dcddf7a184af1ead2abd1f577b4bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a0dcddf7a184af1ead2abd1f577b4bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a0dcddf7a184af1ead2abd1f577b4bc::$classMap;

        }, null, ClassLoader::class);
    }
}
