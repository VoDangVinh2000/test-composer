<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d29c57f5296bc09b351557c0294bbed
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Backend\\Testcomposer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Backend\\Testcomposer\\' => 
        array (
            0 => __DIR__ . '/..' . '/back-end/test-composer',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d29c57f5296bc09b351557c0294bbed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d29c57f5296bc09b351557c0294bbed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d29c57f5296bc09b351557c0294bbed::$classMap;

        }, null, ClassLoader::class);
    }
}
