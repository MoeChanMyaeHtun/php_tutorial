<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc73d3c7d69c44b68d2f714c137a0d52e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitc73d3c7d69c44b68d2f714c137a0d52e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc73d3c7d69c44b68d2f714c137a0d52e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc73d3c7d69c44b68d2f714c137a0d52e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}