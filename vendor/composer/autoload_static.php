<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2ef53b39213198d3571bb8e417e3881
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInitd2ef53b39213198d3571bb8e417e3881' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitd2ef53b39213198d3571bb8e417e3881' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'PageController' => __DIR__ . '/../..' . '/app/controllers/PageController.php',
        'QuerySelector' => __DIR__ . '/../..' . '/core/database/QuerySelector.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Users' => __DIR__ . '/../..' . '/core/Users.php',
        'WeightController' => __DIR__ . '/../..' . '/app/controllers/WeightController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd2ef53b39213198d3571bb8e417e3881::$classMap;

        }, null, ClassLoader::class);
    }
}
