<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit085bb9351cfd96da9dd8d4dd15845a89
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Curl' => 
            array (
                0 => __DIR__ . '/..' . '/curl/curl/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit085bb9351cfd96da9dd8d4dd15845a89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit085bb9351cfd96da9dd8d4dd15845a89::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit085bb9351cfd96da9dd8d4dd15845a89::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
