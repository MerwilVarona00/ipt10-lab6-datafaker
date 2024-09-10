<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit028b45e1683c6d803d00bf1b24f86c39
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'A' => 
        array (
            'Aufccs\\Ipt10Lab6Faker\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
        'Aufccs\\Ipt10Lab6Faker\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit028b45e1683c6d803d00bf1b24f86c39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit028b45e1683c6d803d00bf1b24f86c39::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit028b45e1683c6d803d00bf1b24f86c39::$classMap;

        }, null, ClassLoader::class);
    }
}
