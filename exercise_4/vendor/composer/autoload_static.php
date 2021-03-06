<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6c60d0fee626abe3d7698dcd5a24d93
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Exads\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Exads\\' => 
        array (
            0 => __DIR__ . '/..' . '/exads/ab-test-data/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controller\\DataController' => __DIR__ . '/../..' . '/App/Controller/DataController.php',
        'App\\Util\\Integration' => __DIR__ . '/../..' . '/App/Util/Integration.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Exads\\ABTestData' => __DIR__ . '/..' . '/exads/ab-test-data/src/ABTestData.php',
        'Exads\\ABTestException' => __DIR__ . '/..' . '/exads/ab-test-data/src/ABTestException.php',
        'Exads\\CustomCrypt' => __DIR__ . '/..' . '/exads/ab-test-data/src/CustomCrypt.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6c60d0fee626abe3d7698dcd5a24d93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6c60d0fee626abe3d7698dcd5a24d93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6c60d0fee626abe3d7698dcd5a24d93::$classMap;

        }, null, ClassLoader::class);
    }
}
