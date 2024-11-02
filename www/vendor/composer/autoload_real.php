<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8ce44e625f2d1ad16f273d5d23c43915
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

        spl_autoload_register(array('ComposerAutoloaderInit8ce44e625f2d1ad16f273d5d23c43915', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8ce44e625f2d1ad16f273d5d23c43915', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8ce44e625f2d1ad16f273d5d23c43915::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
