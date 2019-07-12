<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit043799f0906ad1e3906284d6f3a808f0
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Envms\\FluentPDO\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Envms\\FluentPDO\\' => 
        array (
            0 => __DIR__ . '/..' . '/lichtner/fluentpdo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit043799f0906ad1e3906284d6f3a808f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit043799f0906ad1e3906284d6f3a808f0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
