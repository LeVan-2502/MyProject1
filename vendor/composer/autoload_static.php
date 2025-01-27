<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitddf5c5398301c1bbcd73965e7f6a7201
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'Admin\\Woodyshop\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Admin\\Woodyshop\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitddf5c5398301c1bbcd73965e7f6a7201::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitddf5c5398301c1bbcd73965e7f6a7201::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitddf5c5398301c1bbcd73965e7f6a7201::$classMap;

        }, null, ClassLoader::class);
    }
}
