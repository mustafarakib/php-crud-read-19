<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87dcfafb84e0538b9d6c6bacdd9e5f33
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/BITM/SEIP_161193',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87dcfafb84e0538b9d6c6bacdd9e5f33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87dcfafb84e0538b9d6c6bacdd9e5f33::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}