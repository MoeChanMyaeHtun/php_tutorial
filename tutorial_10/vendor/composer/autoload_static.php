<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc73d3c7d69c44b68d2f714c137a0d52e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc73d3c7d69c44b68d2f714c137a0d52e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc73d3c7d69c44b68d2f714c137a0d52e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc73d3c7d69c44b68d2f714c137a0d52e::$classMap;

        }, null, ClassLoader::class);
    }
}