<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4c5fd8e84b997ca8f57abbe8f5610850
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

        spl_autoload_register(array('ComposerAutoloaderInit4c5fd8e84b997ca8f57abbe8f5610850', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4c5fd8e84b997ca8f57abbe8f5610850', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4c5fd8e84b997ca8f57abbe8f5610850::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
